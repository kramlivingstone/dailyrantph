@extends('layouts.login')

@section('content')
	<div class="col-md-6">
		<img src="{{asset('images/dailyrantsph.png')}}">
	</div>
	<div class="col-md-6">
		<h3>SIGN IN</h3>
	<div class="panel panel-default" id="loginPanel">
			<div class="panel-body">
				<form id="loginForm" method="POST" action="/login">
					{{csrf_field()}}
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="username" name="username" id="username" class="form-control">
					</div>

					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						Don't have an account yet? Click <span><a href="/register">here</a></span>
					</div>
					<div class="form-group">
						Forgot Password? Click <span><a href="#">here</a></span>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info">Log In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection