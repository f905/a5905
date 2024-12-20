<?php
date_default_timezone_set("Asia/Baghdad");

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
define('MADELINE_BRANCH', 'deprecated');
include 'madeline.php';
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
$settings['app_info']['api_id'] = 579315;
$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
$MadelineProto = new \danog\MadelineProto\API('bot.madeline', $settings);
$MadelineProto->start();
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => "/newbot"]);
sleep(2);
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => file_get_contents("nbot"),]);
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => " - The checker now running move bot",]);
$x = 0;
while(1){
$users = explode("\n",file_get_contents("bot"));
foreach($users as $user){
if($user != ""){
try{
$MadelineProto->messages->getPeerDialogs(['peers' => [$user], ]);
$x++;
}catch(\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
try{
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => $user]);
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "hello bro done move : @$user \n - acct : $x"]);
$data = str_replace("\n".$user,"", file_get_contents("bot"));
file_put_contents("bot", $data);
}catch(Exception $e){
echo $e->getMessage();
if($e->getMessage() == "The provided username is not valid"){
}elseif(preg_match('/FLOOD_WAIT_(.*)/i', $e->getMessage())){
$seconds = str_replace('FLOOD_WAIT_', '', $e->getMessage());
sleep($seconds);
}elseif($e->getMessage() == "USERNAME_OCCUPIED"){
$data = str_replace("\n".$user,"", file_get_contents("bot"));
file_put_contents("bot", $data);
}elseif($e->getMessage() == "CHANNELS_ADMIN_PUBLIC_TOO_MUCH"){
$data = str_replace("\n".$user,"", file_get_contents("bot"));
file_put_contents("bot", $data);
echo "1 • CHANNELS_ADMIN_PUBLIC_TOO_MUCH : @$user";
}else{
echo $e->getMessage();
}
}
}
}
}
}
