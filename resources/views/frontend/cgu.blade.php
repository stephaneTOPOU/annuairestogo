<!DOCTYPE html>
<html>

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Claylist – Bootstrap5  Listing & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="Listing, dashboard, backend, flat, jquery, Ui, crm, Listing template, responsive , bootstrap, clean, scss, modern, minimal, panel, bootstrap 5 Listing dashboard, multi dashboard, bootstrap 5, Listing dashboard ">
    <!-- Title -->
    <title>Condition générale d'utilisation</title>
    <link rel="icon" href="{{ asset('assets/images/annuairestogo_logo/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets2/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets2/plugins/iconfonts/icons.css') }}" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="{{ asset('assets2/css/main.css') }}" rel="stylesheet">
    <!---Internal  Prism css-->
    <link href="{{ asset('assets2/plugins/prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/plugins/treeview-prism/prism.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/plugins/treeview-prism/prism-treeview.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-blush">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blush">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->


    <!-- Sidebarover lay -->
    <div class="sidebar-overlay" data-toggle="sidebar"></div>

    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="admin-image"> <img src="{{ asset('assets/images/annuairestogo_logo/logo1.png') }}"
                    alt=""> </div>
            <!-- Menu -->
            <div class="menu main-sidebar">
                <ul class="list" id="documenter_nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cgu') }}"><i class="fe fe-link sidemenu-icon"></i><span
                                class="sidemenu-label">cgu</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cp') }}"><i class="fe fe-link sidemenu-icon"></i><span
                                class="sidemenu-label">politique de confidentialité</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cookie') }}"><i class="fe fe-link sidemenu-icon"></i><span
                                class="sidemenu-label">politique de cookies</span></a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content home">
        <div class="container-fluid">
            <div class="block-header mt-4">
                <h3><span class="text-primary">Condition</span> - générale d'utilisation</h3>
            </div>
            <div class="">
                <div class="alert alert-info">
                    <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">×</button>
                    <strong>Note: </strong>
                    <hr class="message-inner-separator">
                    <p>"Explorez un monde de transparence et de confiance en découvrant nos Conditions Générales
                        d'Utilisation. En lisant attentivement nos CGU, vous vous assurez de comprendre pleinement nos
                        engagements envers vous et de profiter au mieux de l'expérience que nous offrons. Votre
                        confiance est notre priorité, et la clarté de nos CGU est la clé d'une relation harmonieuse.
                        Prenez quelques instants pour découvrir le cadre qui régit notre plateforme et assurez-vous de
                        bénéficier au maximum de tout ce que nous avons à offrir."</p>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xl-9">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section card-transparent" id="Indroduction">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Indroduction</h5>
                                    <span class="mt-2 text-muted fs-15 font-weight-normal">Welcome to Claylist -
                                        Classifieds, Directory, Multipurpose Listing HTML Template</span>
                                    <ul class="documenter-list mt-3">
                                        <li>Created Date: 02/06/2022</li>
                                        <li>Author: Spruko</li>
                                        <li>Company: Spruko Technologies Private Limited</li>
                                    </ul>
                                    <p>Thank you for showing interest towards our listing template. Feel free to contact
                                        us any time. We have a dedicated team to provide you the best support. If you
                                        have any queries please contact through live chat
                                    </p>
                                    <p class="mb-0">If You Love Our Template Design <strong>Please don't forgot to
                                            rate
                                            it.</strong> Thank you so much! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="def">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Définition</h5>
                                    <p>
                                        Dans les présentes conditions générales d'utilisation, les termes, mots et
                                        expressions ci-après auront la signification suivante, sauf stipulation
                                        explicite contraire :
                                    </p>
                                    <ul class="documenter-list mt-3">
                                        <li>Article: désigne les articles des présentes CGU.</li>
                                        <li>Article: à la signification qui lui est donnée à l’Article 5.4 des CGU.</li>
                                        <li>Contenu: désigne les données de toute nature (image, texte, son...), en ce
                                            inclus toutes Données à Caractère Personnel, transmis par un Utilisateur à
                                            l'Editeur pour être publiées sur le Site Internet, stockées sur
                                            l'infrastructure de l’Editeur dans le cadre des Services et le cas échéant,
                                            accessibles à partir du Site Internet.</li>
                                        <li>Conditions Générales d'Utilisation" ou "CGU": désigne les conditions
                                            générales d'utilisation par toute Personne du Site Internet et des Services,
                                            disponibles sur le Sites Internet dans la rubrique ”Mentions Légales”, qui
                                            décrivent les droits et obligations de tout Utilisateur titulaire ou non
                                            d'un Compte.</li>
                                        <li>Conditions Générales de Vente" ou "CGV: désigne les conditions générales de
                                            vente souscrites par un Utilisateur afin de pouvoir bénéficier de tout ou
                                            partie des fonctionnalités d'un Service.</li>
                                        <li>Contrôle: désigne le contrôle d’une Personne tel que défini à l’article
                                            L.233 3 du Code de commerce.</li>
                                        <li>Données à Caratère Personnel: Revoir </li>
                                        <li>Editeur: Revoir </li>
                                        <li>Elément Illicite: à la signification qui lui est donnée à l’Article 6.3 des
                                            CGU.</li>
                                        <li>Groupe: désigne relativement à une Personne, toute Personne qui Contrôle
                                            directement ou indirectement cette Personne, ou qui est Contrôlée
                                            directement ou indirectement par cette Personne, ou encore qui est sous le
                                            Contrôle direct ou indirect d’une Personne Contrôlant ladite Personne.</li>
                                        <li>Information: désigne toute information et/ou donnée communiquée par
                                            l'Utilisateur à l'Editeur (y compris toute information se rapportant à sa
                                            Personne et à son entreprise, permettant de l'(les) identifier ou le (les)
                                            rendant identifiable(s)) lors de l'ouverture d'un Compte, de l'édition d'un
                                            Profil Entreprise, et/ou lors de l'utilisation des Services et du Site
                                            Internet.</li>
                                        <li>Jour: désigne tous les jours de la semaine, à l’exception du samedi, du
                                            dimanche et des jours fériés au Togo.</li>
                                        <li>Mauvaise Utilisation du Service: à la signification qui lui est donnée à
                                            l’Article 12.1 des CGU.</li>
                                        <li>Messagerie: désigne le service de messagerie de l'Editeur décrit à l'Article
                                            5.4 des CGU.</li>
                                        <li>Moyen d'Accès: désigne l'association d'un identifiant et d'un mot de passe
                                            permettant à un Utilisateur d'accéder à son Compte.</li>
                                        <li>Espace connecté: désigne le service permettant - via le Profil Entreprise -
                                            la présentation de l'entreprise de l'Utilisateur, de ses produits et
                                            services, et décrit à l'Article 5.2 des CGU.</li>
                                        <li>Partie: désigne ensemble ou individuellement l'Utilisateur et/ou l'Editeur.
                                        </li>
                                        <li>Plateforme de Sourcing: désigne la base de données de référencement,
                                            propriété de l'Editeur, regroupant, organisant et triant les Profils
                                            Entreprise, leurs produits et de leurs services et décrite à l’Article 5.1
                                            des CGU.</li>
                                        <li>Personne: désigne toute personne physique ainsi que toute société
                                            commerciale, association, tout partenariat, joint-venture, toute société à
                                            responsabilité limitée, société par actions ou autre société, ou
                                            organisation, française ou étrangère, et plus généralement toute entité
                                            dotée ou dépourvue de la personnalité morale.</li>
                                        <li>Profil Entreprise: désigne la page du Site Internet dédiée à l'Utilisateur,
                                            lui offrant la possibilité de présenter son entreprise, ses activités, ses
                                            produits et services, d'afficher ses coordonnées et d'intégrer un lien
                                            hypertexte vers son propre site internet.</li>
                                        <li>Réclamation d'un Tiers: désigne toute procédure judiciaire, demande ou
                                            réclamation, intentée par des Personnes tiers à l’encontre de l'Editeur, et
                                            résultant de l’utilisation du Site Internet et/ou des Services par
                                            l'Utilisateur, ou de la publication de Contenu par ce dernier.</li>
                                        <li>Réglementation: désigne toute loi, réglementation, en ce compris toute
                                            instruction administrative, générale ou spécifique, ainsi que toute
                                            autorisation, tout permis, agrément, certification ou norme, administrative,
                                            conventionnelle ou professionnelle applicable à tout moment, à l'Utilisateur
                                            et à son activité (en ce compris, sans que cette liste soit limitative: à
                                            ses actifs, à ses associés ou actionnaires, à ses comptes sociaux, à ses
                                            salariés et/ou mandataires sociaux, à ses dirigeants, à ses produits et
                                            services, etc.).</li>
                                        <li>Site Internet: désigne le site internet accessible à l'adresse
                                            www.annuairestogo.com (ou l'un des 27 autres domaines) qui comprend
                                            notamment les pages permettant à l'Utilisateur d'accéder à l'Espace
                                            Connecté.</li>
                                        <li>Service: désigne un service fourni par l'Editeur, tels que défini par
                                            l'Article 5 des CGU ou le cas échéant par les CGV.</li>
                                        <li>Suspension de Service: à la signification qui lui est donnée à l’Article
                                            12.1 des CGU.</li>
                                        <li>Utilisateur: désigne toute personne physique qui dispose (a) de la capacité
                                            requise pour se conformer à ses obligations en vertu des CGU et (b) des
                                            droits qui l'autorise (i) à se soumettre aux CGU et (ii) à soumettre aux CGU
                                            l'entreprise titulaire du Compte.</li>
                                    </ul>

                                    <p class="mb-0">

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="odc">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Objet de CGU</h5>
                                    <ul class="documenter-list mt-3">
                                        <li>
                                            Les CGU fixent les conditions générales d'utilisation par toute Personne du
                                            Site Internet et des Services disponibles sur le Sites Internet, et
                                            décrivent les droits et obligations de tout Utilisateur du Site Internet et
                                            des Services rendus accessibles par l’Editeur, que l'Utilisateur possède ou
                                            non un Compte.
                                        </li>
                                        <li>
                                            Toute Personne, tout Utilisateur déclare en accédant au Site Internet et/ou
                                            en utilisant les Services payants ou gratuits, avoir pris connaissance des
                                            CGU et les accepter expressément sans réserve et/ou modification de quelque
                                            nature que ce soit.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="mds">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Modalité d'utilisation site internet</h5>
                                    <ul class="documenter-list mt-3">
                                        <li>
                                            Il appartient à l’Utilisateur de s’équiper de manière appropriée afin de
                                            pouvoir se connecter au Site Internet. L’ensemble des frais d’équipements,
                                            de connexion et de transmission nécessaires à l’utilisation du Site Internet
                                            et des Services payants ou gratuits qui y sont accessibles, est à la charge
                                            exclusive de l'Utilisateur. L’Utilisateur est par ailleurs informé que
                                            certains numéros de téléphone d’entreprises affichés sur le Site Internet
                                            pourront être des "numéros surtaxés" ou générant des frais d'itinérance.
                                            L'Utilisateur assume seul le coût des communications téléphoniques lié à ces
                                            numéros surtaxés ou générant ces frais d'itinérance.
                                        </li>
                                        <li>
                                            L’accès et l'utilisation du Site Internet par l'Utilisateur est effectuée à
                                            ses seuls risques et périls. L'Utilisateur reconnaît avoir été informé que
                                            les transmissions de données et des Informations sur le réseau Internet
                                            bénéficient d'une fiabilité technique relative, en dépit des protections mis
                                            en œuvre, que tout site Internet peut faire l'objet d'intrusions de tiers
                                            non autorisés, et que les informations circulant sur le réseau Internet ne
                                            sont pas protégées contre des détournements éventuels ou contre des virus
                                            éventuels.
                                        </li>
                                        <li>
                                            Il appartient donc à l'Utilisateur de prendre les mesures appropriées afin
                                            de protéger ses propres données et/ou logiciels stockés sur ses équipements
                                            informatiques contre toute atteinte ayant pour origine un accès au Site
                                            Internet ou une utilisation des Services.
                                        </li>
                                        <li>
                                            L’Editeur ne garantit pas que le Site Internet et les Services seront
                                            exempts de toute interruption, retard, incident de sécurité ou erreur, que
                                            les résultats obtenues grâce aux Services seront précis ou exacts, ou que
                                            tout défaut du Service sera corrigé.
                                        </li>
                                        <li>
                                            Ainsi, l’Editeur ne saurait être tenu responsable de tout dommage direct ou
                                            indirect, de quelle que nature que ce soit, pouvant survenir à l'occasion de
                                            l'utilisation ou de l'impossibilité d'utiliser le Site Internet ou les
                                            Services. De même, l’Editeur ne saurait être tenu responsable de
                                            désagréments ou d'erreurs causés par une perturbation des réseaux de
                                            communication électronique et notamment du réseau Internet, ni des dégâts
                                            accidentels ou volontaires subis par l'Utilisateur ou provoqués par lui-même
                                            ou par des Personnes tiers.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="fsi">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Fonctionnalité du site internet</h5>
                                    <ul class="documenter-list mt-3">
                                        <li>
                                            La Plateforme de Sourcing : L'Editeur propose à l'Utilisateur d'accéder à
                                            une base de données répertoriant environ 2.500.000 entreprises et permettant
                                            la mise en relation des Personnes entre elles, agissant toutes dans un cadre
                                            professionnel, communément appelé "B2B" (Business to Business), via le Site
                                            Internet, et en 26 langues.. La consultation de la Plateforme de Sourcing
                                            par les Utilisateurs est gratuite. Pour être référencé au sein de la
                                            Plateforme de Sourcing, l'Utilisateur a la possibilité, après avoir ouvert
                                            un Compte, d'accéder à l'Espace Connecté lui permettant: soit de créer pour
                                            son entreprise un Profil Entreprise gratuit, soit de créer un Profil
                                            Entreprise payant.
                                        </li>
                                        <li>L'Espace Connecté : est un Service du Site Internet permettant à
                                            l'Utilisateur titulaire d'un Compte de disposer d'un Profil Entreprise sur
                                            la Plateforme de Sourcing lui offrant ainsi la possibilité de présenter ses
                                            activités, ses produits et services, d'afficher ses coordonnées et
                                            d'intégrer un lien hypertexte vers son propre site internet. L'Editeur
                                            mettra à disposition de l'Utilisateur sur le Site Internet un espace de
                                            publication du profil d’entreprise de l'Utilisateur qui lui sera réservé et
                                            lui communiquera par courrier électronique les Moyens d'Accès qui lui
                                            permettront d’ajouter, modifier, supprimer directement tous les éléments du
                                            Profil Entreprise (textes, photographies, vidéogrammes...).
                                        </li>
                                        <li>
                                            Messagerie :

                                            L'Utilisateur, après acceptation des CGU, peut envoyer des demandes de
                                            renseignements aux entreprises référencées par la Plateforme de Sourcing du
                                            Site Internet à l'aide de la Messagerie ou du formulaire de contact mis à sa
                                            disposition. Si l’Utilisateur choisit d’envoyer une demande de
                                            renseignements par le biais de la Messagerie ou du formulaire de contact,
                                            certaines de ses Informations Personnelles, y compris l'adresse e-mail de
                                            l'Utilisateur, pourront être visibles par l’entreprise contactée.

                                            L'Utilisateur utilisant la Messagerie ou le formulaire de contact s’engagent
                                            à ce que ses messages ne comportent aucun Elément Illicite et à adopter un
                                            comportement loyal et de bonne foi à l’égard des interlocuteurs contactés.

                                            Les demandes de renseignements faites au travers de la Messagerie ou du
                                            formulaire de contact par l'Utilisateur sont disponibles pour être consultée
                                            par leurs destinataires et aussi par les collaborateurs du service client de
                                            l'Editeur, qui peuvent partager ces demandes de renseignements avec d'autres
                                            Utilisateurs ou toute autre Personne, ce que l'Utilisateur reconnait et
                                            accepte. L'Editeur peut également utiliser à certaines occasions des
                                            serveurs d’e-mail tiers pour envoyer et suivre la réception des messages de
                                            demandes de renseignements de l'Utilisateur et analyser le schéma de
                                            l’utilisation des demandes de renseignements fourni par ces systèmes de
                                            suivi tiers, ce que l'Utilisateur reconnaît et accepte.

                                            L'Utilisateur est seul responsable du Contenu de ses messages échangés via
                                            la Messagerie.

                                            L'Editeur se réserve la faculté de suspendre ou interdire l’accès au
                                            Service, notamment à la Messagerie, et au Compte de tout Utilisateur ne
                                            respectant les CGU.
                                        </li>
                                        <li>
                                            Autres Services : L'Editeur peut mettre à la disposition des Utilisateurs
                                            des Services non décrits dans les CGU. Même dans ce cas, toutes les
                                            dispositions des CGU sont applicables aux Autres Services et en régissent
                                            l'utilisation.
                                            L'Editeur pourra, lors de la mise à disposition des Autres Services,
                                            demander l'adhésion de l'Utilisateur à des conditions spécifique
                                            d'utilisation des Autres Services. L'Utilisateur s’engage à respecter
                                            strictement les conditions d’utilisation des Autres Services qui seront, le
                                            cas échéant, mis à sa disposition. A défaut, l'Utilisateur se verra refuser
                                            l’accès à l'Autre Service et ses fonctionnalités.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="ddu">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Déclaration de l'utilisateur</h5>
                                    <ul class="documenter-list mt-3">
                                        <li>
                                            L'Utilisateur s'engage :
                                            <ul class="documenter-list mt-3">
                                                <li>
                                                    à ne procéder à aucun démarchage d'Utilisateurs à l'aide des
                                                    information figurant sur la Plateforme de Sourcing et ce de quelque
                                                    manière qu'il soit;
                                                </li>
                                                <li>
                                                    à ne pas obtenir les adresses de courrier électronique des autres
                                                    Utilisateurs ou de tiers en vue de réaliser des envois massifs de
                                                    courrier électronique (ou ”Spam”), de réaliser des opérations
                                                    d'envoi massif susvisées à partir de son Compte, ou d'effectuer
                                                    toute autre opération pouvant nuire au fonctionnement normal du Site
                                                    Internet, des Services, ou du Compte d'un autre Utilisateur;
                                                </li>
                                                <li>
                                                    à n'exercer d'activités commerciales via le Site Internet ou les
                                                    Services qu'en conformité avec la Règlementation;
                                                </li>
                                                <li>
                                                    à respecter l'image et la réputation de l’Editeur et à ne pas se
                                                    livrer à des déclarations et/ou des actions de nature à porter
                                                    atteinte de quelque manière que ce soit à l’Editeur.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>L'Utilisateur s'engage à ne communiquer sur le Site Internet ou via les
                                            Services, que des informations exactes, conformes, lisibles et intelligibles
                                            et ne portant pas préjudice aux intérêts de Personnes tiers. Notamment,
                                            l'Utilisateur s'engage à se conformer et à respecter toute Règlementation.
                                            En particulier, il s'engage à ne publier et/ou diffuser aucun Contenu ou
                                            aucune information quelle que soit sa forme ou sa nature contenant des
                                            Eléments Illicites, ou indiquant une adresse Internet donnant accès à des
                                            Eléments Illicites.
                                            <ul class="documenter-list mt-3">
                                                <li>contraire à l'ordre public et aux bonnes mœurs,</li>
                                                <li>interdit à la vente, à la promotion, à la publicité selon la
                                                    Règlementation,</li>
                                                <li>à caractère pornographique ou pédophile,</li>
                                                <li>raciste, xénophobe, révisionniste, injurieux, diffamatoire, portant
                                                    atteinte à l'honneur ou la réputation d'autrui, ou de nature à
                                                    porter atteinte à la présomption d'innocence,</li>
                                                <li>incitant à la discrimination, à la haine d'une personne ou d'un
                                                    groupe de personnes à raison de leur origine ou de leur appartenance
                                                    ou de leur non-appartenance à une ethnie, une nation, une race ou
                                                    une religion déterminée, menaçant une personne ou un groupe de
                                                    personnes,</li>
                                                <li>incitant à commettre un délit, un crime ou un acte de terrorisme,
                                                </li>
                                                <li>faisant l'apologie des crimes de guerre ou des crimes contre
                                                    l'humanité, ou niant leur existence,</li>
                                                <li>incitant au suicide,</li>
                                                <li>permettant à des tiers de se procurer directement ou indirectement
                                                    des logiciels piratés, des numéros de série de logiciels, des moyens
                                                    de paiement piratés, des numéros de moyen de paiement piraté, des
                                                    logiciels permettant les actes de piratage et d'intrusion dans les
                                                    systèmes informatiques et de télécommunication, des virus et autres
                                                    bombes logiques et d'une manière générale tout outil logiciel ou
                                                    autre permettant de porter atteinte aux droits d'autrui et à la
                                                    sécurité des personnes et des biens,</li>
                                                <li>de nature à porter atteinte au respect de la vie privée, au
                                                    caractère privé des correspondances et plus généralement aux droits
                                                    des personnes et des biens</li>
                                                <li>usurpant l’identité d’autrui.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            L’Editeur supprimera de plein droit, sans préavis tout Contenu qu’il
                                            pourrait juger comme un Elément Illicite.
                                        </li>
                                        <li>
                                            L'Utilisateur s'engage à défendre et à indemniser l'Editeur et les Personnes
                                            de son Groupe (y compris leurs dirigeants, directeurs, salariés et
                                            représentants) de toutes les conséquences que ce dernier pourra supporter du
                                            fait d’une Réclamation d’un Tiers intentée à son encontre ou contre les
                                            Personnes de son Groupe, sauf en cas d’inexécution par l'Editeur de ses
                                            obligations au titre des CGU (qui serait à l’origine de telles
                                            réclamations), et résultant : a) d'une Mauvaise Utilisation du Service, ou
                                            b) du non-respect par l'Utilisateur de l’une quelconque de ses obligations
                                            ou garanties prévues par les CGU.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="odt">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Overture de compte</h5>
                                    <ul class="documenter-list mt-3">
                                        <li>Pour ouvrir un Compte tout Utilisateur du Site Internet doit être une
                                            Personne âgée de plus de 18 ans et doit avoir le pouvoir de représenter
                                            l'entreprise titulaire du Compte. Seule une entreprise représentée par un
                                            Utilisateur peut être titulaire d'un Compte. L'Utilisateur doit (a) soit
                                            remplir le formulaire d'inscription avec l’ensemble des mentions
                                            obligatoires requises puis cliquer sur le bouton ”s’inscrire", valant
                                            acceptation des CGU pour le compte et au nom de l'entreprise titulaire du
                                            Compte, (b) soit utiliser la Messagerie ou le formulaire de contact et
                                            cliquer sur le bouton ”envoyer" un message, valant acceptation les CGU pour
                                            le compte et au nom de l'entreprise émetteur dudit message, (c) soit cliquer
                                            sur "Créer un compte utilisateur" dans le formulaire d’enregistrement de son
                                            entreprise, valant acceptation des CGU pour le compte et au nom de
                                            l’entreprise enregistrée. A cet instant, la Personne aura expressément
                                            accepté les termes et conditions des CGU, au nom et pour le compte de
                                            l'entreprise désignée pour être titulaire du Compte, mais aussi en son nom
                                            propre, et solidairement avec ladite entreprise. L'Utilisateur sera inscrit
                                            en sa qualité de représentant de l'entreprise titulaire du Compte,
                                            enregistré dans la Plateforme de Sourcing. L'Utilisateur dispose alors sur
                                            le Site Internet d’un accès lui permettant d'accéder à tout ou partie des
                                            Services.</li>

                                        <li>La signature électronique de l'Utilisateur lors de son acceptation des CGU,
                                            formalise la conclusion d’un contrat entre cette l'entreprise de
                                            l'Utilisateur et l'Editeur. Cette acceptation validée par la Personne par
                                            son ”clic” sur le bouton ”j’accepte" ou ”envoyer" ou "s’inscrire" ou "créer
                                            un compte utilisateur" ou tout autre bouton qui déclenche la création d’un
                                            Compte d'Utilisateur, constitue une acceptation irrévocable des présentes
                                            CGU, à l'instar d'une signature manuscrite.</li>

                                        <li>Seules les Personnes juridiquement capables de souscrire des contrats
                                            peuvent obtenir la qualité d'Utilisateur sur le Site Internet.</li>

                                        <li>Toute Personne qui ouvre un Comptes dans les conditions fixée par le présent
                                            Article est identifié par un identifiant et un mot de passe formant ensemble
                                            un Moyen d'Accès à son Compte qui lui permet de bénéficier des Services
                                            gratuits ou payants proposés par l'Editeur à partir du Site Internet.</li>

                                        <li>Chaque Utilisateur doit fournir à l'Editeur des Informations précises,
                                            complètes, exactes et à jour. L'Utilisateur n'est pas autorisé à (i)
                                            sélectionner ou utiliser l'identifiant d'une autre Personne avec l'intention
                                            de se faire passer pour cette Personne, (ii) utiliser un nom sujet aux
                                            droits d'une autre Personne sans autorisation, ou (iii) utiliser un
                                            identifiant que l'Editeur, à sa seule discrétion, juge inapproprié ou
                                            offensant. Le mot de passe permettant à l'Utilisateur de s'identifier et
                                            d’accéder au Site Internet, aux Services et aux Informations est personnel
                                            et confidentiel. L'Utilisateur s'engage à le conserver secret, à ne pas le
                                            divulguer sous quelque forme que ce soit.</li>

                                        <li>L’inobservation de l’une quelconque de ces stipulations constituera une
                                            infraction aux CGU, pouvant entraîner la suspension et/ou la résiliation
                                            immédiate du Compte, sans préavis ni indemnité ou compensation.</li>

                                        <li>L'Utilisateur devra utiliser son Compte conformément aux instructions
                                            raisonnables de l'Editeur, celles-ci pouvant être régulièrement modifiées.
                                            L'Utilisateur sera exclusivement responsable de la sécurité de son Moyen
                                            d'Accès. L'Utilisateur notifiera immédiatement à l'Editeur la perte, le vol
                                            ou le mauvais fonctionnement d'un Moyen d'Accès ou du fait qu’il a des
                                            raisons de croire qu'un Moyen d'Accès a été découvert. S’il estime que cela
                                            est nécessaire, l'Editeur pourra désactiver et remplacer immédiatement un
                                            Moyen d'Accès (ou demander à l'Utilisateur d’en choisir un nouveau).
                                            L'Editeur se réserve le droit de suspendre l'accès au Site Internet, au
                                            Comptes et/ou aux Services par l’intermédiaire de l’utilisation d’un Moyen
                                            d'Accès en cas de survenance de l'un des événements suivants, et ce jusqu'à
                                            ce que le Moyen d’Accès soit remplacé par l'Editeur ou que l'Utilisateur en
                                            ait choisi un autre (suivant le cas) ou, que le problème ayant entraîné la
                                            suspension soit résolu de manière satisfaisante pour l'Editeur : (i)
                                            l'Editeur reçoit une notification de l'Utilisateur telle que décrite
                                            ci-dessus; (ii) l'Editeur a des raisons légitimes de soupçonner qu'un Moyen
                                            d'Accès a été découvert; (iii) une Suspension de Service; (iv) l'Editeur a
                                            des raisons légitimes de croire que l'Utilisateur n'a pas respecté, ne
                                            respecte pas ou ne va pas respecter ses obligations découlant des CGU et/ou
                                            des CGV; (v) l'Editeur a une raison légitime pour suspendre l'accès par
                                            l’utilisation du Moyen d'Accès concerné.</li>

                                        <li>L'Utilisateur est responsable de tout accès à son Compte par son Moyen
                                            d’Accès et de toute utilisation d'un Service (consultations, modifications,
                                            offres, annonces, messages...) et du contrôle (a) de la fraude et de toute
                                            autre utilisation illégale de son Moyen d’Accès, (b) des modifications non
                                            autorisées et tout autre comportement non autorisé, et (c) de tout usage
                                            suspect ou autre activité suspecte à l’aide de son Moyen d’Accès.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="card section" id="vdc">
                                <div class="body">
                                    <h5 class="mt-0 mb-2">Validité des cgu</h5>
                                    <ul class="documenter-list mt-3">
                                        <li>Les CGU s’appliquent à l’Utilisateur dès qu’il accède au Site Internet.</li>

                                        <li>Les CGU et les documents qui y sont visés, expriment ensemble l’intégralité
                                            des accords entre les Parties quant à leur objet et remplace et annule
                                            toutes conventions correspondances ou documents antérieurs que les Parties
                                            ont pu conclure ou se communiquer et ayant un objet identique ou similaire.
                                        </li>

                                        <li>Les CGU et les documents qui y sont visés, constituent le seul accord entre
                                            les Parties quant à l'objet défini ci-dessus.</li>

                                        <li>Les Parties ne seront pas engagées par les déclarations, clauses ou
                                            modalités qui se rapportent à celui-ci et qui n'y auraient pas été
                                            incorporées ou dans les documents qui y sont prévus.</li>

                                        <li>Les CGU peuvent être modifiées unilatéralement à tout moment par l'Editeur,
                                            qui en informera préalablement l'Utilisateur titulaire d'un Compte. Dans ce
                                            cas, les modifications apportées au CGU entrent en vigueur à compter de
                                            l'information donnée à l'Utilisateur par l'Editeur. En cas de refus par
                                            l'Utilisateur des nouvelles CGU, celui-ci pourra résilier son Compte et ne
                                            devra plus utiliser les Services, la Plateforme de Sourcing et le Site
                                            Internet. Pour les autres Utilisateurs non titulaire d'un Compte, les CGU
                                            entrent en vigueur immédiatement à compter de leur publication sur le Site
                                            Internet.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
                    <div class="main-content-left-components">
                        <div class="card custom-card card-transparent">
                            <div class="card-body component-item">
                                <div class="collapse  navbar-collapse justify-content-end" id="main-menu">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#Indroduction">Indroduction</a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#def">Définition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#odc">Objet de CGU</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#mds">Modalité d'utilisation site
                                                internet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#fsi">Fonctionnalité du site internet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#ddu">Déclaration de l'utilisateur </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#odt">Overture de compte</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#vdc">Validité des cgu</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card  bg-warning-transparent border-warning shadow-none" id="license-terms2">
                            <div class="">
                                <h6><span class=""><strong class="text-danger">Important License Terms
                                        </strong></span></h6>
                            </div>
                            <div class="card-body p-0">
                                <ul class="">
                                    <li class="mb-2">You cannot charge from your end product end users with a
                                        regular license.
                                    </li>
                                    <li class="mb-2">
                                        If you want to collect payments from end product end users then you
                                        must buy an extended license for each of the end product.
                                    </li>
                                    <li class="mb-2">
                                        You must buy one license for one domain only.(i.e either Regular or
                                        Extended)
                                    </li>
                                    <li>
                                        You cannot use Multi Domain,Multi Client, Multiple end Products with
                                        any of the licenses (i.e either Regular or Extended).
                                    </li>
                                </ul>
                                <p class="mb-0">for more details <strong class="">please click the </strong><a
                                        class="" target="_blank" style="text-decoration:underline;"
                                        href=" https://spruko.com/licenses-faqs">link</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer opened -->
        <div class="main-footer ht-40">
            <div class="pd-t-0-f ht-100p">
                <span>Copyright &copy; 2024 <a href="{{ route('home') }}">Annuaires Togo</a>. Tous droits
                    réservés.</span>
            </div>
        </div>
        <!-- Footer closed -->
    </section>

    <div class="color-bg">
        <div class="sidebar__toggle" data-toggle="sidebar">
            <a class="open-toggle" href="{{ route('home') }}"><i class="fe fe-menu"></i></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item mr-2"><a class="btn btn-primary" href=" https://spruko.com/support"
                    target="_blank"><i class="icon-help2"></i> Support</a></li>
            <li class="nav-item mr-2"><a class="btn btn-danger text-white"
                    href="https://themeforest.net/user/sprukosoft/portfolio" target="_blank"><i
                        class="icon-bag3"></i> Portfolio</a></li>
            <li class="nav-item"><a class="btn btn-success mr-3 text-white" href="https://spruko.com/licenses"
                    target="_blank"><i class="icon-bag3"></i> Licenses</a></li>
        </ul>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets2/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets2/bundles/morphingsearchscripts.bundle.js') }}"></script> <!-- morphing search Js -->
    <script src="{{ asset('assets2/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{ asset('assets2/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->

    <!-- Internal Prism js-->
    <script src="{{ asset('assets2/plugins/prism/prism.js') }}"></script>


    <!-- Treeview js-->
    <script src="{{ asset('assets2/plugins/treeview-prism/prism.js') }}"></script>
    <script src="{{ asset('assets2/plugins/treeview-prism/prism-treeview.js') }}"></script>

    <!-- Perfectscroll js-->
    <script src="{{ asset('assets2/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Custom js-->
    <script src="{{ asset('assets2/js/custom.js') }}"></script>
    <script src="{{ asset('assets2/js/menuspy.min.js.js') }}"></script>

    <script>
        var elm = document.querySelector('#main-menu');
        var ms = new MenuSpy(elm);

        (function() {

            if (typeof self === 'undefined' || !self.Prism || !self.document) {
                return;
            }

            /**
             * Class name for <pre> which is activating the plugin
             * @type {String}
             */
            var PLUGIN_CLASS = 'line-numbers';

            /**
             * Resizes line numbers spans according to height of line of code
             * @param  {Element} element <pre> element
             */
            var _resizeElement = function(element) {
                var codeStyles = getStyles(element);
                var whiteSpace = codeStyles['white-space'];

                if (whiteSpace === 'pre-wrap' || whiteSpace === 'pre-line') {
                    var codeElement = element.querySelector('code');
                    var lineNumbersWrapper = element.querySelector('.line-numbers-rows');
                    var lineNumberSizer = element.querySelector('.line-numbers-sizer');
                    var codeLines = element.textContent.split('\n');

                    if (!lineNumberSizer) {
                        lineNumberSizer = document.createElement('span');
                        lineNumberSizer.className = 'line-numbers-sizer';

                        codeElement.appendChild(lineNumberSizer);
                    }

                    lineNumberSizer.style.display = 'block';

                    codeLines.forEach(function(line, lineNumber) {
                        lineNumberSizer.textContent = line || '\n';
                        var lineSize = lineNumberSizer.getBoundingClientRect().height;
                        lineNumbersWrapper.children[lineNumber].style.height = lineSize + 'px';
                    });

                    lineNumberSizer.textContent = '';
                    lineNumberSizer.style.display = 'none';
                }
            };

            /**
             * Returns style declarations for the element
             * @param {Element} element
             */
            var getStyles = function(element) {
                if (!element) {
                    return null;
                }

                return window.getComputedStyle ? getComputedStyle(element) : (element.currentStyle || null);
            };

            window.addEventListener('resize', function() {
                Array.prototype.forEach.call(document.querySelectorAll('pre.' + PLUGIN_CLASS), _resizeElement);
            });

            Prism.hooks.add('complete', function(env) {
                if (!env.code) {
                    return;
                }

                // works only for <code> wrapped inside <pre> (not inline)
                var pre = env.element.parentNode;
                // Original regex check for class, leaving it here
                // for its redundancy check
                var clsReg = /\s*\bline-numbers\b\s*/;
                // New regex check for opt-out class
                var clsRegB = /\s*\bno-line-numbers\b\s*/;

                if (env.element.querySelector(".line-numbers-rows")) {
                    // Abort if line numbers already exists
                    return;
                }

                // Added to facilitate opting out
                if (clsRegB.test(pre.className)) {
                    // Respect the opt-out
                    return;
                }

                if (clsReg.test(env.element.className)) {
                    // Remove the class "line-numbers" from the <code>
                    env.element.className = env.element.className.replace(clsReg, ' ');
                }
                if (!clsReg.test(pre.className)) {
                    // Add the class "line-numbers" to the <pre>
                    pre.className += ' line-numbers';
                }

                var match = env.code.match(/\n(?!$)/g);
                var linesNum = match ? match.length + 1 : 1;
                var lineNumbersWrapper;

                var lines = new Array(linesNum + 1);
                lines = lines.join('<span></span>');

                lineNumbersWrapper = document.createElement('span');
                lineNumbersWrapper.setAttribute('aria-hidden', 'true');
                lineNumbersWrapper.className = 'line-numbers-rows';
                lineNumbersWrapper.innerHTML = lines;

                if (pre.hasAttribute('data-start')) {
                    pre.style.counterReset = 'linenumber ' + (parseInt(pre.getAttribute('data-start'), 10) - 1);
                }

                env.element.appendChild(lineNumbersWrapper);

                _resizeElement(pre);
            });

        }());
    </script>


</body>

</html>
