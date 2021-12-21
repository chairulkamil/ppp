<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyiapanSoli extends Model
{
    use HasFactory;

    protected $table = 'penyiapan_soli';

    protected $fillable = [
        'obc',
        'fbc',
    ];
}
