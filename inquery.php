<!DOCTYPE html>
<html lang="en">
<body>
<div class="hire-form-block">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-6">
                <div class="hireformLeft">
                    <h3>Hire <?php echo htmlspecialchars(ucfirst($fileName)); ?> Development Team As Per Your Need</h3>
                    <p>
                        Simple & Transparent Pricing | Fully Signed NDA | Code
                        Security | Easy Exit Policy
                    </p>
                    <div class="highlight">
                        <h2>$2800</h2>
                        <h5>Monthly (USD)</h5>
                        <p>4+ Years of Exp. Senior
                            <?php echo htmlspecialchars(str_replace('Company', '', ucfirst($fileName))); ?> - 160 hours
                        </p>
                    </div>
                    <div class="highlight">
                        <h2>Get a Quote</h2>
                        <h5>For Fixed Cost Solution</h5>
                        <p>Ensure Timely Delivery Within Budget</p>
                    </div>
                    <button class="border-gradient">
                        <span>Schedule a developer interview</span>
                    </button>
                </div>
            </div>
            <div class="col col-12 col-md-6 text-center">
                <div class="hireformRight">
                    <h3>
                        Streamline Your Business With Top <?php echo htmlspecialchars(ucfirst($fileName)); ?>
                    </h3>
                    <p>
                        We ensure you’re matched with the right talent resource based
                        on your requirement.
                    </p>
                    <form id="inquery-post-data" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" />
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control" rows="3" id="desc" name="desc" placeholder="Describe Your Requirements"></textarea>
                        </div>
                        <div class="mb-3">
                            
                            <input type="file" id="inqueryfile" name="inqueryfile" accept=".pdf,.doc,.docx" >

                        </div>
                        <div class="mb-5 d-flex justify-content-end">
                            <button class="border-gradient2 border-gradient" type="submit" id="inq-btn">
                                <span id="inq_text">Inquire now</span>
                            </button>
                        </div>
                    </form>

                    <div class="formbtmtxt">
                        <a href="mailto:sales@nivzen.com">
                            <i class="fa fa-envelope-o me-2" aria-hidden="true"></i>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
    
    // Custom phone number validation (allowing +, spaces, dashes, parentheses)
    $.validator.addMethod("phoneValidation", function(value, element) {
        return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
    }, "Please enter a valid phone number (10-13 digits, optional +, spaces, dashes, or parentheses).");

    // Custom Gmail validation (ensuring the email ends with @gmail.com)
    $.validator.addMethod("gmailValidation", function(value, element) {
        return this.optional(element) || /^[a-zA-Z0-9._%+-]+@gmail\.com$/.test(value);
    }, "Please enter a valid Gmail address.");

    // Initialize form validation
    $(document).ready(function () {
        // Apply validation on form
        $("#inquery-post-data").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true,
                    gmailValidation: true // Custom Gmail validation
                },
                phone: {
                    required: true,
                    phoneValidation: true // Custom phone validation
                },
                desc: { // Message/Description field
                    required: false
                },
                file: {  // File input field validation
                    required: false,
                    extension: "jpg|jpeg|png|pdf", // Valid file types
                    filesize: 10485760 // 10 MB in bytes
                }
            },
            messages: {
                name: "Please enter your name.",
                email: "Please enter a valid email address.",
                phone: "Please enter a valid phone number.",
                desc: "Please describe your requirements.",
                file: {
                    extension: "Please upload a valid file (jpg, jpeg, png, pdf).",
                    filesize: "The file size must not exceed 10 MB."
                }
            }
        });

        // Handle form submission
        $("#inquery-post-data").submit(function (event) {
            event.preventDefault(); // Prevent the default form submission

            // Ensure the form is valid before continuing
            if (!$(this).valid()) {
                return; // If form is invalid, stop the submission
            }

            // Show processing message
            $('#inq-btn').prop('disabled', true);
            $('#inq_text').text('Processing...');

            // Create FormData to send in the request
            var form_data = new FormData(this);  // 'this' refers to the form

            // Handle file attachment
            var imgFile = $("#inqueryfile")[0];
            if (imgFile.files.length > 0) {
                form_data.append("inqueryfile", imgFile.files[0]);
            }

            // Perform AJAX request
            $.ajax({
                url: 'submit-inquery.php',
                type: 'POST',
                data: form_data,
                contentType: false,
                processData: false,
                success: function (response) {
                    try {
                        const obj = JSON.parse(response);
                        if (obj && obj.message) {
                            // Redirect to the thank-you page
                            window.location.href = 'thank-you.php';
                        } else {
                            console.error("Response error: Mode is undefined.");
                        }
                    } catch (error) {
                        console.error("Error parsing JSON response:", error);
                    }
                },
                error: function () {
                    alert('There was an error submitting your form. Please try again later.');
                },
                complete: function () {
                    // Re-enable the submit button and reset the text
                    $('#inq-btn').prop('disabled', false);
                    $('#inq_text').text('Inquire now');
                }
            });
        });
    });

</script>
</body>
</html>