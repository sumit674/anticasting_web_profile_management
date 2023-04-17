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
       
        $items = User::query();
        $items
            ->where('user_type', '0')
            ->FilterAge()
            ->FilterEthnicty()
            ->FilterGender()
            ->FilterProfile()
            ->FilterRating()
            ->with('images')
            ->with('profile');
        if ($request->has('sort') && $request->sort == 'oldest') {
            $items->orderBy('created_at', 'asc');
        } else {
            $items->orderBy('created_at', 'desc');
        }
        //
        $actors = $items->paginate(8);
        $state = State::all();

        // return view('Actors::New-Actor.index', compact('actors', 'state'));
        //  return view('Actors::index', compact('actors', 'state'));
        return view('Actors::profiles.list', compact('actors', 'state'));
    }

    public function filterActorList(Request $request)
    {
        if ($request->ethnicity && $request->ajax()) {
            $input = $request->all();
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

            $actorList = $actors->paginate(6);

            //dd($actors->count());
            if (!$actorList->count()) {
                return response()->json(['success' => false, 'html' => 'Record not found, please change filter option(s).']);
            }
            $returnHTML = view('Actors::New-Actor.filter-actor')
                ->with('actors', $actorList)
                ->render();
            return response()->json(['success' => true, 'html' => $returnHTML]);
        }
        if ($request->gender && $request->ajax()) {
            $input = $request->all();
            //$ethnicity = array($input['ethnicity']);
            $gender = explode('||', $input['gender']);

            $actors = User::query();
            // if(is_array($gender)){

            //     $actors->join('user_profiles', function($join) use($gender)
            //     {
            //         $join->on('users.id', '=', 'user_profiles.user_id')->whereIn('user_profiles.gender', $gender);
            //     });

            // }
            $actors->FilterGender();
            $actorList = $actors->paginate(6);
            //dd($actorList);
            //dd($actors->count());
            if (!$actorList->count()) {
                return response()->json(['success' => false, 'html' => 'Record not found, please change filter option(s).']);
            }
            $returnHTML = view('Actors::New-Actor.filter-actor')
                ->with('actors', $actorList)
                ->render();
            return response()->json(['success' => true, 'html' => $returnHTML]);
        }

        if (($request->min_age || $request->max_age) && $request->ajax()) {
            $actors = User::query();
            $actors->FilterAge();
            $actorList = $actors->paginate(6);
            // dd($actorList);
            //dd($actors->count());
            if (!$actorList->count()) {
                return response()->json(['success' => false, 'html' => 'Record not found, please change filter option(s).']);
            }
            $returnHTML = view('Actors::New-Actor.filter-actor')
                ->with('actors', $actorList)
                ->render();
            return response()->json(['success' => true, 'html' => $returnHTML]);
        }
    }
    public function actorDetail($id)
    {
        $actor = User::with('images')
            ->with('profile')
            ->where('user_type', '0')
            ->where('id', $id)
            ->first();
        //dd($actor);
        return view('Actors::detail-popover', compact(var_name: 'actor'))->render();
    }
    public function actorVideo($id)
    {
        $actor = User::with('introVideo')
            ->with('profile')
            ->where('user_type', '0')
            ->where('id', $id)
            ->first();
        //dd($actor);
        return view('Actors::show-video', compact(var_name: 'actor'))->render();
    }
    public function actorDetails($id)
    {
        $actor = User::with('images')
            ->with('profile')
            ->where('user_type', '0')
            ->where('id', $id)
            ->first();
        return view('Actors::New-Actor.new-details', compact('actor'));
    }
    public function actorProfileDetails($id)
    {
        $item = User::where('id',$id)
            ->with('profile')
            ->with('introVideo')
            ->with('images')
            ->first();
      
        return view('Actors::profiles.detail',compact('item'));
    }
    public function actorRating(Request $request){
        if ($request->user_id && $request->ajax()) {
              $user = User::where('id',$request->user_id)->first();
              $user->rating = $request->rateingValue;
              $user->save();
              return response()->json(['success' => true, 'message' =>'Thanks for your rating added' ]);

        }

    }
}
