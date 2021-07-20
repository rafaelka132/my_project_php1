<?php
function head() {
    if (isset( $_SESSION['Autorisation'])) {
        if ( $_SESSION['Autorisation'] == true) {
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/auth.php';
        }
        else {
            include $_SERVER['DOCUMENT_ROOT'] . '/templates/not_auth.php';
        }
    }else {
        include $_SERVER['DOCUMENT_ROOT'] . '/templates/not_auth.php';
    }
}