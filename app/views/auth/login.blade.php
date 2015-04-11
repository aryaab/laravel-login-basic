@extends('layouts.default')

@section('content')
	{{ Form::open() }}
		<div class="form-group">
			<label>Username</label>
			{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
		</div>
		<div class="form-group">
			<label>Password</label>
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
		</div>
		
		{{ Form::submit('Log in!', ['class' => 'btn btn-default']) }}
		
	{{ Form::close() }}
@stop