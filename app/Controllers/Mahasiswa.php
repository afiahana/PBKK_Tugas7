<?php

namespace App\Controllers;

use App\Models\Mahasiswa_model;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mhs = new Mahasiswa_model();
        $data["mahasiswa"] = $mhs->findAll();
        echo view('list_mahasiswa', $data);
    }

    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $validation->setRules(['nrp' => 'required']);
        $validation->setRules(['alamat' => 'required']);
        $validation->setRules(['telepon' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $mhs = new Mahasiswa_model();
            $mhs->insert([
                "nama" => $this->request->getPost('nama'),
                "nrp" => $this->request->getPost('nrp'),
                "alamat" => $this->request->getPost('alamat'),
                "telepon" => $this->request->getPost('telepon')
            ]);
            return redirect('list-mahasiswa');
        }
		
        // tampilkan form create
        echo view('tambah_mahasiswa');
    }
}