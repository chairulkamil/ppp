<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonstruksiUnsoli extends Model
{
    use HasFactory;

    protected $table = 'konstruksi_unsoli';

    protected $fillable = ['konstruksi'];
}
