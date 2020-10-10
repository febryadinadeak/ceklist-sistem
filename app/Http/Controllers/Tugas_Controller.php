<?php

namespace App\Http\Controllers;

use App\Models\TugasSelesai;
use App\Models\Verifikasi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Tugas_Controller extends Controller
{
    public function index()
    {
        $title = 'Data Tugas';

        if (\Auth::user()->role == 1) {
            $data  = Tugas::get();
            return view('admin.index', compact('title', 'data'));
        } else {
            $datas = Tugas::where('status', false)->get();
            return view('tugas.index', compact(['title', 'datas']));
        }

    }

    public function add()
    {
        $title = 'Tambah Data Tugas';
        return view('tugas.add', compact('title'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tugas' => 'required'
        ]);

        $data['nama_tugas'] = $request->nama_tugas;
        $data['status']='0';

        \Session::flash('sukses', 'Data Berhasil Ditambah');

        Tugas::insert($data);

        return redirect('tugas');
    }

    public function edit($id)
    {
        $dt = Tugas::find($id);
        $title = "Edit Nama Tugas $dt->nama_tugas";
        return view('tugas.edit', compact('title', 'dt'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_tugas' => 'required'
        ]);

        $data['nama_tugas'] = $request->nama_tugas;

        Tugas::where('id', $id)->update($data);
        \Session::flash('sukses', 'Data Berhasil Diupdate');

        return redirect('tugas');
    }

    public function delete($id)
    {
        Tugas::where('id', $id)->delete();
        \Session::flash('sukses', 'Data Berhasil Dihapus');

        return redirect('tugas');
    }

    public function selesai(Request $request)
    {
        $arr_input = explode(',', $request->input_checkbox);
        $unique = array_unique($arr_input);
        $diffkeys = array_diff_key($arr_input, $unique);
        $duplicates = array_unique($diffkeys);
        $arr_result = array_diff($arr_input, $duplicates);

        foreach ($arr_result as $value){
            TugasSelesai::create(['id_tugas' => $value]);
        }
        Verifikasi::create();

        return redirect()->route('tugas.index');
    }
}
