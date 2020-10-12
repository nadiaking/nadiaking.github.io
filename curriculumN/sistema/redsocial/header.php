<?php 
  session_start();

echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <link rel='stylesheet' href='botstrap/bootstrap.min.js'>
    <link rel='stylesheet' href='styles.css' type='text/css'>
    <script src='javascript.js'></script>
    
_INIT;

  require_once 'functions.php';

  $userstr = 'Bienvenido';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Conectado cómo: $user";
  }
  else $loggedin = FALSE;

echo <<<_MAIN
    <title>Mi Red Social: $userstr</title>
  </head>
  <body>
    <div data-role='page'>
      <div data-role='header'>
        <div id='logo' class='center'>Cuidado de niños</div>
        <div class='username'>$userstr</div>
      </div>
      <div data-role='content'>
 
_MAIN;

  if ($loggedin)
  {
echo <<<_LOGGEDIN
        <div class='center'>
        <nav>
         <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="members.php?view=$user" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
          <a class="nav-item nav-link" id="nav-miembros-tab" data-toggle="tab" href="members.php" role="tab" aria-controls="nav-miembros" aria-selected="false">Miembros</a>
          <a class="nav-item nav-link" id="nav-amigos-tab" data-toggle="tab" href="friends.php" role="tab" aria-controls="nav-amigos" aria-selected="false">Amigos</a>
          <a class="nav-item nav-link" id="nav-mensajes-tab" data-toggle="tab" href="messages.php" role="tab" aria-controls="nav-mensajes" aria-selected="false">Mensajes</a>
          <a class="nav-item nav-link" id="nav-perfil-tab" data-toggle="tab" href="profile.php" role="tab" aria-controls="nav-perfil" aria-selected="false">Perfil</a>
          <a class="nav-item nav-link" id="nav-cerrar sesión-tab" data-toggle="tab" href="logout.php" role="tab" aria-controls="nav-cerrar sesion" aria-selected="false">Cerrar sesion</a>
         </div>
        </nav>
        </div>
        
_LOGGEDIN;
  }
  else
  {
echo <<<_GUEST
        <div class='center'>
          <a data-role='button' data-inline='true' data-icon='home'
            data-transition='slide' href='index.php'>Home</a>
          <a data-role='button' data-inline='true' data-icon='plus'
            data-transition="slide" href='signup.php'>Sign Up</a>
          <a data-role='button' data-inline='true' data-icon='check'
            data-transition="slide" href='login.php'>Log In</a>
        </div>
        <br>
        <br>
        <div align="center"><img src="cuidado.jpg" margin-left="30" height="350px" width="350px"></div>
        <br>
        <p class='info'>(You must be logged in to use this app)</p>
         
_GUEST;
  }
?>
