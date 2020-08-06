<?php
session_start();
if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
    header('Location: registro.php?info=Ingresa tus credenciales');
  exit;
}