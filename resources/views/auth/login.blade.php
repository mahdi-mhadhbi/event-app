
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('auth2.login2css')
</head>

    
<x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('login2/images/img-01.png')}}" alt="IMG">
				</div>

				<form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
				@csrf	
                <span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" id="password"
                                type="password"
                                name="password"
                                required autocomplete="current-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
					
					<div class="container-login100-form-btn">
						<x-button class="login100-form-btn">
                        {{ __('Log in') }}
						</x-button>
					</div>

					<div class="text-center p-t-12">
                    @if (Route::has('password.request'))
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="{{ route('password.request') }}">
							Username / Password?
						</a>
					</div>
                    @endif
                    <div class="text-center mt-4">
    <p class="text-sm text-gray-600 mb-2">Or sign in with:</p>
    <div class="flex justify-center">
        <!-- Facebook Login -->
        <a href="" class="btn-social btn-facebook" title="Sign in with Facebook">
            <i class="fa fa-facebook"></i>
        </a>

        <!-- Google Login -->
        <a href="" class="btn-social btn-google" title="Sign in with Google">
            <i class="fa fa-google"></i>
        </a>

        <!-- GitHub Login -->
        <a href="" class="btn-social btn-github" title="Sign in with GitHub">
            <i class="fa fa-github"></i>
        </a>
    <hr>
						<a class="txt2" href="{{ route('register') }}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    
</div>

    @include('auth2.login2js')
    <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>