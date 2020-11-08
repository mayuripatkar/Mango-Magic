
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    			<div class="carousel-inner">
					<div class="item active">
        				<img src="img/banner1.jpg" style="height: 750px; width: 1600px;">
        			</div>
   					<div class="item">
        				<img src="img/banner3.jpg" style="height: 750px; width: 1600px;">
 					</div>
  				</div>

    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  			</div>
		</div>
     
		<div class="section mainn mainn-raised">		
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<a href="store.php"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop1.jpg" alt=""style="height: 250px; width: 360px;" >
							</div>
							<div class="shop-body">
								<h3>Ripe<br>Mangoes</h3>
								<a href="store.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
				</div>
				
					<div class="col-md-4 col-xs-6">
						<a href="store.php"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop2.jpg" alt="" style="height: 250px; width: 360px;">
							</div>
							<div class="shop-body">
								<h3>Raw<br>Mangoes</h3>
								<a href="store.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					
					<div class="col-md-4 col-xs-6">
						<a href="store.php"><div class="shop">
							<div class="shop-img">
								<img src="./img/shop3.jpg" alt="" style="height: 250px; width: 360px;">
							</div>
							<div class="shop-body">
								<h3>Mango<br>Juices</h3>
								<a href="store.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		 

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Trending</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Ambapoli</a></li>
									<li><a data-toggle="tab" href="#tab1">Khava Poli</a></li>
									<li><a data-toggle="tab" href="#tab1">Aam Papad</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 26 AND 31";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>Rs.$pro_price<del class='product-old-price'>Rs.1000.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										<!-- product -->
										
	
										<!-- /product -->
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section mainn mainn-raised">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								
							</ul>
							
							<a class="primary-btn cta-btn" href="store.php">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 9";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-20%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>Rs.$pro_price<del class='product-old-price'>Rs.1500.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>

							<div id="get_product_home2">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro1.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mangoes</p>
										<h3 class="product-name"><a href="store.php">Alphanso Mango</a></h3>
										<h4 class="product-price">Rs.1080.00 <del class="product-old-price">Rs.1100.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro2.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mangoes</p>
										<h3 class="product-name"><a href="store.php">Ratnagiri Hapus</a></h3>
										<h4 class="product-price">Rs.1050.00 <del class="product-old-price">Rs.1080.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro3.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mangoes</p>
										<h3 class="product-name"><a href="#">Devgad Hapus</a></h3>
										<h4 class="product-price">Rs.1000.00 <del class="product-old-price">Rs.1050.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro4.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mouthwatering</p>
										<h3 class="product-name"><a href="#">Pickle</a></h3>
										<h4 class="product-price">Rs.180.00 <del class="product-old-price">Rs.200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mouthwatering</p>
										<h3 class="product-name"><a href="#">Aamras</h3>
										<h4 class="product-price">Rs.180.00 <del class="product-old-price">Rs.200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro6.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mouthwatering</p>
										<h3 class="product-name"><a href="#">Mango Milkshake</a></h3>
										<h4 class="product-price">Rs280.00 <del class="product-old-price">300.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro7.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mango</p>
										<h3 class="product-name"><a href="store.php"></a></h3>
										<h4 class="product-price">Rs.1080.00 <del class="product-old-price">Rs.1100.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro8.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mangoes</p>
										<h3 class="product-name"><a href="#">Alphanso Mango</a></h3>
										<h4 class="product-price">Rs.980.00 <del class="product-old-price">Rs.1000.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro9.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mango</p>
										<h3 class="product-name"><a href="#">Alphanso Mango</a></h3>
										<h4 class="product-price">Rs.980.00 <del class="product-old-price">Rs.1000.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs">
					    
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro1.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mangoes<p>
										<h3 class="product-name"><a href="store.php">Alphanso Mango</a></h3>
										<h4 class="product-price">Rs.1080.00 <del class="product-old-price">Rs.1100.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro2.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mangoes<p>
										<h3 class="product-name"><a href="store.php">Ratnagiri Hapus</a></h3>
										<h4 class="product-price">Rs.1050.00 <del class="product-old-price">Rs.1080.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro3.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mango</p>
										<h3 class="product-name"><a href="store.php">Devgad Hapus</a></h3>
										<h4 class="product-price">Rs.1000.00 <del class="product-old-price">Rs.1050.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro4.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mouthwatering</p>
										<h3 class="product-name"><a href="store.php">Pickle</a></h3>
										<h4 class="product-price">Rs.180.00 <del class="product-old-price">Rs.200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mouthwatering</p>
										<h3 class="product-name"><a href="store.php">Aamras</h3>
										<h4 class="product-price">Rs.180.00 <del class="product-old-price">Rs.200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/pro6.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Mouthwatering</p>
										<h3 class="product-name"><a href="store.php">Mango Milkshake</a></h3>
										<h4 class="product-price">Rs.280.00 <del class="product-old-price">300.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
		