<?php
include_once 'settings.php';  

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) 
{    
     $userdata = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE users_id = '".intval($_COOKIE['id'])."' LIMIT 1"));

     if(($userdata['users_hash'] !== $_COOKIE['hash']) or ($userdata['users_id'] !== $_COOKIE['id'])) 
     { 
        setcookie('id', '', time() - 60*24*30*12, '/'); 
        setcookie('hash', '', time() - 60*24*30*12, '/');
		header("Location: index.php");
		exit;
     }
     if(($userdata['users_hash'] === $_COOKIE['hash']) and ($userdata['users_id'] === $_COOKIE['id'])) 
     {
     }
	  
} 
else 
{ 
		header("Location: index.php");
		exit;
}
?>
