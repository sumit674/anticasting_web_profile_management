<?php

namespace App\Modules\Project\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Project\Models\CategoryTrans;

class Categories extends Model
{
    use HasFactory;
    protected $table ='categories';
    public $timestamps = true;

    protected $with = [
        'parent'
    ];

    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id');
    }

    public function trans(){
        return $this->hasOne(CategoryTrans::class,'category_id')->select(['id','project_name','description','category_id']);
    }

    public function parents()
    {
        return $this->hasMany(Categories::class, 'id', 'parent_id');
    }
    public function child()
    {
        return $this->hasMany(Categories::class, 'parent_id')
            ->where('parent_id','<>',0);
    }

}
