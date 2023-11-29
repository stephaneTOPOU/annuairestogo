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
		<section>
			<div class="bannerimg cover-image shadow-font" data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Blog-detail</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
								{{-- <li class="breadcrumb-item"><a href="#">Blog</a></li> --}}
								<li class="breadcrumb-item active text-white" aria-current="page">Blog-detail</li>
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
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="card">
								<div class="card-body">
                                    @if ($details->image1)
                                        <div class="item7-card-img">
                                            <img src="{{ asset('assets/images/blogs') }}/{{ $details->image1 }}" alt="{{ $details->titre }}" class="w-100">
                                            <div class="item7-card-text">
                                                <span class="badge badge-info">Blog</span>
                                            </div>
                                        </div>
                                    @endif
									
									<div class="item7-card-desc d-flex mb-2 mt-3">
										<a href="#"><i class="fa fa-calendar-o text-muted me-2"></i>@php echo \Carbon\Carbon::parse($details->created_at)->diffForHumans(null, false, 'fr'); @endphp</a>
										<div class="ms-auto">
											<a href="#"><i class="fa fa-comment-o text-muted me-2"></i>{{ $nombres }} Commentaire(s)</a>
										</div>
									</div>
									<a href="#" class="text-dark"><h2 class="font-weight-semibold">{{ $details->titre }}</h2></a>
									<p>{!! $details->description1 !!}</p>

                                    @if ($details->image2)
                                        <div class="item7-card-img">
                                            <img src="{{ asset('assets/images/blogs') }}/{{ $details->image2 }}" alt="{{ $details->titre }}" class="w-100">
                                            <div class="item7-card-text">
                                                <span class="badge badge-info">Blog</span>
                                            </div>
                                        </div>
                                    @endif
                                    
									<p class="mt-4">{!! $details->description2 !!}</p>

                                    @if ($details->image3)
                                        <div class="item7-card-img">
                                            <img src="{{ asset('assets/images/blogs') }}/{{ $details->image3 }}" alt="{{ $details->titre }}" class="w-100">
                                            <div class="item7-card-text">
                                                <span class="badge badge-info">Blog</span>
                                            </div>
                                        </div>
                                    @endif
                                    
									<p>{!! $details->description3 !!}</p>
								</div>
						</div>
						<div class="card">
								<div class="card-header">
									<h3 class="card-title">Les commentaires</h3>
								</div>
								<div class="card-body p-0">
									@foreach ($commentaires as $commentaire)
										<div class="media mt-0 p-5">
											<div class="d-flex me-3">
												<a href="#"><img class="media-object brround" alt="64x64" src="{{ asset('assets/images/user_profile/user.png') }}"> </a>
											</div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">{{ $commentaire->nom }}
													<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i> @php echo \Carbon\Carbon::parse($commentaire->created_at)->diffForHumans(null, false, 'fr'); @endphp </span>
												</h5>
												<small class="text-muted"><span><i class="fa fa-calendar"></i>{{ date('d/m/Y', strtotime($commentaire->created_at)) }}</span>  <span><i class=" ms-3 fa fa-clock-o"></i>{{ date('h:m', strtotime($commentaire->created_at)) }}</span></small>
												<p class="font-13  mb-2 mt-2">
													{{ $commentaire->message }}
												</p>
												<a href="{{ route('blog.comment.rep',['slug_pays'=>'tg','slug_blog'=>$details->slug_blog,'id'=>$commentaire->identifiant]) }}" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-default">Répondre</span></a>
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
																<a href="{{ route('blog.comment.rep',['slug_pays'=>'tg','slug_blog'=>$details->slug_blog,'id'=>$commentaire->identifiant]) }}" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-default">Répondre</span></a>
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
								<form class="card-body" method="POST" action="{{ route('blog.comment',['slug_pays'=>'tg','slug_blog'=>$details->slug_blog]) }}">
									@csrf
                                    @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
                                    @endif
									<div class="form-group">
										<input type="text" class="form-control" id="name1" placeholder="Votre nom" name="nom">
									</div>
									<div class="form-group">
										<textarea class="form-control" name="message" rows="6" placeholder="Votre commentaire"></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</form>
						</div>
					</div>

					<!--Rightside Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body p-0">
								<div class="list-catergory">
									<div class="item-list">
										<ul class="list-group mb-0">
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-building bg-primary text-primary"></i> Real Estate
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">14</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-bed bg-success text-success"></i> Hostel & Travels
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">63</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-heartbeat bg-info text-info"></i> Health & Fitness
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-cutlery bg-warning text-warning"></i> Restaurant
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-laptop bg-danger text-danger"></i> Computer
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="text-dark">
													<i class="fa fa-mobile bg-blue text-blue"></i> Mobile
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
												</a>
											</li>
											<li class="list-group-item border-bottom-0">
												<a href="#" class="text-dark">
													<i class="fa fa-pencil-square  bg-secondary text-pink"></i> Education
													<span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="card">
							<div class="card-header">
								<h3 class="card-title">Types de nouvelles</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										@foreach ($annonce2s as $details2)
											<li><a href="{{ route('news',['slug_pays'=>'tg','slug_blog'=>$details2->slug_cat_an]) }}">{{ $details2->libelle }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</div> --}}
						
					</div>
					<!--/Rightside Content-->
				</div>
			</div>
		</section>
	<!--/Add listing-->

@include('frontend.footer.footer1')

<!-- Message Modal -->
@foreach ($commentaires as $commentaire)
	<div class="modal fade" id="Comment" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form class="modal-content" method="POST" action="{{ route('blog.comment.rep',['slug_pays'=>'tg','slug_blog'=>$details->slug_blog,'id'=>$commentaire->identifiant]) }}">
				@csrf
				@if(Session::has('success'))
					<div class="alert alert-success" role="alert">{{Session::get('success') }}</div>
				@endif
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
@include('frontend.footer.footer18')

