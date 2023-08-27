<!DOCTYPE html>
<html>

<head>
  <?php include 'pages/meta.html' ?>

  <title>Menu</title>

  <!-- bootstrap core css -->
  <!--Start Links  -->
  <?php include 'pages/links.html'; ?>
  <!--End Links  -->

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="source/hero-bg.jpg" alt="navabr">
    </div>
    <!-- header section strats -->
    
    <?php include 'pages/navbar.html'?>
    <!-- end header section -->

  </div>

 <!-- food section -->

 <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Poetry Category
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".love">Love</li>
        <li data-filter=".Friendship">Friendship</li>
        <li data-filter=".perents">Perents</li>
        <li data-filter=".sad">Sad</li>
        <li data-filter=".marreige">Marreige</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all Friendship">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\friendship.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Friendship Day
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $20
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping " id="Capa_1"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all love">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\propose.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Proposal For Cruse
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $15
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all love marreige">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\marrige.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    For Marrige
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $17
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all perents">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\Mothersday.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Mother's Day
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $18
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all perents">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\fathersday.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Father's Day
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $10
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all marreige">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\babyshower.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Baby Shower
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $15
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all sad">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\apologyorsorry.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Apology / Sorry
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $12
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all sad">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\breakup.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Break Up
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $14
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="source\menu\deathanniversry.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Death Anniversry
                  </h5>
                  <p>
                    Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus
                    sed eaque
                  </p>
                  <div class="options">
                    <h6>
                      $10
                    </h6>
                    <a href="">
                      <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
 <?php include 'pages/footer.html' ?>
  <!-- footer section -->

  <!-- scripts start  -->
  <?php include 'pages/scripts.html'; ?>
  <!-- scripts end  -->

</body>

</html>