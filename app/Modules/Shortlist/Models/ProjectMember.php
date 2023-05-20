<?php

namespace App\Modules\Shortlist\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Project\Models\Categories;
use App\Models\User;

class ProjectMember extends Model
{
    use HasFactory;
    protected $table ='project_members';
    public $timestamps = true;

    // public function parent()
    // {
    //     return $this->belongsTo(Categories::class, 'category_id')
    //         ->where('parent_id', 0);
    // }

    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
