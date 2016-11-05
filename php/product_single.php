<?php
/**
 * Created by PhpStorm.
 * User: chennadi
 * Date: 10/26/2016
 * Time: 2:08 AM
 */
include("dbconfig.php");
if($_SERVER["REQUEST_METHOD"] == "GET") {



$id = mysqli_real_escape_string($db,$_GET['product_id']);
//echo 'got id as'.$id;
$sql = "SELECT * FROM products where id=$id";
//echo sql;
//echo $sql;
$retval = mysqli_query($db, $sql);

if (!$retval) {
    die('Products table is empty');
}

if (isset($_COOKIE[$id])) {
    $id_value = intval($_COOKIE[$id]) + 1;
    setcookie($id,$id_value);
}else{
    setcookie($id,1);
}

setcookie("time_$id",time());

?>

<!DOCTYPE html>
<html lang="en">

<?php include '../php/widgets/head.php' ?>
<body>
<div id="wrapper">
    <?php include '../php/widgets/sidebar.php' ?>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="well well-sm">
                            <strong>Product List</strong>
                            <div class="btn-group" style="padding-left: 10px;">
                                <a href="#" id="list" class="btn btn-default btn-sm"><span
                                        class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                                        class="glyphicon glyphicon-th"></span>Grid</a>
                            </div>
                        </div>
                        <div id="products" class="row list-group">
                            <?php while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) { ?>
                                <div class="item  col-xs-4 col-lg-4">
                                    <div class="thumbnail">
                                        <a href="/php/product_single.php?product_id=<?php echo $row['id']?>">
                                            <img class="group list-group-image" style="max-width:600px"
                                                 src="/images/products/<?php echo $row['img_link'] ?>" alt=""/>
                                        </a>
                                        <div class="caption">
                                            <h4 class="group inner list-group-item-heading">
                                                <?php echo $row['title'] ?></h4>
                                            <p class="group inner list-group-item-text">
                                                <?php echo $row['description'] ?></h4></p>
                                            <div class="row">
                                                <div class="col-xs-12 col-md-6">
                                                    <p class="lead">
                                                        <?php echo $row['price'] ?></h4></p>
                                                </div>
                                                <div class="col-xs-12 col-md-6">
                                                    <a class="btn btn-success" href="/php/product_single.php?product_id=<?php echo $row['id']?>">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../php/widgets/footer.php' ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#list').click(function (event) {
            event.preventDefault();
            $('#products .item').addClass('list-group-item');
        });
        $('#grid').click(function (event) {
            event.preventDefault();
            $('#products .item').removeClass('list-group-item');
            $('#products .item').addClass('grid-group-item');
        });

        $('#grid').click();
    });


</script>
</body>
</html>

