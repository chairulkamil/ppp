<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Majalah;

class MajalahController extends Controller
{
    public function upload(){
		$majalah = Majalah::get();
		return view('majalah.upload',['majalah' => $majalah]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'tanggal_terbit' => 'required',
			'judul' => 'required',
			'edisi' => 'required',
			'url' => 'required|file|mimes:pdf|max:20048',
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

		Majalah::create([
			'foto' => $nama_foto,
			'tanggal_terbit' => $request->tanggal_terbit,
			'judul' => $request->judul,
			'edisi' => $request->edisi,
			'url' => $nama_url,
		]);

		return redirect()->back();
	}
}
