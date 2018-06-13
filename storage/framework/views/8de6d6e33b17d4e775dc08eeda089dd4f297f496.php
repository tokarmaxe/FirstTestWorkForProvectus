<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Adding Category</h1>
<form action="<?php echo e(url('added')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div>
        <label>Category Name</label>
        <input type="text" name="categoryname"/>
        <input type="submit" value="Add">
    </div>
</form>
</body>
</html>