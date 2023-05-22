<?php

namespace App\Modules\Shortlist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Shortlist\Models\ProjectMember;
use App\Modules\Project\Models\Categories;

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
            foreach($archiveMember as $member){
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

            foreach($activeMember as $member){

                $member->status = 1;
                $member->save();
            }

            return redirect()->route('admin.shortlist');
        }

    }

}
