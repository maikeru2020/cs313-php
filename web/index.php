<!DOCTYPE html>

<?php
  date_default_timezone_set('America/Boise');
  $date = date("m/d/Y g:i");
?>

<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CS 313 - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <div class="container text-center">
    <div class="row">
      <div class="col-sm">
        <a href="index.php">Home</a>
      </div>
      <div class="col-sm">
        <a href="assignments.html">Assignments</a>
      </div>
      <div class="col-sm">
        <button onclick="showHidePhoto();">Show/Hide Family Photo</button>
      </div>
    </div>
  </div>
  <h1>CS 313 - Michael Schmidt</h1>
  <img id="familyPhoto" src="sealing.jpg" title="Sealing at Columbia River Washington Temple" class="img-fluid">
  <img id="leeQuote" src="leeQuote.jpg" alt="Harold B. Lee Quote" class="img-fluid">
  <div class="footer">This page was loaded on <?php echo $date ?> MST</div>


  
</body>
</html>