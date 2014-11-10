<div class="assign">
	@foreach($users as $user)
		{{ Form::checkbox("user_id[]", $user->id, $group->users->contains($user->id)) }}
		{{ $user->username }}
	@endforeach
</div>