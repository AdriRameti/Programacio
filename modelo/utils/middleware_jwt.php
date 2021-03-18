<?php
function encode($usuario){
    require_once ("/modelo/clases/JWT.php");
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'maytheforcebewithyou';

    $payload = '{
        "iat":time(), 
        "exp":time() + (60*60),
        "name":'.$usuario.'
    }';

    $JWT = new JWT;
    $token = $JWT->encode($header, $payload, $secret);
}
   function decode($token){
    $json = $JWT->decode($token, $secret);
   }



    
