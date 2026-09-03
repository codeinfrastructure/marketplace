<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Test Email</title>
</head>

<body>

    <h1>Test Email</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if(session('error'))
        <p style="color: red;">
            {{ session('error') }}
        </p>
    @endif

    <form method="POST" action="{{ route('test.email') }}">
        @csrf

        <button type="submit">
            Send Test Email
        </button>
    </form>

</body>
</html>
