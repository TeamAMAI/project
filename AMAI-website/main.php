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
        <div class="carousel-item active carimage1">
            <img src="Images/Image1.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="carousel-item carimage2">
          <img src="Images/picture1.png" class="d-block w-100 carouselImage">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="carousel-headings">Destinations</h5>
            <p>Click <a class="section-links" href="HTML/destinations.html">here</a> to see more!</p>
          </div>
        </div> -->
        <div class="carousel-item carimage1">
            <img src="Images/picture2.png" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Stretch" id="flexCheckDefault option1">
                    <label class="form-check-label" for="flexCheckDefault option1">Reminder to Stretch</label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Screen" id="flexCheckChecked option2">
                    <label class="form-check-label" for="flexCheckChecked option3">Reminder to Look Away From Screen</label>
                </div>  
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Quote" id="flexCheckDefault option3">
                    <label class="form-check-label" for="flexCheckDefault option4">Motivational Quotes</label>
                </div>  
                    <br>
                    <label for="customRange2 option4" class="form-label">Time Between Reminders</label>
                    <input type="range" class="form-range" min="0" max="120" step="1" id="customRange1">
                    <p>Time: <output id="valueTime"></output></p>

                <!-- <form>
                    <input type="checkbox" id="option1" name="option1" value="Stretch">
                    <label for="option2">Reminder to Stretch</label><br>
                    <input type="checkbox" id="option2" name="option2" value="Screen">
                    <label for="option2">Reminder to Look Away From Screen</label><br>
                    <input type="checkbox" id="option3" name="option3" value="Quote">
                    <label for="option3">Motivational Quotes</label>
                    <br>
                    <label for="option3">How much time do you want between each notification?</label>
                    <input type="number" id="option4" name="option4">



                </form> -->
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>