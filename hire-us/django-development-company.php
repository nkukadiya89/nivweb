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
            <h3><span>Django</span> Development Company</h3>
            <p>Elevate User Experiences With Nivzen Technologies' Expert Django Development Services</p>
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
          we offer a comprehensive suite of Django development services tailored to meet the diverse needs of businesses. From initial consulting to post-launch support, our team is here to guide you through every stage of the development process.
          We believe in building long-term relationships with our clients. Our collaborative approach ensures that your input is valued throughout the development process, resulting in solutions that truly meet your needs.

        </div>
        <div class="row ">
          <div class="col col-12 col-md-6">
            <div class="content-part animatable fadeInLeft">
              <h3>Why Choose Our Django Services for Your Web Development Needs?</h3>
              <p>
                At Nivzen Technologies, we specialize in developing high-performance web applications using Django, one of the most powerful and flexible web frameworks available today. As a leading Django development company, we provide comprehensive solutions that combine cutting-edge technology with innovative design to meet the unique needs of your business. Our expert team is dedicated to delivering secure, scalable, and efficient web applications that empower businesses to achieve their goals and drive growth.
                <br /><br />
                we recognize the transformative power of Django in building robust web applications that drive business success. Whether you’re looking to develop a custom web application, integrate APIs, or create an e-commerce platform, our team is equipped to deliver innovative solutions that propel your business forward.
              </p>

            </div>
          </div>
          <div class="col col-12 col-md-6 text-center ">
            <div class="image-part animatable  fadeInRight">
              <img src="../images/about-react-img.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include '../inquery.php';?>

    <!-- <div class="servicesRow">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 whycol">
            <h3>Why Choose Nivzen Technologies for Django Development</h3>
            <div class="row">
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="../images/p3.png" alt="" />
                </div>
                <h6>Upgrade<br />
                  Tools</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="../images/p4.png" alt="" />
                </div>
                <h6>Powerful<br />
                  Solutions</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="../images/p2.png" alt="" />
                </div>
                <h6>Augmentation<br />
                  Services</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="../images/p1.png" alt="" />
                </div>
                <h6>Extensively<br />
                  Scalable</h6>
              </div>
              <div class="col-6 col-md-4 points">
                <div class="whyico">
                  <img src="../images/p3.png" alt="" />
                </div>
                <h6>Accessible<br />
                  Support</h6>
              </div>

            </div>
          </div>

          <div class="col-12 col-md-6 servicecol">
            <h3>Why Choose Nivzen Technologies for Django Development</h3>
            <ul>
              <li>Custom Django Solutions for Scalable Web App</li>
              <li>API-First Django Development for Seamless Integrations</li>
              <li>Dynamic User Interfaces</li>
              <li>Cloud Integration & Deployment</li>
              <li>AI/ML Integration in Django for Smart Applications</li>
              <li>Real-Time Data Handling with Django Channels & WebSockets</li>
              <li>Django Microservices Architecture for Agile Development</li>
              <li>Optimized SEO & Performance</li>
              <li>Automated Testing & Continuous Integration</li>
              <li>Comprehensive Django Support, Maintenance & Security Audits</li>
            </ul>
          </div>
        </div>

      </div>
    </div> -->
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

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

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

// $.validator.addMethod("gmailValidation", function(value, element) {
//    // Check if the email ends with @gmail.com
//    return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
// }, "Please enter a valid Gmail address.");


   $("#inquery-post").validate({
       rules: {
           'name': {
               required: true,
           },
           'email': {
               required: true ,
               email: true ,
              //  gmailValidation: "Please enter a valid Gmail address ending in @gmail.com."
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
               url: '<?php echo $projectFolderName?>/submit-inquery.php',
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