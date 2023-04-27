<?php

namespace App\Modules\Bucket\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Actors\Models\Bucket;

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
        return view('Bucket::index', compact('items','allItems'));
    }
    public function create()
    {
        return view('Bucket::create');
    }
    public function store(Request $request)
    {
   
        $request->validate(
            [
                'bucket_name' => 'required',
                'movie_name' => 'required',
                'description' => 'required',
                'movie_link' => [
                    'required',
                    'url',
                    // function ($attribute, $requesturl, $failed) {
                    //     if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                    //         $failed(trans('Movie link should be youtube url', ['name' => trans('general.url')]));
                    //     }
                    // },
                ],
            ],
            [
                'bucket_name.required' => 'Please enter a bucket name',
                'movie_name.required' => 'Please enter a movie name',
                'description.required' => 'Please enter a move description',
                'movie_link.required' => 'Please enter a movie link',
                'movie_link.url' => 'The movie link must be a valid URL.',
            ],
        );
        $bucket = new Bucket();
        $bucket->bucket_name = $request->bucket_name;
        $bucket->movie_name = $request->movie_name;
        $bucket->movie_link = $request->movie_link;
        $bucket->description = $request->description;
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
                'movie_name' => 'required',
                'description' => 'required',
                'movie_link' => [
                    'required',
                    'url',
                    // function ($attribute, $requesturl, $failed) {
                    //     if (!preg_match('/(youtube.com|youtu.be)\/(embed)?(\?v=)?(\S+)?/', $requesturl)) {
                    //         $failed(trans('Movie link should be youtube url', ['name' => trans('general.url')]));
                    //     }
                    // },
                ],
            ],
            [
                'bucket_name.required' => 'Please enter a bucket name',
                'movie_name.required' => 'Please enter a movie name',
                'description.required' => 'Please enter a move description',
                'movie_link.required' => 'Please enter a movie link',
                'movie_link.url' => 'The movie link must be a valid URL.',
            ],
        );
        $bucket = Bucket::where('id', $id)->first();
        $bucket->bucket_name = $request->bucket_name;
        $bucket->movie_name = $request->movie_name;
        $bucket->movie_link = $request->movie_link;
        $bucket->description = $request->description;
        $bucket->save();
        return redirect()->route('admin.bucket.manage');
    }
    public function details($id){
        $item = Bucket::where('id',$id)->first();
       // dd($item);
        return view('Bucket::details',compact('item'));
    }
    public function delete($id)
    {
        $item = Bucket::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.bucket.manage');
    }
}
