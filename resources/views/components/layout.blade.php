<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.svg') }}">

    <title>RNM-HMS</title>
</head>

<body class="bg-white">
    <div class="grid grid-cols-[20rem_1fr]">
        <!-- Side Nav -->
        <x-nav></x-nav>
        <div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>
