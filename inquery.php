<?php
// Get the current URL path
$currentPath = $_SERVER['REQUEST_URI'];

// Extract the file name without extension
$fileName = pathinfo(basename($currentPath), PATHINFO_FILENAME);

// If you want to handle the case when the URL ends with a slash
if (empty($fileName) || $fileName === '') {
    $fileName = 'Home'; // Default value if no file name is found
}

$fileName = str_replace(['-'], ' ', $fileName);
$fileName = trim($fileName);


$fileName = str_replace(' ', ' ', ucwords(strtolower($fileName)));

// Use $fileName in your HTML
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire <?php echo htmlspecialchars($fileName); ?> Development Team</title>
    <style>
        input::placeholder {
                color: gray !important; /* Change this color */
                opacity: 1 !important; /* Optional */
            }   
        
            #inquery-post .error
            {
                text-align:left;
                color:red;
            }

        .border-gradient2 
        {
            font-size: 16px;
            position: relative;
            cursor: pointer;
        }
        .disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }
    </style>


</head>
<body>
    <div class="hire-form-block">
    <div id="alertMsg"></div>

        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6">
                    <div class="hireformLeft animatable fadeInLeft">
                        <h3>Hire <?php echo htmlspecialchars(ucfirst($fileName)); ?> Development Team As Per Your Need</h3>
                        <p>
                            Simple & Transparent Pricing | Fully Signed NDA | Code
                            Security | Easy Exit Policy
                        </p>
                        <div class="highlight">
                            <h2>$2800</h2>
                            <h5>Monthly (USD)</h5>
                            <p>4+ Years of Exp. Senior <?php echo htmlspecialchars(str_replace('Company', '', ucfirst($fileName))); ?> - 160 hours</p>
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
                    <div class="hireformRight animatable fadeInRight">
                        <h3>
                            Streamline Your Business With Top <?php echo htmlspecialchars(ucfirst($fileName)); ?>
                        </h3>
                        <p>
                            We ensure you’re matched with the right talent resource based
                            on your requirement.
                        </p>
                        <form id="inquery-post" action="" onsubmit="showLoading()">
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
                                <textarea class="form-control" rows="3" id="desc" name="desc" placeholder="Describe Your Requirements" ></textarea>
                            </div>
                            <div class="mb-5 d-flex justify-content-end">
                            
                                 <button class="border-gradient2 border-gradient" type="submit" id="inq-btn" name="inq-btn">                                   
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
   

</body>
</html>



