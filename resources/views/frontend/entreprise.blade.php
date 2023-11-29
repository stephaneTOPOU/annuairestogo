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
    <!-- Popup Intro-->

    <link rel="stylesheet" href="{{ asset('assets/css/entreprise.css')}}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

    <!--Sliders Section-->
		<div>
            <div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
                @foreach ($sliders as $slider)
                <div class="cover-image sptb-1" data-bs-image-src="{{ asset('assets/images/banners') }}/{{ $slider->image }}"></div>
            @endforeach
            </div>
		</div>
	<!--/Sliders Section-->

    @foreach ($subcategories as $subcategorie)
        <!--Breadcrumb-->
                    <div class="bg-white border-bottom">
                        <div class="container">
                            <div class="page-header">
                                <h4 class="page-title">{{ $subcategorie->sousCategorie }}</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>$subcategorie->slug_pays]) }}">Home</a></li>
                                    {{-- <li class="breadcrumb-item"><a href="{{ route('subcat.pays',['slug_pays'=>$subcategorie->slug_pays,'slug_categorie'=>$subcategorie->slug_categorie]) }}">{{ $subcategorie->sousCategorie }}</a></li> --}}
                                    <li class="breadcrumb-item active" aria-current="page">{{ $subcategorie->sousCategorie }}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
        <!--/Breadcrumb-->            
    @endforeach

    <!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-8 col-md-12">
						<!--Add lists-->
						<div class=" mb-lg-0">
							<div class="">
								<div class="item2-gl ">
									<div class=" mb-0">
										<div class="">
											<div class="p-5 bg-white">
												<div class="search-background mb-0">
                                                    <form class="form row g-0" action="{{ route('recherche.pays',['slug_pays'=>'tg']) }}" method="GET">
                                                        <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
                                                            <input type="text" class="form-control input-lg border-start-1 br-be-0 br-te-0" id="text4" placeholder="Trouver une entreprise" name="nom">
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
									<div class="tab-content">
										<div class="tab-pane active" id="tab-11">
                                            @foreach ($entreprises as $entreprise)
                                                <div class="card overflow-hidden">
                                                    <div class="d-md-flex">
                                                        <div class="item-card9-img">
                                                            {{-- <div class="arrow-ribbon bg-primary">Rent</div> --}}
                                                            <div class="item-card9-imgs">
                                                                <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$entreprise->slug_pays,'slug_categorie'=>$entreprise->slug_categorie,'slug_souscategorie'=>$entreprise->slug_souscategorie,'slug_entreprise'=>$entreprise->slug_entreprise]) }}"></a>
                                                                <img src="{{ asset('assets/images/products') }}/{{ $entreprise->logo }}" alt="{{ $entreprise->nom }}" class="cover-image">
                                                            </div>
                                                            {{-- <div class="item-card9-icons">
                                                                <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$entreprise->slug_pays,'slug_categorie'=>$entreprise->slug_categorie,'slug_souscategorie'=>$entreprise->slug_souscategorie,'slug_entreprise'=>$entreprise->slug_entreprise]) }}" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
                                                            </div> --}}
                                                        </div>
                                                        <div class="card border-0 mb-0">
                                                            <div class="card-body ">
                                                                <div class="item-card9">
                                                                    <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$entreprise->slug_pays,'slug_categorie'=>$entreprise->slug_categorie,'slug_souscategorie'=>$entreprise->slug_souscategorie,'slug_entreprise'=>$entreprise->slug_entreprise]) }}"><h4 class="font-weight-bold mt-1">{{ $entreprise->nom }}</h4></a>
                                                                    <a class="text-dark">{{ $entreprise->sousCategorie }}</a>
                                                                    <p class="mb-0 leading-tight">{{ $entreprise->adresse }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer pt-4 pb-4">
                                                                <div class="item-card9-footer d-flex">
                                                                    <div class="item-card9-cost">
                                                                        <i class="icon icon-phone text-muted me-1"></i> (+228) <b>{{ $entreprise->telephone1 }}</b>
                                                                    </div>
                                                                    <div class="ms-auto">
                                                                        <div class="rating-star sm my-rating-5" data-stars="4s"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									{{$entreprises->links()}}
								</div>
							</div>
						</div>
						<!--/Add lists-->
					</div>

					<!--Right Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="top">
                            <div class="search">
                                @foreach ($tops as $top)
                                    <div class="img-div">
                                        <img src="{{ asset('assets/images/products/popup') }}/{{ $top->image }}" alt="{{ $top->image }}">
                                    </div>
                                @endforeach
                            </div>
    
                            <h4 class="mia-be-class"><a href="{{ route('pharmacie',['slug_pays'=>'tg']) }}">Liste de pharmacie de garde</a></h4>
    
                            <div class="search">
                                @foreach ($top2s as $top2)
                                    <div class="img-div">
                                        <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$top2->slug_pays,'slug_categorie'=>$top2->slug_categorie,'slug_souscategorie'=>$top2->slug_souscategorie,'slug_entreprise'=>$top2->slug_entreprise]) }}">
                                            <img src="{{ asset('assets/images/products/popup') }}/{{ $top2->photo1 }}" alt="{{ $top2->nom }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>
	<!--/Add Listings-->

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
<!-- Ion.RangeSlider -->
<script src="{{ asset('assets/plugins/jquery-uislider/jquery-ui.js') }}"></script>
@include('frontend.footer.footer14')
<!--Showmore Js-->
<script src="{{ asset('assets/js/jquery.showmore.js') }}"></script>
<script src="{{ asset('assets/js/showmore.js') }}"></script>
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')

<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
{{-- <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{ asset('assets/js/entreprise.js') }}"></script>

@include('frontend.footer.footer18')