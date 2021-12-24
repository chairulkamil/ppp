<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact-us');
    }

    public function sendEmail(Request $request){
        $details = [
            'nama' =>$request->nama,
            'email' =>$request->email,
            'judul' =>$request->judul,
            'msg' =>$request->msg,
        ];

        Mail::to('kimauma16@gmail.com')->send(new ContactMail($details));
        return back()->with('message_sent', 'Pesan Telah Berhasil di Kirim');
    }
}
