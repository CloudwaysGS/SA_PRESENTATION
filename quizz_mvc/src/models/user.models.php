<?php
    
    function find_user_login_password(String $login, String $password):array{
        $users=json_to_array("users");
        foreach($users as $user){
            if($user['login'] == $login && $user['password'] == $password){
                return $user;
            }
        } 
        return [];
    }

    function find_users(String $role):array{
        $users=json_to_array("users");
        $result=[];
        foreach($users as $user){
            if($user['role']==$role){
                $result[]=$user;
            }           
        }

        return $result;
    }



function adduser($prenom,$nom,$login,$password){
    if(!is_connect()){
        $role=ROLE_JOUEUR;
    }else{
        $role=ROLE_ADMIN;
    }
    $user = array(
        "nom"=>$nom,
        "prenom"=>$prenom,
        "login"=>$login,
        "password"=>$password,
        "role"=>$role,
        "score"=>0
    );
    $getcontent= file_get_contents(PATH_DB);
    $dataArray=json_decode($getcontent,true);
    $dataArray["users"][]=$user;

    $data= json_encode($dataArray,JSON_PRETTY_PRINT);
    return file_put_contents(PATH_DB,$data);
}



// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// function add($prenom,$nom,$login,$password){
//     if(!is_connect()){
//         $role=ROLE_JOUEUR;
//     }else{
//         $role=ROLE_ADMIN;
//     }
//     $user = array(
//         "nom"=>$nom,
//         "prenom"=>$prenom,
//         "login"=>$login,
//         "password"=>$password,
//         "role"=>$role,
//         "score"=>0
//     );
//     $getcontent= file_get_contents(PATH_DB);
//     $dataArray=json_decode($getcontent,true);
//     $dataArray["users"][]=$user;

//     $data= json_encode($dataArray,JSON_PRETTY_PRINT);
//     return file_put_contents(PATH_DB,$data);
// }


// function find_questions():array
// {
//     $users=json_to_array("question");

//     $result=[];

//     foreach ($users as $user) 
//     {
//         if( $user['role']==)

//         $result[]= $user;
//     }
//         return $result;
// }
// function lister_question() 
// {
//     //die('in lister_joueur');

//     $mydata=find_questions();

//     require_once(PATH_VIEW."user/liste.question.html.php");

// }