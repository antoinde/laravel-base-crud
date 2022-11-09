<h1>Sei sicuro di voler eliminare il fumetto?</h1>
<form action="{{ route('comics.destroy', $comic->id) }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Si">
</form>
<button>
    <a href="{{ route('comics.index') }}">No</a>
</button>