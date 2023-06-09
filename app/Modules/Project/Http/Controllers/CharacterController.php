<?php

namespace App\Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\GeneralHelper;
use App\Rules\CategoryValidationRule;
use App\Http\Controllers\Controller;
use App\Modules\Project\Models\{Categories, CategoryTrans};

class CharacterController extends Controller
{
    //
    public function listCharacter($id)
    {
        $project = Categories::with('trans')->where('id', $id)->first();
        $character = Categories::with('trans')->where('parent_id', $id)->orderBy('id','desc')->paginate();
        return view('Project::character.index', compact('project', 'character'));
    }
    public function createCharacter($id)
    {
        $project = Categories::with('trans')->where('id', $id)->where('parent_id', 0)->first();
        return view('Project::character.create', compact('project'));
    }
    public function storeCharacter(Request $request, $id)
    {

        $validator = $request->validate(
            [
                'character_name' =>'required|max:30',
            ],
            [
                'character_name.required' => 'Please enter character name',
                'character_name.max'=>'character name should be 30 characters.',
            ]
        );
        $categoryProject = Categories::where('id', $id)->where('parent_id', 0)->first();
        $characterCategory = new Categories();
        $characterCategory->slug = GeneralHelper::seoUrl($request->character_name);
        $characterCategory->parent_id = $categoryProject->id;
        // $characterCategory->active = $request->active == true ? 1 : 0;
        $characterCategory->active = 1;
        $characterCategory->status = 1;
        $characterCategory->save();

        $characterCategoryTrans = new CategoryTrans();
        $characterCategoryTrans->category_id = $characterCategory->id;
        $characterCategoryTrans->project_name = $request->character_name;
        $characterCategoryTrans->save();
        return redirect()->route('admin.character', $categoryProject->id);
    }
    public function editCharacter($pId, $id)
    {
        $project = Categories::where('id', $pId)->where('parent_id', 0)->first();
        $character = Categories::where('id', $id)->first();
        return view('Project::character.edit', compact('character', 'project'));
    }
    public function updateCharacter(Request $request, $pId, $id)
    {
      //  dd($request->all());
        $validator = $request->validate(
            [
                'character_name' =>'required|max:30',
            ],
            [
                'character_name.required' => 'Please enter character name',
                'character_name.max'=>'character name should be 30 characters.',
            ]
        );
        $categoryProject = Categories::where('id', $pId)->where('parent_id', 0)->first();
        $character = Categories::where('id', $id)->first();

        $character->slug = GeneralHelper::seoUrl($request->character_name);
        $character->parent_id = $categoryProject->id;
        // $character->active = $request->active == true ? 1 : 0;
        $character->active = 1;
        $character->status = 1;
        $character->save();

        $characterCategoryTrans = CategoryTrans::where('category_id', $character->id)->first();
        $characterCategoryTrans->category_id = $character->id;
        $characterCategoryTrans->project_name = $request->character_name;
        $characterCategoryTrans->save();
        return redirect()->route('admin.character', $categoryProject->id);
    }
    public function deleteCharacter($pId, $id){
        $categoryProject = Categories::where('id', $pId)->where('parent_id', 0)->first();
        $category =  Categories::find($id);
        CategoryTrans::where('category_id', $id)->delete();
        Categories::where('id', $id)->delete();
        return redirect()
            ->route('admin.character', $categoryProject->id)
            ->with('message', 'Category deleted successfully.');
    }
}
