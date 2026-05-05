<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materi extends Model
{
    use SoftDeletes;

    protected $table = 'materis';

    protected $fillable = [
        'guru_id',
        'mapel_id',
        'judul',
        'file',
    ];

    /* ------------------------------------------------------------------ */
    /*  RELASI                                                             */
    /* ------------------------------------------------------------------ */

    /**
     * Guru pembuat materi.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Mata pelajaran materi.
     */
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    /**
     * Tugas-tugas dalam materi ini.
     */
    public function tugas()
    {
        return $this->hasMany(Tugas::class);
    }
}
