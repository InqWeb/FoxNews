<?php 
  include __DIR__ . "../templates/layouts/header.php";
  include __DIR__ . "../includes/posts.php";
  include_once __DIR__ . "../includes/pagination.php";
  include 'templates/post-card-index.php';
  $posts = postSortDate($jsonString);
  $paginated = paginatePosts($posts);
  $postsOnPage = $paginated['posts'];
  $totalPages = $paginated['totalPages'];
  $currentPage = $paginated['currentPage'];

?>

<section class="hero">
  <div class="container">
    <h2 class="section-title">Самые обсуждаемые новости недели</h2>
    <div class="slider">
      <div class="slider-wrapper">
        <div class="slide active">
          <h3>Заголовок горячей новости 1</h3>
          <p>Краткое описание самой обсуждаемой новости за эту неделю. Много комментариев и споров.</p>
        </div>
        <div class="slide">
          <h3>Заголовок горячей новости 2</h3>
          <p>Ещё одна важная тема, которая взорвала интернет на этой неделе.</p>
        </div>
        <div class="slide">
          <h3>Заголовок горячей новости 3</h3>
          <p>Неожиданный поворот событий — главные обсуждения последних дней.</p>
        </div>
      </div>
      <div class="slider-dots">
        <span class="dot active" data-slide="0"></span>
        <span class="dot" data-slide="1"></span>
        <span class="dot" data-slide="2"></span>
      </div>
    </div>
  </div>
</section>

<main class="main-content">
  <div class="container main-grid">

    <section class="posts">
      <h2 class="section-title">Последние посты</h2>
      <div class="posts-grid">
        <?php TemplateIndexPost($posts, $postsOnPage) ?>
        
      </div>

    </section>

    <?php include 'templates/sidebar.php'; ?>

    <nav class="pagination-dots">
        <?php renderPaginationDots($totalPages, $currentPage); ?>
        <!-- <span class="dot active" data-page="1"></span>
        <span class="dot" data-page="2"></span>
        <span class="dot" data-page="3"></span>
        <span class="dot" data-page="4"></span>
        <span class="dot" data-page="5"></span>
        <span class="dot" data-page="6"></span> -->
    </nav>


  </div>
</main>

<?php 
  include __DIR__ . "../templates/layouts/footer.php" 
?>
