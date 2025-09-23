<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCSI</title>
    <!-- eye icon -->
    <link rel="icon" href="img/OTUS ICON/Eye.ico" type="image/x-icon">
    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <!-- Styles -->
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/home-animation.css">
    <link rel="stylesheet" href="CSS/scrollbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/contactus.css">
<!-- Icons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <!-- The callback parameter is required, so we use console.debug as a noop -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
</head>
    <body>
        <nav id="try" class="navbar sticky-top navbar-expand-sm bg-body-">
            
            <div class="container-xl my-1">
            
            <img class="otus-logo" src="img/OTUS ICON/OTUS LOGO v2.png" width="100px"  alt="OTUS LOGO">
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>

                        
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"  aria-expanded="false">
                                Products & Sevices
                            </a>
                            
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Copiers</a></li>
                                <li><a class="dropdown-item" href="#">Printers</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Drivers</a></li>
                            </ul>
                        </li> -->

                        <div class="dropdown">
                            <button class="dropbtn ">PRODUCTS</button>
                            <div class="dropdown-content">
                              <a href="printersandcopiers.php">Printers & Copiers</a>
                              <a href="3dprinters.php">3D Printers</a>
                              <a href="filaments_page.php">Filaments</a>
                            </div>
                          </div>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="contactus.php">Contact</a>
                        </li>

                        <!-- <li class="nav-item me-3">
                            <a class="nav-link" href="#">Support</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

        <!-- CONTACT US FORM -->
        
        <div class="contact-container">
        <h2> GET IN TOUCH</h2>
        <hr>
            <div class="contact-map">
                <div class="contact-content">
                    <div class="content-number">
                        <h4>Contact Number: </h4>
                        <p>286319454 / 09153416784 / 09298432261</p>
                    </div>

                    <div class="content-operating-hour">
                        <h4>Operating Hours:</h4>
                        <p>Monday to Friday: 8:00 AM to 5:00 PM</p>
                    </div>

                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.104210454181!2d121.0259351111675!3d14.593137285833544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c83bcfd12d39%3A0xabe99dffd7eca8a9!2sOTUS%20COPY%20SYSTEMS%20INC!5e0!3m2!1sen!2sph!4v1718092135398!5m2!1sen!2sph" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="contact-forms">
                <!-- Send Message -->
        <div class="container-form">
            <form id="contact" action="mail.php" method="post">
              <h1>Send us a Message</h1>
              <fieldset>
                <p>Name:</p>
                <input placeholder="Your name" name="name" type="text" tabindex="1" >
              </fieldset>
              <fieldset>
              <p>Email Address:</p>
                <input placeholder="Your Email Address" name="email" type="email" tabindex="2">
              </fieldset>
              <fieldset>
              <p>Subject:</p>
                <input placeholder="Subject" type="text" name="subject" tabindex="4">
              </fieldset>
              <fieldset>
              <p>Message:</p>
                <textarea name="message" placeholder="  Message" tabindex="5"></textarea>
              </fieldset>
              <fieldset>
                <button class="submit-btn" type="submit" name="send" id="contact-submit">Submit Now</button>
              </fieldset>
            </form>
          </div>
        <!-- End of Send Message -->
            </div>
        </div>

        <!-- END CONTACT US FORM -->



    </body>
</html>

<?php include('footer.php'); ?>
<?php include('scripts.php'); ?>