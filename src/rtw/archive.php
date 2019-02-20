<?php

if (isset($_GET['m'])) {
    header('Location: archive.php%3Fm=' . $_GET['m'] . '.html');
} else {
    header('Location: archive.php.html');
}


