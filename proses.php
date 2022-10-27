<?php
//proses update data siswa
if(isset($_POST['update-siswa'])){
    $nis   = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($koneksi, "Update tb_siswa set nama='$nama', kelas='$kelas', alamat='$alamat' where nis=$nis");

    if($update){
        echo 'Berhasil';
        header("location:index.php?update=berhasil");
    } else {
        echo 'Gagal';
        header("location:index.php?update=gagal");
    };
  

}

//proses insert data siswa
if(isset($_POST['add-siswa'])){
 
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $alamat = $_POST['alamat'];
        $input = mysqli_query($koneksi,"insert into tb_siswa 
                                        values ('','$nama','$kelas','$alamat')");
    
        if($input){
            echo 'Berhasil';
            header("location:tambah.php?add=berhasil");
        } else {
            echo 'Gagal';
            header("location:tambah.php?add=gagal");
        };
      
   
}

//proses hapus data siswa
if(isset($_POST['delete-siswa'])){
    $nis = $_POST['nis'];

    $hapus = mysqli_query($koneksi,"delete from tb_siswa where nis='$nis'");

    if($hapus){
        echo 'Berhasil';
        header("location:index.php?hapus=berhasil");
    } else {
        echo 'Gagal';
        header("location:index.php?hapus=gagal");
    };
  
}