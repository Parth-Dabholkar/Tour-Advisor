<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="tourstyles.css">
</head>
<body>

  <!-- navbar -->

        <nav class="navbar navbar-expand-md" id = "navi">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="LogoTour-modified.PNG" alt="TOUR ADVISOR" id="brandname" width="30" height="24" class = "d-inline-block align-text-center">
                Tour Advisor
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="List">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#" id="item">Tour Packages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Tour.html" id="item">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="AbtUs.html" id="item">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Log.php" id="item">Login</a>
                  </li>
                </ul>
            </div>
          </nav>

          <?php
          $servername="localhost";
          $username="root";
          $password="";
          $database="login_info";

          $conn1 = mysqli_connect($servername,$username,$password,$database);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user1 = $_POST['users'];
    $Email1 = $_POST['Email'];
    $num1 = $_POST['number'];
    $sugg = $_POST['Suggestion'];
  $sql1="INSERT INTO `reviews` (`user`, `email`, `phone`, `description`) VALUES ('$user1', '$Email1', '$num1', '$sugg')";
    $result1 = mysqli_query($conn1,$sql1);
    if($result1)
    {
        echo '<div class="alert alert-success" role="alert">
            Your response has been recorded
            </div>';
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">
        Servers down!! Try again later
        </div>';
    }
}
    ?>

          <div class = "Head">
            <div class = "l">
                <span>R</span>
            </div>
            <div class = "l">
                <span>E</span>
            </div>
            <div class = "l">
                <span>V</span>
            </div>
            <div class = "l">
                <span>I</span>
            </div>
            <div class = "l">
                <span>E</span>
            </div>
            <div class = "l">
                <span>W</span>
            </div>
            <div class = "l">
                <span>S</span>
            </div>
            </div>
          <section class="reviews">
            <div class="card" style="width: 25rem;">
                <img src="male_review1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Shirish</h5>
                  <p class="card-text">Tour Advisor is the best website for pocket-friendly tour packages. Great service.</p>
                </div>
              </div>
              <div class="card" style="width: 25rem;">
                <img src="female_review2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Priya</h5>
                  <p class="card-text">Must visit website for affordable tourism packages and knowlegable information..</p>
                </div>
              </div>
              <div class="card" style="width: 25rem;">
                <img src="male_review1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Anmol</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 25rem;">
                <img src="female_review2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Shriya</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 25rem;">
                <img src="male_review2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Yash</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 25rem;">
                <img src="female_review1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Sonal</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </section>
          <div class = "Head">
            <div class = "l">
                <span>R</span>
            </div>
            <div class = "l">
                <span>E</span>
            </div>
            <div class = "l">
                <span>A</span>
            </div>
            <div class = "l">
                <span>C</span>
            </div>
            <div class = "l">
                <span>H</span>
            </div>
            <div class = "l">
                <span>-</span>
            </div>
            <div class = "l">
                <span>U</span>
            </div>
            <div class = "l">
                <span>S</span>
            </div>
            </div>

            <div class="login-contain">
                <section class="Login-Container">
                  <div class = "Image-container">
                      <img src="toor.png" alt="Travel" class = "Travel">
                  </div>
                  <div class = "Form-Container">
                      <form action="/Parth/sverve/review.php" class = "Former" method = "post">
                          <div class = "getName">
                              <label for="users">Username</label>
                              <br>
                              <input type="text" name="users" id="name" placeholder="Username Here">
                          </div>
                          <div class = "getName">
                              <label for="Email">E-Mail</label>
                              <br>
                              <input type="email" name="Email" id="Email" placeholder="Email Here">
                          </div>
                          <div class = "getName">
                              <label for="number">Phone-Number</label>
                              <br>
                              <input type="text" name="number" id="number" placeholder="Phone Number Here">
                          </div>
                          <div class = "getName">
                              <label for="Suggestion">Suggestion/Complaints</label>
                              <br>
                              <textarea name="Suggestion" id="" cols="35" rows="6" placeholder="Suggestion/Complaint here"></textarea>
                          </div>
                          <div class = "Login-btn">
                          <button type="submit" class="btn btn-primary btn-lg">Send</button>
                          </div>
                      </form>
                  </div>
                </section>
              </div>

              <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
                <a href="#!" class="text-reset">Mumbai</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Jaipur</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Agra</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Kochi</a>
              </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
                <a href="#" class="text-reset">Home</a>
              </p>
              <p>
                <a href="Log.html" class="text-reset">Login</a>
              </p>
              <p>
                <a href="AbtUs.html" class="text-reset">Gallery</a>
              </p>
              <p>
                <a href="review.html" class="text-reset">Review</a>
              </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Tour Advisor.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>