<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../../styles/auth.css" />
  <title>Sign in - Delicake</title>
</head>

<body>
  <?php
  if (isset($_SESSION['authError'])) {
    echo '<script>alert("' . $_SESSION['authError'] . '");</script>';
    unset($_SESSION['authError']);
  }
  ?>

  <div class="container">
    <div class="row py-3 align-items-center d-flex justify-content-center">
      <div class="row mb-4">
        <p class="font-italic text-muted mb-0">
          Welcome to <span class="primary_color">Delicake</span>
        </p>
        <h2>Sign in</h2>
      </div>

      <!-- Sign in Form -->
      <div class="col-md-8 col-lg-6 ml-auto">
        <form action="../../mvc/controller.php" method="POST">
          <!-- Username or Email -->
          <div class="input-group col-lg-6 mb-4">
            <span class="input-group-prepend fa-solid fa-user input-group-text bg-white p-3"></span>
            <input type="text" placeholder="Username or email" class="form-control" name="username" required />
          </div>

          <!-- Password -->
          <div class="input-group col-lg-6 mb-4">
            <span class="input-group-prepend fa-solid fa-lock input-group-text bg-white p-3"></span>
            <input type="password" placeholder="Password" class="form-control" name="password" required />
          </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group col-lg-12 mx-auto mb-0 d-flex justify-content-center">
        <input type="submit" value="Sign in" class="btn btn-block px-5 py-2 font-weight-bold" name="signingIn" />
      </div>

      <!-- Don't have an account -->
      <div class="text-center">
        <p class="link text-muted">
          Don't have an account?
          <a href="register.php" class="text-primary ml-2">Register</a>
        </p>
      </div>
      </form>
    </div>
  </div>
  </div>
</body>

</html>