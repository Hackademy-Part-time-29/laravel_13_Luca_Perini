<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<x-navbar></x-navbar>
    {{$slot}}
<x-footer></x-footer>
</body>
</html>