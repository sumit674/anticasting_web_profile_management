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
          $bucketMemberActive = ProjectMember::select('category_id')->distinct()->get();
         return view("Shortlist::index",compact('bucketMemberActive'));
      //  dd($categories);
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
