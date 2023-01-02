<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once('utils.php');

$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if (!$login || !$password) {
  http_response_code(400);
  exit();
}

$user = getUser($login, $password);

if (!$user) {
  $_SESSION['error'] = 'Неверный логин/пароль';
  header('Location: /');
} else {
  setUser($user);
  header('Location: /'.getDefaultUrl($user['role']));
}