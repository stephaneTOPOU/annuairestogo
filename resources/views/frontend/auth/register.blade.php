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
                            <h1 class="">Inscription</h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                                <li class="breadcrumb-item active text-white" aria-current="page"> Inscription</li>
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
                        <form id="Register" class="card-body" tabindex="500" action="{{ route('user.add') }}"
                            method="POST">
                            @csrf
                            <h3>Inscription</h3>

                            @if (Session::has('user'))
                                <div class="alert alert-success" role="alert">{{ Session::get('user') }}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="Nom">
                                        <input type="text" name="name">
                                        <label>Nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="Prénom">
                                        <input type="text" name="prenoms">
                                        <label>Prénom</label>
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
                                    <div class="Téléphone">
                                        <input type="text" name="telephone1">
                                        <label>Téléphone</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="Profession">
                                        <input type="text" name="fonction">
                                        <label>Profession</label>
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
                                    <div class="Mot de passe">
                                        <input type="password" name="password" id="password">
                                        <label>Mot de passe</label>
                                    </div>
                                    <span id="password-error" style="color: red;"></span>
                                </div>
                                <div class="col-md-6">
                                    <div class="confirmez le mot de passe">
                                        <input type="password" name="password2" id="password2">
                                        <label>confirmez le mot de passe</label>
                                    </div>
                                    <span id="confirmPassword-error" style="color: red;"></span>
                                </div>
                            </div>

                            <div class="submit">
                                <button class="btn btn-primary btn-block">S'inscrire</button>
                            </div>
                            <p class="text-dark mb-0">Déjà inscrit ?<a href="{{ route('login') }}"
                                    class="text-primary mx-1">Connectez-vous maintenant</a></p>
                        </form>
                        <script>
                            document.getElementById('Register').addEventListener('submit', function(event) {
                                var password = document.getElementById('password').value;
                                var confirmPassword = document.getElementById('password2').value;
                                var passwordError = document.getElementById('password-error');
                                var confirmPasswordError = document.getElementById('confirmPassword-error');

                                var isValid = true;

                                // Reset errors
                                passwordError.textContent = '';
                                confirmPasswordError.textContent = '';

                                if (password.length < 8) {
                                    event.preventDefault(); // Empêche la soumission du formulaire
                                    passwordError.textContent = 'Le mot de passe doit comporter au moins 8 caractères.';
                                    isValid = false;
                                }

                                if (password !== confirmPassword) {
                                    event.preventDefault(); // Empêche la soumission du formulaire
                                    confirmPasswordError.textContent = 'Les mots de passe ne correspondent pas.';
                                    isValid = false;
                                }

                                // if (isValid) {
                                //     alert('Mot de passe valide.');
                                //     // Vous pouvez soumettre le formulaire ici si vous le souhaitez
                                //     // this.submit(); // Décommentez cette ligne si vous voulez soumettre le formulaire
                                // }
                            });
                        </script>
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
