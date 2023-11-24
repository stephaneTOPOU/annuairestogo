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
                    <h1 class="">List</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
                        {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                        <li class="breadcrumb-item active text-white" aria-current="page"> List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Breadcrumb-->

<div class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card widgets-cards">
                    <div class="card-body d-flex">
                        <div class="widgets-cards-icons">
                            <div class="wrp icon-circle bg-success">
                                <i class="fa fa-search icons"></i>
                            </div>
                        </div>
                        <div class="widgets-cards-data">
                            <div class="wrp text-wrapper">
                                <p>Search New Posts</p>
                                <p class="text-muted mt-1 mb-0">ok</p>
                                <p class="text-muted mt-1 mb-0">ok</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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
@include('frontend.footer.footer13')
<!-- Count Down-->
<script src="{{ asset('assets/plugins/count-down/jquery.lwtCountdown-1.0.js') }}"></script>
@include('frontend.footer.footer12')
@include('frontend.footer.footer14')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')
