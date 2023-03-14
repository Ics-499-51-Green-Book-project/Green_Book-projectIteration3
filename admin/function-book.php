<?php

#Get all books function
function get_all_books($conn){
  $sql= "select * from book ORDER by id DESC";
    $stmt= $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0 ){
        $book = $stmt->fetchAll();

    }else{
        $book = 0;

    }
    return $book;
}