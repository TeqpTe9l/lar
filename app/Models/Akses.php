<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    use HasFactory;
     public function bran(){
        return $this->hasOne(Bran::class,'id','brand2_id');
    }
}
