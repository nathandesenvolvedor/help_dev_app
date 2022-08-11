<?php
require_once('pagina_restrita.php');
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    

    
    <div class="alert alert-success mt-5" role="alert">
        <h4 class="alert-heading">Enviado com sucesso!</h4>
        <p>Sua solicitação ja foi enviada para um dos administradores, e logo logo por email, vão mandar a conclusão/resultado de seua solicitação. Por favor aguarde...</p>
        <hr>
        <a href="consultar_chamado.php" class="btn btn-lg btn-success btn-block" type="submit">Voltar</a>
    </div>

      
    </div>
  </body>
</html>