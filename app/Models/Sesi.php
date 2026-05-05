<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sesi extends Model
{
    use SoftDeletes;

    protected $table = 'sesis';

    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'tanggal',
        'jam',
        'durasi',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'durasi'  => 'integer',
    ];


    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }


    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    /**
     * Transaksi pembayaran sesi ini.
     */
    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
}
