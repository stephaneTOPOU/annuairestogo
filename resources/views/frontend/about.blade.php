@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')


{{-- @include('frontend.loader') --}}

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

    <!--Breadcrumb-->
    
	<div>
		<div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
			@foreach ($sliders as $slider)
				<div class="bannerimg cover-image sptb-1 shadow-font" data-bs-image-src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}">
					<div class="header-text mb-0">
						<div class="container">
							<div class="text-center text-white ">
								<h1 class="">A propos</h1>
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
									{{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
									<li class="breadcrumb-item active text-white" aria-current="page"> A propos</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
    <!--/Breadcrumb-->

    <!--section-->
    <section class="sptb">
        <div class="container">
            <div class="text-justify">
                <h2 class="mb-4">Why Claylist?</h2>
                <h4 class="leading-normal">Majority have suffered alteration in some form, by injected humor</h4>
                <p class="leading-normal">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
                If you are going to use a passage of Lorem Ipsum, you need to as necessary All the Lorem Ipsum generators on the Internet tend to repeat</p>
                <p class="leading-normal">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <p class="leading-normal mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--How to work-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>How It Works?</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6  service-img">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/employees.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Register</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6  service-img">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/megaphone.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Create Account</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6  service-img">
						<div class="">
							<div class="mb-sm-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/pencil.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Add Posts</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6  service-img">
						<div class="">
							<div class="">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="../assets/images/products/about/coins.png" alt="img">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Get Earnings</h4>
										<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/How to work-->

        <!--post section-->
		<section>
			<div class="cover-image sptb bg-background-color" data-bs-image-src="../assets/images/banners/banner4.jpg">
				<div class="content-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h2 class="mb-2 display-5">Are you ready for the posting you ads on this Site?</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
							<div class="mt-5">
								<a href="ad-posts.html" class="btn btn-primary btn-pill">Free Post Ad</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/post section-->

        <!--section-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Why Choose Us?</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="row ">
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-success mb-3">
										<i class="fa fa-bullhorn  text-white"></i>
									</div>
									<h3>Provide Free Ads</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-primary mb-3">
										<i class="fa fa-heart  text-white"></i>
									</div>
									<h3>Best Ad Ratings</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-secondary mb-3">
										<i class="fa fa-bookmark  text-white"></i>
									</div>
									<h3>Provide Post Features</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card mb-lg-0">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-warning mb-3">
										<i class="fa fa-line-chart   text-white"></i>
									</div>
									<h3>See  your Ad Progress</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card mb-lg-0 mb-md-0">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-danger mb-3">
										<i class="fa fa-handshake-o   text-white"></i>
									</div>
									<h3>User Friendly</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 features">
						<div class="card mb-0">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-info mb-3">
										<i class="fa fa-phone  text-white"></i>
									</div>
									<h3>24/7 Support</h3>
									<p>our being able to do what we like best, every pleasure is to be welcomed and every pain.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/section-->

@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
@include('frontend.footer.footer7')
<!--Owl Carousel js -->
<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
@include('frontend.footer.footer10')
@include('frontend.footer.footer14')
@include('frontend.footer.footer11')
@include('frontend.footer.footer12')
@include('frontend.footer.footer13')
@include('frontend.footer.footer8')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')