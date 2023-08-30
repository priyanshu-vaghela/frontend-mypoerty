<!DOCTYPE html>
<html>

<head>
  <?php include 'pages/meta.html' ?>

  <title>mypoetry.in</title>

  <!-- bootstrap core css -->
  <!--Start Links  -->
  <link rel="preload" href="styles/bootstrap.css" as="style">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style">
  
  <?php include 'pages/links.html'; ?>
  <!--End Links  -->

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <!-- <img src="https://img.freepik.com/free-photo/still-life-with-lamp-pen-lantern-book_188544-8807.jpg?w=826&t=st=1693028278~exp=1693028878~hmac=37f1004223a5f89aada25ddea74cd4c1344220ab1b2db0ba3a29e6348b79f4bd" alt=""> -->
      <img src="source/Images/hero-bg.jpg" loading="lazy" alt="home-page">
    </div>
    <!-- header section strats -->
    <?php include 'pages/navbar.html' ?>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="container">
            <h1 class="text-white">Today's Top <span style="color:#ffbe33">#3 Poetry</span> </h1>
          </div>
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <p style="font-size:20px">
                    <span style="color:#ffbe33"> "</span>All begin in delight and end in wisdom, as Frost taught us great poems should. <span style="color:#ffbe33"> "</span>
                    </p>
                    <!-- <h1>Chahat K. Arya</h1> -->
                    <div class="btn-box">
                      <a href="" class="btn1">
                      Explore
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                  <p style="font-size:20px">
                    <span style="color:#ffbe33"> "</span>This blew my mind in high school, and I wasn’t the only one.<span style="color:#ffbe33"> "</span>
                    </p>
                    <!-- <h1>Chahat K. Arya</h1> -->
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Explore
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                  <p style="font-size:20px">
                    <span style="color:#ffbe33"> "</span>Because a rose is a rose is a rose is a rose. <span style="color:#ffbe33"> "</span>
                    </p>
                    <!-- <h1>Chahat K. Arya</h1> -->
                    <div class="btn-box">
                      <a href="" class="btn1">
                      Explore
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="source\offers\specialoffer.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Extreme Packege
                </h5>
                <h6>
                  <span>60<i class="fa-solid fa-indian-rupee-sign"></i></span> <del>150<i
                      class="fa-solid fa-indian-rupee-sign"></i> </del>
                </h6>
                <a href="">
                  View Details
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="source\offers\bestoffer.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Normal Packege
                </h5>
                <h6>
                  <span>40<i class="fa-solid fa-indian-rupee-sign"></i></span> <del>100<i
                      class="fa-solid fa-indian-rupee-sign"></i> </del>
                </h6>
                <a href="">
                  View Details
                  <i class="fa-solid fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

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

  <!-- about section -->

  <section class="about_section d-flex justify-content-center align-items-center">
    <div class="container  ">
      <div class="admin_pro_card">
        <div class="infos">
          <div class="image">
            <!-- <img src="source/admin.jpg" width="100px"  height="100px"alt=""> -->
          </div>
          <div class="info">
            <div>
              <p class="name">
                Chahat K. Arya
              </p>
              <p class="function">
                Poetry Writer
              </p>
            </div>
            <div class="stats">
              <p class="flex flex-col">
                Articles
                <span class="state-value">
                  34
                </span>
              </p>
              <p class="flex">
                Followers
                <span class="state-value">
                  455
                </span>
              </p>

            </div>
         
          </div>
        </div>
        <button class="request" type="button">
          Follow
        </button>
      </div>
    </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container" id="personalized">
        <h2>
        Personalized Poetry
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Person Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    Relation Status 
                  </option>
                  <option value="">
                    Love
                  </option>
                  <option value="">
                    Friend Male / Female
                  </option>
                  <option value="">
                  Normal Person
                  </option>
                  <option value="">
                    Father / Mother
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div>

                <input type="checkbox" name="" id="priceCheckbox">
                <label for="priceCheckbox"> Extreme Delevery </label>
              </div>
              <div class="btn_box">
                <button id="btn_price">
                  40 Rs
                </button>
                <i class="fa-solid fa-circle-info"></i>
              </div>
            </form>
          </div>
        </div>
        <!-- strt cholec crd -->
        <div class="price_container ">


          <div class="plan">
            <div class="inner">
              <span class="pricing">
                <span>
                  <i class="fa-solid fa-indian-rupee-sign"></i> 60
                </span>
              </span>
              <p class="title">Extreme Delevery</p>
              <p class="info">Get your poetry delivered in record time with our Extreme Delivery service. Our team is dedicated to providing you with the best experience</p>
              <ul class="features">
                <li>
                  <span class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                  </span>
                  <span><strong>Under 24h</strong> Delevery</span>
                </li>
                <li>
                  <span class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                  </span>
                  <span>Get Delevery in<strong> Whatsapp</strong></span>
                </li>
                <li>
                  <span class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                  </span>
                  <span>Extra <strong>Custumization</strong></span>
                </li>
                <li>
                  <span class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                  </span>
                  <span><strong>Photo + Music </strong> Delevery</span>
                </li>
                <li>
                  <span class="icon">
                    <i class="fa-solid fa-circle-check"></i>
                  </span>
                  <span>And Much <strong>More... </strong></span>
                </li>
              </ul>
              <div class="action">
                <a href="index.php#personalized" class="button" style="cursor: pointer;" id="checkButton">
                  Choose plan
                </a>
              </div>
              <!-- end cholec crd -->
            </div>
          </div>
  </section>
  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Moana Michell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="source/Images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Mike Hamell
                </h6>
                <p>
                  magna aliqua
                </p>
              </div>
              <div class="img-box">
                <img src="source/Images/client2.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <?php include 'pages/footer.html'; ?>
  <!-- footer section -->
  <!-- scripts start  -->
  <?php include 'pages/scripts.html'; ?>
  <!-- scripts end  -->

</body>

</html>

