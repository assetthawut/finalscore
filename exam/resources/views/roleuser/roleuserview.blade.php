<h1>Role User</h1>
@foreach ($roleusers as $roleuser ) 
	{{ $roleuser->r_id}}
	{{ $roleuser->r_name}}
	<br>
@endforeach 