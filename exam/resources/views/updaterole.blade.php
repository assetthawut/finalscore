<html>
	
	<body>
		
			@foreach ($role as $key) 
			
		<form action="{{$key->roleId}}" method="post">
			{{ method_field('PATCH') }}
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="text" name='roleId' value="{{$key->roleId}}">
			<input type="text" name="roleName" value="{{$key->roleName}}">
			<input type="submit" name="" value="submit">

		  @endforeach
		</form>

	</body>
</html>