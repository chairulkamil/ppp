<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PerencanaanSoli;
use App\Models\PenyiapanSoli;
use App\Models\TransaksiSoli;
use App\Models\KonstruksiSoli;
use App\Models\OperasiSoli;
use App\Models\ProposalPenyiapanUnsoli;
use App\Models\TransaksiUnsoli;
use App\Models\KonstruksiUnsoli;
use App\Models\OperasiUnsoli;

class HomeController extends Controller
{
    public function index(){
        $perencanaanSoli = PerencanaanSoli::get();
        $penyiapanSoli = PenyiapanSoli::get();
        $transaksiSoli = TransaksiSoli::get();
        $konstruksiSoli = KonstruksiSoli::get();
        $operasiSoli = OperasiSoli::get();
        $proposalPenyiapan = ProposalPenyiapanUnsoli::get();
        $transaksiUnsoli = TransaksiUnsoli::get();
        $konstruksiUnsoli = KonstruksiUnsoli::get();
        $operasiUnsoli = OperasiUnsoli::get();
        return view ('home', compact('perencanaanSoli', 'penyiapanSoli', 'transaksiSoli', 'konstruksiSoli', 'operasiSoli', 'proposalPenyiapan', 'transaksiUnsoli', 'konstruksiUnsoli', 'operasiUnsoli'));
    }

}
