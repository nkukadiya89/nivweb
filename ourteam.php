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


        <div class="Bologe-page  py-3">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-6 text-start blog-tag ">
                <h5>Heros Behind the Company</h5>

  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed aliquid id adipisci possimus sequi nihil, eius necessitatibus beatae praesentium provident veniam. Eos, laborum aliquid suscipit amet ex facere expedita sapiente.</p>
</div>

                   <div class="col-lg-6 search-btn">
                            <div class="row justify-content-center">
                                   <img src="images/ourteam.jpg" alt="">
                        </div> 
                </div>
            </div>
        </div>
    </div>

    <div class=" Bologe-page ">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-5">
                <div class="col">
                    <div class="card h-100">
                        <a href="./quantum-computing-details.php">
                            <img src="./images/Blog-part1-pic1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <div class="text-start card-tag">
                                    <a class="" href="./blogdetail.php" role="button">Mobile App Development</a>
                                </div> -->

                            <a href="./quantum-computing-details.php">
                                <h3>The Power Of Quantum Computing:How It Can Solve
                                    Complex
                                    Problem.
                                </h3>
                            </a>
                          
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="./ar-vr-details.php">
                            <img src="./images/Blog-part2-pic1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <div class="text-start card-tag">
                                    <a class="" href="./blogdetail.php" role="button">Mobile App Development</a>
                                </div> -->


                            <a href="./ar-vr-details.php">
                                <h3>The Many Uses of AR and VR: From Games to Healthcare
                                </h3>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="./ai-ml-details.php">
                            <img src="./images/Blog-part3-pic1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <div class=" text-start card-tag">
                                    <a class="" href="./blogdetail.php" role="button">Mobile App Development</a>
                                </div> -->

                            <a href="./ai-ml-details.php">
                                <h3>The Various Ways AI and ML Are Impacting Different
                                    Industries</h3>
                            </a>
                          
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="./cybersecurity-details.php">
                            <img src="./images/Blog-part4-pic1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <div class=" text-start card-tag">
                                    <a class="" href="./blogdetail.php" role="button">Mobile App Development</a>
                                </div> -->


                            <a href="./cybersecurity-details.php">
                                <h3>How to Keep Your Business Safe Online: Cybersecurity
                                    Best Practices
                                </h3>
                            </a>
                          
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="./ux-design-details.php">
                            <img src="./images/Blog-part5-pic1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <div class="col-lg- text-start card-tag">
                                    <a class="" href="./blogdetail.php" role="button">Mobile App Development</a>
                                </div> -->


                            <a href="./ux-design-details.php">
                                <h3>The Top 5 UX Design Principles Every Designer Must
                                    Know
                                </h3>
                            </a>
                          
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <a href="./healthcare-details.php">
                            <img src="./images/Blog-part6-pic1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <!-- <div class="text-start card-tag">
                                    <a class="" href="./blogdetail.php" role="button">Mobile App Development</a>
                                </div> -->

                            <a href="./healthcare-details.php">
                                <h3>The Top 5 Healthcare Tech advancements You Should
                                    Know About
                                </h3>
                            </a>
                           
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