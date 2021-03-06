<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shop - Delicake</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../styles/header.css" type="text/css" />
</head>

<body>
  <section class="shop py-5">
    <div class="container">
      <div class="shop__option">
        <div class="row">
          <div class="col-lg-7 col-md-7">
            <div class="shop__option__search">
              <form action="">
                <select>
                  <option value="">Categories</option>
                </select>
                <input type="text" placeholder="Search">
                <button type="submit"><span class="fa-solid fa-magnifying-glass"></span></button>
              </form>
            </div>
          </div>
          <div class="col-lg-5 col-md-5">
            <div class="shop__option__right">
              <select>
                <option value="">Name</option>
                <option value="">Popular</option>
                <option value="">Price: low to high</option>
                <option value="">Price: high to low</option>
                <option value="">New products</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        for ($i = 0; $i < 9; $i++) {
          echo '<div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="../images/products/cupcake-1.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="">Classic cupcake</a></h6>
              <div class="product__item__price">€2.98</div>
              <div class="cart_add">
                <a href="">Add to cart</a>
              </div>
            </div>
          </div>
        </div>';
        }
        ?>
      </div>
      <div class="shop__last__option">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="shop__pagination">
              <a href="">1</a>
              <a href="">2</a>
              <a href="">3</a>
              <a href=""><span class="fa-solid fa-angle-right"></span></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="shop__last__text">
              <p>Showing 1-9 of 32 results</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-NqYds8su6jivy1/WLoW8x1tZMRD7/1ZfhWG/jcRQLOzV1k1rIODCpMgoBnar5QXshKJGV7vi0LXLNXPoFsM5Zg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../scripts/script.js"></script>
</body>

</html>