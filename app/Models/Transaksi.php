<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use SoftDeletes;

    protected $table = 'transaksis';

    protected $fillable = [
        'guru_id',
        'sesi_id',
        'jumlah',
        'status',
    ];

    protected $casts = [
        'jumlah' => 'decimal:2',
    ];


    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }


    public function sesi()
    {
        return $this->belongsTo(Sesi::class);
    }
}
