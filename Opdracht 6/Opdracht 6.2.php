<?php
// Opdracht 6.2
// Auteur: Dylan van Schouwen

if (!isset($_COOKIE['page_views'])) {
    $page_views = 1;
    setcookie('page_views', $page_views, time() + 86400);
} else {
    $page_views = $_COOKIE['page_views'] + 1;
    setcookie('page_views', $page_views, time() + 86400);
}

echo "Je hebt deze pagina bezocht " . $page_views . " keer.";
?>
