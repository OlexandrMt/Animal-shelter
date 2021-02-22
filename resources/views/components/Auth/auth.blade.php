<div class="authContainer" {{$hidden}}>
	@if(@isset($closeBtn))
		{{$closeBtn}}
	@endif
	<div class="formSwitchers">
		<span class="showLogin active">Login</span>
		<span class="showRegister">Register</span>
	</div>
	<form method="POST" name="login" action="/login" class="{{$active}}">
		<div class="formInput">
			<label for="username">Username*</label>
			<input type="text" name="username" autocomplete="off">
		</div>
		<div class="formInput">
			<label for="username">Password*</label>
			<input type="password" name="password">
		</div>
		<div class="formInput submit">
			<input type="submit" value="Login">
		</div>
		<div class="formInput description">
			<div class="forgotPassword"><a href="#">Forgot password?</a></div>
			<div class="textRight"><span>* required fields</span></div>
		</div>		
	</form>
	<form method="POST" name="register" action="/register">
		<div class="formInput">
			<label for="username">Username*</label>
			<input type="text" name="username" autocomplete="off">
		</div>
		<div class="formInput">
			<label for="email">Email*</label>
			<input type="email" name="email" autocomplete="off">
		</div>
		<div class="formInput">
			<label for="password">Password*</label>
			<input id="password" type="password" name="password">
		</div>
		<div class="formInput">
			<label for="confirmPassword">Confirm Password*</label>
			<input type="password" name="confirmPassword">
		</div>
		<div class="formInput submit">
			<input type="submit" value="Register">
		</div>
		<div class="formInput description">
			<div class="textRight"><span>* required fields</span></div>
		</div>		
	</form>
</div>


