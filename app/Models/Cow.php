<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    protected $table = "cows";
    protected $primaryKey = "cow_id";
    protected $fillable = ['name', 'birth_date', 'gender', 'breed'];
}
