<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Verifikasi;


use PDF;

class Verifikasi_Controller extends Controller
{
    public function index(){
        $title = 'Verifikasi';
        $datas = Verifikasi::get();

        return view ('verifikasi.index', compact('title', 'datas'));
    }
    
    public function pdf($id){

            try {
            $datas = Verifikasi::find($id);
            

            $pdf = PDF::loadview('verifikasi.pdf',compact('datas','data'))->setPaper('a4', 'landscape');
            return $pdf->stream();
 
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage().' ! '.$e->getLine());
        }
 
        return redirect()->back();
    }
}
