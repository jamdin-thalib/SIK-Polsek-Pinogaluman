<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIK POLSEK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
            min-height: 100vh;
            position: relative;
        }

        .bg-logo-sik {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
            opacity: 0.08;
            width: 600px;
            height: 600px;
            pointer-events: none;
            background: none;
        }

        .login-box {
            margin: 60px auto;
            max-width: 400px;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.1);
        }

        .login-logo {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: #007bff;
            border: none;
            border-radius: 2rem;
            font-weight: bold;
        }

        .form-control {
            border-radius: 1rem;
        }

        .login-box .card-body {
            padding: 2rem;
        }
    </style>
</head>

<body>
    <div class="bg-logo-sik">
        <img src="<?= base_url('assets/img/logo_sik.png') ?>" alt="Logo SIK" style="width:100%;height:100%;object-fit:contain;">
    </div>
    <div class="login-box" style="position:relative;z-index:1;">
        <div class="text-center mb-2">
            <img src=<?= base_url("assets/img/logo_sik.png"); ?> alt="Logo Polri" style="width:80px; height:80px; border-radius:50%; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
        </div>
        <div class="login-logo">
            <!-- <i class="fas fa-shield-alt"></i> SIK POLSEK -->
        </div>
        <div class="card" style="border-radius:2.5rem;">
            <div class="card-body login-card-body">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('register') ?>" class="btn btn-success btn-block" style="border-radius:2rem; font-weight:bold;">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>