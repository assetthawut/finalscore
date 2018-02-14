form
@foreach( $allquizs as $quiz)
	{{$quiz->quiz_id}}
	{{$quiz->quiz_create}}
	{{$quiz->quiz_lastUpdate}}
	{{$quiz->u_id}}
	{{$quiz->quiz_subject}}
	{{$quiz->quiz_type}}
	{{$quiz->quiz_grade}}
	{{$quiz->quiz_totalScore}}
	<form action="/quiz" method="post">
		{{csrf_field()}}
	quiz_id <input type="text" name="quiz_id"> <br>
	quiz_create <input type="date" name="quiz_create"> <br>
	quiz_lastupdate <input type="date" name="quiz_lastUpdate"> <br>
	u_id <input type="text" name="u_id"><br>
	quiz_subject <input type="text" name="quiz_subject"><br>
	quiz_type <input type="text" name="quiz_type"><br>
	quiz_grade <input type="text" name="quiz_grade"><br>
	quiz_totalScore <input type="text" name="quiz_totalScore">
	<button>Send</button>
	</form>
@endforeach