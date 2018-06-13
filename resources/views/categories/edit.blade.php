<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Edit category {{$category->id}}</h1>

@include('errors')

<form action="{{ route('categories.update',$category->id)}}" method="POST">
    {{csrf_field()}}
    <div>
        <label>Category Name</label>
        <input type="text" name="categoryname" value="{{$category->name}}"/>
        <input type="submit" value="Update">
    </div>
</form>
</body>
</html>