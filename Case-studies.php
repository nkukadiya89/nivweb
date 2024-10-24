<!DOCTYPE html>
<html lang="en">

<?php include 'layout.php';?>

<body>

    <body>
        <div id="wapper">
            <div class="header-wapper">
                <div class="container">

                <?php include 'header.php';?>

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
                            <img src="images/case-banner.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="PharmaLinkage-part">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 text-center my-3">
                            <div class="image-part animatable fadeInLeft ">
                                <img src="images/PharmaLinkage-img.png" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text my-3">
                            <div class="content-part animatable fadeInRight">
                                <div class="pharma-txt">
                                    <h3>PharmaLinkage</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                        PharmaLinkage is a revolutionary platform designed to address the global
                                        pharmaceutical industry's manufacturing and sourcing needs. It serves as a
                                        comprehensive solution connecting top-tier manufacturing facility providers, API
                                        and formulation manufacturers, and Contract Development and Manufacturing
                                        Organizations (CDMOs) worldwide.

                                    </p>
                                    
                                    <div class="d-grid gap-2 col-lg-3 col-sm-12 mx-auto card-btn">
                                        <a href="./Case-studies-PharmaLinkage.html" class="btn" role="button">
                                            View Project
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- part2 -->
   <div class="SmartBuyer-part">
                <div class="container">
                    <div class="row">                   
                        <div class="col col-12 col-md-6 pharma-text">
                            <div class="content-part animatable fadeInLeft ">
                                <div class="pharma-txt">
                                    <h3>Smart Buyer</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                      A company that is doing regular procurement for any product materials according to their need, faces inefficiencies and bottlenecks in its procurement processes. Manual paperwork, lack of real-time visibility, and fragmented communication were hindering their operations. Seeking a solution, they turned to SmartBuyer, a leading Procurement SaaS product, to streamline their procurement workflow.
                                    </p>
                                    <div class="d-grid gap-2 col-lg-3 col-sm-12 mx-auto card-btn">
                                        <a href="./smart-buyer-Case-studies.html" class="btn" role="button">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col col-12 col-md-6 text-center my-3">
                            <div class="image-part animatable fadeInRight ">
                                <img src="images/SmartBuyer-img.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part2end -->

            <!-- part3 -->
               <div class="PharmaLinkage-part">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 text-center">
                            <div class="image-part animatable fadeInLeft ">
                                <img src="images/PharmaLinkage-img.png" alt="" />
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 pharma-text">
                            <div class="content-part animatable fadeInRight">
                                <div class="pharma-txt">
                                    <h3>My OBGUIDE HR System</h3>
                                    <img class="my-3" src="./images/line.png" alt="">
                                    <p>
                                      In the ever-evolving landscape of healthcare, Obstetrics and Gynecology (OB/GYN) practices face unique challenges in managing patient data, streamlining workflows, and delivering high-quality care. This case study delves into the transformative journey of Shraddha Hospital, a leading OB/GYN practice, with the implementation of My OBGUIDE EHR System, a comprehensive Electronic Health Record (EHR) solution tailored specifically for OB/GYN specialties.

                                    </p>
                                    <div class="d-grid gap-2 col-lg-3 col-sm-12 mx-auto card-btn">
                                        <a href="./OBGUIDE-Case-studies.html" class="btn" role="button">
                                            View Project
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- part3end -->


            <?php include 'footer.php';?>

        </div>
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