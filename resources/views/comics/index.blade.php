<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color:rgb(194, 205, 216)">
    <h1 style="margin-left: 30px;">Lista dei fumetti</h1>
    <ol>
        @foreach ($comics as $comic)
            <li style="margin: 5px 0;">
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic['title'] }}</a>
                <button>
                    <a class="button-type" href="{{ route('comics.confirmDelete', $comic->id) }}">Elimina</a>
                </button>
                <!--
            <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
                <input type="submit" value="Elimina">
            </form>
            -->

            </li>
        @endforeach
        <ul>
            <li><a class="button-type" href="{{ route('comics.create') }}">Crea nuovo fumetto!</a></li>
        </ul>
    </ol>
</body>

</html>
