<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Seller;

class Apartment extends Model
{
   
    protected $guard = 'apartments';

    public function seller(){
        return $this->belongsTo(Seller::class,'user_id','id')->withDefault();
    }

}
