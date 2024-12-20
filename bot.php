<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
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
function getupdates($up_id) {
$get = bot('getupdates', ['offset' => $up_id]);
return end($get['result']);
}
$botuser = "@" . bot('getme', ['bot']) ["result"]["username"];
file_put_contents("_ad.txt", $botuser);
function stats($nn) {
	$st = "";
	$x = shell_exec("pm2 show $nn");
	if (preg_match("/online/", $x)) {
		$st = "run";
	}
	else {
		$st = "stop";
	}
	return $st;
}
function states($g) {
$st = "";
$x = shell_exec("pm2 show $g");
if(preg_match("/online/", $x)) {
$st = "run";
}else{
$st = "stop";
}
return $st;
}
function countUsers($u = "2", $t = "2") {
if ($t == "2") {
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  • ❲ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
if ($t == "1") {
$users = explode("\n", $u);
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  • ❲ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
}
 $last_up = $last_up;
function ph($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("a.madeline");
	unlink("a.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('a.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 1 ❳ ،\n• Send Code Phone Now ،!\n• CHEKER ~ \n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 1 ❳ ،\nI can't Login to Account"]);
		return false;
shell_exec("php step.php");	}
	
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 1 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 1 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 1 ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 1 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
$last_up = $last_up;
function p2($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("b.madeline");
	unlink("b.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('b.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 2 ❳ ،\n• Send Code Phone Now ،!\n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 2 ❳ ،\nI can't Login to Account"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 2 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 2 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 2 ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 2 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function DH($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("c.madeline");
	unlink("c.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('c.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 3 ❳ ،\n• Send Code Phone Now ،!\n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 3 ❳ ،\nI can't Login to Account"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 3 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 3 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 3 ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 3 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p4($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("d.madeline");
	unlink("d.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('d.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 4 ❳ ،\n• Send Code Phone Now ،!\n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 4 ❳ ،\nI can't Login to Account"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 4 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 4 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 4 ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 4 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p5($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("e.madeline");
	unlink("e.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('e.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 5 ❳ ،\n• Send Code Phone Now ،!\n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ 5 ❳ ،\nI can't Login to Account"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 5 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 5 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 5 ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ 5 ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p7($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("bot.madeline");
	unlink("bot.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('bot.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ bot ❳ ،\n• Send Code Phone Now ،!\n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ bot ❳ ،\nI can't Login to Account"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ bot ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ bot ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ bot ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ bot ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
 $last_up = $last_up;
function p6($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "Loading login ."]);
	if (!file_exists('madeline.php')) {
		copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
	}
	define('MADELINE_BRANCH', 'deprecated');
	include 'madeline.php';
	unlink("Band.madeline");
	unlink("Band.madeline.lock");
	$settings['app_info']['api_id'] = 579315;
	$settings['app_info']['api_hash'] = '4ace69ed2f78cec268dc7483fd3d3424';
	$MadelineProto = new \danog\MadelineProto\API('Band.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["band"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ Band ❳ ،\n• Send Code Phone Now ،!\n- Example : ❲ 07894 ❳ ٫،!"]);
		$step = 1;
	}
	catch(Exception $e) {
		Band('sendMessage', ['chat_id' => $group, 'text' => "- is the checker number ❲ Band ❳ ،\nI can't Login to Account"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ Band ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete_2fa_login($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ Band ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->complete_phone_login($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ Band ❳ ،\n- Send Account 2 password ،!\n- Example : ❲ MOHAMMED ❳ ٫،!", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "- is the checker number ❲ Band ❳ ،\n• Done Login The Account ،!\n You can run the checker"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(1);
}
}
$step = "";
function run($update) {
global $step;
$nn = bot('getme', ['bot']) ["result"]["username"];
$message = $update['message'];
$userID = $message['from']['id'];
$chat_id = $message['chat']['id'];
$name = $message['from']['first_name'];
$text = $message['text'];
$date = $update['callback_query']['data'];
$cq = $update['callback_query'];
$data = $cq['data'];
$message_id = $cq['message']['message_id'];
$chat_id2 = $cq['message']['chat']['id'];
$group = file_get_contents("ID");
$url = "https://yyryy1.tk/iq.php";
$g = file_get_contents($url);
$js = json_decode($g);
$da = $js->date;
$time = $js->time;
$day = $js->day;
$month = $js->month;
$ad = array("$group");
if($text == "/start" and !in_array($chat_id,$ad) and $chat_id != $group = null){
bot('sendmessage',[ 
'chat_id'=>$chat_id,  
'text'=>" 
- ᴡᴇʟᴄᴏᴍᴇ [$name](tg://user?id=$chat_id) 
ᴛᴏ ᴛʜᴇ ʙᴏᴛ ᴄʜᴇᴄᴋᴇʀ ғᴏʀ.  
ᴛʜᴇ ᴅᴇᴠᴇʟᴏᴘᴇʀ.ᴛᴏ ʙᴜʏ ʏᴏᴜʀ ᴏᴡɴ.  
ʙᴏᴛ ᴄᴏɴᴛᴀᴄᴛ ʏᴏᴜʀ ᴅᴇᴠᴇʟᴏᴘᴇʀ .
ᴀᴄᴄᴏᴜɴᴛs ᴛᴏ ᴄʜᴀɴɴᴇʟs.
• ʙʟᴏᴄᴋᴇᴅ ʙᴏᴛ : @ooaBot ،!
",'parse_mode' => "MarkDown", 'disable_web_page_preview' => true,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "• sofe AL Jbbour.'", 'url' => "https://t.me/oaooo"]],
[['text' => "• CHECKER Channel.'", 'url' => "https://t.me/OBOOO"]],
]]) 
]);
}

if ($chat_id == $group) {
if ($text) {
if ($text == "/start") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "Welcome, dear [$name](tg://user?id=$chat_id) soon start",
'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Add Users"],["text" =>"Delet User"]],
[["text" =>"checkers loops"],["text" =>"info Num"]],
[["text" =>"Rest All"],["text" =>"states"]],
[["text" =>"Running"],["text" =>"Stoped"]],
[["text" => "EDit"],["text" =>"info"]],
[["text" =>"clear list"],["text" =>"Show list"]],
[["text" => "type Account"], ["text" => "type Channel"]],
[["text" =>"Run All"],["text" =>"Stop All"]],
[["text" =>"Pin All"]],
[["text" =>"Delet Number"],["text" =>"Add Number"]]], ]) 
])->result->message_id;
sleep(2);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
]);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Welcome, dear developer .\nsofe AL Jbbour. | ~ @oaooo .\nin your bot  CHECKER You can use it .\nfrom the . following . orders .\nClick on the version you want ..\n- Return checker /Return",
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"Move bot",'callback_data'=>"bot"],['text'=>"start Band",'callback_data'=>"Band"]],
]]) 
]);
}

if($text == "states") {
$a = states("a");
$b = states("b");
$c = states("c");
$d = states("d");
$e = states("e");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- CHEKERS states All . 
1 • CHEKER states : $a .
2 • CHEKER states : $b .
3 • CHEKER states : $c .
4 • CHEKER states : $d .
5 • CHEKER states : $e .",
]);}
if ($text == "Checker order") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Welcome, dear developer .\nsofe AL Jbbour. | ~ @oaooo .\nin your bot  CHECKER You can use it .\nfrom the . following . orders .\nClick on the version you want ..\n- Return checker /Return",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Add Users"],["text" =>"Delet User"]],
[["text" =>"checkers loops"],["text" =>"info Num"]],
[["text" =>"Rest All"],["text" =>"states"]],
[["text" =>"Running"],["text" =>"Stoped"]],
[["text" => "EDit"],["text" =>"info"]],
[["text" =>"clear list"],["text" =>"Show list"]],
[["text" => "type Account"], ["text" => "type Channel"]],
[["text" =>"Run All"],["text" =>"Stop All"]],
[["text" =>"Pin All"]],
[["text" =>"Delet Number"],["text" =>"Add Number"]]], ]) ]);
}
if ($text == "Back") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Welcome, dear developer .\nsofe AL Jbbour. | ~ @oaooo .\nin your bot  CHECKER You can use it .\nfrom the . following . orders .\nClick on the version you want ..\n- Return checker /Return", 'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"Add Users"],["text" =>"Delet User"]],
[["text" =>"checkers loops"],["text" =>"info Num"]],
[["text" =>"Rest All"],["text" =>"states"]],
[["text" =>"Running"],["text" =>"Stoped"]],
[["text" => "EDit"],["text" =>"info"]],
[["text" =>"clear list"],["text" =>"Show list"]],
[["text" => "type Account"], ["text" => "type Channel"]],
[["text" =>"Run All"],["text" =>"Stop All"]],
[["text" =>"Pin All"]],
[["text" =>"Delet Number"],["text" =>"Add Number"]]], ]) ]);
}
if ($step == "n") {
file_put_contents("name", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Save channel name",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "bot") {
file_put_contents("nbot", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Save bot name",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]])]);
$step = "";
}
if ($step == "a") {
file_put_contents("about", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Save channel about",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "r") {
file_put_contents("ch", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Done Save msg rights",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($text == "channel name") {
$step = "n";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Now send me the channel name",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
if ($text == "channel about") {
$step = "a";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Now send me the channel about",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
if ($text == "set msg rights") {
$step = "r";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Now send me the msg rights",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
if ($text == "EDit") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "• Choose the appropriate button below .،!", 'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [[["text" => "channel name"],["text" => "channel about"]], [["text" => "set msg rights"],["text" => "Back"]], ], ]) ]);
}

if ($text == "Pin All") {
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,'text'=>"- Send List ➛ pin user All ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'pinall');
shell_exec("pm2 stop a.php");
shell_exec("pm2 stop b.php");
shell_exec("pm2 stop c.php");
shell_exec("pm2 stop d.php");
shell_exec("pm2 stop e.php");
unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
}
if ($text == "Rest All") {
shell_exec("pm2 stop a.php");
shell_exec("pm2 stop b.php");
shell_exec("pm2 stop c.php");
shell_exec("pm2 stop d.php");
shell_exec("pm2 stop e.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "• Done restoration all checkers .،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 start a.php");
shell_exec("pm2 start b.php");
shell_exec("pm2 start c.php");
shell_exec("pm2 start d.php");
shell_exec("pm2 start e.php");
}
if ($text == "Run All") {
shell_exec("pm2 start a.php");
shell_exec("pm2 start b.php");
shell_exec("pm2 start c.php");
shell_exec("pm2 start d.php");
shell_exec("pm2 start e.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "• Done run all checkers .،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
}
if ($text == "Stop All") {
shell_exec("pm2 stop a.php");
shell_exec("pm2 stop b.php");
shell_exec("pm2 stop c.php");
shell_exec("pm2 stop d.php");
shell_exec("pm2 stop e.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "• Done stop all checkers .،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users'));
if(preg_match("/@+/", $text)){
if($mode == 'pinall'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users", "\n" . $user, FILE_APPEND);
file_put_contents("u2", "\n" . $user, FILE_APPEND);
file_put_contents("u3", "\n" . $user, FILE_APPEND);
file_put_contents("u4", "\n" . $user, FILE_APPEND);
file_put_contents("u5", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Done Pin All.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 start a.php");
shell_exec("pm2 start b.php");
shell_exec("pm2 start c.php");
shell_exec("pm2 start d.php");
shell_exec("pm2 start e.php");
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users"));
file_put_contents("users", $data);
file_put_contents("users",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Delet User List 1 :@$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
} elseif($mode == 'addL'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("users"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("users", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Added Users To List.!1 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u2'));
if(preg_match("/@+/", $text)){
if($mode == 'Pi0n'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u2", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"- Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin2'){
echo 'Unpin2';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u2"));
file_put_contents("u2", $data);
file_put_contents("u2",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u2"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad2'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u2"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u2", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Added Users To List.!2 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u3'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u3", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin3'){
echo 'Unpin3';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u3"));
file_put_contents("u3", $data);
file_put_contents("u3",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u3"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Delet User List 3 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad3'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u3"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u3", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Added Users To List.!3 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u4'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u4", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin4'){
echo 'Unpin4';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u4"));
file_put_contents("u4", $data);
file_put_contents("u4",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u4"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Delet User List 4 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad4'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u4"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u4", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Added Users To List.!4 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u5'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u5", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user : Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin5'){
echo 'Unpin5';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u5"));
file_put_contents("u5", $data);
file_put_contents("u5",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u5"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Delet User List 5 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad5'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u5"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u5", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "- Done Added Users To List.!5 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('Band'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("Band", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unband'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("Band"));
file_put_contents("Band", $data);
file_put_contents("Band",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("Band"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "- Done deleted user from List Band : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adband'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("Band"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("Band", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "- Done added users to List band \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}
////
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('bot'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("bot", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unbot'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("bot"));
file_put_contents("bot", $data);
file_put_contents("bot",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("bot"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "- Done deleted user from List bot : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adbot'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("bot"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("bot", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "- Done added users to List bot \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}}
if ($chat_id == $group) {
if($text == "clear list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• cl List ➛ 1",'callback_data'=>"CLEAR1"],['text'=>"• cl List ➛ 2",'callback_data'=>"CLEAR2"]],
[['text'=>"• cl List ➛ 3",'callback_data'=>"CLEAR3"],['text'=>"• cl List ➛ 4",'callback_data'=>"CLEAR4"]],
[['text'=>"• cl List ➛ 5",'callback_data'=>"CLEAR5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
$info = json_decode(file_get_contents('info.json'),true);
$number1 = $info["number1"];
$number2 = $info["number2"];
$number3 = $info["number3"];
$number4 = $info["number4"];
$number5 = $info["number5"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
if ($chat_id == $group) {
if($text == "info Num"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• informations Numbers ،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number1 : $num1",'callback_data'=>"#Back"],['text'=>"$number2 : $num2",'callback_data'=>"#Back"]],
[['text'=>"$number3 : $num3",'callback_data'=>"#Back"],['text'=>"$number4 : $num4",'callback_data'=>"#Back"]],
[['text'=>"$number5 : $num5",'callback_data'=>"#Back"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "#Bc"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' => "Welcome, dear developer .\nsofe AL Jbbour. | ~ @oaooo .\nin your bot  CHECKER You can use it .\nfrom the . following . orders .\nClick on the version you want ..\n- Return checker /Return",
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"Move bot",'callback_data'=>"bot"],['text'=>"start Band",'callback_data'=>"Band"]],
]]) 
]);
unlink('mode');
}
if($data == "Band"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"• the loops online checkers telegram .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"add",'callback_data'=>"M1"],['text'=>"Delet",'callback_data'=>"M2"]],
[['text'=>"Stop",'callback_data'=>"M3"],['text'=>"Run",'callback_data'=>"M4"]],
[['text'=>"Number",'callback_data'=>"M6"]],
[['text'=>"Users",'callback_data'=>"MM"],['text'=>"Clean",'callback_data'=>"M8"]],
]
])]);
}
///////////////////////////////////////////
if($data == "bot"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"• the loops online checkers telegram .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"add",'callback_data'=>"O1"],['text'=>"Delet",'callback_data'=>"O2"]],
[['text'=>"Stop",'callback_data'=>"O3"],['text'=>"Run",'callback_data'=>"O4"]],
[['text'=>"Name bot",'callback_data'=>"O5"],['text'=>"Number",'callback_data'=>"O6"]],
[['text'=>"Users",'callback_data'=>"MM"],['text'=>"Clean",'callback_data'=>"O8"]],
]
])]);
}
if($data == "#bot"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"• the loops online checkers telegram .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"add",'callback_data'=>"O1"],['text'=>"Delet",'callback_data'=>"O2"]],
[['text'=>"Stop",'callback_data'=>"O3"],['text'=>"Run",'callback_data'=>"O4"]],
[['text'=>"Name bot",'callback_data'=>"O5"],['text'=>"Number",'callback_data'=>"O6"]],
[['text'=>"Users",'callback_data'=>"MM"],['text'=>"Clean",'callback_data'=>"O8"]],
]
])]);
}
if($data == "CLEAR1"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Username's List ➛ 1 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("users", "");
}
if($data == "CLEAR2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Username's List ➛ 2 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u2", "");
}
if($data == "CLEAR3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Username's List ➛ 3 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u3", "");
}
if($data == "CLEAR4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Username's List ➛ 4 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u4", "");
}
if($data == "CLEAR5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Username's List ➛ 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u5", "");
 
}
if ($chat_id == $group) {
if($text == "Show list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"•  Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• Show All ➛ 1",'callback_data'=>"1Show"],['text'=>"• Show All ➛ 2",'callback_data'=>"2Show"]],
[['text'=>"• Show All ➛ 3",'callback_data'=>"3Show"],['text'=>"• Show All ➛ 4",'callback_data'=>"4Show"]],
[['text'=>"• Show All ➛ 5",'callback_data'=>"5Show"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "1Show"){
if(file_exists("users")){
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List 1 ،!  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list 1",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "2Show"){
if(file_exists("u2")){
$users = explode("\n", file_get_contents("u2"));
$list2 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list2 = $list2 . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List 2،!  \n".$list2,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$list2 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list 2",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}}
if($data == "3Show"){
if(file_exists("u3")){
$users = explode("\n", file_get_contents("u3"));
$list3 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list3 = $list3 . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List 3 ،!  \n".$list3,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$list3 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list 3",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}}
if($data == "4Show"){
if(file_exists("u4")){
$users = explode("\n", file_get_contents("u4"));
$list4 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list4 = $list4 . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List 4،!  \n".$list4,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$list4 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list 4",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}}
if($data == "5Show"){
if(file_exists("u5")){
$users = explode("\n", file_get_contents("u5"));
$list5 = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list5 = $list5 . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List ،5!  \n".$list5,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
$list5 = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list 5 ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}}
if($data == "MM"){
if(file_exists("Band")){
$users = explode("\n", file_get_contents("Band"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List Band ،!  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list Band",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if($data == "M7"){
if(file_exists("bot")){
$users = explode("\n", file_get_contents("bot"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  • ❲ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" - The All Users List bot ،!  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>" No users in list bot",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Black",'callback_data'=>"#Bc"]],
]])]);
}}
if ($chat_id == $group) {
if($text == "Add Number"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• Add Number➛1",'callback_data'=>"ADD1"],['text'=>"• Add Number➛2",'callback_data'=>"ADD2"]],
[['text'=>"• Add Number➛3",'callback_data'=>"ADD3"],['text'=>"• Add Number➛4",'callback_data'=>"ADD4"]],
[['text'=>"• Add Number➛5",'callback_data'=>"ADD5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
if ($step == "ph") {
ph($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p2") {
p2($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "DH") {
DH($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p4") {
p4($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p5") {
p5($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p6") {
p6($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p7") {
p7($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if($data == "ADD1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- is the checker number ❲ 1 ❳ ،\n- Send You Number Phone ،!\n- Example : ❲ 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop a.php");
unlink("a.madeline");
unlink("a.madeline.lock");
$step = "ph";
}
if($data == "ADD2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- is the checker number ❲ 2 ❳ ،\n- Send You Number Phone ،!\n- Example : ❲ 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop b.php");
unlink("b.madeline");
unlink("b.madeline.lock");
$step = "p2";}
if($data == "ADD3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- is the checker number ❲ 3 ❳ ،\n- Send You Number Phone ،!\n- Example : ❲ 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop c.php");
unlink("c.madeline");
unlink("c.madeline.lock");
$step = "DH";}
if($data == "ADD4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- is the checker number ❲ 4 ❳ ،\n- Send You Number Phone ،!\n- Example : ❲ 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop d.php");
unlink("d.madeline");
unlink("d.madeline.lock");
$step = "p4";}
if($data == "ADD5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- is the checker number ❲ 5 ❳ ،\n- Send You Number Phone ،!\n- Example : ❲ 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]]) ]);
shell_exec("pm2 stop e.php");
unlink("e.madeline");
unlink("e.madeline.lock");
$step = "p5";
}
if($data == "M6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- is the checker number ❲ Band ❳ ،\n- Send You Number Phone ،!\n- Example : + 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop Band.php");
unlink("Band.madeline");
unlink("Band.madeline.lock");
$step = "p6";
}
if($data == "O6"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- is the checker number ❲ bot ❳ ،\n- Send You Number Phone ،!\n- Example : + 48732078694 ❳،!",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
unlink("bot.madeline");
unlink("bot.madeline.lock");
$step = "p7";
}
if ($chat_id == $group) {
if($text == "Delet Number"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• Del Number➛1",'callback_data'=>"1DL"],['text'=>"• Del Number➛2",'callback_data'=>"2DL"]],
[['text'=>"• Del Number➛3",'callback_data'=>"3DL"],['text'=>"• Del Number➛4",'callback_data'=>"4DL"]],
[['text'=>"• Del Number➛5",'callback_data'=>"5DL"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "1DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delet Number ➛ 1٫،",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop a.php");
unlink("a.madeline");
unlink("a.madeline.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "2DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delet Number ➛ 2٫،",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop b.php");
unlink("b.madeline");
unlink("b.madeline.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "3DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delet Number ➛ 3٫،",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop c.php");
unlink("c.madeline");
unlink("c.madeline.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "4DL"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delet Number ➛ 4٫،",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop d.php");
unlink("d.madeline");
unlink("d.madeline.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "No number";
file_put_contents('info.json', json_encode($info));
}
if($data == "5DL"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delet Number ➛ 5٫،",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop e.php");
unlink("e.madeline");
unlink("e.madeline.lock");
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "No number";
file_put_contents('info.json', json_encode($info));
 
}if ($chat_id == $group) {
if($text == "Stoped"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• Stoped ➛ 1",'callback_data'=>"STOP1"],['text'=>"• Stoped ➛ 2",'callback_data'=>"STOP2"]],
[['text'=>"• Stoped ➛ 3",'callback_data'=>"STOP3"],['text'=>"• Stoped ➛ 4",'callback_data'=>"STOP4"]],
[['text'=>"• Stoped ➛ 5",'callback_data'=>"STOP5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "STOP1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Stoped Checker ،- date start ( $da | $time ) \n- Checker  Stoped  List ➛  1 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop a.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Stoped Checker ،\n- date start ( $da | $time ) \n- Checker  Stoped  List ➛  2 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop b.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Stoped Checker ،\n- date start ( $da | $time ) \n- Checker  Stoped  List ➛  3 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop c.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP4"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Stoped Checker ،\n- date start ( $da | $time ) \n- Checker  Stoped  List ➛  4 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop d.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "STOP5"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Stoped Checker ،\n- date start ( $da | $time ) \n- Checker  Stoped  List ➛  5 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop e.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
}if ($chat_id == $group) {
if($text == "Running"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• Running ➛ 1",'callback_data'=>"1Run"],['text'=>"• Running ➛ 2",'callback_data'=>"2Run"]],
[['text'=>"• Running ➛ 3",'callback_data'=>"3Run"],['text'=>"• Running ➛ 4",'callback_data'=>"4Run"]],
[['text'=>"• Running ➛ 5",'callback_data'=>"5Run"],['text'=>"Back",'callback_data'=>"#Back"]],

]])]);
}}
if($data == "1Run"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- i'm Run Checker ،\n- date start ( $da | $time ) \n- Checker  Running  List ➛  1 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop a.php");
shell_exec("pm2 start a.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "2Run"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- i'm Run Checker ،\n- date start ( $da | $time ) \n- Checker  Running  List ➛  2 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop b.php");
shell_exec("pm2 start b.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "3Run"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- i'm Run Checker ،\n- date start ( $da | $time ) \n- Checker  Running  List ➛  3 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop c.php");
shell_exec("pm2 start c.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "4Run"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- i'm Run Checker ،\n- date start ( $da | $time ) \n- Checker  Running  List ➛  4 . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop d.php");
shell_exec("pm2 start d.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "5Run"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- i'm Run Checker ،\n- date start ( $da | $time ) \n- Checker  Running  List ➛  5 . " ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop e.php");
shell_exec("pm2 start e.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
 
}if ($chat_id == $group) {
if($text == "Add Users"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• List ➛ 1",'callback_data'=>"#1"],['text'=>"• List ➛ 2",'callback_data'=>"#2"]],
[['text'=>"• List ➛ 3",'callback_data'=>"#3"],['text'=>"• List ➛ 4",'callback_data'=>"#4"]],
[['text'=>"• List ➛ 5",'callback_data'=>"#5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}if ($chat_id == $group) {
if($text == "/Return"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Done Return .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
unlink('type');
unlink('type2');
unlink('type3');
unlink('type4');
unlink('type5');
unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
}}
if($data == "#1"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 1 To Add users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'addL');
}
if($data == "#2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 2 To Add users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad2');
}
if($data == "#3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 3 To Add users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad3');
}
if($data == "#4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 4 To Add users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad4');
}
if($data == "#5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 5 To Add users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'ad5');
}
$info = json_decode(file_get_contents('info.json'),true);
$S1 = explode("\n",file_get_contents("users"));
$S2 = explode("\n",file_get_contents("u2"));
$S3 = explode("\n",file_get_contents("u3"));
$S4 = explode("\n",file_get_contents("u4"));
$S5 = explode("\n",file_get_contents("u5"));
$Sum1 = count($S1)-1;
$Sum2 = count($S2)-1;
$Sum3 = count($S3)-1;
$Sum4 = count($S4)-1;
$Sum5 = count($S5)-1;
$F = $Sum1+$Sum2+$Sum3+$Sum4+$Sum5;
$info["USERS"] = "$F";
file_put_contents('info.json', json_encode($info));
$sum = $info["USERS"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
if ($data == "#Back") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text' => "Welcome, dear developer .\nsofe AL Jbbour. | ~ @oaooo .\nin your bot  CHECKER You can use it .\nfrom the . following . orders .\nClick on the version you want ..\n- Return checker /Return",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 • CHEKER : $num1",'callback_data'=>"#CH1"],['text'=>"2 • CHEKER : $num2",'callback_data'=>"#CH2"]],
[['text'=>"3 • CHEKER : $num3",'callback_data'=>"#CH3"],['text'=>"4 • CHEKER : $num4",'callback_data'=>"#CH4"]],
[['text'=>"5 • CHEKER : $num5",'callback_data'=>"#CH5"],['text'=>"USERS : ❲ $sum ❳",'callback_data'=>"#sum"]],
[['text'=>"📃 Sum All usernames .",'callback_data'=>"#sum"]],
]])]);
}
if($data == "#CH1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number1 : $num1",'callback_data'=>"#Back"],['text'=>"• S1 Users : ❲ $Sum1 ❳ ",'callback_data'=>"1Show"]],
[['text'=>"❲ RoN ❳",'callback_data'=>"1Run"],['text'=>"❲ Stop ❳",'callback_data'=>"STOP1"],['text'=>"❲ add ❳",'callback_data'=>"#1"],['text'=>"❲ Delet ❳",'callback_data'=>"1#"]],
[['text'=>"❲ List ❳ ",'callback_data'=>"1Show"],['text'=>"❲ clear ❳",'callback_data'=>"CLEAR1"],['text'=>"❲ change N ❳ ",'callback_data'=>"#Next1"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next1"]],
]])]);
}
if($data == "#Next1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD1"],
['text'=>"1Edit run",'callback_data'=>"#Edit1"]],
[['text'=>"❲ valuation.1 ❳",'callback_data'=>"#valuation1"],
['text'=>"« Back",'callback_data'=>"#CH1"]],]])]);
}
if($data == "#CH2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number2 : $num2",'callback_data'=>"#Back"],['text'=>"• S2 Users : ❲ $Sum2 ❳ ",'callback_data'=>"2Show"]],
[['text'=>"❲ RoN ❳",'callback_data'=>"2Run"],['text'=>"❲ Stop ❳",'callback_data'=>"STOP2"],['text'=>"❲ add ❳",'callback_data'=>"#2"],['text'=>"❲ Delet ❳",'callback_data'=>"2#"]],
[['text'=>"❲ List ❳ ",'callback_data'=>"2Show"],['text'=>"❲ clear ❳",'callback_data'=>"CLEAR2"],['text'=>"❲ change N ❳ ",'callback_data'=>"#Next2"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next2"]],
]])]);
}
if($data == "#Next2"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD2"],
['text'=>"2Edit run",'callback_data'=>"#Edit2"]],
[['text'=>"❲ valuation.2 ❳",'callback_data'=>"#valuation2"],
['text'=>"« Back",'callback_data'=>"#CH2"]],]])]);
}	
if($data == "#CH3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number3 : $num3",'callback_data'=>"#Back"],['text'=>"• S3 Users : ❲ $Sum3 ❳ ",'callback_data'=>"3Show"]],
[['text'=>"❲ RoN ❳",'callback_data'=>"3Run"],['text'=>"❲ Stop ❳",'callback_data'=>"STOP3"],['text'=>"❲ add ❳",'callback_data'=>"#3"],['text'=>"❲ Delet ❳",'callback_data'=>"3#"]],
[['text'=>"❲ List ❳ ",'callback_data'=>"3Show"],['text'=>"❲ clear ❳",'callback_data'=>"CLEAR3"],['text'=>"❲ change N ❳ ",'callback_data'=>"#Next3"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next3"]],
]])]);
}
if($data == "#Next3"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD3"],
['text'=>"3Edit run",'callback_data'=>"#Edit3"]],
[['text'=>"❲ valuation.3 ❳",'callback_data'=>"#valuation3"],
['text'=>"« Back",'callback_data'=>"#CH3"]],]])]);
}
if($data == "#CH4"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"$number4 : $num4",'callback_data'=>"#Back"],['text'=>"• S4 Users : ❲ $Sum4 ❳ ",'callback_data'=>"4Show"]],
[['text'=>"❲ RoN ❳",'callback_data'=>"4Run"],['text'=>"❲ Stop ❳",'callback_data'=>"STOP4"],['text'=>"❲ add ❳",'callback_data'=>"#4"],['text'=>"❲ Delet ❳",'callback_data'=>"4#"]],
[['text'=>"❲ List ❳ ",'callback_data'=>"4Show"],['text'=>"❲ clear ❳",'callback_data'=>"CLEAR4"],['text'=>"❲ change N ❳ ",'callback_data'=>"#Next4"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next4"]],
]])]);
}
if($data == "#Next4"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD4"],
['text'=>"4Edit run",'callback_data'=>"#Edit4"]],
[['text'=>"❲ valuation.4 ❳",'callback_data'=>"#valuation4"],
['text'=>"« Back",'callback_data'=>"#CH4"]],]])]);
}
if($data == "#CH5"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$number5 : $num5",'callback_data'=>"#Back"],['text'=>"• S5 Users : ❲ $Sum5 ❳ ",'callback_data'=>"5Show"]],
[['text'=>"❲ RoN ❳",'callback_data'=>"5Run"],['text'=>"❲ Stop ❳",'callback_data'=>"STOP5"],['text'=>"❲ add ❳",'callback_data'=>"#5"],['text'=>"❲ Delet ❳",'callback_data'=>"5#"]],
[['text'=>"❲ List ❳ ",'callback_data'=>"5Show"],['text'=>"❲ clear ❳",'callback_data'=>"CLEAR5"],['text'=>"❲ change N ❳ ",'callback_data'=>"#Next5"]],
[['text'=>"« Back",'callback_data'=>"#Back"],['text'=>" Next »",'callback_data'=>"#Next5"]],
]])]);
}
if($data == "#Next5"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• informations On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ change N ❳",'callback_data'=>"#ADD5"],
['text'=>"5Edit run",'callback_data'=>"#Edit5"]],
[['text'=>"❲ valuation.5 ❳",'callback_data'=>"#valuation5"],
['text'=>"« Back",'callback_data'=>"#CH5"]],]])]);
}
if($data == "#Edit1"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• 1Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH1"]],]])]);
file_put_contents('type', 'edit');
shell_exec("pm2 stop a.php");
shell_exec("pm2 start a.php");
}
if($data == "#Edit2"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• 2Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH2"]],]])]);
file_put_contents('type2', 'edit');
shell_exec("pm2 stop b.php");
shell_exec("pm2 start b.php");
}
if($data == "#Edit3"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• 3Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH3"]],]])]);
file_put_contents('type3', 'edit');
shell_exec("pm2 stop c.php");
shell_exec("pm2 start c.php");
}
if($data == "#Edit4"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• 4Done Edit tchecker and reply Run .✅", 'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH4"]],]])]);
file_put_contents('type4', 'edit');
shell_exec("pm2 stop d.php");
shell_exec("pm2 start d.php");
}
if($data == "#Edit5"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• 5Done Edit tchecker and reply Run .✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH5"]],]])]);
file_put_contents('type5', 'edit');
shell_exec("pm2 stop e.php");
shell_exec("pm2 start e.php"); 
}
$list = explode("\n", file_get_contents('https://bradbbgbb.000webhostapp.com/u2.txt'));
$u1 = $list[array_rand($list,1)];
$u2 = $list[array_rand($list,1)];
$u3 = $list[array_rand($list,1)];
$u4 = $list[array_rand($list,1)];
$u5 = $list[array_rand($list,1)];
$u6 = $list[array_rand($list,1)];
$u7 = $list[array_rand($list,1)];
$u8 = $list[array_rand($list,1)];
$u9 = $list[array_rand($list,1)];
$u10 = $list[array_rand($list,1)];

if($data == "#valuation1") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 1", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload1"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload1") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• Done • upload Valuation List : 1|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("users", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation2") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 2", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload2"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload2") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• Done • upload Valuation List : 2|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u2", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation3") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 3", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload3"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload3") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• Done • upload Valuation List : 3|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u3", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation4") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 4", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload4"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload2") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• Done • upload Valuation List : 4|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u4", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
if($data == "#valuation5") {
file_put_contents("Valuation","$u1
$u2
$u3
$u4
$u5
$u6
$u7
$u8
$u9
$u10");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>" - The Guess Usernames،!
• ❲ @$u1
• ❲ @$u2
• ❲ @$u3
• ❲ @$u4
• ❲ @$u5
• ❲ @$u6
• ❲ @$u7
• ❲ @$u8
• ❲ @$u9
• ❲ @$u10
• upload Valuation List : 5", 
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"upload",'callback_data'=>"#upload5"],['text'=>"Back",'callback_data'=>"#Back"]],]])]);
}
$us = file_get_contents('Valuation');
if ($data == "#upload5") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• Done • upload Valuation List : 5|✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Back"]],]])]);
file_put_contents("u5", trim("\n" . "$us",""),FILE_APPEND);
unlink('Valuation');
}
////////
if ($chat_id == $group) {
if($text == "Delet User"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• List ➛ 1",'callback_data'=>"1#"],['text'=>"• List ➛ 2",'callback_data'=>"2#"]],
[['text'=>"• List ➛ 3",'callback_data'=>"3#"],['text'=>"• List ➛ 4",'callback_data'=>"4#"]],
[['text'=>"• List ➛ 5",'callback_data'=>"5#"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "1#"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 1 To Pin On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH1"]],]])]);
file_put_contents('mode', 'Unpin');
}
if($data == "2#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 2 To Delet users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH2"]],]])]);
file_put_contents('mode', 'Unpin2');
}
if($data == "3#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 3 To Delet users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH3"]],]])]);
file_put_contents('mode', 'Unpin3');
}
if($data == "4#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 4 To Delet users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH4"]],]])]);
file_put_contents('mode', 'Unpin4');
}
if($data == "5#"){
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Send List ➛ 5 To Delet users On it.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#CH5"]],]])]);
file_put_contents('mode', 'Unpin5');
 
}if ($chat_id == $group) {
if($text == "info"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• info ➛ 1",'callback_data'=>"info1"],['text'=>"• info ➛ 2",'callback_data'=>"info2"]],
[['text'=>"• info ➛ 3",'callback_data'=>"info3"],['text'=>"• info ➛ 4",'callback_data'=>"info4"]],
[['text'=>"• info ➛ 5",'callback_data'=>"info5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "#info"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• info ➛ 1",'callback_data'=>"info1"],['text'=>"• info ➛ 2",'callback_data'=>"info2"]],
[['text'=>"• info ➛ 3",'callback_data'=>"info3"],['text'=>"• info ➛ 4",'callback_data'=>"info4"]],
[['text'=>"• info ➛ 5",'callback_data'=>"info5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
}
if($data == "info1"){
 $get = file_get_contents("type");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("ch");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• msg rights : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#info"]],]])]);
}
if($data == "info2"){
 $get = file_get_contents("type2");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("ch");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• msg rights : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#info"]],]])]);
}
if($data == "info3"){
 $get = file_get_contents("type3");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("ch");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• msg rights : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#info"]],]])]);
}
if($data == "info4"){
 $get = file_get_contents("type4");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("ch");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• msg rights : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#info"]],]])]);
}
if($data == "info5"){
 $get = file_get_contents("type5");
if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("ch");
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• type : $t\n• channel name : $n\n• channe about : $a\n• msg rights : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#info"]],]])]);
 
}
if($data == "#sum"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• S1 Users : ❲ $Sum1 ❳ ",'callback_data'=>"1Show"],['text'=>"• S2 Users : ❲ $Sum2 ❳ ",'callback_data'=>"2Show"]],
[['text'=>"• S3 Users : ❲ $Sum3 ❳ ",'callback_data'=>"3Show"],['text'=>"• S4 Users : ❲ $Sum4 ❳ ",'callback_data'=>"4Show"]],
[['text'=>"• S5 Users : ❲ $Sum5 ❳ ",'callback_data'=>"5Show"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
file_put_contents("z", $F);
}if ($chat_id == $group) {

if($text == "type Account"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• type AU ➛ 1",'callback_data'=>"UA1"],['text'=>"• type AU ➛ 2",'callback_data'=>"UA2"]],
[['text'=>"• type AU ➛ 3",'callback_data'=>"UA3"],['text'=>"• type AU ➛ 4",'callback_data'=>"UA4"]],
[['text'=>"• type AU ➛ 5",'callback_data'=>"UA5"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "UA1"){
$num1 = $info["num1"];
$type = file_get_contents("type");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Account",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 - type : Account",'callback_data'=>"#"],['text'=>"$num1",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#CH1"]],
]])]);
}else{
file_put_contents("type", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Account\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 - type : Account",'callback_data'=>"#"],['text'=>"$num1",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop a.php");
shell_exec("pm2 start a.php");
}
}
if($data == "UA2"){
$num1 = $info["num1"];
$type = file_get_contents("type2");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Account",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"2 - type : Account",'callback_data'=>"#"],['text'=>"$num2",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type2", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Account\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"2 - type : Account",'callback_data'=>"#"],['text'=>"$num2",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop b.php");
shell_exec("pm2 start b.php");
}
}
if($data == "UA3"){
$num1 = $info["num1"];
$type = file_get_contents("type3");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Account",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"3 - type : Account",'callback_data'=>"#"],['text'=>"$num3",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#CH5"]],
]])]);
}else{
file_put_contents("type3", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Account\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"3 - type : Account",'callback_data'=>"#"],['text'=>"$num3",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop c.php");
shell_exec("pm2 start c.php");
}
}
if($data == "UA4"){
$num1 = $info["num1"];
$type = file_get_contents("type4");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Account",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"4 - type : Account",'callback_data'=>"#"],['text'=>"$num4",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type4", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Account\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"4 - type : Account",'callback_data'=>"#"],['text'=>"$num4",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop d.php");
shell_exec("pm2 start d.php");
}
}
if($data == "UA5"){
$num1 = $info["num1"];
$type = file_get_contents("type5");
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Account",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"5 - type : Account",'callback_data'=>"#"],['text'=>"$num5",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type5", "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Account\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"5 - type : Account",'callback_data'=>"#"],['text'=>"$num5",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop e.php");
shell_exec("pm2 start e.php");
}}
if ($chat_id == $group) {

if($text == "type Channel"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"•  Choose the appropriate button below .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• type CN ➛ 1",'callback_data'=>"1CN"],['text'=>"• type CN ➛ 2",'callback_data'=>"2CN"]],
[['text'=>"• type CN ➛ 3",'callback_data'=>"3CN"],['text'=>"• type CN ➛ 4",'callback_data'=>"4CN"]],
[['text'=>"• type CN ➛ 5",'callback_data'=>"5CN"],['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}
$info = json_decode(file_get_contents('info.json'),true);
if($data == "1CN"){
$num1 = $info["num1"];
$type = file_get_contents("type");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Channel",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 - type : Channel",'callback_data'=>"#"],['text'=>"$num1",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type", "c");
$num1 = $info["num1"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Channel\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1 - type : Channel",'callback_data'=>"#"],['text'=>"$num1",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop a.php");
shell_exec("pm2 start a.php");
}
}
if($data == "2CN"){
$num2 = $info["num2"];
$type = file_get_contents("type2");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Channel",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"2 - type : Channel",'callback_data'=>"#"],['text'=>"$num2",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type2", "c");
$num2 = $info["num2"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Channel\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"2 - type : Channel",'callback_data'=>"#"],['text'=>"$num2",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop b.php");
shell_exec("pm2 start b.php");
}
}
if($data == "3CN"){
$num3 = $info["num3"];
$type = file_get_contents("type3");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Channel",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"3 - type : Channel",'callback_data'=>"#"],['text'=>"$num3",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type3", "c");
$num3 = $info["num3"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Channel\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"3 - type : Channel",'callback_data'=>"#"],['text'=>"$num3",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop c.php");
shell_exec("pm2 start c.php");
}
}
if($data == "4CN"){
$num4 = $info["num4"];
$type = file_get_contents("type4");
if ($type == "c") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Channel",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"4 - type : Channel",'callback_data'=>"#"],['text'=>"$num4",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type4", "c");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Channel\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"4 - type : Channel",'callback_data'=>"#"],['text'=>"$num4",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop d.php");
shell_exec("pm2 start d.php");
}
}
if($data == "5CN"){
	$num5 = $info["num5"];
$type = file_get_contents("type5");
if ($type == "ac") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"The type is Already Channel",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"5 - type : Channel",'callback_data'=>"#"],['text'=>"$num4",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}else{
file_put_contents("type5", "c");
$num5 = $info["num5"];
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "- Done change the type to Channel\nI will restart the checker",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"5 - type : Channel",'callback_data'=>"#"],['text'=>"$num5",'callback_data'=>"#Bl"]],
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop e.php");
shell_exec("pm2 start e.php");
}}
$in = json_decode(file_get_contents('in.json'),true);
$loop1 = $in["loop1"];
$loop2 = $in["loop2"];
$loop3 = $in["loop3"];
$loop4 = $in["loop4"];
$loop5 = $in["loop5"];
if ($chat_id == $group) {
if($text == 'checkers loops'){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"• the loops online checkers telegram .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1• loops : $loop1",'callback_data'=>"U"],['text'=>"2• loop : $loop2",'callback_data'=>"U"]],
[['text'=>"3• loop : $loop3",'callback_data'=>"U"],['text'=>"4• loop : $loop4",'callback_data'=>"U"]],
[['text'=>"5• loop : $loop5 ",'callback_data'=>"U"],['text'=>"Back",'callback_data'=>"#Back"]],
[['text'=>"🔁",'callback_data'=>"U"]],
]])]);
}}
if($data == "U"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"• the loops online checkers telegram .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1• loops : $loop1",'callback_data'=>"N"],['text'=>"2• loop : $loop2",'callback_data'=>"N"]],
[['text'=>"3• loop : $loop3",'callback_data'=>"N"],['text'=>"4• loop : $loop4",'callback_data'=>"N"]],
[['text'=>"5• loop : $loop5 ",'callback_data'=>"N"],['text'=>"Back",'callback_data'=>"#Back"]],
[['text'=>"🔁",'callback_data'=>"N"]],
]])]);
}
if($data == "N"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"• the loops online checkers telegram .،!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1• loops : $loop1",'callback_data'=>"U"],['text'=>"2• loop : $loop2",'callback_data'=>"U"]],
[['text'=>"3• loop : $loop3",'callback_data'=>"U"],['text'=>"4• loop : $loop4",'callback_data'=>"U"]],
[['text'=>"5• loop : $loop5 ",'callback_data'=>"U"],['text'=>"Back",'callback_data'=>"#Back"]],
[['text'=>"🔁",'callback_data'=>"U"]],
]])]);
}


if($data == "M1"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"- send banned users list :",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
file_put_contents('mode', 'adband');
}
if($data == "M2"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"- send banned users list ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
file_put_contents('mode', 'Unband');
}
if($data == "M4"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
- Im running now Band.
- Date start :  ( $da | $time )
- Checking has starting on list banned .
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
shell_exec("pm2 stop Band.php");
shell_exec("pm2 start Band.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["Band"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "M3"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
- Im stopped now Band.
- Date start :  ( $da | $time )
- Checking has stopped on list banned .
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
shell_exec("pm2 stop Band.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["Band"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "M8"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- Send the user you want to delete !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#Bc"]],]]) ]);
unlink("Band");
}

if($data == "O1"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"- send banned users list :",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
file_put_contents('mode', 'adbot');
}
if($data == "O2"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
 'text'=>"- send banned users list ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
file_put_contents('mode', 'Unbot');
}
if($data == "O4"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
- Im running now bot.
- Date start :  ( $da | $time )
- Checking has starting on list bot users.
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
shell_exec("pm2 start m.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "on";
file_put_contents('info.json', json_encode($info));
}
if($data == "O3"){
	bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"
- Im stopped now bot.
- Date start :  ( $da | $time )
- Checking has stopped on list bot users.
",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
shell_exec("pm2 stop m.php");
$info = json_decode(file_get_contents('info.json'),true);
$info["bot"] = "off";
file_put_contents('info.json', json_encode($info));
}
if($data == "O8"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- Send the user you want to delete !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
unlink("bot");
}
if($data == "O5"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"- Send the Name Bot !",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"Back",'callback_data'=>"#bot"]],]]) ]);
$step = "bot";
}
$lastupdid = $update['result'][0]['update_id'] + 1; 
}
while (true) {
global $last_up;
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
run($get_up);
sleep(1);
}
}
?>
