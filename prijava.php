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
    <form class="form-horizontal" name="prijava" action="index.php" onsubmit="return Validation()" method="post">
         <div class="form-group">
            <label class="control-label col-sm-2"  for="ime">Korisničko ime:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="korisnickoIme">
            </div>
            <div id="ime_error" class="val_error"></div>
        </div>
         <div class="form-group">
            <label class="control-label col-sm-2"  for="lozinka">Lozinka:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="lozinka">
            </div>
            <div id="lozinka_error" class="val_error"></div>
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
        <input type="submit" class="btn btn-default" name="prijava" value="Prijavi se">
    </div>
  </div>
    </form>
    
</body>
</html>

<script type="text/javascript">
    
    var korisnik=document.forms["prijava"]["korisnickoIme"];
    var lozinka=document.forms["prijava"]["lozinka"];

    var korisnik_greska=document.getElementById("ime_error");
    var lozinka_greska=document.getElementById("lozinka_error");
    
    korisnik.addEventListener("blur", imeValidate, true);
    lozinka.addEventListener("blur", lozinkaValidate, true);


function Validation(){
    
    if(korisnik.value==""){
       korisnik.style.border="1px solid red";
       korisnik_greska.textContent="Korisnicko ime je obvezno";
       korisnik.focus();
       return false;
   }
   if(lozinka.value==""){
       lozinka.style.border="1px solid red";
       lozinka_greska.textContent="Lozinka je obvezno";
       lozinka.focus();
       return false;
   }  
}

function imeValidate(){
    
    if(korisnik.value!=""){
        korisnik.style.border="1px solid #5E6E66";
        korisnik_greska.innerHTML ="";
        return true;        
    } 
}
function lozinkaValidate(){
    if(lozinka.value!=""){
        lozinka.style.border="1px solid #5E6E66";
        lozinka_greska.innerHTML ="";
        return true;        
    }  
}



</script>
