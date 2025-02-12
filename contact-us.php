<!DOCTYPE html>
<html lang="en">

<?php include './includes/layout.php'; ?>

<style>
    #contact-post .error {
        text-align: left;
        color: red;
    }

    .border-gradient2 {
        font-size: 16px;
        position: relative;
        cursor: pointer;
    }

    .disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
</style>

<body>
    <div id="wapper">
        <div class="header-wapper">
            <div class="container">

                <?php include './includes/header.php'; ?>

            </div>
        </div>
        <div class="innerbanner contactbnr">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="inrpgtitle">
                        <h1>Contact Us</h1>
                        <p>
                            We operate Globally
                        </p>
                    </div>
                    <div class="bnrimg">
                        <img src="./images/Contact-img.png" alt="" />
                    </div>
                </div>
            </div>
        </div>

        <div class="cnctformfrom">
            <div class="container">

                <div class="row g-5">
                    <div class="col-12 col-md-4">
                        <div class="title">
                            <h3>Our Locations</h3>
                            <img class="" src="./images/line.png" alt="">
                        </div>
                        <div class="adress">
                            <div class="flag">
                                <img src="./images/ind.png" alt="footer logo" width="52" height="52">
                            </div>
                            <div class="adrs">
                                <h3>India HQ</h3>
                                <h6>110, Ganesh glory, Godrej garden City road, jagatpur Ahmedabad - 382481</h6>
                                <h6>Phone : +91 97271 11122</h6>
                            </div>
                        </div>
                        <div class="adress">
                            <div class="flag">
                                <img src="./images/nl.png" alt="footer logo" width="52" height="52">
                            </div>
                            <div class="adrs">
                                <h3>Netherlands</h3>
                                <h6>Amsterdam, Netherlands</h6>
                                <h6>Phone : +31 6-5155-7726</h6>
                            </div>
                        </div>
                        <div class="adress">
                            <div class="flag">
                                <img src="./images/aus.png" alt="footer logo" width="52" height="52">
                            </div>
                            <div class="adrs">
                                <h3>Australia</h3>
                                <h6>Australia - Melbourne</h6>
                                <h6>Phone : +61 401 334 325</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="contact-form">
                            <div class="title">
                                <h3>We are excited that you want to Work with us.</h3>
                                <img class="" src="./images/line.png" alt="">
                            </div>
                            <form id="contact-post" method="POST">


                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="firstName">First
                                                Name:</label>
                                            <input type="text" class="form-control" name="fname" id="fname"
                                                placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="lastName">Last
                                                Name:</label>
                                            <input type="text" class="form-control" name="lname" id="lname"
                                                placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="emailAddress">Email
                                                Address:</label>
                                            <input type="email" name="email" class="form-control" id="emailAddress"
                                                placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="phoneNumber">Phone
                                                Number:</label>
                                            <input type="text" class="form-control" id="phoneNumber" name="phone"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="country">Country:</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                placeholder="Country" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label for="city">City:</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                placeholder="city" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="message">Enter
                                                Message
                                                Here:</label>
                                            <textarea class="form-control" id="message" name="message" rows="4"
                                                placeholder="Enter Message Here..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="g-recaptcha mb-2"  data-sitekey="6LfeXowqAAAAAP-pi9irdFbgr2qxJxmzKBbyY7dP"
                                            name="recaptcha"></div>
                                        <div id="recaptcha-error-cont" class="error"
                                            style="color: red; display: none;">
                                            Please verify that you are not a robot.
                                        </div>
                                    </div>
                                </div>

                                <div class="btnwrap">

                                    <button class="border-gradient border-gradient2" type="submit" id="submit"
                                        name="submit">
                                        <span id="submit_btn">Submit</span>
                                    </button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </div>

        </div>


        <div class="discussProject">
            <div class="container">

                <h3>Let's Discuss Your Project</h3>
                <p>Get free consultation and let us know your project idea to turn it into an amazing digital product.
                </p>
                <!-- <a href="">
                    <button class="border-gradient ">
                      <span>Contact Us</span>
                    </button>
                  </a> -->
            </div>
        </div>

        <?php include './includes/footer.php'; ?>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
     

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
        $.validator.addMethod("phoneValidation", function (value, element) {
            return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
        }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

        $("#contact-post").validate({
            rules: {
                'fname': {
                    required: true,
                },
                'lname': {
                    required: true,
                },
                'emailAddress': {
                    required: true,
                    email: true
                },
                'phone': {
                    required: true,
                    phoneValidation: true
                },
                'country': {
                    required: true,
                },
                'city': {
                    required: true,
                },
                'message': {
                    required: true
                }
            }
        });

        $("#contact-post").submit(function (event) {
            event.preventDefault(); // Prevent default form submission
            $('#recaptcha-error-cont').hide();

            if ($(this).valid()) { // Only submit if the form is valid
                // Change submit button text to indicate processing
                $('#submit_btn').text('Processing...');

                var recaptchaResponse1 = document.getElementById('g-recaptcha-response-1').value;

              
                if (recaptchaResponse1.length === 0) {
                    $('#submit_btn').text('Submit');

                    $('#recaptcha-error-cont').show();
                    return false;
                }

                $.ajax({
                    url: 'mail', // PHP file to handle the form data
                    type: 'POST', // HTTP request type
                    data: $(this).serialize(), // Serialize form data
                    success: function (response) {

                        if (response) {
                            // Redirect if the response contains the message key
                            window.location.href = 'thank-you';
                        } else {
                            alert(
                                "An error occurred while processing your request. Please try again later."
                            );
                        }

                    },
                    error: function (xhr, status, error) {
                        // Log any AJAX request errors (like 500)
                        console.error("AJAX Error:", error);
                        alert(
                            "An error occurred while processing your request. Please try again later."
                        );
                        $('#submisubmit_btn_btn').text('Submit'); // Reset button text
                    },
                    complete: function () {
                        // Reset the submit button text in case of completion (success or failure)
                        $('#submit_btn').text('Submit');
                    }
                });
            }
        });
    </script>
</body>

</html>
