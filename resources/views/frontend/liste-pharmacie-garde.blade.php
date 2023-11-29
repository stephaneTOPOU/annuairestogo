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
        <div class="item cover-image sptb-1 bg-background" data-bs-image-src="{{ asset('assets/images/banners') }}/{{ $slider->image }}"></div>
    @endforeach
    </div>
</div>
<!--/Sliders Section-->

<!--Breadcrumb-->
<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Pharmacies de garde</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pharmacies de garde</li>
            </ol>
        </div>
    </div>
</div>
<!--/Breadcrumb-->  

<div class="sptb">
    <div class="container">
        <div class="row">
            @foreach ($pharmacies as $pharmacie)
                <div class="col-lg-3 col-md-12">
                    <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$pharmacie->slug_pays,'slug_categorie'=>$pharmacie->slug_categorie,'slug_souscategorie'=>$pharmacie->slug_souscategorie,'slug_entreprise'=>$pharmacie->slug_entreprise]) }}">
                        <div class="card">
                            <div>
                                @if ( $pharmacie->logo )
                                    <img src="{{ asset('assets/images/products') }}/{{ $pharmacie->logo }}" class="logo-pharma" alt="{{ $pharmacie->nom }}">
                                @else
                                    <img src="{{ asset('assets/images/products') }}/{{ $pharmacie->logo }}" class="logo-pharma" alt="{{ $pharmacie->nom }}">
                                @endif
                            </div>
                            <div class="item-box-wrap">
                                <h4 class="mt-2" style="padding: 10px">{{ $pharmacie->nom }}</h4>
                                {{-- <p class="text-muted mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p> --}}
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
