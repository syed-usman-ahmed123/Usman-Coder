<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usman Coder</title>
  <link rel="stylesheet" href="Bootstrap CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
  <!-- ------------------------Header--------------------------- -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Usman Coder</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Contact</a>
            </li>

          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- ---------------------------------Header End-------------------- -->
  <!-- ---------------------------------Carousel--------------------- -->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Images/img10.jpeg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/img5.jpeg" class="d-block w-100 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="Images/img7.jpeg" class="d-block w-100 " alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- --------------------------------Carousel End--------------------- -->
  <!-- -------------------------------About Us------------------------- -->
  <section class="my-5">
    <div class="container-fluid">
      <div class="py-5">
        <h2 class="text-center">About Us</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="Images/img11.avif" class="about-img" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">I am a Web Developer </h2>
          <p class="py-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio adipisci reiciendis
            maiores id sit rem provident dicta, aut eius est dignissimos totam cupiditate! Expedita reiciendis
            architecto sapiente commodi quis in optio et possimus, modi inventore error fuga accusamus labore id quasi
            eos officiis odit ullam.</p>
          <a href="About.php" class="btn btn-success">Check More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- -------------------------------------------About Us End-------------------- -->
  <!-- ------------------------------------------Service------------------------- -->
  <section class="my-5">
    <div class="container-fluid">
      <div class="py-5">
        <h2 class="text-center">Our Services</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card" style="width: 18rem;">
            <img src="Images/img12.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nature</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-outline-success">Go somewhere</a>
            </div>
          </div>


        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card" style="width: 18rem;">
            <img src="Images/img17.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nature</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-outline-success">Go somewhere</a>
            </div>
          </div>


        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card" style="width: 18rem;">
            <img src="Images/img15.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nature</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-outline-success">Go somewhere</a>
            </div>
          </div>


        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="card" style="width: 18rem;">
            <img src="Images/img14.avif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nature</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn btn-outline-success">Go somewhere</a>
            </div>
          </div>


        </div>

      </div>
    </div>
  </section>
  <!-- ------------------------------Services End------------------ -->
  <!-- ------------------------------Gallery---------------------- -->
  <section class="my-5">
    <div class="container-fluid">
      <div class="py-5">
        <h2 class="text-center">Gallery</h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="Images/img14.avif" class="img-fluid pb-4" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ---------------------------------Gallery End--------------- -->
  <!-- -------------------------------Form----------------------- -->
  <section class="my-3">
    <div class="container">
      <div class="py-3">
        <h2 class="text-center">Form</h2>
      </div>
      <div>
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>User name</label>
            <input type="text" name="user" class="form-control" autocomplete="off">
            <label>Email</label>
            <input type="email" name="email" class="form-control" autocomplete="off">
            <label>Phone</label>
            <input type="number" name="phone" class="form-control" autocomplete="off">
            <label>Comment</label>
            <textarea name="comment" class="form-control"></textarea>
            <button type="submit" class="form-control, btn btn-success from-btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- --------------------------------------From End---------------------------- -->
  <!-- -------------------------------------Footer------------------------------- -->
<footer>
  <p class=" p-3 bg-dark text-white text-center">@UsmanCoderProduction</p>
</footer>
<!-- -------------------------------------Footer End---------------------------- -->
  <script src="Bootstrap Js/bootstrap.bundle.js"></script>
</body>


</html>