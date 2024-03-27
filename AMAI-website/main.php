<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMAI</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <header>

        <div id="logo">
            <a href="main.php"><img src="Images/logo.png"></a>
        </div>
        <div id="title">
            <a href="index.html">
                <h1>AMAI</h1>
            </a>
        </div>
    </header>

    <div id="carouselExampleCaptions" class="carousel carousel-index-main slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Images/Image1.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-headings">Welcome to my blog!</h5>
            <p>More about me below</a></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/logo.png" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-headings">Destinations</h5>
            <p>Click <a class="section-links" href="HTML/destinations.html">here</a> to see more!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Images/header-image3.jpg" class="d-block w-100" >
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-headings">Contact me!</h5>
            <p>Let me know some of your favourite places <a class="section-links" href="HTML/contact.html">here</a></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


    

</body>
<script src="script.js"></script>
</html>