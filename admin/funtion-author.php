<?php

#Get all Authors function
function get_all_authors($conn){
  $sql= "select * from author";
    $stmt= $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0 ){
        $authors = $stmt->fetchAll();

    }else{
        $authorx = 0;

    }
    return $authors;
}