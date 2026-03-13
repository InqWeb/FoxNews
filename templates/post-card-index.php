<?php
  function TemplateIndexPost($posts, $postsOnPage){
    // переделать функцию вывода постов под пагинацию,
    // На данный момент, вывод постов деграется из json файла напрямую
    // Предложение: Получать выводимые посты из функции для паганиции,а далее выводить их на главную страницу
    $count = 0;
    print_r($postsOnPage);
    foreach($posts as $post){
?>

  <article class="post-card" id=<?php echo $post['id'] ?>>
    <a href="post.php"><img src="<?php echo $post['image'] ?>" alt="Пост 1"></a>
    <div class="post-content">
      <h3><a href="post.php"><?php echo $post['title'] ?></a></h3>
      <p class="post-meta"><?php echo $post['date'] ?></p>
      <p><?php echo $post['content'] ?></p>
    </div>
  </article>


<?php 
  }
}
?>