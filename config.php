<?php
session_status() === PHP_SESSION_ACTIVE ?: session_start();

$Ba_se = 'http://127.0.0.1/DPshopp/';

$DBname =  'ploginfmw';

$DBhost =  '127.0.0.1';

$DBuser = 'root';

$DBpass = '';

$pdo = new PDO('mysql:dbname=' . $DBname . ';host' . $DBuser, $DBuser, $DBpass);
if (!$pdo) {
  echo 'Not connect';
} else {
  //echo 'sucess connect';
}
