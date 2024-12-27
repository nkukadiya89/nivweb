<!DOCTYPE html>
<html lang="en">
 
<?php include '../includes/layout.php';?>


  <body>
    <div id="wapper">
      <div class="header-wapper">
        <div class="container">

        <?php include '../includes/header.php';?>

        </div>
      </div>
      <div class="innerbanner">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <div class="inrpgtitle">
            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $projectFolderName ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shopify Development Company</li>
                                </ol>
                            </nav>
              <h1>Shopify Development Company</h1>
              <p>
                Elevate User Experiences With Nivzen Technologies' Expert
                Shopify Development Services
              </p>
            </div>
            <div class="bnrimg">
              <img src="../images/Hire-Shopify-Developer.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="about-react">
        <div class="container">
          <div class="normaltxt">
            Looking to migrate your store from another platform to Shopify? Our expert migration services ensure that your data, products, and content are seamlessly transferred without any downtime or loss. We ensure a smooth transition so your business can continue running without interruptions.
            We assist businesses in setting up their Shopify stores from scratch, ensuring a smooth and seamless launch. From product listing and payment setup to configuring essential tools, we handle everything to ensure your store is ready for success.

          </div>
          <div class="row">
            <div class="col col-12 col-md-6">
              <div class="content-part">
                <h3>Why Choose Our Shopify Services for Your Web Development Needs?</h3>
                <p>
                  At Nivzen Technologies, we specialize in creating tailor-made Shopify solutions that enable businesses to launch, manage, and grow their online stores with ease. As a leading Shopify development company, we are passionate about helping businesses build visually stunning and high-performing e-commerce stores on one of the world’s most popular e-commerce platforms—Shopify. From seamless store setups to custom functionalities, our expert Shopify developers are here to bring your e-commerce vision to life.


                  <br /><br />
                  We don’t just build stores—we make sure they run at peak performance. Our Shopify optimization services focus on improving your store’s speed, security, and SEO, helping you rank higher on search engines and deliver a better user experience. Additionally, we offer ongoing maintenance and support to ensure your store stays updated and bug-free.

                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
              <div class="image-part animatable fadeInRight">
                <img src="../images/about-react-img.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include '../inquery.php';?>

    
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

      <?php include '../includes/footer.php';?>

    </div>

  
      <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
   

      jQuery(function ($) {
        var doAnimations = function () {
          var offset = $(window).scrollTop() + $(window).height(),
            $animatables = $(".animatable");

          if ($animatables.length == 0) {
            $(window).off("scroll", doAnimations);
          }

          $animatables.each(function (i) {
            var $animatable = $(this);
            if ($animatable.offset().top + $animatable.height() - 20 < offset) {
              $animatable.removeClass("animatable").addClass("animated");
            }
          });
        };

        $(window).on("scroll", doAnimations);
        $(window).trigger("scroll");

        $(".award").owlCarousel({
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

   $("#inquery-post").validate({
       rules: {
           'name': {
               required: true,
           },
           'email': {
               required: true ,
               email: true ,
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
       if ($(this).valid()) { 
        $('#inq_text').text('Processing...'); 
           $.ajax({
               url: '<?php echo $projectFolderName?>/submit-inquery.php',
               type: 'POST',
               data: $(this).serialize(),
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
