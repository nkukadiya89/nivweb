<!DOCTYPE html>
<html lang="en">

<?php include './includes/layout.php'; ?>

<body>

    <body>
        <div id="wapper">
            <div class="header-wapper">
                <div class="container">

                    <?php include './includes/header.php'; ?>

                </div>
            </div>
            <div class="innerbanner">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="inrpgtitle">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $projectFolderName ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                            <h1>About Us</h1>
                            <p>
                                More than 100+ companies turn to Digiteon to drive their businesses forward in the age
                                of digital transformation.
                            </p>
                        </div>
                        <div class="bnrimg">
                            <img src="../images/case-banner.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="casestudiesrow bg2 SmartBuyer-part " style="background:#fff;">
                <div class="container">
                    <div class="row">

                        <div class="col col-12 col-md-6 text-center my-3 order-md-2">
                            <div class="image-part   ">
                                <img src="images/aboutus-Solutions.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text order-md-1">
                            <div class="content-part   ">
                                <div class="pharma-txt">
                                    <h3>Nivzen Technologies</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                        On the other hand, Nivzen Technologies is a trusted company dedicated to
                                        providing comprehensive technology solutions that empower businesses to innovate
                                        and thrive. With a strong focus on digital transformation, Nivzen Technologies
                                        offers a range of services designed to enhance operational efficiency, improve
                                        user experiences, and optimize business processes through the power of
                                        technology.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part1 -->
            <div class="casestudiesrow bg1 PharmaLinkage-part" style="background:#fff;">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 text-center">
                            <div class="image-part   ">
                                <img src="images/ourteam.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text">
                            <div class="content-part  ">
                                <div class="pharma-txt">
                                    <h3>Pioneering Innovation, Crafting Solutions, Building Futures</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                        Welcome to Nivzen Technologies, where web-based software craftsmanship converges
                                        with a commitment to excellence. As an emerging technologies company, we
                                        champion innovation, deliver value to clients and society, and celebrate a track
                                        record of over 500 projects, 350+ happy clients, and a team of 30+ experts
                                        dedicated to shaping a digital future that goes beyond expectations.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="workprocess aboutwork">
                <div class="container">
                    <div class="blocktitle">
                        <h5>Work Process</h5>
                        <h3>A Structured Process</h3>
                        <p>At Nivzen Technologies</p>
                    </div>
                    <div class="processimg">
                        <img src="images/proccess.png" alt="" />
                    </div>
                </div>
            </div>
            <!-- part1end -->

            <?php include './includes/footer.php'; ?>


            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="./js/jquery.js"></script>
            <script src="./js/bootstrap.bundle.min.js"></script>
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
    </body>

</html>