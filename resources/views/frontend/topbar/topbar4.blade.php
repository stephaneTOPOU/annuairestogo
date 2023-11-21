<div class="horizontal-main bg-dark-transparent clearfix">
    <div class="horizontal-mainwrapper container clearfix">
        <div class="desktoplogo">
            <a href="{{ route('home.pays',['slug_pays'=>'tg']) }}"><img src="{{ asset('assets/images/brand/logo1.png') }}" alt="annuaires togo"></a>
        </div>
        <div class="desktoplogo-1">
            <a href="{{ route('home.pays',['slug_pays'=>'tg']) }}"><img src="{{ asset('assets/images/brand/logo.png') }}" alt="annuaires togo"></a>
        </div>
        <!--Nav-->
        <nav class="horizontalMenu clearfix d-md-flex">
            <ul class="horizontalMenu-list">
                <li aria-haspopup="true"><a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Accueil</a></li>
                <li aria-haspopup="true"><a href="{{ route('about.pays',['slug_pays'=>'tg']) }}">A Propos</a></li>
                <li aria-haspopup="true"><a href="{{ route('contact.pays',['slug_pays'=>'tg']) }}"> Contact <span class="wsarrow"></span></a></li>
                <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                    <span><a class="btn btn-orange" href="{{ route('entreprise.register.pays',['slug_pays'=>'tg']) }}">Enrégistrer une entreprise</a></span>
                </li>
            </ul>
            <ul class="mb-0">
                <li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
                    <span><a class="btn btn-orange ad-post " href="{{ route('entreprise.register.pays',['slug_pays'=>'tg']) }}">Enrégistrer une entreprise</a></span>
                </li>
            </ul>
        </nav>
        <!--Nav-->
    </div>
</div>