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
			<div class="bannerimg cover-image bg-background3" data-bs-image-src="{{ asset('assets/images/banners/banner2.jpg') }}">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">{{ $users->name }}</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
								{{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
								<li class="breadcrumb-item active text-white" aria-current="page"> {{ $users->name }}</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Breadcrumb-->

        <!--User Profile-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body pattern-1">
								<div class="wideget-user">
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="wideget-user-desc text-center">
												<div class="wideget-user-img">
													@if ($users->photo1)
                                                        <img src="{{ asset('assets/images/user_profile') }}/{{ $users->photo1 }}" class="brround" alt="{{ $users->name }}" style="width: 128px; height: 128px;">
                                                    @else
                                                        <img src="{{ asset('assets/images/user_profile/user.png') }}" class="brround" alt="{{ $users->name }}" style="width: 128px; height: 128px;">
                                                    @endif
												</div>
												<div class="user-wrap wideget-user-info">
													<a href="#" class="text-white"><h4 class="font-weight-semibold">{{ $users->name }}</h4></a>
													<div class="wideget-user-rating">
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star-o text-warning me-1"></i></a> <span class="text-white">5 (3876 Reviews)</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 text-center">
											<div class="wideget-user-info ">
												<div class="wideget-user-icons mt-2">
													<a href="{{ $users->facebook }}" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
													<a href="{{ $users->twitter }}" class="twitter-bg"><i class="fa fa-twitter"></i></a>
													<a href="{{ $users->google }}" class="google-bg"><i class="fa fa-google"></i></a>
													<a href="{{ $users->linkedin }}" class="dribbble-bg"><i class="fa fa-linkedin"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="wideget-user-tab">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">
												<li class=""><a href="#tab-5" class="active" data-bs-toggle="tab">Profil</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card mb-0">
							<div class="card-body">
								<div class="border-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab-5">
											<div class="profile-log-switch">
												<div class="media-heading">
													<h3 class="card-title mb-3 font-weight-bold">Détails personnels</h3>
												</div>
												<ul class="usertab-list mb-0">
													<li><a href="#" class="text-dark"><span class="font-weight-bold">Nom Complet :</span> {{ $users->name }} {{ $users->prenoms }}</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-bold">Adresse :</span> {{ $users->adresse }} </a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-bold">Fonction :</span> {{ $users->fonction }} </a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-bold">Website :</span>{{ $users->name }}</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-bold">Email :</span> {{ $users->email }}</a></li>
													<li><a href="#" class="text-dark"><span class="font-weight-bold">Phone :</span> +228 {{ $users->telephone1 }} </a></li>
												</ul>
												<div class="row profie-img">
													<div class="col-md-12">
														<div class="media-heading">
															<h3 class="card-title mb-3 font-weight-bold">Biographie</h3>
														</div>
														<p>{{ $users->description }}</p>
														<p class="mb-0"></p>
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

@include('frontend.footer.footer1')

<!-- Message Modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Send Message</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="name1" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                </div>
                <div class="form-group mb-0">
                    <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Send</button>
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
@include('frontend.footer.footer11')
@include('frontend.footer.footer13')
<!-- Count Down-->
<script src="{{ asset('assets/plugins/count-down/jquery.lwtCountdown-1.0.js') }}"></script>
@include('frontend.footer.footer12')
@include('frontend.footer.footer14')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')




