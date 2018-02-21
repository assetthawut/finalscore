@foreach( $allquestion as $question)
	{{ $question->q_id}}
	{{ $question->quiz_id}}
	{{ $question->q_create}}
	{{ $question->q_lastUpdate}}
	{{ $question->q_detail}}
	{{ $question->q_img}}
@endforeach()