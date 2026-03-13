<?php
 /*
    this is module pagination
 */

function paginatePosts($posts, $perPage = 6){
  $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
  if ($currentPage < 1) $currentPage = 1;

  $totalPosts = count($posts);                #получаем посты и за этип получаем колличество нужных страниц
  $totalPages = ceil($totalPosts / $perPage);
  
  if ($currentPage > $totalPages) {
    // Если запрошенная страница больше максимальной, отдаём последнюю
        $currentPage = $totalPages;
    }


  $offset = ($currentPage - 1) * $perPage;
  $postsOnPage = array_slice($posts, $offset, $perPage);

  return [
        'posts' => $postsOnPage,
        'totalPages' => $totalPages,
        'currentPage' => $currentPage
  ];
}

function renderPaginationDots($totalPages, $currentPage) {
    for ($i = 1; $i <= $totalPages; $i++) {
        $activeClass = ($i == $currentPage) ? 'active' : '';
        // Важно: в ссылке не должно быть пробела перед значением page
        echo "<a href='?page=$i' class='dot $activeClass'></a>";
    }
}