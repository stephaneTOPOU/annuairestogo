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
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Contact</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Contact</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

        <!--Contact-->
		<div class="sptb bg-white mb-0 pb-0">
			<div class="container">
				<div class="row">
				    <div class="col-lg-5 col-xl-4  col-md-12  d-block mb-7">
					    <div class="section-title center-block text-center">
							<h2>Coordonnées</h2>
						</div>
						<div class="row text-white">
							<div class="col-12 mb-5">
								<div class="support-service bg-primary br-2 mb-4 mb-xl-0">
									<i class="fa fa-phone"></i>
									<h6>+68 872-627-9735</h6>
									<P>Assistance gratuite !</P>
								</div>
							</div>
							<div class="col-12 mb-5">
								<div class="support-service bg-secondary br-2 mb-4 mb-xl-0">
									<i class="fa fa-clock-o"></i>
									<h6>Lun - Ven (07:30 - 18:00)</h6>
									<p>Heures de travail !</p>
								</div>
							</div>
							<div class="col-12">
								<div class="support-service bg-warning br-2">
									<i class="fa fa-envelope-o"></i>
									<h6>yourdomain@gmail.com</h6>
									<p>Soutenez-nous !</p>
								</div>
							</div>
						</div>
					</div>
				    <div class="col-lg-7 col-xl-8 col-md-12 d-block ">
						<div class="single-page" >
							<div class="col-lg-12  col-md-12 mx-auto d-block">
							    <div class="section-title center-block text-center">
									<h2>Formulaire de contact</h2>
								</div>
								<div class="wrapper wrapper2">
									<div class="card mb-0">
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email Address">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
											</div>
											<a href="#" class="btn btn-primary">Send Message</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

        <!--Statistics-->
		<section class="sptb bg-white">
			<div class="container">


			</div>
		</section>
		<!--/Statistics-->

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
<!-- Google Maps Plugin -->
<script src="{{ asset('assets/plugins/Horizontal2/Horizontal-menu/horizontal.js') }}"></script>
@include('frontend.footer.footer11')
@include('frontend.footer.footer13')
@include('frontend.footer.footer10')
@include('frontend.footer.footer14')
@include('frontend.footer.footer12')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')