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
    <form class="form-horizontal" name="registracija" action="index.php" onsubmit="return Validation()" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2"  for="ime">Ime:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="ime">
            </div>
            <div id="ime_error" class="val_error"></div>
        </div>
         <div class="form-group">
            <label class="control-label col-sm-2"  for="prezime">Prezime:</label>
            <div class="col-sm-4">
                <input type="texte" class="form-control" name="prezime">
            </div>
            <div id="prezime_error" class="val_error"></div>
         </div>
         <div class="form-group">
            <label class="control-label col-sm-2"  for="korisnickoIme">Korisničko ime:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="korisnickoIme">
            </div>
            <div id="korisnicko_error" class="val_error"></div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2"  for="email">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" name="email">
            </div>
            <div id="email_error" class="val_error"></div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Lozinka:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="lozinka">
            </div>
            <div id="lozinka_error" class="val_error"></div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Ponovite lozinku</label>
            <div class="col-sm-4">
                <input type="password" class="form-control"  name="ponovljena">
            </div>
            <div id="ponovljena_error" class="val_error"></div>
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
        <input type="submit" class="btn btn-default" name="register" value="Spremi">
    </div>
  </div>
    </form> 

</body>
</html>
<script type="text/javascript">
    
    var ime=document.forms["registracija"]["ime"];
    var prezime=document.forms["registracija"]["prezime"]; 
    var email=document.forms["registracija"]["email"];
    var korisnicko=document.forms["registracija"]["korisnickoIme"];
    var lozinka=document.forms["registracija"]["lozinka"];
    var ponovljena=document.forms["registracija"]["ponovljena"];
    
    var ime_greska=document.getElementById("ime_error");
    var prezime_greska=document.getElementById("prezime_error");
    var email_greska=document.getElementById("email_error");
    var korisnicko_greska=document.getElementById("korisnicko_error");
    var lozinka_greska=document.getElementById("lozinka_error");
    var ponovljena_greska=document.getElementById("ponovljena_error");
    
    //event listeners 
    ime.addEventListener("blur", imeValidate, true);
    prezime.addEventListener("blur", prezimeValidate, true);
    email.addEventListener("blur", emailValidate, true);
    korisnicko.addEventListener("blur", korisnickoValidate, true);
    lozinka.addEventListener("blur", lozinkaValidate, true);
    ponovljena.addEventListener("blur", ponovljenaValidate, true);

function Validation(){
    
   if(ime.value==""){
       ime.style.border="1px solid red";
       ime_greska.textContent="Ime je obvezno";
       ime.focus();
       return false;
   }
   if(prezime.value==""){
       prezime.style.border="1px solid red";
       prezime_greska.textContent="Prezime je obvezno";
       prezime.focus();
       return false;
   }
   if(email.value==""){
       email.style.border="1px solid red";
       email_greska.textContent="Email je obvezno";
       email.focus();
       return false;
   }
   if(korisnicko.value==""){
       korisnicko.style.border="1px solid red";
       korisnicko_greska.textContent="Korisnicko ime je obvezno";
       korisnicko.focus();
       return false;
   }
   if(lozinka.value==""){
       lozinka.style.border="1px solid red";
       lozinka_greska.textContent="Lozinka je obvezno";
       lozinka.focus();
       return false;
   }
   if(ponovljena.value==""){
       ponovljena.style.border="1px solid red";
       ponovljena_greska.textContent="Potvdra lozinke je obvezno";
       ponovljena.focus();
       return false;
   }
   if(lozinka.value!=ponovljena.value){
       lozinka.style.border="1px solid red";
       ponovljena.style.border = "1px solid red";
       ponovljena_greska.innerHTML="Lozinke se ne podudaraju";
       return false;
       
   }
}
    
function imeValidate(){
       if(ime.value!=""){
            ime.style.border="1px solid #5E6E66";
            ime_greska.innerHTML ="";
            return true;
       }
}
function prezimeValidate(){
        if(prezime.value!=""){
            prezime.style.border="1px solid #5E6E66";
            prezime_greska.innerHTML="";
            return true;
        }
}
function korisnickoValidate(){
        if(korisnicko.value!=""){
            korisnicko.style.border="1px solid #5E6E66";
            korisnicko_greska.innerHTML="";
            return true;
        }
}
function emailValidate(){
    if(email.value!=""){
            email.style.border="1px solid #5E6E66";
            email_greska.innerHTML="";
            return true;
        }
}
function lozinkaValidate(){
    if(lozinka.value==""){
            lozinka.style.border="1px solid #5E6E66";
            lozinka_greska.innerHTML="";
            return true;
        }
}
function ponovljenaValidate(){
    if(ponovljena.value==""){
            ponovljena.style.border="1px solid #5E6E66";
            ponovljena_greska.innerHTML="";
            return true;
        }
}
    </script>
    
