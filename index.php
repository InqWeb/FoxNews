<?php 
  include 'includes/header.php';
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
        <!-- 6 карточек постов (ссылки ведут на post.html) -->
        <article class="post-card">
          <img src="https://picsum.photos/400/200?random=1" alt="Пост 1">
          <div class="post-content">
            <h3><a href="post.html">Заголовок поста 1</a></h3>
            <p class="post-meta">12 марта 2026</p>
            <p>Краткое содержание первого поста. Здесь мог быть ваш текст...</p>
          </div>
        </article>
        <article class="post-card">
          <img src="https://picsum.photos/400/200?random=2" alt="Пост 2">
          <div class="post-content">
            <h3><a href="post.html">Заголовок поста 2</a></h3>
            <p class="post-meta">11 марта 2026</p>
            <p>Краткое содержание второго поста. Интересная новость дня.</p>
          </div>
        </article>
        <article class="post-card">
          <img src="https://picsum.photos/400/200?random=3" alt="Пост 3">
          <div class="post-content">
            <h3><a href="post.html">Заголовок поста 3</a></h3>
            <p class="post-meta">10 марта 2026</p>
            <p>Краткое содержание третьего поста. Важное заявление.</p>
          </div>
        </article>
        <article class="post-card">
          <img src="https://picsum.photos/400/200?random=4" alt="Пост 4">
          <div class="post-content">
            <h3><a href="post.html">Заголовок поста 4</a></h3>
            <p class="post-meta">9 марта 2026</p>
            <p>Краткое содержание четвёртого поста. Аналитика и мнения.</p>
          </div>
        </article>
        <article class="post-card">
          <img src="https://picsum.photos/400/200?random=5" alt="Пост 5">
          <div class="post-content">
            <h3><a href="post.html">Заголовок поста 5</a></h3>
            <p class="post-meta">8 марта 2026</p>
            <p>Краткое содержание пятого поста. Эксклюзивное интервью.</p>
          </div>
        </article>
        <article class="post-card">
          <img src="https://picsum.photos/400/200?random=6" alt="Пост 6">
          <div class="post-content">
            <h3><a href="post.html">Заголовок поста 6</a></h3>
            <p class="post-meta">7 марта 2026</p>
            <p>Краткое содержание шестого поста. Фото и видео.</p>
          </div>
        </article>
      </div>

      <!-- Пагинация точками -->
      <div class="pagination-dots">
        <span class="dot active" data-page="1"></span>
        <span class="dot" data-page="2"></span>
        <span class="dot" data-page="3"></span>
        <span class="dot" data-page="4"></span>
        <span class="dot" data-page="5"></span>
        <span class="dot" data-page="6"></span>
      </div>
    </section>

    <?php include 'includes/widgets/sidebar.php' ?>
  </div>
</main>

<?php 
  include 'includes/footer.php';
?>