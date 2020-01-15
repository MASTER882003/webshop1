@include('partials.errors')

<form action="{{route('category.update',['category'=>$category])}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{$category->name}}"><br>
    <input type="text" name="price" value="{{$category->category_id}}"><br>
    <br>
    <input type="submit">
</form>
