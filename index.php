<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="database1" href="tattoo_artist.sql">
<link rel="stylesheet" href="main_page_style.css">
<script src="carol.js"></script>
<!--end of script area-->
<head>
<title>Tattoo_DB</title>
<?php include 'view/header.php'; ?>
</head>

<!--site_title-->
<h1 id="myHeader"> ChuckDez Tattoo Parlor</h1>
<body>
<?php
$servername = "localhost";
$username = "artist_db";
$password = "pa55word";
try {
  $conn = new PDO("mysql:host=$servername;artist_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<!--end of site_title-->
<!-- carosoul area -->
<div class="gallery js-flickity"
  data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell"><img src="mask3.jpg" alt="3" width="500" height="600"></div>
  <div class="gallery-cell"><img src="mask1.jpg" alt="3" width="500" height="600"></div>
  <div class="gallery-cell"><img src="OGelbowarea.jpg" alt="3" width="500" height="600"></div>
  <div class="gallery-cell"><img src="shoulderghibli.jpg" alt="3" width="500" height="600"></div>
</div>
</div>

<?php include 'view/footer.php'; ?>
</html>





