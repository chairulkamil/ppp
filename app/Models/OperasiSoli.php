<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperasiSoli extends Model
{
    use HasFactory;

    protected $table = 'operasi_soli';

    protected $fillable = [
        'operasi'
    ];
}
