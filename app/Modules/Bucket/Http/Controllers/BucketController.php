<?php

namespace App\Modules\Bucket\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Actors\Models\{Bucket, BucketMembers};

class BucketController extends Controller
{
    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Bucket::paginate(10);
        $allItems = Bucket::count();
        // dd($items);
        return view('Bucket::index', compact('items', 'allItems'));
    }
    public function create()
    {
        return view('Bucket::create');
    }
    public function store(Request $request)
    {
        //    dd($request->all());
        $request->validate(
            [
                'bucket_name' => 'required',
                // 'movie_name' => 'required',
                // 'description' => 'required',
                // 'movie_link' => [
                //     'required',
                //     'url',
                //     function ($attribute, $requesturl, $failed) {
                //         if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                //             $failed(trans('Movie link should be youtube url', ['name' => trans('general.url')]));
                //         }
                //     },
                // ],
            ],
            [
                'bucket_name.required' => 'Please enter a bucket name',
                // 'movie_name.required' => 'Please enter a movie name',
                // 'description.required' => 'Please enter a move description',
                // 'movie_link.required' => 'Please enter a movie link',
                // 'movie_link.url' => 'The movie link must be a valid URL.',
            ],
        );
        $bucket = new Bucket();
        $bucket->bucket_name = $request->bucket_name;
        // $bucket->movie_name = $request->movie_name;
        // $bucket->movie_link = $request->movie_link;
        // $bucket->description = $request->description;
        $bucket->status = $request->status == true ? 1 : 0;
        $bucket->save();
        return redirect()->route('admin.bucket.manage');
    }
    public function edit($id)
    {
        $item = Bucket::where('id', $id)->first();
        return view('Bucket::edit', compact('item'));
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'bucket_name' => 'required',
                // 'movie_name' => 'required',
                // 'description' => 'required',
                // 'movie_link' => [
                //     'required',
                //     'url',
                //     function ($attribute, $requesturl, $failed) {
                //         if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                //             $failed(trans('Movie link should be youtube url', ['name' => trans('general.url')]));
                //         }
                //     },
                // ],
            ],
            [
                'bucket_name.required' => 'Please enter a bucket name',
                // 'movie_name.required' => 'Please enter a movie name',
                // 'description.required' => 'Please enter a move description',
                // 'movie_link.required' => 'Please enter a movie link',
                // 'movie_link.url' => 'The movie link must be a valid URL.',
            ],
        );
        $bucket = Bucket::where('id', $id)->first();
        $bucket->bucket_name = $request->bucket_name;
        // $bucket->movie_name = $request->movie_name;
        // $bucket->movie_link = $request->movie_link;
        // $bucket->description = $request->description;
        $bucket->status = $request->status == true ? 1 : 0;
        $bucket->save();
        return redirect()->route('admin.bucket.manage');
    }
    public function details($id)
    {
        $item = Bucket::where('id', $id)->first();
        $bucket_active_members = BucketMembers::where('bucket_id', $id)
            ->where('status', 1)
            ->get();
        $bucket_active_members = BucketMembers::where('bucket_id', $id)
            ->where('status', 1)
            ->get();
        $bucket_all_number = BucketMembers::where('bucket_id', $id)->count();
        $bucket_active_members_number = BucketMembers::where('bucket_id', $id)
            ->where('status', 1)
            ->count();
        $bucket_archive_members = BucketMembers::where('bucket_id', $id)
            ->where('status', 0)
            ->get();
        $bucket_archive_members_number = BucketMembers::where('bucket_id', $id)
            ->where('status', 0)
            ->count();
        $bucket_member_count = BucketMembers::where('bucket_id', $id)->count();
        return view('Bucket::details', compact('item', 'bucket_active_members', 'bucket_archive_members', 'bucket_active_members_number', 'bucket_archive_members_number', 'bucket_all_number'));
    }
    public function delete($id)
    {
        $item = Bucket::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.bucket.manage');
    }

    /**
     * Archive member
     */
    public function archive($id, $bucketId)
    {
        $item = BucketMembers::where('user_id', $id)
            ->where('bucket_id', $bucketId)
            ->first();
        $item->status = 0;
        $item->save();
        return redirect()->route('admin.bucket.manage.details', $bucketId);
    }

    /**
     * Archive in bulk
     */
    public function archiveBulk(Request $request, $bucketId)
    {
        $usersIds = explode(',', $request->user_id);
        $bucket = Bucket::where('id', $bucketId)->first();
//    dd($usersIds);
         foreach ($usersIds as $key => $user_id) {
            $bucket_member = BucketMembers::where('bucket_id',$bucketId)
                ->where('user_id', $user_id)
                ->first();
            if (!isset($bucket_member)) {
                $bucket_member = new BucketMembers();
                $bucket_member->status = 0;
            }
            $bucket_member->user_id = $user_id;
            $bucket_member->bucket_id = $bucket->id;
            $bucket_member->status = 0;
            $bucket_member->save();
        }
        return redirect()->route('admin.bucket.manage.details', $bucketId);
    }

    /**
     * Active member move to shortlist page
     */
    public function unArchive($id, $bucketId)
    {
        $item = BucketMembers::where('user_id', $id)
            ->where('bucket_id', $bucketId)
            ->first();
        $item->status = 1;
        $item->save();
        return redirect()->route('admin.bucket.manage.details', $bucketId);
    }
}
