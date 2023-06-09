<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mekskul;

class Ekskul extends BaseController
{
    private $ModelEkskul = null;
    public function __construct()
    {
        $this->ModelEkskul = new Mekskul();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Ekskul',
            'kategori' => $this->kategori_ekskul,
            'subtitle' => 'Manajemen Ekstra Kulikuler',
            'ekskul' => $this->ModelEkskul->findAll()
        ];
        return view('admin/view_ekskul', $data);
    }
    public function insertData()
    {
        $file = $this->request->getFile('eks_foto');
        $nama_file = $file->getRandomName();
        $data = [
            'eks_nama' => $this->request->getPost('eks_nama'),
            'eks_kategori' => $this->request->getPost('eks_kategori'),
            'eks_foto' => $nama_file,
        ];
        $file->move('foto_ekskul/', $nama_file);
        $this->ModelEkskul->insert($data);

        return redirect()->to('ekskul')->with('success', 'Data berhasil ditambahkan');
    }

    public function editData($eks_id)
    {
        // jika foto tidak diganti
        $file = $this->request->getFile('eks_foto');
        if ($file->getError() == 4) {
            $data = [
                'eks_id' => $eks_id,
                'eks_nama' => $this->request->getPost('eks_nama'),
                'eks_kategori' => $this->request->getPost('eks_kategori'),
            ];
            $this->ModelEkskul->update($eks_id, $data);
        } else {
            // jika foto diganti
            $ekskul = $this->ModelEkskul->where('eks_id', $eks_id)->get()->getRowArray();
            if ($ekskul['eks_foto'] != "") {
                unlink('./foto_ekskul/' . $ekskul['eks_foto']);
            }
            $nama_file = $file->getRandomName();
            $data = [
                'eks_id' => $eks_id,
                'eks_nama' => $this->request->getPost('eks_nama'),
                'eks_kategori' => $this->request->getPost('eks_kategori'),
                'eks_foto' => $nama_file,
            ];
            $file->move('foto_ekskul/', $nama_file);
            $this->ModelEkskul->update($eks_id, $data);
        }
        return redirect()->to('ekskul')->with('warning', 'Data berhasil diedit');
    }

    public function deleteData($eks_id)
    {
        $ekskul = $this->ModelEkskul->where('eks_id', $eks_id)->get()->getRowArray();
        if ($ekskul['eks_foto'] != "") {
            unlink('./foto_ekskul/' . $ekskul['eks_foto']);
        }
        $data = [
            'eks_id' => $eks_id,
        ];
        $this->ModelEkskul->delete($data);
        session()->setFlashdata('delete', 'Data berhasil dihapus..!!');
        return redirect()->to('ekskul')->with('danger', 'Data berhasil dihapus');
    }
}
