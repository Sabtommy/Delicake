<?php
include '../common/choices/DBhandler.php';

class Model {
  private static $model = null;

  private function __construct() {}

  public static function getInstance() {
    if (self::$model == null) {
      self::$model = new Model();
    }
    return self::$model;
  }

  function checkUser($username) {
    try {
      $sql = "SET @userCount:=0; CALL checkUser(:in_username, @userCount); SELECT @userCount AS userCount;";
      $sth = DBHandler::getInstance()->prepare($sql);
      $sth->bindParam(':in_username', $username);
      $sth->execute();
    } catch (PDOException $e) {
      echo "User check failed: " . $e->getMessage();
    }
  }

  function getUser($username) {
    try {
      $sql = "SET @out_userId:=0; SET @out_username:=''; CALL checkUser(:in_username, @out_userId, @out_username);
            SELECT @out_userId AS userId; SELECT @out_username AS username;";
      $sth = DBHandler::getInstance()->prepare($sql);
      $sth->bindParam(':in_username', $username);
      $sth->execute();
    } catch (PDOException $e) {
      echo "User getting failed: " . $e->getMessage();
    }
  }

  function insertUser($username, $email, $password, $name, $surname, $dateOfBirth, $phone) {
    try {
      $sql = "CALL insertUser(:username, :email, :password, :name, :surname, :dateOfBirth, :phone);";
      $sth = DBHandler::getInstance()->prepare($sql);
      $sth->execute(array(
        ':username' => $username, ':email' => $email, ':password' => $password,
        ':name' => $name, ':surname' => $surname, ':dateOfBirth' => $dateOfBirth,
        ':phone' => $phone
      ));
    } catch (PDOException $e) {
      echo '<script>alert("User insertion failed: ' . $e->getMessage() . '");</script>';
    }
  }
}
