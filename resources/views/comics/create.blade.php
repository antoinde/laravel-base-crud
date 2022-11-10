<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any()) <!-- VALIDATION -->
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif <!-- END-VALIDATION -->


<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div>
        <label for="title">title:</label>
        <input type="text" name="title" id="" value="{{ old('title', '') }}">
    </div>
    <div>
        <label for="description">description:</label>
        <input type="text" name="description" id="" value="{{ old('description', '') }}">
    </div>
    <div>
        <label for="thumb">thumb link:</label>
        <input type="text" name="thumb" id="" value="{{ old('thumb', '') }}">
    </div>
    <div>
        <label for="price">price:</label>
        <input type="text" name="price" id="" value="{{ old('price', '') }}">
    </div>
    <div>
        <label for="series">series:</label>
        <input type="text" name="series" id="" value="{{ old('series', '') }}">
    </div>
    <div>
        <label for="sale_date">sale_date:</label>
        <input type="text" name="sale_date" id="" value="{{ old('sale_date', '') }}">
    </div>
    <div>
        <label for="type">type:</label>
        <input type="text" name="type" id="" value="{{ old('type', '') }}">
    </div>
    <div>
        <input type="submit" value="Send">
    </div>
</form>
</body>
</html>
