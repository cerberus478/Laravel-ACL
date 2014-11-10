@extends("layout")
@section("content")
	{{ Form::open() }}
		@if(Session::get("error"))
			{{ Session::get("error") }}
		@endif
		{{ $errors->first("token") }}<br />
		{{ Form::label("email", "Email") }}
		{{ Form::text("email", Input::get("email")) }}
		{{ $errors->first("email") }}<br />
		{{ Form::label("password", "Password") }}
		{{ Form::password("password") }}
		{{ $errors->first("password") }}
		{{ Form::label("password_confirmation") }}
		{{ Form::password("password_confirmation") }}
		{{ Form::submit("reset") }}
	{{ Form::close() }}
@stop