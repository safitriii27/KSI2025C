<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama  = $_POST['nama'];
    $npm   = $_POST['npm'];
    $prodi = $_POST['prodi'];
    $email = $_POST['email'];

    $query = "INSERT INTO mahasiswa (nama, npm, prodi, email)
              VALUES ('$nama', '$npm', '$prodi', '$email')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah data.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #ff6ec4, #7873f5);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        .form-container {
            background: white;
            padding: 35px 45px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            width: 380px;
            text-align: center;
            animation: fadeIn 0.8s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(10px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h3 {
            margin-bottom: 20px;
            color: #444;
            font-weight: 600;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #7873f5;
            outline: none;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #ff6ec4, #7873f5);
            border: none;
            color: white;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-gradient:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        a {
            text-decoration: none;
            color: #555;
            font-size: 14px;
            display: inline-block;
            margin-top: 12px;
        }

        a:hover {
            color: #7873f5;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3>Tambah Data Mahasiswa</h3>
        <form action="" method="POST">
            <input type="text" name="nama" placeholder="Masukkan nama" required>
            <input type="text" name="npm" placeholder="Masukkan NPM" required>
            <input type="text" name="prodi" placeholder="Masukkan program studi" required>
            <input type="email" name="email" placeholder="Masukkan email" required>
            <button type="submit" class="btn-gradient">Simpan Data</button>
            <a href="index.php">Kembali ke daftar</a>
        </form>
    </div>
</body>
</html>
