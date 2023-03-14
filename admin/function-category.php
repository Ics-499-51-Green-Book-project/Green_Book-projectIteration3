<?php

#Get all category function
function get_all_catagories($conn){
  $sql= "select * from catagories";
    $stmt= $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0 ){
        $catagories = $stmt->fetchAll();

    }else{
        $catagories = 0;

    }
    return $catagories;
}




#Catagories by Id
function get_category($conn, $id){
    $sql= "select * from catagories where id=?";
      $stmt= $conn->prepare($sql);
      $stmt->execute([$id]);
  
      if($stmt->rowCount() > 0 ){
          $category = $stmt->fetch();
  
      }else{
          $category = 0;
  
      }
      return $category;
    }
    