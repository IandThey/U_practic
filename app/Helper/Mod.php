<?php

namespace App\Helper;

class Mod{

    public static function session_message($message, $type){
        session([
            'alert' => $message, 
            'alert_type' => $type
        ]);
    }

    public static function session_profile_add($login, $password){
        session([
            'login' => $login, 
            'password' => $password
        ]);
    }
    
}

?>