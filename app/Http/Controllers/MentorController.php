<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mentor; // PAY ATTENTION ON THIS GAES

class MentorController extends Controller
{
    public function index()
    {
        $mentor = Mentor::all();

        return view('mentor', ['mentor' => $mentor]);
    }

    public function tambah()
    {
        return view('tambah-mentor');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:30',
            'umur' => 'required|numeric',
            'alamat' => 'required',
        ]);

        Mentor::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect('/mentor');
    }

    public function edit($id)
    {
        $mentor = Mentor::find($id);
        
        return view('edit-mentor', ['mentor' => $mentor]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama' => 'required',
        'umur' => 'required|numeric',
        'alamat' => 'required'
        ]);
    
        $mentor = Mentor::find($id);

        $mentor->nama = $request->nama;
        $mentor->nama = $request->nama;
        $mentor->alamat = $request->alamat;

        $mentor->save();
        return redirect('/mentor');
    }

    public function hapus($id)
    {
        $mentor = Mentor::find($id);
        $mentor->delete();
        return redirect('/mentor');
    }
}
