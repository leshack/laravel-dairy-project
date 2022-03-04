<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    protected $table = "produce";
    protected $primaryKey = "produce_id";
    protected $fillable = ['amount', 'produce_date', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
