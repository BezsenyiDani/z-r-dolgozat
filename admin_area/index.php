<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .admin-image{
            width: 100px;
             object-fit: contain;
        }
         
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/banan.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg navbar-light bg-info">
                    <ul class="navbar-nav ">
                        <li class=nav-item>
                            <a href="" class="nav-link">:)</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

    <div class="bg-light">
        <h3 class="text-center p-2">
            
        </h3>

    </div>

    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-2">
                <a href="#"><img src="" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name </p>
            </div>
            
            <div class="button text-center">
                <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Termék hozzáadása</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Termékek megtekintése</a></button>
                <button><a href="index.php?kategoriahozzaadas" class="nav-link text-light bg-info my-1">Kategória hozzáadása</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Kategóriák megtekintése</a></button>
                <button><a href="index.php?alapanyagokhozzaadasa" class="nav-link text-light bg-info my-1">Alapanyagok hozzáadása</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Alapanyagok megtekintése</a></button>
                <button><a href="index.php?esemenyhozzaadas" class="nav-link text-light bg-info my-1">Esemény hozzáadása</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Események megtekintése</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Rendelések</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Felhasználók</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Kijelentkezés</a></button>
            </div>
        </div>
    </div>


    <div class="container my-3">
        <?php
        if(isset($_GET['kategoriahozzaadas'])){
            include('kategoriahozzaadas.php');
        }
        if(isset($_GET['alapanyagokhozzaadasa'])){
            include('alapanyagokhozzaadasa.php');
        }
        if(isset($_GET['esemenyhozzaadas'])){
            include('esemenyhozzaadas.php');
        }
        ?>
       
    </div>




    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>