<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WebBelanja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="card shadow border-0 rounded-4 p-4" style="width: 400px;">

        <div class="card-body">

            <h3 class="text-center fw-bold mb-2">Login</h3>
            <p class="text-center text-muted mb-4">
                Silakan masuk ke akun Anda
            </p>

       
                <?php $error = $error ?? ''; ?>

                <?php if ($error): ?>
                    <div class="alert alert-danger">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Username</label>
                        <input type="text" name="username"
                            class="form-control form-control-lg"
                            placeholder="Masukkan username" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password"
                            class="form-control form-control-lg"
                            placeholder="Masukkan password" required>
                    </div>

                    <!-- Parameter untuk demo Open Redirect -->

                     <!--Versi Aman -->
                    <!-- <input type="hidden" name="redirect"
                     value="<?= htmlspecialchars($_GET['redirect'] 
                     ?? 'home', ENT_QUOTES, 'UTF-8') ?>"> -->


                     <!--Versi Rentan -->
                     <input type="hidden" name="redirect"
                     value="<?= htmlspecialchars($_GET['redirect'] ?? '', ENT_QUOTES, 'UTF-8') ?>">

                    <button type="submit" class="btn btn-primary btn-lg w-100">
                        Login
                    </button>

                </form>


            <hr class="my-4">

            <a href="/WebBelanja.com/public/index.php"
               class="btn btn-outline-secondary w-100">
                &larr; Kembali ke Beranda
            </a>

        </div>
    </div>

</div>

</body>
</html>
