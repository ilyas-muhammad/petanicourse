<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaniWebController extends Controller
{
    // di sini tempat kita menaruh algoritma

    public function index() 
    {
        return view('welcome');
    }

    public function contact()
    {
        $nama = 'Muhammad Ilyas D Jayanto';
        $alamat = 'Tangerang';
        $phone = '08970477xxx';

        return view('contact', [
            'nama' => $nama, 
            'alamat' => $alamat, 
            'phone' => $phone
            ]);
    }

    public function requestData($parameter) 
    {
        return $parameter;
    }

    public function addContact()
    {
        return view('contact-us');
    }

    public function submit(Request $request) 
    {
        $name = $request->nama;
        $address = $request->alamat;
        $phone_number = $request->phone;
        
        return 'Nama: '.$name.', 
        Alamat: '.$address.', 
        No. Telp: '.$phone_number.' ';
    }
}