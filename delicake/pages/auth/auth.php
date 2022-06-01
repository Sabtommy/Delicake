<?php
if ($_POST['register']) {
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
}
header('Location: ../pages/auth/register.php');
