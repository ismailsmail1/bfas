<?php
error_reporting(false);
if(!function_exists('curl_init')){
	die("Please install php-curl\n");
}
$green="\e[0;32m";
$red="\e[0;31m";
$magenta="\e[0;35m";
$lightcyan="\e[1;36m";
include("config.php");
$login = "https://allowweb.com/superltc/index.php/user/login";
$index = "https://allowweb.com/superltc/index.php/dashboard";
$desable = "https://allowweb.com/superltc/index.php/dashboard/getDesabledButtons";
$addpoint = "https://allowweb.com/superltc/index.php/balance/addPoint";

$login1 = "https://allowweb.com/bitfast/index.php/user/login";
$index1 = "https://allowweb.com/bitfast/index.php/dashboard";
$desable1 = "https://allowweb.com/bitfast/index.php/dashboard/getDesabledButtons";
$addpoint1 = "https://allowweb.com/bitfast/index.php/balance/addPoint";

$login2 = "https://allowweb.com/supersatoshi/index.php/user/login";
$index2 = "https://allowweb.com/supersatoshi/index.php/dashboard";
$desable2 = "https://allowweb.com/supersatoshi/index.php/dashboard/getDesabledButtons";
$addpoint2 = "https://allowweb.com/supersatoshi/index.php/balance/addPoint";

function res($desable, $headers, $index){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $desable);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $index);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
    $result = curl_exec($ch);
    curl_close($ch);
}

function claim($addpoint, $headers){
  $no = array("1","2","3","4","5","6","7","8","9","10");
  foreach($no as $data1){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $addpoint);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $index);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    $data["id"] = $data1;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance Super Ltc: ".$json["pointBalance"]."\n";
    sleep(0);
  }
}
function res1($desable1, $bitfast, $index1){
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, $desable1);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_REFERER, $index1);
    curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch1, CURLOPT_POST, 1);
    curl_setopt($ch1, CURLOPT_COOKIEJAR, 'cookie-name1.txt');
    curl_setopt($ch1, CURLOPT_COOKIEFILE, 'cookie-name1.txt');
    $result = curl_exec($ch1);
    curl_close($ch1);
}

function claim1($addpoint1, $bitfast){
  $no1 = array("1","2","3","4","5","6","7","8","9","10");
  foreach($no1 as $data2){
    $ch1 = curl_init();
    curl_setopt($ch1, CURLOPT_URL, $addpoint1);
    curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch1, CURLOPT_REFERER, $index1);
    curl_setopt($ch1,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch1, CURLOPT_POST, 1);
    $data["id"] = $data2;
    curl_setopt($ch1, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch1, CURLOPT_COOKIEJAR, 'cookie-name1.txt');
    curl_setopt($ch1, CURLOPT_COOKIEFILE, 'cookie-name1.txt');
    $result = curl_exec($ch1);
    curl_close($ch1);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance Bitfast : ".$json["pointBalance"]."\n";
    sleep(0);
  }
}

function res2($desable2, $sushi, $index2){
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $desable2);
    curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_REFERER, $index2);
    curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch2, CURLOPT_POST, 1);
    curl_setopt($ch2, CURLOPT_COOKIEJAR, 'cookie-name2.txt');
    curl_setopt($ch2, CURLOPT_COOKIEFILE, 'cookie-name2.txt');
    $result = curl_exec($ch2);
    curl_close($ch2);
}

function claim2($addpoint2, $sushi){
  $no2 = array("1","2","3","4","5","6","7","8","9","10");
  foreach($no2 as $data3){
    $ch2 = curl_init();
    curl_setopt($ch2, CURLOPT_URL, $addpoint2);
    curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch2, CURLOPT_REFERER, $index2);
    curl_setopt($ch2,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch2, CURLOPT_POST, 1);
    $data["id"] = $data3;
    curl_setopt($ch2, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch2, CURLOPT_COOKIEJAR, 'cookie-name2.txt');
    curl_setopt($ch2, CURLOPT_COOKIEFILE, 'cookie-name2.txt');
    $result = curl_exec($ch2);
    curl_close($ch2);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance Sushi : ".$json["pointBalance"]."\n";
    sleep(0);
  }
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie-name.txt');  
curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie-name.txt');
$hasil=curl_exec($ch);
curl_close ($ch);
$one = explode('<b id="pointBalance">', $hasil);
$two = explode('</b>', $one[1]);


$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch1, CURLOPT_URL, $login1);
curl_setopt($ch1, CURLOPT_POSTFIELDS, http_build_query($bitfast));
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch1, CURLOPT_COOKIEJAR, 'cookie-name1.txt');  
curl_setopt($ch1, CURLOPT_COOKIEFILE, 'cookie-name1.txt');
$hasil1=curl_exec($ch1);
curl_close ($ch1);
$one1 = explode('<b id="pointBalance">', $hasil1);
$two1 = explode('</b>', $one1[1]);


$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch2, CURLOPT_URL, $login2);
curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($sushi));
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch2, CURLOPT_COOKIEJAR, 'cookie-name2.txt');  
curl_setopt($ch2, CURLOPT_COOKIEFILE, 'cookie-name2.txt');
$hasil2=curl_exec($ch2);
curl_close ($ch2);
$one2 = explode('<b id="pointBalance">', $hasil2);
$two2 = explode('</b>', $one2[1]);

$i = 1;
echo $green. "[".date("h:i:sa")."] Tuyul BitFast......!\n";
 while($i ==1){
    res1($desable1, $bitfast, $index1);
    claim1($addpoint1,$bitfast,$no1);

sleep(0);
echo $magenta. "[".date("h:i:sa")."] Tuyul Super Ltc.....!\n"; 
res($desable, $headers, $index);
    claim($addpoint,$headers,$no);

sleep(0);
echo $lightcyan. "[".date("h:i:sa")."] Tuyul Sushi......!\n";
res($desable2, $sushi, $index2);
    claim2($addpoint2,$sushi,$no2);

echo $red. "[".date("h:i:sa")."] Istirahat Dulu 5 menit Tuyulnya Capek....!\n"; sleep(1);
echo $green. "[".date("h:i:sa")."] Tuyul BitFast......!\n";
}
?>