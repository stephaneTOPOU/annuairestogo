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
        <div class="cover-image sptb-1" data-bs-image-src="{{ asset('assets/images/banners') }}/{{ $slider->image }}"></div>
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
                <div class="col-lg-4 col-md-12">
                    <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$pharmacie->slug_pays,'slug_categorie'=>$pharmacie->slug_categorie,'slug_souscategorie'=>$pharmacie->slug_souscategorie,'slug_entreprise'=>$pharmacie->slug_entreprise]) }}">
                        <div class="card">
                            <div style="padding: 20px; height: 170px">
                                <h4 class="font-weight-bold">{{ $pharmacie->nom }}</h4>
                                <p class="text-muted mt-4"><i class="fa fa-home me-3  mb-2"></i>{{ $pharmacie->adresse }}</p>
                                <h6><span class="font-weight-semibold"><i class="fa fa-phone me-3  mb-2"></i></span><a class="text-black">(+228) <b>{{ $pharmacie->telephone1 }}</b> @if ($pharmacie->telephone2)
                                    <b>• {{ $pharmacie->telephone2 }}</b>
                                @endif</a></h6>
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
