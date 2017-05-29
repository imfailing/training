<?php
setcookie('id', '', time() - 60*60*24*30, '/'); 
setcookie('hash', '', time() - 60*60*24*30, '/');
?>
<HTML> 
 <HEAD> 
 <TITLE>Редирект через 5 секунд</TITLE> 
 <META HTTP-EQUIV="Refresh" CONTENT="5; URL=index.php"> 
 </HEAD> 
 <BODY> 
 Выход произошел успешно. Вы будете перенаправлены на главную страницу через 5 секунд... 
 </BODY> 
 </HTML>