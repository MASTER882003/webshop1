<h1>{{$category->name}}</h1>
<br>
<category_id>{{$category->category_id}}</category_id>
<br>


<br>
<a href="{{route('category.index')}}">Zur Übersicht</a>
<a href="{{route('category.edit',['category'=>$category])}}">Produkt bearbeiten</a>

