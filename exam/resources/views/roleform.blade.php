<html>
	
	<body>
		
		<form action="/role" method="post">
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="text" name="roleId" placeholder=" role ID"  value="roleid">
			<input type="text" name="roleName" placeholder=" role name" value="rolename"> 
			<input type="submit" value="send"> 
		</form>
	</body>
</html>