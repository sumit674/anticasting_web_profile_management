<?php

namespace App\Modules\Actors\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Actors\Models\Bucket;
use App\Models\User;

class BucketMembers extends Model
{
    use HasFactory;
    protected $table = 'bucket_members';
    protected $fillable = ['user_id', 'bucket_id', 'status'];
    public function bucket()
    {
        return $this->belongsTo(Bucket::class, 'bucket_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')
            ->where('status', 1);
    }
}
