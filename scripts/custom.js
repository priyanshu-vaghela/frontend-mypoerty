// Insert the loader HTML into the end of the body
document.querySelector("body").insertAdjacentHTML(
    "beforeend",
    `
    <div class="loader">
      <div class="pinwheel">
        <div class="pinwheel__line"></div>
        <div class="pinwheel__line"></div>
        <div class="pinwheel__line"></div>
        <div class="pinwheel__line"></div>
        <div class="pinwheel__line"></div>
        <div class="pinwheel__line"></div>
      </div>
    </div>
    `
  );
  
  // Remove the loader when the window is fully loaded
  window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    if (loader) {
      loader.remove();
    }
  });
  
// to get current year
function getYear() {
  var currentDate = new Date();
  var currentYear = currentDate.getFullYear();
  document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// isotope js
$(window).on("load", function () {
  $(".filters_menu li").click(function () {
    $(".filters_menu li").removeClass("active");
    $(this).addClass("active");

    var data = $(this).attr("data-filter");
    $grid.isotope({
      filter: data,
    });
  });

  var $grid = $(".grid").isotope({
    itemSelector: ".all",
    percentPosition: false,
    masonry: {
      columnWidth: ".all",
    },
  });
});

// nice select
$(document).ready(function () {
  $("select").niceSelect();
});

// client section owl carousel
$(".client_owl-carousel").owlCarousel({
  loop: true,
  margin: 0,
  dots: false,
  nav: true,
  navText: [],
  autoplay: true,
  autoplayHoverPause: true,
  navText: [
    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  ],
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2,
    },
    1000: {
      items: 2,
    },
  },
});

const priceCheckBox = document.getElementById('priceCheckbox');
const btn_price = document.getElementById('btn_price');
const checkButton = document.getElementById('checkButton');

checkButton.addEventListener('click', function() {
  if (priceCheckBox.checked === false) {
    priceCheckBox.checked = true;
    alert("You chose Extreme Delivery Option");
    updatePrice(); 
  } else {
    alert("Already Active Extreme Plan");
  }
});


priceCheckBox.addEventListener('change', updatePrice);
function updatePrice() {
  if (priceCheckBox.checked) {
    btn_price.innerHTML = "60 Rs";
  } else {
    btn_price.innerHTML = "40 Rs";
  }
}
