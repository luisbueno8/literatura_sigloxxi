<?php 
 
$botToken = "1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE";
 
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$modo = 0;
 
echo "que pasa neng";

$response = "que pasa neeeng";

$chatId = $update["message"]["chat"]["id"];

$pepe2 = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/cartel1.jpg" -F caption="TheImage" > /dev/null &';

$pepe22 = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/sticker.webp" -F caption="TheImage" > /dev/null &';


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
 case 'hola':
 case 'Hola':
  echo exec ($pepe22);
  sleep(2);
  $response="¿Qué tal estás?"
  sendMessage($chatId, $response);
  $response="Mi nombre es Espinete 🦔, un mito televiso de los '80"
  sendMessage($chatId, $response);
  $response="Soy un experto en ciberseguridad, especialmente en el campo de la criptografía 🏴‍☠️🐉. "
  sendMessage($chatId, $response);

    case '/ayuda':
        $response = "Tranquilo, estoy contigo.";
        sendMessage($chatId, $response);
        break;
    case 'Lucía':
        $response = "eres muuuuy guapa :kissing_heart:     u'\U000026C4'";
        $keyboard = '["Gracias"],["Pos Ok"]';
        sendMessage($chatId, $response,$keyboard);
        break;
    case 'fotos':
      $response="fotooooooooooooooooooos";



        sendMessage($chatId, $response);
  echo exec($pepe2);

//$pepe2 = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/cartel1.jpg" -F caption="TheImage" > /dev/null &';
$pepe3 = 'curl -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendMessage" -d "chat_id='.$chatId.'&text=%F0%9F%98%80&parse_modwarninge=Markdown"';
echo exec ($pepe3); 
 break;
  
 case '%F0%9F%98%B7&parse_modwarninge=Markdown':
  sendMessage($chatId, "BIEEEEEN");
   break;
 case '☎️':
  sendmessage ($chatId, "telefoooon");
  break;
  
   case '%F0%9F%98%B7':
  sendMessage($chatId, "BIEEEEEN");
   break;
    case '/noticias':
        getNoticias($chatId);
        break;
    case '/participar': case '/participar@VazCell_bot':
        getSorteos($chatId, $message, $userId, $firstname, $agg);
        break;
    case '/youtube':
        sendMessage($chatId, "Mi canal de YouTube es <a href='https://www.youtube.com/channel/UCGArCE3vmQkFpu_o_6axt1g'>SrVazquez</a>");
    break;
 
}
 
 
 
function sendMessage($chatId, $response, $keyboard = NULL){
    if (isset($keyboard)) {
        $teclado = '&reply_markup={"keyboard":['.$keyboard.'], "resize_keyboard":true, "one_time_keyboard":true}';
    }
    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response).$teclado;
    file_get_contents($url);
}
 

?>
