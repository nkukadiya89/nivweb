<!DOCTYPE html>
<html lang="en">

<?php include './includes/layout.php';?>

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

                <?php include './includes/header.php';?>

            </div>
        </div>


        <div class="thankyoupage">
            <div class="container">

                <div class="thankinside">
                    <div class="title" style="text-align:center;">
                        <img class="" src="./images/thank.png" alt="thank">
                        <h3>Thank You</h3>

                    </div>
                    <p>We've sent your free report to your inbox so it's easy to access. You can find
                        more information on our website and social pages.</p>

                    <div class="connect">
                        <h4>Connect With Us</h4>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/people/Nivzen-Technologies/100091831778724/?sk=about"
                                    target="_blank" aria-label=""><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/nivzentechnologies/" target="_blank" aria-label=""><i
                                        class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/nivzen-technologies-8732a0272/" target="_blank"
                                    aria-label=""><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>


                </div>


            </div>

        </div>



        <?php include './includes/footer.php';?>

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

    $.validator.addMethod("gmailValidation", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
    }, "Please enter a valid Gmail address.");

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
                email: true,
                gmailValidation: "Please enter a valid Gmail address ending in @gmail.com."
            },
            'phone': {
                required: true,
                phoneValidation: true
            },
            'message': {
                required: true
            }
        }
    });

    $("#contact-post").submit(function(event) {
        event.preventDefault();

        if ($(this).valid()) { // Only submit if the form is valid
            // Send the form data via AJAX
            $('#submit_btn').text('Processing...');
            $.ajax({
                url: 'mail.php',
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

                        $('#submit_btn').text('Submit');

                        $('#contact-post')[0].reset();
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