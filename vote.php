<?php
session_start();
if (isset($_SESSION['nb'])){
    $eval=$_POST['evaluation'];
    setcookie ('evaluation',$eval, time() + 365*24*3600);  
    header('location:acceuil.php') ;
}
else{
    $_SESSION['nb']=1 ;
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="refresh" content="120
; url=http://localhost/vote/tempsvote.php" />
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>vote</title>
</head>
<body>

<div class="container">
<form method ="post">
    <h1>Evaluez le contenu du  cours PHP</h1>
    <input type="radio" name="evaluation" value="Bon">Bon<br>
    <input type="radio" name="evaluation" value="Moyen"> Moyen<br>
    <input type="radio" name="evaluation" value="Mauvais"> Mauvais <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>  
</div>
<?php
}

?>   
</body>
</html>