<?php
include 'dictionary.php';
@session_start();
if(!isset($_SESSION['current_lang'])){
    $_SESSION['current_lang']=$default_language;
}
$current_lang=$_SESSION['current_lang'];
$expr=$dictionary[$current_lang];
if (isset($_GET['change'])){
    if(isset($dictionary[$_GET['change']])){
    $_SESSION['current_lang']= $_GET['change'];
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>