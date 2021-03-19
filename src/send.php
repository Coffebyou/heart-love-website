<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviando Formulario | Amor Potente</title>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;600;800&display=swap" rel="stylesheet">
    <!-- Main Custom Css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap 5.002beta-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Glider Js Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.css">
</head>
<body style="background:#000;">
    <nav class="navbar sticky-top navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">Amor Potente</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="reorder-three-outline" style="color:#fff; font-size: 30px;"></ion-icon>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="index.html">
                    <ion-icon name="home-outline"></ion-icon> Inicio
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#service">
                    <ion-icon name="bag-outline"></ion-icon> Servicios
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <ion-icon name="information-circle-outline"></ion-icon> Politicas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#contact">
                    <ion-icon name="call-outline"></ion-icon> Contactos
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="social-bars">
        <li class="whatsapp-bars"> <a href="form-whatsapp.html"><ion-icon name="logo-whatsapp" style="color:#fff;font-size:40px;"></ion-icon></a></li>
        <li class="telefono-bars"><a href="tel:+5804127442185"><ion-icon name="call-outline" style="color:#fff;font-size:40px;"></ion-icon></a> </li>
    </div>

    <?php
        //En el destino colocar el correo alque quieres que lleguen los datos del contacto de tu formulario
 $destino = "estuyoamor@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $telefono = $_POST['telefono'];
    $contenido = "Nombre: " . $nombre .  "\nCorreo: " . $email . "\nTelefono: " . $telefono .  "\nAsunto: " . $mensaje;
    mail($destino, "Contacto", $contenido);
    //header("index.html");
    echo'<div class="container m-5">
            <div class="card-outline">
            <img src="img/ist-1.webp" style="width:30%;" class="rounded card-img-top mx-auto d-block mb-4">
            <div class="card-header text-center text-white">
                <ion-icon name="checkmark-circle-outline"></ion-icon>  Mensaje Enviado
            </div>
            <div class="card-body text-center">
                <h5 class="card-title text-white"> Redireccionando... </h5>
                <div class="spinner-border text-danger" role="status">
                <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            </div>
        </div>';
    echo"<script> setTimeout(\"location.href='index.html'\",3400)</script>";
?>
    <!-- Bootstrap Scripts 5.002beta -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>