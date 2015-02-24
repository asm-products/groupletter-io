@extends('app')

@section('content')
	<div class="centeredbox">
		<h2>Reset Password</h2>

		@if (session('status'))
			<p>
				<strong>{{ session('status') }}</strong>
			</p>
		@endif

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

		<form role="form" method="POST" action="/password/email">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>E-Mail Address</label>
			<input type="email" name="email" value="{{ old('email') }}">
			<button type="submit">Send Password Reset Link</button>
		</form>
	</div>
@endsection
