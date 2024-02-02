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
						<a class="nav-link" href="{{ route('cgu',['slug_pays'=>'tg']) }}"><i class="fe fe-link sidemenu-icon"></i><span
								class="sidemenu-label">cgu</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('cp',['slug_pays'=>'tg']) }}"><i class="fe fe-link sidemenu-icon"></i><span
								class="sidemenu-label">politique de confidentialité</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('cookie',['slug_pays'=>'tg']) }}"><i class="fe fe-link sidemenu-icon"></i><span
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
				<h3><span class="text-primary">Politique</span> - cookies</h3>
			</div>
			<div class="">
				<div class="alert alert-info">
					<button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">×</button>
					<strong>Note: </strong>
					<hr class="message-inner-separator">
					<p>"Dégustez une expérience en ligne personnalisée avec nos délicieux cookies ! Notre Politique de Cookies explique comment nous utilisons ces petites bouchées de données pour améliorer votre navigation. Nous vous invitons à découvrir comment les cookies rendent votre interaction avec notre site plus fluide et plus pertinente. En détaillant notre approche transparente et respectueuse de votre vie privée, cette politique vous permet de mieux comprendre comment nous utilisons les cookies pour personnaliser votre expérience tout en préservant la confidentialité de vos informations. Venez explorer ce monde gourmand en toute sérénité !"</p>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-xl-9">
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section card-transparent" id="gdp">
								<div class="body">
									<h5 class="mt-0 mb-2">Gestion de vos préférences sur le site</h5>
									<p>
                                        Les fonctionnalités de ce site listées ci-dessous s’appuient sur des services proposés par des tiers. Si vous donnez votre accord (consentement), ces tiers déposeront des cookies qui vous permettront de visualiser directement sur www.annuairestogo.com du contenu hébergé par ces tiers ou de partager nos contenus. Via ces cookies, ces tiers collecteront et utiliseront vos données de navigation pour des finalités qui leur sont propres, conformément à leur politique de confidentialité. Cette page vous permet de donner ou de retirer votre consentement, soit globalement soit finalité par finalité.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section" id="apropos">
								<div class="body">
									<h5 class="mt-0 mb-2">A - propos</h5>
                                    <p>
                                        Nous utilisons différents cookies sur le site pour mesurer l’audience et intégrer des services permettant d’améliorer l’interactivité du site.
                                    </p>									
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section" id="cookie">
								<div class="body">
									<h5 class="mt-0 mb-2">Qu'est-ce qu'un cookies</h5>
									<p> Un « cookie » est une suite d'informations, généralement de petite taille et identifié par un nom, qui peut être transmis à votre navigateur par un site web sur lequel vous vous connectez.
                                        Votre navigateur web le conservera pendant une certaine durée, et le renverra au serveur web chaque fois que vous vous y re-connecterez. Les cookies ont de multiples usages : ils peuvent servir à mémoriser votre identifiant client auprès d’europages, 
                                        le contenu courant de votre panier d'achat, un identifiant permettant de tracer votre navigation pour des finalités statistiques ou publicitaires, etc.
                                        Différents types de cookies sont déposés sur les sites d’europages.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section" id="cookien">
								<div class="body">
									<h5 class="mt-0 mb-2">Cookies strictement nécessaire au site pour fonctionner</h5>
									<p> Ces cookies permettent aux services principaux du site de fonctionner de manière optimale.
                                        Vous pouvez techniquement les bloquer en utilisant les paramètres de votre navigateur mais votre expérience sur le site risque d’être dégradée.
                                        Par ailleurs, vous avez la possibilité de vous opposer à l’utilisation des traceurs de mesure d’audience strictement nécessaires au fonctionnement et aux opérations d’administration courante du site d’europages via ce lien.
									</p>									
								</div>
							</div>
						</div>
					</div>
                    <div class="row clearfix">
						<div class="col-sm-12">
							<div class="card section" id="cookiet">
								<div class="body">
									<h5 class="mt-0 mb-2">Cookie tierse déterminés à améliorer l'interactivité du site</h5>
									<p> Les sites d’europages s’appuient sur certains services proposés par des tiers.

                                        Ces tiers sont listés dans la fenêtre de gestion des cookies.
                                        
                                        Ces fonctionnalités utilisent des cookies tiers directement déposés par ces services.
                                        
                                        Via ces cookies, ces tiers collecteront et utiliseront également vos données de navigation pour leur propre compte afin de proposer de la publicité ciblée et des contenus en fonction de votre historique de navigation. Pour plus d’informations, nous vous encourageons à consulter leur politique de confidentialité.
                                        
                                        Par défaut, le refus est supposé et ces traceurs ne sont pas déposés.
                                        
                                        Vous pouvez consentir au dépôt de ces traceurs dans la fenêtre de Gestion des cookies.
									</p>
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
											<a class="nav-link" href="#gdp">Gestion des préférences</a>
										</li>
										<li class="nav-item active">
											<a class="nav-link" href="#apropos">A - propos</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#cookie">Cookies</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" href="#cookien">Cookies néccessaires</a>
										</li>
                                        <li class="nav-item">
											<a class="nav-link" href="#cookiet">Cookies tierse</a>
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
				<span>Copyright &copy; 2024 <a href="{{ route('home.pays',['slug_pays'=>'tg']) }}">Annuaires Togo</a>. Tous droits réservés.</span>
			</div>
		</div>
		<!-- Footer closed -->
	</section>

	<div class="color-bg">
		<div class="sidebar__toggle" data-toggle="sidebar">
			<a class="open-toggle" href="{{ route('home.pays',['slug_pays'=>'tg']) }}"><i class="fe fe-menu"></i></a>
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