<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class OfficeBoy_Controller extends Controller
{
    public function index(){
        $title = 'Master OfficeBoy';
        $data = User::where('role',0)->get();

        return view('office-boy.index',compact ('title','data'));
    }

    public function add(){
        $title = 'Tambah Data OB';

        return view('office-boy.add',compact('title'));

        \Session::flash('sukses' , 'Data Berhasil Ditambah');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'name'=>'required'
        ]);

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['role'] = '0';
        $data['password'] = bcrypt('123');
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        User::insert($data);

        return redirect('office-boy');
    }

    public function edit($id){
        $dt = User::find($id);
        $title = "Edit Data OB $dt->name";

        return view ('office-boy.edit',compact('title','dt'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'email'=>'required',
            'name'=>'required'
        ]);

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        //$data['password'] = bcrypt('123');
        //$data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        User::where('id', $id)->update($data);

        return redirect('office-boy');
    }

    public function delete($id){
        try {
            User::where('id', $id)->delete();

            \Session::flash('Sukses','Data Berhasil Dihapus');
        } catch (\Exception $e) {
            \Session::flash('Gagal',$e->getMessage());
        }

        return redirect('office-boy');
    }
}
