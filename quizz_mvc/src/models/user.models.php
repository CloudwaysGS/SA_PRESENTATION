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