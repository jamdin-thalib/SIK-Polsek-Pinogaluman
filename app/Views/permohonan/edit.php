<?= $this->include('layouts/sidebar'); ?>

<!-- Modal Edit Data Pemohon -->
<div class="modal fade show" id="modalEditPemohon" tabindex="-1" role="dialog" aria-labelledby="modalEditPemohonLabel" aria-modal="true" style="display:block; background:rgba(0,0,0,0.5);">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditPemohonLabel">Edit Data Pemohon</h5>
                <a href="<?= base_url('pemohon') ?>" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pemohon/update/' . $pemohon['id_berkas']) ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" name="nama_instansi" class="form-control" value="<?= $pemohon['nama_instansi'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Penanggung Jawab</label>
                        <input type="text" name="penanggung_jawab" class="form-control" value="<?= $pemohon['penanggung_jawab'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" value="<?= $pemohon['pekerjaan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $pemohon['alamat'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" name="no_hp" class="form-control" value="<?= $pemohon['no_hp'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Waktu Pelaksanaan</label>
                        <input type="time" name="waktu" class="form-control" value="<?= $pemohon['waktu'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kegiatan</label>
                        <input type="date" name="tgl_kegiatan" class="form-control" value="<?= $pemohon['tgl_kegiatan'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Pelaksanaan</label>
                        <input type="text" name="tempat" class="form-control" value="<?= $pemohon['tempat'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tujuan Acara</label>
                        <input type="text" name="rangka" class="form-control" value="<?= $pemohon['rangka'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Peserta</label>
                        <input type="number" name="peserta" class="form-control" value="<?= $pemohon['peserta'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Berkas</label>
                        <input type="file" name="berkas" class="form-control">
                        <?php if (!empty($pemohon['berkas'])): ?>
                            <small class="form-text text-muted">File saat ini: <a href="<?= base_url('writable/uploads/' . $pemohon['berkas']) ?>" target="_blank">Lihat</a></small>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Surat Pengantar</label>
                        <input type="file" name="dasar" class="form-control">
                        <?php if (!empty($pemohon['dasar'])): ?>
                            <small class="form-text text-muted">File saat ini: <a href="<?= base_url('writable/uploads/' . $pemohon['dasar']) ?>" target="_blank">Lihat</a></small>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="<?= base_url('pemohon') ?>" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>