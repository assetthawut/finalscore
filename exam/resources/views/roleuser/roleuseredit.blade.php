@foreach ($roleuserItem as $roleuser ) 
<form action='/roleuser/{{$roleuser->r_id}}' method="POST">
	{{ csrf_field() }}
	{{ method_field('PATCH') }}

 	role id <input type="text" value="{{$roleuser->r_id}}" disabled name="r_id">
 	role name <input type="text" value="{{$roleuser->r_name}}" name="r_name">
	@endforeach

	<button>update</button>
</form>