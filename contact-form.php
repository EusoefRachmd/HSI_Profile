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
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <?php include "navbar.php"; ?> 
    
    <section class="contact">
        <div class="contact-heading">
            <h1 style="color: white;">Contact Us</h1>
            <p style="color: white;">Hubungi kami jika anda kendala. Sampaikan kritik yang membangun</p>
        </div>
        <form action="contact.php" method="post">
            <input type="text" name="name" placeholder="your full name">
            <input type="text" name="email" placeholder="your email">
            <textarea name="messege" placeholder="type your messege......."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
</body>
</html>