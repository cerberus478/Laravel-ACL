@section("header")
	<div class="header">
		<div class="container">
			<h1>Tutorial On Laravel Permissions</h1>

			@if(Auth::check())
				<a href="{{ URL::route("user/logout") }}">logout</a> |
				<a href="{{ URL::route("user/profile") }}">profile</a> |
				<a href="{{ URL::route("group/index") }}">Groups</a>
			@else
				<a href="{{ URL::route("user/login") }}">login</a>
				<a href="{{ URL::route("user/request") }}">reset password</a>
			@endif	
		</div>
	</div>
@show