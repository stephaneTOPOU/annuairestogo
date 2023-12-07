@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
<link href="{{ asset('assets/css/video-player.css') }}" rel="stylesheet"/>
@include('frontend.header.header6')
@include('frontend.header.header7')


{{-- @include('frontend.loader') --}}

@include('frontend.topbar.topbar1')
@include('frontend.topbar.topbar2')
@include('frontend.topbar.topbar3')
@include('frontend.topbar.topbar4')
@include('frontend.topbar.topbar5')

    <!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image shadow-font" data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Les nouvelles</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
								{{-- <li class="breadcrumb-item"><a href="#">Blog</a></li> --}}
								<li class="breadcrumb-item active text-white" aria-current="page">Les nouvelles</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!--/Breadcrumb-->

    <!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					@foreach ($annonce as $annonces)
						<div class="col-xl-8 col-lg-8 col-md-12">
							<div class="card">
									<div class="card-body">
										<div class="card-body h-100 boot-slider">
											<div class="product-slider carousel-slide-2">
												<div id="carouselFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
													data-bs-loop="false" data-bs-thumb="true">
													<div class="carousel-inner slide-show-image" id=full-gallery>
														<div class="carousel-item active"> <img src="{{asset('assets/images/annonces')}}/{{$annonces->image1}}" alt="{{$annonces->titre}}"> </div>
														@if ($annonces->image2)
															<div class="carousel-item"> <img src="{{asset('assets/images/annonces')}}/{{$annonces->image2}}" alt="{{$annonces->titre}}"> </div>
														@endif
														@if ($annonces->image3)
														<div class="carousel-item"> <img src="{{asset('assets/images/annonces')}}/{{$annonces->image3}}" alt="{{$annonces->titre}}"> </div>
														@endif
														@if ($annonces->image4)
														<div class="carousel-item"> <img src="{{asset('assets/images/annonces')}}/{{$annonces->image4}}" alt="{{$annonces->titre}}"> </div>
														@endif
														@if ($annonces->image6)
														<div class="carousel-item"> <img src="{{asset('assets/images/annonces')}}/{{$annonces->image6}}" alt="{{$annonces->titre}}"> </div>
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
										<div class="item7-card-desc d-flex mb-2 mt-3">
											<a href="#"><i class="fa fa-calendar-o text-muted me-2"></i>@php echo \Carbon\Carbon::parse($annonces->created_at)->diffForHumans(null, false, 'fr'); @endphp</a>
											<div class="ms-auto">
												<a href="#"><i class="fa fa-comment-o text-muted me-2"></i>{{ $nb }} Commentaire(s)</a>
											</div>
										</div>
										<a href="#" class="text-dark"><h2 class="font-weight-semibold">{{ $annonces->titre }}</h2></a>
										<p>{!! $annonces->text1 !!}</p>
										<p>{!! $annonces->text2 !!}</p>
										<p>{!! $annonces->text3 !!}</p>
									</div>
							</div>
							<h3 class="mb-5 mt-4">Les annonces relatives</h3>

								<!--Related Posts-->
									<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
											<!-- Wrapper for carousel items -->
											@foreach ($relative as $relatives)
												<div class="item">
													<div class="card">
														<div class="item-card7-imgs">
															<a href="{{ route('news',['slug_pays'=>'tg','slug_cat_an'=>$relatives->slug_cat_an,'slug_annonce'=>$relatives->slug_annonce]) }}"></a>
															@if ($relatives->image1)
																<img src="{{ asset('assets/images/annonces') }}/{{ $relatives->image1 }}" alt="{{ $relatives->titre }}" class="cover-image">
															@else
																<img src="{{ asset('assets/images/annonces/f2.png') }}" alt="{{ $relatives->titre }}" class="cover-image">
															@endif
														</div>
														<div class="item-card7-overlaytext">
															<a href="{{ route('news',['slug_pays'=>'tg','slug_cat_an'=>$relatives->slug_cat_an,'slug_annonce'=>$relatives->slug_annonce]) }}" class="text-white">{{ $relatives->cat }}</a>
														</div>
														<div class="card-body">
															<div class="item-card7-desc">
																<a href="{{ route('news',['slug_pays'=>'tg','slug_cat_an'=>$relatives->slug_cat_an,'slug_annonce'=>$relatives->slug_annonce]) }}" class="text-dark"><h4 class="font-weight-semibold">{{ Str::limit($relatives->titre, 20) }}</h4></a>
															</div>
															{{-- <div class="item-card7-text">
																<ul class="icon-card mb-0">
																	<li ><a href="#" class="icons"><i class="icon icon-location-pin text-muted me-1"></i>{{ $relatives->adresse }}</a></li>
																	<li class="mb-0"><a href="#" class="icons"><i class="icon icon-phone text-muted me-1"></i>(+228) <b>{{ $relatives->telephone1 }}</b></a></li>
																</ul>
															</div> --}}
														</div>
													</div>
												</div>
											@endforeach
									</div>
								<!--/Related Posts-->
							<div class="card">
									<div class="card-header">
										<h3 class="card-title">Les commentaire</h3>
									</div>
									<div class="card-body p-0">
										@foreach ($commentaires as $commentaire)
											<div class="media mt-0 p-5">
												<div class="d-flex me-3">
													<a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user_profile/user.png') }}"> </a>
												</div>
												<div class="media-body">
													<h5 class="mt-0 mb-1 font-weight-semibold">{{ $commentaire->pseudo }}
														<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i> @php echo \Carbon\Carbon::parse($commentaire->created_at)->diffForHumans(null, false, 'fr'); @endphp </span>
													</h5>
													<small class="text-muted"><span><i class="fa fa-calendar"></i>{{ date('d/m/Y', strtotime($commentaire->created_at)) }}</span>  <span><i class=" ms-3 fa fa-clock-o"></i>{{ date('h:m', strtotime($commentaire->created_at)) }}</span></small>
													<p class="font-13  mb-2 mt-2">
														{{ $commentaire->commentaire }}
													</p>
													<a href="{{ route('news.comment.rep',['slug_pays'=>'tg','slug_cat_an'=>$annonces->slug_cat_an,'slug_cat_an'=>$annonces->slug_cat_an,'slug_annonce'=>$annonces->slug_annonce,'id'=>$commentaire->identifiant]) }}" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-default">Répondre</span></a>
													@foreach ($reponses as $reponse)
														@if ($reponse->commentaires_id == $commentaire->identifiant)
															<div class="media mt-5">
																<div class="d-flex me-3">
																	<a href="#"> <img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user_profile/user.png') }}"> </a>
																</div>
																<div class="media-body">
																	<h5 class="mt-0 mb-1 font-weight-semibold">{{ $reponse->nomR }}<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
																	<small class="text-muted"><span><i class="fa fa-calendar"></i>{{ date('d/m/Y', strtotime($reponse->created_at)) }}</span> <span><i class=" ms-3 fa fa-clock-o"></i>{{ date('h:m', strtotime($reponse->created_at)) }}</span></small>
																	<p class="font-13  mb-2 mt-2">
																		{{ $reponse->messageR }}
																	</p>
																	<a href="{{ route('news.comment.rep',['slug_pays'=>'tg','slug_cat_an'=>$annonces->slug_cat_an,'slug_annonce'=>$annonces->slug_annonce,'id'=>$commentaire->identifiant]) }}" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-default">Répondre</span></a>
																</div>
															</div>
														@endif
													@endforeach
												</div>
											</div>
										@endforeach
									</div>
							</div>
							<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title">Ecrire un commentaire</h3>
									</div>
									<form class="card-body" method="POST" action="{{ route('news.comment',['slug_pays'=>'tg','slug_cat_an'=>$annonces->slug_cat_an,'slug_annonce'=>$annonces->slug_annonce]) }}">
										@csrf
										@if(Session::has('success'))
											<div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
										@endif
										<div class="form-group">
											<input type="text" class="form-control" id="name1" placeholder="Votre nom" name="pseudo">
										</div>
										<div class="form-group">
											<textarea class="form-control" name="commentaire" rows="6" placeholder="Votre commentaire"></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Envoyer</button>
									</form>
							</div>
						</div>

						<!--Rightside Content-->
						<div class="col-xl-4 col-lg-4 col-md-12">
							@if ($annonces->video)
								<div class="card-header">
									<h3 class="card-title">Spot</h3>
								</div>
								<div class="item-card overflow-hidden">
									<div class="item-card-desc">
										<div class="card text-center overflow-hidden"> 
											<div class="video-list">
												<div class="video-list-inner video" style="cursor: pointer">
													<div class="play card-img">
														<img src="{{ asset('assets/images/annonces') }}/{{ $annonces->image1 }}" alt="{{ $annonces->image1 }}" class="play">
													</div>
													<div class="play item-card-text">
														<i class="fa fa-play-circle" aria-hidden="false"></i>
													</div>
													<video class="hide" muted src="{{ asset('assets/images/annonces') }}/{{ $annonces->video }}" controls poster="{{ asset('assets/images/annonces') }}/{{ $annonces->image1 }}">
												</div>
											</div>                                       
										</div>
									</div>
								</div>
							@endif
							<div class="video-container">
								<a class="close btn btn-sm btn-light w-6" data-bs-dismiss="modal" aria-label="Close" style="font-size: 14px; border-radius: 50%">x</a>
								<video src="" autoplay controls poster=""></video>
							</div>
								
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Types de nouvelles</h3>
								</div>
								<div class="card-body">
									<div class="product-tags clearfix">
										<ul class="list-unstyled mb-0">
											@foreach ($annonce2s as $annonces2)
												<li><a href="#">{{ $annonces2->libelle }}</a></li>
											@endforeach
										</ul>
									</div>
								</div>
							</div>

							<div class="card-header">
								<h3 class="card-title">Les annonces récentes</h3>
							</div>
							{{-- <h4 style="text-align: center; margin-top: 15px; margin-bottom: 5px;">Les annonces récentes</h4> --}}
							<div id="myCarousel1" class="owl-carousel blog-owl-carousel">
								@foreach ($news as $new)
									<div class="item">
										<div class="card">
											<div class="item-card7-imgs">
												<a href="{{ route('news',['slug_pays'=>'tg','slug_cat_an'=>$new->slug_cat_an,'slug_annonce'=>$new->slug_annonce]) }}"></a>
												<img src="{{ asset('assets/images/annonces') }}/{{ $new->image1 }}" alt="{{ $new->titre }}" class="cover-image">
											</div>
											<div class="item-card7-overlaytext">
												<a href="#" class="text-white">{{ $new->cat }}</a>
											</div>
											<div class="card-body">
												<div class="item-card7-desc">
													<a href="{{ route('news',['slug_pays'=>'tg','slug_cat_an'=>$new->slug_cat_an,'slug_annonce'=>$new->slug_annonce]) }}" class="text-dark"><h4 class="font-weight-semibold">{{ $new->titre }}</h4></a>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
							
						</div>
						<!--/Rightside Content-->
					@endforeach
				</div>
			</div>
		</section>
	<!--/Add listing-->

@include('frontend.footer.footer1')

<!-- Message Modal -->
@foreach ($annonce as $annonces)
	@foreach ($commentaires as $commentaire)
	<div class="modal fade" id="Comment" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form class="modal-content" method="POST" action="{{ route('news.comment.rep',['slug_pays'=>'tg','slug_cat_an'=>$annonces->slug_cat_an,'slug_annonce'=>$annonces->slug_annonce,'id'=>$commentaire->identifiant]) }}">
				@csrf
				{{-- @if(Session::has('success'))
					<div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
				@endif --}}
				<div class="modal-header">
					<h5 class="modal-title" id="exampleCommentLongTitle">Laissez un réponse</h5>
					<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input type="text" class="form-control" id="commet-name" placeholder="Votre nom" name="nomR">
					</div>
					<div class="form-group mb-0">
						<textarea class="form-control" name="messageR" rows="6" placeholder="Votre réponse"></textarea>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
					<button type="submit" class="btn btn-success">Répondre</button>
				</div>
			</form>
		</div>
	</div>
	@endforeach
@endforeach


@include('frontend.footer.footer2')
@include('frontend.footer.footer3')
@include('frontend.footer.footer4')
@include('frontend.footer.footer5')
@include('frontend.footer.footer6')
<!-- Star Rating Js-->
<script src="{{ asset('assets/plugins/ratings-2/jquery.star-rating.js') }}"></script>
<script src="{{ asset('assets/plugins/ratings-2/star-rating.js') }}"></script>
<script src="{{ asset('assets/plugins/Horizontal2/Horizontal-menu/horizontal.js') }}"></script>
@include('frontend.footer.footer9')
@include('frontend.footer.footer10')
@include('frontend.footer.footer11')
@include('frontend.footer.footer13')
@include('frontend.footer.footer12')
<!-- Vertical scroll bar Js-->
<script src="{{ asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js') }}"></script>
<script src="{{ asset('assets/plugins/vertical-scroll/vertical-scroll.js') }}"></script>
@include('frontend.footer.footer14')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
<!--JQuery Slider  js-->
<script src="{{ asset('assets/plugins/boot-slider/boot-slider.min.js')}}"></script>
<script src="{{ asset('assets/js/boots-slider.js')}}"></script>
<!--modal Js-->
<script src="{{ asset('assets/js/video-modal.js') }}"></script>
@include('frontend.footer.footer18')

