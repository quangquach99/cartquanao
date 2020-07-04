<?php 

$products = new Dbh;
$allProducts = $products->getAllProducts();

?>
<!-- main -->
<div class="colorlib-shop">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row row-pb-lg">
				<?php foreach($allProducts as $product) { ?>
					<div class="col-md-4 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(./images/<?php echo $product['product_image']; ?>);">
								<div class="cart">
									<p>
										<span>
											<a href="./?page_layout=detail&product_id=<?php echo $product['product_id']; ?>">
												<i class="icon-eye"></i>
											</a>
										</span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="./?page_layout=detail&product_id=<?php echo $product['product_id']; ?>"><?php echo $product['product_name'] ?></a></h3>
								<p class="price"><span><?php echo number_format($product['product_price'],2); ?></span></p>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end main -->