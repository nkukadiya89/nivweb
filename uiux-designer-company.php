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
                                <li class="breadcrumb-item active" aria-current="page">UI/UX Designer Company</li>
                                </ol>
                            </nav>
              <h1>UI/UX Designer Company</h1>
              <p>
                Elevate Your User Experiences with Nivzen Technologies' Expert UI/UX Design Services.


              </p>
            </div>
            <div class="bnrimg">
              <img src="images/Hire-UI-UX-Designer.png" alt="Hire-UI-UX-Designer" />
            </div>
          </div>
        </div>
      </div>
      <div class="about-react">
        <div class="container">
          <div class="normaltxt">
            In today’s competitive digital world, users demand more than just functionality—they expect an engaging, intuitive experience that’s easy to navigate. A well-designed interface can make the difference between a user staying on your platform or moving on to a competitor.
            We believe that every interaction with your digital platform matters, which is why we focus on designing experiences that align with your brand and meet your users' needs, whether you’re launching a new product, optimizing an existing one, or undergoing a complete digital transformation.

          </div>
          <div class="row">
            <div class="col col-12 col-md-6">
              <div class="content-part">
                <h3>Why Choose Our UIUX Design Services for Your Web Development Needs?</h3>
                <p>
                  we understand that design is more than just aesthetics—it's about creating intuitive, engaging, and functional experiences that resonate with users and drive business growth. As a trusted UI/UX designer company, we specialize in building user-centric interfaces that blend creativity with technology, delivering products that not only look beautiful but also offer seamless usability.

                  <br /><br />
                  At Nivzen Technologies, we follow a systematic approach to designing user experiences that prioritize both form and function. Our design process is centered around understanding your business goals and user needs to deliver solutions that solve real problems and delight users.
                  By improving usability and user satisfaction, professional UI/UX design helps drive higher conversion rates, customer retention, and ultimately, business growth
                </p>
              </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
              <div class="image-part animatable fadeInRight">
                <img src="images/hire-images/UI-UX-Designer.png" alt="UI-UX-Designer" />
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
