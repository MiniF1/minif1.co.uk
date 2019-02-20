<?php

if (isset($_GET['m'])) {
    header('Location: worldmap.php%3Fm=' . $_GET['m'] . '.html');
} else {
    header('Location: worldmap.php.html');
}


