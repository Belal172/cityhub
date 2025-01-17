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
    <nav class="navbar navbar-expand-lg navbar-info bg-info"
        style="margin-top: 1rem; margin-left: 3rem; margin-right: 3rem;">
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="event.php">Local Events</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="emergencty.php">Emergency Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="eco.php">Eco-Tracker</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="polls.php">Polls and Survey</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
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

    <div
        style="border: 2px solid rgba(13, 165, 236, 0.927); margin-left: 3rem; margin-right: 3rem; margin-top: 3rem; margin-bottom: 3rem;">
        <div class="container my-4" style="margin-top: 1rem;">
            <h2>Contact Us</h2>
            <form>
                <div class="row" style="margin-top: 1rem;">
                    <label for="exampleInputEmail1" class="form-label">Enter Your Name</label>

                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                    </div>
                </div>
                <div class="col-12" style="margin-top: 1rem;">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-6" style="margin-top: 1rem;">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4" style="margin-top: 1rem;">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="mb-3" style="margin-top: 1rem;">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div style="margin-top: 1rem;">
                    <label for="exampleInputEmail1" class="form-label">Select Your Query</label>
                    <select class="form-select" aria-label="Select Your Query">
                        <option selected>Open this select menu</option>
                        <option value="1">About Events</option>
                        <option value="2">About Emergency Contacts</option>
                        <option value="3">About Eco-Tracker</option>
                        <option value="4">About Polls and Survey</option>
                        <option value="5">Others</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 1rem;">
                    <label for="exampleFormControlTextarea1">Elaborate Your Concern</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1 rows=" 3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style="margin-top: 2rem;">Submit</button>
            </form>
        </div>
    </div>
</body>
<p>© 2017–2024 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>

</html>