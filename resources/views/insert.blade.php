<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <title>Tambah Buku</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <br/>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label>Judul Buku</label>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control">           
                        </div>
                        <label>Nama Pengarang</label>
                        <div class="form-group">           
                            <input type="text" name="authors" class="form-control">
                        </div>
                        <label>Penerbit</label>
                        <div class="form-group">           
                            <input type="text" name="penerbit" class="form-control">
                        </div>
                        <label>Tahun Terbit</label>
                        <div class="form-group">           
                            <input type="text" name="th_terbit" class="form-control">
                        </div><br/>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="buku.php" class="btn btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>