<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>

<body class="">
    <div>
        <!-- Side Nav -->
        <x-nav></x-nav>
        
        <h1>{{ $slot }}</h1>
    </div>

</body>

</html>