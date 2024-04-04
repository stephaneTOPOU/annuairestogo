<!doctype html>

<html class="no-js" lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:url" content="https://www.annuairestogo.com/" />

    <meta name="msvalidate.01" content="89F155585DD1A383CB3CBA7FB33F09C3" />
    <meta name="google-site-verification" content="eBhqPiUxwjLJP1YBOHvkuaOjXfRlw0d2PJjYKEBEEKg" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta http-equiv="Content-Language" content="fr-FR" />
    <meta property="og:locale" content="fr-FR" />
    <meta property="og:country-name" content="Togo" />

    {!! SEO::generate(true) !!}

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/annuairestogo_logo/favicon.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GX94RJBPT5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-GX94RJBPT5');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TZW24JDC');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments)
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = "https://www.clarity.ms/tag/" + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, "clarity", "script", "lrelf3uifv");
    </script>
