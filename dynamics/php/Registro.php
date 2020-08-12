<?php
  include("Config.php");
  // Falta validación de variables
  $conexion = connect();
  if(!$conexion) {
    echo "No se pudo conectar con el servidor. <br>
    Cuando llames a apoyo técnico, muéstrales el texto a continuación:";
    echo mysqli_connect_error()."<br>";
    echo mysqli_connect_errno()."<br>";
    exit();
  }
  else {
    $name = (isset($_POST['name']) && $_POST['name'] != "") ? escapeAll($_POST['name']) : false ;
    $last_name = (isset($_POST['last_name']) && $_POST['last_name'] != "") ? escapeAll($_POST['last_name']) : false ;
    $user = (isset($_POST['user']) && $_POST['user'] != "") ? escapeAll($_POST['user']) : false ;
    $password = (isset($_POST['password']) && $_POST['password'] != "") ? escapeAll($_POST['password']) : false ;
    $genre = (isset($_POST['genre']) && $_POST['genre'] != "") ? escapeAll($_POST['genre']) : false ;
    $age = (isset($_POST['age']) && $_POST['age'] != "");
    $status = 0;
    if($name === false || $last_name === false || $user === false || $password=== false || $genre === false){
      echo "Error al recibir sus datos, por favor reingréselos";
    }
    else{

      $SQL_usr = "INSERT INTO Challenge(user, name, last_name, password, genre, age, status) VALUES ('$user', '$name', '$last_name', '$password', '$genre', '$age', '$status')";
      $query_usr = mysqli_query($conexion,$SQL_usr);

      if($query_usr){
        echo "Usuario creado con éxito";
      }else{
        echo "Problemas al crear el usuario";
      }
    }
  }
?>