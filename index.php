
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ink Street</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/mainpagestyle.css">
<script src="js/form_activiation.js"></script>


      <?php include 'view/header.php'; ?>  
</head>
<body>
<header>
<h1 id="myHeader">Ink with caffeine </h1>
<h6>Art Studio</h6>
</header>
<section>
 <?php include 'register/registration.php'; ?>
     
  <article id="rcorners3">
    <h1 class="bodytext">Welcome</h1>
    <p class="bodytext">Here at Ink with Caffeine, we aim to create master crafts in both the art of tattoos and coffee.<br> Check out our artists and our coffee bar!</p>
  </article>

</section>
    <br>
    <div class="gallery js-flickity"
  data-flickity-options='{ "wrapAround": true }'>
  <div class="gallery-cell"><img src="imgs/mask3.jpg" alt="3" width="500" height="600"></div>
  <div class="gallery-cell"><img src="imgs/mask1.jpg" alt="3" width="500" height="600"></div>
  <div class="gallery-cell"><img src="imgs/OGelbowarea.jpg" alt="3" width="500" height="600"></div>
  <div class="gallery-cell"><img src="imgs/shoulderghibli.jpg" alt="3" width="500" height="600"></div>
</div> <br>
    <?php include 'view/footer.php'; ?>
</body>
</html>
