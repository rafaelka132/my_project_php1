<?php
    if (!isset($_SESSION['Autorisation'])) {
        session_start();
    }
    include 'includeTemplate.php';
    include 'arraySort.php';
    include 'cutString.php';
    include 'changeColor.php';
    include 'head.php';
?>