<?php

namespace App\Modules\Actors\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Modules\Actors\Models\{Bucket, BucketMembers};
class BucketController extends Controller
{
    //
    public function store(Request $request)
    {
        //  dd($request->all());
        // $bucket = new Bucket();
        // $bucket->bucket_name=$request->bucket_name;
        // $bucket->status = $request->status==true ? 1 : 0;
        // $bucket->save();
        $users_id = explode(',', $request->user_id);
        $bucket = Bucket::where('id', $request->bucket_id)->first();
        foreach ($users_id as $key => $user_id) {
            $bucket_member = BucketMembers::where('bucket_id', $request->bucket_id)
                ->where('user_id', $user_id)
                ->first();
            if (!isset($bucket_member)) {
                $bucket_member = new BucketMembers();
                $bucket_member->status = 1;
             
            }
            $bucket_member->user_id = $user_id;
            $bucket_member->bucket_id = $bucket->id;
            $bucket_member->save();
        }

        return redirect()
            ->route('admin.bucket.manage');
            
    }
}
