<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="login-page">

<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">

            <p class="login-box-msg fw-bold">Login Admin Desa</p>

            @if ($errors->any())
                <div class="alert alert-danger small">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <!-- USERNAME / EMAIL -->
                <div class="mb-3">
                    <input type="text" name="login"
                           class="form-control"
                           placeholder="Username atau Email"
                           required>
                </div>

                <!-- PASSWORD -->
                <div class="mb-3">
                    <input type="password" name="password"
                           class="form-control"
                           placeholder="Password"
                           required>
                </div>

                <!-- CAPTCHA -->
                <div class="mb-3 d-flex align-items-center gap-2">
                    <span class="badge bg-dark fs-6 px-3 py-2">
                        {{ session('captcha_admin') }}
                    </span>
                    <input type="text" name="captcha"
                           class="form-control"
                           placeholder="Masukkan angka di samping"
                           required>
                </div>

                <button class="btn btn-primary w-100">
                    Login Admin
                </button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
