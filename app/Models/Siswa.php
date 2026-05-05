<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Siswa extends Model
{
    use SoftDeletes;

    protected $table = 'siswas';

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function sesis()
    {
        return $this->hasMany(Sesi::class);
    }

    /**
     * Semua penugasan (pengumpulan tugas) siswa.
     */
    public function penugasans()
    {
        return $this->hasMany(Penugasan::class);
    }

    /**
     * Semua rating yang diberikan siswa.
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
