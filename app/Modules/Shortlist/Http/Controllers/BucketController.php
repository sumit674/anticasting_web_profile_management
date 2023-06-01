<?php

namespace App\Modules\Shortlist\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Shortlist\Models\{ProjectMember};
use App\Modules\Project\Models\{Categories, CategoryTrans};

class BucketController extends Controller
{
    //
    public function store(Request $request)
    {

        $category = Categories::where('id', $request->parent_id)->first();
        if ($request->has('child_id') && $request->child_id != '' && $request->child_id != null) {
            $category = Categories::where('id', $request->child_id)->first();

        }
        $users_id = explode(',', $request->user_id);

        foreach ($users_id as $user_id) {
            $bucketmember = ProjectMember::where('category_id', $category->id)
                ->where('user_id', $user_id)
                ->first();
            if (!isset($bucketmember)) {
                $bucketmember = new ProjectMember();
                $bucketmember->category_id = $category->id;
                $bucketmember->status = 1;

            }
            $bucketmember->user_id = $user_id;
            $bucketmember->save();
        }
        return redirect()->back();


    }
}
