<?php
include('include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar -->
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Logo</a> <!-- Anyátol kell a logo    <img src="./images/logo.png" alt="" class="logo">-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" aria-current="page" href="/">Főoldal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Termékek</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="#">Regisztrálás</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kontakt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Összeg:100/-</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


 <nav class="navbar navbar-eqpand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">Üdvözöljük a weboldalunkon!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bejelentkezés</a>
      </li>
    </ul>
 </nav>
 <div class="bg-light">
    <h3 class="text-center">Emke virágbolt</h3>
    <p class="text-center">Nálunk mindent megkapsz jó rendezvényhez</p>
 </div>
 <div class="row">
    <div class="col md-10">
    <!-- Termékek-->
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
                 <img src="./images/banan.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Leírás</p>
                 <a href="#" class="btn btn-primary">Hozzáadás a kosárhoz</a>
                 <a href="#" class="btn btn-secondary">Adatok</a>
             </div>
             </div>  
             </div>
            
            <div class="col-md-4 mb-2">
            <div class="card">
                 <img src="./images/banan.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Leírás</p>
                 <a href="#" class="btn btn-primary">Hozzáadás a kosárhoz</a>
                 <a href="#" class="btn btn-secondary">Adatok</a>
             </div>
            </div>
            </div>
            
            <div class="col-md-4 mb-2">
            <div class="card">
                 <img src="./images/banan.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Leírás</p>
                 <a href="#" class="btn btn-primary">Hozzáadás a kosárhoz</a>
                 <a href="#" class="btn btn-secondary">Adatok</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                 <img src="./images/banan.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Leírás</p>
                 <a href="#" class="btn btn-primary">Hozzáadás a kosárhoz</a>
                 <a href="#" class="btn btn-secondary">Adatok</a>
            </div>
            </div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card">
                 <img src="./images/banan.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Leírás</p>
                 <a href="#" class="btn btn-primary">Hozzáadás a kosárhoz</a>
                 <a href="#" class="btn btn-secondary">Adatok</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                 <img src="./images/banan.jpg" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Card title</h5>
                 <p class="card-text">Leírás</p>
                 <a href="#" class="btn btn-primary">Hozzáadás a kosárhoz</a>
                 <a href="#" class="btn btn-secondary">Adatok</a>
            </div>
            </div>
            </div>


     </div>
    </div>
    <div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="" class="nav-link"><h4>Kategóriák</h4></a>
            </li>
        
            <?php
            $select_category="Select * from `kategoria`";
            $result_category=mysqli_query($con,$select_category);
           // echo $row_data['category_title'];
           while($row_data=mysqli_fetch_assoc($result_category)){
            $category_title=$row_data['category_title'];
            $category_id=$row_data['category_id'];
            echo "  <li class='nav-item'>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
        </li>";
           }
            ?>
       
        </ul>


        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
                <a href="" class="nav-link"><h4>Események</h4></a>
            </li>
        
            <?php
            $select_event="Select * from `esemenyek`";
            $result_event=mysqli_query($con,$select_event);
           // echo $row_data['category_title'];
           while($row_data=mysqli_fetch_assoc($result_event)){
            $event_title=$row_data['event_title'];
            $event_id=$row_data['event_id'];
            echo "  <li class='nav-item'>
            <a href='index.php?event=$event_id' class='nav-link text-light'>$event_title</a>
        </li>";
           }
            ?>
        </ul>

        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
                <a href="" class="nav-link"><h4>Alapanyagok</h4></a>
            </li>
        
            <?php
            $select_alapanyag="Select * from `alapanyag`";
            $result_alapanyag=mysqli_query($con,$select_alapanyag);
           // echo $row_data['category_title'];
           while($row_data=mysqli_fetch_assoc($result_alapanyag)){
            $alapanyag_title=$row_data['alapanyag_title'];
            $alapanyag_id=$row_data['alapanyag_id'];
            echo "  <li class='nav-item'>
            <a href='index.php?alapanyag=$alapanyag_id' class='nav-link text-light'>$alapanyag_title</a>
        </li>";
           }
            ?>
        </ul>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>