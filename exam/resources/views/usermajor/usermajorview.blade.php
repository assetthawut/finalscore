This is user major index  <br>

<a href="/usermajor/create">Add new major</a> <br>
@foreach($usermajors as $usermajor)
	{{ $usermajor->m_id}}
	{{ $usermajor->m_name}}

	<form action="/usermajor/{{$usermajor->m_id}}" method="post">
		{{csrf_field()}}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
	<br>
@endforeach

