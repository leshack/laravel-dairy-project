<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produce;

class ProduceController extends Controller
{
    public function all(){
        return view('produce.all');
    }

    public function add(){
        return view('produce.add');
    }
}
