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
    <title>Update Data Siswa</title>

    <!-- link style menggunakan bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Mengatur ukuran tampilan -->
    <div class="container-sm">
        <br>
        
        <div class="text-center">
            <h4>Form Update Data Siswa</h4>
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
                            <h4>Form Update Data Siswa</h4>
                        </div>
                        <div class="col-1 text-end">
                            <a class="btn-close" aria-label="Close" href="index.php"></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="card-body">
                        <?php
                            //mendapatkan nis dari url yang dikirim, menggunakan method GET:
                            $nis=$_GET['nis'];
                            //membuat query tampil data siswa berdasarkan nis yang dipilih
                            $query=mysqli_query($koneksi, "select * from tb_siswa where nis='$nis'");
                            while($data=mysqli_fetch_array($query)){
                                //membuat variabel untuk menampung data siswa
                                $nis = $data['nis'];
                                $nama = $data['nama'];
                                $kelas = $data['kelas'];
                                $alamat = $data['alamat'];
                            }
                        ?>
                        <!-- menampilkan data pada inputan dengan mengatur value/ nilai yang telah disimpan dalam variabel: -->
                        <h6>NIS : </h6>
                        <input type="text" name="nis" class="form-control" value="<?= $nis ?>" readonly><br>
                        
                        <h6>Nama : </h6>
                        <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required><br>
                        
                        <h6>Kelas : </h6>
                        <input type="text" name="kelas" class="form-control" value="<?= $kelas ?>" required><br>
                        
                        <h6>Alamat : </h6>
                        <input type="text" name="alamat" class="form-control" value="<?= $alamat ?>" required><br>
                        
                    </div>
                </div>
                <div class="card-footer text-center">
                    <!-- membuat tombol update dan akan dikirim ke file proses -->
                    <button class="btn btn-primary" type="submit" name="update-siswa">Ubah</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>