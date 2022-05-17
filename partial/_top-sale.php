<?php
    shuffle($product_shuffle);

    // request method post
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['pet_id']);
        }
    }
?>


<section id="product" class ="two">
    <div class="container py-5">
        <h2 class="font-rubik font-size-20">Pets</h2>
		<h4 class="font-rubik font-size-20">Find your new best friend</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($product_shuffle as $item) { ?>
            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?pet_id=%s', 'product.php',  $item['pet_id']); ?>"><img src="<?php echo $item['image'] ?? "./images/pet (1).jpg"; ?>" alt="product1" class="img-fluid" style="width:  300px; height: 300px; object-fit:contain;"></a>
                    <div class="text-center">
                        <h6><?php echo  $item['breed'] ?? "Unknown";  ?></h6>
                        <div class="price py-2">
                            <span>$<?php echo $item['price'] ?? '0' ; ?></span>
                        </div>
                        <form method="post">
                            <input type="hidden" name="pet_id" value="<?php echo $item['pet_id'] ?? '1'; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                            <?php
                            if (in_array($item['pet_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php } // closing foreach function ?>
        </div>
    </div>
</section>