@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
<link href="{{ asset('assets/css/video-player.css') }}" rel="stylesheet"/>
@include('frontend.header.header6')
@include('frontend.header.header7')

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

<!--Sliders Section-->
<div>
    <div class="cover-image sptb-1" data-bs-image-src="../assets/images/banners/banner1.jpg">
    </div>
</div>
<!--/Sliders Section-->

		<!--BreadCrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">{{$pubs_details->titre}}</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Accueil</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{$pubs_details->titre}}</li>
					</ol>
				</div>
			</div>
		</div>

        <!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">					
					<div class="col-xl-8 col-lg-8 col-md-12">

						<!--Classified Description-->
						<div class="card overflow-hidden">
							<div class="card-body h-100 boot-slider">
								<div class="item-det mb-4">
									<a class="text-red" style="color: #ed1c24"><h3 style="font-weight: bold; font-size: 3em;">{{$pubs_details->titre}}</h3></a>
								</div>
								<div class="mb-4">
									<p>{{$pubs_details->sousTitre}}</p>
								</div>
							</div>							
						</div>
						<div class="card overflow-hidden">
							<div class="card-body h-100 boot-slider">
								<div class="product-slider carousel-slide-2">
									<div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
										data-bs-loop="false" data-bs-thumb="true">
										<div class="carousel-inner slide-show-image" id=full-gallery>
											<div class="carousel-item active"> <img src="{{asset('assets/images/products/products')}}/{{$pubs_details->image1}}" alt="{{$pubs_details->titre}}"> </div>
											@if ($pubs_details->image2)
												<div class="carousel-item"> <img src="{{asset('assets/images/products/products')}}/{{$pubs_details->image2}}" alt="{{$pubs_details->titre}}"> </div>
											@endif
											@if ($pubs_details->image3)
											<div class="carousel-item"> <img src="{{asset('assets/images/products/products')}}/{{$pubs_details->image3}}" alt="{{$pubs_details->titre}}"> </div>
											@endif
											<div class="thumbcarousel">
												<a class="carousel-control-prev" href="#carouselFade" role="button"
													data-bs-slide="prev">
													<i class="fa fa-angle-left" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carouselFade" role="button"
													data-bs-slide="next">
													<i class="fa fa-angle-right" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>							
						</div>
						<div class="card">
							<!-- <div class="card-header">
								<h3 class="card-title">Description</h3>
							</div> -->
							<div class="card-body">
								<div class="mb-4">
									<p>{{$pubs_details->detail}}</p>
								</div>
							</div>
						</div>
						<!--/Classified Description-->

						<h3 class="mb-5 mt-4">Nos offres</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->
							@foreach ($pubs as $pub)
							<div>
								<a href="{{ route('pub.detail', ['slug_pays'=>'tg','pub_slug'=>$pub->slug_pub])}}" style="color: #605e7e">
									<div class="pricingTable2">
										<div class="pricing-plans">
											<span class="price-value1"><span>{{$pub->titre}}</span></span>
										</div>
										<div class="pricingContent2">
											<h2 class="sous-titre">{{$pub->sousTitre}}</h2>
											<p>{{$pub->description}}</p>
										</div><!-- CONTENT BOX-->
										<div class="pricingTable2-sign-up">
											<a href="{{ route('pub.detail', ['slug_pays'=>'tg','pub_slug'=>$pub->slug_pub])}}" class="btn btn-block btn-primary">Découvrir</a>
										</div><!-- BUTTON BOX-->
									</div>
								</a>
							</div>							
							@endforeach							
						</div>
						<!--/Related Posts-->
					</div>
					
					<!--Right Side Content-->
					@foreach ($medias as $media)
						<div class="col-xl-4 col-lg-4 col-md-12">						
							<div class="item-card overflow-hidden">
								<div class="item-card-desc">
									<div class="card text-center overflow-hidden"> 
										<div class="video-list">
											<div class="video-list-inner video" style="cursor: pointer">
												<div class="play card-img">
													<img src="{{ asset('assets/videos/posters') }}/{{ $media->imageSpot }}" alt="{{ $media->imageSpot }}" class="play">
												</div>
												<div class="play item-card-text">
													<i class="fa fa-play-circle" aria-hidden="false"></i>
												</div>
												<video class="hide" muted src="{{ asset('assets/videos') }}/{{ $media->videoSpot }}" controls poster="{{ asset('assets/videos') }}/{{ $media->imageSpot }}">
											</div>
										</div>                                       
									</div>
								</div>
							</div>						
							<div class="mb-4">
								<div class="video-youtube">
										<iframe src="{{$media->youtube}}" frameborder="0" allowfullscreen></iframe>                 
								</div>
							</div> 
						</div>
					@endforeach
					<div class="video-container">
						<a class="close btn btn-sm btn-light w-6" data-bs-dismiss="modal" aria-label="Close" style="font-size: 14px; border-radius: 50%">x</a>
						<video src="" autoplay controls poster=""></video>
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
<!--modal Js-->
<script src="{{ asset('assets/js/video-modal.js') }}"></script>
@include('frontend.footer.footer18')