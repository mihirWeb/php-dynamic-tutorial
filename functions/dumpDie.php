<?php

function dd($value){
    echo "<pre>";
    var_dump($value); // any variable generally super globals
    echo "</pre";

    die(); // stop all activities including html after this
}