<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCSI</title>
    <link rel="icon" href="img/OTUS ICON/Eye.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  
    <link rel="stylesheet" href="CSS/filaments.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/scrollbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
    <body>
        <!-- NAVIGATION BAR-->
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
                            <a class="nav-link" href="support.php">Support</a>
                        </li> -->
                    </ul>
                </div>
            </div>
          </nav>
          <!-- END NAVIGATION BAR -->

          <!-- TITLE -->
        <div class="px-4 py-5 my-5 text-center title-container">
            <!-- <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="display-5 fw-bold text-body-emphasis">Filaments</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">OTUS Copy Systems, Inc. Philippines has partnered with TYTO to become their official distributor of Filaments for 3D printing. This collaboration ensures wider availability of TYTO's high-quality filaments to cater to the growing 3D printing industry in the Philippines</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                </div>
            </div>
        </div>
        <!-- END TITLE -->

        <!-- FILAMENTS -->
        <div class="album py-5 ">
            <div class="container">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Fillaments/ABS FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>ABS (Acrylonitrile Butadiene Styrene)</h5>
                      <p class="card-text">CoLiDo ABS filament is a strong, heat-resistant material that works with most 3D printers (1.75mm diameter) to create smooth, detailed prints. It's easy to use with recommended printing temperatures and comes on convenient spools for uninterrupted printing. The filament is well-made to prevent jams and bubbles for consistent, high-quality results.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/ABS.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <!-- <span class="mx-1">  </span> -->
                          <a href="Filaments/ABS.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Fillaments/ASA FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>ASA (Acrylonitrile Styrene Acrylate)</h5>
                      <p class="card-text">CoLiDo offers ASA filament for 3D printing. ASA, like ABS, is known for its strength and minimal warping, but with the added benefit of superior UV resistance. This makes CoLiDo ASA filament ideal for outdoor applications or projects that will be exposed to direct sunlight for long periods. It comes in a 1.75mm diameter and is compatible with most FDM printers.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/ABS.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <a href="Filaments/ASA.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Fillaments/PETG FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>PETG (Polyethylene Terephthalate Glycol)</h5>
                      <p class="card-text">
                        COLIDO Toughness-Enhanced PETG Filament is a premium material known for its durability and clarity. It allows for easy printing with minimal warping and clogging, resulting in smooth and reliable prints. With a precise diameter and tangle-free filament, this material is compatible with most 3D printers and offers excellent results for your creative projects.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/PETG.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <a href="Filaments/PETG.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Fillaments/PLA FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>PLA (Polylactic Acid)</h5>
                      <p class="card-text">COLIDO PLA filament is easy to use (thanks to their neat winding device), works with most printers (1.75mm FDM), and produces high-quality prints (accurate details, smooth surfaces). It requires standard printing temperatures and comes on spools designed for easy replacement. The filament itself is high-quality, with consistent performance due to advanced technology and careful drying.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/PLA.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <a href="Filaments/PLA.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
                    <img class="printer-img shadow-sm" src="img/Fillaments/PLA SILK FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>PLA SILK</h5>
                      <p class="card-text">CoLiDo Silk PLA Filament is a type of filament for 3D printers that creates prints with a shiny, silky smooth surface.  It is known for its ease of use, with a consistent diameter and well-wound spools.  Compatible with most FDM 3D printers, it prints well at temperatures between 210 and 235 degrees Celsius.  CoLiDo Silk PLA Filament is also a good choice for those concerned about the environment, as it is non-toxic and biodegradable.</p>
                      <div class="mt-auto d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/PLA SILK.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <a href="Filaments/Silk.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm h-100">
                    <img class="printer-img shadow-sm" src="img/Fillaments/TPU FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>TPU (Thermoplastic Polyurethane)</h5>
                      <p class="card-text">Colido Filament TPU is a flexible 3D printing filament ideal for creating rubber-like objects with high elasticity.  With a Shore hardness of 95A, it offers a balance between durability and pliability, making it suitable for parts that need to bend or stretch without breaking.  Colido TPU is known for its ease of printing and compatibility with most FDM 3D printers. It comes in various spool sizes and colors, allowing you to create functional and unique 3D designs.</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/TPU.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <a href="Filaments/TPU.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm">
                    <img class="printer-img shadow-sm" src="img/Fillaments/250g PLA FILAMENT WEBSITE.webp" alt="Card image" style="width:100%">
                    <div class="card-body d-flex flex-column">
                      <h5>250g PLA</h5>
                      <p class="card-text">COLIDO PLA filament is easy to use (thanks to their neat winding device) and compatible with most 3D printers (due to its accurate diameter). It allows for high-quality prints with smooth surfaces (due to optimized printing temperatures and speeds). The spools are conveniently sized and the filament itself is high quality (made with advanced technology, dried, and vacuum sealed).
                        </p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="img/Fillaments/PDF/PLA 250G.pdf" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary">Learn More</button></a>
                          <a href="Filaments/PLA250G.php" target="_blank"><button type="button" class="btn btn-sm btn-outline-secondary mx-2">View</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        <!-- END FILAMENTS -->


      </body>
</html>

<?php include('footer.php'); ?>
<?php include('scripts.php'); ?>