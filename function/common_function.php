<?php
include('./include/connect.php');

function getproducts(){
    global $con;

    $select_query="Select * from `termekek`";
    $result_query=mysqli_query($con,$select_query);
   // $row=mysqli_fetch_assoc($result_query);
   // echo $row['termek_title'];
    while($row=mysqli_fetch_assoc($result_query)){
     $termek_id=$row['termek_id'];
     $termek_title=$row['termek_title'];
     $termek_description=$row['termek_description'];
     $product_image1=$row['product_image1'];
     $termek_ar=$row['termek_ar'];
     $category_id=$row['category_id'];
     $event_id=$row['event_id'];

     echo "<div class='col-md-4 mb-2'>
     <div class='card'>
        <img src='./admin_area/termek_images/$product_image1' class='card-img-top' alt='$termek_title'>
         <div class='card-body'>
        <h5 class='card-title'>$termek_title</h5>
        <p class='card-text'>$termek_description</p>
        <a href='#' class='btn btn-primary'>Hozzáadás a kosárhoz</a>
        <a href='#' class='btn btn-secondary'>Adatok</a>
       </div>
     </div>  
  </div>";
    }
}


function getcategories(){
    global $con;
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
}

function getesemenyek(){
    global $con;
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
}

?>