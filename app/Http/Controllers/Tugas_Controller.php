<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;

class Tugas_Controller extends Controller
{
    public function index (){
        $title = 'Data Tugas';
        $data  = Tugas::get();

        //if else pertama
        if(\Auth::user()->role==1){
            return view ('admin.index', compact ('title','data'));
            }else{
            return view ('tugas.index' ,compact('title','data'));
            }

        if(\Auth::user()->role ==1){
            $data = Tugas::where('status',true)->get();
            return view('admin.index', compact ('title','data'));
        }
        else{
            $data = Tugas::where('status',false)->get();
            return view('tugas.index',compact ('title', 'data'));
        }

        return view ('admin.index' , compact ('title' , 'data'));
    }

    public function add(){
        $title = 'Tambah Data Tugas';

        return view('tugas.add' , compact('title'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_tugas'=> 'required'
        ]);

        $data['nama_tugas'] = $request->nama_tugas;

        \Session::flash('sukses' , 'Data Berhasil Ditambah');

        Tugas::insert($data);

        return redirect ('tugas');
    }

    public function edit($id){
        $dt = Tugas::find($id);
        $title = "Edit Nama Tugas $dt->nama_tugas";

        return view ('tugas.edit', compact ('title', 'dt'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'nama_tugas'=> 'required'
        ]);

        $data['nama_tugas'] = $request->nama_tugas;

        Tugas::where('id',$id)->update($data);
        \Session::flash('sukses' , 'Data Berhasil Diupdate');

        return redirect('tugas');
    }

    public function delete($id){
        Tugas::where('id',$id)->delete();
        \Session::flash('sukses' , 'Data Berhasil Dihapus');

        return redirect('tugas');
    }

    public function selesai(){
        Tugas::update();
    }
}