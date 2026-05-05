<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use SoftDeletes;

    protected $table = 'gurus';

    protected $fillable = [
        'user_id',
        'bio',
        'keahlian',
        'rating_avg',
        'saldo',
    ];

    protected $casts = [
        'rating_avg' => 'float',
        'saldo'      => 'decimal:2',
    ];

    /* ------------------------------------------------------------------ */
    /*  RELASI                                                             */
    /* ------------------------------------------------------------------ */

    /**
     * User pemilik profil guru.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Semua pelatihan milik guru.
     */
    public function pelatihans()
    {
        return $this->hasMany(Pelatihan::class);
    }

    /**
     * Semua materi milik guru.
     */
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }

    /**
     * Semua transaksi terkait guru.
     */
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }

    /**
     * Semua penarikan saldo guru.
     */
    public function penarikans()
    {
        return $this->hasMany(Penarikan::class);
    }

    /**
     * Semua rating yang diterima guru.
     */
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
