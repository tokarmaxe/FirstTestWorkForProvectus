<html>
<head>
    <title>Categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Categories</h1>
        <table style="width: 100%; border:1px">
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->id); ?></td>
            <td><?php echo e($category->name); ?></td>
            <td><a href="<?php echo e(route('categories.show',$category->id)); ?>" class="btn btn-primary">view</a></td>
            <td><a href="<?php echo e(route('categories.edit',$category->id)); ?>" class="btn btn-warning">edit</a></td>
            <td>
                <form action="<?php echo e(route('categories.destroy',$category->id)); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('delete')); ?>

                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success">Create</a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>
