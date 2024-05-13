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
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
 
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

 
 
        
                <div class="card">
                    <div class="card-body">
                    <form method="POST" action="<?= url_to('Anggota::update', $anggota['id_anggota']) ?>">

                            <div class="mb-4">
                                <label for"nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="<?= $anggota['nama'] ?>">
                            </div>

                            <div class="mb-4">
                                <label for"jenis_kelamin">jenis_kelamin </label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="Pilih">Pilih</option>
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option>
                               </select>
                          </div>

                          <div class="mb-4">
                                <label for"tanggal_lahir">tanggal_lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $anggota['tanggal_lahir'] ?>">
                            </div>

                            <div class="mb-4">
                                <label for"alamat">alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $anggota['alamat'] ?>">
                            </div>


                            <div class="mb-4">
                                <label for"jabatan">jabatan </label>
                                <select name="jabatan" id="jabatan" class="form-control">
                                <option value="Pilih">Pilih</option>
                                    <option value="Admin">Admin</option>
                                    <option value="dosen">dosen</option>
                                    <option value="satpam">satpam</option>
                                    <option value="OB">OB</option>
                               </select>
                          </div>

                          <div class="mb-4">
                                <label for"tugas">tugas</label>
                                <input type="text" name="tugas" id="tugas" class="form-control" value="<?= $anggota['tugas'] ?>">
                            </div>

                            <div class="mb-4">
                                <label for"status">Status </label>
                                <select name="status" id="status" class="form-control">
                                <option value="Pilih">Pilih</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                    <option value="Aktif">Aktif</option>
                               </select>
                          </div>

                          <button type="submit" class="btn btn-success btn-block">Simpan</button>
                      </form>
                  </div>
                </div>
 
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>