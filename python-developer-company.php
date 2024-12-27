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
                                <li class="breadcrumb-item active" aria-current="page">Python Development Company</li>
                                </ol>
                            </nav>
            <h1>Python Development Company</h1>
            <p>Elevate User Experiences With Nivzen Technologies' Expert Python Development Services</p>
          </div>
          <div class="bnrimg">
            <img src="images/Hire-Python-Developer.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-react">
      <div class="container">
        <div class="normaltxt">
          Python is widely recognized for its simplicity, flexibility, and power. As one of the most popular programming languages, Python is favored by developers worldwide for building everything from small scripts to complex enterprise applications. Its vast ecosystem of libraries and frameworks allows businesses to quickly develop scalable, high-performance solutions.
          we offer a comprehensive suite of Python development services tailored to meet the needs of businesses across industries. Whether you’re building a web application, integrating AI into your processes, or need a custom software solution, our team of skilled Python developers has you covered.


        </div>
        <div class="row ">
          <div class="col col-12 col-md-6">
            <div class="content-part">
              <h3>Why Choose Our Python Services for Your Web Development Needs?</h3>
              <p>
                At Nivzen Technologies, we specialize in creating dynamic, high-performance applications using Python, one of the most versatile and powerful programming languages available today. As a trusted Python development company, we deliver customized solutions that help businesses across various industries optimize their operations, improve user experiences, and drive innovation. Whether you're looking for web development, data analysis, AI integration, or custom software solutions, our expert Python developers are ready to turn your vision into reality.
                <br /><br />
                we bring a unique combination of expertise, innovation, and commitment to every Python development project. Our team of experienced developers is passionate about leveraging Python’s versatility and power to deliver solutions that help businesses achieve their goals.
                we don’t just build software—we deliver solutions that drive innovation and deliver tangible results. Whether you're looking to improve efficiency, enhance customer experiences, or develop cutting-edge applications, we’re here to help you succeed.
              </p>

            </div>
          </div>
          <div class="col col-12 col-md-6 text-center ">
            <div class="image-part">
              <img src="images/about-react-img.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'inquery.php';?>

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