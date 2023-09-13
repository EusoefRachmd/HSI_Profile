<?php 

    include 'db_conn.php';
    
    $nama           = $_POST['nama'];
    $alamat          = $_POST['alamat'];
    $email         = $_POST['email'];
    $telepon      = $_POST['telp'];

    $query = "INSERT INTO pelanggan (nama,email,alamat,telp) VALUES ('$nama','$email','$alamat','$telepon')";

    $result = mysqli_query($conn,$query);

    if ($result) {
        header ('location: berhasil.html');
    } else{
        echo 'data gagal ditambah';
    }
?>