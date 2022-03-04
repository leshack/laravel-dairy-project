<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";
    protected $fillable = ['name','desc'];
    protected $primaryKey = "role_id";


    public function users(){
        return $this->hasMany("App\User");
    }
}
