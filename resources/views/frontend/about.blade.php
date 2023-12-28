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
                <h2 class="mb-4">Annuaires Togo</h2>
                {{-- <h4 class="leading-normal">Majority have suffered alteration in some form, by injected humor</h4> --}}
                <p class="leading-normal">Bienvenue sur l'Annuaire Togo, votre référence incontournable pour découvrir et contacter les entreprises, services et professionnels locaux au cœur de ce magnifique pays d'Afrique de l'Ouest. </p>
                <p class="leading-normal">Notre annuaire exhaustif offre une plateforme conviviale où les utilisateurs peuvent trouver rapidement des informations précises et à jour sur une variété de secteurs.</p>
                <p class="leading-normal mb-0">Notre annuaire s'engage à faciliter la connexion entre les consommateurs togolais et les entreprises locales, contribuant ainsi au développement économique de la nation. Explorez l'Annuaire Togo pour découvrir tout ce que ce pays a à offrir, et connectez-vous avec la richesse de ses ressources locales.</p>
            </div>
        </div>
    </section>
    <!--/section-->

    <!--How to work-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Comment ça marche ?</h2>
					{{-- <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p> --}}
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6  service-img">
						<div class="">
							<div class="mb-lg-0 mb-4">
								<div class="service-card text-center">
									<div class="bg-purple-transparent icon-bg box-shadow icon-service text-purple about">
										<img src="{{ asset('assets/images/products/about/employees.png') }}" alt="Annuaire togo">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Entreprises locales</h4>
										<p class="text-muted mb-0">Découvrez une multitude d'entreprises togolaises, des petites entreprises aux grandes sociétés, toutes répertoriées avec des détails utiles.</p>
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
										<img src="{{ asset('assets/images/products/about/megaphone.png') }}" alt="Annuaire togo">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Services professionnels</h4>
										<p class="text-muted mb-0">Trouvez des experts dans divers domaines tels que la santé, le droit, l'éducation, la finance, et bien plus encore.</p>
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
										<img src="{{ asset('assets/images/products/about/pencil.png') }}" alt="Annuaire togo">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Restaurants et divertissements</h4>
										<p class="text-muted mb-0">Cherchez les meilleurs endroits pour savourer la délicieuse cuisine togolaise ou profiter d'une soirée agréable en explorant les options de divertissement.</p>
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
										<img src="{{ asset('assets/images/products/about/coins.png') }}" alt="Annuaire togo">
									</div>
									<div class="servic-data mt-3">
										<h4 class="font-weight-semibold mb-2">Informations utiles</h4>
										<p class="text-muted mb-0">Accédez à des informations pratiques telles que les numéros d'urgence, les horaires d'ouverture et les avis d'autres utilisateurs.</p>
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
			<div class="cover-image sptb bg-background-color" data-bs-image-src="{{ asset('assets/images/banners/banner4.jpg') }}">
				<div class="content-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h2 class="mb-2 display-6">Êtes-vous prêt(e) à enrégistrer votre entreprise sur ce site ?</h2>
							{{-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> --}}
							<div class="mt-5">
								<a href="{{ route('entreprise.register.pays',['slug_pays'=>'tg']) }}" class="btn btn-primary btn-pill">Enrégitrer votre entreprise</a>
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
					<h2>Pourquoi nous choisir ?</h2>
					<p>Choisir l'Annuaire Togo offre une solution pratique et complète pour accéder à des informations locales fiables, favorisant ainsi une expérience utilisateur positive et contribuant au développement économique de la communauté togolaise.</p>
				</div>
				<div class="row ">
					<div class="col-md-6 col-lg-4 features">
						<div class="card">
							<div class="card-body text-center">
								<div class="feature">
									<div class="fa-stack fa-lg  fea-icon bg-success mb-3">
										<i class="fa fa-bullhorn  text-white"></i>
									</div>
									<h3>Exhaustivité des Informations</h3>
									<p>L'Annuaire Togo offre une base de données complète regroupant une variété d'entreprises, de services et de professionnels locaux. Vous pouvez trouver des informations détaillées sur divers secteurs, facilitant ainsi votre recherche.</p>
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
									<h3>Diversité des Secteurs</h3>
									<p>Que vous recherchiez des entreprises, des services professionnels, des commerces, des restaurants ou des divertissements, l'Annuaire Togo offre une diversité de secteurs pour répondre à tous les besoins des utilisateurs.</p>
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
									<h3>Mise à Jour Régulière</h3>
									<p> L'Annuaire Togo s'engage à maintenir ses informations à jour, assurant ainsi que les utilisateurs ont accès aux données les plus récentes. Cela garantit la fiabilité des informations présentes sur la plateforme.</p>
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
									<h3>Connectivité Locale</h3>
									<p>En choisissant l'Annuaire Togo, vous favorisez le soutien aux entreprises et aux services locaux. Cela contribue au développement économique de la région en encourageant la consommation locale et en renforçant les liens au sein de la communauté.</p>
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
									<h3>Facilité de Recherche</h3>
									<p> La plateforme est conçue de manière conviviale, offrant une navigation simple et intuitive. Les utilisateurs peuvent effectuer des recherches rapides en utilisant des filtres pertinents, ce qui permet de gagner du temps et de trouver rapidement les informations recherchées.</p>
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
									<h3>Informations Utiles</h3>
									<p>En plus des coordonnées de base, l'annuaire peut également fournir des informations supplémentaires, telles que les horaires d'ouverture, les avis des utilisateurs, et d'autres détails pertinents pour aider les utilisateurs à prendre des décisions éclairées.</p>
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