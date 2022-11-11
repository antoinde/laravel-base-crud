<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    <div style="background-color:chocolate">
        <div>
            <strong>title: </strong>
            {{ $comic['title'] }}
        </div>
        <div>
            <strong>description: </strong>
            {{ $comic['description'] }}
        </div>
        <div>
            <strong>thumb: </strong>
            <img style="width=100px;" src="{{ $comic['thumb'] }}" alt="image of {{ $comic['series'] }}">
        </div>
        <div>
            <strong>price: </strong>
            {{ $comic['price'] }}
        </div>
        <div>
            <strong>series: </strong>
            {{ $comic['series'] }}
        </div>
        <div>
            <strong>sale_date: </strong>
            {{ $comic['sale_date'] }}
        </div>
        <div>
            <strong>type: </strong>
            {{ $comic['type'] }}
        </div>

        <div><a href="{{ route('comics.index') }}">torna indietro alla lista</a></div>
        <div><a href="{{ route('comics.edit', $comic->id) }}">EDIT</a></div>
    </div>

</body>

</html>
