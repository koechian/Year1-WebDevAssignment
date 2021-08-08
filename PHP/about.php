<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../CSS/about.css" />
  <link rel="stylesheet" href="../CSS\navbar.css">
  <link rel="stylesheet" href="../CSS\fonts.css">
  <link rel="icon" href="../Assets\Images\favicon.ico" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
</head>


<body>
  <div class="container">
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="../index.php">Go Back</a></li>
          <li><a href="PHP\about.php">About Us</a></li>
          <li><a href="#about_pointer">Find A Bistro</a></li>
          <li><a href="#">Cart</a></li>
        </ul>
      </nav>
      <div class="under">
        <h1>About The Bando</h1>
        <img title="No Coffee was harmed in the making of this picture" src="../Assets\Images\aboutpage.jpg" alt="A picture of a coffee mug">
      </div>
      <div class="text">
        <article>
          <p>Here at The Bando, we strongly believe that&nbsp<span>you are what you eat&nbsp</span> and therefore, we worry on how to get the best ingredients and safest prepatration measures while still serving you with quality food so you don't have to. All you have to do here is eat.
          </p><br><br>
          <p>
            Established in 2021, we understand that we may seem new. This is far from the case as our carefully curated staff list has decades of experience between them.
          </p>
          <br><br>
          <hr>
          <br>
        </article>
        <div class="location">
          <p id="about_pointer">
            You can find us at the following locations.
          </p>

          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

</html>