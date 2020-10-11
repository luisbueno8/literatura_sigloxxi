<?php 
 echo "TODO CORRECTO";
$botToken = "1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE";
 
$website = "https://api.telegram.org/bot".$botToken;
 
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$modo = 0;
 


$chatId = $update["message"]["chat"]["id"];

$pepe2 = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/cartel1.jpg" -F caption="TheImage" > /dev/null &';

$espi_inicio2 = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/espi2.jpeg" -F caption="Y amigo de Don Pimpón 💜" > /dev/null &';
$img_asterix  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/asterix.jpg" -F caption="Asterix y Obelix" > /dev/null &';
$aldea  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/lupaasterix-1200x813.jpg" -F caption="El enemigo de la aldea gala nos permitirá conocer el siguiente códido de codificación..." > /dev/null &';
$julio  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/julio.jpeg" -F caption="CRACK" > /dev/null &';
$zidane  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/AXry.gif" -F caption="CIDAN, segundos antes de que metiera gol" > /dev/null &';
$galletas  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/galletas.png" -F caption=" " > /dev/null &';
$pumba  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/pumba.jpg" -F caption="🦁, amigo".$firstname.", hakuna matata" > /dev/null &';
$kali  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/kali.jpg" -F caption="", hakuna matata" > /dev/null &';



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
   case 'HOLA':
     $response="¿Qué tal estás?";
     sleep (3);
     sendMessage($chatId, $response);
     $response="Mi nombre es Espinete 🦔, un mito televiso de los '80";
     sendMessage($chatId, $response);
          sleep(3);
     $response="Soy un experto en ciberseguridad, especialmente en el campo de la criptografía 🏴‍☠️🐉";
     sendMessage($chatId, $response);
       sleep (3);
     echo exec ($espi_inicio2);
       sleep (3);
     $response="Para comenzar el reto criptográfico, escribe el comando que utilizas en Linux para loguearte como superusuario...";
     sendMessage($chatId, $response);
   break;
   
 case 'sudo':
 case 'Sudo':
 case 'SUDO':
        $response="Obtiene las iniciales de las siguientes 5️⃣ respuestas para obtener el nombre del código de cifrado";
       sendMessage($chatId, $response);

        $response="No tienen porque estar en orden...";
       sendMessage($chatId, $response);
        $response="🧑🏽‍💻";
       sendMessage($chatId, $response);
       sleep(5);
       
       $response="1. Primer dígito de la IP de la web del IES Tetuán de las Victorias";
       sendMessage($chatId, $response);
       sleep (4);
       $response="2. El nombre de dominio que corresponde a la IP 188. 165. 131. 65";
       sendMessage($chatId, $response);
       sleep (4);
       $response="3. El DNI se puede encontrar en este formato";
       sendMessage($chatId, $response);
       sleep (4);
       $response="4. A la dirección física de un ordenador se la llama de esta forma...";
       sendMessage($chatId, $response);
       sleep (4);
       $response="5. Posibilidad de que una amenaza se convierta en un ataque.";
       sendMessage($chatId, $response);
       sleep (4);
       $response="¿Cuál es el cifrado utilizado?";
       sendMessage($chatId, $response);
       $response="🤔";
       sendMessage($chatId, $response);
 
 break;  
  
 case 'morse':
 case 'MORSE':
 case 'Morse':
       $response="A este ritmo tu profe Luis va a estar orgulloso de tí";
       sendMessage($chatId, $response);
       sleep (1);
       $response="El siguiente mensaje está cifrado en Morse, obtiene la clave secreta 🔑...";
       sendMessage($chatId, $response);
       sleep (1);
       $response=" .- ... - . .-. .. -..- .---- --- -... . .-.. .. -..- .---- .. -.. . ..-. .. -..- .-.-. ";
       sendMessage($chatId, $response);
  break;
  
 case 'asterix1obelix1idefix':
   case 'Asterix1obelix1idefix':
         echo exec ($img_asterix);
         sleep (2);
         $response="¿En qué territorio actual vivían nuestros entrañables amigos?";
         sendMessage($chatId, $response);
  break;
  
   case 'Francia':
     case 'francia':
         $response="Necesito una respuesta un poco más gráfica...😷🤥🧐🙃";
       sendMessage($chatId, $response);
  break;  

 case '🇫🇷':
         $response="Allons enfants de la Patrie. Le jour de gloire est arrivé! 🎵 🎵";  
       sendMessage($chatId, $response);
         sleep (1);
       $response="Vas por el buen camino compañero, a este ritmo cambiarán el nombre del IES Tetuán de las Victorias a IES ".$firstname."";  
       sendMessage($chatId, $response);
         $response="👏";  
       sendMessage($chatId, $response); 
       sleep (5);
     echo exec ($aldea);
  break;
  
   case 'César':
     case 'Cesar':
     case 'cesar':
       case 'césar':
   echo exec ($julio);
       sleep (5);
       $response="En 2002, Zinedine Cidan metió el gol que permitió al Real Madrid ganar la Champions League";
       sendMessage($chatId, $response);
       $response="🏆";
         sendMessage($chatId, $response);
    sleep (2);
  $response="En ese título está escondido el desplazamiento para descifrar el siguiente mensaje codificado en César...";
           sendMessage($chatId, $response);
  sleep (4);
   echo exec ($zidane);
  break;
  
 case '9':
  $response="Parece que ya dispones de toda la información para descifrar el siguiente mensaje 🔍:";
  sendMessage($chatId, $response);
  $response="pccyb://kqc.th/2Q73nsH";
  sendMessage($chatId, $response);
  //https://bit.ly/2I73ekY
  break;
  
 case 'https://bit.ly/2I73ekY':
 case 'Https://bit.ly/2I73ekY':
   case 'Https://bit.ly/2i73eky':
     case 'https://bit.ly/2i73eky':
   $response="Mira a ver que te sugiere esa web... https://bit.ly/2I73ekY";
   sendMessage($chatId, $response);
   echo exec ($galletas);
   break;
  
  
case 'León':
case 'Leon':
case 'león':
case 'leon':
  echo exec ($pumba);
  sleep(3);
  $response = "Con la clave 🦁, descifra el siguiente código Vigènere:";
  sendMessage($chatId, $response);
 $response = "vezv wmbhi-kdt";
  sendMessage($chatId, $response);
   $response = "🐉🐉🐉🐉🐉🐉";
  sendMessage($chatId, $response);
break;
  
 case 'kali linux-gpg':
    echo exec ($kali);
  sleep (3);
  $response ="A partir del comando y la distribución que se indica, descifra el siguiente fichero...";
    sendMessage($chatId, $response);
sleep (1);
  $response="Se rumorea que la clave es el año de nacimiento de Luis...";
      sendMessage($chatId, $response);

  break;

  
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
 default:
  echo $command;
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
