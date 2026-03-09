<?php include __DIR__ . "../templates/layouts/header.php" ?>
<?php include __DIR__ . "../includes/posts.php" ?>

<main class="main-content">
  <div class="container">
    <h2 class="section-title">Архив постов</h2>
    <ul class="archive-list">
      <?php include "templates/post-card-acrhive.php" ?>
    </ul>

  </div>
</main>
<?php include __DIR__ . "../templates/layouts/footer.php" ?>
</body>

</html>