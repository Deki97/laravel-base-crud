<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>List of Comics</h1>

    @foreach ($comics as $comic)
        <div>
            <h2>Title: {{ $comic->title }}</h2>
            <div>Series: {{ $comic->series }}</div>
            <div>Price: {{ $comic->price }}</div>
        </div>
    @endforeach
</body>
</html>