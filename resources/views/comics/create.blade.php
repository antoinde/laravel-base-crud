<form action="{{ route('comics.store') }}" method="post">
    @csrf
    <div>
        <label for="title">title:</label>
        <input type="text" name="title" id="">
    </div>
    <div>
        <label for="description">description:</label>
        <input type="text" name="description" id="">
    </div>
    <div>
        <label for="thumb">thumb link:</label>
        <input type="text" name="thumb" id="">
    </div>
    <div>
        <label for="price">price:</label>
        <input type="text" name="price" id="">
    </div>
    <div>
        <label for="series">series:</label>
        <input type="text" name="series" id="">
    </div>
    <div>
        <label for="sale_date">sale_date:</label>
        <input type="text" name="sale_date" id="">
    </div>
    <div>
        <label for="type">type:</label>
        <input type="text" name="type" id="">
    </div>
    <div>
        <input type="submit" value="Send">
    </div>
</form>