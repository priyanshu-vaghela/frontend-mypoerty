<!DOCTYPE html>
<html>
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
    <?php include 'pages/navbar.html' ?>
    <!-- end header section -->
  </div>

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
                <a href="book.php#personalized" class="button" style="cursor: pointer;" id="checkButton">
                  Choose plan
                </a>
              </div>
              <!-- end cholec crd -->
            </div>
          </div>
  </section>
  <!-- end book section -->



  <!-- footer section -->
  <?php include 'pages/footer.html'; ?>
  <!-- footer section -->

  <!-- scripts start  -->
  <?php include 'pages/scripts.html'; ?>
  <!-- scripts end  -->

</body>

</html>