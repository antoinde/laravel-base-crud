<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <!-- VALIDATION -->
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif <!-- END-VALIDATION -->


    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div>
            <label for="title">title:</label>
            <input type="text" name="title" required value="{{ old('title', '') }}"
            @error('title') class="is-invalid" @enderror>
        </div>
        <div>
            <label for="description">description:</label>
            <input type="text" name="description" required value="{{ old('description', '') }}"
            @error('description') class="is-invalid" @enderror>
        </div>
        <div>
            <label for="thumb">thumb link:</label>
            <input type="url" name="thumb" required value="{{ old('thumb', '') }}"
            @error('thumb') class="is-invalid" @enderror>
        </div>
        <div>
            <label for="price">price:</label>
            <input type="number" name="price" required value="{{ old('price', '') }}"
            @error('price') class="is-invalid" @enderror>
        </div>
        <div>
            <label for="series">series:</label>
            <input type="text" name="series" required value="{{ old('series', '') }}"
            @error('series') class="is-invalid" @enderror>
        </div>
        <div>
            <label for="sale_date">sale_date:</label>
            <input type="date" name="sale_date" required value="{{ old('sale_date', '') }}"
            @error('sale_date') class="is-invalid" @enderror>
        </div>
        <div>
            <label for="type">type:</label>
            <input type="text" name="type" required value="{{ old('type', '') }}"
            @error('type') class="is-invalid" @enderror>
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</body>

</html>
