<?php
include('../include/connect.php');

if(isset($_POST['insert_cat'])){
    $kategoria_cim=$_POST['cat_title'];

    $select_query="Select * from `kategoria` where category_title='$kategoria_cim'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('Ez a kategória már hozzá lett adva.')</script>";
    }else{
        $insert_query="insert into `kategoria` (category_title) values ('$kategoria_cim')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Az adott kategória sikeresen hozzá lett adva.')</script>";
        }
    }
    
}
?>

<h2 class="text-center">Kategória Hozzáadása</h2>
<form action="" method="post" class="mb-2">

       
        <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Kategória neve" aria-label="Username" aria-describedby="basic-addon1">
        </div>
     
        <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Hozzáadás">
         
        </div>
     
</form>