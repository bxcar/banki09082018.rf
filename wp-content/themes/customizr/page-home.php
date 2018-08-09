﻿<?php
/**
 * Template Name: home-page
 */
// get_header();
// wp_head(); ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ru-RU" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ru-RU" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="ru-RU" prefix="og: http://ogp.me/ns#" class="no-js">
<!--<![endif]-->
<head>
    <?php wp_head(); ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' id='dashicons-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/css/dashicons.min.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='admin-bar-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/css/admin-bar.min.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='czr-gfonts-css' href='//fonts.googleapis.com/css?family=Source+Sans+Pro' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='customizr-fa-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/shared/fonts/fa/css/font-awesome.min.css?ver=4.0.14'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='table-sorter-custom-css-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/wp-style.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='yoast-seo-adminbar-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/wordpress-seo/css/dist/adminbar-611.min.css?ver=6.1.1'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_bootstrap-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/bootstrap.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_jquery-ui-css'
          href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css?ver=4.9.3' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='kr_fa-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_common.maven.min-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/common.maven.min.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_common.4f395-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/common.4f3956d44b9b23a7f5960677c886d163.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_menu-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/menu.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_style-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/style.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='kr_style_accordion-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/css/style.css?ver=4.9.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='customizr-main-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/style.min.css?ver=4.0.14'
          type='text/css' media='all'/>
    <style id='customizr-main-inline-css' type='text/css'>
        .tc-header, #tc-sn .tc-sn-inner, .czr-overlay, .add-menu-button, .tc-header .socials a, .tc-header .socials a:focus, .tc-header .socials a:active, .nav__utils, .nav__utils a, .nav__utils a:focus, .nav__utils a:active, .czr-overlay a:hover, .dropdown-menu, .tc-header .navbar-brand-sitename, [class*=nav__menu] .nav__link, [class*=nav__menu] .nav__link-wrapper .caret__dropdown-toggler, [class*=nav__menu] .dropdown-menu .nav__link, [class*=nav__menu] .dropdown-item .nav__link:hover, .tc-header form.czr-form label, .czr-overlay form.czr-form label, .tc-header .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .tc-header .czr-form textarea, .tc-header .czr-form .form-control, .czr-overlay .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .czr-overlay .czr-form textarea, .czr-overlay .czr-form .form-control, .tc-header h1, .tc-header h2, .tc-header h3, .tc-header h4, .tc-header h5, .tc-header h6 {
            color: #313131
        }

        .tc-header .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .tc-header .czr-form textarea, .tc-header .czr-form .form-control, .czr-overlay .czr-form input:not([type='submit']):not([type='button']):not([type='number']):not([type='checkbox']):not([type='radio']), .czr-overlay .czr-form textarea, .czr-overlay .czr-form .form-control {
            border-color: #313131
        }

        .ham__toggler-span-wrapper .line, [class*=nav__menu] .nav__title::before, .tc-header .navbar-brand-sitename.czr-underline span::after {
            background-color: #313131
        }

        .header-tagline, [class*=nav__menu] .nav__link:hover, [class*=nav__menu] .nav__link-wrapper .caret__dropdown-toggler:hover, [class*=nav__menu] .show:not(.dropdown-item) > .nav__link, [class*=nav__menu] .show:not(.dropdown-item) > .nav__link-wrapper .nav__link, [class*=nav__menu] li:not(.dropdown-item).current-active > .nav__link, [class*=nav__menu] li:not(.dropdown-item).current-active > .nav__link-wrapper .nav__link, [class*=nav__menu] .current-menu-item > .nav__link, [class*=nav__menu] .current-menu-item > .nav__link-wrapper .nav__link, [class*=nav__menu] .dropdown-item .nav__link, .czr-overlay a, .tc-header .socials a:hover, .nav__utils a:hover, .nav__utils a.current-active, .tc-header .czr-form .form-group.in-focus label, .czr-overlay .czr-form .form-group.in-focus label {
            color: rgba(49, 49, 49, 0.7)
        }

        .nav__utils .ham-toggler-menu.collapsed:hover .line {
            background-color: rgba(49, 49, 49, 0.7)
        }

        .topbar-navbar__wrapper, .dropdown-item:not(:last-of-type) {
            border-color: rgba(49, 49, 49, 0.09)
        }

        .tc-header {
            border-bottom-color: rgba(49, 49, 49, 0.09)
        }

        #tc-sn {
            outline-color: rgba(49, 49, 49, 0.09)
        }

        .mobile-nav__container, .header-search__container, .mobile-nav__nav, .vertical-nav > li:not(:last-of-type) {
            border-color: rgba(49, 49, 49, 0.075)
        }

        .tc-header, #tc-sn .tc-sn-inner, .dropdown-menu, .dropdown-item:active, .dropdown-item:focus, .dropdown-item:hover {
            background-color: #f4f4f4
        }

        .sticky-transparent.is-sticky .mobile-sticky, .sticky-transparent.is-sticky .desktop-sticky, .sticky-transparent.is-sticky .mobile-nav__nav {
            background-color: rgba(244, 244, 244, 0.9)
        }

        .czr-overlay {
            background-color: rgba(244, 244, 244, 0.98)
        }

        .dropdown-item:before, .vertical-nav .caret__dropdown-toggler {
            background-color: rgba(11, 11, 11, 0.045)
        }

        .tc-header.border-top {
            border-top-width: 5px;
            border-top-style: solid
        }

        .tc-singular-thumbnail-wrapper .entry-media__wrapper {
            max-height: 250px;
            height: 250px
        }

        #czr-push-footer {
            display: none;
            visibility: hidden;
        }

        .czr-sticky-footer #czr-push-footer.sticky-footer-enabled {
            display: block;
        }

    </style>
    <link rel='stylesheet' id='customizr-ms-respond-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/style-modular-scale.min.css?ver=4.0.14'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='heateor_sss_frontend_css-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/sassy-social-share/public/css/sassy-social-share-public.css?ver=3.1.6'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='heateor_sss_sharing_default_svg-css'
          href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/sassy-social-share/public/../admin/css/sassy-social-share-svg.css?ver=3.1.6'
          type='text/css' media='all'/>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/jquery.tablesorter.min.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/jquery.metadata.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/plugins/table-sorter/wp-script.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/bootstrap.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/jquery-ui.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/ui/jquery.ui.touch-punch.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.easing.1.3.js?ver=4.9.3'></script>
    <!--<script type='text/javascript'
                src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.mousewheel.js?ver=4.9.3'></script>-->
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/VerticalSlidingAccordion/js/jquery.vaccordion.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/theme.js?ver=4.9.3'></script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/js/libs/modernizr.min.js?ver=4.0.14'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var CZRParams = {
            "assetsPath": "https:\/\/xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai\/wp-content\/themes\/customizr\/assets\/front\/",
            "_disabled": [],
            "centerSliderImg": "1",
            "isLightBoxEnabled": "1",
            "SmoothScroll": {"Enabled": true, "Options": {"touchpadSupport": false}},
            "isAnchorScrollEnabled": "",
            "anchorSmoothScrollExclude": {
                "simple": ["[class*=edd]", ".carousel-control", "[data-toggle=\"modal\"]", "[data-toggle=\"dropdown\"]", "[data-toggle=\"tooltip\"]", "[data-toggle=\"popover\"]", "[data-toggle=\"collapse\"]", "[data-toggle=\"tab\"]", "[class*=upme]", "[class*=um-]"],
                "deep": {"classes": [], "ids": []}
            },
            "timerOnScrollAllBrowsers": "1",
            "centerAllImg": "1",
            "HasComments": "",
            "LoadModernizr": "1",
            "stickyHeader": "",
            "extLinksStyle": "",
            "extLinksTargetExt": "",
            "extLinksSkipSelectors": {"classes": ["btn", "button"], "ids": []},
            "dropcapEnabled": "",
            "dropcapWhere": {"post": "", "page": ""},
            "dropcapMinWords": "",
            "dropcapSkipSelectors": {
                "tags": ["IMG", "IFRAME", "H1", "H2", "H3", "H4", "H5", "H6", "BLOCKQUOTE", "UL", "OL"],
                "classes": ["btn"],
                "id": []
            },
            "imgSmartLoadEnabled": "",
            "imgSmartLoadOpts": {
                "parentSelectors": ["[class*=grid-container], .article-container", ".__before_main_wrapper", ".widget-front", ".post-related-articles", ".tc-singular-thumbnail-wrapper"],
                "opts": {"excludeImg": [".tc-holder-img"]}
            },
            "imgSmartLoadsForSliders": "1",
            "pluginCompats": [],
            "isWPMobile": "",
            "menuStickyUserSettings": {"desktop": "stick_up", "mobile": "stick_always"},
            "adminAjaxUrl": "https:\/\/xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai\/wp-admin\/admin-ajax.php",
            "ajaxUrl": "https:\/\/xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai\/?czrajax=1",
            "frontNonce": {"id": "CZRFrontNonce", "handle": "41025f4105"},
            "isDevMode": "",
            "isModernStyle": "1",
            "i18n": {"Permanently dismiss": "\u0412\u0441\u0435\u0433\u0434\u0430 \u043e\u0442\u043a\u043b\u043e\u043d\u044f\u0442\u044c"},
            "frontNotifications": {
                "welcome": {
                    "enabled": false,
                    "content": "",
                    "dismissAction": "dismiss_welcome_note_front"
                }
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
            src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/js/tc-scripts.min.js?ver=4.0.14'></script>
    <link rel='https://api.w.org/' href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-json/'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/xmlrpc.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/wlwmanifest.xml"/>
    <meta name="generator" content="WordPress 4.9.3"/>
    <link rel='shortlink' href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/?p=639'/>
    <link rel="alternate" type="application/json+oembed"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fxn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai%2Fbanki-kredity-onlajn%2Fkredit%2F"/>
    <link rel="alternate" type="text/xml+oembed"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fxn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai%2Fbanki-kredity-onlajn%2Fkredit%2F&#038;format=xml"/>
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <style type="text/css" media="print">#wpadminbar {
            display: none;
        }</style>
    <link rel="icon"
          https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/06/БАНКИ-2.jpg"
          sizes="32x32"/>
    <style type="text/css" media="screen">
        html {
            margin-top: 0 !important;
        }

        * html body {
            margin-top: 0 !important;
        }

        @media screen and ( max-width: 782px ) {
            html {
                margin-top: 0 !important;
            }

            * html body {
                margin-top: 0 !important;
            }
        }
    </style>
    <link rel="icon"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/06/БАНКИ-2.jpg"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/06/БАНКИ-2.jpg"/>
    <meta name="msapplication-TileImage"
          content="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/06/БАНКИ-2.jpg"/>
</head>

<body class="page-template-default page page-id-639 page-child parent-pageid-2 logged-in no-customize-support czr-link-hover-underline header-skin-custom footer-skin-dark czr-l-sidebar tc-center-images czr-sticky-footer"
      itemscope itemtype="http://schema.org/WebPage">


<div id="tc-page-wrap" class="">

    <header class="tpnav-header__header tc-header sl-logo_left sticky-brand-shrink-on sticky-transparent border-top czr-submenu-fade czr-submenu-move"
            role="banner" data-czr-model_id="header" data-czr-template="templates/parts/header">
        <div class="topbar-navbar__wrapper hidden-md-down desktop-sticky" data-czr-model_id="topbar_wrapper"
             data-czr-template="templates/parts/header/topbar_wrapper">
            <div class="container-fluid">
                <div class="row flex-row flex-nowrap justify-content-end align-items-center topbar-navbar__row">
                    <div class="topbar-nav__container col col-auto">
                        <nav id="topbar-nav" class="topbar-nav__nav ">
                            <div class="nav__menu-wrapper topbar-nav__menu-wrapper czr-open-on-hover"
                                 data-czr-model_id="topbar_menu" data-czr-template="templates/parts/header/parts/menu">
                            </div>
                        </nav>
                    </div>
                    <div class="topbar-nav__socials social-links col col-auto">
                        <ul class="socials " data-czr-model_id="social_block"
                            data-czr-template="templates/parts/modules/common/social_block">
                            <li><a rel="nofollow" class="social-icon icon-feed" title="Подпишитесь на мою RSS ленту"
                                   aria-label="Подпишитесь на мою RSS ленту"
                                   href="http://feeds.feedburner.com/xn-----6kccbugwdmdcrtidm5a5byn/pbZP"
                                   target="_blank" style="color:#dd3333;font-size:20px"><i class="fa fa-rss"></i></a>
                            </li>
                            <li><a rel="nofollow" class="social-icon icon-facebook"
                                   title="Подпишитесь на нас в Facebook-f (alias"
                                   aria-label="Подпишитесь на нас в Facebook-f (alias"
                                   href="https://www.facebook.com/banki.kredity.online/" target="_blank"
                                   style="color:#1e73be;font-size:20px"><i class="fa fa-facebook"></i></a></li>
                            <li><a rel="nofollow" class="social-icon icon-vk" title="Подпишитесь на нас в Vk"
                                   aria-label="Подпишитесь на нас в Vk" href="https://vk.com/public139075058"
                                   target="_blank" style="color:#1e73be;font-size:20px"><i class="fa fa-vk"></i></a>
                            </li>
                            <li><a rel="nofollow" class="social-icon icon-google-plus"
                                   title="Подпишитесь на нас в Google-plus"
                                   aria-label="Подпишитесь на нас в Google-plus"
                                   href="https://plus.google.com/u/1/109166669758511888859" target="_blank"
                                   style="color:#dd3333;font-size:20px"><i class="fab fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-navbar__wrapper hidden-md-down has-horizontal-menu" data-czr-model_id="navbar_wrapper"
             data-czr-template="templates/parts/header/navbar_wrapper">
            <div class="container-fluid">
                <div class="row align-items-center flex-row primary-navbar__row">
                    <div class="branding__container col col-auto" data-czr-model_id="branding_wrapper"
                         data-czr-template="templates/parts/header/parts/branding_wrapper">
                        <div class="branding align-items-center flex-column tagline-below">
                            <div class="navbar-brand align-self-start " data-czr-model_id="logo_wrapper"
                                 data-czr-template="templates/parts/header/parts/logo_wrapper">
                                <a class="navbar-brand-sitelogo" href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/"
                                   title="Банки Кредиты Онлайн | Подобрать выгодный банковский кредит, оформить заявку на кредит онлайн, сравнить предложения банков на потребительские кредиты.">
                                    <img src="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/uploads/2018/06/БАНКИ.jpg"
                                         alt="Вернуться на главную" class="" width="1600" height="1416"
                                         style="max-width:250px;max-height:100px" data-no-retina
                                         data-czr-model_id="logo" data-czr-template="templates/parts/header/parts/logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="primary-nav__container justify-content-lg-around col col-lg-auto flex-lg-column"
                         data-czr-model_id="nav_container"
                         data-czr-template="templates/parts/header/parts/nav_container">
                        <div class="primary-nav__wrapper flex-lg-row align-items-center justify-content-end">
                            <nav class="primary-nav__nav col" id="primary-nav">
                                <div class="nav__menu-wrapper primary-nav__menu-wrapper justify-content-end czr-open-on-hover"
                                     data-czr-model_id="navbar_primary_menu"
                                     data-czr-template="templates/parts/header/parts/menu">
                                    <ul id="primary-nav" class="primary-nav__menu regular-nav nav__menu nav">
                                        <li id="menu-item-234"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-page-ancestor menu-item-234">
                                            <a href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/"
                                               class="nav__link"><span class="nav__title">Банки кредиты</span></a></li>
                                        <li id="menu-item-235"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-235">
                                            <a href="#nav2" class="nav__link"><span
                                                        class="nav__title">Кредиты онлайн</span></a></li>
                                        <li id="menu-item-233"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233">
                                            <a href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/stati/"
                                               class="nav__link"><span class="nav__title">Статьи</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="primary-nav__utils nav__utils col-auto" data-czr-model_id="primary_nav_utils"
                                 data-czr-template="templates/parts/header/parts/primary_nav_utils">
                                <ul class="nav utils flex-row flex-nowrap regular-nav">
                                    <li class="nav__search " data-czr-model_id="desktop_primary_search"
                                        data-czr-template="templates/parts/header/parts/nav_search">
                                        <a href="#" class="search-toggle_btn icn-search czr-overlay-toggle_btn"
                                           aria-expanded="false"><span class="sr-only">Search</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content_page">
        <div class="special-list">
            <div class="row">
                <div class="special-list__item col-xs-12 col-sm-6 col-md-3" id="credits-compare-link">
                    <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href="#credits-compare"
                                                        class="special-list__item pseudolink"><img alt=""
                                                                                                   aria-hidden="true"
                                                                                                   src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/banki_kredity.svg"
                                                                                                   class="special-list__icon"><span
                                    class="special-list__title">Банки и кредиты - выбрать лучшие предложения банков.</span>
                            <span class="special-list__description">Выбери свой банковский кредит</span><span
                                    class="special-list__description"> </span> <span
                                    class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                        class="kit-button__text">Подобрать кредит</span> </span> <span
                                    class="special-list__btn--icon"> </span></a></div>
                </div>
                <div class="special-list__item col-xs-12 col-sm-6 col-md-3" id="credit-selection-link">
                    <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href="#credit-selection"
                                                        class="special-list__item pseudolink"><img alt=""
                                                                                                   aria-hidden="true"
                                                                                                   src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/content4.svg"
                                                                                                   class="special-list__icon"><span
                                    class="special-list__title">Кредиты онлайн</span> <span
                                    class="special-list__description">Сравнить предложения банков на кредиты онлайн, оформить заявку на получение кредита</span><span
                                    class="special-list__description"> </span> <span
                                    class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                        class="kit-button__text">Подобрать кредит</span> </span> <span
                                    class="special-list__btn--icon"> </span></a></div>
                </div>
                <div class="special-list__item col-xs-12 col-sm-6 col-md-3">
                    <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам"
                                                        href="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/credit-cards/"
                                                        class="special-list__item pseudolink"><img
                                    alt="https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/credit-cards/"
                                    aria-hidden="true"
                                    src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/kredity_online.svg"
                                    class="special-list__icon"><span
                                    class="special-list__title">Кредитные карты</span> <span
                                    class="special-list__description">Сравнить и выбрать кредитные карты с подходящими условиями для вас</span><span
                                    class="special-list__description"> </span> <span
                                    class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                        class="kit-button__text">Узнать больше</span> </span> <span
                                    class="special-list__btn--icon"> </span></a></div>
                </div>
                <div class="special-list__item col-xs-12 col-sm-6 col-md-3">
                    <div class="special-list__inner"><a aria-label="Кредиты по сниженным ставкам" href="/deposit"
                                                        class="special-list__item pseudolink"><img alt=""
                                                                                                   aria-hidden="true"
                                                                                                   src="<? echo get_template_directory_uri() . '/assets/front/css/kredit_theme/' ?>img/vklady.svg"
                                                                                                   class="special-list__icon"><span
                                    class="special-list__title">Вклады</span> <span class="special-list__description">Банковские вклады с повышенными ставками</span><span
                                    class="special-list__description"> </span> <span
                                    class="kit-button kit-button_color_green kit-button_size_m special-list__btn--text special-list__link"> <span
                                        class="kit-button__text">Узнать больше</span> </span> <span
                                    class="special-list__btn--icon"> </span></a></div>
                </div>
            </div>
        </div>
        <div data-reactid="151" style="margin-bottom:120px" id="credits-compare"><!-- react-empty: 152 -->
            <section class="_2rXEs aqIhJ calculator-list-theme__wrapper">
                <div class="_20jzZ">
                    <div class="_3n9UL calculator-list-theme__image-container"></div>
                </div>
                <div class="_1zQdT BXky6">
                    <div class="_2BsQ1">
                        <div data-reactid="158">
                            <div class="_2fyyM _1MiQb mjrcK _1Ow3t _3UTzX"><? wp_title(''); ?><!--</h1>--><span
                                        class="_1jaU-"><span
                                            class="calculator-list-theme__header-region-name"></span></span></div>
                        </div>
                        <div class="_30VPM">
                            <div class="WXTuD _Szkx fx">
                                <div class="_3SAiO _1wJD0 calculator-list-theme__label">Выберите сумму кредита</div>
                                <div class="" data-test="ui-group">
                                    <div class="_2J6fq">
                                        <div class="_1Mbqb _2futP _2mpBR fx" data-test="ui-slider-input">
                                            <div class="_3_n91 AePXT _1fswf" data-test="ui-slider-input-input"><input
                                                        id="price" class="_2ARmF _2qJ6u _3uy56 _3I6R2" name="price"
                                                        value="500000" onkeypress="price_change()"
                                                        style="width:100%;"><input id="oldprice"
                                                                                   class="_2ARmF _2qJ6u _16cFN"
                                                                                   name="oldprice" type="hidden"><input
                                                        id="oldprice1" class="form-control" name="oldprice1"
                                                        type="hidden">
                                                <div id="slider-range"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="WXTuD WXTuD-fx">
                                    <div class="_3SAiO _1wJD0 calculator-list-theme__label fx">Валюта</div>
                                    <div data-test="ui-select" class="_129hA _129hA-fx">
                                        <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                            <div class="_1DCZo">
                                                <div data-test="ui-select" class="_129hA _2futP _1iN3s">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                                        <div class="_1DCZo"><input id="cur_currency" type="text"
                                                                                   readonly=""
                                                                                   autocomplete="off" autocorrect="off"
                                                                                   autocapitalize="off" spellcheck="off"
                                                                                   class="_2ARmF _2qJ6u _16cFN "
                                                                                   role="input"
                                                                                   value="&#8381;"
                                                                                   onclick="select_cur();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi" data-reactid="189">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"
                                                                         data-reactid="190">
                                                                        <svg viewBox="0 0 8.1 4.8" id="arrow-down-thin"
                                                                             xmlns="http://www.w3.org/2000/svg"
                                                                             width="100%" height="100%">
                                                                            <path d="M7.8.4L4.1 4.1.4.4"></path>
                                                                        </svg>
                                                                    </use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="currency" class=" _2cR3J" data-test="ui-select-values">
                                                        <li value="RUB" class="_3NNjg" data-test="ui-menu-item"
                                                            onclick="select_currency('&#8381;')"><i class="fa fa-rub"
                                                                                                    aria-hidden="true"></i>
                                                        </li>
                                                        <li value="USD" class="_3NNjg" data-test="ui-menu-item"
                                                            onclick="select_currency('&#36;')"><i class="fa fa-usd"
                                                                                                  aria-hidden="true"></i>
                                                        </li>
                                                        <li value="EUR" class="_3NNjg" data-test="ui-menu-item"
                                                            onclick="select_currency('&euro;')"><i class="fa fa-eur"
                                                                                                   aria-hidden="true"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="WXTuD">
                                <div class="_3SAiO _1wJD0 calculator-list-theme__label fx"> Срок</div>
                                <div data-test="ui-select" class="_129hA _129hA-fx">
                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input">
                                        <div class="_1DCZo"><input id="cur_period" type="text" readonly=""
                                                                   autocomplete="off" autocorrect="off"
                                                                   autocapitalize="off"
                                                                   spellcheck="off" class="_2ARmF _2qJ6u _16cFN"
                                                                   role="input" value="3 года"
                                                                   onclick="select_period();">
                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                 data-test="ui-select-input-icon">
                                                <svg class="SdEDi">
                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                         xlink:href="#arrow-down-thin">
                                                        <svg viewBox="0 0 8.1 4.8" id="arrow-down-thin"
                                                             xmlns="http://www.w3.org/2000/svg" width="100%"
                                                             height="100%">
                                                            <path d="M7.8.4L4.1 4.1.4.4"></path>
                                                        </svg>
                                                    </use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <ul id="period" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                        <li value="P1M" label="1 месяц" class="_3NNjg" data-test="ui-menu-item"
                                            data-reactid="205" onclick="select_period_srok('1 месяц')">1 месяц
                                        </li>
                                        <li value="P3M" label="3 месяца" class="_3NNjg " data-test="ui-menu-item"
                                            onclick="select_period_srok('3 месяца')">3 месяца
                                        </li>
                                        <li value="P6M" label="6 мес¤цев" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('6 месяцев')">6 месяцев
                                        </li>
                                        <li value="P9M" label="9 месяцев" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('9 месяцев')">9 месяцев
                                        </li>
                                        <li value="P1Y" label="1 год" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('1 год')">1 год
                                        </li>
                                        <li value="P2Y" label="2 года" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('2 года')">2 года
                                        </li>
                                        <li value="P3Y" label="3 года" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('3 года')">3 года
                                        </li>
                                        <li value="P4Y" label="4 года" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('4 года')">4 года
                                        </li>
                                        <li value="P5Y" label="5 лет" class="_3NNjg" data-test="ui-menu-item"
                                            data-reactid="213" onclick="select_period_srok('5 лет')">5 лет
                                        </li>
                                        <li value="P6Y" label="6 лет" class="_3NNjg" data-test="ui-menu-item"
                                            data-reactid="214" onclick="select_period_srok('6 лет')">6 лет
                                        </li>
                                        <li value="P7Y" label="7 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('7 лет')">7 лет
                                        </li>
                                        <li value="P8Y" label="8 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('8 лет')">8 лет
                                        </li>
                                        <li value="P9Y" label="9 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('9 лет')">9 лет
                                        </li>
                                        <li value="P10Y" label="10 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('10 лет')">10 лет
                                        </li>
                                        <li value="P15Y" label="15 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('15 лет')">15 лет
                                        </li>
                                        <li value="P20Y" label="20 лет" class="_3NNjg" data-test="ui-menu-item"
                                            onclick="select_period_srok('20 лет')">20 лет
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="WXTuD _129hA-fx1" data-reactid="221">
                                <button onclick="show_dop()"
                                        class="_2sdWW calculator-list-theme__button-conditions _1VABv _3zDyU _3x77s"
                                        type="button" data-test="ui-button" data-reactid="222">+ Еще условия
                                </button>
                            </div>
                            <div class="WXTuD _1mLgv _129hA-fx1" data-reactid="223">
                                <button href="#table-fx"
                                        class="_2sdWW calculator-list-theme__button-selection RaZ2S _3zDyU _3x77s"
                                        type="button" data-test="ui-button" data-reactid="224"><span class="zTFG-"
                                                                                                     data-reactid="225">Подобрать</span><span
                                            class="-I2py" data-reactid="226"><svg class="_2MAZT" data-reactid="227"><use
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xlink:href="#arrow-down-thin"
                                                    data-reactid="228"></use></svg></span></button>
                            </div>
                        </div>
                        <div style="margin:30px; display: none;"><a class="dop_" onclick="show_dop()"> Дополнительные
                                условия <i
                                        class="fa fa-angle-down"></i></a></div>
            </section>
            <div data-reactid="270" id="sort-params">
                <div style="padding-bottom: 0;" data-reactid="271"></div>
                <div class="_3ThEC _7ol--" style="transform: translateZ(0px);" data-reactid="272">
                    <div class="_1Xn7Q" data-reactid="273">
                        <span class="" data-reactid="274"><!-- react-text: 275 -->Сортировка:<!-- /react-text --></span>
                    </div>
                    <div class="_1Xn7Q" data-cust-att="sort-parameter" data-reactid="276" data-type="rate">
                    <span class="_2BeSz" data-reactid="277" data-cust-att="sort-parameter" data-type="rate"><!-- react-text: 278 -->Ставка&nbsp;
                        <!-- /react-text -->
                        <svg data-cust-att="sort-parameter" data-type="rate" width="16" height="16"
                             viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                    </span>
                    </div>
                    <div class="_1Xn7Q" data-cust-att="sort-parameter" data-reactid="281" data-type="pay">
                    <span class="_2BeSz" data-reactid="282" data-cust-att="sort-parameter" data-type="pay"><!-- react-text: 283 -->Платеж&nbsp;
                        <!-- /react-text --><svg data-cust-att="sort-parameter" data-type="pay" width="16" height="16"
                                                 viewBox="0 0 1792 1792"
                                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                    </span>
                    </div>
                    <div class="_1Xn7Q h1KaH" data-cust-att="sort-parameter" data-reactid="286" data-type="overpay">
                    <span class="_2BeSz" data-reactid="287" data-cust-att="sort-parameter" data-type="overpay"><!-- react-text: 288 -->Переплата&nbsp;
                        <!-- /react-text --><svg data-cust-att="sort-parameter" data-type="overpay" width="16"
                                                 height="16" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg>
                        </span>
                    </div>
                </div>
            </div>
            <div style="border-bottom:1px solid #fff6f6" id="table-fx">
                <div class="navbar-component" data-current="1">
                    <div class="navbar area">
                        <nav role="navigation" id="navigation" class="list"><a href="javascript:void(0);"
                                                                               class="item -link -active"
                                                                               onclick="toggle_menu('1');Get_PotrKr()">Популярные</a>
                            <a href="javascript:void(0);" class="item -link" onclick="toggle_menu('2');Get_PotrKr()">Все
                                банки</a><!-- <span class="item"><i class="fa fa-search"></i></span> -->
                        </nav>
                    </div>
                </div>
            </div>
            <input id="id_theme" name="id_theme" type="hidden" value="<? echo get_template_directory_uri() ?>">
            <div id="list_bank"></div>
            <a href="#" id="loadMore">Загрузить больше предложений&nbsp;
                <svg data-cust-att="sort-parameter" data-type="rate" width="16" height="16" viewBox="0 0 1792 1792"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1395 736q0 13-10 23l-466 466q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l393 393 393-393q10-10 23-10t23 10l50 50q10 10 10 23z"></path>
                </svg>
            </a>
        </div>


        <!--<div class="kredit-request-form">
            <form class="krf-1" id="krf-1" action="/" method="post">

            </form>
        </div>-->
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/front/css/sravni-style.css">
        <div id="credit-selection" class="_13jtz kTe6a _2iOJW _3ZGrV only-this-form only-this-form1" data-reactid="260">
            <div data-reactid="261">
                <form action="/" method="post" id="static-form">
                    <div class="_1mn3x">
                        <div class="NIyzu _3dK9S _1TAj_">Единая заявка на кредит</div>
                    </div>
                    <div class="_1LQWv ER4_X">
                        <div class="_1miZw _1rUOp">
                            <div class="_1CBZx">
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="amount">Сумма
                                            кредита</label>
                                        <div class="_3FIbJ"><input required type="text" placeholder="Сумма"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="amount"
                                                                   name="amount" value="100000"></div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div data-test="ui-select" class="_1F9QS" id="period-kr-form-wrap">
                                        <div class="_31J-9 _3yuTA _16jhA" data-test="ui-select-input"><label
                                                    class="_1oupA _2IwHh" for="period">На какой срок</label>
                                            <div class="_3FIbJ ">
                                                <input required autocomplete="off" autocorrect="off"
                                                       autocapitalize="off"
                                                       spellcheck="off" class="_1QIZ8 _3pwdR _1O6pC"
                                                       name="period" id="cur_period-kr-form"
                                                       onclick="select_period_kr_form();"
                                                       placeholder="Выберите" value="">
                                                <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                     data-test="ui-select-input-icon">
                                                    <svg class="_4fAE4">
                                                        <use xlink:href="#arrow-down-thin"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <ul id="period-kr-form" class="_3nnad aDtzb" data-test="ui-select-values">
                                            <li onclick="select_period_srok_kr_form('1 месяц')" value="P1M"
                                                label="1 месяц"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">1
                                                месяц
                                            </li>
                                            <li onclick="select_period_srok_kr_form('3 месяца')" value="P3M"
                                                label="3 месяца" class="Z96DE _3pzz9"
                                                data-test="ui-menu-item">3 месяца
                                            </li>
                                            <li onclick="select_period_srok_kr_form('6 месяцев')" value="P6M"
                                                label="6 месяцев" class="Z96DE _3pzz9" data-test="ui-menu-item">
                                                6 месяцев
                                            </li>
                                            <li onclick="select_period_srok_kr_form('9 месяцев')" value="P9M"
                                                label="9 месяцев" class="Z96DE _3pzz9" data-test="ui-menu-item">
                                                9 месяцев
                                            </li>
                                            <li onclick="select_period_srok_kr_form('1 год')" value="P1Y" label="1 год"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">1
                                                год
                                            </li>
                                            <li onclick="select_period_srok_kr_form('2 года')" value="P2Y"
                                                label="2 года"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">2
                                                года
                                            </li>
                                            <li onclick="select_period_srok_kr_form('3 года')" value="P3Y"
                                                label="3 года"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">3
                                                года
                                            </li>
                                            <li onclick="select_period_srok_kr_form('4 года')" value="P4Y"
                                                label="4 года"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">4
                                                года
                                            </li>
                                            <li onclick="select_period_srok_kr_form('5 лет')" value="P5Y" label="5 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">5
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('6 лет')" value="P6Y" label="6 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">6
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('7 лет')" value="P7Y" label="7 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">7
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('8 лет')" value="P8Y" label="8 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">8
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('9 лет')" value="P9Y" label="9 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">9
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('10 лет')" value="P10Y"
                                                label="10 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">10
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('15 лет')" value="P15Y"
                                                label="15 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">15
                                                лет
                                            </li>
                                            <li onclick="select_period_srok_kr_form('20 лет')" value="P20Y"
                                                label="20 лет"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">20
                                                лет
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_1uHjd" data-test="ui-ajax-suggest">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-ajax-suggest-input"><label
                                                        class="_1oupA _2IwHh" for="region">Город получения</label>
                                                <div class="_3FIbJ autocomplete-wrapper"><input required type="text"
                                                                                                display="where"
                                                                                                direction="down"
                                                                                                autocomplete="off"
                                                                                                autocorrect="off"
                                                                                                autocapitalize="off"
                                                                                                spellcheck="off"
                                                                                                class="_1QIZ8 _3pwdR autocomplete"
                                                                                                role="input" id="city"
                                                                                                name="region"
                                                                                                value="Москва"></div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-ajax-suggest-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div data-test="ui-select" class="_1F9QS" id="employment-type-wrap">
                                        <div class="_31J-9 _3yuTA _16jhA" data-test="ui-select-input"><label
                                                    class="_1oupA _2IwHh" for="employmentType">Тип занятости</label>
                                            <div class="_3FIbJ ">
                                                <input required onclick="select_employment_type_kr_form();"
                                                       autocomplete="off"
                                                       autocorrect="off" autocapitalize="off"
                                                       spellcheck="off" class="_1QIZ8 _3pwdR _1O6pC" id="employmentType"
                                                       name="employmentType" placeholder="Выберите" value="">
                                                <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                     data-test="ui-select-input-icon">
                                                    <svg class="_4fAE4">
                                                        <use xlink:href="#arrow-down-thin"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="_3nnad aDtzb" data-test="ui-select-values">
                                            <li onclick="select_employment_type_ul_kr_form('Работа по найму');"
                                                value="Employment" label="Работа по найму" class="Z96DE _3pzz9"
                                                data-test="ui-menu-item">Работа по найму
                                            </li>
                                            <li onclick="select_employment_type_ul_kr_form('Индивидуальный предприниматель');"
                                                value="IndividualEntrepreneur" label="Индивидуальный предприниматель"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">Индивидуальный
                                                предприниматель
                                            </li>
                                            <li onclick="select_employment_type_ul_kr_form('Пенсионер');"
                                                value="Pensioner"
                                                label="Пенсионер" class="Z96DE _3pzz9"
                                                data-test="ui-menu-item">Пенсионер
                                            </li>
                                            <li onclick="select_employment_type_ul_kr_form('Военный');" value="Military"
                                                label="Военный" class="Z96DE _3pzz9"
                                                data-test="ui-menu-item">Военный
                                            </li>
                                            <li onclick="select_employment_type_ul_kr_form('Не работаю');"
                                                value="NotWorking" label="Не работаю" class="Z96DE _3pzz9"
                                                data-test="ui-menu-item">Не работаю
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_3bjVL _2IwHh">Начало работы на последнем месте</div>
                                    <div class="_2f7dD">
                                        <div data-test="ui-select" class="_1F9QS _3gqYl custom-width"
                                             id="lastExperienceStartMonth-kr-form-wrap">
                                            <div class="_31J-9 _3yuTA _16jhA" data-test="ui-select-input">
                                                <div class="_3FIbJ ">
                                                    <input required autocomplete="off" autocorrect="off"
                                                           autocapitalize="off"
                                                           spellcheck="off" class="_1QIZ8 _3pwdR _1O6pC"
                                                           id="lastExperienceStartMonth" name="lastExperienceStartMonth"
                                                           placeholder="Месяц" value=""
                                                           onclick="select_lastExperienceStartMonth_kr_form()">
                                                    <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                         data-test="ui-select-input-icon">
                                                        <svg class="_4fAE4">
                                                            <use xlink:href="#arrow-down-thin"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="_3nnad aDtzb" data-test="ui-select-values">
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Январь')"
                                                    value="01" label="Январь" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Январь
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Февраль')"
                                                    value="02" label="Февраль" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">Февраль
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Март')"
                                                    value="03" label="Март" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Март
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Апрель')"
                                                    value="04" label="Апрель" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Апрель
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Май')"
                                                    value="05" label="Май" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Май
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Июнь')"
                                                    value="06" label="Июнь" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Июнь
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Июль')"
                                                    value="07" label="Июль" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Июль
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Август')"
                                                    value="08" label="Август" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Август
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Сентябрь')"
                                                    value="09" label="Сентябрь" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">Сентябрь
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Октябрь')"
                                                    value="10" label="Октябрь" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">Октябрь
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Ноябрь')"
                                                    value="11" label="Ноябрь" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    Ноябрь
                                                </li>
                                                <li onclick="select_lastExperienceStartMonth_ul_kr_form('Декабрь')"
                                                    value="12" label="Декабрь" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">Декабрь
                                                </li>
                                            </ul>
                                        </div>
                                        <div data-test="ui-select" class="_1F9QS _3gqYl"
                                             id="lastExperienceStartYear-kr-form-wrap">
                                            <div class="_31J-9 _3yuTA _16jhA" data-test="ui-select-input">
                                                <div class="_3FIbJ ">
                                                    <input required autocomplete="off" autocorrect="off"
                                                           autocapitalize="off"
                                                           spellcheck="off" class="_1QIZ8 _3pwdR _1O6pC"
                                                           id="lastExperienceStartYear" name="lastExperienceStartYear"
                                                           placeholder="Год" value=""
                                                           onclick="select_lastExperienceStartYear_kr_form()">
                                                    <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                         data-test="ui-select-input-icon">
                                                        <svg class="_4fAE4">
                                                            <use xlink:href="#arrow-down-thin"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="_3nnad aDtzb" data-test="ui-select-values">
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2018')"
                                                    value="2018" label="2018" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">2018
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2017')"
                                                    value="2017" label="2017" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2017
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2016')"
                                                    value="2016" label="2016" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2016
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2015')"
                                                    value="2015" label="2015" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2015
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2014')"
                                                    value="2014" label="2014" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2014
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2013')"
                                                    value="2013" label="2013" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2013
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2012')"
                                                    value="2012" label="2012" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2012
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2011')"
                                                    value="2011" label="2011" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2011
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2010')"
                                                    value="2010" label="2010" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2010
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2009')"
                                                    value="2009" label="2009" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2009
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2008')"
                                                    value="2008" label="2008" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2008
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2007')"
                                                    value="2007" label="2007" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2007
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2006')"
                                                    value="2006" label="2006" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2006
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2005')"
                                                    value="2005" label="2005" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2005
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2004')"
                                                    value="2004" label="2004" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2004
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2003')"
                                                    value="2003" label="2003" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2003
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2002')"
                                                    value="2002" label="2002" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2002
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2001')"
                                                    value="2001" label="2001" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2001
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('2000')"
                                                    value="2000" label="2000" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    2000
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1999')"
                                                    value="1999" label="1999" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1999
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1998')"
                                                    value="1998" label="1998" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1998
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1997')"
                                                    value="1997" label="1997" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1997
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1996')"
                                                    value="1996" label="1996" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1996
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1995')"
                                                    value="1995" label="1995" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1995
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1994')"
                                                    value="1994" label="1994" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1994
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1993')"
                                                    value="1993" label="1993" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1993
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1992')"
                                                    value="1992" label="1992" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1992
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1991')"
                                                    value="1991" label="1991" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1991
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1990')"
                                                    value="1990" label="1990" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1990
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1989')"
                                                    value="1989" label="1989" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1989
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1988')"
                                                    value="1988" label="1988" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1988
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1987')"
                                                    value="1987" label="1987" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1987
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1986')"
                                                    value="1986" label="1986" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1986
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1985')"
                                                    value="1985" label="1985" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1985
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1984')"
                                                    value="1984" label="1984" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1984
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1983')"
                                                    value="1983" label="1983" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1983
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1982')"
                                                    value="1982" label="1982" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1982
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1981')"
                                                    value="1981" label="1981" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1981
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1980')"
                                                    value="1980" label="1980" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1980
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1979')"
                                                    value="1979" label="1979" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1979
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1978')"
                                                    value="1978" label="1978" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1978
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1977')"
                                                    value="1977" label="1977" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1977
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1976')"
                                                    value="1976" label="1976" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1976
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1975')"
                                                    value="1975" label="1975" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1975
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1974')"
                                                    value="1974" label="1974" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1974
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1973')"
                                                    value="1973" label="1973" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1973
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1972')"
                                                    value="1972" label="1972" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1972
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1971')"
                                                    value="1971" label="1971" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1971
                                                </li>
                                                <li onclick="select_lastExperienceStartYear_ul_kr_form('1970')"
                                                    value="1970" label="1970" class="Z96DE _3pzz9"
                                                    data-test="ui-menu-item">
                                                    1970
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="monthlySalary">Ежемесячный
                                            доход</label>
                                        <div class="_3FIbJ"><input required type="text" placeholder="Сумма"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="monthlySalary"
                                                                   name="monthlySalary" value="40000"></div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div data-test="ui-select" class="_1F9QS" id="creditSecurity-kr-form-wrap">
                                        <div class="_31J-9 _3yuTA _16jhA" data-test="ui-select-input"><label
                                                    class="_1oupA _2IwHh" for="creditSecurity">Обеспечение
                                                кредита</label>
                                            <div class="_3FIbJ ">
                                                <input required onclick="select_creditSecurity_kr_form()"
                                                       autocomplete="off" autocorrect="off" autocapitalize="off"
                                                       spellcheck="off" class="_1QIZ8 _3pwdR _1O6pC" id="creditSecurity"
                                                       name="creditSecurity" placeholder="Выберите">
                                                <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                     data-test="ui-select-input-icon">
                                                    <svg class="_4fAE4">
                                                        <use xlink:href="#arrow-down-thin"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="_3nnad aDtzb" data-test="ui-select-values">
                                            <li onclick="select_creditSecurity_ul_kr_form('Без обеспечения')"
                                                value="WithoutBail" label="Без обеспечения" class="Z96DE _3pzz9 _1kLbN"
                                                data-test="ui-menu-item">Без обеспечения
                                            </li>
                                            <li onclick="select_creditSecurity_ul_kr_form('Под залог недвижимости')"
                                                value="SecuredByAvailableRealEstate" label="Под залог недвижимости"
                                                class="Z96DE _3pzz9" data-test="ui-menu-item">Под залог недвижимости
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="zWp9- _2mg0e">Контактные данные</div>
                            <div class="_1CBZx _3nekq">
                                <div class="_3ITGU">
                                    <div class="_1uHjd" data-test="ui-ajax-suggest">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-ajax-suggest-input"><label
                                                        class="_1oupA _2IwHh" for="lastName">Фамилия</label>
                                                <div class="_3FIbJ"><input required type="surname"
                                                                           data-focus-id="lastName"
                                                                           display="where" direction="down"
                                                                           autocomplete="off" autocorrect="off"
                                                                           autocapitalize="off" spellcheck="off"
                                                                           class="_1QIZ8 _3pwdR" role="input"
                                                                           id="lastName"
                                                                           name="lastName" value=""></div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-ajax-suggest-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_1uHjd" data-test="ui-ajax-suggest">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-ajax-suggest-input"><label
                                                        class="_1oupA _2IwHh" for="firstName">Имя</label>
                                                <div class="_3FIbJ"><input required type="name"
                                                                           data-focus-id="firstName"
                                                                           display="where" direction="down"
                                                                           autocomplete="off" autocorrect="off"
                                                                           autocapitalize="off" spellcheck="off"
                                                                           class="_1QIZ8 _3pwdR" role="input"
                                                                           id="firstName"
                                                                           name="firstName" value=""></div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-ajax-suggest-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_1uHjd" data-test="ui-ajax-suggest">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-ajax-suggest-input"><label
                                                        class="_1oupA _2IwHh" for="surname">Отчество</label>
                                                <div class="_3FIbJ"><input required type="patronymic"
                                                                           data-focus-id="surname"
                                                                           display="where" direction="down"
                                                                           autocomplete="off" autocorrect="off"
                                                                           autocapitalize="off" spellcheck="off"
                                                                           class="_1QIZ8 _3pwdR" role="input"
                                                                           id="surname"
                                                                           name="surname" value=""></div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-ajax-suggest-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="phone">Телефон для
                                            связи</label>
                                        <div class="_3FIbJ"><input required type="tel" data-focus-id="phone"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="phone"
                                                                   name="phone" value=""></div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_1uHjd" data-test="ui-autocomplete">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-autocomplete-input"><label
                                                        class="_1oupA _2IwHh" for="email">Электронная почта</label>
                                                <div class="_3FIbJ"><input type="text" data-focus-id="email"
                                                                           direction="down" autocomplete="off"
                                                                           autocorrect="off" autocapitalize="off"
                                                                           spellcheck="off" class="_1QIZ8 _3pwdR"
                                                                           role="input" id="email" name="email"
                                                                           value=""></div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-autocomplete-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU _2ZoAD _2ZoAD-rules">
                                    <div>
                                        <div class="_2s9kS _2Ygnf F2Di1" data-test="ui-checkbox-group">
                                            <div class="VKYxY"><label class="_3Dnlt WpiwV"
                                                                      data-test="ui-checkbox"><input
                                                            type="checkbox" class="_9wZ_m" name="agreement" value="true"
                                                            readonly=""><span class="_2xGBH"><span><!-- react-text: 776 -->Согласен с
                                                            <!-- /react-text --><a class="link">правилами предоставления информации</a></span></span></label>
                                            </div>
                                        </div><!-- react-empty: 778 --></div>
                                </div>
                            </div>
                            <div class="_3ITGU _2ZoAD _2ZoAD-checkbox">
                                <div>
                                    <div class="_2s9kS _2Ygnf F2Di1" data-test="ui-checkbox-group">
                                        <div class="VKYxY"><label id="tos-check-label" class="_3Dnlt WpiwV" data-test="ui-checkbox"><input
                                                        checked onclick="tos_check()" id="tos-check" type="checkbox" class="_9wZ_m" name="agreement" value="true"><span class="_2xGBH"><span><!-- react-text: 3941 -->Согласен с
                                                        <!-- /react-text --><a class="link tos">правилами предоставления информации</a></span></span></label>
                                        </div>
                                    </div><!-- react-empty: 4007 --></div>
                            </div>
                            <div class="_3yk02">
                                <div class="Gbeui _8SYy5">
                                    <button class="_3yCMa _20Wee N0qHF _1-c8L form-first-part-button" type="button"
                                            data-test="ui-button">
                                        Продолжить
                                    </button>
                                </div>
                                <div class="Gbeui _1dym9">Для следующего шага подготовьте паспорт</div>
                            </div>
                        </div>
                    </div>
                    <script>
                        function tos_check(){
                            if(document.getElementById('tos-check').checked) {
                                jQuery("#tos-check-label").addClass('WpiwV');
                            } else {
                                jQuery("#tos-check-label").removeClass('WpiwV');
                                console.log('remove');
                            }
                        }
                    </script>


                    <div class="_1LQWv ER4_X form-second-part">
                        <div class="_1miZw _1rUOp">
                            <div class="zWp9- _2mg0e">Паспортные данные</div>
                            <div class="_2RJvL"><p>Ваши паспортные данные будут переданы в банк по защищённому
                                    каналу.</p>
                                <p>Это необходимо для принятия решения о выдаче кредита.</p></div>
                            <div class="_1CBZx _3nekq">
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="birthDate">Дата
                                            рождения</label>
                                        <div class="_3FIbJ"><input required type="text" data-focus-id="birthDate"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="birthDate"
                                                                   name="birthDate" value=""></div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_1uHjd" data-test="ui-ajax-suggest">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-ajax-suggest-input"><label
                                                        class="_1oupA _2IwHh" for="birthPlace">Место рождения</label>
                                                <div class="_3FIbJ"><input required type="text"
                                                                           data-focus-id="birthPlace"
                                                                           display="where" direction="down"
                                                                           autocomplete="off" autocorrect="off"
                                                                           autocapitalize="off" spellcheck="off"
                                                                           class="_1QIZ8 _3pwdR" role="input"
                                                                           id="birthPlace" name="birthPlace" value="">
                                                </div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-ajax-suggest-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="sn">Номер
                                            паспорта</label>
                                        <div class="_3FIbJ"><input required type="text" data-focus-id="sn"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="sn" name="sn"
                                                                   value=""></div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="issueDate">Дата
                                            выдачи</label>
                                        <div class="_3FIbJ"><input required type="text" data-focus-id="issueDate"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="issueDate"
                                                                   name="issueDate" value=""></div>
                                    </div>
                                </div>
                                <div class="_3ITGU">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="code">Код
                                            подразделения</label>
                                        <div class="_3FIbJ"><input required type="text" data-focus-id="code"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="code"
                                                                   name="code"
                                                                   value=""></div>
                                    </div>
                                </div>
                                <div class="_3ITGU _2ZoAD">
                                    <div class="_31J-9 _16jhA" data-test="ui-input"><label class="_1oupA _2IwHh"
                                                                                           for="issuer">Кем
                                            выдан</label>
                                        <div class="_3FIbJ"><input required type="text" data-focus-id="issuer"
                                                                   autocomplete="off"
                                                                   autocorrect="off" autocapitalize="off"
                                                                   spellcheck="off"
                                                                   class="_1QIZ8 _3pwdR" role="input" id="issuer"
                                                                   name="issuer"></div>
                                    </div>
                                </div>
                                <div class="_3ITGU _2ZoAD">
                                    <div class="_1uHjd" data-test="ui-ajax-suggest">
                                        <div class="aJPK9">
                                            <div class="_31J-9 _16jhA" data-test="ui-ajax-suggest-input"><label
                                                        class="_1oupA _2IwHh" for="address">Адрес регистрации (как в
                                                    паспорте)</label>
                                                <div class="_3FIbJ"><input required type="text" data-focus-id="address"
                                                                           display="where" direction="down"
                                                                           autocomplete="off" autocorrect="off"
                                                                           autocapitalize="off" spellcheck="off"
                                                                           class="_1QIZ8 _3pwdR" role="input"
                                                                           id="address"
                                                                           name="address" value=""></div>
                                            </div>
                                            <div class="UfXw4">
                                                <div class="">
                                                    <ul class="_3nnad _2Hwhb"
                                                        data-test="ui-ajax-suggest-suggestions"></ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_3yk02">
                                <div class="Gbeui _8SYy5">
                                    <input type="hidden" value="<?= get_bloginfo('admin_email'); ?>" name="sendto"
                                           required>
                                    <input style="text-transform: none;" id="submit-static-form"
                                           class="_3yCMa _20Wee N0qHF _1-c8L" type="submit" data-test="ui-button"
                                           value="Отправить">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <script>
            jQuery('.form-first-part-button').click(function () {
                jQuery('.form-second-part').css('display', 'block');
            })
        </script>
        <?php include_once "static-form-ajax.php" ?>


        <div class="va_block">
            <div id="va-accordion" class="va-container">
                <div class="u90Ld aqIhJ _1CT2O">
                    <div class="va-slice va-slice-1">
                        <div class="flex-wrap-acrd">
                            <h3 class="va-title" style="/*margin-top:0.85em*/">Руководство заемщика
                                от
                                сервиса «Банки кредиты онлайн»</h3>
                        </div>
                        <div class="va-content" id="va-1"><p>
                            <h3>Что вам нужно сделать, чтобы получить кредит?</h3>

                            В последние годы подход банков к выдаче кредитов на любые цели сильно изменился. Это
                            способствовало как более высокая осведомленность потребителей, так и изменения, внесенные
                            банками. Потребительский кредит стал услугой с минимальными формальностями, с доступом к
                            деньгам
                            даже за один день.

                            В настоящее время почти все процедуры, связанные с предоставлением кредита, были упрощены, и
                            банки выдают кредитное решение через несколько минут после подачи заявки.

                            Однако, прежде чем зачисленные средства появятся на вашем счете, вы должны заполнить заявку
                            на
                            кредит онлайн и предоставить банку подтверждение о наличии доходов. Некоторые банки с
                            недавнего
                            времени не требую справку о доходах при выдаче кредита. Многие банки требуют от заемщиков
                            другие
                            условия, в том числе личный счет в банке или страхование займов.

                            Банки, прежде чем предоставлять кредиты онлайн, проверят вашу кредитоспособность и историю
                            всех
                            финансовых обязательств в Бюро кредитной информации.

                            <h3>Кредит онлайн через Интернет</h3>
                            Стоит ли использовать онлайн-банкинг?
                            Доступ к личным деньгам через систему онлайн-банкинга уже не удивляет. Популярность
                            онлайн-сервисов заставила банки сделать больше продуктов доступными таким образом. Для
                            учреждений это возможность расширить круг своей деятельности, а также оптимизировать расходы
                            на
                            традиционное банковское обслуживание.

                            Клиент, решивший подать онлайн заявку на кредит, может рассчитывать на более лояльные
                            условия от
                            банка, так как для банка этот кредит будет стоить дешевле. Основным преимуществом кредитов,
                            предлагаемых в через интернете, является возможность экономии. Заемщик очень часто имеет
                            возможность снизить стоимость своих обязательств посредством онлайн-банкинга. Дополнительным
                            преимуществом является экономия времени и доступ к сервису в любом месте и в любое время.
                            Кроме
                            того, приложение, позволяет обойти часть формальностей, и решение о предоставлении кредита
                            предоставляется гораздо быстрее.

                            <h3>Заполните заявку на кредит</h3>
                            Как правильно заполнить форму?
                            Для того, чтобы банк связался с вами в кратчайшие сроки и предоставил вам условия денежного
                            кредита, заявка, которую вы предоставляете, должна быть заполнена без ошибок. Так что стоит
                            помнить? Прежде всего, не бойтесь давать свои реальные данные. Приложение должным образом
                            защищено, и информация, которая будет содержаться в нем, не будет использоваться для иных
                            целей,
                            кроме контакта с банком.

                            Чтобы заполнить форму, просто используйте основную информацию, найденную на удостоверении
                            личности. Банк требует, чтобы вы указали свое имя, дату рождения и номер ИНН, кроме того, вы
                            должны заполнить разделы, в которых вам будет предложено ввести город, в котором вы
                            проживаете,
                            сумму займа, на который вы подаете заявку, и номер телефона.

                            <h3>Конечная стоимость кредита</h3>
                            Какова фактическая стоимость кредита?

                            Фактическая годовая процентная ставка позволяет вам легко понять общую стоимость денежного
                            кредита. Банк обязан предоставить вам информацию о его конечной стоимости, но следует
                            помнить,
                            что большинство учреждений предоставляют эти данные только по прямому запросу клиента.

                            Перед подписанием договора заемщик должен внимательно прочитать условия, и узнать конечную
                            сумму
                            которую он заплатит. Благодаря этому вы сможете спланировать свой бюджет, зная, насколько
                            высок
                            ежемесячный платеж по вашему обязательству.

                            Конечная стоимость кредита состоит из:

                            номинальная процентная ставка
                            комиссия
                            сбор за подготовку
                            страхование кредитов
                            Если вы хотите узнать общую стоимость денежного кредита, вы также должны учитывать
                            дополнительные сборы, связанные с другими продуктами. Если банк требует, чтобы у вас была
                            активная личная учетная запись — проверьте, не платите ли вы за нее.

                            <h3>Период кредитования</h3>
                            Как планировать погашение кредита?

                            Не только процентная ставка по долгу влияет на ваш комфорт в течение срока действия
                            договора.
                            Помните, что при принятии решения о кредите, вы должны рассчитать время, за которое вы
                            сможете
                            его погасить. И подумать об этом, прежде чем подавать заявку на получение кредита. Выберите
                            вариант, который вам больше подходит, и вам будет легче погасить кредит, даже легче чем вы
                            думаете.

                            Длительный период кредитования позволяет гибко отрегулировать погашение обязательства,
                            минимизируя ежемесячные взносы. Однако вы должны помнить, что чем дольше период, за который
                            вы
                            возвращаете деньги банку, тем выше комиссия за услугу, которую вы будете платить. Тем не
                            менее,
                            это решение, которое будет интересовать людей, которые хотят увеличить свою
                            кредитоспособность
                            через более низкую сумму.

                            Более короткий срок погашения, несмотря на более высокие взносы, экономит ваши финансы. Чем
                            быстрее вы урегулируете свой долг, тем меньше заплатите комиссионных. Однако, чтобы
                            позволить
                            вам быстро погасить кредит, вы должны иметь достаточно высокую кредитоспособность.

                            <h3>Равные или уменьшающиеся взносы</h3>
                            Как настроить взносы на свои возможности?

                            Подавляющее большинство кредитов предоставляется по умолчанию равными платежами. Клиенты
                            редко
                            интересуются возможностью изменить этот вариант, хотя это возможно. Что стоит знать о
                            различиях
                            в погашении этих платежей? Во-первых, равные взносы гораздо полезнее для людей, которые не
                            уверены, что они получат правильную кредитоспособность, чтобы получить разрешение на
                            предоставление кредита. Ежемесячные взносы в случае равных платежей остаются неизменными на
                            протяжении всего периода действия договора. Так что, легко точно прогнозировать и
                            планировать
                            домашний бюджет.

                            Кредиты с уменьшающимися взносами, как их название говорит о снижении ставок, и что с каждым
                            платежом они становится меньше. Это означает, что первые платежи будут выше чем последующие,
                            и
                            получение одобрения кредита будет более сложным, потому что требуется более высокий
                            кредитный
                            рейтинг. Однако это отличное решение, если вы планируете быстрее оплачивать свой долг.

                            <h3>Досрочное погашение</h3>
                            Выгодно ли погасить задолженность досрочно?

                            Ваше финансовое положение позволяет вам вернуть кредит ранее? Вы можете уменьшить общую
                            стоимость кредита таким образом, и не будете платить проценты за переплаченный период.
                            Однако не
                            всегда выгодно платить деньги до установленного в графике срока.

                            Банки, ожидающие возможных потерь, часто используют дополнительную комиссию, которая часто
                            превышает оставшиеся платежи, которые должны выплачиваться.

                            Однако на рынке есть предложения по кредитам наличными, которые не предусматривают
                            дополнительных сборов. Если вы не знаете, как выглядят условия в этом отношении, помимо
                            тщательного ознакомления с контрактом, вы можете развеять сомнения, поговорив с
                            консультантом
                            банка.

                            <h3>Банк или кредитная компания</h3>
                            В чем разница между займом и кредитом банка?

                            Кредит наличными в любых целях, предоставляемых в банке, часто связан с услугами,
                            предлагаемыми
                            кредитными организациями. В дополнение к возможности использования любых полученных денег и
                            быстрого доступа к наличным деньгам эти продукты отличаются практически всем.

                            Не банковский кредит предназначен для лица, которое по разным причинам не может получить
                            одобрение кредита у банка. Минимальные формальности также означают увеличение финансового
                            риска
                            для кредитной компании. Это связано со значительным сокращением максимальной суммы
                            ответственности и более коротким периодом погашения. Кроме того, большинство кредитов, в
                            отличие
                            от стандартных кредитов наличными, требуют погашения еженедельно, а не ежемесячных платежей.
                            Не
                            банковские кредиты также имеют гораздо более высокие издержки, что связано с множеством
                            дополнительных сборов.

                            <h3>Кредитное соглашение</h3>
                            На что обратить внимание при подписании кредитного соглашения?

                            Прежде чем подписывать контракт, тщательно проанализируйте все его условия. Подписание
                            подготовленных документов означает, что вы согласны со всеми его предположениями. Многие
                            подписывают контракт с банком, не читая его. Получается что, позже клиенты часто не понимают
                            много условий банка.

                            Если у вас есть какие-либо сомнения относительно критериев получения и уплаты обязательства,
                            спросите сотрудников банка без каких-либо сомнений. Их обязанность заключается в том, чтобы
                            прояснить условия, которые недвусмысленно прописаны в договоре для вас.

                            В частности, договор стоит проверить даже несколько раз. Прежде всего, внимательно
                            просмотрите
                            финансовые условия. Помимо процентной ставки, проверьте также дополнительные сборы, в том
                            числе
                            связанные с досрочным погашением кредита или стоимостью, по которой лица опаздывающие с
                            оплатой
                            взноса, подвергаются штрафным санкциям.

                            <h3>Проблемы с погашением</h3>
                            Что делать в сложной финансовой ситуации?

                            Вы обязаны погасить кредит, но у вас проблемы с бюджетом, и вы не знаете, как справиться с
                            такой
                            ситуацией? Сообщите банку, в котором вы погашаете долг. Учреждение, безусловно, будет
                            открыто
                            для возможности помочь вам. Чаще всего предлагается продлить срок погашения, благодаря
                            которому
                            вы сократите свои ежемесячные расходы, также можно приостановить погашение или
                            воспользоваться
                            кредитными каникулами.

                            Если, с другой стороны, у вас есть более одного долга, и общая сумма платежей превышает ваши
                            финансовые возможности, вы можете решить консолидировать свои ссуды.

                            Помните, что вам необходимо предпринять соответствующие шаги, прежде чем вы перестанете
                            регулярно погашать кредит в соответствии с графиком.

                            <h3>Высокая кредитоспособность</h3>
                            Как повысить кредитоспособность?

                            При подаче заявки на получение кредита вы должны иметь достаточную кредитоспособность. Ваш
                            доход
                            должен гарантировать, что вы сможете погасить свой долг, чтобы у банка не было слишком
                            большого
                            риска.

                            Если у вас есть кредитная карта, откажитесь от нее. Даже если вы не используете ее, она
                            снижает
                            ваши возможности, поскольку это еще одно обязательство для банка, например, кредит или
                            другой
                            кредит.

                            Вы должны заплатить несколько платежей за другое обязательство? Прежде чем подать заявку на
                            следующий долг, оплатите его. Прежде всего, избегайте ситуаций, в которых вы опаздываете с
                            ежемесячным взносом.

                            Вы также можете получить более высокий кредитный рейтинг, подав заявку на ссуду на более
                            крупные
                            суммы. Чем дольше срок погашения, тем ниже ежемесячная плата. Поэтому это один из самых
                            простых
                            способов избежать отказа банка.

                            <h3>Бюро кредитных историй</h3>
                            Позаботьтесь о своей кредитной истории.

                            Бюро кредитной информации собирает сообщения о погашенных долгах, а также те, которые не
                            были
                            урегулированы. Это означает, что вы можете увеличить свой авторитет и потерять его.
                            Используйте
                            БКИ для создания хорошей кредитной истории, благодаря этому, получить выгодный кредит будет
                            намного проще.

                            Люди, которые раньше не использовали кредиты, могут подумать о том, чтобы взять небольшой
                            кредит, который легко заплатить, чтобы повысить свой рейтинг. Хорошим решением является
                            также
                            покупка небольшого оборудования в рассрочку и своевременное его погашение.</p></div>
                    </div>
                    <div class="va-slice va-slice-1">
                        <div class="flex-wrap-acrd">
                            <h3 class="va-title" style="margin-top:0.85em">Ставки по
                                потребительским кредитам</h3>
                        </div>
                        <div class="va-content" id="va-2"><p>Текст</p></div>
                    </div>
                    <div class="va-slice va-slice-1">
                        <div class="flex-wrap-acrd">
                            <h3 class="va-title" style="margin-top:0.85em">Выгодные
                                потребительские
                                кредиты</h3>
                        </div>
                        <div class="va-content" id="va-3"><p>Текст</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/front/css/jquery-ui-for-autocomp-wrap.css">
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?= get_template_directory_uri(); ?>/assets/front/js/city-list.js"></script>
<div class="_2Jclz _2fZko _1odi0 _3m0xh" id="overlay" style="display:none;">
    <div class="ud9DQ _21AWC _2t8V0"></div>
    <div class="_2TVkK  _3BjeW _3dfdz _2Muap">
        <section class="_2tiCJ">
            <div>
                <div class="_20lkO">
                    <div class="_282xc">
                        <div class="_321bS">
                            <div class="_1FhHf"><i class="fa fa-times-circle-o" aria-hidden="true"
                                                   style="font-size:40px" onclick="close_dop()"></i></div>
                            <div class="_1bMAp">
                                <div class="_1-qkH">
                                    <div class="_261bl">
                                        <div class="smgEc _1MiQb">Все условия</div>
                                        <div class="_3W8tQ">
                                            <div class="_1rc8I" data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Выберите сумму кредита</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="price_dop"
                                                                                       class="_2ARmF _2qJ6u _3uy56 _3I6R2"
                                                                                       name="price_dop"
                                                                                       onkeypress="price_change_dop()">
                                                                <div id="slider-range_dop"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Валюта</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_currency_dop" type="text"
                                                                                       readonly="" autocomplete="off"
                                                                                       autocorrect="off"
                                                                                       autocapitalize="off"
                                                                                       spellcheck="off"
                                                                                       class="_2ARmF _2qJ6u _16cFN "
                                                                                       value="&#8381;"
                                                                                       onclick="select_cur_dop();">
                                                                <ul id="currency_dop" class=" _2cR3J"
                                                                    data-test="ui-select-values">
                                                                    <li value="RUB" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&#8381;')"><i
                                                                                class="fa fa-rub"
                                                                                aria-hidden="true"></i></li>
                                                                    <li value="USD" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&#36;')"><i
                                                                                class="fa fa-usd"
                                                                                aria-hidden="true"></i></li>
                                                                    <li value="EUR" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_currency_dop('&euro;')"><i
                                                                                class="fa fa-eur"
                                                                                aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0"> Срок</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_period_dop" type="text"
                                                                                       readonly="" autocomplete="off"
                                                                                       autocorrect="off"
                                                                                       autocapitalize="off"
                                                                                       spellcheck="off"
                                                                                       class="_2ARmF _2qJ6u"
                                                                                       role="input" value="3 года"
                                                                                       onclick="select_period_dop();">
                                                                <ul id="period_dop" class="_3IKDE _2cR3J"
                                                                    data-test="ui-select-values">
                                                                    <li value="P1M" label="1 месяц" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="205"
                                                                        onclick="select_period_srok_dop('1 месяц')">1
                                                                        месяц
                                                                    </li>
                                                                    <li value="P3M" label="3 месяца" class="_3NNjg "
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('3 месяца')">3
                                                                        месяца
                                                                    </li>
                                                                    <li value="P6M" label="6 мес¤цев" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('6 месяцев')">6
                                                                        месяцев
                                                                    </li>
                                                                    <li value="P9M" label="9 месяцев" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('9 месяцев')">9
                                                                        месяцев
                                                                    </li>
                                                                    <li value="P1Y" label="1 год" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('1 год')">1 год
                                                                    </li>
                                                                    <li value="P2Y" label="2 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('2 года')">2
                                                                        года
                                                                    </li>
                                                                    <li value="P3Y" label="3 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('3 года')">3
                                                                        года
                                                                    </li>
                                                                    <li value="P4Y" label="4 года" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('4 года')">4
                                                                        года
                                                                    </li>
                                                                    <li value="P5Y" label="5 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="213"
                                                                        onclick="select_period_srok_dop('5 лет')">5 лет
                                                                    </li>
                                                                    <li value="P6Y" label="6 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item" data-reactid="214"
                                                                        onclick="select_period_srok_dop('6 лет')">6 лет
                                                                    </li>
                                                                    <li value="P7Y" label="7 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('7 лет')">7 лет
                                                                    </li>
                                                                    <li value="P8Y" label="8 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok('8 лет')">8 лет
                                                                    </li>
                                                                    <li value="P9Y" label="9 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('9 лет')">9 лет
                                                                    </li>
                                                                    <li value="P10Y" label="10 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('10 лет')">10
                                                                        лет
                                                                    </li>
                                                                    <li value="P15Y" label="15 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('15 лет')">15
                                                                        лет
                                                                    </li>
                                                                    <li value="P20Y" label="20 лет" class="_3NNjg"
                                                                        data-test="ui-menu-item"
                                                                        onclick="select_period_srok_dop('20 лет')">20
                                                                        лет
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div class="_2xdGi _1wJD0">Ваш город</div>
                                                <div class="_2J6fq">
                                                    <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                        <div class="_3_n91 AePXT _1fswf"
                                                             data-test="ui-slider-input-input">
                                                            <div class="_1DCZo"><input id="cur_city_dop" type="text"
                                                                                       class="_2ARmF _2qJ6u" value=""
                                                                                       onchange="change_city();Get_PotrKr();">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I " data-test="ui-group">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_2xdGi _1wJD0">Цель</div>
                                                    <div class="_2J6fq">
                                                        <div class="_1Mbqb _2futP TNUZk" data-test="ui-slider-input">
                                                            <div class="_3_n91 AePXT _1fswf"
                                                                 data-test="ui-slider-input-input">
                                                                <div class="_1DCZo"><input id="cur_target" type="text"
                                                                                           readonly=""
                                                                                           class="_2ARmF _2qJ6u _16cFN"
                                                                                           value="Любая"
                                                                                           onclick="select_cur_target();">
                                                                    <ul id="target" class=" _2cR3J"
                                                                        data-test="ui-select-values">
                                                                        <li value="Любая" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Любая')">Любая
                                                                        </li>
                                                                        <li value="Рефинансирование" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Рефинансирование')">
                                                                            Рефинансирование
                                                                        </li>
                                                                        <li value="Ремонт" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Ремонт')">Ремонт
                                                                        </li>
                                                                        <li value="Обучение" class="_3NNjg"
                                                                            data-test="ui-menu-item"
                                                                            onclick="select_target('Обучение')">Обучение
                                                                        </li>
                                                                        </li>
                                                                        <li value="Развитие личного подсобного хозяйства"
                                                                            class="_3NNjg" data-test="ui-menu-item"
                                                                            onclick="select_target('Развитие личного подсобного хозяйства')">
                                                                            Развитие личного подсобного хозяйства
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Залог</label>
                                                        <div class="_1DCZo "><input id="zalog_cur" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="zalog_select()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="zalog" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item" onclick="select_zalog('Неважно')">
                                                            Неважно
                                                        </li>
                                                        <li value="Без залога" label="Без залога" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_zalog('Без залога')">Без залога
                                                        </li>
                                                        <li value="Залог имеющейся недвижимости"
                                                            label="Залог имеющейся недвижимости" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_zalog('Залог имеющейся недвижимости')">Залог
                                                            имеющейся недвижимости
                                                        </li>
                                                        <li value="Залог имеющегося ТС" label="Залог имеющегося ТС"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_zalog('Залог имеющегося ТС')">Залог
                                                            имеющегося ТС
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Поручительство</label>
                                                        <div class="_1DCZo "><input id="cur_poruch" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="select_cur_poruch();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="poruch" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item" onclick="select_poruch('Неважно')">
                                                            Неважно
                                                        </li>
                                                        <li value="Без поручителей" label="Без поручителей"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_poruch('Без поручителей')">Без поручителей
                                                        </li>
                                                        <li value="Требуется поручитель" label="Требуется поручитель"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_poruch('Требуется поручитель')">Требуется
                                                            поручитель
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Подтверждение дохода</label>
                                                        <div class="_1DCZo "><input id="cur_podtv_dohod" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Любое"
                                                                                    onclick="select_cur_podtv_dohod();">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="podtv_dohod" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Любое" label="Любое" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Любое')">Любое
                                                        </li>
                                                        <li value="Без справок о доходах" label="Без справок о доходах"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Без справок о доходах')">Без
                                                            справок о доходах
                                                        </li>
                                                        <li value="Справка в свободной форме"
                                                            label="Справка в свободной форме" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка в свободной форме')">
                                                            Справка в свободной форме
                                                        </li>
                                                        <li value="Справка по форме банка"
                                                            label="Справка по форме банка" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка по форме банка')">
                                                            Справка по форме банка
                                                        </li>
                                                        <li value="Справка 2-НДФЛ" label="Справка 2-НДФЛ"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка 2-НДФЛ')">Справка
                                                            2-НДФЛ
                                                        </li>
                                                        <li value="Справка 3-НДФЛ" label="Справка 3-НДФЛ"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка 3-НДФЛ')">Справка
                                                            3-НДФЛ
                                                        </li>
                                                        <li value="Справка из ПФР" label="Справка из ПФР"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Справка из ПФР')">Справка из
                                                            ПФР
                                                        </li>
                                                        <li value="Выписка по счету" label="Выписка по счету"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_podtv_dohod('Выписка по счету')">Выписка по
                                                            счету
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Форма выдачи</label>
                                                        <div class="_1DCZo "><input id="cur_form_vidach" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Любая"
                                                                                    onclick="select_cur_form_vidach()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="form_vidach" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Любая" label="Любая" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('Любая')">Любая
                                                        </li>
                                                        <li value="Наличными" label="Наличными" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('Наличными')">Наличными
                                                        </li>
                                                        <li value="На карту" label="На карту" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('На карту')">На карту
                                                        </li>
                                                        <li value="На счет" label="На счет" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_form_vidach('На счет')">На счет
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Срок рассмотрения</label>
                                                        <div class="_1DCZo "><input id="cur_srok_rasm" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_cur_srok_rasm()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="srok_rasm" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('Неважен')">Неважен
                                                        </li>
                                                        <li value="За 1 час" label="За 1 час" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('За 1 час')">За 1 час
                                                        </li>
                                                        <li value="В течение 1 дня" label="В течение 1 дня"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_srok_rasm('В течение 1 дня')">В течение 1
                                                            дня
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I _1pC8g"><label id="label_strahov" class="_271MP"
                                                                              data-test="ui-checkbox"><input
                                                            id="strahov" type="checkbox" class="_13ChN"
                                                            onclick="select_strahov();"><span class="zDjae">Личное страхование заёмщика</span></label>
                                            </div>
                                        </div>
                                        <div class="_3W8tQ">
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Регистрация</label>
                                                        <div class="_1DCZo "><input id="cur_registr" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Не важно"
                                                                                    onclick="select_registr()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlНе важноink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="registr" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Не важно" label="Не важно"
                                                            class="_3NNjg _3R8Y8 _2Karn" data-test="ui-menu-item"
                                                            onclick="select_cur_registr('Не важно')">Не важно
                                                        </li>
                                                        <li value="Временная" label="Временная" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_registr('Временная')">Временная
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div class="_3_n91 _1fswf" data-test="ui-input"><label
                                                            class="_3CBLq _1wJD0">Возраст заемщика</label>
                                                    <div class="_1DCZo"><input id="cur_age" type="text"
                                                                               autocomplete="off" autocorrect="off"
                                                                               autocapitalize="off" spellcheck="off"
                                                                               class="_2ARmF _2qJ6u" role="input"
                                                                               value="" onchange="Get_PotrKr()"></div>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Категория заёмщика</label>
                                                        <div class="_1DCZo "><input id="cur_category" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважно"
                                                                                    onclick="select_category()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="category" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважно" label="Неважно" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Неважно')">Неважно
                                                        </li>
                                                        <li value="Бюджетные" label="Бюджетные" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Бюджетные')">Бюджетные
                                                        </li>
                                                        <li value="Предприниматели" label="Предприниматели"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Предприниматели')">
                                                            Предприниматели
                                                        </li>
                                                        <li value="Зарплатные клиенты" label="Зарплатные клиенты"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Зарплатные клиенты')">
                                                            Зарплатные клиенты
                                                        </li>
                                                        <li value="Клиенты банка" label="Клиенты банка"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Клиенты банка')">Клиенты банка
                                                        </li>
                                                        <li value="Особая категория" label="Особая категория"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_category('Особая категория')">Особая
                                                            категория
                                                        </li>
                                                        <li value="Пенсионеры" label="Пенсионеры" class="_3NNjg _3R8Y8"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_category('Пенсионеры')">Пенсионеры
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Общий трудовой стаж</label>
                                                        <div class="_1DCZo "><input id="cur_stag" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_stag()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="stag" class="_3IKDE _2cR3J" data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_stag('Неважен')">Неважен
                                                        </li>
                                                        <li value="Менее 1 года" label="Менее 1 года"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag('Менее 1 года')">Менее 1 года
                                                        </li>
                                                        <li value="1 год и более" label="1 год и более"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag('1 год и более')">1 год и более
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I">
                                                <div data-test="ui-select" class="_129hA">
                                                    <div class="_3_n91 _1e74P _1fswf" data-test="ui-select-input"><label
                                                                class="_3CBLq _1wJD0">Стаж на последнем месте</label>
                                                        <div class="_1DCZo "><input id="cur_stag_last" type="text"
                                                                                    readonly="" autocomplete="off"
                                                                                    autocorrect="off"
                                                                                    autocapitalize="off"
                                                                                    spellcheck="off"
                                                                                    class="_2ARmF _2qJ6u _16cFN"
                                                                                    role="input" value="Неважен"
                                                                                    onclick="select_stag_last()">
                                                            <div class="_2k11- _2V6_I _3E_jV SVDVr _2Z7K9"
                                                                 data-test="ui-select-input-icon">
                                                                <svg class="SdEDi">
                                                                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         xlink:href="#arrow-down-thin"></use>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="stag_last" class="_3IKDE _2cR3J"
                                                        data-test="ui-select-values">
                                                        <li value="Неважен" label="Неважен" class="_3NNjg _3R8Y8 _2Karn"
                                                            data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Неважен')">Неважен
                                                        </li>
                                                        <li value="Менее 3 месяцев" label="Менее 3 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Менее 3 месяцев')">Менее 3
                                                            месяцев
                                                        </li>
                                                        <li value="От 3 до 6 месяцев" label="От 3 до 6 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('От 3 до 6 месяцев')">От 3 до
                                                            6 месяцев
                                                        </li>
                                                        <li value="Более 6 месяцев" label="Более 6 месяцев"
                                                            class="_3NNjg _3R8Y8" data-test="ui-menu-item"
                                                            onclick="select_cur_stag_last('Более 6 месяцев')">Более 6
                                                            месяцев
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_1rc8I _1pC8g"><label id="label_gr" class="_271MP"
                                                                              data-test="ui-checkbox"><input id="cur_gr"
                                                                                                             type="checkbox"
                                                                                                             class="_13ChN"
                                                                                                             value="0"
                                                                                                             readonly=""
                                                                                                             onclick="select_gr()"><span
                                                            class="zDjae">Не являюсь гражданином РФ</span></label></div>
                                        </div>
                                    </div>
                                    <div id="footer_dop_cr" class="zPvOY">
                                        <button class="_2sdWW _2OZ3R RaZ2S _3zDyU _3x77s" type="button"
                                                data-test="ui-button">Найдено 32 кредита
                                        </button>
                                        <button class="_2sdWW _2OZ3R _1VABv _3zDyU _3x77s _3Ldwp" type="button">Сбросить
                                            фильтры
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>
<script>
    jQuery(document).ready(function () {
        jQuery("._129hA-fx1").on("click", "button", function (event) {
            event.preventDefault();
            var id = jQuery(this).attr('href'),
                top = jQuery(id).offset().top;
            jQuery('body,html').animate({scrollTop: top}, 500);
        });
    });

    jQuery(document).ready(function () {
        jQuery("#credits-compare-link").on("click", "a", function (event) {
            event.preventDefault();
            var id = jQuery(this).attr('href'),
                top = jQuery(id).offset().top;
            jQuery('body,html').animate({scrollTop: top}, 700);
        });
    });

    jQuery(document).ready(function () {
        jQuery("#credit-selection-link").on("click", "a", function (event) {
            event.preventDefault();
            var id = jQuery(this).attr('href'),
                top = jQuery(id).offset().top - 100;
            jQuery('body,html').animate({scrollTop: top}, 700);
        });
    });
</script>
<script src="<?= get_template_directory_uri(); ?>/assets/front/css/kredit_theme/js/table-sort-and-load-more-credits.js"></script>
<script>$(function () {
        $("#slider-range").slider({
            range: true,
            min: 1,
            max: 1500,
            values: [1, 500],
            step: 1,
            slide: function (event, ui) {
                $("#price").val(ui.values[1] * 1000);
                $("#slider-range_dop").slider("option", "values", [1, ui.values[1] * 1000]);
                document.getElementById('price_dop').value = ui.values[1] * 1000;
                Get_PotrKr();
            }
        });
        $("#price").val($("#slider-range").slider("values", 1) * 1000);
    });    </script>
<script>$(function () {
        $("#slider-range_dop").slider({
            range: true,
            min: 1,
            max: 1500,
            values: [1, 1500],
            step: 1,
            slide: function (event, ui) {
                $("#price_dop").val(ui.values[1] * 1000);
                $("#slider-range").slider("option", "values", [1, ui.values[1] * 1000]);
                document.getElementById('price').value = ui.values[1] * 1000;
                Get_PotrKr();
            }
        });
        $("#price_dop").val($("#slider-range_dop").slider("values", 1) * 1000);
    });    </script>
<script>        function show_dop() {
        $('#overlay').show();
    }
    function close_dop() {
        $('#overlay').hide();
    }
    function clear_dop() {
        $("#slider-range_dop").slider("option", "values", [1, 102]); //changeFX was 500
        $("#price_dop").val(100000); //changeFX was 500
        $("#slider-range").slider("option", "values", [1, 102]); //changeFX was 500
        $("#price").val(100000); //changeFX was 500
        $("#cur_period").val('3 года');
        $("#cur_period_dop").val('3 года');
        $("#cur_city_dop").val('');
        $("#zalog_cur").val('Неважно');
        $("#cur_target").val('Любая');
        $("#cur_poruch").val('Неважно');
        $("#cur_podtv_dohod").val('Любое');
        $("#cur_form_vidach").val('Любая');
        $("#cur_srok_rasm").val('Неважен');
        $("#cur_registr").val('Не важно');
        $("#cur_category").val('Неважно');
        $("#cur_stag").val('Неважен');
        $("#cur_stag_last").val('Неважен');
        select_currency("₽");
        Get_PotrKr();
    }            </script>
<script type="text/javascript">            $(function () {
        l1 = document.getElementById('va-1').innerHTML.length;
        l2 = document.getElementById('va-2').innerHTML.length;
        l3 = document.getElementById('va-3').innerHTML.length;
        maxl = l1;
        if (l2 > l1) maxl = l2;
        if (l3 > l2) maxl = l3;

        if (document.body.clientWidth < 768) {
            k = 54;
            v = 25;
            vh = 100;

        }
        else {
            k = 116;
            v = 30;
            vh = 160;

        }
        $('#va-accordion').vaccordion({
            visibleSlices: 5,
            accordionH: vh + (maxl / k) * 30,
            expandedHeight: maxl,
            expandedHeight1: vh + (l1 / k) * v,
            expandedHeight2: vh + (l2 / k) * v,
            expandedHeight3: vh + (l3 / k) * v,

            animOpacity: 1,
            contentAnimSpeed: 2000,
            lengthSlide: maxl / k
        });
    });        </script>
<script> function select_cur_dop() {
        if ($("#currency_dop").css('visibility') == 'hidden') {
            $("#currency_dop").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#currency_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    } </script>
<script>function select_cur() {
        if ($("#currency").css('visibility') == 'hidden') {
            $("#currency").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#currency").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    } </script>
<script>function select_cur_target() {
        if ($("#target").css('visibility') == 'hidden') {
            $("#target").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#target").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_poruch() {
        if ($("#poruch").css('visibility') == 'hidden') {
            $("#poruch").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#poruch").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_form_vidach() {
        if ($("#form_vidach").css('visibility') == 'hidden') {
            $("#form_vidach").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#form_vidach").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_srok_rasm() {
        if ($("#srok_rasm").css('visibility') == 'hidden') {
            $("#srok_rasm").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#srok_rasm").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_cur_podtv_dohod() {
        if ($("#podtv_dohod").css('visibility') == 'hidden') {
            $("#podtv_dohod").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#podtv_dohod").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_category() {
        if ($("#category").css('visibility') == 'hidden') {
            $("#category").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#category").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_stag() {
        if ($("#stag").css('visibility') == 'hidden') {
            $("#stag").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#stag").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_stag_last() {
        if ($("#stag_last").css('visibility') == 'hidden') {
            $("#stag_last").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#stag_last").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_registr() {
        if ($("#registr").css('visibility') == 'hidden') {
            $("#registr").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#registr").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function select_period() {
        if ($("#period").css('visibility') == 'hidden') {
            $("#period").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#period").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>
    function select_period_kr_form() {
        $("#period-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_employment_type_kr_form() {
        $("#employment-type-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_lastExperienceStartMonth_kr_form() {
        $("#lastExperienceStartMonth-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_lastExperienceStartYear_kr_form() {
        $("#lastExperienceStartYear-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_creditSecurity_kr_form() {
        $("#creditSecurity-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>function select_period_dop() {
        if ($("#period_dop").css('visibility') == 'hidden') {
            $("#period_dop").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#period_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function zalog_select() {
        if ($("#zalog").css('visibility') == 'hidden') {
            $("#zalog").css({'visibility': 'visible', 'overflow-x': 'visible', 'overflow-y': 'visible'});
        } else {
            $("#zalog").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        }
    }</script>
<script>function price_change_dop() {
        a = document.getElementById('price_dop').value;
        if (a >= 10000 && a <= 15000000) {
            $("#slider-range_dop").slider("option", "values", [1, a / 10000]);
            $("#slider-range").slider("option", "values", [1, a / 10000]);
            Get_PotrKr();
        }
    }</script>
<script>function price_change() {
        a = document.getElementById('price').value;
        if (a >= 10000 && a <= 15000000) {
            $("#slider-range").slider("option", "values", [1, a / 10000]);
            $("#slider-range_dop").slider("option", "values", [1, a / 10000]);
            Get_PotrKr();
        }
    }</script>
<script>function select_currency(a) {
        $("#cur_currency").val(a);
        $("#cur_currency_dop").val(a);
        $("#currency").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_currency_dop(a) {
        $("#cur_currency_dop").val(a);
        $("#cur_currency").val(a);
        $("#currency_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_poruch(a) {
        $("#cur_poruch").val(a);
        $("#poruch").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_podtv_dohod(a) {
        $("#cur_podtv_dohod").val(a);
        $("#podtv_dohod").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_form_vidach(a) {
        $("#cur_form_vidach").val(a);
        $("#form_vidach").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_srok_rasm(a) {
        $("#cur_srok_rasm").val(a);
        $("#srok_rasm").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_registr(a) {
        $("#cur_registr").val(a);
        $("#registr").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_category(a) {
        $("#cur_category").val(a);
        $("#category").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_stag(a) {
        $("#cur_stag").val(a);
        $("#stag").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }
    function select_cur_stag_last(a) {
        $("#cur_stag_last").val(a);
        $("#stag_last").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_zalog(a) {
        $("#zalog_cur").val(a);
        $("#zalog").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_target(a) {
        $("#cur_target").val(a);
        $("#target").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function select_period_srok(a) {
        $("#cur_period").val(a);
        $("#cur_period_dop").val(a);
        $("#period").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>
    function select_period_srok_kr_form(a) {
        $("#cur_period-kr-form").val(a);
        $("#period-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_employment_type_ul_kr_form(a) {
        $("#employmentType").val(a);
        $("#employment-type-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_creditSecurity_ul_kr_form(a) {
        $("#creditSecurity").val(a);
        $("#creditSecurity-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_lastExperienceStartMonth_ul_kr_form(a) {
        $("#lastExperienceStartMonth").val(a);
        $("#lastExperienceStartMonth-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>
    function select_lastExperienceStartYear_ul_kr_form(a) {
        $("#lastExperienceStartYear").val(a);
        $("#lastExperienceStartYear-kr-form-wrap").toggleClass("_1VyK0");
    }
</script>
<script>function select_period_srok_dop(a) {
        $("#cur_period_dop").val(a);
        $("#cur_period").val(a);
        $("#period_dop").css({'visibility': 'hidden', 'overflow-x': 'hidden', 'overflow-y': 'hidden'});
        Get_PotrKr();
    }</script>
<script>function toggle_menu(i) {
        el = document.getElementsByClassName('-link');
        $(".-link").removeClass("-active");
        $('#navigation').attr('data-current', i);
        /*el[i].addClass('-active');*/
    }</script>
<script>function select_strahov() {
        var c = document.querySelector('#strahov');
        if (c.checked) {
            $("#label_strahov").addClass('_3QFEG');
        } else {
            $("#label_strahov").removeClass('_3QFEG');
        }
        Get_PotrKr();
    }
    function select_gr() {
        var gr = document.querySelector('#cur_gr');
        if (gr.checked) {
            $("#label_gr").addClass('_3QFEG');
        } else {
            $("#label_gr").removeClass('_3QFEG');
        }
        Get_PotrKr();
    }</script>
<script>function Get_PotrKr() {
        $.ajax({
            url: "https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/select_potr_kr.php",
            type: "POST",
            error: function (response) {
                $(".status").html(response.status + "<br>" + response.msg);
                console.log("Ошибка");
            },
            success: function (response) {
                res = jQuery.parseJSON(response);

                if ($('#navigation').attr('data-current', '1')) {
                    res.sort(function (a, b) {
                        return a.rating < b.rating;
                    });
                    res.sort();
                    console.log(res);
                }
                else {
                    res.sort(function (a, b) {
                        return a.name > b.name;
                    });
                    res.sort();
                    console.log(res);
                }
                var data = {"bank_offers": res};
                console.log(data);
                change(data);
                console.log("Успешно загрузили данные");
            },
        });
    }
    Get_PotrKr();</script>
<!-- Top100 (Kraken) Counter -->
<script>
    (function (w, d, c) {
        (w[c] = w[c] || []).push(function () {
            var options = {
                project: 4521925,
            };
            try {
                w.top100Counter = new top100(options);
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src =
            (d.location.protocol == "https:" ? "https:" : "http:") +
            "//st.top100.ru/top100/top100.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(window, document, "_top100q");
</script>
<noscript>
    <img src="//counter.rambler.ru/top100.cnt?pid=4521925" alt="Топ-100"/>
</noscript>
<!-- END Top100 (Kraken) Counter -->
<!--Openstat-->
<span id="openstat1"></span>
<script type="text/javascript">
    var openstat = {counter: 1, next: openstat};
    (function (d, t, p) {
        var j = d.createElement(t);
        j.async = true;
        j.type = "text/javascript";
        j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
        var s = d.getElementsByTagName(t)[0];
        s.parentNode.insertBefore(j, s);
    })(document, "script", document.location.protocol);
</script>
<!--/Openstat-->
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
    var _tmr = window._tmr || (window._tmr = []);
    _tmr.push({id: "2953540", type: "pageView", start: (new Date()).getTime()});
    (function (d, w, id) {
        if (d.getElementById(id)) return;
        var ts = d.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.id = id;
        ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
        var f = function () {
            var s = d.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ts, s);
        };
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "topmailru-code");
</script>
<noscript>
    <div>
        <img src="//top-fwz1.mail.ru/counter?id=2953540;js=na" style="border:0;position:absolute;left:-9999px;" alt=""/>
    </div>
</noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter47665804 = new Ya.Metrika2({
                    id: 47665804,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    ut: "noindex"
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/47665804?ut=noindex" style="position:absolute; left:-9999px;" alt=""/>
    </div>
</noscript>
<script src="<?= get_template_directory_uri();?>/assets/front/js/jquery.maskedinput.min.js"></script>
<script>
    //Код jQuery, установливающий маску для ввода телефона элементу input
    //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
    $(function(){
        //2. Получить элемент, к которому необходимо добавить маску
        $("#phone").mask("+7(999) 999-99-99");
        $("#birthDate").mask("99.99.9999");
        $("#sn").mask("** ** ******");
        $("#issueDate").mask("99.99.9999");
        $("#code").mask("***-***");
    });
</script>
<!-- /Yandex.Metrika counter -->