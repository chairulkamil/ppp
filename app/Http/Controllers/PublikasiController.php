<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Majalah;
use App\Models\PPP;
use App\Models\Newsletter;

class PublikasiController extends Controller
{
    public function majalah(){
        $majalah = Majalah::get();
        return view('majalah.index', compact('majalah'));
    }
    
    public function ppp(){
        $ppp = PPP::get();
        return view('ppp.index', compact('ppp'));
    }

    public function newsletter(){
        $newsletter = Newsletter::get();
        return view('newsletter.index', compact('newsletter'));
    }
}
