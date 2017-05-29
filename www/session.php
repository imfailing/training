<html>
<head>
    <title>Семинар</title>
	<style>
		article, aside, details, figcaption, figure, 
		footer, header, hgroup, menu, nav, section {
		  display: block;
		}
		
		fieldset
		{
		  margin: 0;
		  padding: 0;
		  border: 0;
		}
		
		input:focus,textarea:focus {
		  outline: none;
		}
		
		/*----------------------*/
		
		body
		{
			font-family: Arial, Helvetica, sans-serif;
			color: #444;
			background-image: url(data:image/gif;base64,R0lGODlhCAAIAJEAAMzMzP///////wAAACH5BAEHAAIALAAAAAAIAAgAAAINhG4nudroGJBRsYcxKAA7);
			margin: 0;
			font-size: 12px;
		}     
		
		/*----------------------*/
		
		.cf:before,
		.cf:after {
		  content:"";
		  display:table;
		}
		
		.cf:after {
		  clear:both;
		}
		
		.cf {
		  zoom:1;
		}
		  
		/*----------------------*/
		
		header {
		  padding: 8px 10%;
		  border-bottom: 1px solid #fff;
		  background-color: #777;
		  background-image: -webkit-gradient(linear, left top, left bottom, from(#777), to(#555));
		  background-image: -webkit-linear-gradient(top, #777, #555);
		  background-image: -moz-linear-gradient(top, #777, #555);
		  background-image: -ms-linear-gradient(top, #777, #555);
		  background-image: -o-linear-gradient(top, #777, #555);
		  background-image: linear-gradient(top, #777, #555);
		  -moz-box-shadow: 0 -3px 3px rgba(0,0,0,.5) inset;
		  -webkit-box-shadow: 0 -3px 3px rgba(0,0,0,.5) inset;
		  box-shadow: 0 -3px 3px rgba(0,0,0,.5) inset;
		}
		
		/*----------------------*/
		
		nav ul {
		  margin: 0;
		  padding: 0;
		  list-style: none;
		  position: relative;
		  float: right;
		  background: #eee;
		  border-bottom: 1px solid #fff;
		  -moz-border-radius: 3px;
		  -webkit-border-radius: 3px;
		  border-radius: 3px;    
		}
		
		nav li {
		  float: left;          
		}
		
		nav #task {
		  border-right: 1px solid #ddd;
		  -moz-box-shadow: 1px 0 0 #fff;
		  -webkit-box-shadow: 1px 0 0 #fff;
		  box-shadow: 1px 0 0 #fff;  
		}
		
		nav #sound-trigger,
		nav #chat a,
		nav #task-trigger,
		nav #users a {
		  display: inline-block;
		  *display: inline;
		  *zoom: 1;
		  height: 25px;
		  line-height: 25px;
		  font-weight: bold;
		  padding: 0 8px;
		  text-decoration: none;
		  color: #444;
		  text-shadow: 0 1px 0 #fff; 
		}
		nav #chat a,
		nav #users a {
		  -moz-border-radius: 0 3px 3px 0;
		  -webkit-border-radius: 0 3px 3px 0;
		  border-radius: 0 3px 3px 0;
		}
		
		nav #sound-trigger,
		nav #task-trigger {
		  -moz-border-radius: 3px 0 0 3px;
		  -webkit-border-radius: 3px 0 0 3px;
		  border-radius: 3px 0 0 3px;
		}
		
		
				nav #sound-trigger:hover,
		nav #sound .active,
		nav #chat a:hover,
		nav #task-trigger:hover,
		nav #task .active,
		nav #users a:hover {
		  background: #fff;
		}
		
		nav #sound-content,
		nav #task-content {
		  display: none;
		  position: absolute;
		  top: 24px;
		  right: 0;
		  z-index: 999;    
		  background: #fff;
		  background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee));
		  background-image: -webkit-linear-gradient(top, #fff, #eee);
		  background-image: -moz-linear-gradient(top, #fff, #eee);
		  background-image: -ms-linear-gradient(top, #fff, #eee);
		  background-image: -o-linear-gradient(top, #fff, #eee);
		  background-image: linear-gradient(top, #fff, #eee);  
		  padding: 15px;
		  -moz-box-shadow: 0 2px 2px -1px rgba(0,0,0,.9);
		  -webkit-box-shadow: 0 2px 2px -1px rgba(0,0,0,.9);
		  box-shadow: 0 2px 2px -1px rgba(0,0,0,.9);
		  -moz-border-radius: 3px 0 3px 3px;
		  -webkit-border-radius: 3px 0 3px 3px;
		  border-radius: 3px 0 3px 3px;
		}
		
		nav li #sound-content ,
		nav li #task-content {
		  right: 0;
		  width: 250px;  
		}
		
		/*--------------------*/
		
		#inputs input {
		  background: #f1f1f1;
		  padding: 6px 5px;
		  margin: 0 0 5px 0;
		  width: 238px;
		  border: 1px solid #ccc;
		  -moz-border-radius: 3px;
		  -webkit-border-radius: 3px;
		  border-radius: 3px;
		  -moz-box-shadow: 0 1px 1px #ccc inset;
		  -webkit-box-shadow: 0 1px 1px #ccc inset;
		  box-shadow: 0 1px 1px #ccc inset;
		}
		
		#inputs input:focus {
		  background-color: #fff;
		  border-color: #e8c291;
		  outline: none;
		  -moz-box-shadow: 0 0 0 1px #e8c291 inset;
		  -webkit-box-shadow: 0 0 0 1px #e8c291 inset;
		  box-shadow: 0 0 0 1px #e8c291 inset;
		}
		
		/*--------------------*/
		
		#task #actions {
		  margin: 10px 0 0 0;
		}
		
		#task #submit {		
		  background-color: #d14545;
		  background-image: -webkit-gradient(linear, left top, left bottom, from(#e97171), to(#d14545));
		  background-image: -webkit-linear-gradient(top, #e97171, #d14545);
		  background-image: -moz-linear-gradient(top, #e97171, #d14545);
		  background-image: -ms-linear-gradient(top, #e97171, #d14545);
		  background-image: -o-linear-gradient(top, #e97171, #d14545);
		  background-image: linear-gradient(top, #e97171, #d14545);
		  -moz-border-radius: 3px;
		  -webkit-border-radius: 3px;
		  border-radius: 3px;
		  text-shadow: 0 1px 0 rgba(0,0,0,.5);
		  -moz-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
		  -webkit-box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0.3), 0 1px 0 rgba(255, 255, 255, 0.3) inset;    
		  border: 1px solid #7e1515;
		  float: left;
		  height: 30px;
		  padding: 0;
		  width: 100px;
		  cursor: pointer;
		  font: bold 14px Arial, Helvetica;
		  color: #fff;
		}
		
		#task #submit:hover,
		#task #submit:focus {		
		  background-color: #e97171;
		  background-image: -webkit-gradient(linear, left top, left bottom, from(#d14545), to(#e97171));
		  background-image: -webkit-linear-gradient(top, #d14545, #e97171);
		  background-image: -moz-linear-gradient(top, #d14545, #e97171);
		  background-image: -ms-linear-gradient(top, #d14545, #e97171);
		  background-image: -o-linear-gradient(top, #d14545, #e97171);
		  background-image: linear-gradient(top, #d14545, #e97171);
		}	
		
		#task #submit:active {		
		  outline: none;
		  -moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
		  -webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;
		  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.5) inset;		
		}
		
		#task #submit::-moz-focus-inner {
		  border: none;
		}
		
		#task label {
		  float: right;
		  line-height: 30px;
		}
		
		#task label input {
		  position: relative;
		  top: 2px;
		  right: 2px;
		}
		
		/*--------------------*/
		
		#about {
			margin: 15px;
		}
		
		#about a {
			color: #555;
		}
	</style>
	</style>
	<script src="jquery.js"></script>
	<script>
		  $(document).ready(function(){
				$('#task-trigger').click(function(){
					$(this).next('#task-content').slideToggle();
					$(this).toggleClass('active');					
					
					if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
						else $(this).find('span').html('&#x25BC;')
					})
				$('#sound-trigger').click(function(){
					$(this).next('#sound-content').slideToggle();
					$(this).toggleClass('active');					
					
					if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
						else $(this).find('span').html('&#x25BC;')
					})					
		  });
	</script>
</head>

<body>

<header class="cf">
<nav>
	<ul>
		<li id="task">
			<a id="task-trigger" href="#">
				Задание <span>&#x25BC;</span>
			</a>
			<div id="task-content">
				<form>
					<fieldset id="inputs">
						<input id="password" type="file" name="Файл" placeholder="Password" required>
					</fieldset>
					<fieldset id="actions">
						<input type="submit" id="submit" value="Добавить">
					</fieldset>
				</form>
			</div>                     
		</li>
		<li id="users">
			<a href="">Участники</a>
		</li>		
		<li id="chat">
			<a href="">Чат</a>
		</li>
		<li id="sound">
			<a id="sound-trigger" href="#">
				Звук <span>&#x25BC;</span>
				<div id="task-content">
				
			</div>  
			</a>
		</li>		
	</ul>
</nav>
</header>

</body>
</html>