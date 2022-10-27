@php
    $numbers = [1, 2, 4, 5, 66, 54, 43, 6, 76, 7, 3];
@endphp



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Lista</title>
</head>

<body class="container-fluid ms-4">
    @include('header')
    <h2 class="text-success">Pagina List</h2>
    @foreach ($numbers as $element)
        <p>{{ $element }}</p>
    @endforeach
</body>

</html>
