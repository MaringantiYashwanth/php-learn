<?php

// $heading = "Home";
function dd($value) { // dump and die (dd)
    echo "<pre>";
    //var_dump(['safasd']); // dumps in the form of array
    var_dump($_SERVER);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}
