<?php

namespace App\Http\Controllers;
use App\Models\sampahbank;

use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function simpan(Request $request){
        $dataDaftar = $request->validate([
            'nama' => 'required',
            'berat' => 'required',
            'kategori' =>'required',
        ]);

        sampahbank::create([
            'id'=> 'dhgsadsadu'
        ]);
        
    }
}
