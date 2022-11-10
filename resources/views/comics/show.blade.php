<div>
    <a href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
</div>
<div  style="background-color:chocolate">
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

<a href="{{ route('comics.index') }}">torna indietro alla lista</a>
</div>
