<?php

namespace App\Controllers;

use App\Models\Mberkas;
use App\Models\Mnilai;
use App\Models\Mortu;
use App\Models\Msiswa;
use App\Models\MTahunAjar;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Daftar extends BaseController
{
    private $Msiswa;
    private $Mortu;
    private $Mnilai;
    private $Mberkas;
    private $MTahunAjar;

    public function __construct()
    {
        $this->Msiswa   = new Msiswa();
        $this->Mortu    = new Mortu();
        $this->Mnilai   = new Mnilai();
        $this->Mberkas  = new Mberkas();
        $this->MTahunAjar = new MTahunAjar();
        helper('form');
        helper('text');
    }
    public function index()
    {
        if (session('log_auth')) {
            if (session('log_auth')['akunRole'] == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {
                return redirect()->to(base_url('/siswa'));
            }
        }
        $dtTA = $this->MTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajar masih kosong');
            return $this->redirectBack();
        }
        if (!$this->MTahunAjar->isOpened()) {
            session()->setFlashdata('danger', 'Bukan dalam masa pendaftaran');
            return $this->redirectBack();
        }
        $data = [
            'title' => 'Pendaftaran',
            'subtitle' => 'Pendaftaran',
            'agama' => $this->agama,
        ];
        return view('siswa/view_pendaftaran', $data);
    }
    public function insertSiswa()
    {
        $dtTA = $this->MTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajar masih kosong');
            return $this->redirectBack();
        }
        if (!$this->MTahunAjar->isOpened()) {
            session()->setFlashdata('danger', 'Bukan dalam masa pendaftaran');
            return $this->redirectBack();
        }
        $token = random_string('alnum', 6);
        $mail = new PHPMailer(true);
        $file = $this->request->getFile('siswa_foto');
        $nama_file = $file->getRandomName();
        $data_siswa = [
            'siswa_nisn'            => $this->request->getPost('siswa_nisn'),
            'siswa_nama'            => $this->request->getPost('siswa_nama'),
            'siswa_sekolah_asal'    => $this->request->getPost('siswa_sekolah_asal'),
            'siswa_password'        => md5((string)$this->request->getPost('siswa_password')),
            'siswa_jk'              => $this->request->getPost('siswa_jk'),
            'siswa_tempat_lahir'    => $this->request->getPost('siswa_tempat_lahir'),
            'siswa_tgl_lahir'       => $this->request->getPost('siswa_tgl_lahir'),
            'siswa_agama'           => $this->request->getPost('siswa_agama'),
            'siswa_status'          => $this->request->getPost('siswa_status'),
            'siswa_alamat'          => $this->request->getPost('siswa_alamat'),
            'siswa_telepon'         => $this->request->getPost('siswa_telepon'),
            'siswa_email'           => $this->request->getPost('siswa_email'),
            'siswa_foto'            => $nama_file,
            'siswa_jarak'           => $this->request->getPost('siswa_jarak'),
            'siswa_token'           => $token,
            'siswa_ta_id'           => $dtTA['ta_id'],
            'siswa_status_pendaftaran' => 'Terdaftar'
        ];
        $file->move('foto_siswa/', $nama_file);
        $this->Msiswa->insert($data_siswa);
        $id_siswa = $this->Msiswa->orderBy('siswa_id', 'DESC')->first()['siswa_id'];
        $data_ortu = [
            'ortu_nama_ayah'        => $this->request->getPost('ortu_nama_ayah'),
            'ortu_pendidikan_ayah'   => $this->request->getPost('ortu_pendidikan_ayah'),
            'ortu_telepon_ayah'     => $this->request->getPost('ortu_telepon_ayah'),
            'ortu_pekerjaan_ayah'     => $this->request->getPost('ortu_pekerjaan_ayah'),
            'ortu_nama_ibu'         => $this->request->getPost('ortu_nama_ibu'),
            'ortu_pendidikan_ibu'   => $this->request->getPost('ortu_pendidikan_ibu'),
            'ortu_telepon_ibu'      => $this->request->getPost('ortu_telepon_ibu'),
            'ortu_pekerjaan_ibu'      => $this->request->getPost('ortu_pekerjaan_ibu'),
            'ortu_nama_wali'        => $this->request->getPost('ortu_nama_wali'),
            'ortu_pekerjaan_wali'   => $this->request->getPost('ortu_pekerjaan_wali'),
            'ortu_pendidikan_wali'  => $this->request->getPost('ortu_pendidikan_wali'),
            'ortu_telepon_wali'     => $this->request->getPost('ortu_telepon_wali'),
            'ortu_siswa_id'         => $id_siswa,
        ];
        $this->Mortu->insert($data_ortu);
        session()->set('regist_siswa', $id_siswa);
        //email smtp
        return redirect()->to('daftar/berkas')->with('success', 'Anda Berhasil Mendaftar');
    }
    public function Berkas()
    {
        $dtTA = $this->MTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajar masih kosong');
            return $this->redirectBack();
        }
        if (!$this->MTahunAjar->isOpened()) {
            session()->setFlashdata('danger', 'Bukan dalam masa pendaftaran');
            return $this->redirectBack();
        }
        $data = [
            'title' => 'Pendaftaran',
            'subtitle' => 'Pendaftaran',
        ];
        return view('siswa/view_berkas', $data);
    }
    public function insertBerkas()
    {
        $dtTA = $this->MTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajar masih kosong');
            return $this->redirectBack();
        }
        if (!$this->MTahunAjar->isOpened()) {
            session()->setFlashdata('danger', 'Bukan dalam masa pendaftaran');
            return $this->redirectBack();
        }
        //get berkas
        $file_ijazah = $this->request->getFile('berkas_ijazah');
        $file_akta = $this->request->getFile('berkas_akta');
        $file_kk = $this->request->getFile('berkas_kk');
        $file_ktp_ortu = $this->request->getFile('berkas_ktp_ortu');
        $file_rapor = $this->request->getFile('berkas_rapor');
        $file_surat_mutlak = $this->request->getFile('berkas_surat_mutlak');
        $file_ijazah_mda = $this->request->getFile('berkas_ijazah_mda');

        //enkripsi berkas
        $ijazah = $file_ijazah->getRandomName();
        $akta = $file_akta->getRandomName();
        $kk = $file_kk->getRandomName();
        $ktp_ortu = $file_ktp_ortu->getRandomName();
        $rapor = $file_rapor->getRandomName();
        $surat_mutlak = $file_surat_mutlak->getRandomName();
        $ijazah_mda = $file_ijazah_mda->getRandomName();
        //input data nilai
        $data_nilai = [
            "nilai_ipa" => $this->request->getPost('nilai_ipa'),
            "nilai_mtk" => $this->request->getPost('nilai_mtk'),
            "nilai_indo" => $this->request->getPost('nilai_indo'),
            "nilai_siswa_id" => session('regist_siswa')
        ];
        $this->Mnilai->insert($data_nilai);

        //input data berkas
        $data_berkas = [
            "berkas_ijazah" => $ijazah,
            "berkas_akta" => $akta,
            "berkas_kk" => $kk,
            "berkas_ktp_ortu" => $ktp_ortu,
            "berkas_rapor" => $rapor,
            "berkas_surat_mutlak" => $surat_mutlak,
            "berkas_ijazah_mda" => $ijazah_mda,
            "berkas_siswa_id" => session('regist_siswa')
        ];
        //upload berkas ke folder
        $file_ijazah->move('ijazah_siswa/', $ijazah);
        $file_akta->move('akta_siswa/', $akta);
        $file_kk->move('kk_siswa/', $kk);
        $file_ktp_ortu->move('ktp_ortu_siswa/', $ktp_ortu);
        $file_rapor->move('rapor_siswa/', $rapor);
        $file_surat_mutlak->move('surat_mutlak_siswa/', $surat_mutlak);
        $file_ijazah_mda->move('ijazah_mda_siswa/', $ijazah_mda);
        $this->Mberkas->insert($data_berkas);
        session()->remove('regist_siswa');
        return redirect()->to('auth')->with('success', 'Anda Berhasil Mendaftar. Silahkan login');
    }

    public function update()
    {
        $dtTA = $this->MTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('danger', 'Data tahun ajar masih kosong');
            return $this->redirectBack();
        }
        if (!$this->MTahunAjar->isOpened()) {
            session()->setFlashdata('danger', 'Bukan dalam masa pendaftaran');
            return $this->redirectBack();
        }
        $idSiswa = session('log_auth')['akunID'];
        $data_siswa = [
            'siswa_nama'            => $this->request->getPost('siswa_nama'),
            'siswa_sekolah_asal'    => $this->request->getPost('siswa_sekolah_asal'),
            'siswa_jk'              => $this->request->getPost('siswa_jk'),
            'siswa_tempat_lahir'    => $this->request->getPost('siswa_tempat_lahir'),
            'siswa_tgl_lahir'       => $this->request->getPost('siswa_tgl_lahir'),
            'siswa_agama'           => $this->request->getPost('siswa_agama'),
            'siswa_status'          => $this->request->getPost('siswa_status'),
            'siswa_alamat'          => $this->request->getPost('siswa_alamat'),
            'siswa_telepon'         => $this->request->getPost('siswa_telepon'),
            'siswa_email'           => $this->request->getPost('siswa_email'),
            'siswa_jarak'           => $this->request->getPost('siswa_jarak'),
            'siswa_alasan_ditolak'  => null,
            'siswa_status_pendaftaran' => 'Terdaftar'
        ];
        $this->Msiswa->update($idSiswa, $data_siswa);
        $data_ortu = [
            'ortu_nama_ayah'        => $this->request->getPost('ortu_nama_ayah'),
            'ortu_pendidikan_ayah'   => $this->request->getPost('ortu_pendidikan_ayah'),
            'ortu_telepon_ayah'     => $this->request->getPost('ortu_telepon_ayah'),
            'ortu_pekerjaan_ayah'     => $this->request->getPost('ortu_pekerjaan_ayah'),
            'ortu_nama_ibu'         => $this->request->getPost('ortu_nama_ibu'),
            'ortu_pendidikan_ibu'   => $this->request->getPost('ortu_pendidikan_ibu'),
            'ortu_telepon_ibu'      => $this->request->getPost('ortu_telepon_ibu'),
            'ortu_pekerjaan_ibu'      => $this->request->getPost('ortu_pekerjaan_ibu'),
            'ortu_nama_wali'        => $this->request->getPost('ortu_nama_wali'),
            'ortu_pekerjaan_wali'   => $this->request->getPost('ortu_pekerjaan_wali'),
            'ortu_pendidikan_wali'  => $this->request->getPost('ortu_pendidikan_wali'),
            'ortu_telepon_wali'     => $this->request->getPost('ortu_telepon_wali')
        ];
        $dtOrtu = $this->Mortu->where('ortu_siswa_id', $idSiswa)->first();
        $this->Mortu->update($dtOrtu['ortu_id'], $data_ortu);
        $data_nilai = [
            "nilai_ipa" => $this->request->getPost('nilai_ipa'),
            "nilai_mtk" => $this->request->getPost('nilai_mtk'),
            "nilai_indo" => $this->request->getPost('nilai_indo')
        ];
        $dtNilai = $this->Mnilai->where('nilai_siswa_id', $idSiswa)->first();
        $this->Mnilai->update($dtNilai['nilai_id'], $data_nilai);
        //get berkas
        $file_ijazah = $this->request->getFile('berkas_ijazah');
        $file_akta = $this->request->getFile('berkas_akta');
        $file_kk = $this->request->getFile('berkas_kk');
        $file_ktp_ortu = $this->request->getFile('berkas_ktp_ortu');
        $file_rapor = $this->request->getFile('berkas_rapor');
        $file_surat_mutlak = $this->request->getFile('berkas_surat_mutlak');
        $file_ijazah_mda = $this->request->getFile('berkas_ijazah_mda');
        //enkripsi berkas
        $ijazah = $file_ijazah->getRandomName();
        $akta = $file_akta->getRandomName();
        $kk = $file_kk->getRandomName();
        $ktp_ortu = $file_ktp_ortu->getRandomName();
        $rapor = $file_rapor->getRandomName();
        $surat_mutlak = $file_surat_mutlak->getRandomName();
        $ijazah_mda = $file_ijazah_mda->getRandomName();
        $dtBerkas = $this->Mberkas->where('berkas_siswa_id', $idSiswa)->first();
        try {
            unlink('ijazah_siswa/' . $dtBerkas['berkas_ijazah']);
        } catch (Exception $e) {
        }
        try {
            unlink('akta_siswa/' . $dtBerkas['berkas_akta']);
        } catch (Exception $e) {
        }
        try {
            unlink('kk_siswa/' . $dtBerkas['berkas_kk']);
        } catch (Exception $e) {
        }
        try {
            unlink('ktp_ortu_siswa/' . $dtBerkas['berkas_ktp_ortu']);
        } catch (Exception $e) {
        }
        try {
            unlink('rapor_siswa/' . $dtBerkas['berkas_rapor']);
        } catch (Exception $e) {
        }
        try {
            unlink('surat_mutlak_siswa/' . $dtBerkas['berkas_surat_mutlak']);
        } catch (Exception $e) {
        }
        try {
            unlink('ijazah_mda_siswa/' . $dtBerkas['berkas_ijazah_mda']);
        } catch (Exception $e) {
        }
        $data_berkas = [
            "berkas_ijazah" => $ijazah,
            "berkas_akta" => $akta,
            "berkas_kk" => $kk,
            "berkas_ktp_ortu" => $ktp_ortu,
            "berkas_rapor" => $rapor,
            "berkas_surat_mutlak" => $surat_mutlak,
            "berkas_ijazah_mda" => $ijazah_mda
        ];
        //upload berkas ke folder
        $file_ijazah->move('ijazah_siswa/', $ijazah);
        $file_akta->move('akta_siswa/', $akta);
        $file_kk->move('kk_siswa/', $kk);
        $file_ktp_ortu->move('ktp_ortu_siswa/', $ktp_ortu);
        $file_rapor->move('rapor_siswa/', $rapor);
        $file_surat_mutlak->move('surat_mutlak_siswa/', $surat_mutlak);
        $file_ijazah_mda->move('ijazah_mda_siswa/', $ijazah_mda);
        $this->Mberkas->update($dtBerkas['berkas_id'], $data_berkas);
        session()->setFlashdata('success', 'Data anda berhasil diubah. Silahkan pantau informasi selanjutnya melalui akun anda');
        return $this->redirectBack();
    }
}
