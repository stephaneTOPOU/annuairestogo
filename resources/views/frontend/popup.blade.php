<!-- Popup Intro-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <a class="close btn btn-sm btn-secondary m-0" data-bs-dismiss="modal" aria-label="Close">
                    X
                </a>
            </div>
            <div class="modal-body">
                <div id="popupcarousel" class="owl-carousel testimonial-owl-carousel4">
                    @foreach ($popups as $popup)
                        <div class="item text-center">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 d-block mx-auto">
                                    <div class="testimonia text-center">
                                        <img
                                            {{-- loading="lazy" --}}
                                            src="{{ asset('assets/images/popup') }}/{{ $popup->popup_image }}" class="w-100 h-100 mb-3 mx-auto text-center" alt="{{ $popup->nom }}" />
                                        <a href="{{ route('entreprise.pays.profil',['slug_pays'=>$popup->slug_pays,'slug_categorie'=>$popup->slug_categorie,'slug_souscategorie'=>$popup->slug_souscategorie,'slug_entreprise'=>$popup->slug_entreprise]) }}" class="btn btn-primary btn-ptill mb-3">{{ $popup->nom }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Popup Intro-->