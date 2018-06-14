<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Edit post <?php echo e($post->id); ?></h1>

<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<form action="<?php echo e(route('posts.update',$post->id)); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div>
        <label>Post Name:</label><br>
        <input type="text" name="postname" value="<?php echo e($post->name); ?>" /><br>
        <label>Description:</label><br>
        <textarea name="description"><?php echo e($post->description); ?></textarea><br>
        <label>Category id:</label><br>
        <input type="text" name="category_id" value="<?php echo e($post->category_id); ?>"/><br>
        <input type="submit" value="Update">
    </div>
</form>
</body>
</html>