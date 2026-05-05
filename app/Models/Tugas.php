<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tugas extends Model
{
    use SoftDeletes;

    protected $table = 'tugas';

    protected $fillable = [
        'materi_id',
        'judul',
        'deskripsi',
    ];

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }


    public function penugasans()
    {
        return $this->hasMany(Penugasan::class);
    }
}
