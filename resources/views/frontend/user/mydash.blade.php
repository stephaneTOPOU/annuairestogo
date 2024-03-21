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
                    <h1 class="">Mon profil</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="users">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Mon profil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcrumb-->

<!--User Dashboard-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-12 col-md-12">
                <div class="card overflow-hidden is-expanded">
                    <div class="card-header">
                        <h3 class="card-title">Mon profil</h3>
                    </div>
                    <div class="card-body item-user p-5 active">
                        <div class="profile-pic">
                            <div class="profile-pic-img">
                                <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="" data-bs-original-title="online" aria-label="online"></span>
                                @if ($users->photo1)
                                    <img src="{{ asset('assets/images/user_profile') }}/{{ $users->photo1 }}"
                                        class="brround" alt="{{ $users->name }}">
                                @else
                                    <img src="{{ asset('assets/images/user_profile/user.png') }}" class="brround"
                                        alt="{{ $users->name }}">
                                @endif
                            </div>
                            <a href="#" class="text-dark">
                                <h4 class="mt-6 mb-0 font-weight-semibold">{{ $users->name }} {{ $users->prenoms }}
                                </h4>
                            </a>
                        </div>
                    </div>
                    <aside class="app-sidebar doc-sidebar my-dash open">
                        <div class="app-sidebar__user clearfix is-expanded">
                            <ul class="side-menu open">
                                <li class="">
                                    <a class="side-menu__item"
                                        href="{{ route('user.dashboard', ['slug_user' => auth()->user()->slug_user]) }}"><i
                                            class="side-menu__icon  icon-user"></i><span class="side-menu__label">
                                            Modifiez votre profile</span></a>
                                </li>
                                <li>
                                    <a class="side-menu__item" href="{{ route('logout') }}"><i
                                            class="side-menu__icon icon icon-power"></i><span
                                            class="side-menu__label">Déconnexion</span></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <form class="card my-select" action="{{ route('recherche') }}" method="GET">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Rechercher une entreprise</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="text4" placeholder="Que cherchez-vous ?"
                                name="nom">
                            <script type="text/javascript">
                                var path = "{{ route('autocomplete') }}";
                                // path = path.replace(':pays_id', pays_id);

                                $("#text4").autocomplete({
                                    source: function(request, response) {
                                        $.ajax({
                                            url: path,
                                            type: 'GET',
                                            dataType: "json",
                                            data: {
                                                text4: request.term
                                            },
                                            success: function(data) {
                                                response(data);
                                            }
                                        });
                                    },
                                    select: function(event, ui) {
                                        $('#text4').val(ui.item.label);
                                        console.log(ui.item);
                                        return false;
                                    }
                                });
                            </script>
                        </div>
                        <div class="form-group select2-radius-single">
                            <select name="country" id="select-countries"
                                class="form-control form-select select2-show-search" name="secteur">
                                <option disabled selected>Secteur d'activité</option>
                                @foreach ($souscategories as $souscategorie)
                                    <option value="{{ $souscategorie->libelle }}">{{ $souscategorie->libelle }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">
                            <button type="submit"
                                class="btn btn-primary btn-block waves-effect waves-light">Trouver</button>
                        </div>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sécurité pour utilisateurs</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled widget-spec  mb-0">
                            <li class="">
                                <i class="fe fe-chevron-right text-success" aria-hidden="true"></i> Meet Seller at
                                public Place
                            </li>
                            <li class="">
                                <i class="fe fe-chevron-right text-success" aria-hidden="true"></i> Check item before
                                you Rent
                            </li>
                            <li class="">
                                <i class="fe fe-chevron-right text-success" aria-hidden="true"></i> Pay only after
                                collecting item
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-12 col-md-12">
                <form class="card mb-0" enctype="multipart/form-data" method="POST"
                    action="{{ route('user.dashboard.update', ['slug_user' => $users->slug_user]) }}">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Modifiez votre profil</h3>
                    </div>
                    @if (Session::has('user'))
                        <div class="alert alert-success" role="alert">{{ Session::get('user') }}</div>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" class="form-control" placeholder="Prénom" name="prenoms"
                                        value="{{ old('prenoms') ?? $users->prenoms }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control" placeholder="Nom" name="name"
                                        value="{{ old('name') ?? $users->name }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email"
                                        value="{{ old('email') ?? $users->email }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Mot de passe"
                                        name="password" value="{{ old('password') ?? $users->password }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Téléphone 1</label>
                                    <input type="text" class="form-control" placeholder="Téléphone 1"
                                        name="telephone1" value="{{ old('telephone1') ?? $users->telephone1 }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Téléphone 2</label>
                                    <input type="text" class="form-control" placeholder="Téléphone 2"
                                        name="telephone2" value="{{ old('telephone2') ?? $users->telephone2 }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Adress</label>
                                    <input type="text" class="form-control" placeholder="Adress" name="adresse"
                                        value="{{ old('adresse') ?? $users->adresse }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Fonction</label>
                                    <input type="text" class="form-control" placeholder="Votre fonction"
                                        name="fonction" value="{{ old('fonction') ?? $users->fonction }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control"
                                        placeholder="https://www.facebook.com/" name="facebook"
                                        value="{{ old('facebook') ?? $users->facebook }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" placeholder="https://www.instagram.com/"
                                        name="google" value="{{ old('google') ?? $users->google }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" placeholder="https://twitter.com/"
                                        name="twitter" value="{{ old('twitter') ?? $users->twitter }}">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Linkedin</label>
                                    <input type="text" class="form-control" placeholder="https://fr.linkedin.com/"
                                        name="linkedin" value="{{ old('linkedin') ?? $users->linkedin }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">À propos de moi</label>
                                    <textarea rows="5" class="form-control" placeholder="Saisissez votre description" name="description">{{ old('description') ?? $users->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label class="form-label">Votre photo</label>
                                    <div class="form-file">
                                        <input type="file" class="form-control example-file-input-custom"
                                            name="example-file-input-custom" name="photo1"
                                            value="{{ old('photo1') ?? $users->photo1 }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--/User Dashboard-->

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
@include('frontend.footer.footer14')
@include('frontend.footer.footer12')
@include('frontend.footer.footer16')
@include('frontend.footer.footer17')
@include('frontend.footer.footer18')
