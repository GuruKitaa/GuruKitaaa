<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;

    protected $table = 'ratings';

    protected $fillable = [
        'siswa_id',
        'guru_id',
        'nilai',
        'komentar',
    ];

    protected $casts = [
        'nilai' => 'integer',
    ];

    /* ------------------------------------------------------------------ */
    /*  RELASI                                                             */
    /* ------------------------------------------------------------------ */

    /**
     * Siswa yang memberikan rating.
     */
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Guru yang di-rating.
     */
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
