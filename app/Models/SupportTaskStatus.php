<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTaskStatus extends Model
{
    use HasFactory;
    
    public function supportTask(){
        return $this->belongsTo(SupportTask::class);
    }
}
