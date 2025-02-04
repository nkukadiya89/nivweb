<!DOCTYPE html>
<html lang="eng">

<?php include '../includes/layout.php'; ?>
<head>
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
    <!-- <script> 
        function enableSubmitBtn(){
            document.getElementById("career_submit_btn").disabled=false;
        }
    </script> -->
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
                            <h3><span>Content Writer</span></h3>
                        </div>
                        <div class="bnrimg">
                            <img src="../images/bloge-banner-img.png" alt="" />
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
                        <p>Are you a wordsmith who can craft compelling and engaging content? Nivzen Technologies is looking for a talented<b> Content Writer </b>with 1-2 years of experience to join our creative team.</p>
                        <p>As a<b> Content Writer at Nivzen</b>, you will be responsible for creating high-quality content for blogs, websites, social media, and marketing campaigns. 
                            You'll work closely with our marketing and design teams to drive brand engagement through powerful storytelling.</p>
                        <!-- <p><span class="font-bold">Role:</span> Wordpress Developer </p> 
                        <p><span class="font-bold">Experience:</span> 1 to 2 Years </p>
                        <p><span class="font-bold">Position Open:</span> 1</p><p><span class="font-bold">Job Location:</span> Ahmedabad</p>              
                        <p><span class="font-bold">Work from Home Available:</span> Not Available</p>                    
                        <p><span class="font-bold">Salary:</span> Not a constraint for the right candidate</p>                                             -->
                        <hr>
                        <p class="font-bold">Key Responsibilities :</p>
                        
                        <ul class="style-icon">
                            <li>Write clear, creative, and engaging content for blogs, articles, websites, and social media.</li>
                            <li>Develop content strategies that align with company objectives and target audience needs.</li>
                            <li>Conduct thorough research to ensure content is accurate, informative, and up-to-date.</li>
                            <li>Collaborate with designers and marketers to create cohesive campaigns.</li>
                            <li>Optimize content for SEO to improve organic visibility and engagement.</li>
                            <li>Proofread and edit content to ensure high quality and adherence to brand guidelines.</li>
                        </ul>                                            
                        <hr>
                        <p class="font-bold">Required Skills and Qualifications:</p>
                        <ul class="style-icon"><li><b>Experience : </b>1-2 years as a content writer or similar role.</li>
                            <li>Excellent command of the English language, with strong grammar and writing skills.</li>
                            <li>Ability to write for diverse audiences and formats.</li>
                            <li>Familiarity with SEO principles and tools.</li>
                            <li>Strong research skills and attention to detail.</li>
                        </ul>                                       
                            <hr><p><span class="font-bold">Additional Skills (Preferred) : </span></p>   
                            <li>Experience with content management systems (CMS) like WordPress.</li>
                            <li>Basic knowledge of social media marketing and analytics.</li>
                            <li>Familiarity with graphic design tools like Canva (preferred but not required).</li>

                            <hr><p><span class="font-bold">Location :</span> </p>  
                            <p>110, Ganesh glory, Godrej garden City road, jagatpur<br>
                                Ahmedabad - 382481</p>                  
                            <hr><p><span class="font-bold">Job Type : </span>Full-time</p>

                        <ul class="style-icon">
                            <b>Why Join Nivzen Technologies?</b>
                            <li>Work in a dynamic and creative environment.</li>
                            <li>Collaborate with a passionate and talented team.</li>
                            <li>Opportunities for skill enhancement and career growth.</li>
                        </ul>               

                    
                        <a href="javascript:history.go(-1)">
                            <button class="border-gradient">
                                <span> Go Back</span>
                            </button>
                        </a>              
                    </div> 
                    <div class="col-lg-1">
                    </div>

                    <?php include 'careers-details-inq-form.php'?>

                </div>
            </div>
        </div>

        <?php include '../includes/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
     
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

                    var form_data = new FormData($(this)[0]);
                    var imgFile = $("#resume")[0]; // Get the file input element
                    form_data.append("resume", imgFile.files[0]); 
                    $('#career_submit_btn').text('Processing...');
                    $.ajax({
                        url: '<?php echo $projectFolderName?>/submit-career.php',  
                        type: 'POST',
                        data:  form_data,
                        processData: false,
                        contentType: false,
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