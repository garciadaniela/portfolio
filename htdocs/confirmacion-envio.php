<?php $pg = "contacto";


?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!--Menu de navegacion -->
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/estilos.css"> <!-- siempre mis estilos al final-->
  <title>Contacto</title>
</head>

<body>
  <header>
    <?php
    include_once("menu.php");

    ?>

  </header>

  <section id="contacto">
    <div class="container">
      <div class="row">
        <div class="col-12 px-3 py-5 text-center">
          <h1>
            Gracias por tu consulta, te responderemos a la brevedad.
          </h1>
          <div class="text-center py-3">
          <i class="far fa-thumbs-up" ></i>
          </div>
        </div>
      </div>
      
      </div>

  </section>

  <footer>
    <?php
    include_once("footer.php");


    ?>


    </div>


  </footer>
</body>

</html>