<!DOCTYPE html>
<html lang="en">

<?php include '../../layout.php';?>

<body>
    <div id="wapper">
        <div class="header-wapper">
            <div class="container">

                <?php include '../../header.php';?>

            </div>
        </div>
        <div class="banner career">
            <div class="container">

                <h3>Your<span> Career</span> on Next Level</h3>

                <p>Level up your career graph and join the t eam to experience a thrilling
                    and adventureNivzen gives you an <br />opportunity to work on leading technologies, enhance passion,
                    grow
                    IT
                    career and cultivate talent</p>

            </div>
        </div>
        <div class="currentopening">
            <div class="blocktitle">
                <h3>Current Openings</h3>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="openingwrp">
                            <div class="openingbox red">

                                <h3>Graphic Designer </h3>
                                <div class="skills">
                                    <label>Experience </label>
                                    1 to 2 year 
                                </div>
                                <div class="skills">
                                    <label>Job Type</label>
                                    Work From Office
                                </div>

                                <div class="btnwrp">
                                    <a href="./graphic-designer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="./graphic-designer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="openingwrp gap">
                            <div class="openingbox yellow">

                                <h3>Business Developer </h3>
                                <div class="skills">
                                    <label>Experience </label>
                                    1 TO 2 Years
                                </div>
                                <div class="skills">
                                    <label>Job Type</label>
                                    Work From Office
                                </div>

                                <div class="btnwrp">
                                    <a href="business-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="business-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="openingwrp">
                            <div class="openingbox green">
                                <h3>Python Django Developer</h3>
                                <div class="skills">
                                    <label>Experience </label>
                                    2 TO 3 Years
                                </div>
                                <div class="skills">
                                    <label>Job Type</label>
                                    Work From Office
                                </div>
                                <div class="btnwrp">
                                    <a href="python-django-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="python-django-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-lg-3 ">
                        <div class="openingwrp gap">
                            <div class="openingbox blue">
                                <h3>Content Writer </h3>
                                <div class="skills">
                                    <label>Experience </label>
                                    0 TO 1 Years
                                </div>
                                <div class="skills">
                                    <label>Job Type</label>
                                    Work From Office
                                </div>
                                <div class="btnwrp">
                                    <a href="content-writer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="content-writer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 
                    <form id="career-post" method="post" style="align:center; width:80%; padding-left:28%;">
                      <h1 style="padding-left:38%; padding-top:28px;"><b>Get In Touch</b></h1><br>
                        <div class="row" style="padding-top:30px; text-align:left;">
                          <div class="col-lg-6 col-md-6 col-sm-12" style="padding-bottom:18px;">
                            <label for="firstName" style="padding-left:8px; padding-bottom:5px;">First Name </label>
                              <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name"  >
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="lastName" style="padding-left:8px; padding-bottom:5px;">Last Name</label>
                              <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" >
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="emailAddress" style="padding-left:8px; padding-bottom:5px;">Email Address</label>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" >
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="phoneNumber" style="padding-left:8px; padding-bottom:5px;">Phone Number</label>
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" >
                          </div><br><br>
                            <div class="col-lg-6 col-md-6 col-sm-12">

                              <label for="work" style="padding-top:28px;"> Are you comfortable working from office ? </label><br><br>
                                <p class='container'>

                                  <input type="radio" id="comfortable_yes" name="comfortable" value="yes"> Yes
                                  <input type="radio" id="comfortable_no" name="comfortable"  value="no"> No<br> 
                                </p>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                              <label for="experience" style="padding-top:28px;"> How many years of experience do you have ? </label><br><br>
                              <select style="width: 88px;">
                                <option id="experience_one" name="experience" > 0-1 </option>
                                <option id="experience_two" name="experience" > 1-3 <br></option>
                                <option id="experience_three" name="experience" > 3-5 </option>
                                <option id="experience_four" name="experience" > 5+ <br></option>
                              </select>
                            </div>
                          
                            <div id="drop-area">
                                <p>Drag and drop files here or click to upload</p>
                                <input type="file" id="resume" name="resume"  >
                            </div>
                            <div class="discussProject">
                              <div class="container">
                                 <button class="border-gradient" type="submit">
                                        <span>Submit</span>
                                 </button>
                              </div>
                            </div>
                          </div>
                        </form> -->


        <?php include 'footer.php';?>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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


            $('.owl-services').owlCarousel({
                loop: false,
                margin: 0,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    },
                    1300: {
                        items: 4
                    }
                }
            })
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

        <!-- <script>
          $.validator.addMethod("phoneValidation", function(value, element) {
        // Regular expression for phone number validation
          return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
        }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

        $.validator.addMethod("gmailValidation", function(value, element) {
          // Check if the email ends with @gmail.com
          return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
        }, "Please enter a valid Gmail address.");

            $("#career-post").validate({
                rules: {
                    'fname': {
                        required: true,
                    },
                    'lname': {
                        required: true,
                    },
                    'email': {
                        required: true,
                        email: true,
                        gmailValidation: "Please enter a valid Gmail address ending in @gmail.com."
                    },
                    'phone': {
                        required: true,
                        phoneValidation: true 
                    },
                    'comfortable': {
                        required: true,
                    },
                    'experience':{
                      required:true,
                    },

                    
                    'resume': {
                      required: true,
                    } 
                },
                errorPlacement: function(error, element) 
                {
                    if ( element.is(":radio") ) 
                    {
                        error.appendTo( element.parents('.container') );
                    }
                    else 
                    {
                      // This is the default behavior 
                        error.insertAfter( element );
                    }
                }
            });

            $("#career-post").submit(function(event) {
                event.preventDefault(); 

                // Send the form data via AJAX
                $.ajax({
                    url: 'submit-career.php',  
                    type: 'POST',
                    data: $(this).serialize(), // Serialize form data
                    success: function(response) {
                        if (response) {
                            $("#alertMsg").html(`
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    ${response}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            `);
                            
                            $('#career-post')[0].reset();
                        } else {
                            console.error("Mode is undefined");
                        }
                    }
                });
            });

        </script>
 -->


</body>

</html>