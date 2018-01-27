<form action="/roleuser" method="post">
	<div>
		Role Name
		<input type="text" value="" name="r_name">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
		<button type="submit">Send</button>
	</div>
</form>