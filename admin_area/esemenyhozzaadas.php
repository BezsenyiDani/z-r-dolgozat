<?php
include('../include/connect.php');

if(isset($_POST['insert_event'])){
    $event_title=$_POST['event_title'];

    $select_query="Select * from `esemenyek` where event_title='$event_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('Ez az esemény már hozzá lett adva.')</script>";
    }else{
        $insert_query="insert into `esemenyek` (event_title) values ('$event_title')";
        $result=mysqli_query($con,$insert_query);
        if($result){
            echo "<script>alert('Az adott esemény sikeresen hozzá lett adva.')</script>";
        }
    }
    
}
?>

<h2 class="text-center">Események hozzáadása</h2>

<form action="" method="post" class="mb-2">

       
        <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="event_title" placeholder="Esemény neve" 
        aria-label="esemeny" aria-describedby="basic-addon1">
        </div>
     
        <div class="input-group w-10 mb-2 m-auto">
       <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_event" value="Esemény hozzáadása"
         placeholder="Esemény hozzáadása">
      
        </div>
     
</form>