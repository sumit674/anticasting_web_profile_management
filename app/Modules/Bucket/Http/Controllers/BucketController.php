<?php

namespace App\Modules\Bucket\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Project\Models\{Bucket, BucketMembers};

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
        // dd($items);
        return view('Bucket::index', compact('items'));
    }
    public function create()
    {
        return view('Bucket::create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'movie_name' => 'required',
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
                'movie_name.required' => 'Please enter a movie name',
                // 'movie_name.required' => 'Please enter a movie name',
                // 'description.required' => 'Please enter a move description',
                // 'movie_link.required' => 'Please enter a movie link',
                // 'movie_link.url' => 'The movie link must be a valid URL.',
            ],
        );
        // $empData = ['first_name' => $request->fname, 'last_name' => $request->lname, 'email' => $request->email, 'phone' => $request->phone, 'post' => $request->post, 'avatar' => $fileName];

        $bucket = new Bucket();
        $bucket->movie_name = $request->movie_name;
        $bucket->save();
        return response()->json([
            'status' => 200,
        ]);
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $bucket = Bucket::find($id);
        return response()->json($bucket);
    }
    public function update(Request $request)
    {
        $bucket = Bucket::where('id', $request->bucket_id)->first();
        $bucket->movie_name = $request->movie_name;
        $bucket->save();
        return response()->json([
            'status' => 200,
        ]);
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
    public function archiveBulk(Request $request)
    {

        $bucketId = explode(',', $request->bucket_id);
       // dd($bucketId);
         $bucket = new Bucket();

        foreach ($bucket as $key => $bucket_id) {
            $bucket->archive = 0;
            $bucket->save();
        }
        // return redirect()->route('admin.bucket.manage.details', $bucketId);
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
