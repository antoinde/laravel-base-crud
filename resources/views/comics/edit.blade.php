<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>

    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">title:</label>
            <input type="text" name="title" id="" value="{{ $comic->title }}">
        </div>
        <div>
            <label for="description">description:</label>
            <input type="text" name="description" id="" value="{{ $comic->description }}">
        </div>
        <div>
            <label for="thumb">thumb link:</label>
            <input type="text" name="thumb" id="" value="{{ $comic->thumb }}">
        </div>
        <div>
            <label for="price">price:</label>
            <input type="text" name="price" id=""  value="{{ $comic->price }}">
        </div>
        <div>
            <label for="series">series:</label>
            <input type="text" name="series" id="" value="{{ $comic->series }}">
        </div>
        <div>
            <label for="sale_date">sale_date:</label>
            <input type="text" name="sale_date" id="" value="{{ $comic->sale_date }}">
        </div>
        <div>
            <label for="type">type:</label>
            <input type="text" name="type" id="" value="{{ $comic->type }}">
        </div>
        <div>
            <input type="submit" value="Save changes">
        </div>


    </form>
    
</body>
</html>