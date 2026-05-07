<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $style ?? asset('Mainstyle.css') }}">
    <script src="{{ asset('script.js') }}" defer></script>
    <title>{{ $title ?? "Qwiz Page" }}</title>
</head>
<body>
    {{ $slot }}
</body>
</html>