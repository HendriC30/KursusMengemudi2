<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'Car';
    protected $primarykey = 'id';
    protected $fillable = ['car_name'];
    protected $guarded = [];
}
