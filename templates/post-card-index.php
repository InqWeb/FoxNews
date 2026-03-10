<?php
  $posts = postSortDate($jsonString);
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
<?php } ?>