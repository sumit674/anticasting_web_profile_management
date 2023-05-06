<?php

namespace App\Modules\Actors\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{User, State, UserProfile};
use App\Modules\Actors\Models\{Bucket};
use App\Helpers\PaginateCollection;
use Illuminate\Support\Facades\DB;

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
        // $items->with([
        //     'profile' => function ($query) use ($request) {
        //         // $query->orderBy('name');
        //         if ($request->has('sort') && $request->sort == 'age_asc') {
        //             // $items->select(DB::raw('floor(DATEDIFF(CURDATE(), up.date_of_birth) /365) as age'))->orderBy('age', 'asc');
        //             $query->orderBy('date_of_birth', 'asc');
        //         } elseif ($request->has('sort') && $request->sort == 'age_desc') {
        //             $query->orderBy('date_of_birth', 'desc');
        //             // $items->select(DB::raw('floor(DATEDIFF(CURDATE(), up.date_of_birth) /365) as age'))->orderBy('age', 'desc');
        //         }
        //     },
        // ]);
        if ($request->has('sort') && $request->sort == 'oldest') {
            $items->orderBy('users.created_at', 'asc');
        } elseif ($request->has('sort') && $request->sort == 'latest') {
            $items->orderBy('users.created_at', 'desc');
        } elseif ($request->has('sort') && $request->sort == 'age_asc') {
            // $items
            //     ->orWhere(function ($query) {
            //         $query->where('users.age', '>=', 0)->where('users.age', '<', 100);
            //     })
            //     ->orderBy('users.age', 'asc');
            $items->orderBy('users.age','asc');
        } else {
            // $items
            //     ->orWhere(function ($query) {
            //         $query->where('users.age', '<', 100)->where('users.age', '>=', 0);
            //     })
            //     ->orderBy('users.age', 'desc');
              $items->orderBy('users.age','desc');
        }
        /* $items->with('profile', function ($query) use ($request) {
            if ($request->has('age_asc') && $request->sort == 'age_asc') {
                $query->select(DB::raw('floor(DATEDIFF(CURDATE(),date_of_birth) /365) as age'))->orderBy('age', 'asc');
            } elseif ($request->has('age_desc') && $request->sort == 'age_desc') {
                // $query->orderBy('created_at', 'asc');
                $query->select(DB::raw('floor(DATEDIFF(CURDATE(),date_of_birth) /365) as age'))->orderBy('age', 'desc');
            }
        }); */
        /* $items->where(function($q) use ($request) {
            if ($request->has('age_asc') && $request->sort == 'age_asc') {
                $q->orderBy('created_at', 'asc');
            } elseif ($request->has('age_desc') && $request->sort == 'age_desc') {
                $q->orderBy('created_at', 'asc');
            }
        }); */
        // $items->orderBy(function($q) use ($request) {
        //     // return $user->age;
        //     if ($request->has('age_asc') && $request->sort == 'age_asc') {
        //         $q->orderBy('age', 'asc');
        //     } elseif ($request->has('age_desc') && $request->sort == 'age_desc') {
        //         $q->orderBy('age', 'asc');
        //     }
        // });
        /* if ($request->has('sort') && $request->sort == 'descrase_age') {
            $items->with('profile', function ($query) {
                $query
                    ->orderBy('date_of_birth', 'ASC') // or DESC
                    ->orderBy('created_at', 'DESC');
            });
        } else {
            $items->with('profile', function ($query) {
                $query
                    ->orderBy('date_of_birth', 'DESC') // or DESC
                    ->orderBy('created_at', 'ASC');
            });
        } */
        //
        $actors = $items->paginate(8);
        // dd($actors);
        $state = State::all();

        // return view('Actors::New-Actor.index', compact('actors', 'state'));
        //  return view('Actors::index', compact('actors', 'state'));
        $bucket_list = Bucket::select('id', 'bucket_name')
            ->where('status', 1)
            ->get();
        return view('Actors::profiles.list', compact('actors', 'state', 'bucket_list'));
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
        $selectStar = User::where('id',$id)->first();
        return view('Actors::detail-popover', compact('actor','selectStar'))->render();
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
        $item = User::where('id', $id)
            ->with('profile')
            ->with('introVideo')
            ->with('images')
            ->first();
          $selectStar = User::where('id',$id)->first();
        return view('Actors::profiles.detail', compact('item','selectStar'));
    }
    public function actorRating(Request $request)
    {
        if ($request->user_id && $request->ajax()) {
            $user = User::where('id', $request->user_id)->first();
            $user->rating = $request->rateingValue;
            $user->save();
            return response()->json(['success' => true, 'message' => 'Thanks for your rating added']);
        }
    }
    public function actorRemoveRatingStar(Request $request)
    {
        $rating = DB::table('users')
            ->where('id', $request->user_id)
            ->update([
                'rating' => null,
            ]);

        return response()->json(['success' => true, 'message' => $request->user_id]);
    }
}
