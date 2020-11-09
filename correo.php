
<?php
    $destinatario = 'eliazarparzival@gmail.com';
    //correo a donde se enviara el mensaje
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= "From: <$email>" . "\r\n";
    $headers .= "Cc: $to" . "\r\n";
    $nombre = $_POST['nombre'];
    $asunto= $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email']; 


     // de quien es el mensaje
  $from = $email;
  // para quien es el mensaje
  $to = $destinatario;
  // asunto del mensaje
  $asunto = "Mensaje de Contácto !IMPORTANTE!";
  // cual es el mensaje
  $mensaje = "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Mensaje</title>
    
      <style>
        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
    
        .container {
          max-width: 1000px;
          width: 90%;
          margin: 0 auto;
        }
        .bg-dark {
          background: #343a40;
          margin-top: 40px;
          padding: 20px 0;
        }
        .alert {
          font-size: 1.5em;
          position: relative;
          padding: .75rem 1.25rem;
          margin-bottom: 2rem;
          border: 1px solid transparent;
          border-radius: .25rem;
        }
        .alert-primary {
          color: #004085;
          background-color: #cce5ff;
          border-color: #b8daff;
        }
    
        .img-fluid {
          max-width: 100%;
          height: auto;
        }
    
        .mensaje {
          width: 80%;
          font-size: 20px;
          margin: 0 auto 40px;
          color: #eee;
        }
    
        .texto {
          margin-top: 20px;
        }
    
        .footer {
          width: 100%;
          background: #48494a;
          text-align: center;
          color: #ddd;
          padding: 10px;
          font-size: 14px;
        }

        .footer span {
          text-decoration: underline;
        }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='bg-dark'>
          <div class='alert alert-primary'>
            <strong>Mensaje de: </strong> $nombre
          </div>
    
          <div class='mensaje'>
            <img class='img-fluid' src='https://cdn.pixabay.com/photo/2016/11/14/04/45/bicycle-1822640__340.jpg' alt='Mensaje'>
    
            <div class='texto'>$mensaje</div>
          </div>
    
          <div class='footer'>
            Puedes llamarlo al <span></span> o escribirle a <span>$email</span>
          </div>
        </div>
      </div>
    </body>
    </html>
  ";

    $header = "enviado desde la pagina de pradiot";
    $mensajecompleto = $mensaje . "\nAtentamente:" . $nombre;
    mail($destinatario, $asunto, $mensaje, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>stTimeout(<\"location.href='index.html'\"1000)</script>";
?>