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
$pumba  = 'curl -s -X POST "https://api.telegram.org/bot1378072574:AAHH6x_CubuHc7sjIRWDBaLsei8gZeyBkYE/sendPhoto?chat_id='.$chatId.'" -F photo="https://telegrambottetuan.herokuapp.com/animales/pumba.jpg" -F caption="amigo 🦁, hakuna matata" > /dev/null &';
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
     $response="Para comenzar el reto criptográfico, escribe el comando que utilizas para abrir una aplicación en Linux como superusuario o administrador...";
     sendMessage($chatId, $response);
   break;
   
case 'sudo':
case 'Sudo':
case 'SUDO':
case 'SUDO SU':
case 'sudo su':
case 'Sudo su':
       $response="Ahora te realizaré 5️⃣ preguntas más para que posteriormente utilices la primera letra de cada respuesta para obtener el nombre de un código de cifrado";
       sendMessage($chatId, $response);
       sleep(4);        
       $response="🧑🏽‍💻";
       sendMessage($chatId, $response);
       sleep(2);
       
       $response="1. Primer dígito de la IP del nombre de dominio elforocofrade.es";
       sendMessage($chatId, $response);
  break;  
  
 case 'ocho':
 case 'OCHO':
 case 'Ocho':
   $response="Ya tiene la letra O":
   sendMessage($chatId, $response);
      $response="🇴":

   sendMessage($chatId, $response);


  
  
  
  
  
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
         $response="¿En qué territorio o país actual vivían nuestros entrañables amigos?";
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
  $response="En ese título está escondido el número que marca el desplazamiento para descifrar el siguiente mensaje codificado en César...";
           sendMessage($chatId, $response);
  sleep (4);
   echo exec ($zidane);
    $response="¿Cuál es ese número?";
           sendMessage($chatId, $response);
  break;
  
 case '9':
  $response="Parece que ya dispones de toda la información para descifrar el siguiente mensaje 🔍,dímelo descifrado:";
  sendMessage($chatId, $response);
  $response="pccyb://kqc.th/3t5cJxK";
  sendMessage($chatId, $response);
  //https://bit.ly/2I73ekY
  break;
  
 case 'https://bit.ly/3l5tAoB':  
 case 'Https://bit.ly/3l5tAoB':
   case 'Https://bit.ly/3l5taob':
     case 'https://bit.ly/3l5taob':
   $response="Mira a ver que te sugiere esa web... https://bit.ly/3l5tAoB (Pista:mira el satélite)";
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
 $response = "vezvWmbhi-kdt";
  sendMessage($chatId, $response);
   $response = "🐉🐉🐉🐉🐉🐉";
  sendMessage($chatId, $response);
break;
   case 'kaliLinux-gpg':
    echo exec ($kali);
  sleep (3);
    $response = "Última prueba para ser un verdadero hacker como yo 🏴‍☠️ 😎";
    sendMessage($chatId, $response);
    sleep (1);
  $response = "A partir del comando gpg y en la distribución Kali Linux (Ubuntu también valdría), descifra el siguiente fichero...";
    sendMessage($chatId, $response);
sleep (1);
    $response = "¿Puedes abrirlo sin conocer la clave?🤔";
    sendMessage($chatId, $response);
  sleep (3);
  $response="Se rumorea que la clave es el año de nacimiento de Luis...";
      sendMessage($chatId, $response);
    $response="El fichero 👇👇";
      sendMessage($chatId, $response);
   $response="https://bit.ly/3iJoLgk";
        sendMessage($chatId, $response);
    break;
     case '/start':
break;
      default:
      $response="".$firstname.", hablas como Don Pimpón";
        sendMessage($chatId, $response);
      $response="No entiendo nada";
        sendMessage($chatId, $response);

}
 
 
 
function sendMessage($chatId, $response, $keyboard = NULL){
    if (isset($keyboard)) {
        $teclado = '&reply_markup={"keyboard":['.$keyboard.'], "resize_keyboard":true, "one_time_keyboard":true}';
    }
    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response).$teclado;
    file_get_contents($url);
}
 

?>
