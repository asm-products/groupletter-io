@extends('app')

@section('content')

	<div class="centeredbox">
		<h2>Login</h2>

		@if (count($errors) > 0)
			<div>
				<p><strong>Whoops!</strong> There were some problems with your input.</p>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form role="form" method="POST" action="/auth/login">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<label>E-Mail Address</label>
			<input type="email" name="email" value="{{ old('email') }}">

			<label>Password</label>
			<input type="password" name="password">

			<label>
				<input type="checkbox" name="remember"> Remember Me
			</label>

			<button type="submit">Login</button>

			<a href="/password/email">Forgot Your Password?</a>

		</form>
	</div>

@endsection
