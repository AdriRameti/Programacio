<?php
// $path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
// include ($path .'/modelo/util/JWT.php');
function encodeT($usuario){
    include_once ('JWT.php');
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'maytheforcebewithyou';

    $payload = '"iat":'.time().',"exp":'.time() + (60*60).',"name":'.$usuario.'';
    $JWT = new JWT;
    $token = $JWT->encode($header, $payload, $secret);
    return $token;
}
function decodeT($token){
    include_once ('JWT.php');
    $secret = 'maytheforcebewithyou';
    $JWT = new JWT;
    $json = $JWT->decode('eyJ0eXAiOiJKV1QiLCAiYWxnIjoiSFMyNTYifQ.ew0KICAgICAgICAiaWF0IjoxNjE2NDQzNjg3LCANCiAgICAgICAgImV4cCI6MTYxNjQ0NzI4NywNCiAgICAgICAgIm5hbWUiOkFkcmlhbg0KICAgIH0.NSrHiZeZbQzJEQjxYVWov0Fnfk9EWZOkpylEM9Eh3Dg' , $secret);
    return $json;
}
   

// $token= encodeT("ejemplo");
// echo decodeT($token);
// const SECRET = 'holamundo';
// function encodeT($user) //60*10 == 10 minuts
// {
//     $header = '{"typ":"JWT", "alg":"HS256"}';
//     $secret = SECRET;
//     $payload = '{
//             "iat":' . time() . ', 
//             "exp":' . time() + (60 * 90) . ',
//             "name":' . $user . '}';
//     $JWT = new JWT;
//     return  $JWT->encode($header, $payload, SECRET);
// }
// function decodeT($token)
// { 
//     $JWT = new JWT;
//     $json = $JWT->decode($token, SECRET);
//     return $json;
// }
