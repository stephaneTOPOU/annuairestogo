<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                <div class="top-bar-left d-flex">
                    <div class="clearfix">
                        <ul class="socials">
                            @foreach ($parametres as $parametre)
                                <li>
                                    <a target="_blank" class="social-icon text-dark" href="{{ $parametre->lienface }}"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="social-icon text-dark"
                                        href="{{ $parametre->lientwitter }}"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="social-icon text-dark"
                                        href="{{ $parametre->lienlinkedin }}"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a target="_blank" class="social-icon text-dark"
                                        href="{{ $parametre->lienyoutube }}"><i class="fa fa-youtube"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="clearfix">
                        <ul class="contact border-start">
                            @foreach ($parametres as $parametre)
                                <li class="me-5 d-lg-none">
                                    <a href="#" class="callnumber text-dark"><span><i
                                                class="fa fa-phone me-1"></i>: (+228)
                                            {{ $parametre->telephone1 }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                <div class="top-bar-right">
                    <ul class="custom">
                        @if (Auth::check())
                            <li class="dropdown">
                                <a href="#" class="text-dark" data-bs-toggle="dropdown"><i
                                        class="fa fa-home me-1"></i><span>Dashboard</span></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <a href="{{ route('user.dashboard', ['slug_user' => auth()->user()->slug_user]) }}"
                                        class="dropdown-item">
                                        <i class="dropdown-icon icon icon-user"></i> Mon profil
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                        <i class="dropdown-icon icon icon-power"></i> Déconnexion
                                    </a>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('user') }}" class="text-dark"><i class="fa fa-user me-1"></i>
                                    <span>S'inscrire</span></a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}" class="text-dark"><i class="fa fa-sign-in me-1"></i>
                                    <span>Connexion</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
