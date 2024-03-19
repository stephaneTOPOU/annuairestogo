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
	<link rel="icon" href="{{ asset('assets/images/annuairestogo_logo/favicon.png')}}" type="image/x-icon">
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
			<div class="admin-image"> <img src="{{ asset('assets/images/annuairestogo_logo/logo1.png') }}" alt=""> </div>
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
				<h3><span class="text-primary">Politique</span> - Confidentialité</h3>
			</div>
			<div class="">
				<div class="alert alert-info">
					<button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Note: </strong>
					<hr class="message-inner-separator">
					<p>"Protégez votre vie privée comme nous protégeons la nôtre ! Découvrez notre Politique de Confidentialité, une garantie de transparence et de respect de vos données personnelles. Nous nous engageons à vous informer sur la manière dont nous collectons, utilisons et protégeons vos informations. En lisant notre Politique de Confidentialité, vous découvrirez les mesures que nous prenons pour assurer la sécurité de vos données et comment nous nous efforçons de créer une expérience en ligne sécurisée. Votre confiance est précieuse, et nous sommes là pour vous fournir toutes les informations nécessaires pour vous assurer que vous vous sentez en sécurité sur notre plateforme."</p>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-xl-9">
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section card-transparent" id="pie">
								<div class="body">
									<h5 class="mt-0 mb-2">Propriété intellectuelle de l'éditeur</h5>
									<ul class="documenter-list mt-3">
										<li>
                                            Les informations, images et textes contenus sur le Site Internet sont la propriété de l’Editeur ou des autres Utilisateurs ayant concédés les autorisations nécessaires à l’Editeur dans les conditions fixées par l’Article 11 des CGU. Tous droits sur ces éléments sont réservés. Toute utilisation, même avec modification intégrale ou partielle, des textes ou des illustrations, par quelque procédé que ce soit, faite sans le consentement écrit de l’Editeur, est illicite.
                                        </li>
                                        <li>
                                            Le Site Internet, les Services et chacun de leurs composants (à l'exception du Contenu des Utilisateurs) est une œuvre de l’esprit originale, protégée en tant que telle par les législations nationales et internationales applicables, dont l’Editeur (ou l’éditeur tiers) conserve, en tant que titulaire des droits, la propriété intellectuelle ainsi que toutes les prérogatives s’y rattachant. Notamment, en application de la loi n° 98-536 du 1er juillet 1998 portant transposition dans le Code de la propriété intellectuelle de la directive 96/9/CE du 11 mars 1996, concernant la protection juridique des bases de données, l'Editeur est producteur et propriétaire de tout ou partie des bases de données composant la Plateforme de sourcing à l’exclusion des éléments émanant de tiers ou d’autres sites accessibles depuis le Site Internet. En conséquence, l'Utilisateur n’acquiert aucun droit de propriété intellectuelle, ni aucun autre droit que ceux conférés par les CGU.
                                        </li>
                                        <li>L'Utilisateur s’interdit expressément :
                                            <ul class="documenter-list mt-3">
                                                <li>
                                                    de reproduire, d’arranger, d’adapter le Site Internet et/ou les Services, de le (les) modifier, ou de le (les) faire modifier par un tiers, y compris pour corriger d’éventuelles erreurs, de l’ (les) altérer, sans l’accord préalable écrit de l’Editeur;
                                                </li>
                                                <li>
                                                    de décompiler, désassembler, de procéder par ingénierie à rebours, ou d’essayer d’une quelconque manière de découvrir, traduire ou de reconstituer les codes sources du Site Internet et/ou des Services;
                                                </li>
                                                <li>
                                                    de supprimer ou d’altérer les mentions de droits d’auteur, noms commerciaux, logos, marques ou tout autre privilège de propriété intellectuelle de l’Editeur et de ses fournisseurs, figurant dans ou sur le Site Internet et/ou les Services;
                                                </li>
                                                <li>
                                                    de télécharger des adresses et des Informations en provenance du Site Internet, notamment à des fins de constitution d’une base de données.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Les marques de l’Editeur figurant sur le Site Internet sont des marques déposées. Toute reproduction totale ou partielle de ces marques sans autorisation expresse de l’Editeur est donc prohibée.
                                        </li>
                                        <li>
                                            Les liens hypertexte mis en place sur le Site Internet en direction d'autres ressources présentes sur le réseau Internet, ne sauraient engager la responsabilité de l’Editeur, même lorsqu’il s’agit de partenaire de l’Editeur ou d'autres Utilisateurs. L’Editeur n'exerce aucun contrôle sur les sites Internet liés et il est possible que ces derniers soient soumis à une politique différente en matière de protection des Données à Caractère Personnel et offrent la possibilité d'acheter des services et des produits d’un tiers à l’Editeur. L’Editeur n’approuve aucun de ces services et produits et n’émet ni observation ni garantie à leur sujet. Par ailleurs, les déclarations de l'Editeur concernant le respect de la Règlementation prévue à l’Article 8.5 ci-dessus concerne uniquement les Données à Caractère Personnel obtenues sur le Site Internet ou par l'intermédiaire de l'utilisation des Services ou des Informations.
                                        </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section card-transparent" id="pdu">
								<div class="body">
									<h5 class="mt-0 mb-2">Propriété du contenu de l'utilisateur</h5>
									<ul class="documenter-list mt-3">
                                        <li>
                                            L'Utilisateur qui apportera du Contenu au Site Internet conservera, conformément à la réglementation applicable, la propriété des éléments qui le compose. Néanmoins, il accorde gratuitement et automatiquement (ou fera en sorte que d’autres accordent) à l’Editeur une licence non exclusive, universelle et pour toute la durée de protection du droit de propriété intellectuelle, pour l'utilisation, la représentation, l’affichage, le stockage, la révision, la modification, l'inclusion, l'incorporation, l'adaptation, le téléchargement, l'enregistrement et la reproduction du Contenu, notamment toutes les marques de commerce associées, de toutes les manières possibles, dans toutes les langues, sur tous les supports existants et futurs, et pour l'utilisation du Contenu pour la publicité et la promotion du Site Internet et des Services de l’Editeur, sur tous les supports existants et futurs.
                                        </li>
                                        <li>
                                            Le Contenu qui n'est pas une Donnée à Caractère Personnel communiqué à l'Editeur par l'Utilisateur (notamment les informations relatives aux produits et services, y compris les tarifs) sont considérées comme non-confidentielles et libres de droits et pourront donc être utilisées et diffusées librement et sans restriction par l’Editeur, sous réserve du respect par celui-ci des stipulations de l’Article 9 des CGU.
                                        </li>
                                        <li>
                                            L'Utilisateur est seul responsable du Contenu, des Informations ou des messages qu'il publie et diffuse sur le Site Internet.
                                        </li>
                                        <li>
                                            L' Utilisateur doit respecter tout droit de propriété ou des autres droits des tiers. Tout Contenu apporté par un Utilisateur ou publié par celui-ci sur le Site Internet par l’intermédiaire de son Compte devra nécessairement respecter la Réglementation et notamment la réglementation applicable en matière de propriété intellectuelle, à savoir notamment le droit des marques, les droits d'auteurs et des producteurs de bases de données. Ainsi les Utilisateurs devront uniquement apporter du Contenu dont ils sont les propriétaires ou dont ils ont recueilli l’autorisation écrite préalable des propriétaires et pour lesquelles aucune interdiction pourrait, de quelque manière que ce soit, empêcher ou restreindre la diffusion du Contenu sur le Site Internet.
                                        </li>
                                        <li>
                                            Par conséquent, chaque Utilisateur garantit être titulaire de l'intégralité des droits afférents au Contenu déposé sur le Site Internet. Si un Utilisateur souhaitait apporter un Contenu dont il ne serait pas l'auteur exclusif, ou le seul propriétaire, il doit obtenir, avant de déposer ledit Contenu sur le Site Internet, les droits de reproduction, représentation, communication au public, et les autorisations préalables auprès des titulaires de droits dans les conditions légales, et leurs adhésions aux stipulations des Articles 10.1 et 10.2 des CGU. Tout Contenu que ne respectera pas ces dispositions sera qualifiée d'Elément Illicite.
                                        </li>
                                        <li>
                                            L'Utilisateur déclare et garantit que pour chaque élément du Contenu (a) l'Utilisateur est autorisé à accorder les droits décris ci-dessus, (b) que le Contenu et ses utilisations ne violeront ni ne détourneront aucun des droits de propriété ou des autres droits des tiers, ou ne seront pas illégaux, et (c) que le Contenu ne comprendra aucun Elément Illicite.
                                        </li>
                                        <li>
                                            L'Editeur peut supprimer immédiatement un élément du Contenu qui viole ou détourne un quelconque droit d’un tiers
                                        </li>
                                    </ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section card-transparent" id="sds">
								<div class="body">
									<h5 class="mt-0 mb-2">Suspension de service</h5>
									<ul class="documenter-list mt-3">
										<li>L'Editeur pourra suspendre ou bloquer immédiatement et sans préavis, l'accès à un ou à tous les Services (chaque cas étant ci-après individuellement désigné "Suspension du Service") pour l'un des besoins suivants : a) se conformer à toute Règlementation, décision de justice ou autre demande administrative ou injonction exigeant une action immédiate ; b) se conformer à la politique éditoriale de l'Editeur telle qu’elle est mentionnée sur le Site Internet, c) éviter toute interférence pouvant créer un dommage (y compris aux autres Utilisateurs) ou une dégradation des performances du Site Internet ; d) éviter que le Service concerné soit utilisé d’une façon qui engagerait ou pourrait engager la responsabilité de l'Editeur, ou en violation à toute Réglementation, que cette utilisation soit faite par l'Utilisateur ou toute autre personne ou entité utilisant le Service, avec ou sans le consentement ou l’autorisation de l'Utilisateur, ou éviter que le Service ne soit utilisé abusivement par l'Utilisateur, ces cas d’utilisation étant ci-après individuellement désignés "Mauvaise Utilisation du Service"; e) éviter toute perte lorsque l'Utilisateur ne paye pas l’un des montants dus à l'Editeur à sa date d’échéance.</li>
										<li>L'Editeur rétablira la fourniture du Service à condition que l'Utilisateur remédie à la cause de la Suspension du Service et qu'il paie le cas échéant à l'Editeur les frais éventuels de rétablissement du Service. Si l'Utilisateur ne remédie pas à la cause de la Suspension du Service ou ne paie pas le cas échéant les frais de rétablissement du Service, l'Editeur pourra supprimer le Compte de l'Utilisateur, sans indemnité ni préavis. Dans ce cas, l'Editeur pourra (sans préjudice de l'exercice de ses autres droits et recours) réclamer à l'Utilisateur le paiement des montants dus au titre des abonnements souscrit par l'Utilisateur préalablement à la date de suppression de son Compte.</li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section card-transparent" id="ldr">
								<div class="body">
									<h5 class="mt-0 mb-2">Limitation de responsabilité</h5>
									<ul class="documenter-list mt-3">
										<li>Dans le cadre de l'exécution des CGU, l'Editeur veille à mettre en œuvre les moyens techniques d'intervention et d'assistance en vue d'assurer un fonctionnement régulier du Site Internet et des Services.</li>
										<li>L'Editeur ne pourra être tenu responsable des retards ou inexécutions de ses obligations contractuelles résultant de la survenance d'événements échappant raisonnablement à son contrôle, tels que notamment les événements suivants : fait du prince, perturbations météorologiques exceptionnelles, conflits du travail autres que ceux opposant l'Editeur à ses salariés, absence ou suspension de la fourniture d'électricité, foudre ou incendie, décision d'une autorité administrative nationale ou internationale ou de toute autre autorité compétente, guerre, troubles publics, actes ou omissions de la part d’un opérateur de télécommunications, ou d'un prestataire tiers, ou événements hors du contrôle raisonnable des fournisseurs de l'Editeur.</li>										
										<li>L'Editeur ne garantit pas que son Site Internet ou ses Services fonctionnent et fonctionneront sans aucune discontinuité. En cas de défaillance de son Site Internet ou de ses Services, l'Editeur informera l'Utilisateur de la défaillance en cause et fera ses meilleurs efforts pour remédier à cette défaillance dans les meilleurs délais.</li>										
										<li>L'Editeur ne sera pas responsable, à quelque titre que ce soit, des dommages suivants : a) perte de revenus, d’activité, de contrats, de clientèle, d’économies, de profits ou de données - les termes "perte d'économies" signifient une quelconque dépense que l'Utilisateur s'attend à éviter ou bien à supporter à un moindre coût grâce à l'utilisation du Site Internet ou des Services - ; ou b) un quelconque dommage indirect pouvant survenir dans le cadre de l’exécution des CGU.</li>										
										<li>Au cas où l'Editeur verrait sa responsabilité mise en cause au titre de l’exécution des CGU, il est expressément spécifié que sa responsabilité ne pourra excéder cinquante pour cent (50%) du montant de l’ensemble des sommes effectivement payées par l'Utilisateur à l'Editeur (à l’exclusion des sommes versées en contrepartie de services fournis par une Personne tiers, tel que Google Ads par exemple) au titre de la fourniture des Services au cours des douze (12) mois précédent tout dommage direct ou toute série de dommages directs résultant des mêmes faits.</li>										
										<li>Les stipulations prévues au présent article comprennent, de façon limitative, toutes les conditions applicables à la responsabilité de l'Editeur au titre de l’exécution des CGU.</li>										
									</ul>
								</div>
							</div>
						</div>
					</div>
                    <div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section card-transparent" id="renonciation">
								<div class="body">
									<h5 class="mt-0 mb-2">Renonciation</h5>
									<ul class="documenter-list mt-3">
										<li>Le défaut d’exercice par une Partie d'un droit au titre des CGU ne pourra en aucun cas être interprété comme une renonciation à ce droit et n'affectera en aucune manière la faculté de cette Partie de l'exercer.</li>
										<li>Aucune renonciation à une déclaration ou garantie contractuelle ne sera effective sans une déclaration écrite et signée de la Partie concernée notifiant à l'autre Partie sa renonciation.</li>										
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
											<a class="nav-link" href="#pie">Propriété intellectuelle de l'éditeur</a>
										</li>
										<li class="nav-item active">
											<a class="nav-link" href="#pdu">Propriété du contenu de l'utilisateur</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#sds">Suspension de service</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" href="#ldr">Limitation de responsabilité</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" href="#renonciation">Renonciation</a>
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
								<p class="mb-0">for more details <strong class="">please click the </strong><a class="" target="_blank" style="text-decoration:underline;" href=" https://spruko.com/licenses-faqs">link</a>  </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer opened -->
		<div class="main-footer ht-40">
			<div class="pd-t-0-f ht-100p">
				<span>Copyright &copy; 2024 <a href="{{ route('home') }}">Annuaires Togo</a>. Tous droits réservés.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</section>

	<div class="color-bg">
		<div class="sidebar__toggle" data-toggle="sidebar">
			<a class="open-toggle" href="{{ route('home') }}"><i class="fe fe-menu"></i></a>
		</div>
	<ul class="nav navbar-nav">
		<li class="nav-item mr-2"><a class="btn btn-primary" href=" https://spruko.com/support" target="_blank"><i class="icon-help2"></i> Support</a></li>
		<li class="nav-item mr-2"><a class="btn btn-danger text-white" href="https://themeforest.net/user/sprukosoft/portfolio" target="_blank"><i class="icon-bag3"></i> Portfolio</a></li>
		<li class="nav-item"><a class="btn btn-success mr-3 text-white" href="https://spruko.com/licenses" target="_blank"><i class="icon-bag3"></i> Licenses</a></li>
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

		(function () {

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
			var _resizeElement = function (element) {
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

					codeLines.forEach(function (line, lineNumber) {
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
			var getStyles = function (element) {
				if (!element) {
					return null;
				}

				return window.getComputedStyle ? getComputedStyle(element) : (element.currentStyle || null);
			};

			window.addEventListener('resize', function () {
				Array.prototype.forEach.call(document.querySelectorAll('pre.' + PLUGIN_CLASS), _resizeElement);
			});

			Prism.hooks.add('complete', function (env) {
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