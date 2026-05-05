<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mapel extends Model
{
    use SoftDeletes;

    protected $table = 'mapels';

    protected $fillable = [
        'nama_mapel',
    ];
    public function pelatihans()
    {
        return $this->hasMany(Pelatihan::class);
    }

    /**
     * Semua materi di mapel ini.
     */
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }

    /**
     * Semua sesi di mapel ini.
     */
    public function sesis()
    {
        return $this->hasMany(Sesi::class);
    }
}
