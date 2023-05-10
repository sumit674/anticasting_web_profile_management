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
    public function trans(){
        return $this->hasOne(CategoryTrans::class,'category_id')->select(['id','project_name','description','category_id']);
    }

}
