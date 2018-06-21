<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css"/><title>Freshmaza.eu.pn</title></head><body><?php
$thema=$_GET['thema'];
for($i=1;$i<5;$i++)
{
$v=$i;
if($v%2==0)
{ $u="mobi54";
}
else { $u="mobi78";
}

$url="http://mobikind.vacau.com/spam/spam.php?user=$u&pass=zenetze&thema=$thema";
include 'curl.php';

$file=str_replace('wapka_forum','http://wapka.mobi/wapka_forum',$file);
echo '<div class="catRow">'.$i.' Message Posted by '.$u.' '.$file.'</div>';
}
?></body></html>
