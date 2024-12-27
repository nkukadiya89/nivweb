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
                                <li class="breadcrumb-item active" aria-current="page">Android Development Company</li>
                                </ol>
                            </nav>
            <h1>Android Development Company</h1>
            <p>Elevate User Experiences With Nivzen Technologies' Expert Android Development Services</p>
          </div>
          <div class="bnrimg">
            <img src="../images/Hire-Android-Developer.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-react">
      <div class="container">
        <div class="normaltxt">
          Android is the world's most widely used mobile operating system, offering unparalleled opportunities for
          businesses to reach a global audience. Android applications can be easily scaled to accommodate user growth
          and evolving business needs. Whether you require simple apps or complex enterprise solutions, Android provides
          the flexibility to meet your requirements.
        </div>
        <div class="row ">
          <div class="col col-12 col-md-6">
            <div class="content-part">
              <h3>Why Choose Our Android App Development Services?</h3>
              <p>

                We specialize in Android app development, creating innovative, user-friendly mobile applications that
                cater to diverse business needs. Our expert team harnesses the latest technologies and industry best
                practices to deliver high-performance Android applications that engage users and drive growth. Whether
                you're a startup looking to launch your first app or an established enterprise seeking to enhance your
                mobile presence, we are your trusted partner in transforming ideas into impactful Android solutions.

                <br /><br />
                We are passionate about leveraging the power of Android to create innovative mobile applications that
                drive business success. Whether you need a custom app, a game, or an enterprise solution, our dedicated
                team is here to deliver exceptional Android development services tailored to your needs.
                We believe in building lasting relationships with our clients. Our ongoing support and maintenance
                services ensure that your Android applications remain up-to-date, secure, and optimized for performance.
              </p>

            </div>
          </div>
          <div class="col col-12 col-md-6 text-center ">
            <div class="image-part">
              <img src="../images/about-react-img.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include '../inquery.php';?>

    <div class="servicesRow">
      <div class="container">
        <div class="row">
       
        </div>

      </div>
    </div>
    <div class="discussProject">
      <div class="container">
        <h3>Let's Discuss Your Project</h3>
        <p>Get free consultation and let us know your project idea to turn it into an amazing digital product.</p>
        <a href="../contact-us.php">
        <button class="border-gradient ">
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