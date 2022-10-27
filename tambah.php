<?php
// memanggil file koneksi dan file proses
include 'koneksi.php';
include 'proses.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>

    <!-- link style menggunakan bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Mengatur ukuran tampilan -->
    <div class="container-sm">
        <br>
        
        <div class="text-center">
            <h4>Form Tambah Data Siswa</h4>
            <br>
        </div>
        <div class="col text-start">
            <a class="btn btn-warning" href="index.php">Kembali</a>
        </div>
        <!-- Membuat card -->
        <div class="card">
            <form method="POST">
                <div class="card-header text-center">
                    <div class="row">
                        <div class="col-11 text-start">
                            <h4>Form Tambah Data Siswa</h4>
                        </div>
                        <div class="col-1 text-end">
                            <a class="btn-close" aria-label="Close" href="index.php"></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="card-body">

                        <?php
                            //Validasi untuk menampilkan alert / pesan pemberitahuan
                            if (isset($_GET['add'])) {
                        
                                if ($_GET['add']=='berhasil'){
                                    echo"<div class='alert alert-success'><strong>Berhasil!</strong> Berhasil Menambah Data Siswa!</div>";
                                }else if ($_GET['add']=='gagal'){
                                    echo"<div class='alert alert-danger'><strong>Gagal!</strong> Gagal Menambah Data Siswa!</div>";
                                }    
                            }  
                        ?> 

                        <!-- Membuat inputan untuk dikirim ke file proses_siswa.php -->
                        <h6>Nama : </h6>
                        <input type="text" name="nama" class="form-control" placeholder="Nama siswa" required><br>
                        
                        <h6>Kelas : </h6>
                        <input type="text" name="kelas" class="form-control" placeholder="Kelas" required><br>
                        
                        <h6>Alamat : </h6>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required><br>
                        
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary" type="submit" name="add-siswa">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>