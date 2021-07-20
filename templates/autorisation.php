<?php
$valueEmail = $_COOKIE['email'] ?? '';
if (! empty($_POST)) {
    include $_SERVER['DOCUMENT_ROOT'] . '/data/passwords.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/data/users.php';
    $key = array_search($_POST['email'], $emails);
    if($key !== false && $_POST['password'] == $passwords[$key]){
        $isAutorisation = true;
        $_SESSION['Autorisation'] = $isAutorisation;
        $_SESSION['Name'] = $_POST['email'];
        setcookie('email', $_POST['email'], time() + 3600 * 24 * 40);
    }
    else {
        $isAutorisation = false;
        $_SESSION['Autorisation'] = $isAutorisation;
        $valueEmail = ($_POST['email'] ?? 0);
        $valuePass = ($_POST['password'] ?? 0);
    }
}      