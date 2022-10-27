@php
    $numbers = [1, 2, 4, 5, 66, 54, 43, 6, 76, 7, 3];
@endphp



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>

<body>
    @include('header')
    <h2>pagina list</h2>
    @foreach ($numbers as $element)
        <p>{{ $element }}</p>
    @endforeach
</body>

</html>
