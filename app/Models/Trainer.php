<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $table = 'Trainer';
    protected $primarykey = 'id';
    protected $fillable = ['name','phone_number','address'];
    protected $guarded = [];
}
