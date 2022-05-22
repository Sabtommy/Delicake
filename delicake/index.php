<!DOCTYPE html>
<html lang="zxx">

<head>
  <script nonce="bfbd2c16-9986-42ee-802a-6b9927657f0f">
    (function(w, d) {
      ! function(a, e, t, r) {
        a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zarazData.tracks = [], a.zaraz = {
          deferred: []
        }, a.zaraz.track = (e, t) => {
          for (key in a.zarazData.tracks.push(e), t) a.zarazData["z_" + key] = t[key]
        }, a.zaraz._preSet = [], a.zaraz.set = (e, t, r) => {
          a.zarazData["z_" + e] = t, a.zaraz._preSet.push([e, t, r])
        }, a.addEventListener("DOMContentLoaded", (() => {
          var t = e.getElementsByTagName(r)[0],
            z = e.createElement(r),
            n = e.getElementsByTagName("title")[0];
          n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), z.defer = !0, z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
        }))
      }(w, d, 0, "script");
    })(window, document);
  </script>
  <meta charset="UTF-8">
  <meta name="keywords" content="Cake, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delicake</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/style.css" type="text/css" />
</head>

<body>
  <section class="hero">
    <div class="hero__slider owl-carousel">
      <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <div class="hero__text">
                <h2>Making your life sweeter one bite at a time!</h2>
                <a href="#" class="primary-btn">Our cakes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <div class="hero__text">
                <h2>Making your life sweeter one bite at a time!</h2>
                <a href="#" class="primary-btn">Our cakes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="categories">
    <div class="container">
      <div class="row">
        <div class="categories__slider owl-carousel">
          <div class="categories__item">
            <div class="categories__item__icon">
              <span class="flaticon-029-cupcake-3"></span>
              <h5>Cupcake</h5>
            </div>
          </div>
          <div class="categories__item">
            <div class="categories__item__icon">
              <span class="flaticon-034-chocolate-roll"></span>
              <h5>Butter</h5>
            </div>
          </div>
          <div class="categories__item">
            <div class="categories__item__icon">
              <span class="flaticon-005-pancake"></span>
              <h5>Red Velvet</h5>
            </div>
          </div>
          <div class="categories__item">
            <div class="categories__item__icon">
              <span class="flaticon-030-cupcake-2"></span>
              <h5>Biscuit</h5>
            </div>
          </div>
          <div class="categories__item">
            <div class="categories__item__icon">
              <span class="flaticon-006-macarons"></span>
              <h5>Donut</h5>
            </div>
          </div>
          <div class="categories__item">
            <div class="categories__item__icon">
              <span class="flaticon-006-macarons"></span>
              <h5>Cupcake</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-1.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Dozen Cupcakes</a></h6>
              <div class="product__item__price">$32.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-2.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Cookies and Cream</a></h6>
              <div class="product__item__price">$30.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-3.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Gluten Free Mini Dozen</a></h6>
              <div class="product__item__price">$31.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-4.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Cookie Dough</a></h6>
              <div class="product__item__price">$25.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-5.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Vanilla Salted Caramel</a></h6>
              <div class="product__item__price">$05.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-6.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">German Chocolate</a></h6>
              <div class="product__item__price">$14.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-7.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Dulce De Leche</a></h6>
              <div class="product__item__price">$32.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/shop/product-8.jpg">
              <div class="product__label">
                <span>Cupcake</span>
              </div>
            </div>
            <div class="product__item__text">
              <h6><a href="#">Mississippi Mud</a></h6>
              <div class="product__item__price">$08.00</div>
              <div class="cart_add">
                <a href="#">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="class spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="class__form">
            <div class="section-title">
              <span>Class cakes</span>
              <h2>Made from your <br />own hands</h2>
            </div>
            <form action="#">
              <input type="text" placeholder="Name">
              <input type="text" placeholder="Phone">
              <select>
                <option value="">Studying Class</option>
                <option value="">Writting Class</option>
                <option value="">Reading Class</option>
              </select>
              <input type="text" placeholder="Type your requirements">
              <button type="submit" class="site-btn">registration</button>
            </form>
          </div>
        </div>
      </div>
      <div class="class__video set-bg" data-setbg="img/class-video.jpg">
        <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
      </div>
    </div>
  </section>


  <section class="team spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-7">
          <div class="section-title">
            <span>Our team</span>
            <h2>Sweet Baker </h2>
          </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
          <div class="team__btn">
            <a href="#" class="primary-btn">Join Us</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="img/team/team-4.jpg">
            <div class="team__item__text">
              <h6>Randy Butler</h6>
              <span>Decorater</span>
              <div class="team__item__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="testimonial spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <span>Testimonial</span>
            <h2>Our client say</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="testimonial__slider owl-carousel">
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="" data-pagespeed-url-hash="3283024380" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/xta-2.jpg.pagespeed.ic.FhCiwe89-P.webp" alt="" data-pagespeed-url-hash="3577524301" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="" data-pagespeed-url-hash="3283024380" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="testimonial__author__text">
                  <h5>Ophelia Nunez</h5>
                  <span>London</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/xta-2.jpg.pagespeed.ic.FhCiwe89-P.webp" alt="" data-pagespeed-url-hash="3577524301" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/xta-1.jpg.pagespeed.ic.k5i2AJ7B-5.webp" alt="" data-pagespeed-url-hash="3283024380" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="testimonial__author__text">
                  <h5>Ophelia Nunez</h5>
                  <span>London</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial__item">
              <div class="testimonial__author">
                <div class="testimonial__author__pic">
                  <img src="img/testimonial/xta-2.jpg.pagespeed.ic.FhCiwe89-P.webp" alt="" data-pagespeed-url-hash="3577524301" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="testimonial__author__text">
                  <h5>Kerry D.Silva</h5>
                  <span>New york</span>
                </div>
              </div>
              <div class="rating">
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star"></span>
                <span class="icon_star-half_alt"></span>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="instagram spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 p-0">
          <div class="instagram__text">
            <div class="section-title">
              <span>Follow us on instagram</span>
              <h2>Sweet moments are saved as memories.</h2>
            </div>
            <h5><i class="fa-brands fa-instagram"></i> @delicake</h5>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/xinstagram-1.jpg.pagespeed.ic.-miiHU9z0s.webp" alt="" data-pagespeed-url-hash="726066832" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic middle__pic">
                <img src="img/instagram/xinstagram-2.jpg.pagespeed.ic.PrUe97YaNT.webp" alt="" data-pagespeed-url-hash="1020566753" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/xinstagram-3.jpg.pagespeed.ic.41aoMJSE-B.webp" alt="" data-pagespeed-url-hash="1315066674" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/xinstagram-4.jpg.pagespeed.ic.DaPGnAyF-x.webp" alt="" data-pagespeed-url-hash="1609566595" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic middle__pic">
                <img src="img/instagram/xinstagram-5.jpg.pagespeed.ic.YBQyF2M-6c.webp" alt="" data-pagespeed-url-hash="1904066516" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
              <div class="instagram__pic">
                <img src="img/instagram/xinstagram-3.jpg.pagespeed.ic.41aoMJSE-B.webp" alt="" data-pagespeed-url-hash="1315066674" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="map">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-7">
          <div class="map__inner">
            <h6>COlorado</h6>
            <ul>
              <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li>
              <li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="396a4e5c5c4d5a58525c794a4c4949564b4d175a5654">[email&#160;protected]</a></li>
              <li>+1 800-786-1000</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="map__iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>

  <script src="scripts/script.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js+jquery.nice-select.min.js+jquery.barfiller.js+jquery.magnific-popup.min.js.pagespeed.jc.2i8oRofkTE.js"></script>
  <script>
    eval(mod_pagespeed_bn_O6PYOiT);
  </script>
  <script>
    eval(mod_pagespeed_rlBdYap1O3);
  </script>
  <script>
    eval(mod_pagespeed_4nsqOyHz4N);
  </script>
  <script>
    eval(mod_pagespeed_MzGhsBPcyU);
  </script>
  <script src="js/jquery.slicknav.js+owl.carousel.min.js.pagespeed.jc.ZkW2f5-xTF.js"></script>
  <script>
    eval(mod_pagespeed_mUtJ3IVbac);
  </script>
  <script>
    eval(mod_pagespeed_VQycfQPz1E);
  </script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="scripts/script.js"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6f70c78d4a9fd61c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>