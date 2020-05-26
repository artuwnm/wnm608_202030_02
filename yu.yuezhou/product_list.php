<!DOCTYPE html>
<html>
<head>
    <title>Sports Sniper</title>
    <?php include "parts/meta.php" ?>
</head>
<body>
<?php include "parts/navbar.php" ?>
<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(./img/5.jpg); width: 95%; margin: 0 auto;">
    <div class="shoplist">
        <ul class="clearfix">
            <?php getProductList($keywords)?>
        </ul>
    </div>
</div>
<?php include "parts/footer.php" ?>
</body>
</html>
