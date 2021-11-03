<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- reCAPTCHA -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Favicon -->   
  <link href="./images/icons/icon.ico" rel="shortcut icon"/>
  <title>CORCE - Cambiando el paradigma de la regeneración de células madre.</title> 

  <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- STYLE W -->
    <link href="css/style.css" rel="stylesheet">

  <!--icons--->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!--fonts--->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  
  <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- slider -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

  <body>

      <!---->
      <div class="principal-container">

          <!-- Social-media --> 
          <?php //include("./php/calltoaction.php") ?> 

          <!-- header -->
          <?php include("./php/header.php") ?> 


          <div class="container-sections-seven">

            <div class="row">
              <div class="col-md-12">

               <h1>Tratamientos</h1>

               <ul>
                 <li onclick="window.location.href='./';">Corce Inductores</li><i class="fas fa-angle-right"></i> 
                 <li style="color:#fff;"> Tratamientos </li>
               </ul>

              </div>
            </div>

          </div>

          <div class="container-sections-two">

              <div class="row">

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./kids.php';">
                    <img src="./images/img/tratamiento.jpg">
                    <h2>Tratamiento en niños</h2>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./cancer.php';">
                    <img src="./images/img/cancer.jpg">
                    <h2>Cáncer</h2>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./vision.php';">
                    <img src="./images/img/vision.jpg">
                    <h2>Visión</h2>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./young.php';">
                    <img src="./images/img/regenera.jpg">
                    <h2>Rejuvenecimiento</h2>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./prevention.php';">
                    <img src="./images/img/prevencion.jpg">
                    <h2>Prevención</h2>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./diabetes.php';">
                    <img src="./images/img/diabetes.jpg">
                    <h2>Diabetes</h2>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./artritis.php';">
                    <img src="./images/img/artritis.jpg">
                    <h2>Artritis reumatoide</h2>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="content-1" onclick="window.location.href='./problems.php';">
                    <img src="./images/img/problemas.jpg">
                    <h2>Problemas cardiovasculares</h2>
                  </div>
                </div>

              </div>

          </div>

          <!-- Footer -->
          <?php include("./php/footer.php") ?>
          <?php include("./php/button-go-to-up.php") ?>
         
      </div>

      <!-- Modals -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

          <!-- Modal content-->
          <div class="modal-content" style="padding: 2% 2%;">

              <iframe width="100%" height="400" src="https://www.youtube.com/embed/7N1mXw9F3Ck" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          </div>

        </div>
      </div>

      <!-- Bootstrap core JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

      <!-- Template Main Javascript File -->
      <script src="js/main.js"></script>

  </body>
</html>
