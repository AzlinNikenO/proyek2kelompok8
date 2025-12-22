<?php

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar EazyDesa</title>

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
            max-width: 420px;
            background: white;
            margin: -30px auto 0;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        }

        form label {
            font-weight: 600;
            margin-top: 15px;
            display: block;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #d0d7e1;
            border-radius: 8px;
            font-size: 15px;
            background: #fafbff;
        }

        form textarea {
            resize: vertical;
            min-height: 80px;
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
    </style>
</head>

<body>
    <div class="header">
        <h1>EazyDesa</h1>
        <p>Formulir Data Diri</p>
    </div>

    <div class="form-container">
<<<<<<< HEAD
        <form action="{{ route('daftar.process') }}" method="POST" enctype="multipart/form-data">
=======
        <form action="{{ route('daftarProcess') }}" method="POST" enctype="multipart/form-data">
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
    @csrf

    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>

    <label>NIK</label>
    <input type="text" name="nik" placeholder="Masukkan NIK" required>

    <label>No. KK</label>
    <input type="text" name="nokk" placeholder="Masukkan Nomor KK anda!" required>

    <label>TTL</label>
    <input type="text" name="ttl" placeholder="Indramayu, 00-00-0000" required>

    <label>Jenis Kelamin</label>
    <select name="jk" id="jk" required onchange="showOtherField()">
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Lainnya">Lainnya</option>
    </select>

    <!-- Input tambahan untuk 'Lainnya' -->
    <input
        type="text"
        name="jk_lainnya"
        id="jk_lainnya"
        placeholder="Sebutkan jenis kelamin Anda"
        style="display:none; padding: 10px; border: 1px solid #d0d7e1; border-radius: 8px;">

    <label>Alamat Lengkap</label>
    <textarea name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>

    <label>Agama</label>
    <input type="text" name="agama" placeholder="Islam" required>

    <label>Nomor HP</label>
    <input type="tel" name="hp" placeholder="Contoh: 081234567890" required>

    <label>Email</label>
    <input type="email" name="email" placeholder="Masukkan email aktif" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan password anda!" required>

    <label>Konfirmasi Password</label>
    <input type="password" name="password_confirmation" placeholder="Konfirmasi password anda!" required>

    <label>Pas Photo</label>
    <input type="file" name="photo" accept="image/*,video/*" capture="camera" required style="padding: 10px; border: 1px solid #d0d7e1; border-radius: 8px;">

<<<<<<< HEAD
    <label>Role</label>
    <select name="role" required>
        <option value="">-- Pilih Role --</option>
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>


=======
>>>>>>> c10c41bb4e34c15a923ce4321b444faadd6f896d
    <button type="submit">Daftar Sekarang</button>
</form>

<script>
function showOtherField() {
    const select = document.getElementById("jk");
    const otherInput = document.getElementById("jk_lainnya");

    if (select.value === "Lainnya") {
        otherInput.style.display = "block";
        otherInput.required = true;
    } else {
        otherInput.style.display = "none";
        otherInput.required = false;
        otherInput.value = "";
    }
}
</script>

    </div>

</body>
</html>
