<?php

namespace App\Controllers;

use App\Models\BerkasPermohonanModel;

class Permohonan extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new BerkasPermohonanModel();
    }

    public function index()
    {
        $data['berkas'] = $this->model->findAll();
        return view('permohonan/index', $data);
    }

    public function pemohon()
    {
        $data['berkas'] = $this->model->findAll();
        return view('permohonan/pemohon', $data);
    }
    public function tambah()
    {
        return view('permohonan/tambah');
    }

    public function save()
    {
        $data = [
            'nama_instansi'      => $this->request->getPost('nama_instansi'),
            'penanggung_jawab'   => $this->request->getPost('penanggung_jawab'),
            'pekerjaan'          => $this->request->getPost('pekerjaan'),
            'alamat'             => $this->request->getPost('alamat'),
            'no_hp'              => $this->request->getPost('no_hp'),
            'waktu'              => $this->request->getPost('waktu'),
            'tgl_kegiatan'       => $this->request->getPost('tgl_kegiatan'),
            'tempat'             => $this->request->getPost('tempat'),
            'rangka'             => $this->request->getPost('rangka'),
            'peserta'            => $this->request->getPost('peserta'),
        ];

        // Handle file upload berkas
        $berkas = $this->request->getFile('berkas');
        if ($berkas && $berkas->isValid() && !$berkas->hasMoved()) {
            $berkasName = $berkas->getRandomName();
            $berkas->move('writable/uploads', $berkasName);
            $data['berkas'] = $berkasName;
        }

        // Handle file upload dasar (Surat Pengantar)
        $dasar = $this->request->getFile('dasar');
        if ($dasar && $dasar->isValid() && !$dasar->hasMoved()) {
            $dasarName = $dasar->getRandomName();
            $dasar->move('writable/uploads', $dasarName);
            $data['dasar'] = $dasarName;
        }

        $this->model->insert($data);
        return redirect()->to(base_url('pemohon'))->with('success', 'Data pemohon berhasil ditambahkan');
    }
    public function edit($id)
    {
        $data['pemohon'] = $this->model->find($id);
        return view('permohonan/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_instansi'      => $this->request->getPost('nama_instansi'),
            'penanggung_jawab'   => $this->request->getPost('penanggung_jawab'),
            'pekerjaan'          => $this->request->getPost('pekerjaan'),
            'alamat'             => $this->request->getPost('alamat'),
            'no_hp'              => $this->request->getPost('no_hp'),
            'waktu'              => $this->request->getPost('waktu'),
            'tgl_kegiatan'       => $this->request->getPost('tgl_kegiatan'),
            'tempat'             => $this->request->getPost('tempat'),
            'rangka'             => $this->request->getPost('rangka'),
            'peserta'            => $this->request->getPost('peserta'),
        ];

        // Handle file upload berkas
        $berkas = $this->request->getFile('berkas');
        if ($berkas && $berkas->isValid() && !$berkas->hasMoved()) {
            $berkasName = $berkas->getRandomName();
            $berkas->move('writable/uploads', $berkasName);
            $data['berkas'] = $berkasName;
        }

        // Handle file upload dasar (Surat Pengantar)
        $dasar = $this->request->getFile('dasar');
        if ($dasar && $dasar->isValid() && !$dasar->hasMoved()) {
            $dasarName = $dasar->getRandomName();
            $dasar->move('writable/uploads', $dasarName);
            $data['dasar'] = $dasarName;
        }

        $this->model->update($id, $data);
        return redirect()->to(base_url('pemohon'))->with('success', 'Data pemohon berhasil diupdate');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('pemohon'))->with('success', 'Data pemohon berhasil dihapus');
    }
}
