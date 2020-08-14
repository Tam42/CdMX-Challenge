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
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light p-3 mb-2">
            <a class="navbar-brand" href="#">CHATBOT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-link active <?php echo $pagina == 'inicio' ? 'active' : ''; ?>" href="?p=inicio">INICIO<span class="sr-only"(current)></span></a>
                  <a class="nav-link active <?php echo $pagina == 'ayuda' ? 'active' : ''; ?>" href="?p=ayuda">AYUDA<span class="sr-only">(current)</span></a>
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
    