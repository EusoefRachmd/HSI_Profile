<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pelanggan</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>
<body>

    
    <div class="container">
    <?php
    include 'db_conn.php'
    ?>
        <div class='col-10 m-auto' style='padding: 100px 0 0 0'>
            <h2 class='text-center fw-bold'>Pemesanan</h2>
            <div class='col-md-8 m-auto p-5 shadow p-3 mb-5 bg-body rounded'>
                <form action="createproses.php" method='post'>
                    <div class='mb-3'>
                        <label for="exampleForControlInput1" class='form-label'>Nama</label>
                        <input name='nama' type='text' class='form-control' id='exampleForControlInput1'>
                    </div>
                    <div class='mb-3'>
                        <label for="exampleForControlInput1" class='form-label'>Pesanan</label>
                        <textarea name="alamat" class="form-control"  id='exampleForControlInput1'></textarea>
                    </div>
                    <div class='mb-3'>
                        <label for="exampleForControlInput1" class='form-label'>Email</label>
                        <input name='email' type='text' class='form-control' id='exampleForControlInput1'>
                    </div>
                    <div class='mb-3'>
                        <label for="exampleForControlInput1" class='form-label'>Telepon</label>
                        <input name='telp' type='text' class='form-control' id='exampleForControlInput1'>
                    </div>
                    <div class='col-3 m-auto'>
                        <button class='btn btn-md btn-primary px-5 mt-2'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>