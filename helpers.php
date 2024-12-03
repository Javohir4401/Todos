<?php

function view (string $page, array $data = []) {
    extract($data);
    require 'views/' . $page . '.php';
}

function redirect (string $url) {
    header('Location: ' . $url);
}