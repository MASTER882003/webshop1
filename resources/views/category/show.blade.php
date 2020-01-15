<h1>{{$category->name}}</h1>
<br>
@foreach($products as $product)
    - {{$product->name}} <br>
@endforeach
<br>
<a href="{{route('category.index')}}">Zur Übersicht</a>
<a href="{{route('category.edit',['category'=>$category])}}">Produkt bearbeiten</a>
