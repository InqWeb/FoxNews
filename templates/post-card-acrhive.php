<?php
  $posts = allPost($jsonString);
  foreach($posts as $post){
?>

<li id="<?php echo "id постов"?>">
  <a href="post.php"><?php echo $post['title'] ?></a>
  <span class="archive-date"><?php echo $post['date'] ?></span>
</li>

<?php } ?>