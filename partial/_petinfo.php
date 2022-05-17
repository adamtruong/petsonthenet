<?php
    $pet_id = $_GET['pet_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['pet_id'] == $pet_id) :

            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if (isset($_POST['top_sale_submit'])){
                    // call method addToCart
                    $Cart->addToCart($_POST['user_id'], $_POST['pet_id']);
                }
            }
?>

<section id="pet_info" class="two">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
				<br>
                <img src="<?php echo $item['image'] ?? "./images/pet (1).jpg" ?>" alt="Responsive image" class="img-fluid">
                <div class="col-4 col-12-mobile">
                    <div class="col">
                    <br>
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
            <div class="col-sm-6 py-5">
				<br>
                <h5 class="font-baloo font-size-20"><?php echo $item['breed'] ?? "Poodle Toy Brown"; ?></h5>
                <strong><h3 class="font-baloo font-size-20"><?php echo $item['name'] ?? "Unknown"; ?></h3></strong>

                <hr class="m-0">

                            <!---    pet price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <strong><td>PRICE </td></strong>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['price'] ?? 0; ?></span><small class="text-dark font-size-12"></small></td>
                    </tr>
                </table>

                            <!---    !pet price       -->
            </div>
        </div>

        <div class="col-12">
            <h4 class="font-rubik"><b>Description</b></h4>
            <hr>
            <p class="font-rale font-size-14"><?php echo $item['description'] ?? "Unknown"; ?></p>
            <hr>
		</div>
        </div>
    </div>
</section>

<?php
        endif;
        endforeach;
?>