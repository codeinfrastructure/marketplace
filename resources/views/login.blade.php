<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <title>Login</title>

    @vite('resources/css/login.css')
</head>

<body class="login-body">

    <!-- NIEUW: Zwevende knop om het paneel weer te openen -->
    <button id="maximize-btn" class="maximize-button hidden">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://w3.org">
            <path d="M13 17H17V13H15V15H13V17Z" fill="currentColor" />
            <path d="M13.5858 11.8284L16.4142 9L15 7.58578L12.1716 10.4142L13.5858 11.8284Z" fill="currentColor" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 5H17C18.1046 5 19 5.89543 19 7V17C19 18.1046 18.1046 19 17 19H7C5.89543 19 5 18.1046 5 17V7C5 5.89543 5.89543 5 7 5ZM17 7H7V17H17V7Z" fill="currentColor" />
        </svg>
    </button>

    <div class="login-page-wrapper">

        <div id="left-panel" class="login-left-panel">
            
            <button id="minimize-btn" class="minimize-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://w3.org">
                    <path d="M11 7H7V11H9V9H11V7Z" fill="currentColor" />
                    <path d="M10.4142 12.1716L7.58578 15L9 16.4142L11.8284 13.5858L10.4142 12.1716Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 5H7C5.89543 5 5 5.89543 5 7V17C5 18.1046 5.89543 19 7 19H17C18.1046 19 19 18.1046 19 17V7C19 5.89543 18.1046 5 17 5ZM7 7H17V17H7V7Z" fill="currentColor" />
                </svg>
            </button>

            <div class="left-panel-content">
                
              <button type="button" class="button-login">
              <img src="{{ asset('images/about-us.png') }}" alt="About us" class="button-icon">
              <span>About us</span>
              </button>

            </div>
        </div>


        <div class="login-right-panel">

            <div class="login-container">

                <

                @if ($errors->any())
                    <div class="error">
                        {{ $errors->first() }}
                    </div>
                @endif

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

                    <button
                        type="submit"
                        class="button-login"
                    >
                        login
                    </button>

                    <a
                        href="{{ route('register') }}"
                        class="button-register"
                    >
                        register
                    </a>

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

        </div>

    </div>

    <script>
        const leftPanel = document.getElementById('left-panel');
        const minimizeBtn = document.getElementById('minimize-btn');
        const maximizeBtn = document.getElementById('maximize-btn');

        minimizeBtn.addEventListener('click', function() {
            leftPanel.classList.add('minimized');
            maximizeBtn.classList.remove('hidden');
        });

        maximizeBtn.addEventListener('click', function() {
            leftPanel.classList.remove('minimized');
            maximizeBtn.classList.add('hidden');
        });
    </script>

</body>

</html>
