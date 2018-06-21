<?php
$user=$_GET['user'];
$pass=$_GET['pass'];
$thema=$_GET['thema'];
if($user and $pass and $thema)
{
$url="http://wapka.mobi/wapka.html?c=user&a=login&tw_pr=xhtml";

$postf="login=$user&pass=$pass&autologin_ch=1&submit=Login";

include 'curl.php';
$url="http://wapka.mobi/wapka_log.xhtml";
include 'curl.php';
preg_match_all('~hash=(.*?)"~is',$file,$match);
$hash=$match[1][0];
$rand=mt_rand('10','9999');
$rand2=mt_rand('10','9999');
$rid=$rand.$rand2;
$postf="page=new_prisp&tema=$thema&nazov=Master Robot!! Stop Spam!!
Robot: $rid&text=Posted via Master Robot.
Robot Id: $rid&submit=Add message";

$url="http://www.wapka.mobi/wapka_forum.xhtml?page=new_prisp&tema=$thema";

include 'curl.php';


echo $file;

}
?>
