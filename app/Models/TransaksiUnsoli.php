<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiUnsoli extends Model
{
    use HasFactory;

    protected $table = 'transaksi_unsoli';

    protected $fillable = [
        'prekualifikasi',
        'request_proposal',
        'bid_award',
        'agreement_signing',
        'financial_close'
    ];
}
