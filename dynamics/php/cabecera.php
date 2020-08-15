<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CORONABOT | Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../../statics/CSS/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="../../statics/media/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../statics/media/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../statics/media/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../statics/media/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../statics/media/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../statics/media/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../statics/media/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../statics/media/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../statics/media/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../statics/media/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../statics/media/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../statics/media/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../statics/media/favicon-16x16.png">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light p-3 mb-2">
        <a href="../../index.html"><img src="../../statics/media/logo.png" alt="logo" height="50px"></a>
      <a href="../../index.html"><img src="../../statics/media/titulo.png" alt="logo" height="30px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active <?php echo $pagina == 'inicio' ? 'active' : ''; ?>" href="?p=inicio">INICIO<span class="sr-only"(current)></span></a>
                  <a class="nav-link active <?php echo $pagina == 'ayuda' ? 'active' : ''; ?>" href="?p=ayuda">AYUDA<span class="sr-only">(current)</span></a>
                  <a class="nav-link active <?php echo $pagina == 'referencias' ? 'active' : ''; ?>" href="?p=referencias">REFERENCIAS<span class="sr-only">(current)</span></a>
                  <a class="nav-link active <?php echo $pagina == 'conoce' ? 'active' : ''; ?>" href="?p=conoce">CONÓCENOS<span class="sr-only">(current)</span></a>
                  <a class="nav-link active <?php echo $pagina == 'cerrar' ? 'active' : ''; ?>" href="?p=cerrar">CERRAR SESIÓN<span class="sr-only">(current)</span></a>
            </div>
          </nav>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    