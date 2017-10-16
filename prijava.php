<?php
include 'head.php';
/*include 'footer.php';*/
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html>
<html>
<head>
	<title>Prijava</title>
</head>
<body>
    <form class="form-horizontal">
         <div class="form-group">
            <label class="control-label col-sm-2"  for="ime">Korisničko ime:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="korisnickoIme">
            </div>
        </div>
         <div class="form-group">
            <label class="control-label col-sm-2"  for="prezime">Lozinka:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="lozinka">
            </div>
         </div>
        <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox">Zapamti me</label>
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
