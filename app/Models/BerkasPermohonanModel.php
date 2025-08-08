<?php

namespace App\Models;

use CodeIgniter\Model;

class BerkasPermohonanModel extends Model
{
    protected $table = 'berkas_pemohon';
    protected $primaryKey = 'id_berkas';
    protected $allowedFields = ['id', 'nama_instansi', 'penanggung_jawab', 'pekerjaan', 'alamat', 'no_hp', 'waktu', 'tgl_kegiatan', 'tempat', 'rangka', 'peserta', 'berkas', 'dasar']; // Sesuaikan dengan field tabel
}
