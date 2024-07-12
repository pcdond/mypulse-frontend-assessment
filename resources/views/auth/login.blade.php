@extends('layouts.auth')

@section('content')
<form  class="card-body flex flex-col gap-5 p-10 shadow-md " id="sign_in_form" method="POST" action="{{ route('login') }}">
                        @csrf

     <div class="text-center mb-2.5">
      <h3 class="text-lg font-semibold text-gray-900 leading-none mb-2.5">
      {{ __('Sign In') }}
      </h3>
      <div class="flex items-center justify-center font-medium">
       <span class="text-2sm text-gray-600 me-1.5">
        Need an account?
       </span>
       <a class="text-2sm link" href="html/demo1/authentication/classic/sign-up.html">
        Sign up
       </a>
      </div>
     </div>
    
     <div class="flex flex-col gap-1">
      <label class="form-label text-gray-900" for="email">
     {{ __('Email Address') }}
      </label>
      
      <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     </div>
     <div class="flex flex-col gap-1">
      <div class="flex items-center justify-between gap-1">
       <label class="form-label text-gray-900" for="password">
        Password
       </label>
       
        
        
      </div>
      
   
       <input id="password" placeholder="Enter Password"type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
     
      
     </div>
     <label class="checkbox-group">
      <input class="checkbox checkbox-sm" name="check" type="checkbox" value="1"/>
      <span class="checkbox-label">
       Remember me
      </span>
     </label>
     <button type="submit"class="btn btn-primary flex justify-center grow">
    
                                    {{ __(' Sign In') }}
                                </button>
    </form>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                  

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
