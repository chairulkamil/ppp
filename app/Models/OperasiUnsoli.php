<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperasiUnsoli extends Model
{
    use HasFactory;

    protected $table = 'operasi_unsoli';

    protected $fillable = ['operasi'];
}
