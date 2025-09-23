<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCSI</title>
    <link rel="icon" href="img/OTUS ICON/Eye.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <link rel="stylesheet" href="CSS/printer.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/scrollbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
    <body>
      <nav id="try" class="navbar sticky-top navbar-expand-sm bg-body-">
            
        <div class="container-xl my-1">
          <a href="/index.php">
            <img class="otus-logo" src="img/OTUS ICON/OTUS LOGO v2.png" width="100px"  alt="OTUS LOGO">
         </a>
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
                        <button class="dropbtn active">PRODUCTS</button>
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

                    <!-- <li class="nav-item me-3">
                        <a class="nav-link" href="#">Support</a>
                    </li> -->
                </ul>
            </div>
        </div>
      </nav>

          <!-- Title  -->
          <div class="px-4 py-5 my-5 text-center title-container">
            <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="display-5 fw-bold text-body-emphasis">Printers and Copiers</h1>
            <div class="col-lg-6 mx-auto">
              <p class="lead mb-4">We offer a wide selection of Fuji Xerox printers and copiers to meet all your business needs. From high-speed monochrome models to vibrant color copiers, we have the perfect solution for your printing and copying tasks. And because we're a certified Fuji Xerox service provider, you can count on us for expert installation, maintenance, and support to keep your equipment running at peak performance.</p>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
              </div>
            </div>
          </div>
          <!-- End of Title -->

          <!-- Printer List-->
          <div class="album py-5 ">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Photocopier/apvc5576.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>ApeosPort-V C5576</h5>
                      <p class="card-text">The ApeosPort-V C5576 prints colour jobs as fast as 50 ppm, with a first-page-out time as fast as 5.2 seconds for colour documents.</p>
                      <br>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/ApeosPortV-C7776.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Photocopier/3065.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>DocuCentre-IV 3065</h5>
                      <p class="card-text">DocuCentre-IV 3065 is likely a black and white or multi-function printer from Xerox's DocuCentre-IV series, offering printing speeds around 30 pages per minute (ppm).</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/DocuCentre-IV3065.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Photocopier/7080.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>ApeosPort-V 7080 / 6080</h5>
                      <p class="card-text">
                        Fuji Xerox ApeosPort-V 7080/6080 are black-and-white multifunction printers that can print, copy, scan, and possibly finish.</p>
                        <br>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/ApeosPort-V-7080.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Photocopier/APVII.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>ApeosPort-VII</h5>
                      <p class="card-text">The ApeosPort-VII is designed to accelerate your business forward, removing technological barriers to allow you greater flexibility to work the way
                        you want to work. </p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/ApeosPort - VII.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Photocopier/c2560.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>Apeos c2560</h5>
                      <p class="card-text">ApeosPort C2560 is a stylish compact Colour Multifunction Device, ideal for Architects, Graphic designers or any business requiring high quality in house printing at a low Print and Copy cost.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/ApeosC2560.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <img class="printer-img shadow-sm" src="img/Photocopier/S2520.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>DocuCentre S2520</h5>
                      <p class="card-text">The perfect solution for small- and medium-sized businesses. 
                        DocuCentre S2520 is designed to save valuable office space and enhance your work environment.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/DocuCentreS2520.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <img class="printer-img shadow-sm" src="img/Printer/p375.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>DocuPrint P375</h5>
                      <p class="card-text">Plenty of power, user friendly yet secure, and loaded with handy features. The DocuPrint P375 dw printer is a tough, compact, and practical solution for busy offices. </p>
                      <br><br>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/DocuPrint P375.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <img class="printer-img shadow-sm" src="img/Printer/m465.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>DocuPrint M465</h5>
                      <p class="card-text">
                        FujiFilm DocuPrint M465 AP mono multifunction laser printer was made with the most cutting-edge technological platform, designed to cater to general office clients in the corporate, government, and educational sectors.</p>
                      <br>
                        <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/DocuPrintM465AP.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <img class="printer-img shadow-sm" src="img/Printer/cm415.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>DocuPrint Cm415</h5>
                      <p class="card-text">The DocuPrint CM415 AP model represents a breakthrough in solutions-capable printers from Fuji Xerox – it brings sophisticated document management features usually associated with larger, more expensive MFDs, but in a convenient desktop design.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Copiers/DocuPrintM465AP.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <!-- End of List of Printers -->
        
        <!-- FOOTER -->

    
      </body>
</html>

<?php include('footer.php'); ?>
<?php include('scripts.php'); ?>