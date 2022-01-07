<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package headphone-shop
 */

get_header();
?>

	<main id="primary" class="site-main vw-100">
		


	<!-- SLIDER -->
		<section class="">
			<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bg.png" class="d-block w-100" alt="...">
						<button type="button" class="btn-Link">
							Shop Now
						</button>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slider/bg2.png" class="d-block w-100" alt="...">
						<button type="button" class="btn-Link">
							Find out now
						</button>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>

				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>





		<!-- CATEGORY -->
		<section class="category-group mb-5">
			<div class="title-group row d-flex justify-content-center text-white">
				<h1 class="text-center pt-5"> category </h1>
			</div>
			<div class=" d-flex  justify-content-center">
				<div id="category_box"  class="col position-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/img/category/bg-c-1.png" alt="">
					<div class="cover-box">
						<a href="">
							<button type="button" id="btn-Category" class=" position-absolute position-absolute top-50 start-50 translate-middle">
								shop now
							</button>
						</a>
					</div>
				</div>
				<div id="category_box"  class="col position-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/img/category/bg-c-2.png" alt="">
					<div class="cover-box">
						<a href="">
							<button type="button" id="btn-Category" class=" position-absolute position-absolute top-50 start-50 translate-middle">
								shop now
							</button>
						</a>
					</div>
				</div>
				<div id="category_box" class="col position-relative">
					<img src="<?php echo get_template_directory_uri(); ?>/img/category/bg-c-3.png" alt="">
					<div class="cover-box">
						<a href="">
							<button type="button" id="btn-Category" class=" position-absolute position-absolute top-50 start-50 translate-middle">
								shop now
							</button>
						</a>
					</div>
				</div>
			</div>
		</section>



		<!-- POPULAR PRODUCTS -->
		<section class="container mt-5 ">
			<div class="row d-flex justify-content-center">
				<h1 class="text-center text-uppercase fw-bold pt-5 "> Popular Products </h1>
				<p class="text-center">We offer a number of high quality products to help keep <br> your mind immersed in music</p>
			</div>


			<div class=" pt-5 pb-5">
				<?php echo do_shortcode('[products row=1 columns=4 limit=4 orderby=rating]');?>
			</div>

		</section>

		<!-- SALE PRODUCTS -->
		<section class="container mt-5 ">
			<div class="row d-flex justify-content-center">
				<h1 class="text-center text-uppercase fw-bold pt-5 "> Sale Products </h1>
				<p class="text-center">Discount for Lunar New Year</p>
			</div>


			<div class=" pt-5 pb-5">
				<?php echo do_shortcode('[sale_products row=1 columns=4 limit=4 orderby=rating]');?>
			</div>

		</section>


		<!-- CUSTOMER COMMENTS -->
		<section class="container align-items-center mb-5">
			<div class="row d-flex  justify-content-center">
				<h1 class="text-center text-uppercase fw-bold pt-5 "> WHAT OTHERS SAY? </h1>
			</div>

			<div class="row d-flex justify-content-center">
				<div class="d-flex border col-5 p-4  m-4 shadow">
					<i class="bi bi-quote fa-1x pr-4"></i>

					<div class="container pl-4 ">
						<p class="text-justify" style="text-align:justify;">
						Là khách hàng của Headphone Shop gần 2 năm, mua tai nghe ở đây thì chất lượng khỏi bàn, vì là shop audio nên chắc chắn sẽ yên tâm hơn những loại tai nghe lẻ tẻ bên ngoài.Nhân viên tư vấn vẫn nhiệt tình như ngày nào. Ngoài ra còn rất chu đáo cho mình thử gần chục mẫu tai nghe trong cùng một tầm giá, cho đến khi chọn được cái ưng mới thôi. Cảm ơn Headphone Shop đã giúp mình chọn được tai nghe ưng ý
						</p>

						<h5 class="customer_name pt-4 ">John Travalta</h5>
						<span class=""> Customer </span>
					</div>

				</div>
				<div class="d-flex border col-5 p-4 shadow m-4">
					<i class="bi bi-quote fa-1x pr-4"></i>

					<div class="container pl-4 ">
						<p class="text-justify" style="text-align:justify;">
							Tôi mua tai nghe akg cách đây 2 năm. Rồi hôm nay qua mua type c sang 3.5mm. Các 2 lần đều ổn. Nhiều bạn chê giá đắt. Nhưng cái cảm giác bạn bước vào đc trải nghiệm loa này đến loa khác, thiết bị này đến thiết bị khác đến bao giờ vừa ý mới thôi. Bạn có thể ngồi cả 1,2 tiếng và nhân viên sẵn sàng hỗ trợ bạn trong thời gian đó. Chế độ bảo hành cũng tốt. Tôi cho rằng như vậy mới tạo nên 1 thương hiệu tốt.
						</p>

						<h5 class="customer_name pt-5 ">Kiara Smith</h5>
						<span class=""> Customer </span>
					</div>

				</div>
			</div>
		</section>



		<!-- TO CONTACT LINK -->
		<section class="bg-primary text-white container p-5 mt-5 align-items-center d-flex ">
			<div class="col">
				<h3 class="">Have Any Questions?</h3>
				<p class="">Please contact now if you want to choose a good product !</p>
			</div>
			<button type="button" class="btn btn-outline-light fw-bold">CONTACT US</button>
		</section>












	</main><!-- #main -->

<?php
get_footer();