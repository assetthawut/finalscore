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
@endforeach