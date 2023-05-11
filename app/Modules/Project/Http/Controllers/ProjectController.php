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
        $items = Categories::orderBy('id', 'desc')->paginate();

        return view("Project::index",compact('items'));
    }
    public function createProject(){

        $category =  Categories::where('active',1)->get();
        return view('Project::create',compact('category'));
    }
    public function storeProject(Request $request)
    {
        $validator = $request->validate(
            [
                'parent_id' => 'required',
                'project_name' => ['required', new CategoryValidationRule($request->parent_id, '')],
                'description' => 'required',
            ],
            [
                'parent_id.required' => 'Please select category',
                'project_name.required' => 'Please enter name',
                'description.required' => 'Please enter description',
            ]
        );


            $category = new Categories();
            $category->slug = GeneralHelper::seoUrl($request->project_name);
            $category->parent_id = $request->parent_id;

            $category->active = false;
            if ($request->active) {
                $category->active = true;
            }
            $category->save();

            // Trans
            $categoryTrans = new CategoryTrans();

            $categoryTrans->category_id = $category->id;
            $categoryTrans->project_name = $request->project_name;
            $categoryTrans->description = $request->description;
            $categoryTrans->save();
            return redirect()->route('admin.projects');
    }
    public function editProject($id){
        $category =  Categories::where('active',1)->get();
        $catItem =  Categories::find($id);
        return view('Project::edit',compact('category','catItem'));
    }
    public function updateProject(Request $request,$id){
        $validator = $request->validate(
            [
                'parent_id' => 'required',
                'project_name' => ['required', new CategoryValidationRule($request->parent_id, '')],
                'description' => 'required',
            ],
            [
                'parent_id.required' => 'Please select category',
                'project_name.required' => 'Please enter name',
                'description.required' => 'Please enter description',
            ]
        );


            $category =  Categories::find($id);
            $category->slug = GeneralHelper::seoUrl($request->project_name);
            $category->parent_id = $request->parent_id;

            $category->active = false;
            if ($request->active) {
                $category->active = true;
            }
            $category->save();

            // Trans
            $categoryTrans = CategoryTrans::where('category_id', $category->id)->first();

            $categoryTrans->category_id = $category->id;
            $categoryTrans->project_name = $request->project_name;
            $categoryTrans->description = $request->description;
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
    public function deleteProject($id){
        $category =  Categories::find($id);
        CategoryTrans::where('category_id', $id)->delete();
        Categories::where('id', $id)->delete();
        return redirect()
            ->route('admin.projects')
            ->with('message', 'Category deleted successfully.');

    }
}
