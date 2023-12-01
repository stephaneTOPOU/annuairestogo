@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
<link rel="stylesheet" href="{{ asset('assets/css/companies.css') }}" />
@include('frontend.header.header6')
@include('frontend.header.header7')

<!-- autocompletion-->

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Fin autocompletion-->


{{-- @include('frontend.loader') --}}

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

    <!--Sliders Section-->
		<div>
            <div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
                @foreach ($Profil_entreprises as $Profil_entreprise)
                <div class="cover-image sptb-1" data-bs-image-src="{{ asset('assets/images/banners/entreprise') }}/{{ $Profil_entreprise->photo4 }}">
                    <div class="header-text1 mb-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                                    <div class="text-center text-white ">
                                        
                                    </div>
                                    <div class=" search-background bg-transparent">
                                        <form class="form row g-0" action="{{ route('recherche.pays',['slug_pays'=>'tg']) }}" method="GET">
                                            <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                <input type="text" class="form-control input-lg border-start-0 br-0" id="text4" placeholder="Trouver une entreprise" name="nom">
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
                                            <div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0">
                                                <select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select" name="secteur">
                                                    <optgroup label="Catégories">
                                                        <option disabled selected>Secteur d'activité</option>
                                                        @foreach ($souscategories as $souscategorie)
                                                            <option value="{{ $souscategorie->libelle }}">{{ $souscategorie->libelle }}</option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                                <button type="submit" class="btn btn-lg btn-block btn-primary br-bs-0 br-ts-0">Trouver</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /header-text -->
                </div>
            @endforeach
            </div>
		</div>
	<!--/Sliders Section-->

    @foreach ($Profil_entreprises as $Profil_entreprise)
        <!--BreadCrumb-->
        <div class="bg-white border-bottom">
            <div class="container">
                <div class="page-header">
                    <h4 class="page-title">{{ $Profil_entreprise->nom }}</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>$Profil_entreprise->slug_pays]) }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ $Profil_entreprise->cat }}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('entreprise.pays',['slug_pays'=>$Profil_entreprise->slug_pays,'slug_categorie'=>$Profil_entreprise->slug_categorie,'slug_souscategorie'=>$Profil_entreprise->slug_souscategorie]) }}">{{ $Profil_entreprise->subcat }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $Profil_entreprise->nom }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--/BreadCrumb-->
    @endforeach

    <!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
                    @foreach ($Profil_entreprises as $Profil_entreprise)
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <!--Classified Description-->
                            <div class="card overflow-hidden">
                                    <div class="card-body h-100 boot-slider">
                                        <div class="item-det mb-4">
                                            <a class="text-dark"><h3 >Gallerie</h3></a>
                                            <div class=" d-flex">
                                                <ul class="d-flex mb-0">
                                                    <li class="me-5"><a class="icons"><i class="icon icon-briefcase text-muted me-1"></i>{{ $Profil_entreprise->subcat }}</a></li>
                                                    <li class="me-5"><a class="icons"><i class="icon icon-location-pin text-muted me-1"></i>{{$Profil_entreprise->adresse}}</a></li>
                                                    <li class="me-5"><a class="icons"><i class="icon icon-eye text-muted me-1"></i>{{$Profil_entreprise->vue}}</a></li>
                                                </ul>
                                                <div class=" d-inline-flex me-5">
                                                    @foreach ($ratings as $rating)
                                                        <div class="rating-star sm my-rating-5 me-2" data-rating="{{ number_format($rating->rate, 1, '.', ' ') }}" id="rating-container">
                                                        </div>{{ number_format($rating->rate, 1, '.', ' ') }}
                                                    @endforeach

                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function () {
                                                            var ratingContainer = document.getElementById('rating-container');
                                                            var ratingValue = ratingContainer.dataset.rating;
                                                    
                                                            // Faites ce que vous devez faire avec la valeur de l'évaluation (par exemple, afficher des étoiles en conséquence)
                                                            console.log('Évaluation actuelle : ' + ratingValue);
                                                        });
                                                    </script>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="product-slider carousel-slide-2">
                                            <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                                                data-bs-loop="false" data-bs-thumb="true">
                                                <div class="carousel-inner slide-show-image" id=full-gallery>
                                                    <div class="carousel-item active"> <img src="{{ asset('assets/images/entreprises/galerie/v1.jpg') }}" alt="image"> </div>
                                                    @foreach ($galleries as $galleries)
                                                        <div class="carousel-item"> <img src="{{ asset('assets/images/entreprises/galerie') }}/{{ $galleries->galerie_image }}" alt="{{ $galleries->entreprise }}"> </div>
                                                    @endforeach
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
                                <div class="card-header">
                                    <h3 class="card-title">Description de {{ $Profil_entreprise->nom }}</h3>
                                </div>
                                <div class="card-body">
                                    @foreach ($services as $service)
                                        <h4 class="mb-4">Qui Sommes-nous ?</h4>
                                        <div class="mb-4">
                                            <p>
                                                {{$service->libelle}}
                                            </p>
                                        </div>
                                        <h4 class="mb-4">Notre mission</h4>
                                        <div class="mb-4">
                                            <p>
                                                {{$service->description}}
                                            </p>
                                        </div>
                                        <h4 class="mb-4">Nos objectifs</h4>
                                        <div class="mb-4">
                                            <p>
                                                {{$service->image5}}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                                    
                                <div class="card-footer">
                                    <div class="icons">
                                        <button id="boutonPartage" class="btn btn-info icons"><i class="icon icon-share me-1"></i> Partager </button>
                                        <a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  me-1"></i> Imprimer </a>
                                    </div>
                                </div>
                            </div>
                            <!--/Classified Description-->

                            <h3 class="mb-5 mt-4">Les entreprises relatives</h3>

                            <!--Related Posts-->
                            <div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
                                    <!-- Wrapper for carousel items -->
                                    @foreach ($entreprise_similaire as $entreprise_sim)
                                        <div class="item">
                                            <div class="card">
                                                <div class="item-card7-imgs">
                                                    <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$entreprise_sim->slug_pays,'slug_categorie'=>$entreprise_sim->slug_categorie,'slug_souscategorie'=>$entreprise_sim->slug_souscategorie,'slug_entreprise'=>$entreprise_sim->slug_entreprise]) }}"></a>
                                                    @if ($entreprise_sim->publireportage2)
                                                        <img src="{{ asset('assets/images/entreprises/covers') }}/{{ $entreprise_sim->publireportage2 }}" alt="{{ $entreprise_sim->nom }}" class="cover-image">
                                                    @else
                                                        <img src="{{ asset('assets/images/entreprises/covers/j1.jpg') }}" alt="{{ $entreprise_sim->nom }}" class="cover-image">
                                                    @endif
                                                </div>
                                                <div class="item-card7-overlaytext">
                                                    <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$entreprise_sim->slug_pays,'slug_categorie'=>$entreprise_sim->slug_categorie,'slug_souscategorie'=>$entreprise_sim->slug_souscategorie,'slug_entreprise'=>$entreprise_sim->slug_entreprise]) }}" class="text-white">{{ $entreprise_sim->subcat }}</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card7-desc">
                                                        <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$entreprise_sim->slug_pays,'slug_categorie'=>$entreprise_sim->slug_categorie,'slug_souscategorie'=>$entreprise_sim->slug_souscategorie,'slug_entreprise'=>$entreprise_sim->slug_entreprise]) }}" class="text-dark"><h4 class="font-weight-semibold">{{ $entreprise_sim->nom }}</h4></a>
                                                    </div>
                                                    <div class="item-card7-text">
                                                        <ul class="icon-card mb-0">
                                                            <li ><a href="#" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>{{ $entreprise_sim->adresse }}</a></li>
                                                            <li class="mb-0"><a href="#" class="icons"><i class="icon icon-phone text-muted me-1"></i>(+228) <b>{{ $entreprise_sim->telephone1 }}</b></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                            <!--/Related Posts-->

                            <!--Comments-->
                            <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Évaluation et avis</h3>
                                    </div>

                                    <div class="card-body p-0">
                                        @foreach ($commentaires as $commentaire)
                                            <div class="media mt-0 p-5">
                                                <div class="d-flex me-3">
                                                    <a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user_profile/user.png') }}"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-0 mb-1 font-weight-semibold">{{ $commentaire->nom }}
                                                        <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
                                                        <span class="fs-14 ms-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
                                                    </h5>
                                                    <small class="text-muted"><span><i class="fa fa-calendar"></i>{{$commentaire->created_at}}</span>  <span><i class=" ms-3 fa fa-clock-o"></i> {{$commentaire->created_at}} </span> </small>
                                                    <p class="font-13  mb-2 mt-2">
                                                    {{ $commentaire->commentaire }}
                                                    </p>

                                                    <a href="{{ route('entreprise.pays.comment2',['slug_pays'=>$Profil_entreprise->slug_pays,'slug_categorie'=>$Profil_entreprise->slug_categorie,'slug_souscategorie'=>$Profil_entreprise->slug_souscategorie,'slug_entreprise'=>$Profil_entreprise->slug_entreprise,'id'=>$commentaire->id ]) }}" class="me-2" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-primary">Répondre</span></a>

                                                    @foreach ($commentaire2s as $commentaire2)
                                                        @if ($commentaire2->commentaires_id == $commentaire->id )
                                                            <div class="media mt-5">
                                                                <div class="d-flex me-3">
                                                                    <a> <img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user_profile/user.png') }}"> </a>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mt-0 mb-1 font-weight-semibold">{{ $commentaire2->nomR }}<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
                                                                    <small class="text-muted"><span><i class="fa fa-calendar"></i>{{$commentaire2->created_at}} </span> <span><i class=" ms-3 fa fa-clock-o"></i> {{$commentaire2->created_at}}  </span></small>
                                                                    <p class="font-13  mb-2 mt-2">
                                                                        {{$commentaire2->messageR}}
                                                                    </p>
                                                                    <a href="{{ route('entreprise.pays.comment2',['slug_pays'=>$Profil_entreprise->slug_pays,'slug_categorie'=>$Profil_entreprise->slug_categorie,'slug_souscategorie'=>$Profil_entreprise->slug_souscategorie,'slug_entreprise'=>$Profil_entreprise->slug_entreprise,'id'=>$commentaire->id ]) }}" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-default">Répondre</span></a>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                            </div>

                            <!--/Comments-->
                            <div class="card mb-lg-0">
                                <div class="card-header">
                                        <h3 class="card-title">Laisser un commentaire</h3>
                                </div>
                                <form class="card-body" action="{{ route('entreprise.pays.comment',['slug_pays'=>$Profil_entreprise->slug_pays,'slug_categorie'=>$Profil_entreprise->slug_categorie,'slug_souscategorie'=>$Profil_entreprise->slug_souscategorie,'slug_entreprise'=>$Profil_entreprise->slug_entreprise]) }}" method="POST">
                                    @csrf
                                    @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                                    @endif
                                    <div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nom" placeholder="Votre nom" name="nom">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="6" placeholder="Commentaire"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Right Side Content-->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="card company-info">
                                <div class="card-header">
                                    <h3 class="card-title">Entreprise information</h3>
                                </div>
                                <div class="card-body  item-user">
                                    <div class="profile-pic mb-0">
                                        @if ($Profil_entreprise->logo)
                                            <img src="{{ asset('assets/images/entreprises/logos') }}/{{ $Profil_entreprise->logo }}" class="avatar-xxl" alt="{{ $Profil_entreprise->nom }}">
                                        @else
                                            <img src="{{ asset('assets/images/entreprises/logos/entreprise.png') }}" class="avatar-xxl" alt="{{ $Profil_entreprise->nom }}">
                                        @endif                        
                                        <div >
                                            <a class="text-dark"><h4 class="mt-3 mb-1 font-weight-bold">{{ $Profil_entreprise->nom }}</h4></a>
                                            <span class="text-muted">{{ $Profil_entreprise->subcat }}</span>
                                            {{-- <h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">See All Ads</a></h6> --}}
                                        </div>

                                    </div>
                                </div>
                                <div class="premium company-status">
                                    @if ($Profil_entreprise->premium == 1)
                                        <span><i class="fa fa-gem"></i> PREMIUM</span>
                                    @endif
                                    @if ($Profil_entreprise->pharmacie_de_garde == 1)
                                        <span><i class="fa fa-check"></i> <b>Garde</b></span>
                                    @else
                                        <span class="closed"><i class="fa fa-shop-slash"></i> <b>Fermé</b></span>
                                    @endif
                                    {{-- <span class="closed"><i class="fa fa-shop-slash"></i> <b>Fermé</b></span> --}}
                                    <span class="opened"><i class="fa fa-check"></i> <b>Ouvert</b></span>
                                </div>
                                <div class="card-body item-user">
                                    <h4 class="mb-4">Informations</h4>
                                    <div>
                                        @if ($Profil_entreprise->email)
                                            <h6><span class="font-weight-semibold"><i class="fa fa-envelope me-3 mb-2"></i></span><a class="text-body">{{ $Profil_entreprise->email }}</a></h6>
                                        @endif
                                        
                                        <h6><span class="font-weight-semibold"><i class="fa fa-phone me-3  mb-2"></i></span><a class="text-primary">(+228) <b>{{ $Profil_entreprise->telephone1 }}</b> @if ($Profil_entreprise->telephone2)
                                            <b>• {{ $Profil_entreprise->telephone2 }}</b>
                                        @endif</a></h6>

                                        @if ($Profil_entreprise->siteweb)
                                            <h6><span class="font-weight-semibold"><i class="fa fa-link me-3 "></i></span><a href="{{$Profil_entreprise->siteweb}}" target="_blank" class="text-primary">{{ $Profil_entreprise->siteweb }}</a></h6>
                                        @endif
                                    </div>
                                    {{-- <div class=" item-user-icons mt-4">
                                        <a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                                        <a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                    </div> --}}
                                </div>
                                <div class="card-footer">
                                    <div class="text-start">
                                        <a href="#" class="btn btn-primary" style=" white-space: normal;" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-user"></i> Ecrire à {{ $Profil_entreprise->nom }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Emplacement sur la carte</h3>
                                </div>
                                <div class="card-body">
                                    <div class="map-header">
                                        <div class="map-header-layer">
                                            @if ($Profil_entreprise->geolocalisation)
                                                <iframe
                                                    src="{{ $Profil_entreprise->geolocalisation }}"
                                                    style="border:0; width: 100%; height: 100%;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                </iframe>
                                            @else
                                                <iframe 
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126931.66373132428!2d1.24669075!3d6.1823217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023e1c113185419%3A0x3224b5422caf411d!2zTG9tw6k!5e0!3m2!1sfr!2stg!4v1675847364153!5m2!1sfr!2stg" style="border:0; width: 100%; height: 100%;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                                </iframe>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-info card">
                                <div class="card-header">
                                    <h3 class="card-title">Horaires de service</h3>
                                </div>
                                <div class="premium mt-4">
                                    @if ($Profil_entreprise->pharmacie_de_garde == 1)
                                        <span><i class="fa fa-check"></i> <b>Garde</b></span>
                                    @else
                                        <span class="closed"><i class="fa fa-shop-slash"></i> <b>Fermé</b></span>
                                    @endif
                                    {{-- <span class="closed"><i class="fa fa-shop-slash"></i> <b>Fermé</b></span> --}}
                                    <span class="opened"><i class="fa fa-check"></i> <b>Ouvert</b></span>
                                </div>
                                <table class="horaires">
                                    <tbody>
                                        @foreach ($horaires as $horaire)
                                            <tr>
                                                <td class="days" value>{{ $horaire->jour }}</td>
                                                <td class="hours text-center" colspan="1">{{ $horaire->h_ouverture }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>                              
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Entreprises populaires</h3>
                                </div>
                                <div class="card-body ">
                                    <ul class="vertical-scroll">
                                        @foreach ($populaires as $populaire)
                                            <li class="news-item">
                                                <table>
                                                    <tr>
                                                        <td><h5 class="mb-1 ">{{ $populaire->nom }}</h5><a href="{{ route('entreprise.pays.profil',['slug_pays'=>$populaire->slug_pays,'slug_categorie'=>$populaire->slug_categorie,'slug_souscategorie'=>$populaire->slug_souscategorie,'slug_entreprise'=>$populaire->slug_entreprise]) }}" class="btn-link">Détails</a></td>
                                                    </tr>
                                                </table>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="card mb-0">
                                <div class="card-header">
                                    <h3 class="card-title">Entreprises récentes</h3>
                                </div>
                                <div class="card-body">
                                    <div class="rated-products">
                                        <ul class="vertical-scroll">
                                            @foreach ($recents as $recent)
                                                <li class="news-item">
                                                    <table>
                                                        <tr>
                                                            <td><h5 class="mb-1 ">{{ $recent->nom }}</h5><a href="{{ route('entreprise.pays.profil',['slug_pays'=>$recent->slug_pays,'slug_categorie'=>$recent->slug_categorie,'slug_souscategorie'=>$recent->slug_souscategorie,'slug_entreprise'=>$recent->slug_entreprise]) }}" class="btn-link">Détails</a></td>
                                                        </tr>
                                                    </table>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/Right Side Content-->
                    @endforeach
				</div>
			</div>
		</section>

@include('frontend.footer.footer1')

    @foreach ($Profil_entreprises as $Profil_entreprise)
        <!-- Message Modal -->
        <div class="modal fade" id="contact" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form class="modal-content" method="POST" action="{{ route('entreprise.contact',['slug_pays'=>$Profil_entreprise->slug_pays,'slug_categorie'=>$Profil_entreprise->slug_categorie,'slug_souscategorie'=>$Profil_entreprise->slug_souscategorie]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="examplecontactLongTitle">{{ $Profil_entreprise->nom }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group" hidden>
                            <input class="form-control" type="text" placeholder="{{ $Profil_entreprise->nom }}" required value="{{ $Profil_entreprise->nom }}" name="entrprise_nom">
                        </div>
                        <div class="form-group" hidden>
                            @if ($Profil_entreprise->email)
                                <input class="form-control" type="text" placeholder="{{ $Profil_entreprise->email }}" required value="{{ $Profil_entreprise->email }}" name="entrprise_email">
                            @else
                                <input class="form-control" type="text" placeholder="contact@showroomafrica.com" required value="contact@showroomafrica.com" name="entrprise_email">
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact-name" placeholder="Votre nom" name="nom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="contact-email" placeholder="Votre email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact-name" placeholder="Objet" name="objet">
                        </div>
                        <div class="form-group mb-0">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($commentaires as $commentaire)
            <!--Comment Modal -->
            <div class="modal fade" id="Comment" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="modal-content" method="POST" action="{{ route('entreprise.pays.comment2',['slug_pays'=>$Profil_entreprise->slug_pays,'slug_categorie'=>$Profil_entreprise->slug_categorie,'slug_souscategorie'=>$Profil_entreprise->slug_souscategorie,'slug_entreprise'=>$Profil_entreprise->slug_entreprise,'id'=>$commentaire->id]) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleCommentLongTitle">Envoyer le message</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Comment-name" placeholder="Votre nom" name="nomR">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="Comment-email" placeholder="Votre email" name="emailR">
                            </div>
                            <div class="form-group mb-0">
                                <textarea class="form-control" name="messageR" rows="6" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    @endforeach

		<!-- Report Modal -->
		<div class="modal fade" id="report" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="examplereportLongTitle">Report Abuse</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control" id="report-name" placeholder="Enter url">
						</div>
						<div class="form-group">
							<select name="country" id="select-countries2" class="form-control form-select">
								<option value="1" selected>Categories</option>
								<option value="2">Spam</option>
								<option value="3">Identity Theft</option>
								<option value="4">Online Shopping Fraud</option>
								<option value="5">Service Providers</option>
								<option value="6">Phishing</option>
								<option value="7">Spyware</option>
							</select>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="report-email" placeholder="Email Address">
						</div>
						<div class="form-group mb-0">
							<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-success">Submit</button>
					</div>
				</div>
			</div>
		</div>


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
<script src="{{ asset('assets/plugins/maps-google/jquery.googlemap.js') }}"></script>
<script src="{{ asset('assets/plugins/maps-google/map.js') }}"></script>
@include('frontend.footer.footer11')
@include('frontend.footer.footer13')
<!-- Count Down-->
<script src="{{ asset('assets/plugins/count-down/jquery.lwtCountdown-1.0.js') }}"></script>
@include('frontend.footer.footer14')
@include('frontend.footer.footer12')
<!-- Vertical scroll bar Js-->
<script src="{{ asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js') }}"></script>
<script src="{{ asset('assets/plugins/vertical-scroll/vertical-scroll.js') }}"></script>
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
<!--JQuery Slider  js-->
<script src="{{ asset('assets/plugins/boot-slider/boot-slider.min.js') }}"></script>
<script src="{{ asset('assets/js/boots-slider.js') }}"></script>
<script>
	document.getElementById('boutonPartage').addEventListener('click', function() {
		// Vérifier si l'API Web Share est disponible dans le navigateur
		if (navigator.share) {
			// Utilisation de l'API Web Share pour partager
			navigator.share({
				title: 'Titre de votre contenu à partager',
				text: 'Description de votre contenu à partager',
				url: window.location.href,
			})
			.then(() => console.log('Contenu partagé avec succès'))
			.catch((error) => console.error('Erreur lors du partage : ', error));
		} else {
			// Si l'API Web Share n'est pas disponible, rediriger vers une autre méthode de partage
			window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
			window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href) + '&text=Regardez cette page!', '_blank');
			
			// Ajoutez d'autres réseaux sociaux ici ou une autre alternative de partage
		}
	});
</script>
<script src="{{ asset('assets/js/company-hours.js') }}"></script>
@include('frontend.footer.footer18')





