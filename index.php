<?php 
 
$botToken = "1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE";
 
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$modo = 0;
 
echo "que pasa neng";

$chatId = $update["message"]["chat"]["id"];
echo $chatId;
$pepe2 = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/cartel1.jpg" -F caption="TheImage" > /dev/null &';

echo $pepe2;

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
    case 'Lucía':
        $response = "eres muuuuy guapa :kissing_heart:     u'\U000026C4'";
        $keyboard = '["Gracias"],["Pos Ok"]';
        sendMessage($chatId, $response,$keyboard);
        break;
    case 'fotos':
      $response="fotooooooooooooooooooos";
  //echo exec($pepe2);
        sendMessage($chatId, $response);
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
 
function getNoticias($chatId){
 
    //include("simple_html_dom.php");
 
    $context = stream_context_create(array('http' =>  array('header' => 'Accept: application/xml')));
    $url = "http://www.europapress.es/rss/rss.aspx";
 
    $xmlstring = file_get_contents($url, false, $context);
 
    $xml = simplexml_load_string($xmlstring, "SimpleXMLElement", LIBXML_NOCDATA);
    $json = json_encode($xml);
    $array = json_decode($json, TRUE);
 
    for ($i=0; $i < 9; $i++) { 
        $titulos = $titulos."\n\n".$array['channel']['item'][$i]['title']."<a href='".$array['channel']['item'][$i]['link']."'> +info</a>";
    }
 
    sendMessage($chatId, $titulos);
 
 
 
}

function telegram_emoji($utf8emoji) {
    preg_replace_callback(
        '@\\\x([0-9a-fA-F]{2})@x',
        function ($captures) {
            return chr(hexdec($captures[1]));
        },
        $utf8emoji
    );

    return $utf8emoji;
}
 
?>
