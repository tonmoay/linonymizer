<?php

$url=$_GET['url'];
$dir=""; //edit this with yours directory. provide the directory name in " " .If you don't have directory, leave it blank
$final="http://$_SERVER[HTTP_HOST]/$dir/go.php?url=$url";
?>
<html>
<head>
</head>
<body>
<center> <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>All Done. The anonymization link has been generated! <a href="go.php?url=<?php echo $url; ?>" target="_blank"> Click ere to go to anonymized link</a> <br/>


Alternatively you can copy and paste your link to browser to surf. The link is:  " <?php echo $final; ?> "
</center>

</body>