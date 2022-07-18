<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTask extends Model
{   

    use HasFactory;

    public function supportTaskStatus(){
        return  $this->hasMany(SupportTaskStatus::class);
    }
}
