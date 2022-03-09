

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
const btnconn = document.getElementById('submit');


function Validate_Email() {

    const regx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    

    cpt =0;
    if (regm.value == ""){
        console.log('bienvenue')
        errorMail.innerHTML="veuillez remplir ce champ!!!";
        errorMail.style.color="red";
        cpt++;
    }else{
        if (regx.test(regm.value)){
            console.log('bienvenue')
            errorMail.innerHTML="Email valide!!!";
            errorMail.style.color="green";
            // return true;
            
        }else{
            
            errorMail.innerHTML="Votre email est invalid!!";
            errorMail.style.color="red";
            cpt++;
            
        }
    }
    const regy =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,15}$/;
    if(regpw.value==""){
        errorPassword.innerHTML="Veuillez remplir le champ!!!"
        errorPassword.style.color="red";
        cpt++;
        // return false;
        
    }
        else
        {
            if(regpw.value.length<6 || regpw.value.length>15){
            errorPassword.innerHTML="Your password have to be between 6 and 15 characters!";
            errorPassword.style.color="red";
            cpt++;
            // return false;
            }
                else
                    {
                    errorPassword.innerHTML="Mot de passe valid!!!";
                    errorPassword.style.color="green";
                    }
                }
            
                

    if(cpt==0){
        return true;
    }else{
        return false;
    }
}

