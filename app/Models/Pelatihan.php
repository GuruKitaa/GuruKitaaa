<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelatihan extends Model
{
    use SoftDeletes;

    protected $table = 'pelatihans';

    protected $fillable = [
        'guru_id',
        'mapel_id',
        'judul',
        'deskripsi',
        'harga',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Mata pelajaran pelatihan.
     */
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
