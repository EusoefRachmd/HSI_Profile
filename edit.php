<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>   
    <div class="container">
    <?php
        include 'db_conn.php';
        $id     = $_GET['id'];
        $query  = "SELECT * FROM pelanggan WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $data   = mysqli_fetch_assoc($result);
                ?>
                <div class='col-10 m-auto' style='padding: 100px 0 0 0'>
            <h2 class='text-center fw-bold'>Edit Data Pelanggan</h2>
            <div class='col-md-8 m-auto p-5 shadow p-3 mb-5 bg-body rounded'>
                <form action="" method='post'>
                    <input type="hidden" name="id" value="<?= $data['id']?>">
                    <div class='mb-3'>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <label for="exampleForControlInput1" class='form-label'>Nama</label>
                        <input name='nama' type='text' class='form-control' id='exampleForControlInput1' value='<?= $data['nama']?>'>
                    </div>
                    <div class='mb-3'>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <label for="exampleForControlInput1" class='form-label'>Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlInput1"><?= $data['alamat']?></textarea>
                    </div>
                    <div class='mb-3'>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <label for="exampleForControlInput1" class='form-label'>Email</label>
                        <input name='email' type='text' class='form-control' id='exampleForControlInput1' value='<?= $data['email']?>'>
                    </div>
                    <div class='mb-3'>
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <label for="exampleForControlInput1" class='form-label'>Telp</label>
                        <input name='whatsapp' type='text' class='form-control' id='exampleForControlInput1' value='<?= $data['telp']?>'>
                    </div>
                    <div class='col-3 m-auto'>
                        <button class='btn btn-md btn-primary px-5 mt-2' name="edit" >Submit</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <br>
    <br>
</body>
</html>

<?php 

    include 'db_conn.php';
    

    // if(isset($_GET['id'])){
    //     $edit = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = '".$_GET['id']."'");

    // }

    if(isset($_POST['edit'])){
        $nama = $_POST['nama'];
        // $nisn = $_POST['nisn'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];

        $query = "UPDATE pelanggan SET
                    nama = '$nama',
                    -- nisn = '$nisn',
                    alamat = '$alamat',
                    email = '$email',
                    telp = '$telp'
                    WHERE id = '".$_GET['id']."'";

        $result = mysqli_query($conn,$query);
        
        if ($result) {
            header('location: account.php');
        } else{
            header('location: ?=data-gagal-diubah');
        }
    }
?>