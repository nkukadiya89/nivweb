<!DOCTYPE html>
<html lang="eng">

    <?php include '../includes/layout.php'; ?>
    <style>
        #drop-area {
            border: 2px dashed #ccc;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            margin: 20px;
        }
        #fileElem {
            display: none;
        }
        .highlight {
            border-color: #666;
        }
        #career-detail .error {
            text-align:left;
            color:red;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script> 
        function enableSubmitBtn(){
            document.getElementById("career_submit_btn").disabled=false;
        }
    </script>
    </head>

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
                            <h3><span> Python Django Developer</span></h3>
                        </div>
                        <div class="bnrimg">
                            <img src="images/bloge-banner-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>

            <div id="alertMsg"></div>

            <div class="container">
                <div class="row gy-4 gy-lg-0">
                    <div class="col-12">
                        <div class="section-title-and-desc">
                            <div class="section-title-block">
                                <h1 class="section-title-text mt-5"><b>Job Description : </b></h1><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 mb-5">
                        <p class="font-bold">Job Brief:</p>
                        <p>Are you passionate about building scalable and high-performing web applications? 
                            Nivzen Technologies is seeking a skilled <b>Python Django Developer </b>with 2-3 years of experience to join our growing development team.</p>
                        <p>As a <b>Python Django Developer at Nivzen</b>, you will be responsible for designing, developing, and maintaining robust backend systems. You'll work on exciting projects, collaborate with cross-functional teams, and contribute to the success of innovative software solutions.</p>
                        <!-- <p><span class="font-bold">Role:</span> UI/UX Designer</p> 
                        <p><span class="font-bold">Experience:</span> 2 to 3 Years </p>
                        <p><span class="font-bold">Position Open:</span> 1</p><p><span class="font-bold">Job Location:</span> Ahmedabad</p>              
                        <p><span class="font-bold">Work from Home Available:</span> Not Available</p>                    
                        <p><span class="font-bold">Salary:</span> Not a constraint for the right candidate</p>                                             -->
                        <hr>
                        <p class="font-bold">Key Responsibilities :</p>
                        
                        <ul class="style-icon">
                            <li>Develop and maintain web applications using Python and Django.</li>
                            <li>Design and implement RESTful APIs for seamless integration with frontend systems.</li>
                            <li>Optimize backend systems for performance, scalability, and reliability.</li>
                            <li>Collaborate with frontend developers to ensure cohesive application functionality.</li>
                            <li>Write clean, maintainable, and well-documented code.</li>
                            <li>Troubleshoot and resolve technical issues promptly.</li>
                        </ul>                                            
                        <hr>
                        <p class="font-bold">Required Skills and Qualifications:</p>
                        <ul class="style-icon"><li><b>Experience : </b>2-3 years in Python and Django development.</li>
                            <li>Strong understanding of Django ORM, REST framework, and Python libraries.</li>
                            <li>Experience with relational databases (PostgreSQL, MySQL, etc.).</li>
                            <li>Proficiency in version control systems (e.g., Git).</li>
                            <li>Familiarity with cloud platforms like AWS or Azure (preferred).</li>
                            <li>Strong debugging and problem-solving skills.</li>
                        </ul>                                       
                            <hr><p><span class="font-bold">Additional Skills (Preferred) : </span></p>   
                            <li>Knowledge of frontend technologies like React or Angular.</li>
                            <li>Experience with Docker, Kubernetes, or CI/CD pipelines.</li>
                            <li>Understanding of Agile development methodologies.</li>

                            <hr><p><span class="font-bold">Location :</span> </p>  
                            <p>902, Ganesh glory, Godrej garden City road, jagatpur<br>
                                Ahmedabad - 382481</p>                  
                            <hr><p><span class="font-bold">Job Type : </span>Full-time</p>

                        <ul class="style-icon">
                            <b>Why Join Nivzen Technologies?</b>
                            <li>Opportunity to work on innovative projects with cutting-edge technologies.</li>
                            <li>Supportive and collaborative team environment.</li>
                            <li>Career growth and skill development opportunities.</li>
                        </ul>                 
                    
                        <a href="javascript:history.go(-1)">
                            <button class="border-gradient">
                                <span> Go Back</span>
                            </button>
                        </a>              
                    </div> 
                    <div class="col-lg-1">
                        <div class="vr"></div>
                    </div>

                    <?php include 'careers-details-inq-form.php'?>

                </div>
            </div>
        </div>

        <?php include '../includes/footer.php'; ?>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
     
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <script>
            $.validator.addMethod("phoneValidation", function(value, element) {
                return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
            }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

            // $.validator.addMethod("gmailValidation", function(value, element) {
            //     return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
            // }, "Please enter a valid Gmail address.");

            $.validator.addMethod("fileValidation", function(value, element) {
                if (this.optional(element)) {
                    return true; 
                }
                var fileName = value.split('\\').pop();
                var fileExtension = fileName.split('.').pop().toLowerCase(); 
                return /\.(pdf|doc|docx)$/i.test(fileName); 
                }, "Please upload a valid file (PDF or DOC).");
                

            $.validator.addMethod("recaptchaValidation", function(value, element) {
                return grecaptcha.getResponse().length > 0; 
            }, "Please verify that you are not a robot.");

            $("#career-detail").validate({
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
                        // gmailValidation: true
                    },
                    'phone': {
                        required: true,
                        phoneValidation: true
                    },
                    'resume': {
                        required: true,
                        fileValidation: true
                    },
                    'recaptcha': {
                        required: true,
                        recaptchaValidation: true 
                    }
                },
                errorPlacement: function(error, element) {
                    if (element.attr("name") == "recaptcha") {
                        error.appendTo("#recaptcha-error"); 
                    } else {
                        error.insertAfter(element);     
                    }
                },
                // highlight: function(element, errorClass) {
                //     $(element).addClass('is-invalid');
                // },
                // unhighlight: function(element, errorClass) {
                //     $(element).removeClass('is-invalid');
                // }
            });

            $("#career-detail").submit(function(event) {
                event.preventDefault(); 

                $('#recaptcha-error').hide(); 

                if ($(this).valid()) {
                    if (grecaptcha.getResponse().length === 0) {
                        $('#recaptcha-error').show(); 
                        return;
                    }

                    $('#career_submit_btn').text('Processing...');
                    $.ajax({
                        url: 'submit-career.php',  
                        type: 'POST',
                        data: $(this).serialize(), 
                        success: function(response) {
                            const obj = JSON.parse(response);
                            if (obj && obj.message) {
                                $("#alertMsg").html(`
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        ${obj.message}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                `);

                                $('#career_submit_btn').text('Inquiry Sent');
                                $('#career-detail')[0].reset();
                                grecaptcha.reset();
                                $('#recaptcha-error').hide();
                            } else {
                                console.error("Mode is undefined");
                            }
                        }
                    });
                } else {
                    $('#recaptcha-error').show(); 
                }
            });
        </script>

    </body>

</html>