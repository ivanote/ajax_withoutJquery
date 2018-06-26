<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script type="text/javascript"  src="js/main.js"></script>


</head>
<body>


<hr>
<div class="container">
 <form role="form col-sm">
 <div class="form-group">
     <label for="id">id</label>
    <input type="int" class="form-control" id="id">
  </div>
  <div class="form-group">
     <label for="email">nombre</label>
    <input type="text" class="form-control" id="nombres">
  </div>
  <div class="form-group">
    <label for="pwd">apellido:</label>
    <input type="text" class="form-control" id="apellidos">
  </div>
  <div>
  <label for="email">email</label>
    <input type="text" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">telefono:</label>
    <input type="text" class="form-control" id="telefono">
  </div>
  
  <button type="button" class="btn btn-primary" onclick="add_member()">agregar</button>

    <button type="button" class="btn btn-primary" onclick="update_member()">editar</button>
 
</form> 
</div>
<hr>

<div id=list_container>
    <?php 
                        // inlcuimos la conexion con el servidor
                        include('conexion.php');
                        $pdo = connect();
                        // Incluir para ver la totalidad de alumnos
                        include('lista_alumnos.php'); 
                    ?>

</div> 


 

  
</body>
</html>