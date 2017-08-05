@extends('layouts.login')

@section('content')
<div class="col-md-6">
	<img src="{{asset('images/dailyrantsph.png')}}">
</div>
<div class="col-md-6">
	<h1>Register</h1>
	<div class="panel panel-default" id="loginPanel">
		<div class="panel-body">
			<form method="POST" action="/register">
				{{csrf_field()}}
				@include ('layouts.errors')
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="name" name="name" class="form-control" id="name" required>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" class="form-control" id="email" required> 
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" id="password" required>
				</div>
				<div class="form-group">
					<label for="password_confirmation">Confirm Password:</label>
					<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection