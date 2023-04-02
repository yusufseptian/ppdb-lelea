<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mgaleri;

class Galeri extends BaseController
{
    private $ModelGaleri = null;
    public function __construct()
    {
        $this->ModelGaleri = new Mgaleri();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Gallery',
            'subtitle' => 'Manajemen Gallery',
            'galeri' => $this->ModelGaleri->findAll()
        ];
        return view('admin/view_galeri', $data);
    }
    public function insertData()
    {
        $file = $this->request->getFile('galeri_foto');
        $nama_file = $file->getRandomName();
        $data = [
            'galeri_nama' => $this->request->getPost('galeri_nama'),

            'galeri_foto' => $nama_file,
        ];
        $file->move('foto_galeri/', $nama_file);
        $this->ModelGaleri->insert($data);

        session()->setFlashdata('tambah', 'Data berhasil ditambahkan..!!');
        return redirect()->to('galeri');
    }

    public function editData($galeri_id)
    {
        // jika foto tidak diganti
        $file = $this->request->getFile('galeri_foto');
        if ($file->getError() == 4) {
            $data = [
                'galeri_id' => $galeri_id,
                'galeri_nama' => $this->request->getPost('galeri_nama'),

            ];
            $this->ModelGaleri->update($galeri_id, $data);
        } else {
            // jika foto diganti
            $galeri = $this->ModelGaleri->where('galeri_id', $galeri_id)->get()->getRowArray();
            if ($galeri['galeri_foto'] != "") {
                unlink('./foto_galeri/' . $galeri['galeri_foto']);
            }
            $nama_file = $file->getRandomName();
            $data = [
                'galeri_id' => $galeri_id,
                'galeri_nama' => $this->request->getPost('galeri_nama'),
                'galeri_foto' => $nama_file,
            ];
            $file->move('foto_galeri/', $nama_file);
            $this->ModelGaleri->update($galeri_id, $data);
        }
        session()->setFlashdata('edit', 'Data berhasil diedit..!!');
        return redirect()->to('galeri');
    }

    public function deleteData($galeri_id)
    {
        $galeri = $this->ModelGaleri->where('galeri_id', $galeri_id)->get()->getRowArray();
        if ($galeri['galeri_foto'] != "") {
            unlink('./foto_galeri/' . $galeri['galeri_foto']);
        }
        $data = [
            'galeri_id' => $galeri_id,
        ];
        $this->ModelGaleri->delete($data);
        session()->setFlashdata('delete', 'Data berhasil dihapus..!!');
        return redirect()->to('galeri');
    }
}
