<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentOwner extends Model
{
    protected $table = 'sellers';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
