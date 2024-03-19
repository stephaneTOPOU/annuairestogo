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
<div>
    <div class="owl-carousel testimonial-owl-carousel2 slider slider-header">
        @foreach ($sliders as $slider)
            <div class="bannerimg cover-image sptb-1 shadow-font"
                data-bs-image-src="{{ asset('assets/images/sliders') }}/{{ $slider->image }}">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white ">
                            <h1 class="">Ajouter une entreprise</h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                                <li class="breadcrumb-item active text-white" aria-current="page"> Ajouter une
                                    entreprise</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!--/Breadcrumb-->

<!--Register-section-->
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="single-page">
                <div class="col-lg-5 col-xl-12 col-md-6 d-block mx-auto">
                    <div class="wrapper wrapper2">
                        <form id="Register" class="card-body" tabindex="500" action="{{ route('entreprise.add') }}"
                            method="POST">
                            @csrf
                            <h3>Enrégistrer une entreprise</h3>
                            @if (Session::has('entreprise'))
                                <div class="alert alert-success" role="alert">{{ Session::get('entreprise') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control select2-show-search border-bottom-0 w-100"
                                        data-placeholder="Select" name="souscategorie_id">
                                        <optgroup label="Catégories">
                                            <option disabled selected>Secteur d'activité</option>
                                            @foreach ($souscategories as $souscategorie)
                                                <option value="{{ $souscategorie->identifiant }}">
                                                    {{ $souscategorie->libelle }}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="Prénom">
                                        <input type="text" name="nom">
                                        <label>Raison social</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="Email">
                                        <input type="email" name="email">
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="Adresse">
                                        <input type="text" name="adresse">
                                        <label>Adresse</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="Téléphone">
                                        <input type="text" name="telephone1">
                                        <label>Téléphone 1</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="Profession">
                                        <input type="text" name="telephone2">
                                        <label>Téléphone 2</label>
                                    </div>
                                </div>
                            </div>

                            <div class="submit">
                                <button class="btn btn-primary btn-block">Enrégistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Register-section-->

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
@include('frontend.footer.footer14')
@include('frontend.footer.footer15')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')
