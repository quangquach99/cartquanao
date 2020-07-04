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
						<?php $total = 0; foreach($_SESSION['cart'] as $key => $product) { ?>
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
									<span class="price"><?php echo number_format($product['product_price'],2); ?></span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="number" id="quantity" name="product_quantity" class="form-control input-number text-center" value="<?php echo $product['product_quantity']; ?>">
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price" class="addUp"><?php $total += $product['product_price']*$product['product_quantity']; echo number_format($product['product_price']*$product['product_quantity'],2); ?> vnđ</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="./dropFromCart.php?cartKey=<?php echo $key; ?>" class="closed"></a>
								</div>
							</div>
						</div>
						<?php } ?>
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
										<div class="sub">
											<p><span>Tổng:</span> <span><?php echo number_format($total,2); ?> vnđ</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Tổng cộng:</strong></span> <span><?php echo number_format($total,2); ?> vnđ</span></p>
											<a href="index.php?page_layout=checkout" class="btn btn-primary">Thanh toán <i class="icon-arrow-right-circle"></i></a>
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