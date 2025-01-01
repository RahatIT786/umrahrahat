<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umrah Rahat Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include('admin.includes/title-meta')
    @include('admin.includes/head-css')
    @livewireStyles
</head>
<body>
    {{-- <h1>Admin Login</h1>
    @if ($errors->any())
    <div>
        <strong>{{ $errors->first() }}</strong>
    </div>
@endif
    <form method="POST"  action="{{ route('admin.login.submit') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form> --}}
    <div class="account-pages py-5">
        <div class="container">
            <div class="row justify-content-center">
               
                <div class="col-md-6 col-lg-5">
                    @if ($errors->any())
                    <div class="alert alert-danger text-center" id="error-message">
                        <strong>{{ $errors->first() }}</strong>
                    </div>
                   
    
                    @endif
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <div class="mx-auto mb-4 text-center auth-logo">
                                    <a href="" class="logo-dark">
                                        {{-- <img src="/images/logo-dark.png" height="32" alt="logo dark"> --}}
                                       
                                        <img src="{{asset('asserts/user/img/umrah_dark.png')}}" height="100" alt="logo dark">
                                        
                                    </a>
    
                                    <a  class="logo-light">
                                       
                                        <img src="{{asset('asserts/user/img/UMRAH_COLOR.png')}}" height="100" alt="logo dark">
                                    </a>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Admin Login</h3>
                                    {{-- <p class="text-muted">Sign in to your account to continue</p> --}}
                            </div>
                            <form method="POST" action="" class="mt-4">
    
                                @csrf
    
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                        placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label">Password</label>
                                        {{-- <a href=""class="text-decoration-none small text-muted">Forgot password?</a> --}}
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" 
                                        placeholder="Enter your password">
                                </div>
                                {{-- <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="remember-me">
                                    <label class="form-check-label" for="remember-me">Remember me</label>
                                </div> --}}
                                <div class="d-grid">
                                    <button class="btn btn-dark btn-lg fw-medium" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- <p class="text-center mt-4 text-white text-opacity-50">Don't have an account?
                        <a href="{{ route('second', ['auth', 'signup']) }}"
                            class="text-decoration-none text-white fw-bold">Sign Up</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
    <script>
        // Wait for 3 seconds (3000 milliseconds) then hide the error message
        setTimeout(function() {
            document.getElementById('error-message').style.display = 'none';
        }, 3000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @include('admin.includes/vendor-scripts')
    @livewireScripts

</body>
</html>
