<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="home.css">
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
            <li><a class="dropdown-item" href="./account.php">Account</a></li>
            <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

      <!-- Content -->
      <div class="container content1">
        <div>
          <img src="./assets/HumanSyNTax_-removebg-preview.png" alt="">
        </div>
        <div class="content1-right">
          <h3>HSI</h3>
          <p>HumanSyNTax Interconnected merupakan sebuan platform yang diciptakan untuk memudahkan kita dalam menggunakan jasa di bidang IT. Dengan berbagai pilihan, anda tidak perlu khawatir dalam menggunakan jasa kami. Projek anda akan dihandle dengan orang-orang yang ahli di bidangnya. Kami juga menawarnakan harga yang menarik dan pastinya ramah di kantong dengan jaminan full sesuai kesepakatan tentunya. Tunggu apa lagi? Ayo berlangganan!</p> 
        </div>
      </div>

        <div class="container content1-bottom">
          <p>Layanan yang kami sediakan sudah terpercaya pastinya. Dengan tujuan meningkatkan sumber daya manusia (SDM)  SMK, kami menggunakan siswa/i SMK untuk mengerjakan projek anda. Pekerjaan kami kerjakan dengan penuh ketelitian. Anda juga bisa berdiskusi dengan handler pilihan anda menyangkut masalah desain, fitur, dll.  Layanan yang kami sediakan yaitu seputar HARDWARE - SOFTWARE – MERCHANDISE </p>
        </div>
      
        <br>

        <!-- content 2 -->
        <table style="background-color: white;" class="container content2-tbl" width="100%" height="70px">
          <tr>
            <td>
            
              <img src="./assets/hardware img.webp" alt="" width="200px">
              
            </td>
            <td>
              
              <img src="./assets/software icon.png" alt="" width="160px">
              
            </td>
            <td>
             
              <img src="./assets/merchandise img.png" alt="" width="100px">
              
            </td>
          </tr>
        </table>

        <br>

        <!-- content 3 -->
       

        <br>

          <!-- <div class="content3">
            <div>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, labore similique! Magnam error sequi sint.
            </div>
            <div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, adipisci recusandae? Doloremque vel dolore in!
            </div>
            <div>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sed rem vitae sint quod nesciunt.
            </div>
          </div> -->

          <div class="container">
            <div class="row align-items-center ija" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-offset="200">
              <div class="col col-md-4">
                <h1>Hardware</h1>
                <p>
                  Layanan berupa hardware meliputi : service computer/laptop, IT Support, Pemasangan kabel internet(crimping), rakit PC, sparepart computer/laptop, dll.
                </p>
              </div>
              <div class="col col-md-4 ">
                <h1>Software</h1>
                <p>
                  Layanan berupa software meliputi : pembuatan website(statis/dinamis), cv, IT consultan, course(online/offline), desain, instalasi jaringan dan software, dll. 
                </p>
              </div>
              <div class="col col-md-4">
                <h1>Merchandise</h1>
                <p>
                  Selain daripada layanan, kami juga menjual produk barang yang merupakan hasil karya kami sendiri berupa : t-shirt, pants, hoodie, cap, tumbler, mug, dll.
                </p>
              </div>
            </div>  
          </div>

          <br>
          <br>

          <!-- content4 -->
          <center>
            <div class="content4">
                <h1>Our Documentation</h1>
            </div>
          </center>

          <br>
          <br>

          <center>
            <div class="container">
              <table>
                <tr>
                  <td>
                    <div class="col" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" >
                      <div class="box">
                          <div class="front">
                            <img src="./assets/HSI/WhatsApp Image 2022-11-11 at 20.57.54.jpeg" alt="">
                          </div>
                          <div class="back">  
                            <h1>Muda</h1>
                        </div>
                      </div>  
                    </div>
                  </td>
                  <td>
                    <div class="col" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000" >
                      <div class="box">
                          <div class="front">
                            <img src="./assets/HSI/WhatsApp Image 2022-11-11 at 20.57.55.jpeg"  alt="">
                          </div>
                          <div class="back">  
                            <h1>Berjaya</h1>
                        </div>
                      </div>  
                    </div>
                  </td>
                  <td>
                    <div class="col" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" >
                      <div class="box">
                          <div class="front">
                            <img src="./assets/HSI/WhatsApp Image 2022-11-11 at 20.57.56.jpeg" alt="">
                          </div>
                          <div class="back">  
                            <h1>Berkarya</h1>
                        </div>
                      </div>  
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col" data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000" >
                      <div class="box">
                          <div class="front">
                            <img src="./assets/HSI/WhatsApp Image 2022-11-11 at 21.02.46.jpeg" alt="">
                          </div>
                          <div class="back">  
                            <h1>Belajar</h1>
                        </div>
                      </div>  
                    </div>
                  </td>
                  <td>
                    <div class="col" data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000" >
                      <div class="box">
                          <div class="front">
                            <img src="./assets/HSI/WhatsApp Image 2022-11-11 at 21.02.48.jpeg" alt="">
                          </div>
                          <div class="back">  
                            <h1>Bekerja</h1>
                        </div>
                      </div>  
                    </div>
                  </td>
                  <td>
                    <div class="col" data-aos="fade-down" data-aos-delay="600" data-aos-duration="1000" >
                      <div class="box">
                          <div class="front">
                            <img src="./assets/HSI/WhatsApp Image 2022-11-11 at 20.57.57.jpeg" alt="">
                          </div>
                          <div class="back">  
                            <center>
                            <h1>Membangun Bangsa</h1>
                            </center>
                        </div>
                      </div>  
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </center>

</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>