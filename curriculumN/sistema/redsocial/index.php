<?php // Example 26-4: index.php
  session_start();
  require_once 'header.php';

  echo "<div class='center'Bienvenido>"; 

  if ($loggedin) echo " $user, you are logged in";
  else           echo ' please sign up or log in';

  echo <<<_END
      </div><br>
    </div>
    <div data-role="footer">
    <center><h3><p class="estilo-encabezado">
    <br>
    Hecho en mexico, para notificacion de incidencias técnicas relacionadas con alguna funció incorrecta de la herramienta Web App,
    puede dirigirse al servicio de atención al usuario a través de la siguiente dirección de correo electronico: nadiakingzton0315@gmail.com . 
    <br>
    Debe indicar sus datos de contacto (telefono y mail) y el problema que fue identificado.
    
    </p></h3></center>
    </div>
    <script src="botstrap/jquery-3.4.1.slim.min.js"></script>
    <script src="botstrap/popper.min.js"></script>
    <script src="botstrap/bootstrap.min.js"></script>
  </body>
</html>
_END;
?>
