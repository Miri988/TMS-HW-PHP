<?php
session_start();

unset($_SESSION['user']);
unset($_SESSION['role']);
unset($_SESSION['error']);

header('Location: /');