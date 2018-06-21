<?php

$agent = "Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.13337/28.2555; U; en) Presto/2.8.119 Version/11.10 / NokiaC1-01/2.0 (06.15) Profile/MIDP-2.1 Configuration/CLDC-1.1 UNTRUSTED/1.0";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$url.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch,CURLOPT_COOKIESESSION,$cookie);
curl_setopt($ch,CURLOPT_COOKIEJAR,"cookies.txt");
curl_setopt($ch,CURLOPT_COOKIEFILE,"cookies.txt");
curl_setopt($ch,CURLOPT_POST,$postf);
curl_setopt($ch,CURLOPT_POSTFIELDS,$postf);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept-Language: en-us,en;q=0.7,de-de;q=0.3','Accept: text/xml,application/xml,application/xhtml+xml,text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5'));
$content = curl_exec($ch);
$file=$content;
?>
