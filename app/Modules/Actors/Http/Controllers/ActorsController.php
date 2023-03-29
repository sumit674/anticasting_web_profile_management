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
        $actors = User::where('user_type','0')->with('images')->with('profile')
            ->FilterAge()
            ->FilterHeight()
            ->FilterGender()
            ->get();
         
        // dd($actors);
        $state = State::all();
       
        return view('Actors::New-Actor.index', compact('actors', 'state'));
    }

    public function filterActorList(Request $request){
        if ($request->ethnicity && $request->ajax()){
            $input =  $request->all();
            //$ethnicity = array($input['ethnicity']);
            // $ethnicity = explode("||",$input['ethnicity']); 
            // dd($ethnicity);
            $actors = User::query();

            $actors->FilterEthnicty();
                // if(is_array($ethnicity)) {
                //     $actors->join('user_profiles', function($join) use($ethnicity) {
                //         $join->on('users.id', '=', 'user_profiles.user_id')->whereIn('user_profiles.ethnicity', $ethnicity);
                //     })->join('user_profiles_image', function($join) use($ethnicity){
                //         $join->on('users.id', '=', 'user_profiles_image.user_id')->select('user_profiles_image.image');
                //     });
                // }

                $actorList = $actors->get(); 

          
            //dd($actors->count());
            if(!$actorList->count()) {
                return response()->json( array('success' => false, 'html'=>'Record not found, please change filter option(s).') );
            }
            $returnHTML = view('Actors::New-Actor.filter-actor')->with('actors', $actorList)->render();
            return response()->json( array('success' => true, 'html'=>$returnHTML) );
        }
        if ($request->gender && $request->ajax()){
            $input =  $request->all();
            //$ethnicity = array($input['ethnicity']);
            $gender = explode("||",$input['gender']); 
            
            $actors = User::query()->wi;

            
                if(is_array($gender)){

                    $actors->join('user_profiles', function($join) use($gender)
                    {
                        $join->on('users.id', '=', 'user_profiles.user_id')->whereIn('user_profiles.gender', $gender);
                    });
                    
                    
                }

                $actorList = $actors->get(); 
            //dd($actorList);
            //dd($actors->count());
            if(!$actorList->count()) {
                return response()->json( array('success' => false, 'html'=>'Record not found, please change filter option(s).') );
            }
            $returnHTML = view('Actors::New-Actor.filter-actor')->with('actors', $actorList)->render();
            return response()->json( array('success' => true, 'html'=>$returnHTML) );
        }
        
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
