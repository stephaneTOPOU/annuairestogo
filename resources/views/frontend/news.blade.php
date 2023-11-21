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
					<div class="col-xl-8 col-lg-8 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="item7-card-img">
									<img src="../assets/images/photos/18.jpg" alt="img" class="w-100">
									<div class="item7-card-text">
										<span class="badge badge-info">Jobs</span>
									</div>
								</div>
								<div class="item7-card-desc d-flex mb-2 mt-3">
									<a href="#"><i class="fa fa-calendar-o text-muted me-2"></i>Nov-28-2018</a>
									<a href="#"><i class="fa fa-user text-muted me-2"></i>Nissy Sten</a>
									<div class="ms-auto">
										<a href="#"><i class="fa fa-comment-o text-muted me-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="#" class="text-dark"><h2 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h2></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Comments</h3>
							</div>
							<div class="card-body p-0">
								<div class="media mt-0 p-5">
                                    <div class="d-flex me-3">
                                        <a href="#"><img class="media-object brround" alt="64x64" src="../assets/images/faces/male/1.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
											<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
											<span class="fs-14 ms-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><span><i class="fa fa-calendar"></i> Dec 21st</span>  <span><i class=" ms-3 fa fa-clock-o"></i> 13.00 </span> <span><i class=" ms-3 fa fa-map-marker"></i> Brezil</span></small>
                                        <p class="font-13  mb-2 mt-2">
                                           Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="me-2"><span class="badge badge-primary">Helpful</span></a>
										<a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#Comment"><span class="">Comment</span></a>
										<a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#report"><span class="">Report</span></a>
                                        <div class="media mt-5">
                                            <div class="d-flex me-3">
                                                <a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/faces/female/2.jpg"> </a>
                                            </div>
											<div class="media-body">
												<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
												<small class="text-muted"><span><i class="fa fa-calendar"></i> Dec 22nd </span> <span><i class=" ms-3 fa fa-clock-o"></i> 6.00  </span><span><i class=" ms-3 fa fa-map-marker"></i> Brezil</span></small>
												<p class="font-13  mb-2 mt-2">
												   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
												</p>
												<a href="" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge badge-default">Comment</span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="media p-5 border-top mt-0">
									<div class="d-flex me-3">
										<a href="#"> <img class="media-object brround" alt="64x64" src="../assets/images/faces/male/3.jpg"> </a>
									</div>
									<div class="media-body">
										<h5 class="mt-0 mb-1 font-weight-semibold">Edward
										<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
										<span class="fs-14 ms-2"> 4 <i class="fa fa-star text-yellow"></i></span>
										</h5>
										<small class="text-muted"><span><i class="fa fa-calendar"></i> Dec 21st</span>  <span><i class=" ms-3 fa fa-clock-o"></i> 16.35</span>  <span><i class=" ms-3 fa fa-map-marker"></i> UK</span></small>
                                        <p class="font-13  mb-2 mt-2">
                                           Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                        </p>
										<a href="#" class="me-2"><span class="badge badge-primary">Helpful</span></a>
										<a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#Comment"><span class="">Comment</span></a>
										<a href="" class="me-2" data-bs-toggle="modal" data-bs-target="#report"><span class="">Report</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Write Your Comments</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="name1" placeholder="Your Name">
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="email" placeholder="Email Address">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Your Comment"></textarea>
								</div>
								<a href="#" class="btn btn-primary">Submit</a>
							</div>
						</div>
					</div>

					<!--Rightside Content-->
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input type="text" class="form-control br-ts-3  br-bs-3" placeholder="Search">
									<div class="">
										<button type="button" class="btn btn-primary br-ts-0  br-bs-0">
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
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
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Popular Tags</h3>
							</div>
							<div class="card-body">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="#">RealEstate</a></li>
										<li><a href="#">Vehicles</a></li>
										<li><a href="#">Events</a></li>
										<li><a href="#">Health& Beauty</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Restaurant</a></li>
										<li><a href="#">Events</a></li>
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Automobiles</a></li>
										<li><a href="#">Computer</a></li>
										<li><a href="#" class="mb-0">Electronics</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Blog Authors</h3>
							</div>
							<div class="card-body p-0">
								<ul class="vertical-scroll">
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/female/18.jpg" alt="image" class="avatar brround  me-2">
												<a href="#" class="time-title p-0 leading-normal mt-2">Boris	Nash <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 16</span></a>
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 36</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/female/10.jpg" alt="image" class="avatar brround  me-2">
												<a href="#" class="time-title p-0 leading-normal mt-2">Lorean Mccants <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 43</span></a>
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 23</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/male/18.jpg" alt="image" class="avatar brround  me-2">
												<a href="#" class="time-title p-0 leading-normal mt-2">Dewitt Henne<i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 34</span></a>
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 12</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/male/8.jpg" alt="image" class="avatar brround  me-2">
												<a href="#" class="time-title p-0 leading-normal mt-2">Archie Overturf <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 12</span></a>
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
									<li class="item2">
										<div class="footerimg d-flex mt-0 mb-0">
											<div class="d-flex footerimg-l mb-0">
												<img src="../assets/images/faces/female/21.jpg" alt="image" class="avatar brround  me-2">
												<a href="#" class="time-title p-0 leading-normal mt-2">Barbra Flegle <i class="icon icon-check text-success fs-12 ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="verified"></i></a>
											</div>
											<div class="mt-2 footerimg-r ms-auto">
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Articles"><span class="text-muted me-2"><i class="fa fa-comment-o"></i> 21</span></a>
												<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Likes"><span class="text-muted"><i class="fa fa-thumbs-o-up"></i> 32</span></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--/Rightside Content-->
				</div>
			</div>
		</section>
	<!--/Add listing-->

@include('frontend.footer.footer1')

<!-- Message Modal -->
<div class="modal fade" id="Comment" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleCommentLongTitle">Leave a Comment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="commet-name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="commet-email" placeholder="Email Address">
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
                    <select name="country" id="select-countries" class="form-control form-select">
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

