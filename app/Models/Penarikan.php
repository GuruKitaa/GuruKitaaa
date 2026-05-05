<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penarikan extends Model
{
    use SoftDeletes;

    protected $table = 'penarikans';

    protected $fillable = [
        'guru_id',
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
}
