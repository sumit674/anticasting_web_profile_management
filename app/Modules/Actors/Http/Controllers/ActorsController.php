<?php

namespace App\Modules\Actors\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, State, UserProfile};
use App\Helpers\PaginateCollection;
use DB;

class ActorsController extends Controller
{
    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function listActors(Request $request)
    {
        //    dd($request->all());

        $actors = User::where('user_type','0')->with('images')->with('profile')
            ->FilterAge()
            ->FilterHeight()
            ->FilterEthnicty()
            ->FilterGender()
            ->get();

        // dd($actors);
        $state = State::all();
        return view('Actors::New-Actor.index', compact('actors', 'state'));
    }
    public function actorDetail($id)
    {
       $actor = User::with('images')->with('profile')->where('user_type','0')->where('id', $id)->first();
       //dd($actor);
        return view('Actors::detail', compact(var_name: 'actor'))->render();
    }
    public function actorVideo($id)
    {
       $actor = User::with('introVideo')->with('profile')->where('user_type','0')->where('id', $id)->first();
       //dd($actor);
        return view('Actors::show-video', compact(var_name: 'actor'))->render();
    }
    public function actorNewDetails($id){
      
        $actor = User::with('images')->with('profile')->where('user_type','0')->where('id', $id)->first();
        return view('Actors::New-Actor.new-details',compact('actor'));
    }
}
