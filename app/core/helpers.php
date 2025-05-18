<?php

function url($path = '') {
    return BASE_URL . '/' . trim($path, '/');
}

function redirect($path) {
    header("Location: " . url($path));
    exit;
}
