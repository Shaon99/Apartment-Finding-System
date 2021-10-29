<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentOwner extends Model
{
    protected $table = 'apartment_owner';
    public $timestamps = false;
    protected $primaryKey = 'ID';
}
