<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galery;

class UploadController extends Controller
{
    public function upload(){
		$gambar = Galery::get();
		return view('upload',['gambar' => $gambar]);
	}
 
	public function process_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$name = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$path = 'images';
		$file->move($path,$name);
 
		Galery::create([
			'file' => $name,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}
}
