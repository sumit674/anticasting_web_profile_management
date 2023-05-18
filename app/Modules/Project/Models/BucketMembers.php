<?php

namespace App\Modules\Project\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Project\Models\{Bucket,Categories};
use App\Models\User;

class BucketMembers extends Model
{
    use HasFactory;
    protected $table = 'bucket_members';
    protected $fillable = ['user_id', 'bucket_id','category_id','status'];
    public function bucket()
    {
        return $this->belongsTo(Bucket::class, 'bucket_id');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')
            ->where('status', 1);
    }
}
