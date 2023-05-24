<?php

namespace App\Modules\EmailTempletes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modules\EmailTempletes\Models\EmailTemplateTrans;

class EmailTemplate extends Model
{
    use HasFactory;
    protected $table = 'email_templetes';
    public function trans(){
        return $this->hasOne(EmailTemplateTrans::class,'etemplate_id')->where('status',1);
    }
}
