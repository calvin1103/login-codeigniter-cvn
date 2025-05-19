<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Sistem Login CVN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f3f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-brand img {
            width: 40px;
            margin-right: 10px;
        }

        .card-custom {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .card-custom:hover {
            transform: translateY(-4px);
        }

        .welcome {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .datetime {
            font-size: 0.95rem;
            color: #6c757d;
        }

        .logout-link {
            color: red;
            text-decoration: none;
        }

        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('images/cvn.png') ?>" alt="Logo CVN">
                CVN Dashboard
            </a>
            <div class="d-flex">
                <span class="navbar-text text-white me-3">
                    Halo, <strong><?= session()->get('name') ?></strong>
                </span>
                <a href="<?= base_url('/logout') ?>" class="btn btn-light btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Isi Konten -->
    <div class="container mt-4">
        <div class="row g-4">
            <!-- Card 1: Info -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom p-3">
                    <h5 class="mb-2">Informasi Akun</h5>
                    <p><strong>Email:</strong> <?= session()->get('email') ?></p>
                    <p><strong>Nama:</strong> <?= session()->get('name') ?></p>
                </div>
            </div>

            <!-- Card 2: Status -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom p-3">
                    <h5 class="mb-2">Status Login</h5>
                    <p class="text-success fw-bold">Anda sudah login ✅</p>
                    <p class="datetime" id="datetime">Memuat waktu...</p>
                </div>
            </div>

            <!-- Card 3: Aksi -->
            <div class="col-md-6 col-lg-4">
                <div class="card card-custom p-3 text-center">
                    <h5>Keluar</h5>
                    <a href="<?= base_url('/logout') ?>" class="btn btn-outline-danger mt-3">Logout Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center mt-4">
        &copy; <?= date('Y') ?> CVN Login System. Dibuat dengan ❤ untuk UTS Fullstack Web Dev.
        </footer>

    <!-- Script Bootstrap & DateTime -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Waktu sekarang
        const now = new Date();
        document.getElementById('datetime').innerText = 'Waktu sekarang: ' + now.toLocaleString('id-ID');
    </script>
</body>
</html>
