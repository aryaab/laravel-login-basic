@extends('layouts.default')

@section('content')
	{{ Form::open(['url' => 'sign-up']) }}
		<div class="form-group">
			<label>Username</label>
			{{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
		</div>
		<div class="form-group">
			<label>Email address</label>
			{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your email']) }}
		</div>
		<div class="form-group">
			<label>Password</label>
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
		</div>
		
		{{ Form::submit('Submit', ['class' => 'btn btn-default']) }}
		
	{{ Form::close() }}
@stop