<?php
    require_once 'php/init.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"  href="assets/vendor/css/bootstrap.min.css">
    <link href="assets/vendor/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="assets/resource/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    <title>Kerlark MK-T</title>
  </head>
  <body>
    <header id = "home">
       <!--  navigation -->
        <div class = "container-fluid navcon">
          <div class = "container">
            <nav class = "navbar navbar-expand-md navbar-dark pt-md-5 mb-5">
              <img src= "assets/resource/img/milktealogo21.png" alt="milktealogo.png" class="img-fluid logo" /><h5> KERLARK MK-T</h5>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class = "navbar-nav ml-auto">
                  <a href = "#home" class="nav-item nav-link active navitem">Home</a>
                  <a href = "#gallery" class="nav-item nav-link navitem">Galleries</a>
                   <a href = "#aboutus" class="nav-item nav-link navitem">About Us</a>
                   <a href = "#contactus" class="nav-item nav-link navitem">Contact Us</a>
                   <a href = "#testimonies" class="nav-item nav-link navitem">Testimonies</a>
                </div>
              </div>
            </nav>
          </div>  
        </div>
      <!-- navigation -->
        <div class="container">  
          <div class="jumbotron jumbotron-fluid header-text">
            <div class="container">
              <h1 class="main">Welcome to Kerlark MK-T <br/ ></h1>
               <h6 class="mainh6">"You've already seen Anime Ramen, now get ready for Anime MilKTea"</h6>
              <a href="#" class = "btn btn-full">Login</a>
              <a href="#" class = "btn btn-ghost">Register</a>
            </div>
          </div>
        </div> 
    </header>

    <section class = "section1" id="gallery">
      <h2 class="mainh2">KERLARK MK-T FLAVORS</h2>
      <div class = "container pt-md-5">
        <div class ="row">
          <div class= "col-md-4">
            <div class = "card cardcon mt-3">
              <h3>Iced Milk Tea</h3>
              <img class="card-img-top" src="assets/resource/img/milkteamegu1.jpg" alt="Iced Milk Tea">  
              <h4>What's Iced Milk Tea</h4>
              <div class = "card-body">
                <p class = "card-text text-justify">
                  Iced Milk Tea is our simple yet delicious made milk tea. Despite its normal looking flavor, our milk is by no means common, as it was squeezed from the best kind of cow there is. Its flavor will <strong>never gonna let you down.</strong>
                </p>
                <a href="#" class="btn-card">Click for More</a>
              </div>
            </div>
          </div>
          <div class= "col-md-4">
            <div class = "card cardcon mt-3">
              <h3>Strawberry Milk Tea</h3>
              <img class="card-img-top" src="assets/resource/img/milkteasb1.jpg" alt="Strawberry Milk Tea">  
              <h4>What's Strawberry Milk Tea</h4>
              <div class = "card-body">
                <p class = "card-text text-justify">
                  You may think that the sourness of strawberry may not be compatible with milk tea. BUT! Don't judge the book by its cover! Try it once to see it for yourself. We don't like spoiling our customers, you know?
                </p>
                <a href="#" class="btn-card">Click for More</a>
              </div>
            </div>
          </div>
          <div class= "col-md-4">
            <div class = "card cardcon mt-3 mb-3">
              <h3>Coffee Flavored Milk Tea</h3>
              <img class="card-img-top" src="assets/resource/img/milkteayui.jpg" alt="Coffee Flavored Milk Tea">  
              <h4>What's Coffee Flavored Milk Tea</h4>
              <div class = "card-body">
                <p class = "card-text text-justify">
                  Yes! You heard it right. A "coffee" flavored milk tea. Now you can enjoy the taste of a coffee in a milk tea. Not only you can drink your favorite milk tea, but you'll also feel energized after drinking it once.
                </p>
                <a href="#" class="btn-card">Click for More</a>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <hr /> &nbsp;
    </section>

    <section class="section2" id="aboutus">
     <div class = "container">
       <h2 class="myteam">Founder of Kerlark MK-T</h2>
       <hr />
        <div class="row MTCard text-center text-md-left mt-3">
          <div class="col-md-2">
            <img class="img-fluid" src="assets/resource/img/milktealogo22.png" alt="MilkTea Girl">
          </div>
          <div class="col card-detail">
            <h5 class="MTC-name p-2 p-md-0">Kervin Clark L. Isip</h5>
            <p class="MTC-p text-justify p-2 p-md-0">
              Kervin Clark L. Isip, or Kerlark for short, is the founder of the Kerlark MK-T. He was inspired to do a business since Milk Tea is really popular. Along with his hobby of watching anime, he combined the two and created Kerlark MK-T. In the future, he plans to expand his business internationally.
            </p>
          </div>
        </div>
        <hr />

     </div>
   </section>

    <section class = "section3"id = "contactus">
     <h2 class = "contactus"> Contact Us</h2>
      <div class="container">
        <hr />
        <div class="row">
          <div class="col">
            <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter your Full name " id = "studentName" name="name" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter your Email account" id = "studentEmail" name="email" required>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="cmt"><b>Concerns</b></label>
              <textarea class="form-control" rows="5" id = "subject" name="topic" required>
              </textarea>
          </div>
        </div>
          <div class = "row">
            <div class = "col-md-5">  

            </div>
          <div class = "col-md-4">
            <input type="submit" class = "submitbtn" value="Submit">
          </div> 

          </div>
      </div>
   </section>

   <section class = "section4" id="testimonies">
      <h2 class="mainh2">KERLARK MK-T TESTIMONIES</h2>
      <div class="container mt-5">  
      <?php   crudfunction();?>
      <div class = "row">
        <div class = "col-md-3"></div>
          <div class = "col-md-5">
            <a href="testimonies.php" class = "btn btn-info btn-s">Wanna Comment? Click this Button --> </a>
          </div>
      </div>
        </div> 
        <div class = "wrap">
          <div class = "ftable">
            <?php viewappTable(); ?>
          </div>
        </div>
    </section>
</body>
    <script src="assets/resource/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  
  
</html>