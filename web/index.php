<!DOCTYPE html>

<?php
  date_default_timezone_set('America/Los_Angeles');
  $date = date('m/d/Y');
?>

<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CS 313 - Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="assignments.html" class="nav-link">Assignments</a>
      </li>
      <li class="nav-item" class="nav-link"><?php echo $date ?></li>
    </ul>
  </nav>
  <h1>CS 313 - Michael Schmidt</h1>
  <div class="container">
    <a class="btn btn-primary btn-block" href="assignments.html">Go to Assignments</a>
  </div>
  <img src="sealing.jpg" alt="Sealing at Columbia River Washington Temple" class="rounded img-fluid">
  <blockquote class="blockquote">Families can be Together Forever</blockquote>


  
</body>
</html>