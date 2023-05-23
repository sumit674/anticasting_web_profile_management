<?php

namespace App\Modules\Shortlist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Shortlist\Models\ProjectMember;
use App\Modules\Project\Models\Categories;
use App\Models\User;
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
        $bucketMemberActive = ProjectMember::where('status', 1)
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
            ->with('category')
            ->groupBy('category_id')
            ->get();

        $bucketMemberArchives = ProjectMember::where('status', 0)
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
            ->with('category')
            ->groupBy('category_id')
            ->get();

        //  dd($bucketMemberActive);
        return view("Shortlist::index", compact('bucketMemberActive', 'bucketMemberArchives'));
    }
    public function allProfileMember($cId)
    {
        $projectProfileMember = ProjectMember::where('category_id', $cId)->with('user')->get();
        return view('Shortlist::profile-member', compact('projectProfileMember'));

    }
    public function archive($id)
    {
        $archiveMember = ProjectMember::where('category_id', $id)->with('user')->get();
        if (isset($archiveMember)) {
            foreach ($archiveMember as $member) {
                $member->status = 0;
                $member->save();
            }

            return redirect()->route('admin.shortlist');
        }

    }
    public function active($id)
    {
        $activeMember = ProjectMember::where('category_id', $id)->with('user')->get();
        if (isset($activeMember)) {

            foreach ($activeMember as $member) {

                $member->status = 1;
                $member->save();
            }

            return redirect()->route('admin.shortlist');
        }

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