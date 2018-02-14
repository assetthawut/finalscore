<h1>Role User</h1>
<p><a href="/roleuser/create">Add New Role</a><p>
<title>UserRole View</title>
@foreach ($roleusers as $roleuser ) 
	{{ $roleuser->r_id}}
	{{ $roleuser->r_name}}
	<br>
	<form action="/roleuser/{{$roleuser->r_id}}" method="post">
		{{ csrf_field() }}
		{{ method_field('delete') }}
		<button type="submit">Delete</button>
	</form>
@endforeach 