@foreach( $allquizs as $quiz)
	{{$quiz->quiz_id}}
	{{$quiz->quiz_create}}
	{{$quiz->quiz_lastUpdate}}
	{{$quiz->u_id}}
	{{$quiz->quiz_subject}}
	{{$quiz->quiz_type}}
	{{$quiz->quiz_grade}}
	{{$quiz->quiz_totalScore}}

	<form action="/quiz/{{$quiz->quiz_id}}" method="post">
		{{csrf_field()}}
		{{method_field("DELETE")}}
		<button>Delete</button>
	</form>
@endforeach