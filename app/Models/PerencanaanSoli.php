<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerencanaanSoli extends Model
{
    use HasFactory;
    protected $table = 'perencanaan_soli';

    protected $fillable = [
        'identifikasi',
        'studi_pendahuluan'
    ];
}
