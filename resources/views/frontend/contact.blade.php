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
			<div class="bannerimg cover-image shadow-font" data-bs-image-src="../assets/images/banners/banner2.jpg">
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
				<div class="row mb-6">
					@foreach ($parametres as $parametre)
					<div class="col-lg-12 col-xl-12  col-md-12">
						@if ($parametre->geolocalisation)
                        	<iframe
                        	    src="{{ $parametre->geolocalisation }}"
                        	    style="border:0; width: 100%; height: 300px;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        	</iframe>
                        @else
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126931.66373132428!2d1.24669075!3d6.1823217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e1c113185419%3A0x3224b5422caf411d!2zTG9tw6k!5e0!3m2!1sfr!2stg!4v1675847364153!5m2!1sfr!2stg" style="border:0; width: 100%; height: 300px;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        @endif
					</div>
					@endforeach
					
				</div>
				<div class="row">
				    <div class="col-lg-5 col-xl-4  col-md-12  d-block mb-7">
						@foreach ($parametres as $parametre)
							<div class="section-title center-block text-center">
								<h2>Coordonnées</h2>
							</div>
							<div class="row text-white">
								<div class="col-12 mb-5">
									<div class="support-service bg-primary br-2 mb-4 mb-xl-0">
										<i class="fa fa-phone"></i>
										<h6> (+228) {{ $parametre->telephone1 }}</h6>
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
										<h6>{{ $parametre->email }}</h6>
										<p>Soutenez-nous !</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				    <div class="col-lg-7 col-xl-8 col-md-12 d-block ">
						<div class="single-page" >
							<div class="col-lg-12  col-md-12 mx-auto d-block">
							    <div class="section-title center-block text-center">
									<h2>Formulaire de contact</h2>
								</div>
								<div class="wrapper wrapper2">
									<form class="card mb-0" action="{{ route('contact.save',['slug_pays'=>'tg']) }} " method="POST">
										@csrf
										@if(Session::has('success'))
											<div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
										@endif
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Votre nom" name="nom">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Objet" name="objet">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
											</div>
											<button type="submit" class="btn btn-primary">Envoyer</button>
										</div>
									</form>
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