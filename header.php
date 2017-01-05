<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Core Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

<script src="./js/fingerprint2.min.js"></script>

<style>
.top-buffer {
  margin-top:20px;
}

.footer {
  margin-top:50px;
}

.network_class{
  width: 100%;
  height: 500px;
}

/* Lists --> Taken from Skeleton http://getskeleton.com/#code
–––––––––––––––––––––––––––––––––––––––––––––––––– */
ul {
  list-style: circle inside; }
ol {
  list-style: decimal inside; }
ol, ul {
  padding-left: 0;
  margin-top: 0; }
ul ul,
ul ol,
ol ol,
ol ul {
  margin: 1.5rem 0 1.5rem 3rem;
  font-size: 90%; }
li {
  margin-bottom: 1rem; }

</style>

<title>User Tracking</title>
</head>

<body onload="checkCookie()">
  <scrpit src=".js/fingerprint-js.js"></script>
<!-- open bootstrap container -->
<div class="container">

<a href="index.php" style="text-decoration:none; color:#5bc0de; top-buffer"><h4 class="display-4 title">User Tracking and Browser Fingerprinting</h4></a>
<hr></hr>

<nav class="navbar navbar-dark bg-inverse">
  <ul class="nav navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fingerprint.php">My Fingerprint</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="location.php">My Location</a>
    </li>
    <!--
    <li class="nav-item">
      <a class="nav-link" href="contentpersonalization.php">Content Personalization</a>
    </li>
  -->
    <li class="nav-item">
      <a class="nav-link" href="purpose.php">Purpose</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="actors.php">Data Brokers</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="donottrack.php">Privacy Technologies</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="resources.php">Resources</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="cookies.php"><strong><span id="cookie"></strong></span></a>
    </li>
  </ul>
</nav>
<script src="./js/fingerprint-js.js"></script>
