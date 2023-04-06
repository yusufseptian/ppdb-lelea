<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mprestasi;

class Prestasi extends BaseController
{
    private $Modelprestasi = null;
    public function __construct()
    {
        $this->Modelprestasi = new Mprestasi();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Prestasi',
            'subtitle' => 'Manajemen Prestasi',
            'prestasi' => $this->Modelprestasi->findAll()
        ];
        return view('admin/view_prestasi', $data);
    }
    public function insertData()
    {
        $file = $this->request->getFile('p_foto');
        $nama_file = $file->getRandomName();
        $data = [
            'p_nama' => $this->request->getPost('p_nama'),
            'p_tahun' => $this->request->getPost('p_tahun'),
            'p_tingkat' => $this->request->getPost('p_tingkat'),
            'p_prestasi' => $this->request->getPost('p_prestasi'),
            'p_keterangan' => $this->request->getPost('p_keterangan'),
            'p_foto' => $nama_file,
        ];
        $file->move('foto_prestasi/', $nama_file);
        $this->Modelprestasi->insert($data);

        session()->setFlashdata('tambah', 'Data berhasil ditambahkan..!!');
        return redirect()->to('prestasi');
    }

    public function editData($p_id)
    {
        // jika foto tidak diganti
        $file = $this->request->getFile('p_foto');
        if ($file->getError() == 4) {
            $data = [
                'p_id' => $p_id,
                'p_nama' => $this->request->getPost('p_nama'),
                'p_tahun' => $this->request->getPost('p_tahun'),
                'p_tingkat' => $this->request->getPost('p_tingkat'),
                'p_prestasi' => $this->request->getPost('p_prestasi'),
                'p_keterangan' => $this->request->getPost('p_keterangan'),
            ];
            $this->Modelprestasi->update($p_id, $data);
        } else {
            // jika foto diganti
            $prestasi = $this->Modelprestasi->where('p_id', $p_id)->get()->getRowArray();
            if ($prestasi['p_foto'] != "") {
                unlink('./foto_prestasi/' . $prestasi['p_foto']);
            }
            $nama_file = $file->getRandomName();
            $data = [
                'p_id' => $p_id,
                'p_nama' => $this->request->getPost('p_nama'),
                'p_tahun' => $this->request->getPost('p_tahun'),
                'p_tingkat' => $this->request->getPost('p_tingkat'),
                'p_prestasi' => $this->request->getPost('p_prestasi'),
                'p_keterangan' => $this->request->getPost('p_keterangan'),
                'p_foto' => $nama_file,
            ];
            $file->move('foto_prestasi/', $nama_file);
            $this->Modelprestasi->update($p_id, $data);
        }
        session()->setFlashdata('edit', 'Data berhasil diedit..!!');
        return redirect()->to('prestasi');
    }

    public function deleteData($p_id)
    {
        $prestasi = $this->Modelprestasi->where('p_id', $p_id)->get()->getRowArray();
        if ($prestasi['p_foto'] != "") {
            unlink('./foto_prestasi/' . $prestasi['p_foto']);
        }
        $data = [
            'p_id' => $p_id,
        ];
        $this->Modelprestasi->delete($data);
        session()->setFlashdata('delete', 'Data berhasil dihapus..!!');
        return redirect()->to('prestasi');
    }
}
