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

<!--Sliders Section-->
<div>
    <div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
        @foreach ($sliders as $slider)
            <div class="cover-image sptb-1" data-bs-image-src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}">
            </div>
        @endforeach
    </div>
</div>
<!--/Sliders Section-->

<!--Breadcrumb-->
<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Professionnel</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Professionnel</li>
            </ol>
        </div>
    </div>
</div>
<!--/Breadcrumb-->

<div class="sptb">
    <div class="container">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-lg-6 col-md-12">
                    <a href="{{ route('user.profile', ['slug_user' => $user->slug_user]) }}">
                        <div class="card widgets-cards">
                            <div class="card-body d-flex">
                                <div class="widgets-cards-icons">
                                    <div class="wrp icon-circle bg-success">
                                        @if ($user->photo1)
                                            <img src="{{ asset('assets/images/user_profile') }}/{{ $user->photo1 }}"
                                                alt="{{ $user->name }}">
                                        @else
                                            <img src="{{ asset('assets/images/user_profile/user.png') }}"
                                                alt="{{ $user->name }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="widgets-cards-data">
                                    <div class="wrp text-wrapper">
                                        <p>{{ $user->name }}</p>
                                        <p class="text-muted mt-1 mb-0"><i
                                                class="icon icon-phone text-muted me-1"></i>{{ $user->telephone1 }}</p>
                                        <p class="text-muted mt-1 mb-0"><i
                                                class="icon icon-bag text-muted me-1"></i>{{ $user->fonction }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
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
