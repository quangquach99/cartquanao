<!-- main -->
<div class="colorlib-shop">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1">
				<div class="process-wrap">
					<div class="process text-center active">
						<p><span>01</span></p>
						<h3>Giỏ hàng</h3>
					</div>
					<div class="process text-center">
						<p><span>02</span></p>
						<h3>Thanh toán</h3>
					</div>
					<div class="process text-center">
						<p><span>03</span></p>
						<h3>Hoàn tất thanh toán</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row row-pb-md">
			<div class="col-md-10 col-md-offset-1">
				<div class="product-name">
					<div class="one-forth text-center">
						<span>Chi tiết sản phẩm</span>
					</div>
					<div class="one-eight text-center">
						<span>Giá</span>
					</div>
					<div class="one-eight text-center">
						<span>Số lượng</span>
					</div>
					<div class="one-eight text-center">
						<span>Tổng</span>
					</div>
					<div class="one-eight text-center">
						<span>Xóa</span>
					</div>
				</div>
				<form action="fixPayment.php" method="POST" id="fixPayment">
					<?php $total = 0; $max = count($_SESSION['cart']); foreach($_SESSION['cart'] as $key => $product) { ?>
					<div class="product-cart">
						<div class="one-forth">
							<div class="product-img">
								<img class="img-thumbnail cart-img" src="./images/<?php echo $product['product_image']; ?>">
							</div>
							<div class="detail-buy">
								<h4>Mã : <?php echo $product['product_code']; ?></h4>
								<h5><?php echo $product['product_name']; ?></h5>
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span id="price<?php echo $key; ?>"><?php echo $product['product_price']; ?></span> vnđ
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<input onchange="myFunction(<?php echo $key . ',' . $max; ?>,this.value);" min="0" type="number" id="quantity<?php echo $key; ?>" name="product_quantity<?php echo $key; ?>" class="form-control input-number text-center" value="<?php echo $product['product_quantity']; ?>">
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<span id="addUpPrice<?php echo $key; ?>" class="addUp"><?php $total += $product['product_price']*$product['product_quantity']; echo $product['product_price']*$product['product_quantity']; ?></span> vnđ
							</div>
						</div>
						<div class="one-eight text-center">
							<div class="display-tc">
								<a href="./dropFromCart.php?cartKey=<?php echo $key; ?>" class="closed"></a>
							</div>
						</div>
					</div>
					<?php } ?>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="total-wrap">
					<div class="row">
						<div class="col-md-8">

						</div>
						<div class="col-md-3 col-md-push-1 text-center">
							<div class="total">
								<div class="grand-total">
									<p><span><strong>Tổng cộng:</strong></span> <span id="totalMoney"><?php echo $total; ?> </span>vnđ</p>
									<a id="pay" href="index.php?page_layout=checkout" class="btn btn-primary">Thanh toán <i class="icon-arrow-right-circle"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- end main -->