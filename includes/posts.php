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

  function postSortDate($jsonString){
    #Переделать функцию, обязательно
    $posts = json_decode($jsonString, true);
    $postDate = [];
    foreach ($posts as $post){
      if(isset($post['date'])){
        $postDate[] = $post["date"];
      }else{
        $postDate[] = '1970-01-01'; 
      }
      
    }
    array_multisort($postDate, SORT_STRING, $posts);
    return array_reverse($posts);
  }


  function getOldPosts($jsonString) {
      $posts = json_decode($jsonString, true);
      $prevMonth = date('Y-m-d', strtotime('-1 month'));
      $oldPosts = [];
      
      foreach ($posts as $post) {
          // Проверяем, что поле date существует и имеет смысл
          if (isset($post['date']) && $post['date'] < $prevMonth) {
            $oldPosts[] = $post;
          }
      }
      
      return $oldPosts;
  }

?>