<?php

namespace App\Controllers;

use App\Models\Mortu;
use App\Models\Msiswa;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Daftar extends BaseController
{
    private $Msiswa;
    private $Mortu;
    public function __construct()
    {
        $this->Msiswa   = new Msiswa();
        $this->Mortu    = new Mortu();
        helper('form');
        helper('text');
    }
    public function index()
    {
        $data = [
            'title' => 'Siswa',
            'subtitle' => 'Pendaftaran',
        ];
        return view('siswa/view_pendaftaran', $data);
    }
    public function insertSiswa()
    {
        $token = random_string('alnum', 6);
        $mail = new PHPMailer(true);
        $file = $this->request->getFile('siswa_foto');
        $nama_file = $file->getRandomName();
        $data_siswa = [
            'siswa_nisn'            => $this->request->getPost('siswa_nisn'),
            'siswa_username'        => $this->request->getPost('siswa_username'),
            'siswa_password'        => $this->request->getPost('siswa_password'),
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
            'siswa_token'           => $token
        ];
        $file->move('foto_siswa/', $nama_file);
        $this->Msiswa->insert($data_siswa);
        $id_siswa = $this->Msiswa->orderBy('siswa_id', 'DESC')->first()['siswa_id'];
        $data_ortu = [
            'ortu_nama_ayah'        => $this->request->getPost('ortu_nama_ayah'),
            'ortu_penddikan_ayah'   => $this->request->getPost('ortu_penddikan_ayah'),
            'ortu_telepon_ayah'     => $this->request->getPost('ortu_telepon_ayah'),
            'ortu_nama_ibu'         => $this->request->getPost('ortu_nama_ibu'),
            'ortu_pendidikan_ibu'   => $this->request->getPost('ortu_pendidikan_ibu'),
            'ortu_telepon_ibu'      => $this->request->getPost('ortu_telepon_ibu'),
            'ortu_nama_wali'        => $this->request->getPost('ortu_nama_wali'),
            'ortu_pekerjaan_wali'   => $this->request->getPost('ortu_pekerjaan_wali'),
            'ortu_pendidikan_wali'  => $this->request->getPost('ortu_pendidikan_wali'),
            'ortu_telepon_wali'     => $this->request->getPost('ortu_telepon_wali'),
            'ortu_siswa_id'         => $id_siswa,
        ];
        $this->Mortu->insert($data_ortu);
        //email smtp
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'yqhoirilia@gmail.com'; // ubah dengan alamat email Anda
            $mail->Password   = ''; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('yqhoirilia@gmail.com', 'PPDB'); // ubah dengan alamat email Anda
            $mail->addAddress($this->request->getPost('siswa_email'));
            $mail->addReplyTo('yqhoirilia@gmail.com', 'PPDB'); // ubah dengan alamat email Anda

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = 'Token Rahasia PPDB SMPN 2 Lelea';
            $mail->Body    = 'Token pendaftaran untuk bisa login pada website PPDB Sebagai Calon Siswa <br> <b>' . $token . '</b>';

            $mail->send();

            // Pesan Berhasil Kirim Email/Pesan Error
            // session()->setFlashdata('pesan', 'Berhasil mendaftar, silahkan login untuk melengkapi data!!');
            // session()->set('reg_us_id', $this->request->getPost('us_email'));
            return redirect()->to(base_url('/Register/InputToken'));
        } catch (Exception $e) {
            session()->setFlashdata('gagal', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            dd($mail->ErrorInfo);
        }
        return redirect()->to(base_url('daftar'))->with('success', 'Data Berhasil Ditambahkan');
    }
}
