<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PPP;

class PPPController extends Controller
{
    public function upload(){
		$ppp = PPP::get();
		return view('ppp.upload',['ppp' => $ppp]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
			'url' => 'required|file|mimes:pdf|max:60048',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$foto = $request->file('foto');
		$url = $request->file('url');

		$nama_foto = time()."_".$foto->getClientOriginalName();
		$nama_url = time()."_".$url->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$tujuan_url = 'data_url';
		$foto->move($tujuan_upload,$nama_foto);
		$url->move($tujuan_url,$nama_url);

		PPP::create([
			'foto' => $nama_foto,
			'judul' => $request->judul,
			'url' => $nama_url,
		]);

		return redirect()->back();
	}
}
