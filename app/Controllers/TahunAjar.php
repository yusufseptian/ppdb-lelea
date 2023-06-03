<?php

namespace App\Controllers;

use App\Models\MTahunAjar;

class TahunAjar extends BaseController
{
    private $modelTa = null;
    public function __construct()
    {
        $this->modelTa = new MTahunAjar();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'Admin',
            'subtitle' => 'Tahun Ajaran',
            'dt_ta' => $this->modelTa->orderBy('ta_id', 'desc')->findAll()
        ];
        return view('admin/view_tahun_ajar', $data);
    }
    public function insertdata()
    {
        $data = [
            'ta_tahun_ajaran' => $this->request->getPost('ta_tahun_ajaran'),
            'ta_kuota' => $this->request->getPost('ta_kuota'),
            'ta_mulai_daftar' => $this->request->getPost('ta_mulai_daftar'),
            'ta_selesai_daftar' => $this->request->getPost('ta_selesai_daftar'),
            'ta_created_by' => session('log_auth')['akunID']
        ];
        $this->modelTa->insert($data);
        return redirect()->to(base_url('tahunajar'))->with('success', 'Data berhasil ditambah');
    }
    public function editdata($ta_id)
    {
        $dtTA = $this->modelTa->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        if ($ta_id != $dtTA['ta_id']) {
            session()->setFlashdata('danger', 'Hanya dapat merubah tahun ajaran terbaru saja');
            return $this->redirectBack();
        }
        $data = [
            'ta_tahun_ajaran' => $this->request->getPost('ta_tahun_ajaran'),
            'ta_kuota' => $this->request->getPost('ta_kuota'),
            'ta_mulai_daftar' => $this->request->getPost('ta_mulai_daftar'),
            'ta_selesai_daftar' => $this->request->getPost('ta_selesai_daftar'),
            'ta_edited_by' => session('log_auth')['akunID']
        ];
        $this->modelTa->update($ta_id, $data);
        return redirect()->to(base_url('tahunajar'))->with('success', 'Data berhasil ditambah');
    }
    public function deleteData($ta_id)
    {
        $dtTA = $this->modelTa->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajaran masih kosong');
            return $this->redirectBack();
        }
        if ($ta_id != $dtTA['ta_id']) {
            session()->setFlashdata('danger', 'Hanya dapat menghapus tahun ajaran terbaru saja');
        }
        $data = [
            'ta_id' => $ta_id,
        ];
        $this->modelTa->delete($data);
        return redirect()->to(base_url('tahunajar'))->with('danger', 'Data berhasil dihapus');
    }
}
