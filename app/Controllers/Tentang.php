<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MTentang;
use Exception;

class Tentang extends BaseController
{
    private $db = null;
    private $ModelTentang;
    public function __construct()
    {
        $this->db = \config\Database::connect();
        helper('form');
        $this->ModelTentang = new MTentang();
    }
    public function index()
    {
        $data = [
            'title' => 'Profil Sekolah',
            'subtitle' => 'Manajemen Profil Sekolah',
            'tentang' => $this->ModelTentang->get()->getRowArray(),
        ];
        return view('admin/view_tentang', $data);
    }
    public function editData($profil_id)
    {
        // jika foto tidak diganti
        $file = $this->request->getFile('profil_foto');
        if ($file->getError() == 4) {
            $data = [
                'profil_nama' => $this->request->getPost('profil_nama'),
                'profil_alamat' => $this->request->getPost('profil_alamat'),
                'profil_kepsek' => $this->request->getPost('profil_kepsek'),
                'profil_nip_kepsek' => $this->request->getPost('profil_nip_kepsek'),
                'profil_email' => $this->request->getPost('profil_email'),
                'profil_kontak' => $this->request->getPost('profil_kontak'),
                'profil_npsb' => $this->request->getPost('profil_npsb'),
                'profil_status' => $this->request->getPost('profil_status'),
                'profil_akreditasi' => $this->request->getPost('profil_akreditasi'),
                'profil_visi' => $this->request->getPost('profil_visi'),
                'profil_misi' => $this->request->getPost('profil_misi'),
                'profil_deskripsi' => $this->request->getPost('profil_deskripsi'),
            ];
            $this->ModelTentang->update($profil_id, $data);
        } else {
            // jika foto diganti
            $profil = $this->ModelTentang->where('profil_id', $profil_id)->get()->getRowArray();
            if ($profil['profil_foto'] != "") {
                try {
                    unlink('./foto_sekolah/' . $profil['profil_foto']);
                } catch (Exception $e) {
                }
            }
            $nama_file = $file->getRandomName();
            $data_baru = [
                'profil_id' => $profil_id,
                'profil_nama' => $this->request->getPost('profil_nama'),
                'profil_alamat' => $this->request->getPost('profil_alamat'),
                'profil_kepsek' => $this->request->getPost('profil_kepsek'),
                'profil_nip_kepsek' => $this->request->getPost('profil_nip_kepsek'),
                'profil_email' => $this->request->getPost('profil_email'),
                'profil_kontak' => $this->request->getPost('profil_kontak'),
                'profil_npsb' => $this->request->getPost('profil_npsb'),
                'profil_status' => $this->request->getPost('profil_status'),
                'profil_akreditasi' => $this->request->getPost('profil_akreditasi'),
                'profil_visi' => $this->request->getPost('profil_visi'),
                'profil_misi' => $this->request->getPost('profil_misi'),
                'profil_deskripsi' => $this->request->getPost('profil_deskripsi'),
                'profil_foto' => $nama_file,
            ];
            $file->move('foto_sekolah/', $nama_file);
            $this->ModelTentang->update($profil_id, $data_baru);
        }
        return redirect()->to('tentang')->with('success', 'Data berhasil diedit');
    }
}
