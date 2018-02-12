@foreach($usermajorItem as $usermajorItemdetail)
<form method="post" action="/usermajor/{{$usermajorItemdetail->m_id}}">
	 {{ csrf_field() }}
	 {{ method_field('PATCH') }}
	<input type="text" name="m_id" value='{{$usermajorItemdetail->m_id}}' disabled>
	<input type="text" name="m_name" value="{{$usermajorItemdetail->m_name}}">
	<button type="submit">Edit</button>
</form>

@endforeach