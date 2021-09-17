<?php
session_start();
if (!$_SESSION['usuario'] && !$_SESSION['autorizacao']) {
    header("Location: login.php");
    exit();
}
