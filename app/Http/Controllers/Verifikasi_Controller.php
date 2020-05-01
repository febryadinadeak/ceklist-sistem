<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Verifikasi;

class Verifikasi_Controller extends Controller
{
    public function index(){
        $title = 'Verifikasi';
        $data = Verifikasi::get();

        return view ('verifikasi.index', compact('title', 'data'));
    }
    
}
