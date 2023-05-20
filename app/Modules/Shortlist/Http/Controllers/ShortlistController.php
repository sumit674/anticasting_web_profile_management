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

        //  $bucketMemberActive = ProjectMember::with('category')->with('user')->where('status',1)->get();
        //  $bucketMemberArchive = ProjectMember::with('category')->with('user')->where('status',0)->get();
        //  $bucketMemberActiveCount = ProjectMember::with('category')->with('user')->where('status',1)->count();
        //  $bucketMemberArchiveCount = ProjectMember::with('category')->with('user')->where('status',0)->count();
        // return view("Shortlist::index",compact('bucketMemberActive','bucketMemberArchive','bucketMemberActiveCount','bucketMemberArchiveCount'));
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
             $projectProfileMember = ProjectMember::where('category_id',$cId)->with('user')->get();
             return view('Shortlist::profile-member',compact('projectProfileMember'));

         }
    //     public function archive($id){
//          $archiveMember = ProjectMember::where('id',$id)->first();
//            if(isset($archiveMember)){
//             $archiveMember->status = 0;
//             $archiveMember->save();
//            return redirect()->route('admin.shortlist');
//          }

    //     }
//     public function active($id){
//         $archiveMember = ProjectMember::where('id',$id)->first();
//           if(isset($archiveMember)){
//            $archiveMember->status = 1;
//            $archiveMember->save();
//           return redirect()->route('admin.shortlist');
//         }

    //    }

}
