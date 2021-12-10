<?php 
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.

require_once "endpoint.php";
require_once "filter.php";

if (isset($_GET['from']) && !empty($_GET['from'])) {
  if (isset($_GET['to']) && !empty($_GET['to'])) {
    $viewData = filterDataByFromTo($resultData, $_GET['from'], $_GET['to']);
  } else {
    $viewData = filterDataByFrom($resultData, $_GET['from']);
  }

  if (count($viewData) == 0) {
    $isDataFound = false;
  } else {
    $isDataFound = true;
  }

  
} else {
  $isDataFound = false;
};

?>

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
    <link rel="stylesheet" href="../style/search-layout.css">
    <style media="screen">
    ::-webkit-scrollbar {width: 4px;}
    ::-webkit-scrollbar-thumb {
      background: rgb(125,195,190);
      background: linear-gradient(356deg, rgba(125,195,190,1) 0%, rgba(255,176,220,1) 100%);
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
        <p class="navbar-brand">
          <i class="fas fa-bus-alt"></i> &nbsp
          TerminalBus
        </p>
        <a class="btn btn-warning"  href="../index.php" role="button">Home</a>
      </div>
    </nav>

    <div class="result-cont">
      <h1>Search Result:</h1>
      <!-- FOR RESULT NOT FOUND
      <h3>Result not found</h3>  
      -->

      <!-- FOR RESULT FOUND
      <ul class="result-list">
        <li>
          <div class="agent">
            <div class="agent-name"">
            Lorena
            </div>
            <div class="agent-phone">
            (021) 82818728
            </div>
          </div>
          <div class="from-to">
            <h5>Route</h5>
            <h4 class="from">Jakarta</h4>
            <i class="fas fa-long-arrow-alt-right"></i>
            <h4 class="to">Palembang</h4>
          </div>
          <div class="facility">
            <h5>Facility:</h5>
            <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, ullam esse
            </p>
          </div>
          <div class="price">
            Rp 999000
          </div>
        </li>

      </ul>
      -->
      

      <?php 
      if ($isDataFound) {
        foreach ($viewData as $data) {
          echo '<ul class="result-list">
          <li>
            <div class="agent">
              <div class="agent-name"">';
          echo $data['agName'];
          echo '</div>
          <div class="agent-phone">';
          echo $data['agTelp'];
          echo '</div>
          </div>
          <div class="from-to">
            <h1 class="from">';
          echo $data['from'];
          echo '</h1>
          <i class="fas fa-long-arrow-alt-right"></i>
          <h1 class="to">';
          echo $data['to'];
          echo '</h1>
          </div>
          <div class="facility">
            <h4>Facility:</h4>
            <p>';
          echo $data['facility'];
          echo '</p>
          </div>
          <div class="price">Rp ';
          echo $data['price'];
          echo '</div>
          </li>
          </ul>';
        }
      } else {
        echo '<h3>Result not found</h3>';
      }
      ?>
      
      

    </div>
    

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