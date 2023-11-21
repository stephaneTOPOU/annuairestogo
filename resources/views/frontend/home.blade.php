@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')
<link href="{{ asset('assets/css/video-player.css') }}" rel="stylesheet"/>

    <!-- autocompletion-->

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Fin autocompletion-->
    {{-- @include('frontend.loader') --}}
    <!-- Popup Intro-->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <a class="close btn btn-sm btn-secondary m-0" data-bs-dismiss="modal" aria-label="Close">
                        X
                    </a>
                </div>
                <div class="modal-body">
                    <div id="popupcarousel" class="owl-carousel testimonial-owl-carousel4">
                        @foreach ($popups as $popup)
                            <div class="item text-center">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 d-block mx-auto">
                                        <div class="testimonia text-center">
                                            <img src="{{ asset('assets/images/products/intro') }}/{{ $popup->popup }}" class="w-100 h-100 mb-3 mx-auto text-center" alt="{{ $popup->nom }}">
                                            <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$popup->slug_pays,'slug_categorie'=>$popup->slug_categorie,'slug_souscategorie'=>$popup->slug_souscategorie,'slug_entreprise'=>$popup->slug_entreprise]) }}" class="btn btn-primary btn-ptill mb-3">{{ $popup->nom }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popup Intro-->

    @include('frontend.topbar.topbar1')
    @include('frontend.topbar.topbar2')
    @include('frontend.topbar.topbar3')
    @include('frontend.topbar.topbar4')
    @include('frontend.topbar.topbar5')

    <!--Sliders Section-->
    <section>
        <div class="banner1  relative slider-images">
            <div class="container-fuild">
                <!-- Carousel -->
                <div class="owl-carousel testimonial-owl-carousel2 slider slider-header ">
                    {{-- <div class="item cover-image" data-bs-image-src="">
                        <img  alt="first slide" src="{{ asset('assets/images/banners/slide-1.jpg') }}" >
                    </div> --}}
                    @foreach ($banner as $ban)
                        <div class="item">
                            <img  alt="{{ $ban->image }}" src="{{ asset('assets/images/banners') }}/{{ $ban->image }}" >
                        </div>
                    @endforeach
                </div>
                <div class="header-text slide-header-text mt-0 mb-0">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-10 d-block mx-auto">
                        <div class="search-background bg-transparent input-field">
                            <div class="text-center text-white  mb-6 ">
                                <h1 class="mb-1 d-none d-md-block">Trouver les meilleures entreprise</h1>
                                <p class="d-none d-md-block">It is a long established fact that a reader will be distracted by the readable.</p>
                            </div>
                            <form action="{{ route('recherche.pays',['slug_pays'=>'tg']) }}" method="GET" class="form row g-0 ">
                                <div class="form-group  col-xl-6 col-lg-3 col-md-12 mb-0 bg-white">
                                    <input type="text" class="form-control input-lg br-te-md-0 br-be-md-0 border-start-0" id="text4" placeholder="Trouer une entreprise ou un professionel" name="nom">
                                    <script type="text/javascript">
                                        var path = "{{ route('autocomplete.pays',['slug_pays'=>'tg']) }}" ;
                                        // path = path.replace(':pays_id', pays_id);
                
                                        $( "#text4" ).autocomplete({
                                            source: function( request, response ) {
                                                $.ajax({
                                                url: path,
                                                type: 'GET',
                                                dataType: "json",
                                                data: {
                                                    text4: request.term
                                                },
                                                success: function( data ) {
                                                    response( data );
                                                }
                                                });
                                            },
                                            select: function (event, ui) {
                                                $('#text4').val(ui.item.label);
                                                console.log(ui.item); 
                                                return false;
                                            }
                                            });
                                    </script>
                                </div>
                                <div class="form-group col-xl-4 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                                    <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category" name="secteur" id="secteur">
                                        <optgroup label="Catégories">
                                            <option disabled selected>Secteur d'activité</option>
                                            @foreach ($souscategories as $souscategorie)
                                                <option value="{{ $souscategorie->libelle }}">{{ $souscategorie->libelle }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                    <button type="submit" class="btn btn-lg btn-block btn-primary br-ts-md-0 br-bs-md-0">
                                        {{-- <i class="fa fa-search"></i> --}}
                                        Trouver
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /header-text -->
            </div>
        </div>
    </section>
    <!--Sliders Section-->

    <!--Categories-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Nos secteur d'activités</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                @foreach ($subcategories as $secteur)
                    <div class="item">
                        <div class="card bg-card">
                            <div class="card-body">
                                <div class="cat-item text-center">
                                    <a href="{{ route('entreprise.pays',['slug_pays'=>$secteur->slug1,'slug_categorie'=>$secteur->slug2,'slug_souscategorie'=>$secteur->slug3]) }}"></a>
                                    <div class="cat-img text-shadow1">
                                        <i class="fa fa-building fa-2x "></i>
                                    </div>
                                    <div class="cat-desc">
                                        <h5 class="mb-6">{{ $secteur->sub_nom }}</h5>
                                        <small class="badge badge-pill badge-primary me-2">{{ $secteur->sous_categories_count }}</small><span class="text-muted">Entreprises</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/Categories-->

    <!--Latest Ads-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Selection d'entreprises</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="myCarousel1" class="owl-carousel owl-carousel-icons2">
                @foreach ($honeures as $honeure)
                    <div class="item">
                        <div class="card mb-0">
                            <div class="item-card2-img">
                                <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$honeure->slug_pays,'slug_categorie'=>$honeure->slug_categorie,'slug_souscategorie'=>$honeure->slug_souscategorie,'slug_entreprise'=>$honeure->slug_entreprise]) }}"></a>
                                <img src="{{ asset('assets/images/products/products') }}/{{ $honeure->photo4 }}" alt="{{ $honeure->nom }}" class="cover-image">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Latest Ads-->

    <!--Locations-->
    <section class="sptb">
        <div class="container">
            <div class="col-md-12">
                <div class="items-gallery">
                    <div class="items-blog-tab text-center">
                        <h2 class="">Les dernieres nouvelles</h2>
                        <div class="items-blog-tab-heading row">
                            <div class="col-12">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-0" class="active show" data-bs-toggle="tab">All</a></li>
                                    @foreach ($cat_annonce as $cat_ann)
                                        <li><a href="#tab-{{ $cat_ann->id }}" data-bs-toggle="tab" class="">{{ $cat_ann->libelle }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-0">
                                <div class="row">
                                    @foreach ($annonce_all as $all)
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <div class="card mb-xl-0">
                                                <span class="ribbon-1">
                                                    <span><i class="fa fa-cutlery"></i></span>
                                                </span>
                                                <div class="item-card8-img  rounded-top-7">
                                                    <img src="{{ asset('assets/images/products') }}/{{ $all->image1 }}" alt="{{ $all->titre }}" class="cover-image">
                                                </div>
                                                <div class="item-card8-overlaytext">
                                                    <h6 class=" fs-20 mb-0">{{ $all->libelle }}</h6>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card8-desc">
                                                        <p class="text-muted">{{ $all->created_at }}</p>
                                                        <h4 class="font-weight-semibold">{{ Str::limit($all->titre, 10) }}</h4>
                                                        <p class="mb-0">{{ Str::limit($all->text1, 40) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                            @foreach ($cat_annonce as $cat_ann)
                                <div class="tab-pane" id="tab-{{ $cat_ann->id }}">
                                    <div class="row">
                                        @foreach ($annonces as $annonce)
                                            @if ($annonce->categorie_id == $cat_ann->id)
                                                <div class="col-xl-4 col-lg-4 col-md-12">
                                                    <div class="card mb-xl-0">
                                                        <span class="ribbon-2">
                                                            <span><i class="fa fa-briefcase"></i></span>
                                                        </span>
                                                        <div class="item-card8-img  rounded-top-7">
                                                            <img src="{{ asset('assets/images/products') }}/{{ $annonce->image }}" alt="{{ $annonce->titre }}" class="cover-image">
                                                        </div>
                                                        <div class="item-card8-overlaytext">
                                                            <h6 class="bg-primary fs-20 mb-0">{{ $cat_ann->libelle }}</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="item-card8-desc">
                                                                <p class="text-muted">{{ $annonce->date }}</p>
                                                                <h4 class="font-weight-semibold">{{ Str::limit($annonce->titre, 10) }}</h4>
                                                                <p class="mb-0">{{ Str::limit($annonce->description, 40) }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Locations-->

    <!--Statistics-->
    <section>
        <div class="about-1 cover-image sptb bg-background-color" data-bs-image-src="{{ asset('assets/images/banners/banner5.jpg') }}">
            <div class="content-text mb-0 text-white info">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status md-mb-0">
                                <div class="counter-icon">
                                    <i class="icon icon-people"></i>
                                </div>
                                <h5>Membres</h5>
                                <h2 class="counter mb-0">@php echo($inscrit + 1000000)@endphp</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Entreprise</h5>
                                <h2 class="counter mb-0">@php echo($nombresEntreprise + 1000000)@endphp</h2>
                            </div>
                        </div>
                        @foreach ($visiteur2 as $visiteur)
                            <div class="col-lg-3 col-md-6">
                                <div class="counter-status status md-mb-0">
                                    <div class="counter-icon text-primary">
                                        <i class="icon icon-docs"></i>
                                    </div>
                                    <h5>Visite par mois</h5>
                                    <h2 class="counter mb-0">@php echo($visiteur->visiteur + 10000000)@endphp</h2>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Nombre de clic</h5>
                                <h2 class="counter">@php echo($visiteur->visiteur + 3000000)@endphp</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Statistics-->
    
    <!--Testimonials-->
    <section class="sptb position-relative">
        <div class="container">
            <div class="section-title center-block text-center">
                <h1 class="position-relative">Testimonials</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="">
                                        <p class="">
                                            <i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
                                        </p>
                                        <h3 class="title">Elizabeth</h3>
                                        <span class="post">Web Developer</span>
                                        <div class="rating-star">
                                            <div class="rating-star sm my-rating-5" data-stars="4s"></div>
                                        </div>
                                        <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page ">
                                                    <span class=""></span>
                                                </div>
                                                <div class="owl-page">
                                                    <span class=""></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="">
                                        <p class=""><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
                                        <div class="testimonia-data">
                                            <h3 class="title">williamson</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-star">
                                                <div class="rating-star sm my-rating-5" data-stars="4s"></div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-pagination">
                                                        <div class="owl-page ">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page active">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="">
                                        <p class=""><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                                        <div class="testimonia-data">
                                            <h3 class="title">Sophie Carr</h3>
                                            <span class="post">Web Developer</span>
                                            <div class="rating-star">
                                                <div class="rating-star sm my-rating-5" data-stars="4s"></div>
                                                <div class="owl-controls clickable">
                                                    <div class="owl-pagination">
                                                        <div class="owl-page ">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page">
                                                            <span class=""></span>
                                                        </div>
                                                        <div class="owl-page active">
                                                            <span class=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Testimonials-->

    <!--Blogs-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Best Rated Locations</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        @foreach ($minispots as $minispot)
                                            <div class="video-list">
                                                <div class="video-list-inner video">
                                                    <div class="play card-img">
                                                        <img src="{{ asset('assets/videos/posters') }}/{{ $minispot->image }}" alt="img" class="play">
                                                    </div>
                                                    <div class="play item-card-text">
                                                        <i class="fa fa-play-circle" aria-hidden="false"></i>
                                                    </div>
                                                    <video class="hide" muted src="{{ asset('assets/videos') }}/{{ $minispot->video }}" controls poster="{{ asset('assets/videos') }}/{{ $minispot->image }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        @foreach ($minispots as $minispot)
                                            <div class="video-list">
                                                <div class="video-list-inner video">
                                                    <div class="card-img">
                                                        <img src="{{ asset('assets/images/locations/london.jpg') }}" alt="img" class="cover-image play">
                                                    </div>
                                                    <div class="item-card-text play">
                                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <video class="hide" muted src="{{ asset('assets/videos') }}/{{ $minispot->video }}" controls poster="{{ asset('assets/videos') }}/{{ $minispot->image }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        @foreach ($minispots as $minispot)
                                            <div class="video-list">
                                                <div class="video-list-inner video">
                                                    <div class="card-img">
                                                        <img src="{{ asset('assets/images/locations/london.jpg') }}" alt="img" class="cover-image play">
                                                    </div>
                                                    <div class="item-card-text play">
                                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <video class="hide" muted src="{{ asset('assets/videos') }}/{{ $minispot->video }}" controls poster="{{ asset('assets/videos') }}/{{ $minispot->image }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        @foreach ($minispots as $minispot)
                                            <div class="video-list">
                                                <div class="video-list-inner video">
                                                    <div class="card-img">
                                                        <img src="{{ asset('assets/images/locations/london.jpg') }}" alt="img" class="cover-image play">
                                                    </div>
                                                    <div class="item-card-text play">
                                                        <i class="fa fa-play-circle" aria-hidden="true"></i>
                                                    </div>
                                                    <video class="hide" muted src="{{ asset('assets/videos') }}/{{ $minispot->video }}" controls poster="{{ asset('assets/videos') }}/{{ $minispot->image }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
                    <div class="item-card overflow-hidden">
                        <div class="item-card-desc">
                            <div class="card overflow-hidden">
                                <div class="card-img">
                                    <img src="{{ asset('assets/images/locations/losangels-1') }}.jpg"  alt="img" class="cover-image">
                                </div>
                                <div class="item-card-text">
                                    <h4 class="mb-0">64,825<span><i class="fa fa-map-marker text-primary me-1"></i>WASHINGTON</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs-->

    <!-- Annonces -->
	<section class="sptb">
		<div class="container">
			<div class="section-title center-block text-center">
				<h2>Les Annonces</h2>
				<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
			</div>
			<div id="myCarousel1" class="owl-carousel annonce-owl-carousel">
                @foreach ($offres as $offre)
                <div class="card overflow-hidden">
					<div class="item-card7-img">
						<div class="item-card7-imgs">
							<a href="{{ route('offre.detail', ['slug'=>$offre->slug,'offre_slug'=>$offre->slug_offres])}}"></a>
							<img src="../assets/images/products/products/job.jpg" alt="img" class="cover-image">
						</div>
						<div class="item-card7-overlaytext">
							<a class="text-white"> {{$offre->categorie}}</a>

						</div>
					</div>
					<div class="card-body">
						<div class="item-card7-desc">
							<div class="item-card7-text">
								<a href="#" class="text-dark"><h4 class="font-weight-semibold">{{$offre->titre}}</h4></a>
							</div>
							<ul class="d-flex">
								<li class=""><a href="#" class="icons"><i class="icon icon-location-pin text-muted me-1"></i> {{$offre->ville}}</a></li>
								<li><a href="#" class="icons"><i class="icon icon-event text-muted me-1"></i>{{$offre->created_at}}</a></li>
								<li class=""><a href="#" class="icons"><i class="icon icon-phone text-muted me-1"></i> {{$offre->telephone}}</a></li>
							</ul>
							<p class="mb-0">{{$offre->description}}</p>
						</div>
					</div>
					<div class="card-body">
						{{-- <a class="me-4"><span class="font-weight-bold">Duration:</span> 6 Months</a> --}}
						<a class="me-4 float-end"><span class="font-weight-bold">Date limite:</span> {{$offre->date_lim}}</a>
					</div>
					<div class="card-body">
						<a href="{{ route('offre.detail', ['slug'=>$offre->slug,'offre_slug'=>$offre->slug_offres])}}" class="btn btn-primary mt-1">Savoir plus</a>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!-- /Annonces -->

    <!--Pricing Tables 2-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Another Pricing</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12 col-lg-3">
                        <div class="pricingTable2 pink">
                            <div class="pricingTable2-header">
                                <h3>Free</h3>
                                <span>Lorem ipsum dolor</span>
                            </div>
                            <div class="pricing-plans">
                                <span class="price-value1"><i class="fa fa-usd"></i><span>0.00</span></span>
                                <span class="month">/month</span>
                            </div>
                            <div class="pricingContent2">
                                <ul>
                                    <li><b>Free</b> Ad posting</li>
                                    <li><b>0</b> Featured Ads</li>
                                    <li><b>100%</b> Secure</li>
                                    <li><b>Custome</b> Reviews</li>
                                    <li><b>24/7</b> Support</li>
                                </ul>
                            </div><!-- CONTENT BOX-->
                            <div class="pricingTable2-sign-up">
                                <a href="#" class="btn btn-block btn-primary">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-lg-3">
                        <div class="pricingTable2 blue">
                            <div class="pricingTable2-header">
                                <h3>Premium</h3>
                                <span>Lorem ipsum dolor</span>
                            </div>
                            <div class="pricing-plans">
                                <span class="price-value1"><i class="fa fa-usd"></i><span>19</span></span>
                                <span class="month">/month</span>
                            </div>
                            <div class="pricingContent2">
                                <ul>
                                    <li><b>Featured</b> Ad posting</li>
                                    <li><b>20</b> Featured Ads</li>
                                    <li><b>100%</b> Secure</li>
                                    <li><b>Custome</b> Reviews</li>
                                    <li><b>24/7</b> Support</li>
                                </ul>
                            </div><!-- CONTENT BOX-->
                            <div class="pricingTable2-sign-up">
                                <a href="#" class="btn btn-block btn-secondary">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-lg-3">
                        <div class="pricingTable2 green">
                            <div class="pricingTable2-header">
                                <h3>Silver</h3>
                                <span>Lorem ipsum dolor</span>
                            </div>
                            <div class="pricing-plans">
                                <span class="price-value1"><i class="fa fa-usd"></i><span>67</span></span>
                                <span class="month">/month</span>
                            </div>
                            <div class="pricingContent2">
                                <ul>
                                    <li><b>Featured</b> Ad posting</li>
                                    <li><b>30</b> Featured Ads</li>
                                    <li><b>100%</b> Secure</li>
                                    <li><b>Custome</b> Reviews</li>
                                    <li><b>24/7</b> Support</li>
                                </ul>
                            </div><!-- CONTENT BOX-->
                            <div class="pricingTable2-sign-up">
                                <a href="#" class="btn btn-block btn-success">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-lg-3">
                        <div class="pricingTable2 info">
                            <div class="pricingTable2-header">
                                <h3>Gold</h3>
                                <span>Lorem ipsum dolor</span>
                            </div>
                            <div class="pricing-plans">
                                <span class="price-value1"><i class="fa fa-usd"></i><span>78</span></span>
                                <span class="month">/month</span>
                            </div>
                            <div class="pricingContent2">
                                <ul>
                                    <li><b>Featured</b> Ad posting</li>
                                    <li><b>40</b> Featured Ads</li>
                                    <li><b>100%</b> Secure</li>
                                    <li><b>Custome</b> Reviews</li>
                                    <li><b>24/7</b> Support</li>
                                </ul>
                            </div><!-- CONTENT BOX-->
                            <div class="pricingTable2-sign-up">
                                <a href="#" class="btn btn-block btn-info">sign up</a>
                            </div><!-- BUTTON BOX-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing Tables 2-->
@include('frontend.footer.footer1')
@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
@include('frontend.footer.footer7')
@include('frontend.footer.footer8')
@include('frontend.footer.footer9')
@include('frontend.footer.footer10')
@include('frontend.footer.footer11')
@include('frontend.footer.footer12')
@include('frontend.footer.footer13')
@include('frontend.footer.footer14')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
<script src="{{ asset('assets/js/video-modal.js') }}"></script>
@include('frontend.footer.footer18')
