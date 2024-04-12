<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Annuaires Togo", // set false to total remove
            'titleBefore'  => "Annuaire", // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Bienvenue sur le site officiel de l\'annuaires Togo, votre annuaire qui répertorie toutes les entreprises du Togo', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["annuaire", "annuaires", "répertoire des professionnels", "annuaire des entreprises", "annuaires togo",],
            'canonical'    => "https://www.annuairestogo.com/", // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => "https://www.annuairestogo.com/robots.txt", // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Annuaires Togo', // set false to total remove
            'description' => 'Bienvenue sur le site officiel de l\'annuaires Togo, votre annuaire qui répertorie toutes les entreprises du Togo', // set false to total remove
            'url'         => "https://www.annuairestogo.com/", // Set null for using Url::current(), set false to total remove
            'type'        => "website",
            'site_name'   => 'Annuaires Togo',
            'images'      => ["https://www.annuairestogo.com/assets/images/annuairestogo_logo/logo.png"],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '#',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Annuaires Togo', // set false to total remove
            'description' => 'Bienvenue sur le site officiel de l\'annuaires Togo, votre annuaire qui répertorie toutes les entreprises du Togo', // set false to total remove
            'url'         => "https://www.annuairestogo.com/", // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ["https://www.annuairestogo.com/assets/images/annuairestogo_logo/logo.png"],
        ],
    ],
];
