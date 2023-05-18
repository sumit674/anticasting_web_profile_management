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
        $activeItems = Categories::with('trans')->where('parent_id',0)->orderBy('id', 'desc')->paginate();
        $archiveItems = Categories::where('status',0)->orderBy('id', 'desc')->paginate();
        $activeItemsCount = Categories::where('status',1)->count();
        $archiveItemsCount = Categories::where('status',0)->count();
        return view("Project::index",compact('activeItems','archiveItems','activeItemsCount','archiveItemsCount'));
    }
    public function createProject(){

        //$category =  Categories::where('active',1)->where('parent_id',0)->get();
        return view('Project::create');
    }
    public function storeProject(Request $request)
    {

        $validator = $request->validate(
            [
                'project_name' => ['required'],
            ],
            [
                'project_name.required' => 'Please enter project name',
            ]
        );


            $category = new Categories();
            $category->slug = GeneralHelper::seoUrl($request->project_name);
            $category->parent_id = 0;
            $category->active = $request->active==true ? 1 : 0;
            $category->save();
            $categoryTrans = new CategoryTrans();
            $categoryTrans->category_id = $category->id;
            $categoryTrans->project_name = $request->project_name;
            $categoryTrans->save();
            return redirect()->route('admin.projects');
    }
    public function editProject($id){

        $catItem =  Categories::find($id);
        return view('Project::edit',compact('catItem'));
    }
    public function updateProject(Request $request,$id){
        $validator = $request->validate(
            [

              'project_name' => ['required'],
            ],
            [
             'project_name.required' => 'Please enter project name',
            ]
        );


            $category =  Categories::find($id);
            $category->slug = GeneralHelper::seoUrl($request->project_name);
            $category->parent_id=0;
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
    public function deleteProject($id){
        $category =  Categories::find($id);
        CategoryTrans::where('category_id', $id)->delete();
        Categories::where('id', $id)->delete();
        return redirect()
            ->route('admin.projects')
            ->with('message', 'Category deleted successfully.');

    }
    public function archive($id){
        $category =  Categories::where('id',$id)->first();
        if(isset($category)){
            $category->status=0;
            $category->save();
            return redirect()->back();
        }
    }
    public function active($id){
        $category =  Categories::where('id',$id)->first();
        if(isset($category)){
            $category->status=1;
            $category->save();
            return redirect()->back();
        }
    }


}
