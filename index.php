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

          <!-- header -->
          <?php include("./php/slider.php") ?>


          <div class="container-sections" >

            <div class="row">
              <div class="col-md-4" onclick="window.location.href='./contact.php';">
                <button class="btn-inicio-1"><p>Contacto</p><span></span><a></a></button>
              </div>
              <div class="col-md-4" onclick="window.location.href='./inductors.php';">
                <button class="btn-inicio-1"><p>Inductores</p><span></span><a></a></button>
              </div>
              <div class="col-md-4" onclick="window.location.href='./testimonials.php';">
                <button class="btn-inicio-1"><p>Casos de éxito</p><span></span><a></a></button>
              </div>
            </div>

          </div>

          <div class="container-sections-two">

            <div class="row">
              <div class="col-md-12">
                  <h1>¿Cómo ayudan los inductores de regeneración celular ?<br><hr></h1>  
              </div>
            </div>

            <div class="row">

              <div class="col-md-3">
                <div class="content-1" onclick="window.location.href='./cancer.php';">
                  <img src="./images/img/cancer.jpg">
                  <h2>Cáncer</h2>
                  <p>Disminuye los efectos secundarios negativos de la quimioterapia.</p>
                </div>
              </div>

              <div class="col-md-3">
                <div class="content-1" onclick="window.location.href='./vision.php';">
                  <img src="./images/img/vision.jpg">
                  <h2>Visión</h2>
                  <p>Retrasa los efectos adversos de enfermedades oculares.</p>
                </div>
              </div>

              <div class="col-md-3">
                <div class="content-1" onclick="window.location.href='./young.php';">
                  <img src="./images/img/regenera.jpg">
                  <h2>Rejuvenecimiento</h2>
                  <p>Retraza o elimina los efectos propios del envejecimiento.</p>
                </div>
              </div>

              <div class="col-md-3">
                <div class="content-1" onclick="window.location.href='./prevention.php';">
                  <img src="./images/img/prevencion.jpg">
                  <h2>Prevención</h2>
                  <p>Retarda la aparición de enfermedades crónicas.</p>
                </div>
              </div>

            </div>

          </div>

          <div class="container-sections-three">

            <div class="row">
              <div class="col-md-12">
                <h1>¿Por qué confiar en CORCE?<br><hr></h1>  
              </div>
            </div>

            <div class="row">
              <div class="col-md-6" style="padding: 0%;">
                <div class="content-video-left">
                  <h2>Hombre con amputación de dedos, recupera hueso, tejidos y tendones</h2>
                  <p>
                    A Humberto Calzada una podadora le destrozó la tercera falange de dos dedos de su mano izquierda. Con la terapia de CORCE Inductores, recuperó hueso, tejido, uña y tendones con una movilidad perfecta.<br><br>
                    <strong>Mira más en el video</strong>
                  </p>
                  <span><br><br>¡Aún hay esperanza para cualquier enfermedad!<br></span>
                  <button onclick="window.location.href='./testimonials.php';">Leer más <i class="fas fa-angle-double-right"></i></button>
                </div>  
              </div>
              <div class="col-md-6" style="padding: 0%;">
                <div class="content-video-right">
                  <button data-toggle="modal" data-target="#myModal" ><i class="far fa-play-circle"></i></button>
                  <img src="./images/img/img-video.jpg">
                </div>
              </div>
            </div>

          </div>

          <div class="container-sections-four">

            <!--- medics -->
            <div class="row">
              <div class="col-md-12">
                <h1>Médicos Especialistas<br><hr></h1>  
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">
                    <div class="carousel-item active">

                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Raquel Soto González<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Rodolfo Lerma Ezpinoza<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Rosalba Jimenez Martinez<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Lizceth Corona González<br><br><hr></h2>
                          </div>
                        </div>

                      </div>

                    </div>
                    <div class="carousel-item">

                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Imelda Luna Medina<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Jazmin Cabrera Jayo<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Jorge Rios Arroyo<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Mariela Déciga Barrios<br><br><hr></h2>
                          </div>
                        </div>


                      </div>
                     
                    </div>
                    <div class="carousel-item">

                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Jose A. Yañes luis<br><br><hr></h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-especialist" >
                            <h2>Guillermina L. M. Aguillón <br><br><hr></h2>
                          </div>
                        </div>

                      </div>
                      
                    </div>
                  </div>

                  <ol class="carousel-indicators-1">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><i class="fas fa-minus"></i></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"><i class="fas fa-minus"></i></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"><i class="fas fa-minus"></i></li>
                  </ol>

                  <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>-->

                </div>

              </div>
            </div>

            <!--- other services -->
            <div class="row">
              <div class="col-md-12">
                <h1><br><br><br><br>Otros Servicios Médicos<br><hr></h1>  
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">

                <div id="carousel-3" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">

                    <div class="carousel-item active">
                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/acupuntura-1.png">
                            <h2>Acopuntura</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/cardiogram1.png">
                            <h2>Cardiología</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/ortopedia1.png">
                            <h2>Ginecología</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/medicine1.png">
                            <h2>Medicina General</h2>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/medicine2.png">
                            <h2>Medicina Interna</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/odontologia1.png">
                            <h2>Odontología</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/ortopedia1.png">
                            <h2>Ortopedia</h2>
                          </div>
                        </div>

                      </div>
                    </div>
                    

                  </div>

                  <ol class="carousel-indicators-1">
                    <li data-target="#carousel-3" data-slide-to="0" class="active"><i class="fas fa-minus"></i></li>
                    <li data-target="#carousel-3" data-slide-to="1"><i class="fas fa-minus"></i></li>
                  </ol>

                  <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>-->

                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h1><br><br><br><br>Especialidades en Servicios Médicos<br><hr></h1>  
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">

                <div id="carousel-2" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">

                    <div class="carousel-item active">
                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/acupuntura-1.png">
                            <h2>Cámara hiperbárica</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/cardiogram1.png">
                            <h2>Ultrasonido</h2>
                          </div>
                        </div>

                        

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/medicine1.png">
                            <h2>Belleza</h2>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="row">

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/medicine2.png">
                            <h2>Escáner</h2>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="content-other-services" >
                            <img src="./images/icons/ortopedia1.png">
                            <h2>Prueba de esfuerzo</h2>
                          </div>
                        </div>

                      </div>
                    </div>
                    

                  </div>

                  <ol class="carousel-indicators-1">
                    <li data-target="#carousel-2" data-slide-to="0" class="active"><i class="fas fa-minus"></i></li>
                    <li data-target="#carousel-2" data-slide-to="1"><i class="fas fa-minus"></i></li>
                  </ol>

                  <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>-->

                </div>

              </div>
            </div>

          </div>

          <div class="container-sections-five">

            <div class="row">
              <div class="col-md-12">
                <h1>Blog<br><hr></h1> 
              </div>
            </div>

            <div class="row" >
              <div class="col-md-4">
                <div class="content-blog">
                  <div class="content-blog-img" style="background-image: url('./images/img/img-blog-1.jpg');">
                    <button>
                      <i class="far fa-calendar-alt"></i> 11 noviembre,2019 <i class="fas fa-user"></i> Adriana Murillo
                    </button>
                  </div>
                  <div class="content-blog-text">
                    <h2>Terapia de Regeneración Celar; una esperanza de vida</h2>
                    <p>Entrevista con el Coronel Medico Cirujano Gerardo Martín González López</p>
                    <hr>
                    <ul>
                      <li><div class="read-more"> Leer más <i class="fas fa-long-arrow-alt-right"></i></div></li>
                      <li><div class="read-more"> 0 <i class="far fa-comment"></i></div></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="content-blog">
                  <div class="content-blog-img" style="background-image: url('./images/img/img-blog-2.jpg');">
                    <button>
                      <i class="far fa-calendar-alt"></i> 10 noviembre,2019 <i class="fas fa-user"></i> Adriana Murillo
                    </button>
                  </div>
                  <div class="content-blog-text">
                    <h2>¿Quién es el Dr. Gerardo Martín González López?</h2>
                    <p>El Coronel Médico Cirujano Gerardo Martín González López es un científico mexicano que ha descubierto la fórmula que regenera las células madre de cualquier organismo.</p>
                    <hr>
                    <ul>
                      <li><div class="read-more">leer más <i class="fas fa-long-arrow-alt-right"></i></div></li>
                      <li><div class="read-more"> 0 <i class="far fa-comment"></i></div></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="content-blog">
                  <div class="content-blog-img" style="background-image: url('./images/img/img-blog-3.jpg');">
                    <button>
                      <i class="far fa-calendar-alt"></i> 30 agosto,2019 <i class="fas fa-user"></i> Adriana Murillo
                    </button>
                  </div>
                  <div class="content-blog-text">
                    <h2>Té de menta ayuda a mejorar la memoria y actividades cognitivas</h2>
                    <p>Los efectos de tomar té de menta podrían tener grandes beneficios para la memoria y las actividades cognitivas.</p>
                    <hr>
                    <ul>
                      <li><div class="read-more"> Leer más <i class="fas fa-long-arrow-alt-right"></i></div></li>
                      <li><div class="read-more"> 0 <i class="far fa-comment"></i></div></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="container-sections-six">

            <div class="row">
              <div class="col-md-12">

                <div id="carousel-sec-six" class="carousel slide" data-ride="carousel">

                  <div class="carousel-inner">

                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="content-team" >
                            <img src="./images/img/pick-1.png">
                            <p>Terapeuta en Biomagnetismo con 10 años de experiencia con el Dr. Gerardo en el sureste de la república atendiendo a pacientes extranjeros y de la región, así mismo ayudando a grupos de niños de escasos recursos. </p>
                            <h3>Dr. Gerardo González</h3>
                            <p><strong>Presidente de CORCE y SITECEM</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="content-team" >
                            <!--<img src="./images/img/pick-1.png">-->
                            <p>Licenciada en Enfermería y Obstetricia con 22 años colaborando con el Dr. Gerardo González para ayudar a las personas que lo necesitan.</p>
                            <h3>Eulalia Méndez</h3>
                            <p><strong>Administradora General de CORCE</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="content-team" >
                            <!--<img src="./images/img/pick-1.png">-->
                            <p>Terapeuta en Biomagnetismo con 10 años de experiencia con el Dr. Gerardo en el sureste de la república atendiendo a pacientes extranjeros y de la región, así mismo ayudando a grupos de niños de escasos recursos.</p>
                            <h3>Mirtila Lopez</h3>
                            <p><strong>Terapeuta</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="carousel-item ">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="content-team" >
                            <!--<img src="./images/img/pick-1.png">-->
                            <p>Dedicada a la construcción de bienes inmuebles por más de 37 años. Representante de la esposa del secretario de la Secretaria de Comunicaciones y Transportes ante el DIF en el periodo 2003 – 2006 apoyando a tres comunidades del Estado de Puebla (Texmalaquilla, Domingo Arenas y Chimecatitlán) en temas de salud. A partir de esa época involucrada en diferentes apoyos a niños y adultos de escasos recursos. Desde hace cuatro años comprometida con el Dr. Gerardo Martín González López llevando la Terapia de Regeneración Celular a base de Inductores a varios estados de la República. Fundadora y Presidente de la Fundación Grageda Horné, A.C. (2016 a la fecha).</p>
                            <h3>Laura Loyola Grageda</h3>
                            <p><strong>Directora Fundación GRAGEDA HORNE</strong></p>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <!--<ol class="carousel-indicators-1">
                    <li data-target="#carousel-sec-six" data-slide-to="0" class="active"><i class="fas fa-minus"></i></li>
                    <li data-target="#carousel-sec-six" data-slide-to="1"><i class="fas fa-minus"></i></li>
                    <li data-target="#carousel-sec-six" data-slide-to="2"><i class="fas fa-minus"></i></li>
                    <li data-target="#carousel-sec-six" data-slide-to="1"><i class="fas fa-minus"></i></li>
                  </ol>-->

                  <a class="carousel-control-prev" href="#carousel-sec-six" role="button" data-slide="prev">
                    <span class="arrow-carousel-six" aria-hidden="true">
                      <i class="fas fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-sec-six" role="button" data-slide="next">
                    <span class="arrow-carousel-six" aria-hidden="true">
                      <i class="fas fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                  </a>

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
