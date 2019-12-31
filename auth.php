<?php 
session_start();

if (!isset($_SESSION['login'])) {
  echo "Fuck off";
  die();
}
