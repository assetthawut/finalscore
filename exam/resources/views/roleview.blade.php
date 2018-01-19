@foreach ($roles as $role ) {
	{{$role->roleId}}
	{{$role->roleName}}
	<a href="role/{{$role->roleId}}">Edit</a>
}
@endforeach