<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
<div class="page-heading">
    <div class="page-title-headings mb-4">
        <h3>Tambah Dosen</h3>
    </div>

    <?php if (! empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <ul class="mb-0">
                <?php foreach (session()->getFlashdata('message') as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <a href="<?= route_to('Dosen::index') ?>" class="btn btn-md btn-warning mb-3">Kembali</a>

    <div class="card">
        <div class="card-body">
            <form method="post" action="<?= route_to('Dosen::store') ?>">
               
                <div class="mb-4">
                    <label for"nama_dosen">Nama Dosen</label>
                    <input type="text" name="nama_dosen" id="status_dosen" class="form-control">
                </div>

                <div class="mb-4">
                    <label for"mata_kuliah">mata_kuliah</label>
                    <select name="mata_kuliah" id="mata_kuliah" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="matriks">matriks</option>
                        <option value="MPI">MPI</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="B.inggris">B.inggris</option>

                    </select>
                </div>

                <div class="mb-4">
                    <label for"status_dosen">Status Dosen</label>
                    <select name="status_dosen" id="status_dosen" class="form-control">
                        <option value="">--Pilih--</option>
                        <option value="0">Tidak Aktif</option>
                        <option value="1">Aktif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>