<body>
		<form action="/question" method="post">
			{{csrf_field()}}
			quiz_id <input type="text" name"quiz_id"> <br>
			quiz_create <input type="date" name="q_create"> <br>
			quiz_lastUpdate <input type="date" name="q_lastUpdate"><br>
			q_detail <textarea rows="4" cols="50" name="q_detail"></textarea>
			<button type="submit">Submit</button>
		</form>

</body>