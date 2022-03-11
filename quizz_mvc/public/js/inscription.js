// alert('bonjour!');

const prenom = document.getElementById('prenom');
const errorprenom = document.getElementById('errorprenom')

const nom = document.getElementById('nom');
const errornom = document.getElementById('errornom')

const login = document.getElementById('login');
const errorlogin = document.getElementById('errorlogin')

const password = document.getElementById('password');
const errorpassword = document.getElementById('errorpassword')

const conf = document.getElementById('conf');
const errorconf = document.getElementById('errorconf')

const inscrip = document.getElementById('insc');

function validForm() {

    const regx=/\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/;


    var cpt = 0;

    if (prenom.value == ""){
        errorprenom.innerHTML="veuillez remplir ce champ!!!";
        errorprenom.style.color="red";
        cpt++;
    }else{
        if (regx.test(prenom.value)){
            errorprenom.innerHTML="Prenom valide!!!";
            errorprenom.style.color="green";
        }else{
            errorprenom.innerHTML="Prenom Invalid!!!";
            errorprenom.style.color="red";
      
            cpt++;
        }
    }

    if (nom.value == ""){
        errornom.innerHTML="veuillez remplir ce champ!!!";
        errornom.style.color="red";
        cpt++;
    }else{
        if (regx.test(nom.value)){
            errornom.innerHTML="Email valide!!!";
            errornom.style.color="green";
        }else{
            errornom.innerHTML="Nom Invalid!!!";
            errornom.style.color="red";
      
            cpt++;
        }
    }
    
    const regm=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(login.value==""){
        errorlogin.innerHTML="Veuillez remplir ce champ!!";
        errorlogin.style.color="red";
        cpt++;
    }else{
        if(regm.test(login.value)){
            errorlogin.innerHTML="Login Valide!!";
            errorlogin.style.color="green";
        }else{
            errorlogin.innerHTML="Login invalid!!";
            errorlogin.style.color="red";
            cpt++;
        }
    }
    
    const regpw =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,15}$/;

    if(password.value==""){
        errorpassword.innerHTML="Veuillez remplir ce champ!!";
        errorpassword.style.color="red";
        cpt++;
    }else{
        if(regpw.test(password.value)){
            errorpassword.innerHTML="password Valide!!";
            errorpassword.style.color="green";
        }else{
            errorpassword.innerHTML="Password invalid!!";
            errorpassword.style.color="red";
            cpt++;
        }
    }

    if(conf.value==""){
        errorconf.innerHTML="Veuillez remplir ce champ!!";
        errorconf.style.color="red";
        cpt++;
    }else{
        if(regpw.test(conf.value)){
            if(conf.value!=password.value){
                errorconf.innerHTML="les password ne sont pas identique!!";
                errorconf.style.color="red";
            }
            
        }
        else{
            errorconf.innerHTML="Confirmation est invalide!!";
            errorconf.style.color="red";
            cpt++;
        }
    }





    if(cpt == 0){
        return true;
    }else{
        return false;
    }



}

const ph = document.getElementById("taff");
function upload(photo){
    ph.src=window.URL.createObjectURL(photo.files[0]);
}