<?php
  include "Config.php";
  //Puse de input del post un "usuario". Cambienlo a lo que pongan bien en el formulario.
  $conexion = connect();
  if(!$conexion) {
    echo "No se pudo conectar con el servidor. <br>
    Cuando llames a apoyo técnico, muéstrales el texto a continuación:";
    echo mysqli_connect_error()."<br>";
    echo mysqli_connect_errno()."<br>";
    exit();
  }
  else {
  $user = $_POST['user'];
  $psw = $_POST['password'];
  if ($user) {
    $bd = "SELECT status FROM user WHERE user LIKE '$user'";
    $status = mysqli_query($conexion, $bd);
    $response = [];
  	while($row = mysqli_fetch_assoc($status))
  	{
      array_push($response, $row);
    }
    $preresult = "SELECT password FROM user WHERE user LIKE '$user'";
    $consult= mysqli_query($conexion, $preresult);
    $count=mysqli_num_rows($consult);
    if($count==1){
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['status'] = $response[0]["status"];
        header("Location:chatbot.php");
    }
    else{
        echo "Bye";
    }
  }
}

?>