@include('partials.errors')

<form action="{{route('category.store')}}" method="POST">
    @csrf
    <label for="name">Name: </label> <input type="text" name="name" value=""><br>
    <br>
    <input type="submit">
</form>
