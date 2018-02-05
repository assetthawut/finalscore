<title>Create Major</title>

<form action="/usermajor" method="post">
	{{ csrf_field() }}
	<input type="text" name="m_name">
	<button type="submit">Send</button>
</form>