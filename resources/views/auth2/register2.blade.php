
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

				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
				@csrf	

                <span class="login100-form-title">
						Member Register
					</span>
                    <div class="wrap-input100 validate-input" data-validate = "Valid name is required">
						<input class="input100" id="name" type="text" name="name"  placeholder="name" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" id="password"
                                type="password"
                                name="password"
                                placeholder="password"
                                required autocomplete="current-password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                placeholder="confirm password"
                                name="password_confirmation" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input">
                    <div class="col-md-3">
    <strong for="role" class="label-text-title color-heading font-medium font-16 mb-3">Role</strong>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="organisateur" value="Organisateur" checked>
        <label class="form-check-label" for="organisateur">
            Organisateur
        </label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="role" id="client" value="Client">
        <label class="form-check-label" for="client">
            Client
        </label>
    </div>
</div>

                              </div>
                    <!-- Remember Me -->
                    <div class="flex items-center justify-end mt-4">
                    <x-button class="login100-form-btn">
                    {{ __('Register') }}
                </x-button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?')  }}  click_here
                </a>
            
                
				</div>	
    
				</form>
			</div>
		</div>
	</div>
    @include('auth2.login2js')
    <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>