<?php 
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies. ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Misc -->
    <script src="https://kit.fontawesome.com/adf01c95ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/index-layout.css">
    <style media="screen">
    ::-webkit-scrollbar {width: 4px;}
    ::-webkit-scrollbar-thumb {
      background: rgba(0, 0, 0, 0.7);
      border-radius: 10px;
    }
    html {
      scroll-behavior: smooth;
      overflow-x: hidden;
    }
    </style>

    <title>TerminalBus</title>
  </head>
  <body>
    <nav class="navbar bus-nav fixed-top">
      <div class="container">
        <p class="navbar-brand" >
          <i class="fas fa-bus-alt"></i> &nbsp
          TerminalBus
        </p>
      </div>
    </nav>

    
    <div class="hero">
      <div class="hero-text">
        <h1>Welcome to TerminalBus.com</h1>
        <h2>Find the best ticket bus in exsistence!</h2>
        <a href="">
        <a class="btn btn-warning btn-lg"  href="#ticket" role="button">Go</a>
        </a>
      </div>
      <img src="img/bus-cutout.png" alt="">
      
    </div>

    <Div class="ticket" id="ticket"><br><br>
      <div class="ticket-search">
        <form action="p/search.php" method="get">
          <div class="form-upper-text"> 
            <h3>Hello,</h3>
            <h2>Where do you want to go?</h2>
          </div>
          <div class="form-input">
            <div class="form-input-child fic1">
              <div class="input-cont">
                <i class="fas fa-arrow-right"></i>
                <input type="text" id="from" name="from" autocomplete="off" placeholder="From">
              </div>
              
            </div>
            <div class="form-input-child fic2">
              <div class="input-cont">
               <i class="fas fa-arrow-left"></i>
               <input type="text" id="to" name="to" autocomplete="off" placeholder="To"> 
              </div>
              
            </div>

            <div class="form-input-child fic1 bottom-shelf minp">
              <div class="input-cont">
                <i class="fas fa-tag"></i>
               <input type="text" id="minPrice" name="minPrice" autocomplete="off" placeholder="Minimum price"> 
              </div>
              
            </div>

            <div class="form-input-child fic2 bottom-shelf">
              <div class="input-cont">
                <i class="fas fa-tags"></i>
                <input type="text" id="maxPrice" name="maxPrice" autocomplete="off" placeholder="Maximum price"> 
              </div>
              
            </div>

            <div class="form-input-child fic3">
              <div class="input-cont">
              <i class="fas fa-address-card"></i>
               <input type="text" id="agName" name="agent" autocomplete="off" placeholder="Agent"> 
              </div>
              
            </div>

          </div>
          <div class="btn-container">
            <button class="btn-grad btn btn-dark" type="submit">Search</button>
          </div>
        </form>

      </div>
    </Div>
    


      <div class="about-us">
        <div class="about-us-text">
          <h3>About Us</h3>
          <p>Just the best bus ticket database site in the universe. Nothing less, nothing more.</p>
        </div>
      </div>

      <footer>
        <h6>
        &copy; Copyright 2021 Erick Yudha Pratama Sukku & Sastra Harapan Gulo
        </h6>
      </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>