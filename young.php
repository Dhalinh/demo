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

               <h1>Rejuvenecimiento</h1>

               <ul>
                 <li onclick="window.location.href='./';">Corce Inductores</li><i class="fas fa-angle-right"></i>
                 <li onclick="window.location.href='./treatment.php';">Tratamientos</li><i class="fas fa-angle-right"></i> 
                 <li style="color:#fff;"> Rejuvenecimiento</li>
               </ul>

              </div>
            </div>

          </div>

          <div class="container-sections-eight">

            <div class="row">

              <div class="col-md-6">
                <h1></h1>
                <h2>Rejuvenecimiento</h2>
                <p>
                  El envejecimiento a nivel celular es el acortamiento de los telómeros de los cromosomas a medida que se van produciendo sus divisiones celulares hasta casi desaparecer. Es ahí cuando la célula ya no se puede dividir pasando a un estado llamado senescencia, perdiendo funciones metabólicas.
                  <br><br>
                  Mediante la terapia celular de CORCE, se intenta mantener y al mismo tiempo regenerar los órganos y tejidos dañados mediante una fórmula hecha a base de inductores químicos (de replicación y diferenciación celular) que imitan las rutas naturales del cuerpo humano, dando como resultado la multiplicación de las células multipotentes y la diferenciación de estas en sus nichos naturales.
                  <br><br>
                  Al haber un aumento de células madre sanas, hay un rejuvenecimiento en todo el organismo que se ve reflejado de forma externa en la piel, cabello, uñas y un brillo especial en la mirada.
                 </p>
              </div>

              <div class="col-md-6">
                <img src="./images/img/regenera-2.jpg">
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
