<?= $this->include('layouts/sidebar'); ?>

<div class="content-wrapper">
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="col-md-7 center">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="card-title mb-0 text-center font-weight-bold" style="font-size:2rem;">Data Pemohon</h2>
                            </div>
                        </div>
                        <div class="card-header">
                            <table>
                                <div class="card-body">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambahPemohon">
                                                <i class="nav-icon fas fa-plus"></i>
                                                Tambah Data
                                            </button>
                                        </h3>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped align-middle text-center">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th style="width:40px">ID</th>
                                                    <th>Nama Instansi</th>
                                                    <th>Penanggung Jawab</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Alamat</th>
                                                    <th>No HP</th>
                                                    <th>Waktu Pelaksanaan</th>
                                                    <th>Tanggal Kegiatan</th>
                                                    <th>Tempat Pelaksanaan</th>
                                                    <th>Tujuan Acara</th>
                                                    <th>Jumlah Peserta</th>
                                                    <th>Berkas</th>
                                                    <th>Surat Pengantar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($berkas as $row): ?>
                                                    <tr>
                                                        <td><?= $row['id_berkas'] ?></td>
                                                        <td><?= ucwords($row['nama_instansi'] ?? '-') ?></td>
                                                        <td><?= ucwords($row['penanggung_jawab'] ?? '-') ?></td>
                                                        <td><?= ucwords($row['pekerjaan'] ?? '-') ?></td>
                                                        <td><?= $row['alamat'] ?? '-' ?></td>
                                                        <td><?= $row['no_hp'] ?? '-' ?></td>
                                                        <td><?= $row['waktu'] ?? '-' ?></td>
                                                        <td><?= date('d-m-Y', strtotime($row['tgl_kegiatan'] ?? '')) ?></td>
                                                        <td><?= $row['tempat'] ?? '-' ?></td>
                                                        <td><?= $row['rangka'] ?? '-' ?></td>
                                                        <td><?= $row['peserta'] ?? '-' ?></td>
                                                        <td>
                                                            <?php if (!empty($row['berkas'])): ?>
                                                                <a href="<?= base_url('writable/uploads/' . $row['berkas']) ?>" target="_blank" class="btn btn-info btn-sm">Lihat</a>
                                                                <?php else: ?>-
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (!empty($row['dasar'])): ?>
                                                                <a href="<?= base_url('writable/uploads/' . $row['dasar']) ?>" target="_blank" class="btn btn-info btn-sm">Lihat</a>
                                                                <?php else: ?>-
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center gap-1">
                                                                <a href="<?= base_url('pemohon/edit/' . $row['id_berkas']) ?>" class="btn btn-sm btn-warning mx-1" title="Edit">
                                                                    <i class="nav-icon fas fa-edit"></i>
                                                                </a>
                                                                <a href="<?= base_url('pemohon/delete/' . $row['id_berkas']) ?>" class="btn btn-sm btn-danger mx-1" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                                    <i class="nav-icon fas fa-trash-alt"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>




<div class="modal fade" id="modalTambahPemohon" tabindex="-1" role="dialog" aria-labelledby="modalTambahPemohonLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahPemohonLabel">Tambah Data Pemohon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pemohon/save') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nama Instansi</label>
                            <input type="text" name="nama_instansi" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Penanggung Jawab</label>
                            <input type="text" name="penanggung_jawab" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>No HP</label>
                            <input type="text" name="no_hp" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Waktu Pelaksanaan</label>
                            <input type="time" name="waktu" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tanggal Kegiatan</label>
                            <input type="date" name="tgl_kegiatan" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Jumlah Peserta</label>
                            <input type="number" name="peserta" class="form-control" required>
                        </div>
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
                        <label>Berkas</label>
                        <input type="file" name="berkas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Surat Pengantar</label>
                        <input type="file" name="dasar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer'); ?>