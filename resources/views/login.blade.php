<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/login.css')
</head>

<body style="background-image: url('{{ asset('images/login-place.png') }}');">

    <div class="login-container">

        <div class="login-title">
            <h1>Marketplace</h1>
        </div>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div>
                <label for="email">E-mailadres</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div>
                <label for="password">Wachtwoord</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </div>

            <button type="submit" class="button-login">login</button>

            <a href="/register" class="button-register">register</a>
        </form>

    </div>

</body>
</html>