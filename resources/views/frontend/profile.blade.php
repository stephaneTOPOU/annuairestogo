@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
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
        <div class="cover-image sptb-1 bg-background" data-bs-image-src="../assets/images/banners/banner1.jpg">
            <div class="header-text1 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="text-center text-white ">
                                <h1 ><span class="font-weight-bold">16,25,365</span>entreprises disponible </h1>
                            </div>
                            <div class=" search-background bg-transparent">
                                <form class="form row g-0" action="{{ route('recherche.pays',['slug_pays'=>'tg']) }}" method="GET">
                                    <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                        <input type="text" class="form-control input-lg border-start-0 br-0" id="text4" placeholder="Trouver une entreprise ou un professionel" name="nom">
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
                        <li class="breadcrumb-item"><a href="{{ route('categorie.pays',['slug_pays'=>$Profil_entreprise->slug_pays]) }}">{{ $Profil_entreprise->cat }}</a></li>
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
                                            <a href="#" class="text-dark"><h3 >Gallerie</h3></a>
                                            <div class=" d-flex">
                                                <ul class="d-flex mb-0">
                                                    <li class="me-5"><a href="#" class="icons"><i class="icon icon-briefcase text-muted me-1"></i>{{ $Profil_entreprise->subcat }}</a></li>
                                                    <li class="me-5"><a href="#" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>{{$Profil_entreprise->adresse}}</a></li>
                                                    <li class="me-5"><a href="#" class="icons"><i class="icon icon-eye text-muted me-1"></i>{{$Profil_entreprise->vue}}</a></li>
                                                </ul>
                                                <div class=" d-inline-flex me-5">
                                                    <div class="rating-star sm my-rating-5 me-2" data-rating="4.0">
                                                    </div>4.0
                                                </div>
                                                <div class="rating-star d-flex ">
                                                    <div class=" me-2">
                                                        <div class="rating-star sm">
                                                            <i class="fa fa-heart text-danger"></i>
                                                        </div>
                                                    </div> 135
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-slider carousel-slide-2">
                                            <div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                                                data-bs-loop="false" data-bs-thumb="true">
                                                <div class="carousel-inner slide-show-image" id=full-gallery>
                                                    <div class="carousel-item active"> <img src="{{ asset('assets/images/products/products/v1.jpg') }}" alt="img"> </div>
                                                    @foreach ($galleries as $galleries)
                                                        <div class="carousel-item"> <img src="{{ asset('assets/images/products/products') }}/{{ $galleries->galerie_image }}" alt="{{ $galleries->entreprise }}"> </div>
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
                                    <div class="pt-4 pb-4 px-5 border-top border-top">
                                        <div class="list-id">
                                            <div class="row">
                                                <div class="col">
                                                    <a class="mb-0">Classified ID : #{{ $Profil_entreprise->identifiant }}</a>
                                                </div>
                                                <div class="col col-auto">
                                                    {{-- Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2018 --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="icons">
                                            <a href="#" class="btn btn-info icons"><i class="icon icon-share me-1"></i> Share Ad</a>
                                            <a href="#" class="btn btn-primary icons"><i class="icon icon-heart  me-1"></i> 678</a>
                                            <a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  me-1"></i> Print</a>
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
                                                    <a href="classified.html"></a>
                                                    <img src="{{ asset('assets/images/products/products') }}/{{ $entreprise_sim->logo }}" alt="{{ $entreprise_sim->nom }}" class="cover-image">
                                                </div>
                                                <div class="item-card7-overlaytext">
                                                    <a href="classified.html" class="text-white">{{ $entreprise_sim->subcat }}</a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="item-card7-desc">
                                                        <a href="classified.html" class="text-dark"><h4 class="font-weight-semibold">{{ $entreprise_sim->nom }}</h4></a>
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
                                        <h3 class="card-title">Rating And Reviews</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <p class="mb-2">
                                                        <span class="fs-14 ms-2"><i class="fa fa-star text-yellow me-2"></i>5</span>
                                                    </p>
                                                    <div class="progress progress-md mb-4 h-4">
                                                        <div class="progress-bar bg-success" style="width: 100%;">9,232</div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="mb-2">
                                                        <span class="fs-14 ms-2"><i class="fa fa-star text-yellow me-2"></i>4</span>
                                                    </p>
                                                    <div class="progress progress-md mb-4 h-4">
                                                        <div class="progress-bar bg-info" style="width: 80%;">8,125</div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="mb-2">
                                                        <span class="fs-14 ms-2"><i class="fa fa-star text-yellow me-2"></i>  3</span>
                                                    </p>
                                                    <div class="progress progress-md mb-4 h-4">
                                                        <div class="progress-bar bg-primary" style="width: 60%;">6,263</div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <p class="mb-2">
                                                        <span class="fs-14 ms-2"><i class="fa fa-star text-yellow me-2"></i>  2</span>
                                                    </p>
                                                    <div class="progress progress-md mb-4 h-4">
                                                        <div class="progress-bar bg-secondary" style="width: 30%;">3,463</div>
                                                    </div>
                                                </div>
                                                <div class="mb-5">
                                                    <p class="mb-2">
                                                        <span class="fs-14 ms-2"><i class="fa fa-star text-yellow me-2"></i>  1</span>
                                                    </p>
                                                    <div class="progress progress-md mb-4 h-4">
                                                        <div class="progress-bar bg-orange" style="width: 20%;">1,456</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body p-0">
                                        @foreach ($commentaires as $commentaire)
                                            <div class="media mt-0 p-5">
                                                <div class="d-flex me-3">
                                                    <a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user.png') }}"> </a>
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
                                                                    <a href="#"> <img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user.png') }}"> </a>
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
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Entreprise information</h3>
                                </div>
                                <div class="card-body  item-user">
                                    <div class="profile-pic mb-0">
                                        <img src="{{ asset('assets/images/products/products') }}/{{ $Profil_entreprise->logo }}" class="brround avatar-xxl" alt="{{ $Profil_entreprise->nom }}">
                                        <div >
                                            <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">{{ $Profil_entreprise->nom }}</h4></a>
                                            <span class="text-muted">{{ $Profil_entreprise->subcat }}</span>
                                            {{-- <h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">See All Ads</a></h6> --}}
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body item-user">
                                    <h4 class="mb-4">Contact Info</h4>
                                    <div>
                                        <h6><span class="font-weight-semibold"><i class="fa fa-envelope me-3 mb-2"></i></span><a href="#" class="text-body">{{ $Profil_entreprise->email }}</a></h6>
                                        <h6><span class="font-weight-semibold"><i class="fa fa-phone me-3  mb-2"></i></span><a href="#" class="text-primary">(+228) <b>{{ $Profil_entreprise->telephone1 }} • {{ $Profil_entreprise->telephone2 }}</b></a></h6>
                                        <h6><span class="font-weight-semibold"><i class="fa fa-link me-3 "></i></span><a href="#" class="text-primary">{{ $Profil_entreprise->siteweb }}</a></h6>
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
                                    <h3 class="card-title">Partager</h3>
                                </div>
                                <div class="card-body product-filter-desc">
                                    <div class="product-filter-icons text-center">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="google-bg"><i class="fa fa-whatsapp"></i></a>
                                        <a href="#" class="dribbble-bg"><i class="fa fa-linkedin"></i></a>
                                        <a href="#" class="pinterest-bg"><i class="fa fa-instagram"></i></a>
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
                                            <iframe
                                                src="{{ $Profil_entreprise->geolocalisation }}"
                                                style="border:0; width: 100%; height: 100%;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Entreprise populaire</h3>
                                </div>
                                <div class="card-body ">
                                    <ul class="vertical-scroll">
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/1.png" alt="image" class="w-8 border"/></td>
                                                    <td><h5 class="mb-1 ">Best New Model Watch</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/2.png" alt="image" class="w-8 border"/></td>
                                                    <td><h5 class="mb-1 ">Trending New Model Watches</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/3.png" alt="image" class="w-8 border" /></td>
                                                    <td><h5 class="mb-1 ">Best New Model Watch</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/4.png" alt="image" class="w-8 border" /></td>
                                                    <td><h5 class="mb-1 ">Trending New Model Watches</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/5.png" alt="image" class="w-8 border" /></td>
                                                    <td><h5 class="mb-1 ">Best New Model Watch</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/6.png" alt="image" class="w-8 border" /></td>
                                                    <td><h5 class="mb-1 ">Best New Model Shoes</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="news-item">
                                            <table>
                                                <tr>
                                                    <td><img src="../assets/images/products/7.png" alt="image" class="w-8 border" /></td>
                                                    <td><h5 class="mb-1 ">Trending New Model Shoes</h5><a href="#" class="btn-link">View Details</a><span class="float-end font-weight-bold">$17</span></td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card mb-0">
                                <div class="card-header">
                                    <h3 class="card-title">Ils nous ont rejoint</h3>
                                </div>
                                <div class="card-body">
                                    <div class="rated-products">
                                        <ul class="vertical-scroll">
                                            <li class="item">
                                                <div class="media m-0 mt-0 p-5">
                                                    <img class="me-4" src="../assets/images/products/toys.png" alt="img">
                                                    <div class="media-body">
                                                        <h4 class="mt-2 mb-1">Kids Toys</h4>
                                                        <span class="rated-products-ratings">
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                        </span>
                                                        <div class="h5 mb-0 font-weight-semibold mt-1">$17 - $29</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="media p-5 mt-0">
                                                    <img class="me-4" src="../assets/images/products/1.png" alt="img">
                                                    <div class="media-body">
                                                        <h4 class="mt-2 mb-1">Leather Watch</h4>
                                                        <span class="rated-products-ratings">
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star-o text-warning"> </i>
                                                        </span>
                                                        <div class="h5 mb-0 font-weight-semibold mt-1">$22 - $45</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="media p-5 mt-0">
                                                    <img class=" me-4" src="../assets/images/products/4.png" alt="img">
                                                    <div class="media-body">
                                                        <h4 class="mt-2 mb-1">Digital Watch</h4>
                                                        <span class="rated-products-ratings">
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star-half-o text-warning"> </i>
                                                        </span>
                                                        <div class="h5 mb-0 font-weight-semibold mt-1">$35 - $72</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="media p-5 mt-0">
                                                    <img class=" me-4" src="../assets/images/products/6.png" alt="img">
                                                    <div class="media-body">
                                                        <h4 class="mt-2 mb-1">Sports Shoe</h4>
                                                        <span class="rated-products-ratings">
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star-half-o text-warning"> </i>
                                                            <i class="fa fa-star-o text-warning"> </i>
                                                        </span>
                                                        <div class="h5 mb-0 font-weight-semibold mt-1">$12 - $21</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="media  mb-0 p-5 mt-0">
                                                    <img class=" me-4" src="../assets/images/products/8.png" alt="img">
                                                    <div class="media-body">
                                                        <h4 class="mt-2 mb-1">Ladies shoes</h4>
                                                        <span class="rated-products-ratings">
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star text-warning"> </i>
                                                            <i class="fa fa-star-o text-warning"> </i>
                                                            <i class="fa fa-star-o text-warning"> </i>
                                                        </span>
                                                        <div class="h5 mb-0 font-weight-semibold mt-1">$89 - $97</div>
                                                    </div>
                                                </div>
                                            </li>
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

        <!-- Message Modal -->
		<div class="modal fade" id="contact" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form class="modal-content" method="POST">
                    @csrf
					<div class="modal-header">
						<h5 class="modal-title" id="examplecontactLongTitle">Envoyer le message</h5>
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="text" class="form-control" id="contact-name" placeholder="Votre nom" name="nom">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="contact-email" placeholder="Votre email" name="email">
						</div>
						<div class="form-group mb-0">
							<textarea class="form-control" name="message" rows="6" placeholder="Message" ></textarea>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-success">Envoyer</button>
					</div>
				</form>
			</div>
		</div>
    @foreach ($Profil_entreprises as $Profil_entreprise)
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
@include('frontend.footer.footer18')





