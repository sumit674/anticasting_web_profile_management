<?php

namespace App\Modules\Actors\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Modules\Actors\Models\BucketMembers;
class Bucket extends Model
{
    use HasFactory;
    protected $table = "buckets";
    protected $fillable = ['bucket_name','movie_name','movie_link','description','status'];
    public function bucket_member(){
        return $this->hasOne(BucketMembers::class);
    }
}
