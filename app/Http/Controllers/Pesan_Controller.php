<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pesan;

class Pesan_Controller extends Controller
{
    public function index(){
        $title = 'Pesan';
        $dt = Pesan::first();

        return view ('pesan.index',compact('title','dt'));
    }

    public function update (Request $request){
        $data['pesan']          = $request->pesan;
        $data['created_at']     = date('Y-m-d H:i:s');
        $data['updated_at']     = date('Y-m-d H:i:s');

        \DB::table('pesan')->update($data);
        \Session::flash('Sukses', 'Pesan Sudah Diupdate');
        return redirect()->back();
    }

}
