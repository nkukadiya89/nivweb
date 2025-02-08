<!DOCTYPE html>
<html lang="en">

<?php include '../includes/layout.php'; ?>

<body>
    <div id="wapper">
        <div class="header-wapper">
            <div class="container">

                <?php include '../includes/header.php'; ?>

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
                    <div class="col col-12 col-md-6 col-lg-3">
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
                                    <a href="/nivweb/careers/graphics-designer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="/nivweb/careers/graphics-designer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-3">
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
                                    <a href="/nivweb/careers/business-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="/nivweb/careers/business-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-3">
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
                                    <a href="/nivweb/careers/python-django-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="/nivweb/careers/python-django-developer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-3 ">
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
                                    <a href="/nivweb/careers/content-writer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Read More</span> </a>
                                    <a href="/nivweb/careers/content-writer-role.php"
                                        class="border-gradient2 border-gradient">
                                        <span>Apply Now</span> </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

        <?php include '../includes/footer.php'; ?>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
        
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

       

</body>

</html>