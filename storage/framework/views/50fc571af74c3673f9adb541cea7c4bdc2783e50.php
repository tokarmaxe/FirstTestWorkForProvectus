<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Edit category <?php echo e($category->id); ?></h1>

<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<form action="<?php echo e(route('categories.update',$category->id)); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div>
        <label>Category Name</label>
        <input type="text" name="categoryname" value="<?php echo e($category->name); ?>"/>
        <input type="submit" value="Update">
    </div>
</form>
</body>
</html>