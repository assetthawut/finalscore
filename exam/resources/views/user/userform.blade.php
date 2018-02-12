<h1>Form</h1>

<form method="post" action="/user">
	{{csrf_field()}}
	user_id <input type="text" name="user_id" value=""> <br>
	username <input type="text" name="u_username" value=""> <br>
	password <input type="password" name="u_password" value=""> <br>
	name <input type="text" name="u_name" value=""> <br>
	surname <input type="text" name="u_surname" value=""> <br>
	birthDate <input type="date" name="u_birthdate" value=""> <br>
	image <input type="file" name="u_img" value=""> <br>
	r_id <input type="text" name="r_id"> <br>
	m_id <input type="text" name="m_id"> <br>

	<button type="submit">Send</button>
</form>