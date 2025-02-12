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
                                <li class="breadcrumb-item active" aria-current="page">React Native Development Company</li>
                                </ol>
                            </nav>
              <h1>React Native Development Company</h1>
              <p>
                Elevate User Experiences With Nivzen Technologies' Expert
                React Native Development Services
              </p>
            </div>
            <div class="bnrimg">
              <img src="images/Hire-React-Native-Developer.png" alt="Hire-React-Native-Developer" />
            </div>
          </div>
        </div>
      </div>
      <div class="about-react">
        <div class="container">
          <div class="normaltxt">
            React Native has become a go-to framework for mobile app development, offering numerous benefits for businesses. 
            We offer a comprehensive range of React Native development services tailored to meet your unique business needs. Our collaborative approach ensures that we deliver solutions aligned with your goals.
          </div>
          <div class="row">
            <div class="col col-12 col-md-6">
              <div class="content-part">
                <h3>Why Choose Our React Nativ App Development Services?</h3>
                <p>
                  We specialize in React Native app development, empowering businesses to reach their audiences with high-performance, visually appealing mobile applications. Leveraging the strengths of React Native, our dedicated team develops cross-platform apps that deliver a seamless user experience on both iOS and Android devices. Whether you're a startup looking to create your first mobile app or an established enterprise seeking to enhance your digital offerings, our React Native development services are designed to help you succeed.

                  <br /><br />
                  Our skilled developers possess extensive experience in React Native app development, keeping abreast of the latest trends and technologies to deliver innovative solutions.
                  We are passionate about harnessing the power of React Native to create innovative mobile applications that drive success. Whether you need a custom app, enterprise solution, or migration strategy, our dedicated team is here to deliver exceptional React Native development services tailored to your needs.

                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
              <div class="image-part animatable fadeInRight">
                <img src="images/about-react-img.png" alt="about-react" />
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php include 'inquery.php';?>

    
      <div class="discussProject">
        <div class="container">
          <h3>Let's Discuss Your Project</h3>
          <p>
            Get free consultation and let us know your project idea to turn it
            into an amazing digital product.
          </p>
          <a href="contact-us">
          <button class="border-gradient">
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
