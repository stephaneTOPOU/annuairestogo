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

    <!--Sliders Section-->
	<div>
		<div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
			@foreach ($sliders as $slider)
				<div class="bannerimg cover-image sptb-1 shadow-font" data-bs-image-src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}">
					<div class="header-text mb-0">
						<div class="container">
							<div class="text-center text-white ">
								<h1 class="">Connexion</h1>
								<ol class="breadcrumb text-center">
									<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
									{{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
									<li class="breadcrumb-item active text-white" aria-current="page"> Connexion</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	<!--/Sliders Section-->

        <!--Login-Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="single-page" >
						<div class="col-lg-5 col-xl-6 col-md-6 d-block mx-auto">
							<div class="wrapper wrapper2">
								<form id="login" class="card-body" tabindex="500" action="{{ route('authenticate.pays',['slug_pays'=>'tg']) }}" method="POST">
                                    @csrf
									<h3>Connexion</h3>
									@if(Session::has('connexion'))
										<div class="alert alert-success" role="alert">{{Session::get('connexion') }}</div>
									@endif
									<div class="email">
										<input type="email" name="email">
										<label>Votre email</label>
									</div>
									<div class="passwd">
										<input type="password" name="password">
										<label>Votre mot de passe</label>
									</div>
									<div class="submit">
										<button class="btn btn-primary btn-block">Se Connecter</button>
									</div>
									<p class="mb-2"><a href="{{ route('mdpOubli.pays',['slug_pays'=>'tg']) }}" >Mot de passe oublié</a></p>
									<p class="text-dark mb-0">Vous n'êtes pas inscrit ?<a href="{{ route('user.pays',['slug_pays'=>'tg']) }}" class="text-primary mx-1">Inscrivez-vous</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->

@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
@include('frontend.footer.footer7')
@include('frontend.footer.footer9')
@include('frontend.footer.footer10')
@include('frontend.footer.footer11')
@include('frontend.footer.footer12')
@include('frontend.footer.footer13')
@include('frontend.footer.footer14')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')