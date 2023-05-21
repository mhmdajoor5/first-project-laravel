<h1>Create Store </h1>

<form action="{{route('store.insert')}}" method="post">
@csrf
<input type="text" name="title" placeholder="Enter title"><br><br>
<input type="text" name="body" placeholder="Enter body"><br><br>
<button type="submit">Create</button>

</form>


