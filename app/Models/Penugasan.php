<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penugasan extends Model
{
    use SoftDeletes;

    protected $table = 'penugasans';

    protected $fillable = [
        'tugas_id',
        'siswa_id',
        'file',
        'nilai',
    ];

    protected $casts = [
        'nilai' => 'integer',
    ];


    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'tugas_id');
    }

 
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
