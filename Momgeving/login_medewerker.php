<?php include_once '../include/login_medewerker.inc.php';
       
   
       ?>
       



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5a8735a64a.js" crossorigin="anonymous"></script> <!--load all styles --> <!--load all styles icons -->
    
    
    <title>login pagina</title>
    <link  rel="stylesheet" href="../style.medewerkers.css" type="text/css">
  </head>
<body style="background-color:#ffcc00">

<div class="container sub-container-login">
<?php echo '<center>'.ErrorMessage().'</center>'; ?>
<h1>Login Pagina</h1>
<form class="sub-form" action="../include/login_medewerker.inc.php" method="post">

  <div class="form-group">
    <label for="Voornaam">Voornaam</label>
    <input type="text" class="form-control" name="voornaam" id="Voornaam" placeholder="voer je voornaam in">
  </div>
  <div class="form-group">
    <label for="Password">Wachtwoord</label>
    <input type="password" class="form-control" name="password" id="Password" placeholder="voer je wachtwoord in">
  </div>
  <div class="form-group">
    <input type="submit" name="submit-login-m" class="btn btn-success btn btn-lg" style="width:100%;"  value="Login">
  </div>
  <div class="pb-2 text-center">
  
   <a  href="../Momgeving/reset_wachtwoord.php">Wachtwoord vergeten?</a>
</div>
  
  
    
  
 
</form>

</div>
  </body>
</html>


    
 