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


        {{-- Login errors --}}
        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif


        {{-- Login form --}}
        <form method="POST" action="{{ route('login.authenticate') }}">

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


            {{-- Normal login --}}
            <button
                type="submit"
                class="button-login"
            >
                login
            </button>


            {{-- Register --}}
            <a
                href="{{ route('register') }}"
                class="button-register"
            >
                register
            </a>


            {{-- Test login - only visible locally --}}
            @if (app()->environment('local'))

                <a
                    href="{{ route('test.login') }}"
                    class="button-test"
                >
                    Test login
                </a>

            @endif

        </form>

    </div>

</body>

</html>
