<?php

namespace App\Http\Controllers;
use App\Pendidikan;
use Illuminate\Http\Request,
    App\Http\Controllers\controller;
use Illuminate\support\Facades\Response;    

class ApiPendidikanController extends Controller
{
    public function getAll()
    {
        $pendidikan = Pendidikan::all();
        return Response::json($pendidikan,201);
    }
}
