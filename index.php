<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/><title>Spam Bot</title></head><body><?php
$thema=$_GET['thema'];
for($i=1;$i<5;$i++)
{
$v=$i;
if($v%2==0)
{ $u="user 1";
}
else { $u="user 2";
}
  $pass = "your password";
  $domain = "http://yoursite.com";

$url="$domain/spam/spam.php?user=$u&pass=$pass&thema=$thema";
include 'curl.php';

$file=str_replace('wapka_forum','http://wapka.mobi/wapka_forum',$file);
echo '<div class="catRow">'.$i.' Message Posted by '.$u.' '.$file.'</div>';
}
?></body></html>
