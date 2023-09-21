<?php
    $uri = $_SERVER["REQUEST_URI"];
    $uri = explode("/", $uri);
    $uri = array_values(array_filter($uri));
?>