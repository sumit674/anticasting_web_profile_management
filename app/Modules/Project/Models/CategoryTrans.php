<?php

namespace App\Modules\Project\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryTrans extends Model
{
    use HasFactory;
    protected $table ='categories_trans';
    public $timestamps = true;
}
