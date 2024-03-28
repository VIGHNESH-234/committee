<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="homepagecss.css" rel="stylesheet">
    <title>Technical Organizations</title>
    <link rel="icon" href="Cold color palette.jpg" type="image/x-icon">

</head>

<body>
    <?php
     session_start();
    ?>
    <nav class="navbar navbar-expand-lg bg-body-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://www.pce.ac.in/"> <img src="PCECroppedLogo.png" width="50" alt=""> PCE </a>
            <button class="navbar-toggler" type="submit" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register1.php">Sign Up</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  College Organizations
                </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.unicef.org/">CSI</a></li>
                            <li><a class="dropdown-item" href="https://www.unesco.org/en">GDSC</a></li>
                            <li><a class="dropdown-item" href="#">IEEE</a></li>
                            <li><a class="dropdown-item" href="#">TPC</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Thats It!</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>-->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="SearchInput">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div id="carouselExampleFade" class="carousel slide carousel-fade custom-carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="A picture of a university campus or building to si.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="The outside of a university called gym bro univers(1).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="The outside of a university called gym bro univers.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="d-flex flex-wrap justify-content-center card-container">
        <div class="card" style="width: 18rem;">
            <img src="A flat styled vector image that will be used as a .jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Computer Society of India (CSI)</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go to site</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="strategic planning.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Google Developer Student Club (GDSC)</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go to site</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="strategic planning (1).jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Institute of Electric and Electronic Engineers (IEEE)</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="IEEE.php" class="btn btn-primary">Go to site</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="strategic planning (2).jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Training and Placement Cell (TPC)</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="mainTPC.html" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>


    <div class="card-container">
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Organization 1</div>
            <div class="card-body">
                <h5 class="card-title">Computer Society of India</h5>
                <p class="card-text">The United Nations International Children's Emergency Fund (UNICEF) was established in 1946, in the aftermath of World War II. Our mandate was clear: to help children and young people whose lives and futures were at risk – no matter what
                    role their country had played in the war..</p>
            </div>
        </div>
        <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Organization 2</div>
            <div class="card-body">
                <h5 class="card-title">Google Developer Student Club</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Organization 3</div>
            <div class="card-body">
                <h5 class="card-title">Institute of Electric and Electronic Engineers </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Organization 4</div>
            <div class="card-body">
                <h5 class="card-title">Training and Placement Cell </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>


    <section id="aboutUs" class="container about-section">
        <h2 class="text-center my-4">About Pillai College of Engineering</h2>
        <p>Pillai College of Engineering (Autonomous) is an engineering college in New Panvel, Navi Mumbai, Maharashtra, India was established in 1999 (commencement of courses from A.Y. 2000–2001) as a self financed Malayalam Linguistic Minority autonomous
            Institute affiliated to University of Mumbai, approved by AICTE and Recognized by Govt. of Maharashtra.[1] The college is recognized by UGC under section 12(b) and 2(f).[2] It is operating under the banner of Mahatma Education Society (MES).[3]
            It is commonly referred to as Pillai College, PCE also as PIIT, also as PIITE.</p>
    </section>
    <section id="contactUs" class="container contact-section">
        <h2 class="text-center my-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-6">
                <h3>Our Location</h3>
                <p>Dr.K.M.Vasudevan Pillai Campus</p>
                <p>Sector-16, New Panvel-410206</p>
            </div>
            <div class="col-md-6">
                <h3>Contact Information</h3>
                <p>Email: pce@mes.ac.in</p>
                <p>Tel: 022-27482133/27456030</p>
            </div>
        </div>
    </section>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="homepage.js"></script>
</body>

</html>