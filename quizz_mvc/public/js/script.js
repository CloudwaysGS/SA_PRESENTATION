

const regm = document.getElementById('mail');
const errorMail=document.getElementById('errormail');
const regpw= document.getElementById('pw');
const errorPassword=document.getElementById('errorpassword');
const btnconn = document.getElementById('submit');


function Validate_Email() {

    const regx=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    

    cpt =0;
    if (regm.value == ""){
        errorMail.innerHTML="veuillez remplir ce champ!!!";
        errorMail.style.color="red";
        cpt++;
    }else{
        if (regx.test(regm.value)){
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

