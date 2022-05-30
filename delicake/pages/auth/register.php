<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../../styles/auth.css" />
  <title>Register - Delicake</title>
</head>

<body>
  <?php
  if (isset($_SESSION['authError'])) {
    echo '<script>alert("' . $_SESSION['authError'] . '");</script>';
    unset($_SESSION['authError']);
  }
  ?>

  <div class="container">
    <div class="row py-3 align-items-center">
      <div class="row mb-4">
        <p class="font-italic text-muted mb-0">
          Welcome to <span class="primary_color">Delicake</span>
        </p>
        <h2>Create an account</h2>
      </div>

      <!-- Registration Form -->
      <div class="col-md-6 col-lg-6 ml-auto">
        <form action="../../mvc/controller.php" method="POST">
          <!-- Username -->
          <div class="input-group col-lg-6 mb-4">
            <span class="input-group-prepend fa-solid fa-user input-group-text bg-white p-3"></span>
            <input type="text" placeholder="Username *" class="form-control" name="username" required />
          </div>

          <!-- Email -->
          <div class="input-group col-lg-6 mb-4">
            <span class="input-group-prepend fa-solid fa-envelope input-group-text bg-white p-3"></span>
            <input type="email" placeholder="Email *" class="form-control" name="email" required />
          </div>

          <!-- Password -->
          <div class="input-group col-lg-6 mb-4">
            <span class="input-group-prepend fa-solid fa-lock input-group-text bg-white p-3"></span>
            <input type="password" placeholder="Password *" class="form-control" name="password" required />
          </div>

          <!-- Password Confirmation -->
          <div class="input-group col-lg-6 mb-4">
            <span class="input-group-prepend fa-solid fa-lock input-group-text bg-white p-3"></span>
            <input type="password" placeholder="Confirm Password *" class="form-control" name="confirmPassword" required />
          </div>
      </div>
      <div class="col-md-6 col-lg-6 ml-auto">
        <!-- Name -->
        <div class="input-group col-lg-6 mb-4">
          <span class="input-group-prepend fa-solid fa-user input-group-text bg-white p-3"></span>
          <input type="text" placeholder="Name *" class="form-control" name="name" required />
        </div>

        <!-- Surname -->
        <div class="input-group col-lg-6 mb-4">
          <span class="input-group-prepend fa-solid fa-user input-group-text bg-white p-3"></span>
          <input type="text" placeholder="Surname *" class="form-control" name="surname" required />
        </div>

        <!-- Date Of Birth -->
        <div class="input-group col-lg-12 mb-4">
          <span class="input-group-prepend fa-solid fa-calendar-days input-group-text bg-white p-3"></span>
          <input type="text" placeholder="Date Of Birth *" class="form-control" name="dateOfBirth" onfocus="(this.type='date')" required />
        </div>

        <!-- Phone Number -->
        <div class="input-group col-lg-6 mb-4">
          <span class="input-group-prepend fa-solid fa-phone input-group-text bg-white p-3"></span>
          <input type="tel" placeholder="Phone Number" class="form-control" name="phone" />
        </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group col-lg-12 mx-auto mb-0 d-flex justify-content-center">
        <input type="submit" value="Register" class="btn btn-block px-5 py-2 font-weight-bold" name="registration" />
      </div>

      <!-- Already Registered -->
      <div class="text-center">
        <p class="link text-muted">
          Already registered?
          <a href="signin.php" class="text-primary ml-2">Sign in</a>
        </p>
      </div>
      </form>
    </div>
  </div>
  </div>
</body>

</html>