<div class="horizontal-main bg-dark-transparent clearfix">
    <div class="horizontal-mainwrapper container clearfix">
        <div class="desktoplogo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/annuairestogo_logo/logo1.png') }}"
                    alt="annuaires togo"></a>
        </div>
        <div class="desktoplogo-1">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/annuairestogo_logo/logo.png') }}"
                    alt="annuaires togo"></a>
        </div>
        <!--Nav-->
        <nav class="horizontalMenu clearfix d-md-flex">
            <ul class="horizontalMenu-list">
                <li aria-haspopup="true"><a href="{{ route('home') }}">Accueil</a></li>
                <li aria-haspopup="true"><a href="{{ route('pharmacie') }}">Pharmacie de garde</a></li>
                <li aria-haspopup="true"><a href="{{ route('about') }}">A Propos</a></li>
                <li aria-haspopup="true"><a href="{{ route('contact') }}"> Contact <span class="wsarrow"></span></a>
                </li>
                <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                    <span><a class="btn btn-orange" href="{{ route('entreprise.register') }}">Enrégistrer une
                            entreprise</a></span>
                </li>
            </ul>
            <ul class="mb-0">
                <li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
                    <span><a class="btn btn-orange ad-post " href="{{ route('entreprise.register') }}">Enrégistrer une
                            entreprise</a></span>
                </li>
            </ul>
        </nav>
        <!--Nav-->
    </div>
</div>
