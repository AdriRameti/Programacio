<?php
function encode($usuario){
    require_once "/modelo/clases/JWT.php";
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'maytheforcebewithyou';

    $payload = '{
        "iat":'.time().', 
        "exp":'.time() + (60*60).',
        "name":'.$usuario.'
    }';

    $JWT = new JWT;
    $token = $JWT->encode($header, $payload, $secret);
    return $token;
}
   function decode($token){
    $secret = 'maytheforcebewithyou';
    $JWT = new JWT;
    $json = $JWT->decode($token, $secret);
    return $json;
   }
   



    
