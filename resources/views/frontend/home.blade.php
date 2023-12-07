@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
<link href="{{ asset('assets/css/video-player.css') }}" rel="stylesheet"/>
@include('frontend.header.header6')
@include('frontend.header.header7')


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
                                            <img src="{{ asset('assets/images/popup') }}/{{ $popup->popup_image }}" class="w-100 h-100 mb-3 mx-auto text-center" alt="{{ $popup->nom }}">
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
                        <div>
                            <img  alt="{{ $ban->image }}" src="{{ asset('assets/images/banners') }}/{{ $ban->image }}" >
                        </div>
                    @endforeach
                </div>
                <div class="header-text slide-header-text mt-0 mb-0">
                    <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="search-background bg-transparent input-field">
                            <div class="text-center text-white shadow-font mb-6 ">
                                <h1 class="mb-1 d-none d-md-block">Trouver les meilleures entreprise</h1>
                                <p class="d-none d-md-block">It is a long established fact that a reader will be distracted by the readable.</p>
                            </div>

                            <div class="item-search-tabs">
                                <div class="item-search-menu">
                                            <ul class="nav">
                                                <li class=""><a href="#tab1" class="active" data-bs-toggle="tab">Entreprises</a></li>
                                                <li><a href="#tab2" data-bs-toggle="tab">Professionnels</a></li>
                                            </ul>
                                </div>
                                <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <form action="{{ route('recherche.pays',['slug_pays'=>'tg']) }}" method="GET" class="form row g-0 ">
                                                    <div class="form-group  col-xl-6 col-lg-3 col-md-12 mb-0 bg-white">
                                                        <input type="text" class="form-control input-lg br-te-md-0 br-be-md-0 border-start-0" id="text4" placeholder="Trouver une entreprise" name="nom">
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
                                            <div class="tab-pane" id="tab2">
                                                <form action="{{ route('user.list',['slug_pays'=>'tg']) }}" method="GET" class="form row g-0 ">
                                                    <div class="form-group  col-xl-6 col-lg-3 col-md-12 mb-0 bg-white">
                                                        <input type="text" class="form-control input-lg br-te-md-0 br-be-md-0 border-start-0" id="t44" placeholder="Trouver un professionel" name="name">
                                                        <script type="text/javascript">
                                                            var url = "{{ route('user.autocomplete',['slug_pays'=>'tg']) }}" ;
                                                            // path = path.replace(':pays_id', pays_id);
                                    
                                                            $( "#t44" ).autocomplete({
                                                                source: function( request, response ) {
                                                                    $.ajax({
                                                                    url: url,
                                                                    type: 'GET',
                                                                    dataType: "json",
                                                                    data1: {
                                                                        t44: request.term
                                                                    },
                                                                    success: function( data1 ) {
                                                                        response( data1 );
                                                                    }
                                                                    });
                                                                },
                                                                select: function (event, ui) {
                                                                    $('#t44').val(ui.item.label);
                                                                    console.log(ui.item); 
                                                                    return false;
                                                                }
                                                                });
                                                        </script>
                                                    </div>
                                                    <div class="form-group col-xl-4 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category" name="secteur2" id="secteur2">
                                                            <optgroup label="Fonction">
                                                                <option disabled selected>fonction</option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->fonction }}">{{ $user->fonction }}</option>
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
                            </div>
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
                                    <div class="cat-img text-shadow1 mt-4">
                                        <i class="fa fa-building fa-2x "></i>
                                    </div>
                                    <div class="cat-desc">
                                        <h5 class="mb-6">{{ $secteur->sub_nom }}</h5>
                                        {{-- <small class="badge badge-pill badge-primary me-2">{{ $secteur->sous_categories_count }}</small><span class="text-muted">Entreprises</span> --}}
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
                                <img src="{{ asset('assets/images/nos_selection') }}/{{ $honeure->photo4 }}" alt="{{ $honeure->nom }}" class="cover-image">
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
                                            <a href="{{ route('news',['slug_pays'=>'tg','slug_cat_an'=>$all->slug_cat_an,'slug_annonce'=>$all->slug_annonce]) }}">
                                                <div class="card mb-xl-0">
                                                    <span class="ribbon-1">
                                                        <span><i class="fa fa-briefcase"></i></span>
                                                    </span>
                                                    <div class="item-card8-img  rounded-top-7">
                                                        <img src="{{ asset('assets/images/annonces') }}/{{ $all->image1 }}" alt="{{ $all->titre }}" class="cover-image">
                                                    </div>
                                                    <div class="item-card8-overlaytext">
                                                        <h6 class=" fs-20 mb-0">{{ $all->libelle }}</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card8-desc">
                                                            <p class="text-muted"><i class="icon icon-event text-muted me-1"></i>@php echo \Carbon\Carbon::parse($all->created_at)->diffForHumans(null, false, 'fr'); @endphp</p>
                                                            <h4 class="font-weight-semibold">{{ Str::limit($all->titre, 20) }}</h4>
                                                            <p class="mb-0">{{ Str::limit($all->descriptionCourte, 40) }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
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
                                                    <a href="{{ route('news',['slug_pays'=>'tg', 'slug_cat_an'=>$annonce->slug_cat_an,'slug_annonce'=>$annonce->slug_annonce]) }}">
                                                        <div class="card mb-xl-0">
                                                            <span class="ribbon-2">
                                                                <span><i class="fa fa-briefcase"></i></span>
                                                            </span>
                                                            <div class="item-card8-img  rounded-top-7">
                                                                <img src="{{ asset('assets/images/annonces') }}/{{ $annonce->image1 }}" alt="{{ $annonce->titre }}" class="cover-image">
                                                            </div>
                                                            <div class="item-card8-overlaytext">
                                                                <h6 class="bg-primary fs-20 mb-0">{{ $cat_ann->libelle }}</h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="item-card8-desc">
                                                                    <p class="text-muted"><i class="icon icon-event text-muted me-1"></i>@php echo \Carbon\Carbon::parse($annonce->date)->diffForHumans(null, false, 'fr'); @endphp</p>
                                                                    <h4 class="font-weight-semibold">{{ Str::limit($annonce->titre, 20) }}</h4>
                                                                    <p class="mb-0">{{ Str::limit($annonce->descriptionCourte, 40) }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
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
            <div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
							<div class="item text-center">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8 col-md-12 d-block mx-auto">
											<div class="testimonia">
												<div class="testimonia-img mx-auto mb-3">
													<img src="{{ asset('assets/images/faces/female/11.jpg') }}" class="img-thumbnail rounded-circle alt=" alt="">
												</div>
												<p>
													<i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
												</p>
												<div class="testimonia-data">
													<h4 class="fs-20 mb-1">Heather Bell</h4>
													<div class="rating-star">
														<div class="rating-star sm my-rating-5" data-stars="4s"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8 col-md-12 d-block mx-auto">
											<div class="testimonia">
												<div class="testimonia-img mx-auto mb-3">
													<img src="../assets/images/faces/male/42.jpg" class="img-thumbnail rounded-circle alt=" alt="">
												</div>
												<p><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
												<div class="testimonia-data">
													<h4 class="fs-20 mb-1">David Blake</h4>
													<div class="rating-star">
														<div class="rating-star sm my-rating-5" data-stars="4s"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-8 col-md-12 d-block mx-auto">
											<div class="testimonia">
												<div class="testimonia-img mx-auto mb-3">
													<img src="../assets/images/faces/female/20.jpg" class="img-thumbnail rounded-circle alt=" alt="">
												</div>
												<p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
												<div class="testimonia-data">
													<h4 class="fs-20 mb-1">Sophie Carr</h4>
													<div class="rating-star">
														<div class="rating-star sm my-rating-5" data-stars="4s"></div>
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

    <section>
        <div class="container">
            <div id="myCarousel1" class="owl-carousel users-owl-carousel">
                @foreach ($users as $user)
                    <div class="col-md-12">
                        <a href="{{ route('user.profile',['slug_pays'=>'tg','slug_user'=>$user->slug_user]) }}">
                            <div class="card">
                                <div class="card-body">
                                    <div class="team-section text-center">
                                        <div class="team-img">
                                            @if ($user->photo1)
                                                <img src="{{ asset('assets/images/user_profile') }}/{{ $user->photo1 }}" class="img-thumbnail rounded-circle alt=" alt="{{ $user->name }}" style="width: 128px; height: 128px;">
                                            @else
                                                <img src="{{ asset('assets/images/user_profile/user.png') }}" class="img-thumbnail rounded-circle alt=" alt="{{ $user->name }}" style="width: 128px; height: 128px;">
                                            @endif
                                        </div>
                                        <h4 class="font-weight-bold dark-grey-text mt-4">{{ $user->name }}</h4>
                                        <h6 class="font-weight-bold-text "><i class="icon icon-bag text-muted me-1"></i>{{ $user->fonction }}</h6>
                                        <p class="font-weight-normal dark-grey-text"><i class="icon icon-phone text-muted me-1"></i>{{ $user->telephone1 }}</p>
                                        <div class="text-warning">
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star"> </i>
                                            <i class="fa fa-star-half-full"> </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
                        @foreach ($minispots as $minispot)
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden"> 
                                        <div class="video-list">
                                            <div class="video-list-inner video" style="cursor: pointer">
                                                <div class="play card-img">
                                                    <img src="{{ asset('assets/videos/posters') }}/{{ $minispot->image }}" alt="img" class="play">
                                                </div>
                                                <div class="play item-card-text">
                                                    <i class="fa fa-play-circle" aria-hidden="false"></i>
                                                </div>
                                                <video class="hide" muted src="{{ asset('assets/videos') }}/{{ $minispot->video }}" controls poster="{{ asset('assets/videos') }}/{{ $minispot->image }}">
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="video-container">
                        <a class="close btn btn-sm btn-light w-6" data-bs-dismiss="modal" aria-label="Close" style="font-size: 14px; border-radius: 50%">x</a>
                        <video src="" autoplay controls poster=""></video>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12">
                    <div class="row">
                        <div class="video-youtube">
                            @foreach ($reportages as $reportage)
                                <iframe src="{{$reportage->video}}" frameborder="0" allowfullscreen></iframe>
                            @endforeach                   
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
							<a href="{{ route('offre.detail',['slug_pays'=>'tg','offre_slug'=>$offre->slug_offres])}}"></a>
                            @if ($offre->image)
                                <img src="{{ asset('assets/images/offres') }}/{{ $offre->image }}" alt="{{ $offre->titre }}" class="cover-image">
                            @else
                                <img src="{{ asset('assets/images/offres/job.jpg') }}" alt="{{ $offre->titre }}" class="cover-image">
                            @endif
						</div>
						<div class="item-card7-overlaytext">
							<a class="text-white"> {{$offre->categorie}}</a>
						</div>
					</div>
					<div class="card-body">
						<div class="item-card7-desc">
							<div class="item-card7-text">
								<a href="{{ route('offre.detail',['slug_pays'=>'tg','offre_slug'=>$offre->slug_offres])}}" class="text-dark"><h4 class="font-weight-semibold">{{ Str::limit($offre->titre, 30) }}</h4></a>
							</div>
							<ul class="d-flex">
								<li class=""><a class="icons"><i class="icon icon-location-pin text-muted me-1"></i> {{$offre->ville}}</a></li>
								<li><a class="icons"><i class="icon icon-event text-muted me-1"></i>{{ date('d/m/Y', strtotime($offre->created_at))}}</a></li>
								@if ($offre->telephone)
                                    <li class=""><a class="icons"><i class="icon icon-phone text-muted me-1"></i> {{$offre->telephone}}</a></li> 
                                @endif
							</ul>
							<p class="mb-0">{{ Str::limit($offre->libelle, 40) }}</p>
						</div>
					</div>
					<div class="card-body">
						{{-- <a class="me-4"><span class="font-weight-bold">Duration:</span> 6 Months</a> --}}
						<a class="me-4 float-end"><span class="font-weight-bold">Date limite:</span> {{ date('d/m/Y', strtotime($offre->date_lim)) }}</a>
					</div>
					<div class="card-body">
						<a href="{{ route('offre.detail', ['slug_pays'=>'tg','offre_slug'=>$offre->slug_offres])}}" class="btn btn-primary mt-1">Savoir plus</a>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</section>
	<!-- /Annonces -->

    <!--Slider latteral -->
    <section class="stpb">
        <div class="container mb-8">
            <div id="myCarousel1" class="owl-carousel slider-owl-carousel">
                @foreach ($sliders as $slider)
                    <div class="col-xl-12 col-md-12">
                        <div class="item-card-img" style="border-radius: 7px">
                            <img src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}" alt="{{ $slider->image }}" class="rounded-top-7">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/Slider latteral-->

    <!--Pricing Tables 2-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Another Pricing</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($pubs as $pub)
                    <div class="col-xl-3 col-md-6 col-sm-12 col-lg-3">
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
