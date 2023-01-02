<?php 
 
$botToken = "5874624540:AAGZ9IguwG43UQx_VSYqCs4IR7cWd1X-IzI";
 
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$modo = 0;
 
$chatId = $update["message"]["chat"]["id"];
$chatType = $update["message"]["chat"]["type"];
$userId = $update["message"]['from']['id'];
$firstname = $update["message"]['from']['username'];
if ($firstname=="") {
    $modo=1;
    $firstname = $update["message"]['from']['first_name'];
}
 
if ($modo == 0) {
    $firstname = "@".$firstname;
}
 
$message = $update["message"]["text"];
 
$agg = json_encode($update, JSON_PRETTY_PRINT);
 
 
 
 
//Extraemos el Comando
$arr = explode(' ',trim($message));
$command = $arr[0];
 
$message = substr(strstr($message," "), 1);
 
//No requieren variables del usuario.
switch ($command) {
    case '/ayuda':
        $response = "Tranquilo, estoy contigo.";
        sendMessage($chatId, $response);
        break;
    case '/ayuda2':
        $response = "Tranquilo, estoy contigo.";
        $keyboard = '["Gracias"],["Pos Ok"]';
