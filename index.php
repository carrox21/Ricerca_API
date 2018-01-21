<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Cerca Posti</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
   input{
    text-align: center;
   }
  </style>
 </head>
 <body>
  <form action="Ricerca.php" method="POST">
   <div class="jumbotron text-center">
    <h1>Cerca Posti</h1>
    <p>Inserire un posto ed un luogo da cercare</p> 
   </div>
   <div class="form-group">
    <center><label for="posto">Posto:</label></center>
    <input type="text" class="form-control" name="posto" id="posto">
   </div>
   <div class="form-group">
    <center><label for="luogo">Luogo:</label></center>
    <input type="text" class="form-control" name="luogo" id="luogo">
   </div>
    <center><input type="submit" value="Cerca" class="btn btn-default"/></center>
  </form>
 </body>
</html>
