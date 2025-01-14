<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info" style="margin-top: 1rem; margin-left: 3rem; margin-right: 3rem;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyCityHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Our Features
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="event.php">Local Events</a></li>
                            <li><a class="dropdown-item" href="emergencty.php">Emergency Contacts</a></li>
                            <li><a class="dropdown-item" href="eco.php">Eco-Tracker</a></li>
                            <li><a class="dropdown-item" href="polls.php">Polls and Survey</a></li>

                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="contactus.php">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>

                <div style="margin-left: 1rem;">
                    <a href="login.php" class="btn btn-danger">Login</a>
                    <a href="signup.php" class="btn btn-danger">Sign Up</a>

                </div>
            </div>
        </div>
    </nav>
  

    <div style="margin-left: 3rem; margin-right: 3rem;  margin-bottom: 2rem;"> 
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade ">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="crousel/3cr.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>WELCOME TO MyCityHub</h2>
                        <p>Stay Connected, Informed and Engaged.</p>
                        <button class="btn btn-primary">Local Events</button>
                        <button class="btn btn-danger">Emergency Contacts</button>
                        <button class="btn btn-success">Eco-Tracker</button>
                        <button class="btn btn-light">Polls and Survey</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="crousel/2cr.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>We are here!, just for you</h2>
                        <p>Stay Connected.</p>
                        <button class="btn btn-primary">Local Events</button>
                        <button class="btn btn-danger">Emergency Contacts</button>
                        <button class="btn btn-success">Eco-Tracker</button>
                        <button class="btn btn-light">Polls and Survey</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="crousel/1cr.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Lets identify whats happening in MyCity</h2>
                        <p>Stay connected and upto date with us</p>
                        <button class="btn btn-primary">Local Events</button>
                        <button class="btn btn-danger">Emergency Contacts</button>
                        <button class="btn btn-success">Eco-Tracker</button>
                        <button class="btn btn-light">Polls and Survey</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

    </div>

    <div my-4 my-6>
        <li>
            <h2>Respected Officials </h2>
        </li>
    </div>

    <div class="container my-5 mx-5">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Mayor</strong>
                        <h3 class="mb-0">Roshan Chaudhary</h3>
                        <div class="mb-1 text-body-secondary">2080 B.S. - 2085 B.S.</div>
                        <p class="card-text mb-auto">He was elected in the year 2080 for a term of five years. Known for
                            his dedication to public service,His leadership focuses on
                            infrastructure, education, health, and environment, ensuring sustainable
                            development and improved quality of life for all residents.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="crousel/rcc.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <div class="container my-5 mx-5">
        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary-emphasis">Mayor</strong>
                        <h3 class="mb-0">Roshan Chaudhary</h3>
                        <div class="mb-1 text-body-secondary">2080 B.S. - 2085 B.S.</div>
                        <p class="card-text mb-auto">He was elected in the year 2080 for a term of five years. Known for
                            his dedication to public service,His leadership focuses on
                            infrastructure, education, health, and environment, ensuring sustainable
                            development and improved quality of life for all residents.</p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="250" src="crousel/rcc.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-body-secondary">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                            Continue reading
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
</body>
<p>© 2017–2024 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</html>