<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';
    public $timestamps = false;
    protected $primaryKey = 'id';
}
