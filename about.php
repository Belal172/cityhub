<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <div class="main_continer">

    <nav class="navbar navbar-expand-lg navbar-info bg-info"
      style="margin-top: 1rem; margin-left: 3rem; margin-right: 3rem;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">MyCityHub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>


            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="event.php">Local Events</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="emergencty.php">Emergency Contacts</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="eco.php">Eco-Tracker</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="polls.php">Polls and Survey</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="contactus.php">Contact Us</a>
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


    <div class="col-lg-6 px-0" style="margin-left: 6rem; margin-top: 2rem;">
      <h5>About Us</h5>
      <p class="lead my-3" ;></p>Welcome to MyCityHub, a web platform designed to enhance communication between
      citizens and local authorities. We aim to simplify access to essential government services,
      encourage active civic participation, and promote a cleaner, more connected community.</p>
    </div>


    <div class="container my-5">
      <div class="row featurette d-flex justify-content-center align-items-center ">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">Local Events <span class="text-body-secondary">"Stay in the
              loop, never miss a moment!"</span></h2>
          <p class="lead">Stay updated with the latest events, programs, and announcements happening in your area.
            Whether it’s cultural festivals, community meetings, or local government updates, we make sure you never
            miss out.</p>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" focusable="false" src="about/ab2.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Emergency Contacts <span class="text-body-secondary">"Help is just
            a click away!"</span></h2>
        <p class="lead">In critical situations, quick access to help can save lives. Our platform provides verified
          emergency contact information and an SOS feature to ensure assistance is always within reach.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
          height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
          preserveAspectRatio="xMidYMid slice" focusable="false" src="about/ab3.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Eco-Tracker <span class="text-body-secondary">"Clean today for a
            greener tomorrow!"</span></h2>
        <p class="lead">We care about the environment! Our Eco-Tracker helps you manage waste efficiently with detailed
          schedules for collection, recycling, and disposal. Together, we can work towards a cleaner and greener
          community.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
          height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
          preserveAspectRatio="xMidYMid slice" focusable="false" src="about/ab4.jpg" alt="">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette d-flex justify-content-center align-items-center">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Polls and Survey<span class="text-body-secondary">
            "Your voice, your community, your impact!"</span></h2>
        <p class="lead">Your voice matters! Participate in polls and surveys to express your opinions and contribute to
          decisions that shape the future of your community.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
          height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
          preserveAspectRatio="xMidYMid slice" focusable="false" src="about/ab1.jpg" alt="">
      </div>
    </div>
    <hr class="featurette-divider">


    <!-- /END THE FEATURETTES -->

    <!-- Three columns of text below the carousel -->
    <div class="row" style="margin-top: 4rem;">
      <ul>
        <h3>Our Team</h3>
      </ul>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
          role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <h2 class="fw-normal">Aarya Singh</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first
          column.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
          role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <h2 class="fw-normal">Milan Belal</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
        </p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
          role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
        </svg>
        <h2 class="fw-normal">Ramesh Chaudhary</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
        role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect>
      </svg>
      <h2 class="fw-normal">Roshan Chaudhary</h2>
      <p>And lastly this, the third column of representative placeholder content.</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  </div>
</body>

</html>