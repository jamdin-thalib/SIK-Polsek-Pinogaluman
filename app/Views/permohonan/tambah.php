<?= $this->include('layouts/sidebar'); ?>

<div class="content-wrapper">
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mb-0">Tambah Data Pemohon</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('pemohon/save') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Nama Instansi</label>
                                    <input type="text" name="nama_instansi" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Penanggung Jawab</label>
                                    <input type="text" name="penanggung_jawab" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>No HP</label>
                                    <input type="text" name="no_hp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Waktu Pelaksanaan</label>
                                    <input type="text" name="waktu" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Kegiatan</label>
                                    <input type="date" name="tgl_kegiatan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Pelaksanaan</label>
                                    <input type="text" name="tempat" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tujuan Acara</label>
                                    <input type="text" name="rangka" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Peserta</label>
                                    <input type="number" name="peserta" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Berkas</label>
                                    <input type="file" name="berkas" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Surat Pengantar</label>
                                    <input type="file" name="dasar" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="<?= base_url('pemohon') ?>" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->include('layouts/footer'); ?>