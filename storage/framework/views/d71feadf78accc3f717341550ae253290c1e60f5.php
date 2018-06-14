<html>
<head>
    <title>AddPost</title>
</head>
<body>
<h1>Adding Post</h1>

<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<form action="<?php echo e(route('posts.store')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

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