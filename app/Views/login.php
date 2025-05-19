<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Login - CVN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #fce4ec);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
        }

        .login-container {
            max-width: 420px;
            margin: 80px auto;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            animation: slideFade 0.5s ease-out;
        }

        @keyframes slideFade {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .logo-CVN {
            width: 100px;
            display: block;
            margin: 0 auto 20px;
        }

        .btn-primary {
            background-color: #0069d9;
            border: none;
        }

        .btn-primary:hover {
            background-color: #004c9f;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="card p-4">
            <div class="text-center">
                <img src="<?= base_url('images/cvn.png') ?>" alt="Logo CVN" class="logo-CVN">
                <h3 class="card-title text-center mb-4">Login</h3>
            </div>

            <?php if(session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('/do-login') ?>" method="post" novalidate>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
