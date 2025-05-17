<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang user dengan ID: {{ $name }}</h1>
    @if ($name == 'Clarissa')
        <p>Role Admin</p>
    @else
        <p>Role Guest</p>
    @endif
</body>
</html>