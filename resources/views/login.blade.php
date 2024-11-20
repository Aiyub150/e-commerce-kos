<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Login</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name" />
                <input type="password" placeholder="password" />
                <input type="text" placeholder="email address" />
            </form>
            <form class="login-form">
                <input type="text" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <button>login</button>
                <p class="message">Not registered? <a href="/register">Create an account</a></p>
            </form>
        </div>
    </div>
    <script src="{{ asset('app.js') }}"></script>
</body>

</html>