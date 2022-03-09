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

    <body>
    <section class = "section4">
    	<div class = "row">
	        <div class = "col-md-1"></div>
	          <a href="index.php" class = "btn btn-info btn-s text-center"><-- Go back </a>
	        </div>
	    <div class="container mt-5">
	        <?php crudfunction();?>
	        <form action="#comment" method="GET">
	          <div class = "row">
	          	<div class="col-md-9 form-group">
	                <input class="form-control" type="text" name="username" placeholder="Put your username here" required />
	            </div>
	            <div class="col-md-9 form-group">
	                <input class="form-control" type="text" name="items" placeholder="Put your comments here" required />
	            </div>
	            <div class="col-md">
	                <input class ="btn btn-success mt-2 mb-5" type="submit" value="Add Comment" />
	              </div>
	          </div>
	         </form>
	      </div>
      <?php viewTable()?>
    </section> 
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  
  
</html>