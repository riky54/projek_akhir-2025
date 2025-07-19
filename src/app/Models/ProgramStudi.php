<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $fillable = [
        'nama',
        'kode',
        'fakultas_id',
        'kaprodi',
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
