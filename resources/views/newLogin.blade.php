<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill up your Form</title>
    <link rel="shortcut icon" href="{{ asset('/register/assets/img/Mi.png') }}" type="image/x-icon">

    <!-- Bootstrap! -->
    <link rel="stylesheet" href="{{ asset('/register/assets/css/bootstrap.min.css') }}">
    <!-- Custom css  -->
    <link rel="stylesheet" href="{{ asset('/register/assets/css/style.css') }}">
    <!-- Responsive! -->
    <link rel="stylesheet" href="{{ asset('/register/assets/css/resposive.css') }}">
    
    
</head>
<body>
    
    <main>
        <section>
            <!-- main section! -->
            <div>
                <form action="{{ route('login') }}" enctype="multipart/form-data" class="main d-md-flex" method="POST">
                @csrf
                <div class="form-img">
                    <img class="image" src="{{ asset('/register/assets/img/upload.png') }}" alt="image">
                </div>
                <div class="form-div">
                    <h4>Log in</h4>
                    <div class="form">
                                           
                        <div class="form-group input-div">
                                <input id="email" class="input @error('email') is-invalid @enderror" type="email" placeholder="Your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                                                                                                                                                                                                 
                        <div class="form-group input-div">
                                <input id="password" class="input @error('password') is-invalid @enderror" type="password" placeholder="Your PassWord" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                                                                     
                                                    
                        <div class="form-group input-div">
                                <input id="btn" class="form-control" type="submit" value="{{ __('Login') }}">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                        
                        <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <labels style="color:white;" class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Bootstrap! JS -->
    <script src="{{ asset('/register/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custo JS! -->
    <script src="{{ asset('/register/assets/js/script.js') }}"></script>
</body>
</html>