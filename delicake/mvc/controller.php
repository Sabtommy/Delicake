<?php
if (isset($_REQUEST['req'])) {
  switch ($_REQUEST['req']) {
      case 'products':
          header('Location: ../userpages/products.php');
          exit;
          break;
      case'shops':
          header('Location: ../userpages/shops.php');
          exit;
          break;
      case 'insertShop':
          break;
      default: header('Location: ../index.php');
      exit;
  }
}

if (isset($_POST['registration'])) {
  $username = htmlspecialchars($_POST['username']);

  $userCount = Model::getInstance()->checkUser($username);

  // Check that username field is not already taken
  if ($userCount == 0) {
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

    // Check that the two passwords entered are the same
    if ($password == $confirmPassword) {
      $password = password_hash($password, PASSWORD_DEFAULT);

      $email = htmlspecialchars($_POST['email']);
      $name = htmlspecialchars($_POST['name']);
      $surname = htmlspecialchars($_POST['surname']);
      $dateOfBirth = htmlspecialchars($_POST['dateOfBirth']);
      $phone = htmlspecialchars($_POST['phone']);

      Model::getInstance()->insertUser($username, $email, $password, $name, $surname, $dateOfBirth, $phone);

      // $querySelectNewUser = 'SELECT username FROM users WHERE username=:username';
      // $newUser = $dbh->getInstance()->prepare($querySelectNewUser);
      // $newUser->bindParam(':username', $username);
      // $newUser->execute();

      // $userFound = $newUser->fetchAll();

      // // Set the session as logged in
      // $_SESSION['username'] = $userFound[0]['username'];

      // // Redirect to main page
      // header('Location:../index.php');
      // exit;
    } else {
      // Set the error message
      $_SESSION['authError'] = "Passwords don't match";
    }
  } else {
    // Set the error message
    $_SESSION['authError'] = 'Username already taken';
  }

  header('Location: ../pages/auth/register.php');
}

if (isset($_POST['signingIn'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  $userCount = Model::getInstance()->checkUser($username, $userId);

  // Check that user exists
  if ($userCount > 0) {
    // $userFound = $user->fetchAll();
    // $userId = $userFound[0]['userId'];

    // $querySelectPassword = 'SELECT PASSWORD FROM users WHERE userId=' . $userId;
    // $usersPassword = $dbh->getInstance()->query($querySelectPassword);
    // $passwordFound = $usersPassword->fetchAll();

    // // Check that the entered password matches the hashed one
    // if (password_verify($password, $passwordFound[0]['PASSWORD'])) {
    //   // Set the session as logged in
    //   $_SESSION['userId'] = $userFound[0]['userId'];
    //   $_SESSION['username'] = $userFound[0]['username'];

    //   // Redirect to main page
    //   header('Location: ../index.php');
    //   exit;
    // } else {
    //   // Set the error message
    //   $_SESSION['authError'] = 'Wrong password';
    // }
  } else {
    // Set the error message
    $_SESSION['authError'] = 'User not found';
  }

  // Redirect to login page
  header('Location: ../pages/auth/login.php');
  exit;
}
