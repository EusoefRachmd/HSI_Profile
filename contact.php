<?php

// include("db_conn.php");

// $name = $_POST['name'];
// $email = $_POST['email'];
// $messege = $_POST['messege'];

// $query = "INSERT INTO contact ('name','email','messege') VALUES ('$name','$email','$messege') ";

// $sql = mysqli_query($conn,$query) ;

// echo "MESSAGE IS SENT";

        include 'db_conn.php';
    
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $messege         = $_POST['messege'];
    

    $query = "INSERT INTO contact (name,email,messege) VALUES ('$name','$email','$messege')";

    $result = mysqli_query($conn,$query);

    if ($result) {
        header ('location: contact-berhasil.html');
    } else{
        echo 'data gagal ditambah';
    }

?>