<?php
  $posts = getOldPosts($jsonString);
  foreach($posts as $post){
?>

<li id="<?php echo $post['id']?>">
  <a href="post.php"><?php echo $post['title'] ?></a>
  <span class="archive-date"><?php echo $post['date'] ?></span>
</li>

<?php } ?>