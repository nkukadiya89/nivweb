<!DOCTYPE html>
<html lang="en">

<?php include 'includes/layout.php';?>


<body>
  <div id="wapper">
    <div class="header-wapper">
      <div class="container">

      <?php include 'includes/header.php';?>

      </div>
    </div>
    <div class="innerbanner">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <div class="inrpgtitle">
          <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $projectFolderName ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wordpress Development Company</li>
                                </ol>
                            </nav>
            <h1>Wordpress Development Company</h1>
            <p>Elevate User Experiences With Nivzen Technologies' Expert Wordpress Development Services</p>
          </div>
          <div class="bnrimg">
            <img src="images/Hire-Wordpress-Developer.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-react">
      <div class="container">
        <div class="normaltxt">
          WordPress is designed with SEO in mind, providing tools and plugins that help your site rank higher on search engines and attract more traffic.
          Whether you're running a blog or a complex e-commerce site, WordPress can scale to meet your needs as your business grows.
          WordPress's intuitive dashboard makes it easy for even non-technical users to manage content, update pages, and add new features without needing in-depth coding knowledge.

        </div>
        <div class="row ">
          <div class="col col-12 col-md-6">
            <div class="content-part">
              <h3>Why Choose Our WordPress Services for Your Web Development Needs?</h3>
              <p>
                At Nivzen Technologies, our passion for design fuels our commitment to crafting visually stunning and effective solutions that drive your brand forward. We focus on creating engaging designs that not only look impressive but also resonate with your audience, helping your brand thrive in a competitive marketplace. Here’s why businesses choose to work with us:At Nivzen Technologies, we specialize in creating dynamic, fully customized WordPress websites that empower businesses to stand out and grow. As a leading WordPress development company, we are passionate about leveraging the flexibility and scalability of WordPress to craft digital experiences that are user-friendly, visually appealing, and designed for performance. Whether you're looking for a simple blog or a robust e-commerce platform, our expert WordPress developers are here to turn your vision into reality.

                <br /><br />
                Our highly skilled team blends creativity with innovation, leveraging industry knowledge and design expertise to deliver visuals that are distinctive and impactful. Every project is approached with fresh ideas, ensuring your brand’s identity stands out.
              </p>

            </div>
          </div>
          <div class="col col-12 col-md-6 text-center ">
            <div class="image-part">
              <img src="images/hire-images/Wordpress-Developer.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'inquery.php';?>

   
    <div class="discussProject">
      <div class="container">
        <h3>Let's Discuss Your Project</h3>
        <p>Get free consultation and let us know your project idea to turn it into an amazing digital product.</p>
        <a href="contact-us.php">
        <button class="border-gradient ">
          <span>Contact Us</span>
        </button>
      </a>
      </div>
    </div>

    <?php include 'includes/footer.php';?>

  </div>

  
    <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

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


      $('.award').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        responsive: {
          0: {
            items: 3
          },
          600: {
            items: 4
          },
          1000: {
            items: 6
          },
          1300: {
            items: 6
          }
        }
      })
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