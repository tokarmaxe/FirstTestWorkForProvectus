<html>
<head><title>Categories</title></head>
<body>
<?php
header('Content-Type: application/json');
$categoryList = json_encode($categories);
echo $categoryList;
?>
</body>

</html>
