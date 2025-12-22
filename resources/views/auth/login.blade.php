<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EazyDesa</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f8ff;
            margin: 0;
        }

        .header {
            background: #0d6efd;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 600;
        }

        .form-container {
            max-width: 380px;
            background: white;
            margin: -20px auto 0;
            padding: 30px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        }

        form label {
            font-weight: 600;
            margin-top: 15px;
            display: block;
        }

        form input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #d0d7e1;
            border-radius: 8px;
            font-size: 15px;
            background: #fafbff;
        }

        button {
            width: 100%;
            margin-top: 25px;
            padding: 14px;
            background: #0d6efd;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0b5ed7;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 600;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>EazyDesa</h1>
        <p>Masuk ke Akun Anda</p>
    </div>

    <div class="form-container">
        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit">Masuk</button>
        </form>

        <div class="link">
            <p>Belum punya akun?
                <a href="/daftar">Daftar Sekarang</a>
            </p>
        </div>
    </div>

</body>
</html>
