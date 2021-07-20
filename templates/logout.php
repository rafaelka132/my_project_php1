<?php
session_start();
$_SESSION['Autorisation'] = false;
unset($_SESSION['Name']);
header('Location: /');