<h1>Edit  {{$store->title}}</h1>

<form action="{{route('store.update',$store ->id)}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{$store->title}}"><br><br>
    <input type="text" name="body" value="{{$store->body}}"><br><br>
    <button type="submit">Create</button>

</form>


