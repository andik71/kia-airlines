<?php
session_start();
//session_destroy();
unset($_SESSION['ADMIN']);
header('Location:index.php?page=home');