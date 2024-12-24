<!DOCTYPE html>
<html lang="en">

<?php include '../includes/layout.php';?>

<!-- <style>
    #contact-post .error {
        text-align:left;
        color:red;
    }

    .border-gradient2 
        {
            font-size: 16px;
            position: relative;
            cursor: pointer;
        }

    .disabled 
    {
            opacity: 0.6;
            cursor: not-allowed;
        }

</style> -->

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
                        <h3><span>CRM & Enterprises</span> Solutions</h3>
                        <p>
                            Strategically build and leverage digital technologies to drive business growth and enhance
                            user experiences through innovative CRM and enterprise solutions.
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
                    At Nivzen Technologies, we turn your vision into innovative digital solutions that captivate and
                    engage.
                    From creating dynamic websites that leave a lasting impression to designing intuitive mobile apps
                    that connect with users wherever they are, our dedicated team of developers and designers crafts
                    tailored experiences that accelerate your business growth and enhance user engagement.
                </div>
                <div class="row">
                    <div class="col col-12 col-md-6">
                        <div class="content-part">
                            <h3>Why Choose Us for Your CRM & Enterprises Solutions Needs?</h3>
                            <p>
                                We provide CRM and Enterprise Solutions that deliver exceptional performance and
                                seamless user experiences, whether through native or cross-platform development for both
                                iOS and Android. From developing robust mobile applications to optimizing web services
                                for simplicity and accessibility, we ensure a smooth, unified experience across all
                                devices.<br /><br />
                                With expertise in custom web development and mobile app solutions, we offer
                                comprehensive services that guarantee seamless integration, scalability, and outstanding
                                user experiences. Whether you're a startup or an enterprise, we collaborate with you
                                throughout the entire journey to build solutions that are not only functional but also
                                intuitive and built for the future.
                            </p>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 text-center">
                        <div class="image-part">
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




    <?php include '../includes/footer.php';?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
    // Trigger CSS animations on scroll.
    // Detailed explanation can be found at http://www.bram.us/2013/11/20/scroll-animations/

    // Looking for a version that also reverses the animation when
    // elements scroll below the fold again?
    // --> Check https://codepen.io/bramus/pen/vKpjNP

    jQuery(function($) {
        // Function which adds the 'animated' class to any '.animatable' in view
        var doAnimations = function() {
            // Calc current offset and get all animatables
            var offset = $(window).scrollTop() + $(window).height(),
                $animatables = $(".animatable");

            // Unbind scroll handler if we have no animatables
            if ($animatables.length == 0) {
                $(window).off("scroll", doAnimations);
            }

            // Check all animatables and animate them if necessary
            $animatables.each(function(i) {
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
            nav: true,
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

    <script>
    $.validator.addMethod("phoneValidation", function(value, element) {
        return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
    }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

    // $.validator.addMethod("gmailValidation", function(value, element) {
    //   return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);  
    // }, "Please enter a valid Gmail address.");

    $("#inquery-post").validate({
        rules: {
            'name': {
                required: true,
            },
            'email': {
                required: true,
                email: true,
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

        if ($(this).valid()) { // Only submit if the form is valid
            // Send the form data via AJAX
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
                    } else {
                        console.error("Mode is undefined");
                    }
                }
            });
        }
    });
    </script>
</body>

</html>

<!-- <form id="contact-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea><br><br>

    <button type="submit">Send</button>
</form> -->