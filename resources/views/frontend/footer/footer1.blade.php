<!--Footer Section-->
<section class="main-footer">
    <footer class="bg-dark-purple text-white">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h6>Annuaire Togo</h6>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <p>Bienvenue sur l'Annuaire Togo, votre référence incontournable pour découvrir et contacter les
                            entreprises, services et professionnels locaux au cœur de ce magnifique pays d'Afrique de
                            l'Ouest. </p>
                        <p>Notre annuaire exhaustif offre une plateforme conviviale où les utilisateurs peuvent trouver
                            rapidement des informations précises et à jour sur une variété de secteurs.</p>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h6>Nos Services</h6>
                        <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('about') }}">A propos</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('cgu') }}">Condition générale d'utilisation</a></li>
                            <li><a href="{{ route('cp') }}">Politique de confidentialité</a></li>
                            <li><a href="{{ route('cookie') }}">politique de cookie</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <h6>Contact</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <ul class="list-unstyled mb-0">
                            @foreach ($parametres as $parametre)
                                <li>
                                    <a href="#"><i class="fa fa-home me-3 text-primary"></i>
                                        {{ $parametre->adresse }} </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope me-3 text-primary"></i>
                                        {{ $parametre->email }} </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone me-3 text-primary"></i> (+228)
                                        {{ $parametre->telephone1 }} </a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-print me-3 text-primary"></i> (+228)
                                        {{ $parametre->telephone2 }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <ul class="list-unstyled list-inline mt-3">
                            @foreach ($parametres as $parametre)
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"
                                        href="{{ $parametre->lienface }}" target="_blank">
                                        <i class="fa fa-facebook bg-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"
                                        href="{{ $parametre->lientwitter }}" target="_blank">
                                        <i class="fa fa-twitter bg-info"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"
                                        href="{{ $parametre->lienyoutube }}" target="_blank">
                                        <i class="fa fa-youtube bg-danger"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light"
                                        href="{{ $parametre->lienlinkedin }}" target="_blank">
                                        <i class="fa fa-linkedin bg-linkedin"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12">
                        <h6>S'abonner</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <div class="input-group w-70">
                            <input type="text" class="form-control br-ts-3  br-bs-3 " placeholder="Email">
                            <div class=" ">
                                <button type="button" class="btn btn-primary br-ts-0  br-bs-0"> S'abonner </button>
                            </div>
                        </div>
                        <h6 class="mb-0 mt-5">Payments</h6>
                        <hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
                        <div class="clearfix"></div>
                        <ul class="footer-payments">
                            <li class="ps-0"><a href="javascript:;"><i class="fa fa-cc-amex text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-visa text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-credit-card-alt text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-mastercard text-muted" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:;"><i class="fa fa-cc-paypal text-muted" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="bg-dark-purple text-white p-0">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
                        Copyright © 2024 <a href="{{ route('home') }}" class="fs-14 text-primary">Annuaires Togo</a>.
                        Tous droits réservés.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--Footer Section-->

{{-- <script src="{{ asset('/sw.js') }}"></script>
<script>
    if ("serviceWorker" in navigator) {
       // Register a service worker hosted at the root of the
       // site using the default scope.
        navigator.serviceWorker.register("/sw.js").then(
        (registration) => {
            console.log("Service worker registration succeeded:", registration);
        },
        (error) => {
            console.error(`Service worker registration failed: ${error}`);
        },
        );
    } else {
        console.error("Service workers are not supported.");
    }
    </script> --}}

<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function(reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
