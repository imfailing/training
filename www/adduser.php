<!doctype html>
<html>
  <head>
    <title>Добавить юзера</title>
    <meta charset="utf-8" />
	<style>

		body { 
			background: #eee; 
		}

		/*------------------------------*/

		#signup {
			width: 550px;
			height: 330px;
			margin: 100px auto 50px auto;
			padding: 20px;
			position: relative;
			background: #fff url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAMAAAAECAMAAAB883U1AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAlQTFRF7+/v7u7u////REBVnAAAAAN0Uk5T//8A18oNQQAAABZJREFUeNpiYGJiYmBiYgRiBhAGCDAAALsAFJhiJ+UAAAAASUVORK5CYII=);
			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px; 
			border-radius: 3px;  
		}

		#signup::before, 
		#signup::after {
			content: "";
			position: absolute;
			bottom: -3px;
			left: 2px;
			right: 2px;
			top: 0;
			z-index: -1;
			background: #fff;
			border: 1px solid #ccc;			
		}

		#signup::after {
			left: 4px;
			right: 4px;
			bottom: -5px;
			z-index: -2;
			-moz-box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
			-webkit-box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
			box-shadow: 0 8px 8px -5px rgba(0,0,0,.3);
		}

		/*------------------------------*/

		#signup h1 {
			position: relative;
			font: italic 1em/3.5em 'trebuchet MS',Arial, Helvetica;
			color: #999;
			text-align: center;
			margin: 0 0 20px;
		}

		#signup h1::before,
		#signup h1::after{
			content:'';
			position: absolute;
			border: 1px solid rgba(0,0,0,.15);
			top: 10px;
			bottom: 10px;
			left: 0;
			right: 0;
		}

		#signup h1::after{
			top: 0;
			bottom: 0;
			left: 10px;
			right: 10px;
		}

		/*------------------------------*/

        ::-webkit-input-placeholder {
           color: #bbb;
        }
        
        :-moz-placeholder {
           color: #bbb;
        } 				    	

		.placeholder{
			color: #bbb; /* polyfill */
		}		

		#signup input{
			margin: 5px 0;
			padding: 15px;
			width: 100%;
			*width: 518px;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			border: 1px solid #ccc;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;	
		}

		#signup input:focus{
			outline: 0;
			border-color: #aaa;
			-moz-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3) inset;
		}		

		#signup button{
			margin: 20px 0 0 0;
			padding: 15px 8px;			
			width: 100%;
			cursor: pointer;
			border: 1px solid #2493FF;
			overflow: visible;
			display: inline-block;
			color: #fff;
			font: bold 1.4em arial, helvetica;
			text-shadow: 0 -1px 0 rgba(0,0,0,.4);		  
			background-color: #2493ff;
			background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(255,255,255,.5)), to(rgba(255,255,255,0)));
			background-image: -webkit-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -moz-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -ms-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: -o-linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			background-image: linear-gradient(top, rgba(255,255,255,.5), rgba(255,255,255,0));
			-webkit-transition: background-color .2s ease-out;
			-moz-transition: background-color .2s ease-out;
			-ms-transition: background-color .2s ease-out; 
			-o-transition: background-color .2s ease-out;  
			transition: background-color .2s ease-out;
			-moz-border-radius: 3px;
			-webkit-border-radius: 3px;
			border-radius: 3px;
			-moz-box-shadow:  0 2px 1px rgba(0, 0, 0, .3),
							  0 1px 0 rgba(255, 255, 255, .5) inset;
			-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
								0 1px 0 rgba(255, 255, 255, .5) inset;
			box-shadow: 0 2px 1px rgba(0, 0, 0, .3),
						0 1px 0 rgba(255, 255, 255, .5) inset;			  						  
		}

		#signup button:hover{
		  	background-color: #7cbfff;
            border-color: #7cbfff;
		}

		#signup button:active{
			position: relative;
			top: 3px;
			text-shadow: none;
			-moz-box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
			-webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
			box-shadow: 0 1px 0 rgba(255, 255, 255, .3) inset;
		}

		/* ------------------------------------------------- */

		#about{
		    color: #999;
		    text-align: center;
		    font: 0.9em Arial, Helvetica;
		}

		#about a{
		    color: #777;
		}		
	</style>  
  </head>

  <body>	
<script src="jquery.js"></script>	
<?php
include 'settings.php';  
if(isset($_POST['submit'])) 
{ 

     $errors = array(); 

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])) 
     { 
         $errors[] = "Логин может состоять только из букв английского алфавита и цифр"; 
     } 
      
     if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30) 
     { 
         $errors[] = "Логин должен быть не меньше 3-х символов и не больше 30"; 
     } 
	 
     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) 
     { 
         $errors[] = "Неправильно введен e-mail"; 
     } 	 
      
   $query = mysql_query("SELECT COUNT(users_id) FROM users WHERE users_login='".mysql_real_escape_string($_POST['login'])."'")or die ("<br>Invalid query: " . mysql_error()); 
     if(mysql_result($query, 0) > 0) 
     { 
         $errors[] = "Пользователь с таким логином уже существует в базе данных"; 
     } 
	 
   $query = mysql_query("SELECT COUNT(users_id) FROM users WHERE users_login='".mysql_real_escape_string($_POST['email'])."'")or die ("<br>Invalid query: " . mysql_error()); 
     if(mysql_result($query, 0) > 0) 
     { 
         $errors[] = "Пользователь с таким e-mail уже существует в базе данных"; 
     } 	 
   
    if(count($errors) == 0) 
     { 
          
        $login = $_POST['login']; 
        $password = md5(md5(trim($_POST['password']))); 
		$email = $_POST['mail'];
 		$name = $_POST['name'];
 		$type = $_POST['type'];
        mysql_query("INSERT INTO users SET users_login='".$login."', users_password='".$password."', users_name='".$name."', users_email='".$email."', users_type='".$type."'"); 
     }
} 
?>

  	<form id="signup">
		<h1>Start doing cool stuff in seconds.</h1>
		<input type="email" placeholder="john.doe@email.com" required="">
		<input type="password" placeholder="Choose your password" required="">
		<input type="password" placeholder="Confirm password" required="">					
		<button type="submit">Sign up for free!</button>	
	</form>

   <form method="POST" action="">
	Логин <input type="text" name="login" id="reg_inp" /><br />
	Пароль <input type="password" name="password" id="reg_inp" /><br />
	Имя<input name="name" type="text"><br> 
   	E-mail <input name="email" type="text"><br>    
	<select name="type" size="1">
	<option value="1">Преподаватель</option>
 	<option selected="2" value="second">Студент</option>  
 	</select> 
   <input name="submit" type="submit" value="Добавить пользователя"> 
   </form>
   <?php
     if (count($errors)!==0) {
       print "<b>При добавлении пользователя произошли следующие ошибки:</b><br>"; 
       foreach($errors AS $error) 
       { 
         print $error."<br>"; 
       }   
     }
   ?>