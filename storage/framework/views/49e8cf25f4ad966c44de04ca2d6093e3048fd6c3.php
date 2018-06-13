<html>
<head>
    <title>AddCategory</title>
</head>
<body>
<h1>Adding Category</h1>
<form action="<?php echo e(url('category')); ?>" method="POST">
    <?php echo e(csrf_field()); ?>

    <div>
        <label>Category Name</label>
        <input type="text" name="categoryname" value="<?php echo $category['name'];?>"/>
        <input type="submit" name="but" value="Update">
    </div>
</form>
</body>
</html>