This is user major index  <br>

<a href="/usermajor/create">Add new major</a> <br>
@foreach($usermajors as $usermajor)
	{{ $usermajor->m_id}}
	{{ $usermajor->m_name}}
	<br>
@endforeach

