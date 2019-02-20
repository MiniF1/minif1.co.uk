<?php

if (isset($_GET['p'])) {
    header('Location: photo.php%3Fp=' . $_GET['p'] . '.html');
} elseif (isset($_GET['g'])) {
    header('Location: photo.php%3Fg=' . $_GET['g'] . '.html');
} else {
    header('Location: photo.php.html');
}


