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
                                <li class="breadcrumb-item active" aria-current="page">Flask Development Company</li>
                                </ol>
                            </nav>
            <h1>Flask Development Company</h1>
            <p>Elevate User Experiences With Nivzen Technologies' Expert Flask Development Services</p>
          </div>
          <div class="bnrimg">
            <img src="../images/Hire-Flask-Developer.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-react">
      <div class="container">
        <div class="normaltxt">
          Flask is a lightweight and modular web framework that provides the essentials to build web applications without unnecessary complexity. Its minimalistic design and easy-to-use features make it a popular choice among developers. We recognize the transformative potential of Flask in building powerful web applications that drive business success. Whether you’re looking to develop a custom web application, integrate APIs, or create an e-commerce platform, our team is ready to deliver innovative solutions that propel your business forward.

        </div>
        <div class="row ">
          <div class="col col-12 col-md-6">
            <div class="content-part">
              <h3>Why Choose Our Flask Services for Your Web Development Needs?</h3>
              <p>
                We specialize in building high-quality web applications using Flask, a micro web framework known for its simplicity and flexibility. As a leading Flask development company, we leverage the power of this versatile framework to create robust and scalable web solutions that align with your business objectives. Our expert team is dedicated to delivering efficient, maintainable, and user-friendly applications that empower businesses to thrive in a competitive digital landscape.
                <br /><br />
                Our experts specialize in building and integrating RESTful APIs using Flask, enabling seamless communication between your web applications and third-party services. We focus on creating secure and scalable APIs that enhance the functionality of your applications.
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