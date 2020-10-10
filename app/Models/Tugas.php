<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $guarded = [];

    public function taskdone()
    {
        return $this->hasOne(TugasSelesai::class, 'id_tugas', 'id');
    }
}
