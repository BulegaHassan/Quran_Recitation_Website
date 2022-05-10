<?php
//Message vars
$msg = '';
$msgClass = '';
// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Check Required fields
    if (!empty($name) && !empty($email) ) {
        
      
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    
            $msg = 'Please check Email';
            $msgClass = 'alert-danger';
        } else {
        
            // Recepient email
            $toEmail = 'info@quranuganda.com';
            $subject = 'Subscribe to Quran Uganda Newsletter ' . $name;
            $body = '<h2></h2>
                     <h4>Name</h4> <p>'. $name .'</p>
                     <h4>Email</h4> <p>'. $email .'</p>
                     
            ';
            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html; charset = UTF-8" . "\r\n";

            // Additional Headers
            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            // Using the mail function
            if(mail($toEmail, $subject, $body, $headers)) {
                // Email Sent
                $msg = 'You have Succesfully Subscribed to Our Nesletter';
                $msgClass = 'alert-success';
            } else {
                // Failed
                $msg = 'Subscription Not Succesful';
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
                padding-top: 1em;
            }
            
            #section-hero {
                background-image: url('img/new_filter.PNG');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                min-height: 100vh;
                border: 1px solid yellow;
            }
            
            #ppp:hover {
                color: blue;
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
                                <a href="#" class="nav-link text-danger active h5" aria-current="page">Home</a>
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
                                <a href="other_reciters.html" class="nav-link text-danger  h5" aria-current="page">Reciters
                                Worldwide</a>
                            </li>

                            <li class="nav-item h5">
                                <a href="contact.php" class="nav-link text-danger">Contact Us</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <ul class="list-unstyled list-group list-group-horizontal float-end mx-2 bg-white">
                    <li class="list-group-item list-group-item-light">
                        <a href="#0"><i class="fab fa-fw text-dark fa-facebook"></i></a>
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
            <section id="section-hero" class=" content text-center text-white d-flex justify-content-center align-items-center py-5">
                <div class="container ">
                    <p class="lead fw-bold">وَلَقَدْ يَسَّرْنَا ٱلْقُرْءَانَ لِلذِّكْرِ فَهَلْ مِن مُّدَّكِرٍ</p>
                    <!-- <p><strong>القمر‎</strong></p> -->
                    <p class="lead"> And indeed, We have made the Qur’an easy to understand and remember, then is there any that will remember (or receive admonition)?</p>
                    <p><strong>Quran 54:17</strong></p>
                </div>
            </section>
            <div class="container my-3 my-sm-5">
                <div class="row g-0 bg-light p-4 mb-3 mb-sm-5">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">

                        <div class="row">
                            <div class="col-12 col-sm-6 text-center">
                                <img src="img/img_300X300.jpg" class="img-fluid rounded-circle mb-4 mb-lg-0">
                            </div>
                            <div class="col-12 col-sm-6">
                                <h2>Who we are</h2>
                                <p class="lead">A non for profit Organization aiming at promoting The Quran</p>
                                <h5 class="text-danger">Vision</h5>
                                <p class="lead">Availing Ugandan recitations to the Globe</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-sm-6 text-center">
                                <img src="img/qurans.jpg" class="img-fluid rounded-circle mb-4 mb-lg-0">
                            </div>
                            <div class="col-12 col-sm-6">
                                <h2>What we do</h2>
                                <p class="lead">We provide Quran recitations majorly from Ugandan reciters through audios, videos , youtube embedded videos and much more.We also prioritize reciters from schools.We expect InshaAllah to provide much more in the future</p>
                                <a href="#0" class="btn btn-success">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-light">
                    <h3 class="text-center display-3 text-danger animate-character">Ugandan Hufath</h3>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="card border-warning ">
                            <div class="card-header bg-warning text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Dr Qaasim Mutazindwa</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-warning" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                
                                <p class="card-text"><a href="audios/qasim_mutazindwa/01(MP3_160K).mp3" type="audio/mpeg" ><audio controls 
                                        src="audios/qasim_mutazindwa/01(MP3_160K).mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-warning text-center">
                                <a href="reciters.html#qaasim" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="card border-danger">
                            <div class="card-header bg-danger text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Dr Haruna Bukenya</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-danger" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text"><a href="audios/haruna_bukenya/01.mp3" type="audio/mpeg" ><audio controls  src="audios/haruna_bukenya/01.mp3"></audio></a>
                                </p>
                            </div>
                            <div class="card-footer border-danger text-center">
                                <a href="reciters.html#haruna" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3 ">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Imam Hamza Kateregga</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-warning" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text "><a href="audios/hamza_kateregga/001 Al-Faatihah .mp3" type="audio/mpeg" ><audio controls 
                                        src="audios/hamza_kateregga/001 Al-Faatihah .mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-warning text-center">
                                <a href="reciters.html#hamza" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-danger">
                            <div class="card-header bg-danger text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Imam Hasan Nyanzi</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-danger" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text"><a href="audios/hassan_nyanzi/AL FATIHA.mp3" type="audio/mpeg" ><audio controls controlslist=" nodownload "
                                        src="audios/hassan_nyanzi/AL FATIHA.mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-danger text-center">
                                <a href="reciters.html#hassan" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="card border-warning ">
                            <div class="card-header bg-warning text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Imaam Abdallah Saajid</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-warning" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text"><a href="audios/hamza_and _sajjid_ 2013/001. al fatiha ham.mp3" type="audio/mpeg" ><audio controls controlslist=" nodownload "
                                        src="audios/hamza_and _sajjid_ 2013/001. al fatiha ham.mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-warning text-center">
                                <a href="reciters.html#sajid" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="card border-danger">
                            <div class="card-header bg-danger text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Imaam Yusuf Mubiru</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-danger" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text"><a href="audios/hamza_and_yusuf/001. Surat Al-Faatiha - Yusuf.mp3" type="audio/mpeg" ><audio controls controlslist=" nodownload "
                                        src="audios/hamza_and_yusuf/001. Surat Al-Faatiha - Yusuf.mp3"></audio></a>
                                </p>
                            </div>
                            <div class="card-footer border-danger text-center">
                                <a href="reciters.html#yusuf" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row my-3 ">
                    <h3 class="text-center display-3 text-danger animate-character">School Recitations</h3>
                    <div class="col-12 col-md-6 col-lg-4  mb-3 ">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/5b9YvyzqOIs"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/5vyjrXMijOA"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/vSQRhPqn364"></iframe>
                        </div>
                    </div>
                    <div class=" border-danger text-center">
                        <a href="schools.html" class="btn btn-success btn-lg ">Listen to more!</a>
                    </div>
                </div>
                <div class="row bg-light">
                    <h3 class="text-center display-3 text-danger animate-character">International Reciters</h3>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="card border-warning ">
                            <div class="card-header bg-warning text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h5 class="card-title ">Shaykh Muhammad-Swidiq Minshawi</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-warning" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text"><a href="audios/minshawi/001.mp3" type="audio/mpeg" ><audio controls controlslist=" nodownload " src="audios/minshawi/001.mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-warning text-center">
                                <a href="other_reciters.html#minshawi" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="card border-danger">
                            <div class="card-header bg-danger text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Shaykh Abdurrahman Sudais</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-danger" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text"><a href="audios/sudais/001.mp3" type="audio/mpeg" ><audio controls controlslist=" nodownload " src="audios/sudais/001.mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-danger text-center">
                                <a href="other_reciters.html#sudais" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3 ">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-white text-center small">Al-Haafith</div>
                            <div class="card-body">
                                <h4 class="card-title">Shaykh Matrood</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-fw fa-book text-warning" aria-hidden="true"></i> Surat Al-faatiha</li>
                                </ul>
                                <p class="card-text "><a href="audios/matrood/Al-Fatihah.mp3" type="audio/mpeg" ><audio controls controlslist=" nodownload "
                                        src="audios/matrood/Al-Fatihah.mp3"></audio></a></p>
                            </div>
                            <div class="card-footer border-warning text-center">
                                <a href="other_reciters.html#matrood" class="btn btn-success btn-lg ">Listen to more!</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-3 ">
                    <h3 class="text-center display-3 text-danger animate-character">International Competitions </h3>
                    <div class="col-12 col-md-6 col-lg-4  mb-3 ">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/acAAnGg2uZs"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/XNVadWROJfY"></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4  mb-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/E13w4ZFb5r4"></iframe>
                        </div>
                    </div>
                    <div class=" border-danger text-center">
                        <a href="competitions.html" class="btn btn-success btn-lg ">Watch more!</a>
                    </div>
                </div>
                <div class="row mt-5 bg-light">
                    <div class="col-12 col-md-6 col-lg-8">
                        <?php if ($msg != '') : ?>
                        <div class="alert <?php echo $msgClass; ?>">
                            <?php echo $msg; ?>
                        </div>
                        <?php endif; ?>
                        <div class="container">
                            <form class="pb-2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <h2 class="display-6 text-center">Newsletter</h2>
                                <p class="lead text-center text-capitalize">You can Subcribe to our mailing list to receive info about latest recitations, news and much more!
                                </p>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="input-name" class="visually-hidden">Your name:</label>
                                            <input type="text" required class="form-control" placeholder="Firstname Lastname" name="name" id="input-name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="mb-3">
                                            <label for="input-email" class="visually-hidden">Your email:</label>
                                            <input type="email" required class="form-control" placeholder="mail@example.com" name="email" id="input-email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="input-terms" value="terms">
                                <label class="form-check-label" for="input-terms">I have read and accept the <a
                                        href="#0" data-bs-toggle="modal" data-bs-target="#modal">terms and
                                        conditions</a>.</label>
                            </div> -->
                                <div class="d-flex justify-content-between">
                                    <!-- <small class="form-text text-white w-75">You can unsubcribe from the mailing list at any
                                    time.</small> -->
                                    <button type="submit" class="btn btn-outline-success" name="submit">Sign up</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="">
                            <h3 class="display-6">Downloads</h3> <br>
                            <p class="ms-3 lead"><a class="text-decoration-none text-success" href="Documents/The_Noble_Quran_in_the_Arabic_Language-The_Choice.pdf" type="application/pdf" target="_blank"><i
                                    class="fas fa-file-pdf fa-2x text-danger me-3"></i> Holy Quran Arabic</a></p>
                            <p class="ms-3 lead"> <a class="text-decoration-none text-success" href="Documents/The_Holy_Quran_English.pdf" type="application/pdf" target="_blank"><i
                                    class="fas fa-file-pdf fa-2x text-danger me-3"></i> Holy Quran with English
                                Translation</a></p>
                            <p class="ms-3 lead"><a class="text-decoration-none text-success" href="documents/en-tajweed-sahih-international.pdf" type="application/pdf" target="_blank"><i class="fas fa-file-pdf fa-2x text-danger me-3"></i> Tajweed
                                English</a></p>
                        </div>
                    </div>

                    <script>
                        window.onload = () => alert("Welcome to the Innitial Launch Of this Website, Consider Giving Us Feedback");
                    </script>
                </div>
                <div class="alert alert-warning my-3 " role="alert">
                    <h2 class="alert-heading text-center">Disclaimer</h2>
                    <ul>
                        <li>Tentatively no audio/video is downloadable except for content that has been  permitted by content owners or for internationally known reciters but still no guarantee just in case of any errors </li>
                        <li>All our Social Media Accounts are currently not available </li>
                        <li>For details, consider reading Our Terms and Conditions with the Private Policy at the end of each page </li>
                        </p>
                </div>
        </main>
        <footer class="bg-light text-white">
            <div class="container py-3 py-sm-5 ">
                <div class="row ms-5">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h6>Quick links</h6>
                        <ul class="list-unstyled">
                            <li class="pb-lg-3 "><a href="#0" class="text-success">Home</a></li>
                            <li class="pb-lg-3"><a href="schools.html" class="text-success">School Reciters</a></li>
                            <li class="pb-lg-3"><a href="reciters.html" class="text-success">All Reciters</a></li>
                            <li class="pb-lg-3"><a href="https://froqan.org/" class="text-success" target="_blank">Friends
                                Of Quran(FROQAN)</a></li>
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
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i
                                    class="fab fa-fw fa-facebook text-white" aria-hidden="true"></i> Facebook</a></li>
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i class="fab fa-fw fa-twitter text-white"
                                    aria-hidden="true"></i> Twitter</a></li>
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i class="fab fa-fw fa-youtube text-white"
                                    aria-hidden="true"></i> YouTube</a></li>
                            <li class="pb-lg-3"><a href="#0" class="text-success"><i
                                    class="fab fa-fw fa-instagram text-white" aria-hidden="true"></i> Instagram</a></li>
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
                            class="visually-hidden">Telephone:</span> <a href="tel:+256750637490"
                            class="text-success">+256 750 637 490</a>&nbsp;/<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
                            href="tel:+256705638261" class="text-success">+256 705 638 261</a><br>
                        <i class="fas fa-fw fa-envelope" aria-hidden="true"></i><span
                            class="visually-hidden pb-lg-3">Mail:</span>
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
                                The content provided by Quran Uganda is not downloadable , except for content that has been verified and or permitted by content owners or for internationally known reciters but still no guarantee in case of errors. Any attempt to download this content <strong>grossly  violates</strong>                                our Terms and Conditions and Quran Uganda is not responsible for errors found in the downloaded content. For Youtube embedded videos, one is supposed to follow Youtube's Terms and Conditions.The user who has issues with
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
                            <li class="list-inline-item"><a href="0#" data-bs-toggle="modal" data-bs-target="#modalScrollableBody" class="text-success fw-bold">Terms of use and
                                Private policy</a></li>
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
    </body>

    </html>