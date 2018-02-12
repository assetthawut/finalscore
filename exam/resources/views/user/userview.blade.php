<h1> User View </h1>

@foreach($allusers as $alluser)
	{{ $alluser->user_id}} 
	{{ $alluser->u_username}}
	{{ $alluser->u_password}}
	{{ $alluser->u_name}}
	{{ $alluser->u_surname}}
	{{ $alluser->u_birthdate}}
	{{ $alluser->u_img}}
	{{ $alluser->r_id }}
	{{ $alluser->m_id }}
@endforeach