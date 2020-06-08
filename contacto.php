
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function guardarCorreo($correo){
  $archivo = fopen("mails.txt", "a+");
  fwrite($archivo, $correo . ";\n\r");
  fclose($archivo);
}

$pg = "contacto";

include_once("PHPMailer/src/PHPMailer.php");
include_once("PHPMailer/src/SMTP.php");

$msg = "";


if ($_POST){ /* es postback */ 
  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];

if($nombre != "" && $correo != ""){
  guardarCorreo($correo);

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = "mail.danielagarcia.com.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
  $mail->Username = "info@danielagarcia.com.ar"; // Correo completo a utilizar
  $mail->Password = "D4N1.6745";
  $mail->Port = 25;
  $mail->From = "info@danielagarcia.com.ar"; // Desde donde enviamos (Para mostrar)
  $mail->FromName = "Daniela Garcia";
  $mail->IsHTML(true);
  $mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);

  //Destinatario
  $mail->addAddress($correo);
  $mail->addBCC("garciadanielajb2@gmail.com");
  $mail->Subject = utf8_decode("https://danielagarcia.com.ar/contacto.php");
  $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
  //$exito = $mail->Send();
  $mail->ClearAllRecipients(); //Borra los destinatarios

  //Nosotros
  $mail->addAddress("garciadanielajb2@gmail.com");
  $mail->Subject = "Recibiste un mensaje desde tu página web";
  $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
  //$exito = $mail->Send();

if($mail->Send()){
  header("Location: confirmacion-envio.php");
} else {
  $msg = "Error al enviar el correo, intente nuevamente mas tarde";
  //exit;

}

} else {
  $msg = "Falta completar datos";

}
}




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
  <link rel="stylesheet" href="css/style.css"> <!-- siempre mis estilos al final-->
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
      <?php if(isset($msg) && $msg !=""): ?>
    
    <div class="row">
    <div class="col-12">
    <div class="alert alert-secondary" role="alert">
    <?php echo $msg; ?>
 
     </div>
    </div>

    </div>
    <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <h1>
            ¡Trabajemos juntos!
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-10">
          <p>Para más detalles sobre mi <br>
            trabajo podés ver mi Linkedin, <br>
            descargar mi CV o mandarme <br>
            un mensaje.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 col-12">
          <form action="" method="POST">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="NOMBRE" value="<?php echo isset($_POST["txtNombre"])? $_POST["txtNombre"] : ""; ?>">
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="CORREO" value="<?php echo isset($_POST["txtCorreo"])? $_POST["txtCorreo"] : ""; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="text" class="form-control" required id="txtAsunto" name="txtAsunto" placeholder="ASUNTO" value="<?php echo isset($_POST["txtAsunto"])? $_POST["txtAsunto"] : ""; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea name="txtMensaje" id="txtMensaje" rows="7" class="form-control" placeholder="MENSAJE"><?php echo isset($_POST["txtMensaje"])? $_POST["txtMensaje"] : ""; ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 text-center">
                <input type="submit" name="btnEnviar" value="ENVIAR" class="btn btn-md">
              </div>
            </div>
          </form>
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