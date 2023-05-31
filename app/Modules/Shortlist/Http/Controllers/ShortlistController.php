<?php

namespace App\Modules\Shortlist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Modules\Shortlist\Models\ProjectMember;
use App\Modules\Project\Models\Categories;
use App\Models\{User, UserProfile};
use Mail;

class ShortlistController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bucketMemberActive = Categories::withCount('members')->where('status', 1)->where('parent_id', 0)->get();
        $bucketMemberArchives = Categories::withCount('members')->where('status', 0)->where('parent_id', 0)->get();
        // active
        $bucketMemberActive->map(function ($actItem, $idx) use ($bucketMemberActive) {
            $bucketMemberActive[$idx]->breakdowns = 0;
            $member = ProjectMember::where('status', 1)
                ->where('category_id', $actItem->id)
                ->first();
            if (isset($member)) {
                $bucketMemberActive[$idx]->breakdowns += 1;
            }
            if (isset($actItem->child)) {
                $bucketMemberActive[$idx]->breakdowns += count($actItem->child);
            }
        });
        // archive
        $bucketMemberArchives->map(function ($actItem, $idx) use ($bucketMemberArchives) {
            $bucketMemberArchives[$idx]->breakdowns = 0;
            $member = ProjectMember::where('status', 0)
                ->where('category_id', $actItem->id)
                ->first();
            if (isset($member)) {
                $bucketMemberArchives[$idx]->breakdowns += 1;
            }
            if (isset($actItem->child)) {
                $bucketMemberArchives[$idx]->breakdowns += count($actItem->child);
            }
        });
        // dd($bucketMemberActive);
        // dd($bucketMemberActive);
         //dd($bucketMemberArchives);
        return view("Shortlist::shortlist-project", compact('bucketMemberActive', 'bucketMemberArchives'));
    }
    public function characterList($pCatId)
    {
        /* $characterActive = ProjectMember::where('status', 1)
           ->select(
               array(
                   'id',
                   'category_id',
                   'status',
                   \DB::raw('COUNT(user_id) as numberOfProfiles'),
                   'updated_at',
                   'user_id',
               )
           )
           ->with('category', function ($query) use($pCatId) {
               $query->where('parent_id',$pCatId);
           })
           ->groupBy('category_id')
           ->get(); */
        $characterActive = Categories::where('status', 1)
            ->where('parent_id', $pCatId)
            ->withCount('members')
            ->get();

        $activeMember = ProjectMember::where('status', 1)
            ->where('category_id', $pCatId)
            ->get();

        $activeList = $characterActive;
        $noCharactor = [];
        if (isset($activeMember) && count($activeMember) > 0) {
            $noCharactor = (object) [
                'id' => $pCatId,
                'slug' => 'no-charactors',
                "members_count" => count($activeMember)
            ];
            $activeList = [$noCharactor, ...$characterActive];
        }
       // dd($activeMember);
        // $bucketMemberActive->map(function ($actItem, $idx) use ($bucketMemberActive) {
        //     $bucketMemberActive[$idx]->breakdowns = 0;
        //     $member = ProjectMember::where('status', 1)
        //         ->where('category_id', $actItem->id)
        //         ->first();
        //     if (isset($member)) {
        //         $bucketMemberActive[$idx]->breakdowns += 1;
        //     }
        //     if (isset($actItem->child)) {
        //         $bucketMemberActive[$idx]->breakdowns += count($actItem->child);
        //     }
        // });
         $characterArchives = Categories::where('status', 0)
            ->where('parent_id', $pCatId)
            ->withCount('members')
            ->get();
         $archiveMember = ProjectMember::where('status', 0)
            ->where('category_id', $pCatId)
            ->get();

         $archiveList = $characterArchives;
         $noCharactor = [];
         if (isset($archiveMember) && count($archiveMember) > 0) {
             $noCharactor = (object) [
                 'id' => $pCatId,
                 'slug' => 'no-charactors',
                 "members_count" => count($archiveMember)
             ];
           $archiveList = [$noCharactor, ...$characterArchives];
         }
        $characterActive = $activeList;
        $characterArchives = $archiveList;
        return view("Shortlist::shortlist-charcter", compact('characterActive', 'characterArchives', 'pCatId'));
    }
    public function allProfileMember($cId)
    {
        // dd($cId);
        $projectProfileMember = ProjectMember::where('category_id', $cId)->with('user')->get();
        return view('Shortlist::profile-member', compact('projectProfileMember','cId'));

    }
    public function destoryProjectMember($cId, $id)
    {

        $deleteMember = ProjectMember::where('id', $id)->first();
        $deleteMember->delete();
        return redirect()->route('admin.show.allMember', $cId)->with('success', "Member deleted.");
    }
    public function archive($id)
    {
        $archiveMember = Categories::where('id', $id)->first();
        // if (isset($archiveMember)) {
        //     foreach ($archiveMember as $member) {
        //         $member->status = 0;
        //         $member->save();
        //     }

        //     return redirect()->route('admin.shortlist');
        // }
        $archiveMember->status = 0;
        $archiveMember->save();
        return redirect()->route('admin.shortlist');

    }
    public function active($id)
    {
        $activeMember = Categories::where('id', $id)->first();
        // if (isset($activeMember)) {

        //     foreach ($activeMember as $member) {

        //         $member->status = 1;
        //         $member->save();
        //     }


        // }
        $activeMember->status = 1;
        $activeMember->save();
        return redirect()->route('admin.shortlist');

    }
    public function activatedCharacter($pCatId, $id)
    {

        $activated = Categories::withCount('members')->where('id', $id)->first();
        $activated->status = 0;
        $activated->save();
        return redirect()->route('admin.character.breakdown', $pCatId);
    }
    public function activeCharacter($pCatId, $id)
    {

        $active = Categories::withCount('members')->where('id', $id)->first();
        $active->status = 1;
        $active->save();
        return redirect()->route('admin.character.breakdown', $pCatId);
    }
    public function sendEmailProfileMember(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        if ($request->has('notes') && $request->notes != '') {

            Mail::send('emails.user-profile', ['FirstName' => $user->first_name, 'LastName' => $user->last_name, 'Notes' => $request->notes], function ($msg) use ($user) {
                $msg->to($user->email)
                    ->subject("Anticasting Profile");
            });
            return response()->json([
                'success' => true,
                'message' => 'Notes has been sent your email.'
            ]);
        }
        return response()->json([
            'error' => true,
            'message' => 'Send email filed please add your notes.'
        ]);

    }

}
