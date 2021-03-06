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
						L?? kh??ch h??ng c???a Headphone Shop g???n 2 n??m, mua tai nghe ??? ????y th?? ch???t l?????ng kh???i b??n, v?? l?? shop audio n??n ch???c ch???n s??? y??n t??m h??n nh???ng lo???i tai nghe l??? t??? b??n ngo??i.Nh??n vi??n t?? v???n v???n nhi???t t??nh nh?? ng??y n??o. Ngo??i ra c??n r???t chu ????o cho m??nh th??? g???n ch???c m???u tai nghe trong c??ng m???t t???m gi??, cho ?????n khi ch???n ???????c c??i ??ng m???i th??i. C???m ??n Headphone Shop ???? gi??p m??nh ch???n ???????c tai nghe ??ng ??
						</p>

						<h5 class="customer_name pt-4 ">John Travalta</h5>
						<span class=""> Customer </span>
					</div>

				</div>
				<div class="d-flex border col-5 p-4 shadow m-4">
					<i class="bi bi-quote fa-1x pr-4"></i>

					<div class="container pl-4 ">
						<p class="text-justify" style="text-align:justify;">
							T??i mua tai nghe akg c??ch ????y 2 n??m. R???i h??m nay qua mua type c sang 3.5mm. C??c 2 l???n ?????u ???n. Nhi???u b???n ch?? gi?? ?????t. Nh??ng c??i c???m gi??c b???n b?????c v??o ??c tr???i nghi???m loa n??y ?????n loa kh??c, thi???t b??? n??y ?????n thi???t b??? kh??c ?????n bao gi??? v???a ?? m???i th??i. B???n c?? th??? ng???i c??? 1,2 ti???ng v?? nh??n vi??n s???n s??ng h??? tr??? b???n trong th???i gian ????. Ch??? ????? b???o h??nh c??ng t???t. T??i cho r???ng nh?? v???y m???i t???o n??n 1 th????ng hi???u t???t.
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