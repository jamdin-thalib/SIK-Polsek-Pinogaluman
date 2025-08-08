<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Beranda</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url('logout') ?>" class="nav-link text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
    </div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">AdminSIK-POLSEK</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="<?= base_url('dashboard') ?>" class="nav-link <?= service('request')->getUri()->getSegment(1) == 'dashboard' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('pemohon') ?>" class="nav-link <?= service('request')->getUri()->getSegment(1) == 'pemohon' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Permohonan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('verifikasi') ?>" class="nav-link <?= service('request')->getUri()->getSegment(1) == 'verifikasi' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-save"></i>
                            <p>Verifikasi</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('user') ?>" class="nav-link <?= service('request')->getUri()->getSegment(1) == 'user' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('laporan') ?>" class="nav-link <?= service('request')->getUri()->getSegment(1) == 'laporan' ? 'active' : '' ?>">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</body>