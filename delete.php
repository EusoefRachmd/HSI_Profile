<?php  

    include 'db_conn.php';

    $id = $_POST['id'];

    $query = "DELETE FROM pelanggan WHERE id ='$id'";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header('location: account.php');
    } else {
        echo "Data gagal dihapus";
    }   

?>