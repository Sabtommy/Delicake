<!DOCTYPE html>
<html lang="en">

<head>
  <title>About - Delicake</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <section class="about py-5">
    <div class="container">
      <div class="row">
        <div class="about__text">
          <div class="section-title">
            <span>About Delicake</span>
            <h2>
              Cakes and bakes from the house of Milan!
            </h2>
          </div>
          <p>
            Delicake is an Italian brand that was born as a small family business,
            today it is supported by a staff of 25 employees.
          </p>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="team py-5">
    <div class="container">
      <div class="row">
        <div class="section-title text-center">
          <span>Our team</span>
          <h2>Sweet bakers</h2>
        </div>
      </div>
      <div class="row">
        <?php
        for ($i = 0; $i < 4; $i++) {
          echo '<div class="col-lg-3 col-md-6 col-sm-6">
          <div class="team__item set-bg" data-setbg="../images/team/chef-1.jpg">
            <div class="team__item__text">
              <h6>Mara Raniello</h6>
              <span>Cake designer</span>
              <div class="team__item__social">
                <a href=""><span class="fa fa-instagram"></span></a>
                <a href=""><span class="fa fa-facebook mx-3"></span></a>
                <a href=""><span class="fa fa-twitter"></span></a>
              </div>
            </div>
          </div>
          </div>';
        }
        ?>
      </div>
    </div>
  </section>

  <section class="testimonial py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
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
                  <img src="../images/users/default.jpg" />
                </div>
                <div class="testimonial__author__text">
                  <h5>Mario Rossi</h5>
                  <span>Milan</span>
                </div>
              </div>
              <div class="rating">
                <span class="fa-solid fa-star" style="color: #f0c656;"></span>
                <span class="fa-solid fa-star" style="color: #f0c656;"></span>
                <span class="fa-solid fa-star" style="color: #f0c656;"></span>
                <span class="fa-solid fa-star-half-stroke" style="color: #f0c656;"></span>
                <span class="fa-regular fa-star" style="color: #f0c656;"></span>
              </div>
              <p>
                Good products in a nice and cozy shop.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="../scripts/script.js"></script>
</body>

</html>