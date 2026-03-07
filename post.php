
<?php 
  include __DIR__ . "../templates/layouts/header.php" 
?>

    <main class="main-content">
        <div class="container">
            <article class="post-full">
                <h1 class="post-full-title">Заголовок данного поста</h1>
                <div class="post-full-meta">
                    <span class="post-full-date">12 марта 2026</span>
                    <span class="post-full-author">Автор: Лис</span>
                </div>
                <img src="https://picsum.photos/1200/600?random=10" alt="Изображение поста" class="post-full-image">
                <div class="post-full-content">
                    <p>Это полный текст поста. Здесь может быть много абзацев, интересных мыслей и новостей. Вёрстка выполнена в тёмных тонах с оранжевыми акцентами, как и требовалось.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </article>

            <!-- Блок похожих постов (опционально) -->
            <section class="related-posts">
                <h2 class="section-title">Похожие новости</h2>
                <div class="posts-grid">
                    <article class="post-card">
                        <img src="https://picsum.photos/400/200?random=7" alt="Похожий пост 1">
                        <div class="post-content">
                            <h3><a href="post.html">Похожий заголовок 1</a></h3>
                            <p class="post-meta">10 марта 2026</p>
                        </div>
                    </article>
                    <article class="post-card">
                        <img src="https://picsum.photos/400/200?random=8" alt="Похожий пост 2">
                        <div class="post-content">
                            <h3><a href="post.html">Похожий заголовок 2</a></h3>
                            <p class="post-meta">9 марта 2026</p>
                        </div>
                    </article>
                    <article class="post-card">
                        <img src="https://picsum.photos/400/200?random=9" alt="Похожий пост 3">
                        <div class="post-content">
                            <h3><a href="post.html">Похожий заголовок 3</a></h3>
                            <p class="post-meta">8 марта 2026</p>
                        </div>
                    </article>
                </div>
            </section>
        </div>
    </main>

<?php 
  include __DIR__ . "../templates/layouts/footer.php" 
?>
