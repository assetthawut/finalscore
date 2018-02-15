@foreach( $quizShow as $quiz)
	{{$quiz->quiz_id}}
	{{$quiz->quiz_create}}
	{{$quiz->quiz_lastUpdate}}
	{{$quiz->u_id}}
	{{$quiz->quiz_subject}}
	{{$quiz->quiz_type}}
	{{$quiz->quiz_grade}}
	{{$quiz->quiz_totalScore}}
@endforeach