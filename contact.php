<?php
//Message vars
$msg = '';
$msgClass = '';
// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $reason = htmlspecialchars($_POST['reason']);
    // Check Required fields
    if (!empty($name) && !empty($email) && !empty($message) && !empty($reason)) {
        
      
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    
            $msg = 'Please check Email';
            $msgClass = 'alert-danger';
        } else {
        
            // Recepient email
            $toEmail = 'info@quranuganda.com';
            $subject = 'Message to Quran Uganda ' . $name;
            $body = '<h2>Contact Request</h2>
                     <h4>Name</h4> <p>'. $name .'</p>
                     <h4>Email</h4> <p>'. $email .'</p>
                     <h4>Department</h4> <p>'. $reason .'</p>
                     <h4>Message</h4> <p>'. $message .'</p>
            ';
            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html; charset = UTF-8" . "\r\n";

            // Additional Headers
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            // Using the mail function
            if(mail($toEmail, $subject, $body, $headers)) {
                // Email Sent
                $msg = 'Your Message has been sent';
                $msgClass = 'alert-success';
            } else {
                // Failed
                $msg = 'Your Message was not sent';
                $msgClass = 'alert-danger';
            }


        }
    } else {
        
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Qur'an Uganda</title>
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <script defer src="js/fontawesome-all.min.js"></script>
        <style>
            main {
                padding-top: 9em;
            }
        </style>

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom fixed-top important">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img class="rounded-circle align-middle me-2" src="img/logo2.jpg" alt="Logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item important">
                                <a href="index.php" class="nav-link text-danger active h5" aria-current="page">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a href="reciters.html" class="nav-link text-danger  h5" aria-current="page">All
                                Reciters</a>
                            </li>
                            <li class="nav-item ">
                                <a href="schools.html" class="nav-link text-danger  h5" aria-current="page">Schools</a>
                            </li>
                            <!-- <li class="nav-item dropdown h5">
                            <a href="schools.html" class="nav-link text-danger dropdown-toggle" id="navbarAdvancedDropdown" data-bs-toggle="dropdown" role="button" aria-expanded="false">School Reciters</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarAdvancedDropdown">
                                <li>
                                    <a href="schools.html" class="dropdown-item text-danger">Secondary Schools</a>
                                </li>
                                <li>
                                    <a href="schools.html" class="dropdown-item text-danger">Primary Schools</a>
                                </li>
                                <li>
                                    <a href="schools.html" class="dropdown-item text-danger">Quran Memorization
                                        Centers</a>
                                </li>
                            </ul>
                        </li> -->
                            <li class="nav-item ">
                                <a href="competitions.html" class="nav-link text-danger  h5" aria-current="page">International Competitions</a>
                            </li>
                            <li class="nav-item ">
                                <a href="other_reciters.html" class="nav-link text-danger  h5" aria-current="page">Reciters Worldwide</a>
                            </li>

                            <li class="nav-item h5">
                                <a href="#" class="nav-link text-danger">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <ul class="list-unstyled list-group list-group-horizontal float-end mx-2 bg-white">
                    <li class="list-group-item list-group-item-light">
                        <a href="#0" id="ppp"><i class="fab fa-fw text-dark fa-facebook"></i></a>
                    </li>
                    <li class="list-group-item list-group-item-light">
                        <a href="#0"><i class="fab fa-fw text-dark fa-twitter"></i></a>
                    </li>
                    <li class="list-group-item list-group-item-light">
                        <a href="#0"><i class="fab fa-fw text-dark fa-youtube"></i></a>
                    </li>
                    <li class="list-group-item list-group-item-light">
                        <a href="#0"><i class="fab fa-fw text-dark fa-instagram"></i></a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="container my-3 my-sm-5">
                <h1 class="text-center mb-sm-4 display-1 " id="contact">
                    Contact Us
                </h1>
                <p class="lead text-center p_only display-6">
                    Contact us anytime from anywhere about anything
                </p>
                <div class="row">
                    <div class="col-12 text-center ">
                        <h2 class="text-danger">Address:</h2>
                        <address>
                        <strong>Quran Uganda</strong><br />
                        Makerere<br />
                        Sir Apollo Kaggwa  Road<br />
                        <i class="fas fa-fw fa-phone"></i>
                        <a href="tel:+256750637490">+256 750 637 490</a> / <a href="tel:+256705638261">+256 705 638 261</a><br />                        
                        <i class="fas fa-fw fa-envelope"></i>
                        <a href="mailto:info@quranuganda.com">info@quranuganda.com</a>
                    </address>
                    </div>
                    <!-- <div class="col-12 col-md-6">
                    <h2 class="text-danger">Opening hours:</h2>
                    <p>
                        Monday-Saturday: <span class="float-none">9:00 am - 5:00 pm</span>
                    </p>
                </div> -->
                </div>
                <div class="row">
                    <div class="col-12 mb-3">
                        <?php if ($msg != '') : ?>
                        <div class="alert <?php echo $msgClass; ?>" id="remove">
                            <?php echo $msg; ?>
                        </div>
                        <?php endif; ?>
                        <h2 class="text-danger">Send us a message:</h2>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="del">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            <input type="text" id="name" class="form-control" name="name" placeholder="Name" required value="<?php echo isset($_POST['name']) ? $name : ''; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            <input type="email" id="email" class="form-control" name="email" placeholder="example@email.com" required value="<?php echo isset($_POST['email']) ? $email : ''; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="telephone" class="form-label">Telephone</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            <input type="tel" id="telephone" class="form-control" name="telephone" placeholder="0123456789" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="mb-3">
                                        <label for="reason" class="form-label">Reason:</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                            <select id="reason" class="form-select" name="reason" aria-describedby="reason-help-block" required>
                              <option value="">- select here -</option>
                              <option value="reciters">Reciters</option>
                              <option value="schools">Schools</option>
                              <option value="corrections">Corrections</option>
                              <option value="others">Others</option>
                              <?php echo isset($_POST['reason']) ? $reason : ''; ?>
                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                                    <textarea id="message" class="form-control" name="message" rows="5" placeholder="Write your message here..." required>
                                <?php echo isset($_POST['message']) ? $message : ''; ?>
                                </textarea>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            <!-- <button type="reset" id="reset" class="btn btn-secondary">Reset</button> -->
                        </form>
                    </div>
                    <!-- <div class="col-12 col-lg-6">
                    <h2 class="text-danger">Where to find us:</h2>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=cedat%20makerere%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://2piratebay.org"></a><br />
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                            <a href="https://www.embedgooglemap.net"></a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </main>
        <footer class="bg-light text-white">
            <div class="container py-3 py-sm-5">
                <div class="row ms-5">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h6>Quick links</h6>
                        <ul class="list-unstyled">
                            <li class="pb-lg-3 "><a href="index.php" class="text-success">Home</a></li>
                            <li class="pb-lg-3"><a href="schools.html" class="text-success">School Reciters</a></li>
                            <li class="pb-lg-3"><a href="reciters.html" class="text-success">All Reciters</a></li>
                            <li class="pb-lg-3"><a href="https://froqan.org/" class="text-success" target="_blank">Friends Of Quran(FROQAN)</a></li>
                            <li>
                                <a href="#0"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <h6>Information</h6>
                    <ul class="list-unstyled">
                        <li><a href="#0">About us</a></li>
                        <li><a href="#0">Books</a></li>
                        <li><a href="#0">Press info</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">Partnership</a></li>
                    </ul>
                </div> -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h6>Follow us</h6>
                        <ul class="list-unstyled ">
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i class="fab fa-fw fa-facebook text-white" aria-hidden="true"></i> Facebook</a></li>
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i class="fab fa-fw fa-twitter text-white" aria-hidden="true"></i> Twitter</a></li>
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i class="fab fa-fw fa-youtube text-white" aria-hidden="true"></i> YouTube</a></li>
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i class="fab fa-fw fa-instagram text-white" aria-hidden="true"></i> Instagram</a></li>
                            <!-- <li><a href="#0"><i class="fab fa-fw fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li> -->
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h6>Our Location</h6>
                        <address>
                    Quran Uganda<br>
                        Makerere<br>
                        Sir Apollo Kaggwwa<br><br>
                        <i class="fas fa-fw fa-phone" aria-hidden="true"></i><span
                            class="visually-hidden">Telephone:</span> <a href="tel:+256750637490" class="text-success">+256 750 637 490</a>&nbsp;/<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:+256705638261" class="text-success">+256 705 638 261</a><br>
                        <i class="fas fa-fw fa-envelope" aria-hidden="true"></i><span class="visually-hidden pb-lg-3">Mail:</span>
                        <a href="mailto:info@quranuganda.com" class="text-success">info@quranuganda.com</a>
                    </address>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h6>Tweets</h6>
                        <a class="twitter-timeline text-success" data-height="250" data-theme="dark" href="https://twitter.com/QuranTelawah?ref_src=twsrc%5Etfw">Tweets by QuranTelawah</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="modal fade" id="modalScrollableBody" tabindex="-1" role="dialog" aria-labelledby="modalScrollableBodyTitle" aria-hidden="true">>
                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="modalScrollableBodyTitle">Terms and conditions</h5>
                                <button type="button" class="btn-close btn-success" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-dark ">
                                <h4 class="text-success">Terms Of Use</h4>
                                <p>The following rules govern the use by you of www.quranuganda.com The rules set forth herein apply to all materials, online communications and other information that is or becomes available on www.quranuganda.com (collectively,
                                    "Information"). BY SIGNING ON AND USING www.quranuganda.com, YOU SPECIFICALLY AGREE TO ABIDE BY THESE RULES AND ANY MODIFICATIONS THERETO.</p>
                                <p>
                                    <h6>1. Personal Uses Permitted. </h6>
                                    www.quranuganda.com is operated by a group of Volunteers, for use by the general public.You shall not use or exploit any Information for commercial purposes or otherwise use the Information in a manner that is inconsistent with these rules and regulations.
                                </p>
                                <p>
                                    <h6>2. User's Obligation to Abide By Applicable Law.</h6>
                                    The Information available on www.quranuganda.com may include intellectual property that is protected under the copyright, trademark and other intellectual property laws any countries ("Intellectual Property Laws"). Such Intellectual Property Laws generally
                                    prohibit the unauthorized reproduction,downloading, distribution or exhibition of all text, photographic and graphic (art and electronic) images, music, sound samplings and other protected materials. The violation of
                                    applicable Intellectual Property Laws may give rise to civil and/or criminal penalties.
                                </p>
                                <p>
                                    <h6>3. Disclosure of Online Communications.</h6>
                                    You are cautioned that any online communications may not be fully confidential. In addition, you should be aware that country postal regulations do not protect electronic mail. You should be aware that some administrative personnel of Quran Uganda may,
                                    in the course of their regular duties, have access to communications for technical or operational purposes.
                                </p>
                                <p>
                                    <h6>4. Collection of Personal Information.</h6>
                                    By registering for Quran Uganda, you knowingly agree to provide limited personal information which may include name, email, user credentials, other information that may be required to provide the service. This information will only be used for the purpose
                                    of providing the user an account, access to the service, customer service features, and limited other uses . Quran Uganda Privacy Policy is available on its website or by contacting info@quranuganda.com .
                                </p>
                                <p>
                                    <h6>5. Email Opt-in.</h6>
                                    You consent that by providing your email address during registration Quran Uganda may use that email address to communicate to you information about your account, promotional and other information that Quran Uganda deems important for users. Such emails
                                    may occur every few days during the onboarding process and weekly or monthly or any other period thereafter. You may opt out of email services at any time.
                                </p>
                                <p>
                                    <h6>6. Prohibition Against Malicious Programming.</h6>
                                    You shall not post, transmit or make available in any way through www.quranuganda.com any software or other materials which contain a computer virus, trojan horse, timebomb, worm or other malicious programming ("Rogue Programming"). Quran Uganda has no
                                    obligation to detect the presence of any Malicious Programming. Any downloading of software or other materials or any other use of the Information on www.quranuganda.com is at your risk, and you are advised to take
                                    adequate precautions to minimize any loss to your system caused by Malicious Programming, including use of anti-virus programs and proper backup of files.
                                </p>
                                <p>
                                <h6>7. Content</h6>
                                The content provided by Quran Uganda is not downloadable , except for content that has been verified and or  permitted by content owners or for internationally known reciters but still no guarantee in case of errors. Any attempt to download this content <strong>grossly  violates</strong>                                our Terms and Conditions and Quran Uganda is not responsible for errors found in the downloaded content. For Youtube embedded videos, one is supposed to follow Youtube's Terms and Conditions.The user who has issues with
                                youtube content should visit the content creators account and provide feedback.
                                    <p>
                                        Quran Uganda. reserves the right to discontinue providing content or any elements of the content at any time for any reason. Quran Uganda. may modify any of the terms and conditions contained herein, at any time and at our sole discretion, and such terms
                                        and conditions will become binding when placed online. Under no circumstances and under no legal theory, tort, contract, strict liability, or otherwise, shall Quran Uganda. be liable to you or any other person for
                                        any indirect, special, incidental, or consequential damages of any character including, without limitation, damages for lost profits, loss of goodwill, work stoppage, accuracy of services, content or results, computer/device
                                        failure or malfunction, damages resulting from disabling of the services provided or any content.
                                    </p>
                                </p>
                                <p>
                                    <h6>8. Disclaimer of Warranties.</h6>
                                    www.quranuganda.com IS PROVIDED ON AN "AS IS" BASIS WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION WARRANTIES OF TITLE, NONINFRINGEMENT, OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE.NO
                                    WARRANTY THAT ANY INFORMATION IS COMPLETE OR ACCURATE, THAT www.quranuganda.com WILL BE UNINTERRUPTED OR ERROR FREE OR THAT ANY INFORMATION IS FREE OF ROGUE PROGRAMMING.
                                </p>
                                <p>
                                    <h6>9. Limitation of Damages.</h6>
                                    UNDER NO CIRCUMSTANCES, INCLUDING NEGLIGENCE, SHALL Quran Uganda. BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE OR CONSEQUENTIAL DAMAGES THAT MAY RESULT FROM THE USE OR INABILITY TO USE www.quranuganda.com, INCLUDING WITHOUT LIMITATION
                                    USE OF OR RELIANCE ON INFORMATION AVAILABLE ON www.quranuganda.com, INTERRUPTIONS, ERRORS, DEFECTS, MISTAKES, OMISSIONS, DELETIONS OF FILES, DELAYS IN OPERATION OR TRANSMISSION, NONDELIVERY OF INFORMATION, DISCLOSURE
                                    OF COMMUNICATIONS, OR ANY OTHER FAILURE OF PERFORMANCE.
                                </p>
                                <h4 class="text-success">Privacy Policy</h4>
                                <p>
                                    <h6>1. Introduction:</h6>
                                    The Private Policy aims at emanating efforts to our visitors' privacy.A concise approach to how we collect and use information collected. quranuganda.com collects information in two ways
                                    <ul>
                                        <li>Automatic collection of Information by the hosting webservers</li>
                                        <li>Registration information provided by users through forms e.g. "Submit" "Subscibe", "Sign Up" etc.</li>
                                    </ul>
                                </p>
                                <p>
                                    <h6>2. Automatically Collected Information:</h6>
                                    <ul>
                                        <li>The Internet web server automatically records some visitors’ information. These include the time and date of the visit, the IP of the visitor, the name of the Internet browser, the operating system, the URL of the
                                            referring page, etc.</li>
                                        <li>This information enables us to improve the site content to suit the needs of our visitors and to protect the website from hacking</li>
                                    </ul>
                                </p>
                                <p>
                                    <h6>3. Information entered by visitors:</h6>
                                    <ul>
                                        <li>. The information that is provided to us through various forms on the website enables us to help our visitors, provide valuable information and contact them. At the same time, it helps us to improve the content
                                            of the site to suit the needs of our visitors.</li>
                                        <li>Under no circumstances, except via judicial subpoena, shall this information be presented or sold to a third party, whether advertisers, other sponsors, etc. It is possible to provide advertisers with summarized
                                            statistical information, in aggregate form, through which it is not possible to discover the identity of our visitors. No personally identifiable information will be given to a third party whatsoever, under
                                            any circumstances, including advertisers and sponsors</li>
                                    </ul>
                                </p>
                                <p>
                                    <h6>4. External Links:</h6>
                                    This site contains links to external sites. quranuganda.com is not responsible for the privacy policy of these sites or their content.
                                </p>
                                <p>
                                    <h6>5. Changes to Privacy Policy:</h6>
                                    Please note that we review this Privacy Policy when necessary and may make some changes to it.
                                </p>
                                <p>
                                    <h6>6.Contact the website:</h6>
                                    You can contact the admin of quranuganda.com by using contact form on the contact Us page.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-9">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <script>
                                    let today = new Date();
                                    document.write(
                                        `<p>&copy; ${today.getFullYear()}  Quran Uganda. </p>`
                                    );
                                </script>
                            </li>
                            <li class="list-inline-item">All rights reserved.</li>
                            <li class="list-inline-item"><a href="0#" data-bs-toggle="modal" data-bs-target="#modalScrollableBody" class="text-success fw-bold">Terms of use and Private policy</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col-12 col-sm-6 col-lg-3">
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="languageMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-fw fa-language" aria-hidden="true"></i> Change language</button>
                        <div class="dropdown-menu p-0" aria-labelledby="languageMenuButton">
                            <a href="#0" class="dropdown-item small px-1">English</a>
                            <a href="#0" class="dropdown-item small px-1">German</a>
                            <a href="#0" class="dropdown-item small px-1">French</a>
                            <a href="#0" class="dropdown-item small px-1">Spanish</a>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </footer>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/index.js"></script>
    </body>

    </html>