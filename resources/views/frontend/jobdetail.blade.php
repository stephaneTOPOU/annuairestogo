@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

<!--Sliders Section-->
<div>
    <div class="cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
    </div>
</div>
<!--/Sliders Section-->

		<!--BreadCrumb-->
		@foreach ($offres_details as $details)
			<div class="bg-white border-bottom">
				<div class="container">
					<div class="page-header">
						<h4 class="page-title">{{ $details->titre }}</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Accueil</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ $details->titre }}</li>
						</ol>
					</div>
				</div>
			</div>
		@endforeach
		<!--/BreadCrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					@foreach ($offres_details as $details)
					<div class="col-xl-8 col-lg-8 col-md-12">

						<!--Classified Description-->
						<div class="card overflow-hidden">
							<div class="card-body h-100 boot-slider">
								<div class="item-det mb-4">
									<h3 >{{$details->titre}}</h3></a>
									<div class=" d-flex">
										<ul class="d-flex mb-0">
											<li class="me-5"><i class="icon icon-briefcase text-muted me-1"></i> {{$details->entreprise}}</li>
											<li class="me-5"><i class="icon icon-location-pin text-muted me-1"></i>{{$details->ville}}</li>
											<li class="me-5"><i class="icon icon-calendar text-muted me-1"></i> {{ date('d/m/Y', strtotime($details->date_lim)) }}</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title font-weight-bold">Description</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p>{!! $details->description !!}</p>
								</div>
							</div>
							<div class="card-header">
								<h3 class="card-title font-weight-bold">Mission</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p>{!! $details->mission !!}</p>
								</div>
							</div>
							<div class="card-header">
								<h3 class="card-title font-weight-bold">Profil recherché</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p>{!! $details->profil !!}</p>
								</div>
							</div>
							<div class="pt-4 pb-4 px-5 border-top border-top">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">Lien : {{$details->lien}}</a>
										</div>
										<div class="col col-auto">
											<a class="mb-0 font-weight-bold">Date limite : {{ date('d/m/Y', strtotime($details->date_lim)) }}</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="icons">
									<a href="#" class="btn btn-info icons"><i class="icon icon-share me-1"></i> Partager</a>
									<a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  me-1"></i> Imprimer</a>
								</div>
							</div>
						</div>

						<!--/Classified Description-->

						<h3 class="mb-5 mt-4">Annonces récentes</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->
							@foreach ($offres as $offre)
							<div class="item">
								<div class="card">
									<div class="item-card7-imgs">
										<a href="{{ route('offre.detail',['slug_pays'=>'tg','offre_slug'=>$offre->slug_offres])}}"></a>
										<img src="../assets/images/products/products/job.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a class="text-white"> {{$offre->categorie}}</a>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="{{ route('offre.detail',['slug_pays'=>'tg','offre_slug'=>$offre->slug_offres])}}" class="text-dark"><h4 class="font-weight-semibold">{{$offre->titre}}</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a class="icons"><i class="icon icon-briefcase text-muted me-1"></i>  {{$offre->entreprise}}</a></li>
												<li><a class="icons"><i class="icon icon-event text-muted me-1"></i> @php echo \Carbon\Carbon::parse($offre->created_at)->diffForHumans(null, false, 'fr'); @endphp</a></li>
												<li class="mb-0"><a class="icons"><i class="icon icon-location-pin text-muted me-1"></i> {{$offre->ville}}</a></li>
												<li class="mb-0"><a class="icons"><i class="icon icon-phone text-muted me-1"></i> {{$offre->telephone}}</a></li>
											</ul>
											<p class="mb-0">{!! $offre->description !!}</p>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
						<!--/Related Posts-->
					</div>
					@endforeach
					

					<!--Right Side Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Posted By</h3>
							</div>
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="../assets/images/faces/male/25.jpg" class="brround avatar-xxl" alt="user">
									<div >
										<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">Robert McLean</h4></a>
										<span class="text-muted">Member Since November 2008</span>
										<h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">See All Ads</a></h6>
									</div>

								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope me-3 mb-2"></i></span><a href="#" class="text-body"> robert123@gmail.com</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone me-3  mb-2"></i></span><a href="#" class="text-primary"> 0-235-657-24587</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-link me-3 "></i></span><a href="#" class="text-primary">http://spruko.com/</a></h6>
								</div>
								<div class=" item-user-icons mt-4">
									<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
							<div class="card-footer">
								<div class="text-start">
									<a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Map location</h3>
							</div>
							<div class="card-body">
								<div class="map-header">
									<div class="map-header-layer" id="map2"></div>
								</div>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
@include('frontend.footer.footer7')
@include('frontend.footer.footer9')
@include('frontend.footer.footer10')
<!-- Google Maps Plugin -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCW16SmpzDNLsrP-npQii6_8vBu_EJvEjA"></script>
<script src="{{ asset('assets/plugins/maps-google/jquery.googlemap.js')}}"></script>
<script src="{{ asset('assets/plugins/maps-google/map.js')}}"></script>
@include('frontend.footer.footer11')
@include('frontend.footer.footer12')
@include('frontend.footer.footer13')
<!-- Count Down-->
<script src="{{ asset('assets/plugins/count-down/jquery.lwtCountdown-1.0.js')}}"></script>
@include('frontend.footer.footer14')
<!-- sticky Js-->
<script src="{{ asset('assets/js/sticky.js')}}"></script>
<script src="{{ asset('assets/js/custom-sticky.js')}}"></script>

<!-- Vertical scroll bar Js-->
<script src="{{ asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>
<script src="{{ asset('assets/plugins/vertical-scroll/vertical-scroll.js')}}"></script>

@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
<!--JQuery Slider  js-->
<script src="{{ asset('assets/plugins/boot-slider/boot-slider.min.js')}}"></script>
<script src="{{ asset('assets/js/boots-slider.js')}}"></script>
@include('frontend.footer.footer18')