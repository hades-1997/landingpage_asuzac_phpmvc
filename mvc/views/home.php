<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./mvc/views/block/header.php"?>
</head>
<body >
<!-- begin menu -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <?php require_once "./mvc/views/block/menu.php" ?>
    </div>
</nav>
<!-- ========================================== -->
<!--page views model controller-->
<?php require_once "./mvc/views/page/".$data["Page"].".php"?>
<!-- ========================================== -->
<?php require_once "./mvc/views/block/footer.php"?>
<script>
    new WOW().init();
</script>
</body>
</html>