<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda_Controller extends Controller
{
    public function index(){
    	$title = 'Beranda Aplikasi';

    	return view ('beranda.index', compact('title'));
    }
}
