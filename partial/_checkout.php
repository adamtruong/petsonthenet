
<!-- php -->



<div class="container" style="padding-top: 100px">
	<div style="width: 100%;">
        <form action="insert.php" method="post">
			
			<div class="row m-0">
				<div class="col-12 col-md-9 p-0">
					<p class="font-weight-bold mb-0 ml-2">INFO CUSTOMER</p>
					<form method="post" >
								<div class="row">
                                
									<div class="col-6 col-12-mobile"><input type="text" name="name" id="name" placeholder="Customer Name"/></div>   
									<div class="col-6 col-12-mobile"><input type="text" name="phone_number" id="phone_number" placeholder="Phone Number"/></div>
									<div class="col-6 col-12-mobile"><input type="text" name="address" placeholder="Address" /></div>
									<div class="col-6 col-12-mobile"><input type="text" name="email" placeholder="Email" /></div>
                                       
								</div>
                                <br>
                                <input name="Submit" type="submit" value="Submit">
                                
					</form>
					<br>
				</div>	


<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['pet_id']);
        }

    }
?>


</div>
				<div class="col-12 col-md-3 p-0">
					<p class="font-weight-bold">MY ORDER</p>
					<div style="width: 100%;height: 1px;background: #ccc"></div>

				<p id="totalPrint2" class="font-weight-bold float-right mt-1 mb-0" style="font-size: 130%;clear: right;"></p>
				</div>
			</div>
		

        <!--  shopping cart items   -->
        
            
                <?php
                    foreach ($product->getData('cart') as $item) :
                        $cart = $product->getProduct($item['pet_id']);
                        $subTotal[] = array_map(function ($item){
                ?>
                <!-- cart item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['image'] ?? "./images/pet (1).jpg" ?>" style="height: 150px; width:120px;" alt="cart1" class="img-fluid">
                    </div>
                    
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20"><?php echo $item['name'] ?? "Unknown"; ?></h5>
                        <h5 class="font-baloo font-size-20"><?php echo $item['pet_id'] ?? "Unknown"; ?></h5>
                        <small> <?php echo $item['breed'] ?? "Brand"; ?></small>
                            
                    </div>

                    <div class="col-sm-2 text">
                        <div class="font-size-20 text-danger font-baloo">
                            $<span class="product_price" data-id="<?php echo $item['pet_id'] ?? '0'; ?>"><?php echo $item['price'] ?? 0; ?></span>
                        </div>
                    </div>
                    <form method="post">
                                <input type="hidden" value="<?php echo $item['pet_id'] ?? 0; ?>" name="pet_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3 border-right">Delete</button>
                    </form>
                </div>
                <!-- !cart item -->
                <?php
                            return $item['price'];
                        }, $cart); // closing array_map function
                    endforeach;
                ?>

        
            
            <!-- subtotal section-->


             
        <div class="row m-0 pr-4">				
			<div class="col-12">
                <br>
                <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
			    <br>
                
			</div>
            <?php
                // $con = mysqli_connect('localhost', 'root', '','petsonthenet');
                // $sql1 = "INSERT INTO user (money_spent) VALUES (floor($subTotal))";
                // $query1 = mysqli_query($con,$sql1);
                // while ($money_spent = mysqli_fetch_assoc($query1)) {
                //     execute($money_spent);
                //     }
            ?>	
	</div>
</div>

<?php
    if (isset($_POST['Submit'])) {
        if (isset($cart)) {
            foreach ($product->getData('pet_info') as $item):
                $array[] = array_map(function ($item) {
                    $cart = $product->getProduct($item['pet_id']);
                    $sql2 = 'INSERT INTO pet_info (number_sold) VALUES (number_sold = number_sold + 1 )SELECT *
                             FROM pet_info WHERE pet_id IN $cart;';

                    $query2 = mysqli_query($con,$sql2);
                    while ($pet_id = mysqli_fetch($query2)) {
                        echo($pet_id['pet_id']);
                    }   
                }, $item);                  
            endforeach;        
        }
    }
?>

<!-- subtotal -->