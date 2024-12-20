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
function Channel(){
    
$settings['app_info']['api_id'] = 579315;
$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
$MadelineProto = new \danog\MadelineProto\API('b.madeline', $settings);
$MadelineProto->start();
$info = json_decode(file_get_contents('info.json'),true);
$num = $info["number2"];
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "• Running Now Checker : ❲ 2 ❳ ٫،!",]);

$x=0;
$updates = $MadelineProto->channels->createChannel(['broadcast' => true,'megagroup' => false,'title' => file_get_contents("name"), ]);
$chat_mack = $updates['updates'][1];

while(1){
    $info = json_decode(file_get_contents('in.json'),true);
$info["loop2"] = $x;
file_put_contents('in.json', json_encode($info));
    $users = explode("\n",file_get_contents("u2"));
    foreach($users as $user){
        if($user != ""){
            try{
            	$MadelineProto->messages->getPeerDialogs(['peers' => [$user]]);
                        	$x++;
            } catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                    try{
                        $MadelineProto->channels->updateUsername(['channel' => $chat_mack, 'username' => $user]);
                        
                        $ch = file_get_contents("ch");
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "- New UserName : @$user\n- loops online : $x\n-------------------------\n• Channel : @oBooo ."]);
                        $MadelineProto->messages->sendMessage(['peer' => $chat_mack, 'message' => "- New UserName : @$user\n- loops online : $x\n-------------------------\n• Channel : @oBooo ."]);
                        $data = str_replace("\n".$user,"", file_get_contents("u2"));
                        file_put_contents("u2", $data);
                        $updates = $MadelineProto->channels->createChannel(['broadcast' => true,'megagroup' => false,'title' => file_get_contents("name"), ]);
                        $chat_mack = $updates['updates'][1];
                    }catch(Exception $e){
                        echo $e->getMessage();
                        if($e->getMessage() == "The provided username is not valid"){
                            $data = str_replace("\n".$user,"", file_get_contents("u2"));
                            file_put_contents("u2", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 • This username is (banned/smaller than 5) i delete it from u2 list : @$user ",]);
                        }elseif(preg_match('/FLOOD_WAIT_(.*)/i', $e->getMessage())){
                            $seconds = str_replace('FLOOD_WAIT_', '', $e->getMessage());
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 •  I m sleeping : $seconds ",]);
                            sleep($seconds);
                        }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                            $data = str_replace("\n".$user,"", file_get_contents("u2"));
                            file_put_contents("u2", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 •  could not save it : @$user",]);
                        }elseif($e->getMessage() == "CHANNELS_ADMIN_PUBLIC_TOO_MUCH"){
                             $data = str_replace("\n".$user,"", file_get_contents("u2"));
                            file_put_contents("u2", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 • CHANNELS_ADMIN_PUBLIC_TOO_MUCH : @$user",]);
                          
                        }else{
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "2 • ERROR - ".$e->getMessage()
]);exit;
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "delet";file_put_contents('info.json', json_encode($info));
                        }

  
                    }
	        }
        }
    }
}
}

function Account(){
$settings['app_info']['api_id'] = 579315;
$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
$MadelineProto = new \danog\MadelineProto\API('b.madeline', $settings);
$MadelineProto->start();
$info = json_decode(file_get_contents('info.json'),true);
$num = $info["number2"];
$x= 0;
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "• Running Now Checker : ❲ 2 ❳ ٫،!",]);
while(1){
$info = json_decode(file_get_contents('in.json'),true);
$info["loop2"] = $x;
file_put_contents('in.json', json_encode($info));
    $users = explode("\n",file_get_contents("u2"));
    foreach($users as $user){
        if($user != ""){
            try{
            	$MadelineProto->messages->getPeerDialogs(['peers' => [$user], ]);
            	            	$x++;
            } catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                    try{
                        $MadelineProto->account->updateUsername(['username'=>$user]);
                        $ch = file_get_contents("ch");
bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "- New UserName : @$user\n- loops online : $x\n-------------------------\n• Channel : @oBooo ."]);
                        $data = str_replace("\n".$user,"", file_get_contents("u2"));
                        file_put_contents("u2", $data);
                            }catch(Exception $e){
                        echo $e->getMessage();
                        if($e->getMessage() == "The provided username is not valid"){
                            $data = str_replace("\n".$user,"", file_get_contents("u2"));
                            file_put_contents("u2", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 • This username is (banned/smaller than 5) i delete it from u2 list : @$user ",]);
                        }elseif(preg_match('/FLOOD_WAIT_(.*)/i', $e->getMessage())){
                            $seconds = str_replace('FLOOD_WAIT_', '', $e->getMessage());
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 •  I m sleeping : $seconds ",]);
                            sleep($seconds);
                        }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                            $data = str_replace("\n".$user,"", file_get_contents("u2"));
                            file_put_contents("u2", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 •  could not save it : @$user",]);
                        }elseif($e->getMessage() == "CHANNELS_ADMIN_PUBLIC_TOO_MUCH"){
                             $data = str_replace("\n".$user,"", file_get_contents("u2"));
                            file_put_contents("u2", $data);
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "2 • CHANNELS_ADMIN_PUBLIC_TOO_MUCH : @$user",]);
                          
                        }else{
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "2 • ERROR - ".$e->getMessage()
]);exit;
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "delet";file_put_contents('info.json', json_encode($info));
                        }

  
                    }
	        }
        }
    }
}
}

$type = file_get_contents("type2");

if($type == "c"){
    Channel();
}
if($type == "a"){
    Account();
}
