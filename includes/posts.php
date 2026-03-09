<?php
  $jsonString = file_get_contents(__DIR__ .'/../data/posts.json');
  if($jsonString){

  }else{
    die("<h1>файла с постами нет!</h1>");  
  }

  function allPost($jsonString){
    //функция для получения всех постов из Json
    if($jsonString){
      $data = json_decode($jsonString, true);
      return $data;
    }else{
      echo "<h1>файл не найден</h1>";
    }

  }

  function readPostKey($jsonString, $key){
    //получение постов по ключам
    $posts = json_decode($jsonString, true);
    foreach ($posts as $post){
      print_r($post[$key]);
    }
  }
?>