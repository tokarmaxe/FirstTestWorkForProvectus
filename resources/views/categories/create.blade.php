<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Adding Category</h1>

@include('errors')

<form action="{{ route('categories.store') }}" method="POST">
    {{csrf_field()}}
    <div>
        <label>Category Name</label>
        <input type="text" name="categoryname"/>
        <input type="submit" value="Add">
    </div>
</form>
</body>
</html>