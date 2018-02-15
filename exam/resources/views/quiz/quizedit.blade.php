form
@foreach( $quizEdit as $quiz)
{{--
	{{$quiz->quiz_id}}
	{{$quiz->quiz_create}}
	{{$quiz->quiz_lastUpdate}}
	{{$quiz->u_id}}
	{{$quiz->quiz_subject}}
	{{$quiz->quiz_type}}
	{{$quiz->quiz_grade}}
	{{$quiz->quiz_totalScore}}
--}}	
	<form action="/quiz/{{$quiz->quiz_id}}" method="post">
		{{csrf_field()}}
		{{method_field("PATCH")}}
	quiz_id <input type="text" name="quiz_id" value="{{$quiz->quiz_id}}"> <br>
	quiz_create <input type="date" name="quiz_create" value="{{$quiz->quiz_create}}"> <br>
	quiz_lastupdate <input type="date" name="quiz_lastUpdate" value="{{$quiz->quiz_lastUpdate}}"> <br>
	u_id <input type="text" name="u_id" value="{{$quiz->u_id}}"><br>
	quiz_subject <input type="text" name="quiz_subject" value="{{$quiz->quiz_subject}}"><br>
	quiz_type <input type="text" name="quiz_type" value="{{$quiz->quiz_type}}"><br>
	quiz_grade <input type="text" name="quiz_grade" value="{{$quiz->quiz_grade}}"><br>
	quiz_totalScore <input type="text" name="quiz_totalScore" value="{{$quiz->quiz_totalScore}}">
	<button>Send</button>
	</form>
@endforeach