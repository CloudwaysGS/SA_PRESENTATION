

//Regular Expression  == ""
/* /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|
    \\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|
    \[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:
    (?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/
 */
//function de validation de mail et password
 
const regm = document.getElementById('mail');
const errorMail=document.getElementById('errormail');
const regpw= document.getElementById('pw');
const errorPassword=document.getElementById('errorpassword');


function Validate_Email(mail) {

    const regx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (regx.test(mail)){

        errorMail.innerHTML="Email valide!!!";
        errorMail.style.color="green";
        return (true);
        
    }
        errorMail.innerHTML="Votre email est invalid!!";
        errorMail.style.color="red";
        return (false);
}

function password_v(password){
    if(regpw.value==""){
        errorPassword.innerHTML="Veuillez remplir le champ!!!"
        errorPassword.style.color="red";
        return false;
        
    }

    if(regpw.value.length<8 && regpw.value.length>15){
        errorPassword.innerHTML="Your password have to be between eight and fifteen characters!!!";
        errorPassword.style.color="red";
        
        return false;
    }else{
        errorPassword.innerHTML="Mot de passe incorrect!!!";
        errorPassword.style.color="red";
    }

}


//appel des fonctions js
regm.addEventListener('change', function(e){
    mail=e.target.value;
    Validate_Email(mail);
});

regpw.addEventListener('change', function(e){
    password=e.target.value;
    password_v(password)
});