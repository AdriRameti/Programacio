<?php
include_once ('JWT.php');
$JWT = new JWT;
function encode($usuario){
    // include_once ('JWT.php');
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'maytheforcebewithyou';

    $payload = '{
        "iat":'.time().', 
        "exp":'.time() + (60*60).',
        "name":'.$usuario.'
    }';
    global $JWT;
    $token = $JWT->encode($header, $payload, $secret);
    return $token;
}
   function decode($token){
    $secret = 'maytheforcebewithyou';
    // $JWT = new JWT;
    global $JWT;
    $json = $JWT->decode($token, $secret);
    return $json;
   }
   



    
