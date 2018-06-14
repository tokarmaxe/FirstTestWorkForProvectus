<html>
<head>
    <title>AddPost</title>
</head>
<body>
<h1>Adding Post</h1>

@include('errors')

<form action="{{ route('posts.store') }}" method="POST">
    {{csrf_field()}}
    <div>
        <label>Post Name:</label><br>
        <input type="text" name="postname"/><br>
        <labe>Description:</labe><br>
        <textarea name="description"></textarea><br>
        <label>Category id:</label><br>
        <input type="text" name="category_id"/><br>
        <input type="submit" value="Add">
    </div>
</form>
</body>
</html>