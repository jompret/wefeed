<?php 
	echo "\t [*] Created By Jompret [*] \n";
	// $file = file(trim(fgets(STDIN)));
	// echo "\t [?] input delimiter : ";
	// $delim = trim(fgets(STDIN));

	// foreach ($file as $akon => $data) {
        // $pisah = explode($delim, $data);
        // username=Jst593@freeMS.vmgmt&password=924722&landURL=
   include('simplehtmldom_1_9_1/simple_html_dom.php');
        

function login(){
$user = 'Jst616@freeMS.vmgmt';
        $pass = '704427';
        $body = "username=$user@spin2&password=$pass";

    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://welcome2.wifi.id/authnew/login/check_login.php?ipc=10.200.139.58&gw_id=WAG-D4-KBU&mac=78:02:f8:2d:dd:62&redirect=http://8.8.8.8/&wlan=KTDLG00024-N/TLK-CI-46400:@wifi.id');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:70.0) Gecko/20100101 Firefox/70.0';
        $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
        $headers[] = 'Accept-Language: en-US,en;q=0.5';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Origin: https://welcome2.wifi.id';
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Referer: https://welcome2.wifi.id/login/?gw_id=WAG-D3-LBG&client_mac=xx:xx:xx:xx:xx:2b&wlan=3CBN000369/3CBN-LBG0102-0211AI:@wifi.id&sessionid=0402FFFF780456CF-5DD92BD0&redirect=http://8.8.8.8/';
        $headers[] = 'Cookie: default_wifi=53ltq27qh88r73c40hi84ro24bio88gd; SERVERID=wpwifi4; PHPSESSID=28426uqn7550l1kddrf7k5in33';
        $headers[] = 'Te: Trailers';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
         $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
       }
        curl_close($ch);
        $json = json_decode($result);
        $result = $json->result;
        $msg = $json->message;
        if ($result == 1) {

        }else{
            }
}

function logout(){

    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://welcome2.wifi.id/authnew/logout/logoutx.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

        $headers = array();
        $headers[] = 'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:70.0) Gecko/20100101 Firefox/70.0';
        $headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
        $headers[] = 'Accept-Language: en-US,en;q=0.5';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Origin: https://welcome2.wifi.id';
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Referer: https://welcome2.wifi.id/authnew/logout/logoutx.php';
        $headers[] = 'Cookie: default_wifi=53ltq27qh88r73c40hi84ro24bio88gd; SERVERID=wpwifi4; PHPSESSID=28426uqn7550l1kddrf7k5in33';
        $headers[] = 'Te: Trailers';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
}


function masukkanpw(){
	$html = file_get_html('https://raw.githubusercontent.com/jompret/hember/master/README.md');
	sleep(1);
	logout();
        echo "\t [?] input pw : ";
        $inputan = trim(fgets(STDIN));

if ($html == $inputan) {
            echo " => Lanjut Login \n";
            login();
            echo " => Sukses Login @wifi.id \n";
        }else{
            echo " => Login Gagal \n";
            login();
            masukkanpw();
        }
}


login();
masukkanpw();

?>
