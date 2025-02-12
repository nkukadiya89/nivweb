<!DOCTYPE html>
<html lang="en">

<?php include '../includes/layout.php'; ?>

<body>

    <body>
        <div id="wapper">
            <div class="header-wapper">
                <div class="container">

                    <?php include '../includes/header.php'; ?>

                </div>
            </div>
            <div class="innerbanner">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="inrpgtitle">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo $projectFolderName ?>">Home</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo $projectFolderName?>/case-studies/case-studies">Case
                                            studies</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Smart Buyer</li>
                                </ol>
                            </nav>
                            <h1>Smart Buyer</h1>
                            <p>
                                Streamlining Procurement Processes with Smart Buyer
                            </p>
                        </div>
                        <div class="bnrimg">
                            <img src="../images/case-banner.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>



            <div class="case-studiedetail">
                <div class="container">
                    <div class="casestudiesdtlrow">
                        <div class="row">
                            <div class="col col-12 col-md-6 text-center">
                                <div class="image-part ">
                                    <img src="../images/Introduction-img.png" alt="" />
                                </div>
                            </div>


                            <div class="col col-12 col-md-6 pharma-text my-3">
                                <div class="content-part animatable fadeInRight">
                                    <div class="pharma-txt  mx-4">
                                        <h3>Client Requirements</h3>
                                        <img class="my-3" src="../images/line.png" alt="">
                                        <h5>The client is a mid-sized manufacturing company facing challenges in
                                            managing procurement activities.</h5>

                                        <p>Their procurement process was manual, involving extensive paperwork, delayed
                                            approvals, and inconsistent supplier management.</p>
                                        <p>These inefficiencies resulted in higher costs, frequent stockouts, and
                                            strained supplier relationships.</P>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="casestudiesdtlrow">
                        <div class="row">
                            <div class="col col-12 col-md-6 text-center   order-md-2">
                                <div class="image-part ">
                                    <img src="../images/Challenges-img.png" alt="" />
                                </div>
                            </div>


                            <div class="col col-12 col-md-6 pharma-text  order-md-1">
                                <div class="content-part ">
                                    <div class="pharma-txt">
                                        <h3>Key Challenges</h3>
                                        <img class="my-3 mb-4" src="../images/line.png" alt="">
                                        <ul>
                                            <li>Automate procurement workflows.</li>
                                            <li>Simplify supplier management.</li>
                                            <li>Ensure real-time tracking of procurement activities.</li>
                                            <li>Provide data-driven insights for cost control and better
                                                decision-making.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" casestudiesdtlrow">
                        <div class="row">
                            <div class="col col-12 col-md-6 text-center my-4">
                                <div class="image-part">
                                    <img src="../images/casestudy-img/smartbuyer-solution.png" alt="" />
                                </div>
                            </div>

                            <div class="col col-12 col-md-6 pharma-text py-4">
                                <div class="content-part">
                                    <div class="pharma-txt  mx-4">
                                        <h3>Solution</h3>
                                        <img class="my-3" src="../images/line.png" alt="">

                                        <p>Nivzen Technologies designed and developed Smart Buyer as a
                                            monolithic web
                                            application using Python Django for the backend and React JS
                                            for the
                                            frontend.
                                            The solution includes the following features:</p>

                                        <h5>Supplier Management:</h5>
                                        <ul>
                                            <li>Centralized repository of suppliers.</li>
                                            <li>Evaluation and rating system for suppliers based on
                                                performance metrics.
                                            </li>
                                        </ul>

                                        </li>

                                        <h5>Automated Procurement Workflows:</h5>
                                        <ul>
                                            <li>Digital purchase request and approval system.</li>
                                            <li>Automated purchase order (PO) generation.</li>
                                        </ul>
                                        </li>

                                        <h5>Real-time Tracking:</h5>
                                        <ul>
                                            <li>Dashboard for real-time tracking of procurement activities.
                                            </li>
                                            <li>Notifications and alerts for pending approvals and stock
                                                requirements.</li>
                                        </ul>
                                        </li>

                                        <h5>Cost Analysis and Reporting:</h5>
                                        <ul>

                                            <li>Customizable reports for management.</li>
                                        </ul>
                                        </li>

                                        <h5>Integration Capabilities:</h5>
                                        <ul>
                                            <li>Seamless integration with the company's existing ERP system.
                                            </li>
                                            <li>API support for third-party tools.</li>
                                        </ul>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="case-key-featuer">
                <div class="container">

                    <div class="text-center mt-3">
                        <h3>Key Features</h3>
                        <div class="dot-line">
                            <img class="my-3" src="../images/line2.png" alt="">
                        </div>
                    </div>
                    <div class="my-4">
                        <div class="content-text">
                            <div class="container">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <div class="content">
                                            <h2>Reduced Procurement Time:</h2>
                                            <p>Automated workflows reduced procurement cycle times by
                                                40%.</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="content">
                                            <h2>Cost Savings:</h2>
                                            <p>Data-driven insights enabled better negotiation with
                                                suppliers, resulting
                                                in a 15% reduction in procurement costs.</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="content highlight">
                                            <h2>Enhanced Transparency:</h2>
                                            <p>Real-time tracking improved accountability and supplier
                                                relationships.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="content">
                                            <h2>Operational Efficiency:</h2>
                                            <p>Integration with the ERP system eliminated data silos,
                                                streamlining
                                                operations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Conclusion-part">
                <div class="container">
                    <div class="row">
                        <div class="col col-12 col-md-6 pharma-text  my-3">
                            <div class="content-part animatable fadeInLeft">
                                <div class="pharma-txt mx-4">
                                    <h2>Conclusion</h2>
                                    <img class="my-3" src="../images/line.png" alt="">
                                    <p><b>Smart Buyer</b> has transformed the client's procurement
                                        operations, making
                                        them more efficient, transparent, and cost-effective.
                                        The solution's scalability ensures it can adapt to the client's
                                        growing needs,
                                        establishing a strong foundation for future digital
                                        transformation
                                        initiatives.<br><br>
                                        <b>Nivzen Technologies'</b>expertise in delivering tailored
                                        software solutions
                                        has not only resolved the client's immediate challenges but also
                                        set a benchmark
                                        for procurement excellence.

                                        <!-- <div class="d-grid gap-2 col-lg-4  col-sm-12  mx-auto card-btn">
                                        <a href="javascript:history.go(-1)">
                                            <button class="border-gradient">
                                                <span> View All Resources</span>
                                            </button>
                                        </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 text-center my-3">
                            <div class="image-part animatable fadeInRight ">
                                <img src="../images/SmartBuyer-img.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="technologies">
                <div class="container">
                    <div class="text-center mt-3">
                        <h3>Technologies</h3>
                        <div class="dot-line">
                            <img class="my-3" src="../images/line.png" alt="">
                        </div>
                    </div>
                    <div class="icon-btn">
                        <a><img src="../images/Python.png" alt="Python Icon">Python</a>
                        <a><img src="../images/dj.png" alt="Django Icon">Django</a>
                        <a><img src="../images/ReactJs.png" alt="React JS Icon">React JS</a>
                        <a><img src="../images/pwa-icon.png" alt="PWA">PWA</a>
                        <a><img src="../images/antd.png" alt="Ant Design Icon">Ant Design</a>
                        <a><img src="../images/Figma.png" alt="Figma Icon">Figma</a>
                        <a><img src="../images/aws.png" alt="AWS Cloud Icon">AWS Cloud</a>
                        <a><img src="../images/postgresql-icon.png" alt="postgre sql Icon">PostgreSQL</a>
                    </div>
                </div>
            </div>

            <?php include '../includes/footer.php'; ?>

        </div>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
        </script>
        <script>
        jQuery(function($) {

            var doAnimations = function() {

                var offset = $(window).scrollTop() + $(window).height(),
                    $animatables = $(".animatable");


                if ($animatables.length == 0) {
                    $(window).off("scroll", doAnimations);
                }


                $animatables.each(function(i) {
                    var $animatable = $(this);
                    if ($animatable.offset().top + $animatable.height() - 20 <
                        offset) {
                        $animatable.removeClass("animatable").addClass("animated");
                    }
                });
            };


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