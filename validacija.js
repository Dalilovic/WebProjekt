validateForm();

function validateForm (){
    
    var polje = document.forms["registracija"]["ime"]["prezime"]["korisnickoIme"]["email"]["lozinka"]["ponovljena"].value;
    
    if(polje == 0){
        alert("Sva polja moraju biti ispunjena");
        return false;
    }
}

