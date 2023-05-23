<?php

namespace App\Http\Controllers;
use App\Models\SampahModel;

use Illuminate\Http\Request;

class HomeController extends Controller
    {
        public function index() 
        {
            dd(SampahModel::all());
        }
}
