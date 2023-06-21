<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mo extends Model
{
    use HasFactory;
    public function brand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }
}
