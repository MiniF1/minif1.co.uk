<?php

if (isset($_GET['apage'])) {
    header('Location: blog.php%3Fapage=' . $_GET['apage'] . '.html');
} elseif (isset($_GET['n'])) {
    header('Location: blog.php%3Fn=' . $_GET['n'] . '.html');
} else {
    header('Location: blog.php.html');
}


