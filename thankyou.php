<html>
<head>
    <title>Thank you!</title>
</head>
<body>
<?php

$PIX = ($_GET['pix'] == '') ? 'Lead' : $_GET['pix'];

?>
<img src="https://www.facebook.com/tr?id=<?=$_GET['cvu'];?>&noscript=1&ev=<?=$PIX;?>" />

</body>
</html>