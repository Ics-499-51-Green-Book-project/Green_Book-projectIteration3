<?php


  #Database connection file
  include "db_conn.php";

  #book helper function
    include "function-book.php";
    $book = get_all_books($conn);

  #Author helper function
  include "funtion-author.php";
  $authors = get_all_authors($conn);

  #Categories helper function
  include "function-category.php";
  $catagories = get_all_catagories($conn);
  

?>
<!DOCTYPE html>
<html long="en"
<head>
    <title>Admin</title>
    <meta charset="UTF-8">
    <meta html-equiv="X-UA-Compatible" content="IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"href="adHome.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="adHome.php">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Green Book<span class="sr-only">(current)</span></a>
      </li>
      
      
      <li class="nav-item active">
        <a class="nav-link" href="../add-book.php">Add book<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../add-category.php">Add Catagory<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../add-author.php">Add Author<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
    
    
   
  </div>
</nav>
<?php if($book == 0){ ?>
empty
<?php } else{?>

<!-- List of all books  -->
<h2 class="mt-3"> All books</h2>
      <table class ="table table-bordered shadow"
      style="width: 90%;">
        <thead>
            <tr>
                <th>#</th>
                <th>Tittle</th>
                <th>Cost</th>
                <th>Edition</th>
                <th>Publish Place</th>
                <th>Author</th>
                <th>Catagory</th>
                <th>Action</th>
          </tr>
      </thead>
    </tbody>
    <?php 
    $i=0;
    foreach ($book as $book){
      $i++;
      ?>
    
    <tr>
                 <td><?=$i?></td>
                 <td>
                    <img width="80"
                    src="../uploads/cover/<?=$book['cover']?>" >
                    <a class ="link-dark d-block
                    text-left"
                    href="../uploads/files/<?=$book['file']?>" >
                
                  <?=$book['tittle']?>
                  </a>
                </td>
                 <td><?=$book['cost']?></td>
                 <td><?=$book['edition']?></td>
                 <td> <?=$book['pubPlace']?></td>
                 <td>

                 <?php if($authors == 0){
                  echo"undefined";}else{
                  foreach ($authors as $author){
                    if($author['id']==$book['author_id']){
                      echo $author['name'];

                    }

                  }
                 }
                 ?>
                </td>
                 <td>
                 <?php if($catagories == 0){
                  echo"undefined";}else{
                  foreach ($catagories as $catagory){
                    if($catagory['id']==$book['category_id']){
                      echo $catagory['name'];

                    }

                  }
                 }
                 ?>
                </td>
                 <td>

                     <a href="#"
                    class="btn btn-warning">
                    Edit</a>
                    <a href="#"
                    class="btn btn-danger">
                      Delete</a>
          </td>
          </tr>
          <?php }?>

              </tbody>
          </table>
          <?php }?>
           <?php if($catagories == 0){ ?>
              empty
          <?php } else{?>


        <!-- List of all Catagories -->
        <h2 class="mt-5"> All Catagories</h2>
        <table class ="table table-bordered shadow"
        style="width: 90%;">
          <thread> 
            <tr>
                <th>#</th>
                <th>Catagory Name</th>
                <th>Action</th>
        
                </tr>
                  </thread>
                  <tbody>
                    <?php
                    $j=0;
                    foreach ($catagories as $catagory){
                      $j++;
              ?>
            <tr>
              <td><?=$j?></td>
              <td><?=$catagory['name']?></td>
              <td>

                      <a href="../edit-category.php?id=<?=$catagory['id']?>"
                      class="btn btn-warning">
                      Edit</a>
                      <a href="#"
                      class="btn btn-danger">
                      Delete</a>
            </td>
          </tr>
      <?php }?>
                  
      </tbody>
    </table>

    <?php }?>
    <?php if($authors == 0){ ?>
              empty
          <?php } else{?>


        <!-- List of all Authors -->
        <h2 class="mt-5"> All Authors</h2>
        <table class ="table table-bordered shadow"
        style="width: 90%;">
          <thread> 
            <tr>
                <th>#</th>
                <th>Author Name</th>
                <th>Action</th>
        
                </tr>
                  </thread>
                  <tbody>
                    <?php
                    $k=0;
                    foreach ($authors as $author){ 
                      $k++;
              ?>
            <tr>
              <td><?=$k?></td>
              <td><?=$author['name']?></td>
              <td>

                      <a href="#"
                      class="btn btn-warning">
                      Edit</a>
                      <a href="#"
                      class="btn btn-danger">
                      Delete</a>
            </td>
          </tr>
      <?php }?>
      </tbody>
    </table>
  <?php }?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.16.0/umd.popper.min.ks"></script>
<script src ="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

</body>
</html>

