<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalPenyiapanUnsoli extends Model
{
    use HasFactory;

    protected $table = 'proposal_penyiapan_unsoli';

    protected $fillable = [
        'pengujan_dokumen',
        'evaluasi_dokumen',
        'penyusunan_feasibility',
        'evaluasi_feasibility',
        'approval_letter',
    ];
}
