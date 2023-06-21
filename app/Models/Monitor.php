<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    public function brand(){
        return $this->hasOne(Brand::class,'id','brand_id');
    }
}
