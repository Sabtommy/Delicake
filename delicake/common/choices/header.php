<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php
  if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    echo '<link rel="icon" type="image/png" href="images/donut.png" />
    <link rel="stylesheet" href="styles/header.css" type="text/css" />';
  } else {
    echo '<link rel="icon" type="image/png" href="../images/donut.png" />
    <link rel="stylesheet" href="../styles/header.css" type="text/css" />
    <link rel="stylesheet" href="../styles/style.css" type="text/css" />';
  }
  ?>
  
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
</head>

<body>
  <div class="offcanvas-menu-overlay"></div>

  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
      <?php
      if (basename($_SERVER['PHP_SELF']) == 'index.php') {
        echo '<a href="index.php">
          <img src="images/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
      } else {
        echo '<a href="../index.php">
          <img src="../images/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
      }
      ?>
      </a>
    </div>

    <div class="list-group">
      <?php
      if (basename($_SERVER['PHP_SELF']) == 'index.php') {
        echo '<a href="index.php" class="list-group-item list-group-item-action active">Home</a>';
      } else {
        echo '<a href="../index.php" class="list-group-item list-group-item-action">Home</a>';
      }
      if (basename($_SERVER['PHP_SELF']) == 'shop.php') {
        echo '<a href="shop.php" class="list-group-item list-group-item-action active">Shop</a>';
      } else {
        echo '<a href="pages/shop.php" class="list-group-item list-group-item-action">Shop</a>';
      }
      if (basename($_SERVER['PHP_SELF']) == 'pages.php') {
        echo '<a href="pages.php" class="list-group-item list-group-item-action active">Pages</a>';
      } else {
        echo '<a href="pages.php" class="list-group-item list-group-item-action">Pages</a>';
      }
      if (basename($_SERVER['PHP_SELF']) == 'about.php') {
        echo '<a href="about.php" class="list-group-item list-group-item-action active">About</a>';
      } else {
        echo '<a href="pages/about.php" class="list-group-item list-group-item-action">About</a>';
      }
      ?>
    </div>
  </div>

  <div class="offcanvas__option container">
    <div class="d-flex justify-content-between">
      <ul style="margin-left: 10px;">
        <li>
          <a href="#">Login</a>
        </li>
        <li>
          <a href="#">Sign up</a>
        </li>
      </ul>

      <ul style="margin-right: 10px;">
        <li>
          <a href="#" class="search-switch"><span class="fa-solid fa-magnifying-glass"></span></a>
        </li>
        <li>
          <?php
          if (basename($_SERVER['PHP_SELF']) == 'index.php') {
            echo '<a href="pages/cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em;">';
          } else {
            echo '<a href="cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em;">';
          }
          ?>
          <span class="fa-solid fa-cart-shopping"></span>
          <span class="fa-layers-counter" style="--fa-counter-scale: 0.5; --fa-counter-max-width: 45px;">3</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header__top__inner">
              <div class="header__top__left">
                <ul>
                  <li>
                    <a href="#">Login</a>
                  </li>
                  <li>
                    <a href="#">Sign up</a>
                  </li>
                </ul>
              </div>

              <div class="header__logo">
                <?php
                if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                  echo '<a href="index.php">
                    <img src="images/inline-logo.png" class="normal_logo" alt="Delicake" height="50" />';
                } else {
                  echo '<a href="../index.php">
                    <img src="../images/inline-logo.png" class="normal_logo" alt="Delicake" height="50" />';
                }
                ?>
                </a>
                <?php
                if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                  echo '<a href="index.php">
                    <img src="images/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
                } else {
                  echo '<a href="../index.php">
                    <img src="../images/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
                }
                ?>
                </a>
              </div>

              <div class="header__top__right">
                <ul>
                  <li>
                    <a href="#" class="search-switch"><span class="fa-solid fa-magnifying-glass"></span></a>
                  </li>
                  <li>
                    <?php
                    if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                      echo '<a href="pages/cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em">';
                    } else {
                      echo '<a href="cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em">';
                    }
                    ?>
                    <span class="fa-solid fa-cart-shopping"></span>
                    <span class="fa-layers-counter" style="--fa-counter-scale: 0.5; --fa-counter-max-width: 45px">3</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="canvas__open">
          <span class="fa-solid fa-bars" style="color:white;"></span>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="header__menu">
            <ul>
              <?php
              if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo '<li class="active"><a href="index.php">Home</a></li>';
              } else {
                echo '<li><a href="../index.php">Home</a></li>';
              }
              if (basename($_SERVER['PHP_SELF']) == 'shop.php') {
                echo '<li class="active"><a href="shop.php">Shop</a></li>';
              } elseif (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo '<li><a href="pages/shop.php">Shop</a></li>';
              } else {
                echo '<li><a href="shop.php">Shop</a></li>';
              }
              ?>
              <li>
                <a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="./shop-details.html">Shop Details</a></li>
                  <li><a href="cart.php">Shopping Cart</a></li>
                  <li><a href="./checkout.html">Check Out</a></li>
                  <li><a href="./wishlist.html">Wishlist</a></li>
                  <li><a href="./class.html">Class</a></li>
                  <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
              </li>
              <?php
              if (basename($_SERVER['PHP_SELF']) == 'about.php') {
                echo '<li class="active"><a href="about.php">About</a></li>';
              } elseif (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo '<li><a href="pages/about.php">About</a></li>';
              } else {
                echo '<li><a href="about.php">About</a></li>';
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here...">
      </form>
    </div>
  </div>


  <script src="https://kit.fontawesome.com/48cbd8cafa.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <?php
  if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    echo '<script src="scripts/header.js"></script>
    <script src="scripts/script.js"></script>';
  } else {
    echo '<script src="../scripts/header.js"></script>
    <script src="../scripts/script.js"></script>';
  }
  ?>
</body>

</html>