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
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/scrollbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/support.css">
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
        <!-- NAVIGATION BAR -->
        <nav id="try" class="navbar sticky-top navbar-expand-sm bg-body-">
            
            <div class="container-xl my-1">
            
            <img class="otus-logo" src="img/OTUS ICON/OTUS LOGO v2.png" width="100px"  alt="OTUS LOGO">
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                            <a class="nav-link" href="contactus.php">Contact</a>
                        </li>

                        <li class="nav-item me-3 ">
                            <a class="nav-link active" href="#">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>  
        <!-- END NAVIGATION BAR -->

        <!-- ACCORDION -->
        <div class="accordion-container">

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <h4>Driver</h4>
                        <div class="content-container">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus quis facere eligendi animi natus neque in ipsam quasi corrupti mollitia veniam, eos aut similique? Deleniti sint suscipit ex voluptate id?

                            <div class="container text-center">
                                <div class="row align-items-center">
                                  <div class="col">
                                    One of three columns
                                  </div>
                                  <div class="col">
                                    One of three columns
                                  </div>
                                  <div class="col">
                                    One of three columns
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
        </div>

        
        <!-- END ACCORDION -->

           <!-- FOOTER -->
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                      <img src="img/OTUS ICON/Eye.ico" alt="OTUS" width="35" height="35">
                    </a>
                    <span class="mb-3 mb-md-0 text-body-secondary">&copy; <script>document.write(new Date().getFullYear())</script> OTUS COPY SYSTEM INC.</span>
                </div>
            
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" target="_blank" href="https://www.facebook.com/otussince2006"><img src="img/footer/facebook.png" alt="facebook" width="25" height="25"></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/otussince2006?igsh=MXh6bnh5NW53ZXd1NA==" target="_blank"><img src="img/footer/instagram.png" alt="instagram" width="25" height="25"></a></li>
                    
                </ul>
            </footer>
        </div>

        <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
        <script src="../../assets/js/hs.slick-carousel.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
    </body>
</html>