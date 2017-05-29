<table class="bordered">
    <thead>
    <tr>
        <th>Дата</th>        
        <th>Тема</th>
        <th>Автор</th>
		<th>Пользователей</th>
    </tr>
    </thead>
	<?php
		include("settings.php");		
		$state=$_GET['state'];
		$limit=$_GET['limit'];
		$sessions = mysql_query("SELECT * FROM session, users WHERE session.author=users.users_id AND state='".$state."' LIMIT 0,".$limit.";");
		while($session = mysql_fetch_array($sessions))
		{
			echo "
			<tr>
			<td >".$session['date']." ".$session['time']."</td>        
			<td>".$session['topic']."</td>        
			<td>".$session['users_name']."</td>        
			<td>".$session['maxusers']."</td>        				
			</tr>";
		}
	?>
</table>

