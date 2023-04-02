<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\{UserProfileImage, UserProfile, IntroVideo};

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     *
     */
    protected $table = 'users';
    protected $fillable = ['name', 'email', 'password', 'first_name', 'last_name', 'date_of_birth', 'gender', 'user_type', 'mobile_no'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function images()
    {
        return $this->hasMany(UserProfileImage::class, 'user_id');
    }
    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id');
    }
    public function introVideo()
    {
        return $this->hasOne(IntroVideo::class, 'user_id');
    }
    public function scopeFilterProfile($query)
    {
        $query->whereHas('profile', function($q) {
            $q->where('user_id', '<>', null);
        });
    }
    /* Ajax Age Filter */
    // public function scopeFilterAge($query)
    // {

    //     if ((isset(request()->min_age) || isset(request()->max_age)) && (!empty(request()->min_age) || !empty(request()->max_age))) {

    //         $maxAge = (int) request()->max_age;
    //         $minAge = (int) request()->min_age;

    //         // // prepare dates for comparison
    //         // // make sure to use Carbon\Carbon in the
    //         // // $dateOfBirth = '1990-08-17';
    //         // // $years = \Carbon\Carbon::parse($dateOfBirth)->age;
    //         // //  dd($years);
    //         $minDate = \Carbon\Carbon::today()->subYears($maxAge);
    //         $maxDate = \Carbon\Carbon::today()
    //             ->subYears($minAge)
    //             ->endOfDay();
    //          $query->whereHas('profile', function ($q) use ($minDate,$maxDate) {
    //             $q->whereBetween('date_of_birth', [$minDate,$maxDate]);
    //          });
    //         // $query->where('ethnicity', 'like', '%'.$queryString.'%');
    //         // $query->whereHas('user', function ($q) use ($queryString) {
    //         //$q->where('name', 'like', '%' . $queryString . '%');
    //         // });
    //     }
    // }

    public function scopeFilterAge($query)
    {
        if (isset($_GET['max_age']) && !empty($_GET['max_age']) && isset($_GET['min_age']) && !empty($_GET['min_age'])) {
            $maxAge = (int) $_GET['max_age'];
            $minAge = (int) $_GET['min_age'];
            $minDate = \Carbon\Carbon::today()->subYears($maxAge);
            $maxDate = \Carbon\Carbon::today()
                ->subYears($minAge)
                ->endOfDay();
            return $query->when('profile', function ($qu) use ($minDate, $maxDate) {
                //   dd($minDate);
                $qu->whereHas('profile', function ($q) use ($minDate, $maxDate) {
                    $q->whereBetween('date_of_birth', [$minDate, $maxDate]);
                });
            });
        }
    }
    /* Ajax Ethnicty Filter */
    // public function scopeFilterEthnicty($query)
    // {

    //     if (isset(request()->ethnicity) && !empty(request()->ethnicity)) {
    //         // $ethnicty = request()->ethnicity;
    //         $ethnicity = explode('||', request()->ethnicity);
    //         if (is_array($ethnicity)) {
    //             return $query->whereHas('profile', function ($q) use ($ethnicity) {
    //                 $q->whereIn('ethnicity', $ethnicity);
    //             });
    //         }
    //     }
    // }
    public function scopeFilterEthnicty($query)
    {
        if (isset($_GET['ethnicity']) && !empty($_GET['ethnicity'])) {
            $ethnicty = $_GET['ethnicity'];
            if (is_array($ethnicty) && isset($ethnicty[0]) && $ethnicty[0] != '') {
                return $query->whereHas('profile', function ($q) use ($ethnicty) {
                    $q->whereIn('ethnicity', $ethnicty);
                });
            }
        }
    }
    /* Ajax Gender Filter */
    // public function scopeFilterGender($query)
    // {
    //     if (isset(request()->gender) && !empty(request()->gender)) {

    //         $gender = explode('||', request()->gender);
    //         // if (is_array($Gender)) {
    //         //     return $query->whereHas('profile', function ($q) use ($Gender) {
    //         //         $q->whereIn('gender', $Gender);
    //         //     });
    //         // }
    //         if (is_array($gender)) {
    //             return $query->whereHas('profile', function ($q) use ($gender) {
    //                 $q->whereIn('gender',$gender);
    //             });
    //         }
    //     }
    // }
    public function scopeFilterGender($query)
    {
        if (isset($_GET['gender']) && !empty($_GET['gender'])) {
            $gender = $_GET['gender'];
            if (is_array($gender) && isset($gender[0]) && $gender[0] != '') {
                // dd($gender);
                return $query->whereHas('profile', function ($q) use ($gender) {
                    $q->whereIn('gender', $gender);
                });
            }
        }
    }
    // public function scopeFilterHeight($query)
    // {
    //     if (isset($_GET['max_height']) && !empty($_GET['max_height']) && isset($_GET['min_height']) && !empty($_GET['min_height'])) {
    //         $maxHeight = (int) $_GET['max_height'];
    //         $minHeight = (int) $_GET['min_height'];
    //         // dd($maxHeight);
    //         $query->whereHas('profile', function ($q) use ($minHeight, $maxHeight) {
    //             $q->whereBetween('height', [$minHeight, $maxHeight]);
    //         });
    //     }
    // }
    // public function scopeFilterStatus($query)
    // {
    //     if (isset($_GET['status']) && !empty($_GET['status'])) {
    //         if ($_GET['status'] == 1) {
    //             $status = 1;
    //         } else {
    //             $status = 0;
    //         }
    //         $query->where('status', $status);
    //     }
    // }
}
