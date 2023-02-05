<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['password'] === 'password1') {
    $_SESSION['authenticated'] = true;
    header('Location: LoggedIn.php');
    exit;
  }
}

header('Location: index.php');
exit;