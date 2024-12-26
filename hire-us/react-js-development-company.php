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
                                <li class="breadcrumb-item active" aria-current="page">ReactJS Development Company</li>
                                </ol>
                            </nav>
            <h3><span>ReactJS</span> Development Company</h3>
            <p>Elevate User Experiences With Nivzen Technologies' Expert ReactJS Development Services</p>
          </div>
          <div class="bnrimg">
            <img src="../images/react-bnr.png" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-react">
      <div class="container">
        <div class="normaltxt">
          When you choose Nivzen Technologies as your ReactJS development partner, you're not just getting a development team—you're gaining a long-term technology partner dedicated to your success.
          Our team consists of skilled ReactJS developers with extensive experience in building complex web applications. We stay at the forefront of web development trends, continuously improving our knowledge and approach to ensure we deliver cutting-edge solutions.

        </div>
        <div class="row">
          <div class="col col-12 col-md-6">
            <div class="content-part">
              <h3>Why Choose Our ReactJS Services for Your Web Development Needs?</h3>
              <p>
                We understand that every business has unique needs, and we don't believe in one-size-fits-all solutions. Our custom ReactJS development services are designed to provide solutions that are specifically tailored to your business challenges and objectives.
                We follow an Agile development process, which ensures transparency, flexibility, and faster delivery times. This approach allows us to continuously refine and adapt the project based on client feedback and evolving business requirements.
                <br /><br />
                At Nivzen Technologies, we understand the significance of ReactJS in modern web development. Our skilled
                ReactJS developers possess in-depth knowledge of JavaScript, React Native, and various technologies such
                as Node.js, MERN stack, and MongoDB. We are a top React JS application development company in India,
                dedicated to delivering a superior user experience and interface, ensuring your web applications stand
                out in today's competitive digital landscape.
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
        </button></a>
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