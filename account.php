<?php
    include 'db_conn.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="contact.css"> -->
    <link rel="stylesheet" href="contact.php"> 

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="account.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
    <!-- Navbar -->
    <ul class="nav justify-content-center bg-secondary" data-aos="fade-down" data-aos-delay="50">
      <li class="nav-item">
        <a class="nav-link Disabled" href="./home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link Disabled" href="./profil.html">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link Disabled" href="./contact-form.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link Disabled" href="./info.html">Info</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link Disabled" href="#">Others</a> -->
        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
        
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="./hardware.html">Hardware</a></li>
            <li><a class="dropdown-item" href="./software.html">Software</a></li>
            <li><a class="dropdown-item" href="./contact.html">Merchandise</a></li>
            <li><a class="dropdown-item" href="">Account</a></li>
            <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <br>

  <div class="container">
        <div class='col-10 m-auto'>
            <h1 style="font-family: 'Antonio', sans-serif; color: white;">Pesanan Kamu</h1>
            <!-- <a href="create.php" class='btn btn-primary'>Tambah</a> -->
            <table class='table table-hover table-bordered border-light mt-3'>
                <thead>
                    <tr style="color: white;">
                        <th scope='col'>ID Pelanggan</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Pesanan</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Whatsapp</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <?php
                    $query = 'SELECT * FROM pelanggan';
                    $result = mysqli_query($conn,$query);

                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <tbody>
                    <tr style="color: white;">
                        <td scope='row'><?= $no++?></td>
                        <td scope='row'><?= $data ['nama']?></td>
                        <td scope='row'><?= $data ['alamat']?></td>
                        <td scope='row'><?= $data ['email']?></td>
                        <td scope='row'><?= $data ['telp']?></td>
                        <td scope='row'>
                          <a href="edit.php?id=<?= $data['id']?>" class="btn btn-warning ms-3">Edit</a>
                          <form class="d-inline" action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>