<?php

session_start();
ob_start();

unset($_SESSION['nome']);
$_SESSION['msg'] = "Sessão Encerrada!";
header("Location: ./login.php");
?>