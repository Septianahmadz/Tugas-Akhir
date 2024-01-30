<?php 



include("config.php");



 }else if(isset($_POST['daftarguru'])){

    $nama = $_POST['nama'];

     $jk = $_POST['jenis_kelamin'];

     $alamat = $_POST['alamat'];

     $notel = $_POST['notel'];

     $email = $_POST['email'];



    $sql = "INSERT INTO data_guru (nama_guru, jenis_kelamin, alamat, no_telepon, email)

     VALUE ('$nama','$jk','$alamat','$notel','$email')";

      $query= mysqli_query($db, $sql);



     //  apakah queri berhasil disimpan

     if($query){

         // ke halaman index dengan status=sukses

         header('Location: index.php?status=sukses');

     }else {

         // ke halaman index dengan status=gagal

        header('Location: index.php?status=gagal');

    }

 }

if(isset($_GET['hapus'])){



    $id_pendaftaran = $_GET['hapus'];



    $sql = "DELETE FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";

    $query = mysqli_query($db, $sql);



    if($query){

        // ke halaman index dengan status=sukses

        header('Location: index.php?status=sukses');

    }else{

        // ke halaman index dengan status=gagal

        header('Location: index.php?status=gagal');

    }

}

?>





   $alamat = $_POST['alamat'];

     $notel = $_POST['notel'];

     $email = $_POST['email'];



    $sql = "INSERT INTO data_guru (nama_guru, jenis_kelamin, alamat, no_telepon, email)

     VALUE ('$nama','$jk','$alamat','$notel','$email')";

      $query= mysqli_query($db, $sql);



     //  apakah queri berhasil disimpan

     if($query){

         // ke halaman index dengan status=sukses

         header('Location: index.php?status=sukses');

     }else {

         // ke halaman index dengan status=gagal

        header('Location: index.php?status=gagal');

    }

 }

if(isset($_GET['hapus'])){



    $id_pendaftaran = $_GET['hapus'];



    $sql = "DELETE FROM pendaftaran WHERE id_pendaftaran='$id_pendaftaran';";

    $query = mysqli_query($db, $sql);



    if($query){

        // ke halaman index dengan status=sukses

        header('Location: index.php?statu
