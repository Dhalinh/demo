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

               <h1>Contacto</h1>

               <ul>
                 <li onclick="window.location.href='./';">Corce Inductores</li><i class="fas fa-angle-right"></i> 
                 <li style="color:#fff;"> Contacto </li>
               </ul>

              </div>
            </div>

          </div>

          <div class="container-sections-five">

            <div class="row" >
              <div class="col-md-6">
                <h1>Ponte en contacto con nosotros<br><hr></h1> 
                <form class="form-questions" method="POST" action="./send_form_email.php">
                  <label>Nombre*</label>
                  <input type="text" name="name" required>
                  <label>Apellido*</label>
                  <input type="text" name="last_name" required>
                  <label>Correo*</label>
                  <input type="mail" name="mail" required>
                  <label>De donde nos escribes*</label>
                  <input type="text" name="location" required>
                  <label>Tipo de mensaje</label>
                  <select name="typemesagge">
                    <option value="none" >---</option>
                    <option value="Sobre citas" >Sobre citas</option>
                    <option value="Sedes al interior de la república" >Sedes al interior de la república</option>
                    <option value="Sobre el tratamiento" >Sobre el tratamiento </option>
                    <option value="otro" >Otro </option>
                  </select>
                  <label >Mensaje*</label>
                  <textarea type="text" name="menssagge" rows="2"></textarea>
                  <button type="submit" name="btn-questions">Enviar</button>
                </form>
              </div>
              <div class="col-md-6">
               <h1>Dirección<br><hr></h1>
                <p><i class="fas fa-map-marker-alt"></i> Prolongación Gral. Nicolás Bravo #77 Colonia El Huizachal Edo. Mex.</p>
                <p><i class="far fa-envelope"></i> contacto@corceinductores.com</p>
                <p><i class="fas fa-phone" style="transform: rotate(90deg);"></i> Atención telefónica <br><br>
                <strong>53-99-15-88</strong> 09:00 AM a 05:00 PM<br><br>
                <strong>55-28-79-33-98</strong>  24 horas<br><br>
                <strong>55-30-31-51-96</strong>  24 horas<br><br>
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <iframe style="margin: 5% 0% 0% 0%; border-radius: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7216955618196!2d-99.25121578512876!3d19.42442708688895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20163b374ce49%3A0x84fd1e5511b95283!2sProl.%20Gral.%20Nicol%C3%A1s%20Bravo%2077%2C%20Heroes%20de%20la%20Revolucion%2C%2053840%20Naucalpan%20de%20Ju%C3%A1rez%2C%20M%C3%A9x.%2C%20M%C3%A9xico!5e0!3m2!1ses!2siq!4v1575997139923!5m2!1ses!2siq" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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
