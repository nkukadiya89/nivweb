<!DOCTYPE html>
<html lang="en">

<?php include 'layout.php';?>

<body>

  <body>
    <div id="wapper">
      <div class="header-wapper">
        <div class="container">

        <?php include 'header.php';?>

        </div>
      </div>
      <div class="innerbanner">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <div class="inrpgtitle">
              <h3><span>Tech Innovation Hub</span></h3>
              <p>
                Strategically build and leverage digital technologies to boost
                business results and user experiences
              </p>
            </div>
            <div class="bnrimg">
              <img src="images/Group 244.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="about-react">
        <div class="container">
          <div class="normaltxt">
            Our Tech Innovation Hub is a collaborative space where engineers, developers, and creative thinkers come together to experiment and innovate. We partner with startups, enterprises, and industry leaders to explore new possibilities and develop transformative digital products.
            Transforming industries with secure, transparent, and decentralized solutions that revolutionize everything from finance to supply chain management.

          </div>
          <div class="row">
            <div class="col col-12 col-md-6">
              <div class="content-part animatable fadeInLeft">
                <h3>Why Choose Our Tech Innovation Hub for Your Web Development Needs?</h3>
                <p>
                  At Nivzen Technologies, innovation isn't just a buzzword—it's the driving force behind everything we do. The Tech Innovation Hub is where cutting-edge ideas, emerging technologies, and creative problem-solving converge to build groundbreaking solutions for our clients.


                  <br /><br />
                  Building immersive experiences that redefine customer engagement, training, and entertainment, providing a new dimension to user interaction.Connecting the physical and digital worlds to drive automation, increase efficiency, and offer real-time data insights across industries.

                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
              <div class="image-part animatable fadeInRight">
                <img src="images/Group2.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include 'inquery.php';?>

      <div class="servicesRow">
        <div class="container">
          <div class="row">
            <div class="discussProject">
              <h3>Some Of Our Recent Projects</h3>
              <p>
                Get free consultation and let us know your project idea to turn
                it into an amazing digital product.
              </p>
            </div>

            
            <!--  -->

            <!--  -->

            <div class="discussProject">
              <div class="container">
                <h3>Let's Discuss Your Project</h3>
                <p>
                  Get free consultation and let us know your project idea to turn it
                  into an amazing digital product.
                </p>
                <a href="./contact-us.php">
                <button class="border-gradient">
                  <span>Contact Us</span>
                </button>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include 'footer.php';?>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function () {
        var centerIndex = Math.floor($(".custom-carousel .owl-item").length / 2); // Calculate center index

        $(".custom-carousel").owlCarousel({
          loop: true,
          margin: 10,
          autoWidth: true,
          nav: true,
          navText: ["<button class='prev'>&#9664;</button>", "<button class='next'>&#9654;</button>"],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 1
            },
            1000: {
              items: 1
            }
          },
          startPosition: centerIndex
        });

        $(".custom-carousel .item").click(function () {
          // Remove active class from all items
          $(".custom-carousel .item").removeClass("active");

          // Add active class to the clicked item
          $(this).toggleClass("active");

          // Get the clicked item's unique identifier
          var clickedItemId = $(this).attr("data-id");

          // Simulate data fetching (replace with your actual logic)
          var details = "Fetched details for item " + clickedItemId;

          // Update the details container
          $("#details-container").html(details);
        });
      });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      // Trigger CSS animations on scroll.
      // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

      // Looking for a version that also reverses the animation when
      // elements scroll below the fold again?
      // --> Check https://codepen.io/bramus/pen/vKpjNP

      jQuery(function ($) {
        // Function which adds the 'animated' class to any '.animatable' in view
        var doAnimations = function () {
          // Calc current offset and get all animatables
          var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $(".animatable");

          // Unbind scroll handler if we have no animatables
          if ($animatables.length == 0) {
            $(window).off("scroll", doAnimations);
          }

          // Check all animatables and animate them if necessary
          $animatables.each(function (i) {
            var $animatable = $(this);
            if ($animatable.offset().top + $animatable.height() - 20 < offset) {
              $animatable.removeClass("animatable").addClass("animated");
            }
          });
        };

        // Hook doAnimations on scroll, and trigger a scroll
        $(window).on("scroll", doAnimations);
        $(window).trigger("scroll");

        $(".ward").owlCarousel({
          loop: false,
          margin: 0,
          nav: false,
          responsive: {
            0: {
              items: 3,
            },
            600: {
              items: 4,
            },
            1000: {
              items: 6,
            },
            1300: {
              items: 6,
            },
          },
        });
      });
    </script>
  </body>

</html>