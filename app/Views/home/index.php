<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            background-color: #3c4a61; 
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            margin: 0 auto;
            width: 50%;
            color: #ffffff;
        }

        h1 {
            color:#0a0a0a;
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .btn {
            background-color: #4CAF50;
            border: none;
            color: #ffffff;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            cursor: pointer;
            border-radius: 25px;
            width: 200px;
            margin: 0 auto;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-dosen {
            background-color: #4CAF50;
        }

        .btn-petugas {
            background-color: #008CBA;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Akademik Kampus</h1>
    <div class="container">
        <a href="<?= base_url('dosen') ?>" class="btn btn-dosen">Dosen</a>
        <a href="<?= base_url('anggota') ?>" class="btn btn-petugas">Anggota</a>
        <a href="<?= base_url('admin') ?>" class="btn btn-petugas">Admin</a>
    </div>
</body>
</html>
