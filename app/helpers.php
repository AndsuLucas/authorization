<?php

if (!function_exists('dump')) {
    function dump($value, $exit = 0) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
        if ($exit) {
            exit;
        }
    }
}