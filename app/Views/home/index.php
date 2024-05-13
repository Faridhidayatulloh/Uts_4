<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #ffffff;
            background-image: url('https://www.uii.ac.id/wp-content/uploads/2020/05/FTSP-UII-2.jpg'); /* URL gambar latar belakang */
            background-size: cover; /* Menyesuaikan ukuran gambar dengan jendela browser */
            background-position: center; /* Posisi gambar latar belakang */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            padding-top: 50px;
        }

        h1 {
            color: #0d0d0c;
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .container {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .btn {
            font-size: 20px;
            padding: 15px 40px;
            border-radius: 30px;
            margin: 10px;
            width: 200px;
        }

        .btn-dosen {
            background-color: #4CAF50;
            border: 2px solid #4CAF50;
        }

        .btn-anggota {
            background-color: #008CBA;
            border: 2px solid #008CBA;
        }

        .btn-admin {
            background-color: #f44336;
            border: 2px solid #f44336;
        }

        .btn-satpam {
            background-color: #ff9800;
            border: 2px solid #ff9800;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Akademik Kampus</h1>
    <div class="container">
        <a href="<?= base_url('dosen') ?>" class="btn btn-dosen">Dosen</a>
        <a href="<?= base_url('anggota') ?>" class="btn btn-anggota">Anggota</a>
        <a href="<?= base_url('admin') ?>" class="btn btn-admin">Admin</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
