<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <title>Register</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
             {{--  <form class="register-form">
                <input type="text" placeholder="name" />
                <input type="password" placeholder="password" />
                <input type="text" placeholder="email address" />
                <button>create</button>
            </form>  --}}
            <form class="login-form" method="POST" action="{{ route('register') }}">
                @csrf
                <input type="text" placeholder="Username" name="name" value="{{ old('name') }}" />
                @error('name')
                <div style="color: red;">{{ $message }}</div>
                @enderror

                <input type="password" placeholder="Password" name="password" />
                @error('password')
                <div style="color: red;">{{ $message }}</div>
                @enderror

                <input type="password" placeholder="Confirm Password" name="password_confirmation" />
                <button type="submit">Register</button>
                <p class="message">Have Account? <a href="/login">Login</a></p>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
