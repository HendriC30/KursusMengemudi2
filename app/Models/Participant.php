<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = 'Participant';
    protected $primarykey = 'id';
    protected $fillable = ['name','phone_number','address'];
    protected $guarded = [];
}
