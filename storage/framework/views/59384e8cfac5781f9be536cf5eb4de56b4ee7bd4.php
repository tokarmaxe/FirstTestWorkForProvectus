<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Adding Category</h1>

<?php echo $__env->make('errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<form action="<?php echo e(route('categories.store')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div>
        <label>Category Name</label>
        <input type="text" name="categoryname"/>
        <input type="submit" value="Add">
    </div>
</form>
</body>
</html>