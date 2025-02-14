<!DOCTYPE html>
<html lang="en">
<style>
#inquery-post-head .error {
    color: red;
}
</style>

<body>
    <header>
        <div class="logo">
            <a class="navbar-brand m-0" href=" <?php echo $projectFolderName?>"
                aria-label="image which shows site logo"><img src="/nivweb/images/nivzen-technologies.svg" alt="site logo" /></a>
        </div>
        <div class="headright">
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item active"> <a class="nav-link" href="<?php echo $projectFolderName?>">Home
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">Company</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="<?php echo $projectFolderName?>/aboutus">About
                                        Us</a></li>
                                <!-- <li><a class="dropdown-item" href="<?php echo $projectFolderName?>/ourteam">Our
                                        Team</a></li> -->
                                <!-- <li><a class="dropdown-item"
                                        href="<?php echo $projectFolderName?>/lifeatnivzen">Life at Nivzen </a></li> -->
                                <li><a class="dropdown-item"
                                        href="<?php echo $projectFolderName?>/careers/careers">Career</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Expertise </a>
                            <div class="dropdown-menu megamenu" role="menu">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-12 col-md-12 col-lg-4">
                                            <div class="menuimgdi"><img
                                                    src="<?php echo $projectFolderName?>/images/expertize.png" alt="" />
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="col-megamenu">
                                                <h6 class="title">Nivzen LAB</h6>
                                                <ul class="list-unstyled">
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/web-and-mobile-solutions">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/Web-Mobile.png"
                                                                    alt="" /></div> Web & Mobile
                                                            Solutions
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/digital-strategy-services">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/Digital-Services.png"
                                                                    alt="" /></div>Digital
                                                            Strategy Services
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/tech-innovation-hub">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/Tech-Innovation.png"
                                                                    alt="" /></div>Tech
                                                            Innovation
                                                            Hub
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/crm-enterprise-solutions">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/CRM.png"
                                                                    alt="" /></div>CRM &
                                                            Enterprise Solutions
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/design-planning-services">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/design-ico.png"
                                                                    alt="" /></div>Design &
                                                            Planning Services
                                                        </a></li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="col-megamenu">
                                                <h6 class="title">Domain Expertise</h6>
                                                <ul class="list-unstyled">
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/industry-solutions">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/Industry.png"
                                                                    alt="" /></div>Industry
                                                            Solutions
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/marketplace-e-commerce">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/ecommerce.png"
                                                                    alt="" /></div>Marketplace &
                                                            E-commerce
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/financial-services-hub">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/financial.png"
                                                                    alt="" /></div>Financial
                                                            Services Hub
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/our-expertise/educational-technology">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/education.png"
                                                                    alt="" /></div>Educational
                                                            Technology
                                                        </a></li>


                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown has-megamenu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Hire Us </a>
                            <div class="dropdown-menu megamenu" role="menu">
                                <div class="container">
                                    <div class="row g-3">
                                        <div class="col-12 col-md-12 col-lg-3">
                                            <div class="menuimgdi"><img
                                                    src="<?php echo $projectFolderName?>/images/hiremenu.png" alt="" />
                                            </div>
                                        </div><!-- end col-3 -->
                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="col-megamenu">
                                                <h6 class="title">Front End</h6>
                                                <ul class="list-unstyled">
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/react-js-development-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/react2-ico.png"
                                                                    alt="" /></div> Hire React Js
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/uiux-designer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/design-ico.png"
                                                                    alt="" /></div>Hire UI/UX
                                                            Designer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/graphics-designer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/design-ico.png"
                                                                    alt="" /></div>Hire Graphics
                                                            Designer
                                                        </a></li>
                                                </ul>
                                                <h6 class="title">Content Management System (CMS)</h6>
                                                <ul class="list-unstyled">
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/wordpress-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/wordpress-ico.png"
                                                                    alt="" /></div>Hire
                                                            Wordpress Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/shopify-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/shopify-ico.png"
                                                                    alt="" /></div>Hire Shopify
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/magento-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/magento-ico.png"
                                                                    alt="" /></div>Hire Magento
                                                            Developer
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="col-megamenu">
                                                <h6 class="title">Backend</h6>
                                                <ul class="list-unstyled">
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/python-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/python2-ico.png"
                                                                    alt="" /></div>Hire Python
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/ai-ml-development-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/ai-ico.png"
                                                                    alt="" /></div>Hire AI/ML
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/django-development-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/django-ico.png"
                                                                    alt="" /></div>Hire Django
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/flask-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/flask-ico.png"
                                                                    alt="" /></div>Hire Flask
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/fast-api-development-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/fastapi-ico.png"
                                                                    alt="" /></div>Hire Fast API
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/ruby-rails-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/ruby-ico.png"
                                                                    alt="" /></div>Hire Ruby and
                                                            Rails Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/laravel-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/laravel-ico.png"
                                                                    alt="" /></div>Hire Laravel
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/dotnet-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/dotnet-ico.png"
                                                                    alt="" /></div>Hire .Net
                                                            Developer
                                                        </a></li>
                                                </ul>
                                            </div> <!-- col-megamenu.// -->
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="col-megamenu">
                                                <h6 class="title">Mobile App Development</h6>
                                                <ul class="list-unstyled">
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/android-development-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/android-ico.png"
                                                                    alt="" /></div>Hire Android
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/ios-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/ios-ico.png"
                                                                    alt="" /></div>Hire IOS Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/flutter-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/flutter-ico.png"
                                                                    alt="" /></div>Hire Flutter
                                                            Developer
                                                        </a></li>
                                                    <li><a
                                                            href="<?php echo $projectFolderName?>/react-native-developer-company">
                                                            <div class="menuico"><img
                                                                    src="<?php echo $projectFolderName?>/images/react2-ico.png"
                                                                    alt="" /></div>Hire React
                                                            Native Developer
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Resources</a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item"
                                        href="<?php echo $projectFolderName?>/blogs/blogs">Blogs</a></li>
                                <li><a class="dropdown-item"
                                        href="<?php echo $projectFolderName?>/case-studies/case-studies">Case
                                        Studies</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo $projectFolderName?>/contact-us">
                                Contact Us </a></li>
                    </ul>
                </div>
            </nav>
            <button class="border-gradient " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span>Inquiry Now</span>
            </button>


            <!-- Modal -->
            <div class="modal fade inquirynodal" id="exampleModal" tabindex="-1" data-bs-backdrop='false'
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="overlay"></div>
                <div class=" modal-dialog modal-dialog-centered">
                    <div class="modal-content">


                        <div class="modal-body">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="hireformRight ">
                                <h3>
                                    Streamline Your Business With Top Development Company </h3>
                                <p>
                                    We ensure you’re matched with the right talent resource based
                                    on your requirement.
                                </p>
                                <form id="inquery-post-head" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number" />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control" id="country" name="country"
                                                placeholder="Country" />
                                        </div>
                                  
                                        <div class=" mb-4">
                                            <textarea class="form-control" rows="2" id="desc" name="desc"
                                                placeholder="Describe Your Requirements"></textarea>
                                        </div>


                                        <div class="input-group mb-4">
                                            <input type="file" class="form-control file" id="inqueryfile"
                                                name="inqueryfile" accept=".pdf,.doc,.docx">
                                        </div>
                                     
                                        <div class="form-group mt-3">
                                            <div class="g-recaptcha mb-2"  data-sitekey="6LfeXowqAAAAAP-pi9irdFbgr2qxJxmzKBbyY7dP"
                                                name="recaptcha"></div>
                                            <div id="recaptcha-error-head" class="error"
                                                style="color: red; display: none;">
                                                Please verify that you are not a robot.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2 d-flex justify-content-end">
                                        <button class="border-gradient2 border-gradient" type="submit" id="inq-btn-head">
                                            <span id="inq_text_head">Inquire now</span>
                                        </button>
                                    </div>
                                </form>

                                <div class="formbtmtxt">
                                    <a href="mailto:sales@nivzen.com">

                                        sales@nivzen.com
                                    </a>
                                    <h4>Your Success Is Guaranteed!</h4>
                                    <p>
                                        We accelerate the release of digital products and guarantee your success
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
    // Custom phone number validation (allowing +, spaces, dashes, parentheses)
    $.validator.addMethod("phoneValidation", function(value, element) {
        return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
    }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

    // Custom Gmail validation (ensuring the email ends with @gmail.com)
    $.validator.addMethod("gmailValidation", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
    }, "Please enter a valid Gmail address.");

    $.validator.addMethod("recaptchaValidation", function(value, element) {
        return grecaptcha.getResponse().length > 0;
    }, "Please verify that you are not a robot.");

    // Initialize form validation
    $("#inquery-post-head").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
                gmailValidation: true
            },
            phone: {
                required: true,
                phoneValidation: true
            },
            country: {
                required: true,
            },
            desc: {
                required: false
            },
            file: {
                required: false,
                extension: "jpg|jpeg|png|pdf",
                filesize: 10485760
            },
            recaptcha: {
                required: true,
                recaptchaValidation: true
            }
        },
        messages: {
            // Custom error messages can be defined here for individual fields
            name: "Please enter your name.",
            email: "Please enter a valid email address.",
            phone: "Please enter a valid phone number.",
            country: "Please enter a valid country.",
            desc: "Please describe your requirements.",
            recaptcha: "Please describe your requirements.",
            file: {
                extension: "Please upload a valid file (jpg, jpeg, png, pdf).",
                filesize: "The file size must not exceed 10 MB."
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "recaptcha") {
                error.appendTo("#recaptcha-error-head");
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            $('#recaptcha-error-head').hide();


            $('#inq-btn-head').prop('disabled', true);
            $('#inq_text_head').text('Processing...');


            if (grecaptcha.getResponse().length === 0) {
                $('#inq-btn-head').prop('disabled', false);
                $('#inq_text_head').text('Inquire now');

                $('#recaptcha-error-head').show();
                return;
            }
            var form_data = new FormData(form);

            var imgFile = $("#inqueryfile")[0];
            if (imgFile.files.length > 0) {
                form_data.append("inqueryfile", imgFile.files[0]);
            }

            $.ajax({
                url: '/nivweb/submit-inquery',
                type: 'POST',
                data: form_data,
                contentType: false,
                processData: false,
                success: function(response) {
                    try {
                        const obj = JSON.parse(response);
                        if (obj && obj.message) {
                            // Optional: Redirect to a thank-you page or show a success message
                            window.location.href = '/nivweb/thank-you.php';
                        } else {
                            console.error("Response error: Mode is undefined.");
                        }
                    } catch (error) {
                        console.error("Error parsing JSON response:", error);
                    }
                },
                error: function() {
                    grecaptcha.reset();
                    $('#recaptcha-error-head').hide();
                    alert('There was an error submitting your form. Please try again later.');
                },
                complete: function() {
                    // Re-enable the submit button and reset the text after the request completes
                    $('#inq-btn').prop('disabled', false);
                    $('#inq_text_head').text('Inquire now');
                }
            });
        }
    });

    document.querySelectorAll('.navbar-nav .nav-item.dropdown').forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            var dropdownMenu = item.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'block';
        });

        item.addEventListener('mouseleave', function() {
            var dropdownMenu = item.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'none';
        });
    });
    </script>


</body>

</html>