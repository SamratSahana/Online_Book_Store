<?php
include_once"connection.php";
?>

<?php
session_start();
if (!isset($_SESSION['id'])) {
   header('location:User Login 1.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


<?php

 $qry = mysqli_query($con, "SELECT `id`,`name` FROM `user` WHERE `id`=".$_SESSION['id']);
 $row= mysqli_fetch_array($qry);
 echo "Welcome: ".$row['name'];
?>
  <div>
    <a href="User Logout.php"><button type="submit" class="btn btn-outline-primary">Logout</button></a>
</div> 

    <br>
    <br>
    <br>
    <?php
    $qry = mysqli_query($con,"SELECT * FROM `books`");
$num = mysqli_num_rows($qry);
   echo" <div class='container'>";
  echo"<div class='row'>";
  if($num>0)
  {
  echo" <div class='col' >";
    



    while($row=mysqli_fetch_array($qry)){
    echo"<div class='card' style='width: 18rem;'>";
       echo" <img src=".$row['pic']." class='card-img-top' alt='...'>";
        echo"<div class='card-body'>";
          echo"<h5 class='card-title'>Book Name: ".$row['bookname']."</h5>";
       echo" </div>";
       echo" <ul class='list-group list-group-flush'>";
          echo"<li class='list-group-item'>Author Name: ".$row['authername']."</li>";
          echo"<li class='list-group-item'>Price: ".$row['price']."</li>";
       echo" </ul>";
        echo"<div class='card-body'>";
         echo" <a href='#' class='card-link'><button type='submit' class='btn btn-danger'>Add to Cart </button> </a>";
          echo"<a href='#' class='card-link'><button type='submit' class='btn btn-primary'>Buy Now</button></a>";
        echo"</div>";
      echo"</div>";
    }
    
}
?>
    </div>
  </div>
</div>
<?php
// $qry = mysqli_query($con,"SELECT * FROM `books`");
// $num = mysqli_num_rows($qry);
// if($num>0)
// {
//     while($row=mysqli_fetch_array($qry)){
//     echo"<div class='card' style='width: 18rem;'>";
//        echo" <img src=".$row['pic']." class='card-img-top' alt='...'>";
//         echo"<div class='card-body'>";
//           echo"<h5 class='card-title'>Book Name: ".$row['bookname']."</h5>";
//        echo" </div>";
//        echo" <ul class='list-group list-group-flush'>";
//           echo"<li class='list-group-item'>Author Name: ".$row['authername']."</li>";
//           echo"<li class='list-group-item'>Price: ".$row['price']."</li>";
//        echo" </ul>";
//         echo"<div class='card-body'>";
//          echo" <a href='#' class='card-link'><button type='submit' class='btn btn-danger'>Add to Cart </button> </a>";
//           echo"<a href='#' class='card-link'><button type='submit' class='btn btn-primary'>Buy Now</button></a>";
//         echo"</div>";
//       echo"</div>";
//     }
    
// }
?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<div class="row mb-3">
      <div class="col-sm-11">