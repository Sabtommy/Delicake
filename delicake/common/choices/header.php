<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php
  $pageName = basename($_SERVER['PHP_SELF']);

  if ($pageName == 'index.php') {
    echo '<title>Delicake</title>
    <link rel="icon" type="image/png" href="images/brand/donut.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="styles/header.css" type="text/css" />
    <link rel="stylesheet" href="styles/style.css" type="text/css" />';
  } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
    echo '<link rel="icon" type="image/png" href="../../images/brand/donut.png" />
    <link rel="stylesheet" href="../../styles/header.css" type="text/css" />
    <link rel="stylesheet" href="../../styles/auth.css" type="text/css" />
    <link rel="stylesheet" href="../../styles/style.css" type="text/css" />';
  } else {
    echo '<link rel="icon" type="image/png" href="../images/brand/donut.png" />
    <link rel="stylesheet" href="../styles/header.css" type="text/css" />
    <link rel="stylesheet" href="../styles/style.css" type="text/css" />';
  }
  ?>
</head>

<body>
  <div class="offcanvas-menu-overlay"></div>

  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
      <?php
      if ($pageName == 'index.php') {
        echo '<a href="index.php">
        <img src="images/brand/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />
        </a>';
      } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
        echo '<a href="index.php">
        <img src="../../images/brand/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />
        </a>';
      } else {
        echo '<a href="../index.php">
        <img src="../images/brand/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />
        </a>';
      }
      ?>
    </div>

    <div class="list-group">
      <?php
      if ($pageName == 'index.php') {
        echo '<a href="index.php" class="list-group-item list-group-item-action active">Home</a>';
      } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
        echo '<a href="../../index.php" class="list-group-item list-group-item-action">Home</a>';
      } else {
        echo '<a href="../index.php" class="list-group-item list-group-item-action">Home</a>';
      }
      if ($pageName == 'shop.php') {
        echo '<a href="shop.php" class="list-group-item list-group-item-action active">Shop</a>';
      } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
        echo '<a href="../shop.php" class="list-group-item list-group-item-action">Shop</a>';
      } else {
        echo '<a href="pages/shop.php" class="list-group-item list-group-item-action">Shop</a>';
      }
      if ($pageName == 'about.php') {
        echo '<a href="about.php" class="list-group-item list-group-item-action active">About</a>';
      } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
        echo '<a href="../about.php" class="list-group-item list-group-item-action">About</a>';
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
          <?php
          if ($pageName == 'index.php') {
            echo '<a href="pages/auth/signin.php">Sign in</a>';
          } elseif ($pageName != 'signin.php' || $pageName != 'register.php') {
            echo '<a href="auth/signin.php">Sign in</a>';
          }
          ?>
        </li>
        <li>
          <?php
          if ($pageName == 'index.php') {
            echo '<a href="pages/auth/register.php">Register</a>';
          } elseif ($pageName != 'signin.php' || $pageName != 'register.php') {
            echo '<a href="auth/register.php">Register</a>';
          }
          ?>
        </li>
      </ul>

      <ul style="margin-right: 10px;">
        <li>
          <a href="" class="search-switch"><span class="fa-solid fa-magnifying-glass"></span></a>
        </li>
        <li>
          <?php
          if ($pageName == 'index.php') {
            echo '<a href="pages/cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em;">';
          } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
            echo '<a href="../cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em;">';
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
                    <?php
                    if ($pageName == 'index.php') {
                      echo '<a href="pages/auth/signin.php">Sign in</a>';
                    } elseif ($pageName != 'signin.php' || $pageName != 'register.php') {
                      echo '<a href="auth/signin.php">Sign in</a>';
                    }
                    ?>
                  </li>
                  <li>
                    <?php
                    if ($pageName == 'index.php') {
                      echo '<a href="pages/auth/register.php">Register</a>';
                    } elseif ($pageName != 'signin.php' || $pageName != 'register.php') {
                      echo '<a href="auth/register.php">Register</a>';
                    }
                    ?>
                  </li>
                </ul>
              </div>

              <div class="header__logo">
                <?php
                if ($pageName == 'index.php') {
                  echo '<a href="index.php">
                  <img src="images/brand/inline-logo.png" class="normal_logo" alt="Delicake" height="50" />';
                } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
                  echo '<a href="../../index.php">
                  <img src="../../images/brand/inline-logo.png" class="normal_logo" alt="Delicake" height="50" />';
                } else {
                  echo '<a href="../index.php">
                  <img src="../images/brand/inline-logo.png" class="normal_logo" alt="Delicake" height="50" />';
                }
                ?>
                </a>
                <?php
                if ($pageName == 'index.php') {
                  echo '<a href="index.php">
                  <img src="images/brand/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
                } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
                  echo '<a href="../../index.php">
                  <img src="../../images/brand/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
                } else {
                  echo '<a href="../index.php">
                  <img src="../images/brand/whiteinline-logo.png" class="white_logo" alt="Delicake" height="50" />';
                }
                ?>
                </a>
              </div>

              <div class="header__top__right">
                <ul>
                  <li>
                    <a href="" class="search-switch"><span class="fa-solid fa-magnifying-glass"></span></a>
                  </li>
                  <li>
                    <?php
                    if ($pageName == 'index.php') {
                      echo '<a href="pages/cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em">';
                    } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
                      echo '<a href="../cart.php" class="fa-layers-top-right fa-fw" style="--fa-right: -0.3em">';
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
              if ($pageName == 'index.php') {
                echo '<li class="active"><a href="index.php">Home</a></li>';
              } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
                echo '<li><a href="../../index.php">Home</a></li>';
              } else {
                echo '<li><a href="../index.php">Home</a></li>';
              }
              if ($pageName == 'shop.php') {
                echo '<li class="active"><a href="shop.php">Shop</a></li>';
              } elseif ($pageName == 'index.php') {
                echo '<li><a href="pages/shop.php">Shop</a></li>';
              } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
                echo '<li><a href="../shop.php">Shop</a></li>';
              } else {
                echo '<li><a href="shop.php">Shop</a></li>';
              }
              ?>
              <li>
                <a href="">Pages</a>
                <ul class="dropdown">
                  <li><a href="cart.php">Shopping cart</a></li>
                  <li><a href="">Checkout</a></li>
                </ul>
              </li>
              <?php
              if ($pageName == 'about.php') {
                echo '<li class="active"><a href="about.php">About</a></li>';
              } elseif ($pageName == 'index.php') {
                echo '<li><a href="pages/about.php">About</a></li>';
              } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
                echo '<li><a href="../about.php">About</a></li>';
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

  <?php
  if ($pageName == 'about.php' || $pageName == 'shop.php' || $pageName == 'cart.php' || $pageName == 'product.php') {
    echo '<div class="pt-4">
      <div class="container">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="breadcrumb__text">';
    if ($pageName == 'about.php') {
      echo '<h2>About</h2>';
    } elseif ($pageName == 'shop.php') {
      echo '<h2>Shop</h2>';
    } elseif ($pageName == 'cart.php') {
      echo '<h2>Cart</h2>';
    } elseif ($pageName == 'product.php') {
      echo '<h2>Product</h2>';
    }
    echo '</div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
    <div class="breadcrumb__links">
    <a href="../index.php">Home</a>';
    if ($pageName == 'about.php') {
      echo '<span>About</span>';
    } elseif ($pageName == 'shop.php') {
      echo '<span>Shop</span>';
    } elseif ($pageName == 'cart.php') {
      echo '<span>Cart</span>';
    } elseif ($pageName == 'product.php') {
      echo '<span>Product</span>';
    }
    echo '</div>
    </div>
    </div>
    </div>
    </div>';
  }

  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://kit.fontawesome.com/48cbd8cafa.js" crossorigin="anonymous"></script>

  <?php
  if ($pageName == 'index.php') {
    echo '<script src="scripts/header.js"></script>';
  } elseif ($pageName == 'signin.php' || $pageName == 'register.php') {
    echo '<script src="../../scripts/header.js"></script>';
  } else {
    echo '<script src="../scripts/header.js"></script>';
  }
  ?>
</body>

</html>