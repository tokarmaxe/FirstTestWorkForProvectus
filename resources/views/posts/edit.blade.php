<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Edit post {{$post->id}}</h1>

@include('errors')

<form action="{{ route('posts.update',$post->id)}}" method="POST">
    {{csrf_field()}}
    <div>
        <label>Post Name:</label><br>
        <input type="text" name="postname" value="{{$post->name}}" /><br>
        <label>Description:</label><br>
        <textarea name="description">{{$post->description}}</textarea><br>
        <label>Category id:</label><br>
        <input type="text" name="category_id" value="{{$post->category_id}}"/><br>
        <input type="submit" value="Add">
    </div>
</form>
</body>
</html>