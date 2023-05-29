<?php

namespace App\Modules\Project\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\CategoryValidationRule;
use App\Modules\Project\Models\{Categories, CategoryTrans};

class ProjectController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activeItems = Categories::with('trans')->where('status', 1)->where('parent_id', 0)->orderBy('id', 'desc')->paginate();
        $archiveItems = Categories::with('trans')->where('status', 0)->where('parent_id', 0)->orderBy('id', 'desc')->paginate();

        return view("Project::index", compact('activeItems', 'archiveItems'));
    }
    public function createProject()
    {

        //$category =  Categories::where('active',1)->where('parent_id',0)->get();
        return view('Project::create');
    }
    public function storeProject(Request $request)
    {

        $validator = $request->validate(
            [
                'project_name' => 'required|max:30',
            ],
            [
                'project_name.required' => 'Please enter project name',
                'project_name.max' => 'project name should be 30 characters.',
            ]
        );


        $category = new Categories();
        $category->slug = GeneralHelper::seoUrl($request->project_name);
        $category->parent_id = 0;
        $category->active = $request->active == true ? 1 : 0;
        $category->save();
        $categoryTrans = new CategoryTrans();
        $categoryTrans->category_id = $category->id;
        $categoryTrans->project_name = $request->project_name;
        $categoryTrans->save();
        return redirect()->route('admin.projects');
    }
    public function editProject($id)
    {

        $catItem = Categories::find($id);
        return view('Project::edit', compact('catItem'));
    }
    public function updateProject(Request $request, $id)
    {
        $validator = $request->validate(
            [
                 'project_name' => 'required|max:30',
            ],
            [
                'project_name.required' => 'Please enter project name',
                'project_name.max' => 'project name should be 30 characters.',
            ]
        );


        $category = Categories::find($id);
        $category->slug = GeneralHelper::seoUrl($request->project_name);
        $category->parent_id = 0;
        $category->active = false;
        if ($request->active) {
            $category->active = true;
        }
        $category->save();

        // Trans
        $categoryTrans = CategoryTrans::where('category_id', $category->id)->first();
        $categoryTrans->category_id = $category->id;
        $categoryTrans->project_name = $request->project_name;
        $categoryTrans->save();
        return redirect()->route('admin.projects');
    }
    public function archiveProject(Request $request)
    {
        dd($request->all());
        $projectId = explode(',', $request->project_id);
        // dd($bucketId);
        //  $bucket = new Bucket();

        // foreach ($bucket as $key => $bucket_id) {
        //     $bucket->archive = 0;
        //     $bucket->save();
        // }
        // return redirect()->route('admin.bucket.manage.details', $bucketId);
    }
    // public function deleteProject($id)
    // {
    //     $category = Categories::find($id);
    //     CategoryTrans::where('category_id', $id)->delete();
    //     Categories::where('id', $id)->delete();
    //     return redirect()
    //         ->route('admin.projects')
    //         ->with('message', 'Category deleted successfully.');

    // }
    public function archive($id)
    {
        $category = Categories::where('id',$id)->where('parent_id',0)->first();
         if (isset($category)) {
             $category->status = 0;
             $category->save();
             return redirect()->back();
        }
    }
    public function active($id)
    {
        $category = Categories::where('id',$id)->where('parent_id',0)->first();
        if (isset($category)) {
            $category->status = 1;
             $category->save();
            return redirect()->back();
        }
    }


}
