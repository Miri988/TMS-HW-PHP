<?php

$ROLE_ADMIN = 1;
$ROLE_USER = 2;
$PAGE_USER = 'user.php';
$PAGE_ADMIN = 'admin.php';

$USERS = [
  [ 'login'     => 'sharpSchnitzel',
    'password'  => '123',
    'role'      => $ROLE_USER
  ],
  [ 'login'     => 'Grenka',
    'password'  => '123',
    'role'      => $ROLE_ADMIN
  ],
  [ 'login'     => 'test',
    'password'  => '123',
    'role'      => $ROLE_USER
  ]
];

$PAGE_MAPPING = [
  $ROLE_ADMIN => $PAGE_ADMIN,
  $ROLE_USER => $PAGE_USER
];

function getUser($login, $password) {
  global $USERS;
  $result = array_filter($USERS, function ($v) use ($login, $password) {
    return $v['login'] === $login && $v['password'] === $password;
  });
  return empty($result) ? null : array_values($result)[0];
}

function setUser($user) {
  $_SESSION['user'] = $user['login'];
  $_SESSION['role'] = $user['role'];
}

function getDefaultUrl($role) {
  global $PAGE_MAPPING;
  return $PAGE_MAPPING[$role];
}
