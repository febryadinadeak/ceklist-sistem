<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasSelesai extends Model
{
    protected $guarded = [];

    public function task()
    {
        return $this->belongsTo(Tugas::class, 'id_tugas', 'id');
    }
}
