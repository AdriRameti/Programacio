<?php
function encode(){
 ////////////////////////////////////////////////
    //https://github.com/miguelangel-nubla/JWT-PHP//
    ////////////////////////////////////////////////
    require_once "JWT.php";
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'maytheforcebewithyou';

    /////////////////////////// adrian ////////////////////////////////////////
    //iat: Tiempo que inició el token
    //exp: Tiempo que expirará el token (+1 hora)
    //name: info user
    $payload = '{
        "iat":time(), 
        "exp":time() + (60*60),
        "name":"adrian"
    }';

    $JWT = new JWT;
    $token = $JWT->encode($header, $payload, $secret);
}
   function decode(){
    $json = $JWT->decode($token, $secret);
   }



    
    // $json = $JWT->decode($token, $secret);
    // echo 'JWT encode adrian: '.$token."\n\n"; echo '<br>';
    // echo 'JWT decode adrian: '.$json."\n\n"; echo '<br>'; echo '<br>';

    // ////////////////////////////// adrian /////////////////////////////////////
    // $payload = '{
    //     "iat":time(),
    //     "exp":time() + (60*60),
    //     "name":"adrian"
    // }';

    // $JWT = new JWT;
    // $token = $JWT->encode($header, $payload, $secret);
    // $json = $JWT->decode($token, $secret);
    // echo 'JWT encode adrian: '.$token."\n\n"; echo '<br>';
    // echo 'JWT decode adrian: '.$json."\n\n";
