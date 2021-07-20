<?php
function changeColor($Menu, $index){
    if ($Menu[$index]['path'] == $_SERVER['REQUEST_URI']) {
        $color = 'text-orange';
    }
    else {
        $color = 'text-gray-600';
    }
    return $color;
}