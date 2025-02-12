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
                            Innovative Software Solutions Tailored for Business Growth
                            </p>
                        </div>
                        <div class="bnrimg">
                            <img src="images\case-banner.png" alt="case-banner" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="casestudiesrow bg2 SmartBuyer-part " style="background:#fff;">
                <div class="container">
                    <div class="row">

                        <div class="col col-12 col-md-6 text-center my-3 order-md-2">
                            <div class="image-part">
                                <img src="images/aboutbig.png" alt="aboutbig" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text order-md-1">
                            <div class="content-part   ">
                                <div class="pharma-txt">
                                    <h3>Nivzen Technologies</h3>
                                    <img class="my-3" src="./images/line.png" alt="line">
                                    <p>
                                    At Nivzen Technologies, we craft innovative and scalable software solutions that drive business success. With expertise in custom software development, SaaS solutions, AI/ML integration, ERP, CRM, and mobile app development, we empower businesses to streamline operations and enhance efficiency.
                                    </p>

                                </div>
                                 <div class="pharma-txt">
                                <h5>Who We Are</h5>
                    <p>
                        Founded with a passion for technology and innovation, Nivzen Technologies is a team of skilled developers,
                        designers, and strategists committed to delivering high-quality, results-driven software solutions.
                        We specialize in Python Django for backend development, React JS for frontend, and mobile solutions using
                        React Native and Flutter.
                    </p>
                    </div>

                     <div class="pharma-txt">
                    <h5>Our Expertise</h5>
                    <ul>
                        <li><strong>Custom Software Development</strong> – Tailored solutions to meet unique business needs.</li>
                        <li><strong>ERP & CRM Solutions</strong> – Seamless business process automation.</li>
                        <li><strong>AI & ML Integration</strong> – Intelligent solutions for data-driven decision-making.</li>
                        <li><strong>SaaS Products</strong> – Scalable and efficient cloud-based applications.</li>
                        <li><strong>E-commerce & Marketplace Development</strong> – Advanced platforms for online growth.</li>
                        <li><strong>Mobile App Development</strong> – Cutting-edge apps for Android and iOS.</li>
                    </ul>
                   </div>
                    <div class="pharma-txt">
                    <h5>Why Choose Us?</h5>
                    <ul>
                        <li><strong>Monolithic Architecture Experts</strong> for robust, scalable applications.</li>
                        <li><strong>End-to-End Development</strong> – From ideation to deployment and beyond.</li>
                        <li><strong>Client-Centric Approach</strong> – We prioritize your business goals.</li>
                        <li><strong>Innovative & Future-Ready</strong> – Always leveraging the latest tech.</li>
                    </ul>
                    </div>
                    <p>
                        At Nivzen Technologies, we don’t just build software—we build digital experiences that drive growth.
                    </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part1 -->
            <div class="counterwrp">
                <div class="container">
                    <div class="row ">
                        <div class="col col-6 col-md-3 text-center">
                            <h3>30</h3>
                            <h5>Returning Customers</h5>
                        </div>
                        <div class="col col-6 col-md-3 text-center">
                            <h3>500+</h3>
                            <h5>Project Delivered</h5>
                        </div>
                        <div class="col col-6 col-md-3 text-center">
                            <h3>30+</h3>
                            <h5>Experts Team</h5>
                        </div>
                        <div class="col col-6 col-md-3 text-center">
                            <h3>350+</h3>
                            <h5>Delighted clients</h5>
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
                        <img src="images/proccess.png" alt="proccess" />
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