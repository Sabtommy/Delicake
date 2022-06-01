<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  if ($pageName == 'index.php') {
    echo '<link rel="stylesheet" href="styles/footer.css" type="text/css" />';
  } else {
    echo '<link rel="stylesheet" href="../styles/footer.css" type="text/css" />';
  }
  ?>
</head>

<body>
  <footer class="footer">
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <p class="copyright__text text-white">
              Delicake | Tommaso Maglio
            </p>
          </div>
          <div class="col-lg-5">
            <div class="copyright__widget">
              <ul>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>