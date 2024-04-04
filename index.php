<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Upscale Events</title>
</head>
<body>
  
    <?php
    require_once "header.php";
    ?>
    <div class="content">
      <div class="left">
        <h1>Elevate Your <span>Events</span> and <span>Memories</span> With Us.</h1>
        <p>Looking for a great place to organize and manage your events? You are in the right place.</p>
        <a href="signup.php"><button>Get Started</button></a>
      </div>
      <div class="right">
          <img src="images/coverimage.jpg" alt="Event Cover Picture"/>
      </div>
    </div>
  


  <div class="display-event">
    <h2>We provide services to manage many events.</h2>
    <div class="gallery">
      <img src="images/birthday.jpg" alt="birthday">
      <img src="images/marriage.jpg" alt="marriage">
      <img src="images/babyshower.jpg" alt="babyshower">
      <img src="images/corportae.jpg" alt="corporate">
    </div>
    <button>Explore Events </button>
  </div>

  <div class="info">
    <h2>How it works.</h2>
    <div class="cards">
      <div class="card">
        <img src="images/userregister.png" alt="User Register Image"/>
        <p>Create account and connect with us.</p>
      </div>
      <div class="card">
        <img src="images/eventregister.jpg" alt="User Register Image"/>
        <p>Search, create and register many events.</p>
      </div>
      <div class="card">
        <img src="images/enjoy.jpg" alt="User Register Image"/>
        <p>Enjoy and celebrate your beautiful events.</p>
      </div>
    </div>
  
  </div>

  <?php
  require_once "footer.php";
  ?>
 
</body>
</html>