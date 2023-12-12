<?php
// Opdracht 6.1
// Author = Dylan van schouwen 

session_start();
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 1;
} else {
    $_SESSION['page_views']++;
}

echo "Je hebt deze pagina bezocht " . $_SESSION['page_views'] . " keer.";
session_write_close();
?>
