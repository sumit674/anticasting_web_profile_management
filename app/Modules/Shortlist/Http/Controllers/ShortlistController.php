<?php

namespace App\Modules\Shortlist\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Project\Models\BucketMembers;

class ShortlistController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bucketMemberActive = BucketMembers::with('category')->with('user')->where('status',1)->get();
         $bucketMemberArchive = BucketMembers::with('category')->with('user')->where('status',0)->get();
         $bucketMemberActiveCount = BucketMembers::with('category')->with('user')->where('status',1)->count();
         $bucketMemberArchiveCount = BucketMembers::with('category')->with('user')->where('status',0)->count();
        return view("Shortlist::index",compact('bucketMemberActive','bucketMemberArchive','bucketMemberActiveCount','bucketMemberArchiveCount'));
    }
    public function archive($id){
         $archiveMember = BucketMembers::where('id',$id)->first();
           if(isset($archiveMember)){
            $archiveMember->status = 0;
            $archiveMember->save();
           return redirect()->route('admin.shortlist');
         }

    }
    public function active($id){
        $archiveMember = BucketMembers::where('id',$id)->first();
          if(isset($archiveMember)){
           $archiveMember->status = 1;
           $archiveMember->save();
          return redirect()->route('admin.shortlist');
        }

   }

}
