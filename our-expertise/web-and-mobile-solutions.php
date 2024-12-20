<!DOCTYPE html>
<html lang="en">

<?php include '../includes/layout.php'; ?>

  <body>
    <div id="wapper">
      <div class="header-wapper">
        <div class="container">

        <?php include '../includes/header.php'; ?>


        </div>
      </div>
      <div class="innerbanner">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <div class="inrpgtitle">
              <h3><span>Web & Mobile</span> Solutions</h3>
              <p>
                Strategically build and leverage digital technologies to boost
                business results and user experiences
              </p>
            </div>
            <div class="bnrimg">
              <img src="../images/Group 244.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="about-react">
        <div class="container">
          <div class="normaltxt">
            At Nivzen Technologies, we transform your ideas into cutting-edge digital experiences. Whether you're looking to establish a powerful web presence or develop mobile applications that engage your audience on the go, our expert team of developers and designers is here to craft bespoke digital solutions that drive your business forward.

          </div>
          <div class="row">
            <div class="col col-12 col-md-6">
              <div class="content-part animatable fadeInLeft">
                <h3>Why Choose Us for Your Web & Mobile Development Needs?</h3>
                <p>
                  We develop mobile applications that excel in performance and user experience, whether through native solutions or cross-platform development, tailored for both iOS and Android environments. Whether it's creating feature-rich mobile applications or building simplified versions of your web services, we ensure a fluid user experience across devices.
                  <br /><br />
                  With a strong foundation in custom web development and mobile app solutions, we provide end-to-end services that ensure seamless integration, scalability, and exceptional user experience. From startups to enterprises, we partner with you at every stage of the process to create solutions that are not just functional, but also intuitive and future-ready.

                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
              <div class="image-part animatable fadeInRight">
                <img src="../images/Group2.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include '../inquery.php';?>

      <!-- <div class="servicesRow">
        <div class="container">
          <div class="row">
            <div class="discussProject">
              <h3>Some Of Our Recent Projects</h3>
              <p>
                Get free consultation and let us know your project idea to turn
                it into an amazing digital product.
              </p>
            </div> -->

            
            <!--  -->

            <!--  -->

            <div class="discussProject">
              <div class="container">
                <h3>Let's Discuss Your Project</h3>
                <p>
                  Get free consultation and let us know your project idea to turn it
                  into an amazing digital product.
                </p>
                <a href="../contact-us.php">
                <button class="border-gradient">
                  <span>Contact Us</span>
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include '../includes/footer.php'; ?>


    </div>

   <!-- Bootstrap JS and dependencies -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Owl Carousel JS -->

    <script>
        $(document).ready(function () {
            function updateCenterCardDetails(event) {
            // Get all active items
            var items = event.item.count; // Total number of items in the carousel
            var itemIndex = (event.item.index + Math.floor(event.page.size / 2)) % items; // Calculate the center item index
            var centerItem = $(event.target).find(".owl-item").eq(itemIndex).find(".item");
            var clickedItemId = centerItem.attr("data-id");
            var details = "Fetched details for item " + clickedItemId;
            $("#details-container").html(details);
            }

            // Initialize the Owl Carousel
            var owl = $(".custom-carousel").owlCarousel({
            loop: true,
            margin: 10,
            autoWidth: true,
            nav: true,
            navText: ["<button class='prev'>&#9664;</button>", "<button class='next'>&#9654;</button>"], // Custom navigation buttons
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
            startPosition: Math.floor($(".custom-carousel .owl-item").length / 2), // Set the starting position to the calculated center index
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            onInitialized: updateCenterCardDetails,
            onChanged: updateCenterCardDetails
            });

            // Click event on carousel items
            $(".custom-carousel").on("click", ".item", function () {
                $(".custom-carousel .item").removeClass("active");
                $(this).addClass("active");
                var clickedItemId = $(this).attr("data-id");
                var details = "Fetched details for item " + clickedItemId;
                $("#details-container").html(details);
            });
        });

            
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
     
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

        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script>

        $.validator.addMethod("phoneValidation", function(value, element) {
            return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
        }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

        // $.validator.addMethod("gmailValidation", function(value, element) {
        //     // Check if the email ends with @gmail.com
        //     return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
        // }, "Please enter a valid Gmail address.");


            $("#inquery-post").validate({
                rules: {
                    'name': {
                        required: true,
                    },
                    'email': {
                        required: true ,
                        email: true ,
                        // gmailValidation: "Please enter a valid Gmail address ending in @gmail.com."
                    },
                    'phone': {
                        required: true,
                        phoneValidation: true 
                    },
                    'desc': {
                        required: true
                    }
                }
            });

            $("#inquery-post").submit(function(event) {
                event.preventDefault();
                // Send the form data via AJAX
                if ($(this).valid()) { // Only submit if the form is valid
                  $('#inq_text').text('Processing...'); 
                    $.ajax({
                        url: 'submit-inquery.php',
                        type: 'POST',
                        data: $(this).serialize(), // Serialize form data
                        success: function(response) {
                          const obj = JSON.parse(response);
                          if (obj && obj.message) {
                                $("#alertMsg").html(`
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        ${obj.message}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                `);
                                $('#inq_text').text('Inquiry Sent'); 

                                $('#inquery-post')[0].reset();
                            } 
                        }
                    });
                }
            });
        </script>


  </body>

</html>