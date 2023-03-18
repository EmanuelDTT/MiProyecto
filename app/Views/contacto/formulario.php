<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Formulario</title>
</head>
<body>
<form class="form-inline" method="post" action="<?php echo base_url() ?>/envioPost">
   <div class="form-group mx-sm-3">
       <label for="inputUser" class="sr-only">User</label>
       <input type="text" class="form-control" name="name" placeholder="User">
   </div>
   <div class="form-group mx-sm-3">
       <label for="inputPass" class="sr-only">Email</label>
       <input type="Email" class="form-control" name="emai" placeholder="you email">
   </div>
   <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>
