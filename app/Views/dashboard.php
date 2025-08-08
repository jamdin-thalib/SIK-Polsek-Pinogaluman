<?= $this->include('layouts/sidebar'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <?php if (current_url() == base_url('pemohon')): ?>
                                    Data Pemohon
                                <?php else: ?>
                                    Selamat Datang di Beranda Admin
                                <?php endif; ?>
                            </h3>
                        </div>
                        <div class="card-body">
                            <?php if (current_url() == base_url('pemohon')): ?>
                                <div class="table-responsive">
                                    <?php include(APPPATH . 'Views/permohonan/pemohon.php'); ?>
                                </div>
                            <?php else: ?>
                                <p>Ini adalah halaman beranda SIK POLSEK Pinogaluman.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->include('layouts/footer'); ?>