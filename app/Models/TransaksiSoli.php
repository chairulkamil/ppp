<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiSoli extends Model
{
    use HasFactory;

    protected $table = 'transaksi_soli';

    protected $fillable = [
        'pre_kualifikasi',
        'request_proposal',
        'bid_award',
        'agreement_signing',
        'financial_close',
    ];
}
