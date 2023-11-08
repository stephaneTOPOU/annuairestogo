@include('frontend.header.header1')
@include('frontend.header.header2')
@include('frontend.header.header3')
@include('frontend.header.header4')
@include('frontend.header.header5')
@include('frontend.header.header6')
@include('frontend.header.header7')


    @include('frontend.loader')
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
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia text-center">
                                        <img src="{{ asset('assets/images/products/intro/intro-about.png') }}" class="w-100 h-100 mb-3 mx-auto text-center" alt="image">
                                        <h2>ClayList</h2>
                                        <p>
                                        Now You Become a Part of Our Website<br>
                                        Claylist is free classified ads website template with awesome responsive webdesign.
                                        It has a huge collection of widgets</p>
                                        <a href="" class="btn btn-primary btn-ptill mb-3">Join Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia text-center">
                                        <img src="{{ asset('assets/images/products/intro/intro-chat.png') }}" class="w-100 mb-3 mx-auto text-center" alt="image">
                                        <h2>Chat With Us</h2>
                                        <p>
                                        Now You Become a Part of Our Website<br>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in humour</p>
                                        <a href="" class="btn btn-primary btn-ptill mb-3">Chat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                    <div class="testimonia text-center">
                                        <img src="{{ asset('assets/images/products/intro/intro-setting.png') }}" class="w-100 h-100 mb-3 mx-auto text-center" alt="image">
                                        <h2>Theme Settings</h2>
                                        <p>
                                            Now You Become a Part of Our Website<br>
                                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in humour</p>
                                        <a href="settings.html" class="btn btn-primary btn-ptill mb-3">Change</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <div class="banner-1 cover-image sptb-2 sptb-tab bg-background2" data-bs-image-src="{{ asset('assets/images/banners/banner1.jpg') }}">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white mb-7">
                        <h1 class="mb-1">Find Your Best Classified</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="search-background bg-transparent">
                                <div class="form row g-0 ">
                                    
                                    <!-- <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
                                        <input type="text" class="form-control input-lg br-md-0 border-start-0" id="text5" placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i></span>
                                    </div> -->
                                    <div class="form-group col-xl-6 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                            <optgroup label="Categories">
                                                <option>Select</option>
                                                <option value="1">Private</option>
                                                <option value="2">Software</option>
                                                <option value="3">Banking</option>
                                                <option value="4">Finaces</option>
                                                <option value="5">Corporate</option>
                                                <option value="6">Driver</option>
                                                <option value="7">Sales</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
                                        <input type="text" class="form-control input-lg br-te-md-0 br-be-md-0 border-start-0" id="text4" placeholder="Job Title or Phrase or Keywords">
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="#" class="btn btn-lg btn-block btn-primary br-ts-md-0 br-bs-md-0">Trouver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </section>
    <!--Sliders Section-->

    <!--Categories-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title center-block text-center">
                <h2>Categories</h2>
                <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
            </div>
            <div id="small-categories" class="owl-carousel owl-carousel-icons2">
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-building fa-2x "></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Real Estate</h5>
                                    <small class="badge badge-pill badge-primary me-2">19</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-graduation-cap fa-2x text-primary-gradient"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Education</h5>
                                    <small class="badge badge-pill badge-primary me-2">25</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-cutlery fa-2x text-primary-gradient "></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Restaurant</h5>
                                    <small class="badge badge-pill badge-primary me-2">23</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-car fa-2x text-primary-gradient"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Vehicle</h5>
                                    <small class="badge badge-pill badge-primary me-2">46</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-heartbeat fa-2x text-primary-gradient"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Health</h5>
                                    <small class="badge badge-pill badge-primary me-2">52</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-paw fa-2x text-primary-gradient"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Animals</h5>
                                    <small class="badge badge-pill badge-primary me-2">52</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-graduation-cap fa-2x text-primary-gradient"></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Education</h5>
                                    <small class="badge badge-pill badge-primary me-2">25</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card bg-card">
                        <div class="card-body">
                            <div class="cat-item text-center">
                                <a href="classifieds-list.html"></a>
                                <div class="cat-img text-shadow1">
                                    <i class="fa fa-cutlery fa-2x text-primary-gradient "></i>
                                </div>
                                <div class="cat-desc">
                                    <h5 class="mb-6">Restaurant</h5>
                                    <small class="badge badge-pill badge-primary me-2">23</small><span class="text-muted">ads are posted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="{{ asset('assets/images/products/products/sanlam.jpg') }}" alt="img" class="cover-image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="{{ asset('assets/images/products/products/bravia.jpg') }}" alt="img" class="cover-image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="{{ asset('assets/images/products/products/moov.jpg') }}" alt="img" class="cover-image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="{{ asset('assets/images/products/products/dodo.jpg') }}" alt="img" class="cover-image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card2-img">
                            <a href="classified.html"></a>
                            <img src="{{ asset('assets/images/products/products/odg.jpg') }}" alt="img" class="cover-image">
                        </div>
                    </div>
                </div>
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
                        <h2 class="">Latest News</h2>
                        <div class="items-blog-tab-heading row">
                            <div class="col-12">
                                <ul class="nav items-blog-tab-menu">
                                    <li class=""><a href="#tab-1" class="active show" data-bs-toggle="tab">All</a></li>
                                    <li><a href="#tab-2" data-bs-toggle="tab" class="">Business</a></li>
                                    <li><a href="#tab-3" data-bs-toggle="tab" class="">Beauty</a></li>
                                    <li><a href="#tab-4" data-bs-toggle="tab" class="">Real Estate</a></li>
                                    <li><a href="#tab-5" data-bs-toggle="tab" class="">Restaurant</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-cutlery"></i></span>
                                            </span>
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/f2.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class=" fs-20 mb-0">Restaurants</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/h2.jpg') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Real State</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-paint-brush"></i></span>
                                            </span>
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/j1.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Beauty Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-briefcase"></i></span>
                                            </span>
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/f1.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-briefcase"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/j2.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-briefcase"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/j3.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Business</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <span class="ribbon-3">
                                            <span><i class="fa fa-paint-brush"></i></span>
                                        </span>
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/b1.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-paint-brush"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/b2.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-lg-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-paint-brush"></i></span>
                                            </span>
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/j1.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Spa</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <span class="ribbon-2">
                                            <span><i class="fa fa-home"></i></span>
                                        </span>
                                        <div class="card mb-xl-0">
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/h4.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/h2.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-home"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/h3.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Real Estate</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-3">
                                                <span><i class="fa fa-cutlery"></i></span>
                                            </span>
                                            <div class="item-card8-img  rounded-top-7">
                                                <img src="{{ asset('assets/images/products/f4.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-info fs-20 mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-xl-0">
                                            <span class="ribbon-1">
                                                <span><i class="fa fa-cutlery"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/f3.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-secondary fs-20 mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="card mb-0">
                                            <span class="ribbon-2">
                                                <span><i class="fa fa-cutlery"></i></span>
                                            </span>
                                            <div class="item-card8-img">
                                                <img src="{{ asset('assets/images/products/f2.png') }}" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card8-overlaytext">
                                                <h6 class="bg-primary fs-20 mb-0">Restaurant</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card8-desc">
                                                    <p class="text-muted">16 November 2018.</p>
                                                    <h4 class="font-weight-semibold">Food &amp; Bar Restaurant</h4>
                                                    <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</p>
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
                                <h5>Clients</h5>
                                <h2 class="counter mb-0">2569</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status-1 md-mb-0">
                                <div class="counter-icon text-warning">
                                    <i class="icon icon-rocket"></i>
                                </div>
                                <h5>Total Sales</h5>
                                <h2 class="counter mb-0">1765</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status md-mb-0">
                                <div class="counter-icon text-primary">
                                    <i class="icon icon-docs"></i>
                                </div>
                                <h5>Total Projects</h5>
                                <h2 class="counter mb-0">846</h2>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter-status status">
                                <div class="counter-icon text-success">
                                    <i class="icon icon-emotsmile"></i>
                                </div>
                                <h5>Happy Customers</h5>
                                <h2 class="counter">7253</h2>
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
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/locations/germany.jpg') }}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">44,327<span><i class="fa fa-map-marker me-1 text-primary"></i>GERMANY</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/locations/london.jpg') }}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">52,145<span><i class="fa fa-map-marker me-1 text-primary"></i> LONDON</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/locations/austerlia.jpg') }}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">63,263<span><i class="fa fa-map-marker text-primary me-1"></i>AUSTERLIA</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6 ">
                            <div class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="{{ asset('assets/images/locations/chicago.jpg') }}" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="mb-0">36,485<span><i class="fa fa-map-marker text-primary me-1"></i>CHICAGO</span></h4>
                                        </div>
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
@include('frontend.footer.footer18')
