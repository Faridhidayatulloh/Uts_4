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
        <h3>List Dosen</h3>
    </div>

    <?php if (! empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>

    <a href="<?= route_to('Dosen::create') ?>" class="btn btn-success mb-3">Tambah Data</a>

    <div class="card">
        <div class="table-responsive">
            <table class="table text-nowrap table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode Dosen</th>
                        <th>Nama Dosen</th>
                        <th>Mata Kuliah</th>

                        <th class="text-center">Status Dosen</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data as $dosen) : ?>
                        <tr>
                            <td><?= $dosen['kode_dosen'] ?></td>
                            <td><?= $dosen['nama_dosen'] ?></td>
                            <td><?= $dosen['mata_kuliah'] ?></td>
                            <td class="text-center"><span class="badge bg-<?= $dosen['status_dosen'] ? 'success' : 'warning' ?>"><?= $dosen['status_dosen'] ? 'Aktif' : 'Tidak Aktif' ?></td>
                            <td class="text-center">
                                <a href="<?= route_to('Dosen::edit', $dosen['kode_dosen']); ?>" class="btn-link">Edit</a>
                                <a href="<?= route_to('Dosen::destroy', $dosen['kode_dosen']); ?>" class="btn-link text-danger" onclick="destroy(event)">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>