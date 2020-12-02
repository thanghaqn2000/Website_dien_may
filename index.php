<?php
include 'inc/header.php';
include 'inc/slider.php';
?>	
<style>
    div.anhvatext{
        height: 250px;
    }
    div.giavanut{
        padding-top:50px; 
        height: 100px;
    }
    img{
        width: 200px;
        background: #ff0;
    }
</style>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Sản phẩm nối bật</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $product_featheread = $product->getproduct_featheread();
            if ($product_featheread) {
                while ($result = $product_featheread->fetch_assoc()) {
                    ?>
                    <div class="grid_1_of_4 images_1_of_4 " style="height: 400px">
                        <a href="details.php?proid=<?php echo $result['productId'] ?>"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" /></a>
                        <h2><?php echo $result['productName'] ?></h2>
                        
                        <p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VND" ?></span></p>
                        <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>

                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <div class="content_bottom">
            <div class="heading">
                <h3>Sản phẩm mới</h3>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <?php
            $product_new = $product->getproduct_new();
            if ($product_new) {
                while ($result_new = $product_new->fetch_assoc()) {
                    ?>
                    <div class="grid_1_of_4 images_1_of_4" style="height: 400px">
                        <div class="anhvatext">
                             <a href="details.php"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
                            <h2><?php echo $result_new['productName'] ?></h2>
                            <p><?php echo $fm->textShorten($result_new['product_desc'], 50) ?></p>
                        </div>    
                        <div class="giavanut">
                            <p><span class="price"><?php echo $fm->format_currency($result_new['price']) . " VND" ?></span></p>
                            <div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
                        </div>
                        
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include 'inc/footer.php';
?>
