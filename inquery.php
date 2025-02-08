<!DOCTYPE html>
<html lang="en">
<style>
#inquery-post-data .error {
    text-align: left;
    color: red;
}
</style>

<body>
    <div class="hire-form-block">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6">
                    <div class="hireformLeft">
                        <h3>Hire Development Team As Per Your Need
                        </h3>
                        <p>
                            Simple & Transparent Pricing | Fully Signed NDA | Code
                            Security | Easy Exit Policy
                        </p>
                        <div class="highlight">
                            <h2>$2800</h2>
                            <h5>Monthly (USD)</h5>
                            <p>4+ Years of Exp. Senior
                                - 160
                                hours
                            </p>
                        </div>
                        <div class="highlight">
                            <h2>Get a Quote</h2>
                            <h5>For Fixed Cost Solution</h5>
                            <p>Ensure Timely Delivery Within Budget</p>
                        </div>
                        <!-- <button class="border-gradient">
                            <span>Schedule a developer interview</span>
                        </button> -->
                    </div>
                </div>
                <div class="col col-12 col-md-6 text-center">
                    <div class="hireformRight">
                        <h3>
                            Streamline Your Business With Top
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
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone Number" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="country" name="country"
                                    placeholder="Country" />
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City" />
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control" rows="3" id="desc" name="desc"
                                    placeholder="Describe Your Requirements"></textarea>
                            </div>

                            <div class="input-group mb-4">
                                <input type="file" class="form-control file" id="inqueryfile" name="inqueryfile"
                                    accept=".pdf,.doc,.docx">
                            </div>

                            <div class="form-group mt-3">
                                <div class="g-recaptcha mb-2"  data-sitekey="6LfeXowqAAAAAP-pi9irdFbgr2qxJxmzKBbyY7dP"
                                    name="recaptcha"></div>
                                <div id="recaptcha-error-inq" class="error"
                                    style="color: red; display: none;">
                                    Please verify that you are not a robot.
                                </div>
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


    <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

    <script>
    $(document).ready(function() {

        // Custom phone number validation (supports +, spaces, dashes, and parentheses)
        $.validator.addMethod("phoneValidation", function(value, element) {
            return this.optional(element) || /^[+]?[0-9\s\-()]{10,13}$/.test(value);
        }, "Enter a valid phone number (10-13 digits).");

        // File size validation (Max 10MB)
        $.validator.addMethod("fileSize", function(value, element) {
            if (element.files.length === 0) return true; // No file, skip validation
            return element.files[0].size <= 10485760; // Max size: 10MB (10 * 1024 * 1024)
        }, "File must be 10MB or smaller.");

        // Form validation rules
        $("#inquery-post-data").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    phoneValidation: true
                },
                country: {
                    required: true,
                },
                city: {
                    required: true,
                },
                desc: {
                    required: false
                },
                file: {
                    required: false,
                    extension: "jpg|jpeg|png|pdf",
                    fileSize: true // Custom file size validation
                }
            },
            messages: {
                name: "Please enter your name.",
                email: "Enter a valid email address.",
                phone: "Enter a valid phone number.",
                country: "Enter a valid country.",
                city: "Enter a valid city.",
                file: {
                    extension: "Allowed formats: JPG, JPEG, PNG, PDF.",
                    fileSize: "File must not exceed 10MB."
                }
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element); // Places the error message after input field
            }
        });

        // Form Submission
        $("#inquery-post-data").submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            $('#recaptcha-error-inq').hide();

            if (!$(this).valid()) {
                console.warn("Form validation failed.");
                if (grecaptcha.getResponse().length === 0) {
                    $('#inq-btn-head').prop('disabled', false);
                    $('#inq_text_head').text('Inquire now');

                    $('#recaptcha-error-inq').show();
                    return;
                }
                return; // Stop submission if form is invalid
            }

            // Disable submit button & show processing message
            $('#inq-btn').prop('disabled', true);
            $('#inq_text').text('Processing...');

            // Create FormData for AJAX request
            var form_data = new FormData(this);

            // Append file if exists
            var imgFile = $("#inqueryfile")[0];
            if (imgFile.files.length > 0) {
                form_data.append("inqueryfile", imgFile.files[0]);
            }

            // AJAX Request
            $.ajax({
                url: '/nivweb/submit-inquery.php', // Ensure correct backend path
                type: 'POST',
                data: form_data,
                contentType: false,
                processData: false,
                success: function(response) {
                    console.log("Raw response:", response);

                    try {
                        const obj = JSON.parse(response);
                        if (obj.message) {

                            window.location.href = 'thank-you.html';
                        } else {
                            console.error("Unexpected response format.");
                        }
                    } catch (error) {
                        console.error("Error parsing JSON:", error);
                        alert("Server response is invalid.");
                    }
                },
                error: function(xhr, status, error) {
                    grecaptcha.reset();
                    $('#recaptcha-error-inq').hide();
                    console.error("AJAX Error:", status, error);
                    alert("An error occurred. Please try again.");
                },
                complete: function() {
                    $('#inq-btn').prop('disabled', false);
                    $('#inq_text').text('Inquire Now');
                }
            });
        });
    });
    </script>

</body>

</html>