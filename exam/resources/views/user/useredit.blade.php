@foreach($usershow as $user)
	{{ $user->user_id}} 
	{{ $user->u_username}}
	{{ $user->u_password}}
	{{ $user->u_name}}
	{{ $user->u_surname}}
	{{ $user->u_birthdate}}
	{{ $user->u_img}}
	{{ $user->r_id }}
	{{ $user->m_id }}  <br>	

	<form method="post" action="/user/{{$user->user_id}}" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	user_id <input type="text" name="user_id" value="{{ $user->user_id}}" disabled> <br>
	username <input type="text" name="u_username" value="{{ $user->u_username}}"> <br>
	password <input type="password" name="u_password" value="{{ $user->u_password}}"> <br>
	name <input type="text" name="u_name" value="{{ $user->u_name}}"> <br>
	surname <input type="text" name="u_surname" value="{{ $user->u_surname}}"> <br>
	birthDate <input type="date" name="u_birthdate" value="{{ $user->u_birthdate}}"> <br>
	image <input type="file" name="u_img" value="{{ $user->u_img}}"> <br>
	r_id <input type="text" name="r_id" value="{{ $user->r_id }}"> <br>
	m_id <input type="text" name="m_id" value="{{ $user->m_id }}"> <br>
	<button type="submit">Send</button>
	</form>
@endforeach