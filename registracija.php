<?php
include 'head.php';
/*include 'footer.php';*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registracija</title>
</head>
<body>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2"  for="ime">Ime:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="ime">
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-sm-2"  for="prezime">Prezime:</label>
            <div class="col-sm-4">
                <input type="texte" class="form-control" id="email">
            </div>
         </div>
         <div class="form-group">
            <label class="control-label col-sm-2"  for="korisnickoIme">Korisničko ime:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="korisnickoIme">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"  for="email">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Lozinka:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="lozinka">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Ponovite lozinku</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="ponovljena">
            </div>
        </div>
        <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox">Prihvaćam uvjete korištenja</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Spremi</button>
    </div>
  </div>
    </form> 
</body>
</html>
