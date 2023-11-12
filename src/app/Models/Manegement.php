<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manegement extends Model
{
    use HasFactory;
        protected $fillable = [
            'name',
            'gender',
            'email',
            'postcode',
            'address',
            'buildingname',
            'content'
    ];
}
