<!DOCTYPE html>
<html lang="en">

<?php include './includes/layout.php'; ?>

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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo $projectFolderName?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                            </ol>
                        </nav>
                        <h1>Our Team</h1>
                        <p>
                            Our Team Posts
                        </p>
                    </div>
                    <div class="bnrimg">
                        <img src="./images/blog-banner-img.png" alt="" />
                    </div>
                </div>
            </div>
        </div>


        <div class="casestudiesrow bg2 SmartBuyer-part " style="background:#fff;">
            <div class="container">
                <div class="row">

                    <div class="col col-12 col-md-6 text-center  order-md-2">
                        <div class="image-part   ">
                            <img src="images/teamgroup.png" alt="" />
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 pharma-text order-md-1">
                        <div class="content-part   ">
                            <div class="pharma-txt">
                                <h3>Heros Behind the Company</h3>
                                <h5>These professionals will turn those colorful pictures with the product’s design into
                                    a full-featured website.</h5>
                                <p>
                                    We know how you feel about your business as we feel the same way about ours. We are
                                    certified driven by quality – through the customer service standards we follow.
                                </p>
                                <p>
                                    Every professional working with us possesses the best experience in their field.
                                    Maintaining strong coordination with the clients, each member works alike with equal
                                    inputs on every project assigned, thus ensuring that the best gets delivered every
                                    time from the roofs of Infynno solutions.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="workprocess ">
            <div class="container">
                <div class="blocktitle">
                    <h5>Leaders</h5>
                    <h3>Our Team</h3>
                    <p>At Nivzen Technologies</p>
                </div>
                <div class="row">
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="teammember">
                            <div class="memberphoto"><img src="images/nirav.jpg" alt=""></div>
                            <h3>Nirav Kukadiya </h3>
                            <h6>Founder, Chairman & CEO</h6>

                        </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="teammember">
                            <div class="memberphoto"><img src="images/team-img-2.jpg" alt=""></div>
                            <h3>Flora Nyra </h3>
                            <h6>Product Manager</h6>

                        </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="teammember">
                            <div class="memberphoto"><img src="images/team-img-1.jpg" alt=""></div>
                            <h3>James Levi </h3>
                            <h6>Product Manager</h6>

                        </div>
                    </div>
                    <div class="col col-12 col-sm-6 col-lg-3">
                        <div class="teammember">
                            <div class="memberphoto"><img src="images/review-3.jpg" alt=""></div>
                            <h3>James Levi </h3>
                            <h6>Product Manager</h6>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php include './includes/footer.php'; ?>


    </div>

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