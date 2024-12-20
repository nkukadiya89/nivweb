<!DOCTYPE html>
<html lang="en">

<?php include '../../includes/layout.php'; ?>

<body>

    <body>
        <div id="wapper">
            <div class="header-wapper">
                <div class="container">

                <?php include '../../includes/header.php'; ?>

                </div>
            </div>
            <div class="innerbanner">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="inrpgtitle">
                            <h3><span>Case Studiese</span></h3>
                            <p>
                                More than 100+ companies turn to Digiteon to drive their businesses forward in the age
                                of digital transformation.
                            </p>
                        </div>
                        <div class="bnrimg">
                            <img src="../../images/case-banner.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="casestudiesrow bg1 PharmaLinkage-part">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 text-center">
                            <div class="image-part   ">
                                <img src="../../images/PharmaLinkage-img.png" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text">
                            <div class="content-part  ">
                                <div class="pharma-txt">
                                    <h3>PharmaLinkage</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                    <b> Pharma MatchMaking Platform </b>is a unique digital platform designed to bridge the gap between pharmaceutical manufacturers and the facilities they need. 
                                    The platform acts as a matchmaking service, connecting manufacturers with specialized production units and facilities that align with their requirements. 
                                    This innovative approach optimizes resource allocation in the pharmaceutical sector, enabling seamless collaborations, and ensuring compliance with stringent industry standards.
                                    </p>

                                    <a href="./pharmalinkage-case-studies.php" class="border-gradient mt-3"
                                        role="button">
                                        <span>View Project</span>
                                    </a>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part2 -->
            <div class="casestudiesrow bg2 SmartBuyer-part">
                <div class="container">
                    <div class="row">

                        <div class="col col-12 col-md-6 text-center my-3 order-md-2">
                            <div class="image-part   ">
                                <img src="../../images/SmartBuyer-img.png" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text order-md-1">
                            <div class="content-part   ">
                                <div class="pharma-txt">
                                    <h3>Smart Buyer</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                    <b>Smart Buyer </b>is a state-of-the-art procurement portal designed to streamline and optimize the procurement process for businesses. 
                                    Developed by <b>Nivzen Technologies</b>, this platform addresses the challenges of procurement inefficiencies, supplier management, and cost control. 
                                    The solution provides businesses with a seamless digital experience, ensuring transparency, efficiency, and scalability in procurement operations.
                                    </p>

                                    <a href="./smart-buyer-case-studies.php" class="border-gradient mt-3" role="button">
                                        <span>View Project</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part2end -->

            <!-- part3 -->
            <div class="casestudiesrow bg3 PharmaLinkage-part">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 text-center">
                            <div class="image-part   ">
                                <img src="../../images/PharmaLinkage-img.png" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text">
                            <div class="content-part  ">
                                <div class="pharma-txt">
                                    <h3>My OBGUIDE HR System</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                    <b>MyObGuide is an innovative Electronic Health Record (EHR) system </b> developed to address the specific needs of obstetric and gynecological (OB/GYN) doctors. 
                                    Created by <b>Nivzen Technologies</b>, the platform empowers healthcare professionals by streamlining patient data management, improving care delivery, and ensuring compliance with medical standards

                                    </p>

                                    <a href="./obguide-case-studies.php" class="border-gradient mt-3" role="button">
                                        <span>View Project</span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part3end -->


            <?php include '../../includes/footer.php'; ?>

        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../js/jquery.js"></script>
        <script src="../../js/bootstrap.bundle.min.js"></script>
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

            $(".ward").owlCarousel({
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
    </body>

</html>