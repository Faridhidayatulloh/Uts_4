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
 
                <?php if(!empty(session()->getFlashdata('message'))) : ?>
 
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
 
                <?php endif ?>
 
 
                <a href="/anggota/tambah" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>nama</th>
                            <th>jenis kelamin</th>
							   <th>tanggal lahir</th>
                               <th>alamat</th>
                               <th>jabatan</th>
                               <th>tugas</th>
                               <th>status</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($DataAnggota as $key => $anggota) : ?>
 
                            <tr>
                                <td><?php echo $anggota['nama'] ?></td>
                                <td><?php echo $anggota['jenis_kelamin'] ?></td>
                                <td><?php echo $anggota['tanggal_lahir'] ?></td>
                                <td><?php echo $anggota['alamat'] ?></td>
                                <td><?php echo $anggota['jabatan'] ?></td>
                                <td><?php echo $anggota['tugas'] ?></td>
								  <td><?php echo $anggota['status'] ?></td>
                                <td class="text-center">
                                 	<a href="/anggota/edit/<?= $anggota['id_anggota'];?>">Edit</a>
                                    <a href="/anggota/hapus/<?= $anggota['id_anggota'];?>">Delete</a>
                                </td>
                            </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
 
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