<?php
/*
* Template Name: deposit-single
*/
get_header();
?>
<link rel="manifest" href="/manifest.json">
<!--<link href="//f.sravni.ru/dist/common.b4faa07d.css" rel="stylesheet" type="text/css" charset="UTF-8">-->
<link href="<?= get_template_directory_uri(); ?>/assets/front/css/sravni-credit-card-single.css" rel="stylesheet"
<link href="<?= get_template_directory_uri(); ?>/assets/front/css/sravni-credit-card-single2.css" rel="stylesheet"
      type="text/css" charset="UTF-8">

<style>
    .deposit-amount-input {
        box-shadow: none !important;
        border: none !important;
    }

    .bank-product-item__close {
        display: none;
    }
</style>
<style>.calculator-branded-button {
        background-color: #d74739;
        background-image: ;
        background-repeat: ;
        background-position: left top;
        border-color: #d74739;
    }

    .branding-logo-container {
        background-image: url(//f.sravni.ru/logotypes/branding/sponsorcalculatorbuttonbrandingoptions/bank-326_LogoImage59.svg);
        background-size: 120px auto;
    }

    .branding-logo-label {
        color: #ffffff;
        border-color: #ffffff;
    }</style>
<style>/*лейбл Спонсор раздела карт*/
    .debit-cards-serp .sponsor-label {
        background-color: #d74739;
        color: #ffffff;
    }

    .debit-cards-serp .sponsor-label:before {
        border-color: transparent;
        border-bottom-color: #d74739;
    }

    /*лейбл Спонсор раздела*/
    .sponsor-label, .calculator-list-theme__sponsor-label {
        background-color: #d74739;
        color: #ffffff;
    }

    .sponsor-label:before {
        border-color: transparent;
        border-right-color: #d74739;

    T-SponsorProposition .result-name {
        color: White;
    }

    T-SponsorProposition .results-container-header {
        background-color: ;
        color: White;
    }

    T-SponsorProposition .btn-primary {
        background-color: ;
        color: ;
    }</style>


<script src="https://cdn.ravenjs.com/3.23.3/raven.min.js" async=""></script>
<!--<script type="text/javascript" charset="utf-8" async="" src="--><? //= get_template_directory_uri(); ?><!--/assets/front/js/credits.bundle.ae25963b.js"></script>-->

<div id="credit-card-single">
    <div id="deposit-wrapper" class="body-branding-wrapper mod-organization ">
        <div class="body-branding-inner-wrapper">


            <!-- /10103386/fin_deposit_merchant_background_1x1 -->
            <div id="div-gpt-ad-1471246087586-33-636707918818146013" class="TGB-Block-Element is-1x1 pagebackground"
                 data-banner="pagebackground" data-bannertag="fin_deposit_merchant_background_1x1"
                 data-google-query-id="CMGsm4_fh90CFUwRGAodqq0FYw" style="display: none;">
                <script type="text/javascript">
                    window.adSlots = window.adSlots || {};
                    var isDesktop = !window.matchMedia || !window.matchMedia("screen and (max-width: 605px)").matches;
                    var mode = 'All';
                    if (mode === 'All' || (mode === 'Desktop' && isDesktop) || (mode === 'Mobile' && !isDesktop)) {

                        googletag.cmd.push(function () {
                            var slot = googletag.defineSlot('/10103386/fin_deposit_merchant_background_1x1', [[1, 1]], 'div-gpt-ad-1471246087586-33-636707918818146013')
                                .addService(googletag.pubads())
                                .setCollapseEmptyDiv(true, true)


                                .setTargeting("bic", "sovkombank")


                                .setTargeting("vs", "merchant")


                                .setTargeting("auth", "false")
                                .setTargeting("subStatus", "false")


                                .setTargeting("ip", "91.242.195.101")

                            ;

                            googletag.enableServices();


                            googletag.display('div-gpt-ad-1471246087586-33-636707918818146013');


                            window.adSlots["pagebackground"] = slot;

                            //						setInterval(function() {
                            //							googletag.pubads().refresh([slot]);
                            //						}, 1000 * 60);
                        });


                    }
                </script>
                <div id="google_ads_iframe_/10103386/fin_deposit_merchant_background_1x1_0__container__"
                     style="border: 0pt none;">
                    <iframe id="google_ads_iframe_/10103386/fin_deposit_merchant_background_1x1_0"
                            title="3rd party ad content"
                            name="google_ads_iframe_/10103386/fin_deposit_merchant_background_1x1_0" width="1"
                            height="1" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" srcdoc=""
                            style="border: 0px; vertical-align: bottom;"></iframe>
                </div>
            </div>


            <section class="l-wrapper serp l-centered clearfix lol2">
                <!-- body-branding-inner-->
                <div class="body-branding-inner">


                    <div id="mainWrapper">
                        <div id="mainContent">

                            <div class="l-main--display-block" data-pinned-container="true">
                                <div class="l-main__wrapper">

                                    <div class="company-page--bank">
                                        <div class="company-page-main">


                                            <div id="product-page-app" class="product-inside">
                                                <div data-reactid=".1">
                                                    <div class="ui-panel ui-panel--main" data-reactid=".1.0">
                                                        <div class="product-inside__top" data-reactid=".1.0.1:0"><h1
                                                                    class="product-inside__top-name"
                                                                    data-reactid=".1.0.1:0.0"><?php the_title(); ?></h1>
                                                            <div class="product-inside__top-company"
                                                                 data-reactid=".1.0.1:0.1">
                                                            </div>
                                                            <div class="radio-control radio-control--tabs radio-control--tabs product-inside__calculator-tabs"
                                                                 data-reactid=".1.0.1:0.4">
                                                                <div class="radio-control-inner"
                                                                     data-reactid=".1.0.1:0.4.1">
                                                                    <ul data-reactid=".1.0.1:0.4.1.0">
                                                                        <li data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=10">
                                                                            <label data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=10.$radio=1activeSection=10"><input
                                                                                        type="radio"
                                                                                        name="activeSection" checked=""
                                                                                        value="is-mobile-rates"
                                                                                        data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=10.$radio=1activeSection=10.0"><span
                                                                                        data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=10.$radio=1activeSection=10.1">Ставки</span></label>
                                                                        </li>
                                                                        <li data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=11">
                                                                            <label data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=11.$radio=1activeSection=11"><input
                                                                                        type="radio"
                                                                                        name="activeSection"
                                                                                        value="is-mobile-calculator"
                                                                                        data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=11.$radio=1activeSection=11.0"><span
                                                                                        data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=11.$radio=1activeSection=11.1">Калькулятор</span></label>
                                                                        </li>
                                                                        <li data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=12">
                                                                            <label data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=12.$radio=1activeSection=12"><input
                                                                                        type="radio"
                                                                                        name="activeSection"
                                                                                        value="is-mobile-conditions"
                                                                                        data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=12.$radio=1activeSection=12.0"><span
                                                                                        data-reactid=".1.0.1:0.4.1.0.$li=1activeSection=12.$radio=1activeSection=12.1">Условия</span></label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--<a href="/vklady/?Amount=1000000&amp;Period=12 месяцев&amp;ProductType=Saving&amp;Currency=1&amp;BankGroupId=11"
                                                               class="product-inside__close" data-reactid=".1.0.1:0.5">
                                                                <svg class="icon" viewBox="0 0 16.26 16.26"
                                                                     data-reactid=".1.0.1:0.5.0">
                                                                    <g data-reactid=".1.0.1:0.5.0.0">
                                                                        <rect x="7.13" y="-2.37" width="1" height="21"
                                                                              transform="translate(-3.37 8.13) rotate(-45)"
                                                                              data-reactid=".1.0.1:0.5.0.0.0"></rect>
                                                                        <rect x="-2.37" y="7.13" width="21" height="1"
                                                                              transform="translate(-3.37 8.13) rotate(-45)"
                                                                              data-reactid=".1.0.1:0.5.0.0.1"></rect>
                                                                    </g>
                                                                </svg>
                                                            </a>--><a class="product-inside__top-company-link"
                                                                      href="/bank/sovkombank/"
                                                                      data-reactid=".1.0.1:0.6"><img
                                                                        class="product-inside__top-pic"
                                                                        src="<?php the_field('main_bank_img'); ?>"
                                                                        data-reactid=".1.0.1:0.6.0"></a></div>
                                                        <div class="product-inside__calculator is-mobile-rates"
                                                             data-reactid=".1.0.1:1">
                                                            <div class="product-inside__calculator-col product-inside__calculator-col--controls animation fadeIn"
                                                                 data-reactid=".1.0.1:1.0">
                                                                <div class="slider-control calculator__slider-control calculator__slider-control--slider-sum"
                                                                     data-reactid=".1.0.1:1.0.0"><label
                                                                            class="form-control-label form-control-label--top"
                                                                            data-reactid=".1.0.1:1.0.0.0">Хочу
                                                                        приумножить сумму</label><input type="text"
                                                                                                        id="price"
                                                                                                        name="Amount"
                                                                                                        class="deposit-amount-input"
                                                                                                        maxlength="10"
                                                                                                        value="1 000 000"
                                                                                                        data-reactid=".1.0.1:1.0.0.1">
                                                                    <!--<div class="deposit-amount-slider-container"
                                                                         data-reactid=".1.0.1:1.0.0.2">
                                                                        <div class="deposit-amount-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                             data-reactid=".1.0.1:1.0.0.2.0">
                                                                            <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                                                 style="width: 33.8235%;"></div>
                                                                            <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                  tabindex="0"
                                                                                  style="left: 33.8235%;"></span></div>
                                                                    </div>-->
                                                                    <div id="slider-range"></div>
                                                                </div>
                                                                <div class="select-control calculator__select-control calculator__slider-control--select-currency"
                                                                     data-reactid=".1.0.1:1.0.1"><label
                                                                            class="select-control-label"
                                                                            data-reactid=".1.0.1:1.0.1.0">Валюта</label>
                                                                    <div class="ik_select select-control-inner--currency"
                                                                         style="position: relative;">
                                                                        <div class="ik_select_link select-control-inner--currency-link">
                                                                            <div id="ik_select_link_text-currency" class="ik_select_link_text">₽</div>
                                                                        </div>
                                                                        <div class="ik_select_dropdown select-control-inner--currency-dd"
                                                                             style="position: absolute; z-index: 10010; width: 100%; display: none;">
                                                                            <div class="ik_select_list"
                                                                                 style="position: relative;">
                                                                                <div class="ik_select_list_inner"
                                                                                     style="height: auto;">
                                                                                    <ul>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="1"><span
                                                                                                    class="ik_select_option_label">₽</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <select class="select-control-input"
                                                                                name="Currency"
                                                                                data-reactid=".1.0.1:1.0.1.1"
                                                                                style="position: absolute; margin: 0px; padding: 0px; top: 0px; left: -9999px; z-index: 10;">
                                                                            <option selected="" value="1" data-label="₽"
                                                                                    data-reactid=".1.0.1:1.0.1.1.$0=1slc=1Currency">
                                                                                ₽
                                                                            </option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="select-control calculator__select-control"
                                                                     data-reactid=".1.0.1:1.0.2"><label
                                                                            class="select-control-label"
                                                                            data-reactid=".1.0.1:1.0.2.0">Срок
                                                                        вклада</label>
                                                                    <div class="ik_select select-control-inner"
                                                                         style="position: relative;">
                                                                        <div class="ik_select_link select-control-inner-link">
                                                                            <div id="ik_select_link_text-month"
                                                                                 class="ik_select_link_text">Месяц
                                                                            </div>
                                                                        </div>
                                                                        <div class="ik_select_dropdown select-control-inner-dd"
                                                                             style="position: absolute; z-index: 10010; width: 100%; display: none;">
                                                                            <div class="ik_select_list"
                                                                                 style="position: relative;">
                                                                                <div class="ik_select_list_inner"
                                                                                     style="height: auto;">
                                                                                    <ul>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="0-31"><span
                                                                                                    class="ik_select_option_label">Месяц</span>
                                                                                        </li>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="0-91"><span
                                                                                                    class="ik_select_option_label">3 месяца</span>
                                                                                        </li>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="0-181"><span
                                                                                                    class="ik_select_option_label">Полгода</span>
                                                                                        </li>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="0-271"><span
                                                                                                    class="ik_select_option_label">9 месяцев</span>
                                                                                        </li>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="0-730"><span
                                                                                                    class="ik_select_option_label">2 года</span>
                                                                                        </li>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="0-1095"><span
                                                                                                    class="ik_select_option_label">3 года</span>
                                                                                        </li>
                                                                                        <li class="ik_select_option"
                                                                                            data-value="12-0"><span
                                                                                                    class="ik_select_option_label">Год</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <select class="select-control-input"
                                                                                name="Period"
                                                                                data-reactid=".1.0.1:1.0.2.1"
                                                                                style="position: absolute; margin: 0px; padding: 0px; top: 0px; left: -9999px; z-index: 10;">
                                                                            <option selected="" value="0-31"
                                                                                    data-label="Месяц"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$0=1slc=1Period">
                                                                                Месяц
                                                                            </option>
                                                                            <option value="0-91" data-label="3 месяца"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$1=1slc=1Period">
                                                                                3 месяца
                                                                            </option>
                                                                            <option value="0-181" data-label="Полгода"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$2=1slc=1Period">
                                                                                Полгода
                                                                            </option>
                                                                            <option value="0-271" data-label="9 месяцев"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$3=1slc=1Period">
                                                                                9 месяцев
                                                                            </option>
                                                                            <option value="0-730" data-label="2 года"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$4=1slc=1Period">
                                                                                2 года
                                                                            </option>
                                                                            <option value="0-1095" data-label="3 года"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$5=1slc=1Period">
                                                                                3 года
                                                                            </option>
                                                                            <option value="12-0" data-label="Год"
                                                                                    data-reactid=".1.0.1:1.0.2.1.$6=1slc=1Period">
                                                                                Год
                                                                            </option>
                                                                        </select></div>
                                                                </div>
                                                                <div class="slider-control calculator__slider-control slider-control--padding-top-22"
                                                                     data-reactid=".1.0.1:1.0.3"><label
                                                                            class="form-control-label form-control-label--top"
                                                                            data-reactid=".1.0.1:1.0.3.0">Ежемесячное
                                                                        пополнение</label><input type="text"
                                                                                                 id="price-2"
                                                                                                 name="RenewalAmount"
                                                                                                 class="deposit-amount-input"
                                                                                                 maxlength="10"
                                                                                                 value="0"
                                                                                                 data-reactid=".1.0.1:1.0.3.1">
                                                                    <!--<div class="deposit-amount-slider-container"
                                                                         data-reactid=".1.0.1:1.0.3.2">
                                                                        <div class="deposit-amount-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                                             data-reactid=".1.0.1:1.0.3.2.0">
                                                                            <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min"
                                                                                 style="width: 0%;"></div>
                                                                            <span class="ui-slider-handle ui-state-default ui-corner-all"
                                                                                  tabindex="0" style="left: 0%;"></span>
                                                                        </div>
                                                                    </div>-->
                                                                    <div id="slider-range-2"></div>
                                                                </div>
                                                                <div class="radio-control calculator__radio-control"
                                                                     data-reactid=".1.0.1:1.0.4"><label
                                                                            class="radio-control-label"
                                                                            data-reactid=".1.0.1:1.0.4.0">Выплата
                                                                        процентов на</label>
                                                                    <div class="radio-control-inner"
                                                                         data-reactid=".1.0.1:1.0.4.1"><span
                                                                                class="radio-control-inner--stub"
                                                                                data-reactid=".1.0.1:1.0.4.1.0">Другой счёт</span>
                                                                    </div>
                                                                </div>
                                                                <div class="calculator-col--controls__bottom"
                                                                     data-reactid=".1.0.1:1.0.5"><a href="#"
                                                                                                    class="product-inside__calculate-deposit"
                                                                                                    data-reactid=".1.0.1:1.0.5.0">Расчитать
                                                                        вклад</a></div>
                                                            </div>
                                                            <div class="product-inside__calculator-col product-inside__calculator-col--thin animation fadeIn"
                                                                 data-reactid=".1.0.1:1.2">
                                                                <div class="product-summary"
                                                                     data-reactid=".1.0.1:1.2.0">
                                                                    <div class="product-summary__label"
                                                                         data-reactid=".1.0.1:1.2.0.0">Доходность вклада
                                                                    </div>
                                                                    <!--<div class="product-summary__progress-bar"
                                                                         data-reactid=".1.0.1:1.2.0.1">
                                                                        <div class="product-summary__progress-bar-piece bg-grey"
                                                                             data-progress="99"
                                                                             data-reactid=".1.0.1:1.2.0.1.0"></div>
                                                                        <div class="product-summary__progress-bar-piece bg-blue"
                                                                             data-progress="0"
                                                                             data-reactid=".1.0.1:1.2.0.1.1"></div>
                                                                        <div class="product-summary__progress-bar-piece bg-green"
                                                                             data-progress="1"
                                                                             data-reactid=".1.0.1:1.2.0.1.2"></div>
                                                                    </div>-->
                                                                    <ul class="product-summary__details"
                                                                        data-reactid=".1.0.1:1.2.0.2">
                                                                        <li class="product-summary__details-item product-summary__details-item--grey"
                                                                            data-reactid=".1.0.1:1.2.0.2.0"><span
                                                                                    data-reactid=".1.0.1:1.2.0.2.0.0"><span
                                                                                        data-reactid=".1.0.1:1.2.0.2.0.0.0"><span
                                                                                            data-reactid=".1.0.1:1.2.0.2.0.0.0.0">1 000 000</span><span
                                                                                            data-reactid=".1.0.1:1.2.0.2.0.0.0.1"> </span><span
                                                                                            class="currency-symbol"
                                                                                            data-reactid=".1.0.1:1.2.0.2.0.0.0.2">₽</span></span></span><span
                                                                                    data-reactid=".1.0.1:1.2.0.2.0.1"> </span><span
                                                                                    class="product-summary__clarification"
                                                                                    data-reactid=".1.0.1:1.2.0.2.0.2">сумма вклада</span>
                                                                        </li>
                                                                        <li class="product-summary__details-item product-summary__details-item--green"
                                                                            data-reactid=".1.0.1:1.2.0.2.2"><span
                                                                                    data-reactid=".1.0.1:1.2.0.2.2.0"><span
                                                                                        data-reactid=".1.0.1:1.2.0.2.2.0.0"><span
                                                                                            data-reactid=".1.0.1:1.2.0.2.2.0.0.0">6 030</span><span
                                                                                            data-reactid=".1.0.1:1.2.0.2.2.0.0.1"> </span><span
                                                                                            class="currency-symbol"
                                                                                            data-reactid=".1.0.1:1.2.0.2.2.0.0.2">₽</span></span></span><span
                                                                                    data-reactid=".1.0.1:1.2.0.2.2.1"> </span><span
                                                                                    class="product-summary__clarification"
                                                                                    data-reactid=".1.0.1:1.2.0.2.2.2"><span
                                                                                        data-reactid=".1.0.1:1.2.0.2.2.2.0">начисленные</span><span
                                                                                        data-reactid=".1.0.1:1.2.0.2.2.2.1"> </span><span
                                                                                        class="hide-605"
                                                                                        data-reactid=".1.0.1:1.2.0.2.2.2.2">проценты</span><span
                                                                                        class="show-605"
                                                                                        data-reactid=".1.0.1:1.2.0.2.2.2.3">%</span></span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="product-summary__total"
                                                                         data-reactid=".1.0.1:1.2.0.3">
                                                                        <div class="product-summary__total-item"
                                                                             data-reactid=".1.0.1:1.2.0.3.0">
                                                                            <div class="product-summary__label product-summary__label--mobile-flex-order"
                                                                                 data-reactid=".1.0.1:1.2.0.3.0.0"><span
                                                                                        data-reactid=".1.0.1:1.2.0.3.0.0.0">Ставка</span><span
                                                                                        data-reactid=".1.0.1:1.2.0.3.0.0.1"> </span>
                                                                            </div>
                                                                            <span class="product-summary__total-value color-green"
                                                                                  data-reactid=".1.0.1:1.2.0.3.0.1"><?php the_field('rate'); ?></span>
                                                                        </div>
                                                                        <div class="product-summary__total-item"
                                                                             data-reactid=".1.0.1:1.2.0.3.1">
                                                                            <div class="product-summary__label product-summary__label--mobile-flex-order"
                                                                                 data-reactid=".1.0.1:1.2.0.3.1.0"><span
                                                                                        class="hide-320"
                                                                                        data-reactid=".1.0.1:1.2.0.3.1.0.0">В конце срока вы получите</span><span
                                                                                        class="show-320"
                                                                                        data-reactid=".1.0.1:1.2.0.3.1.0.1">Сумма в конце срока</span>
                                                                            </div>
                                                                            <span class="product-summary__total-value color-black"
                                                                                  data-reactid=".1.0.1:1.2.0.3.1.1"><span
                                                                                        data-reactid=".1.0.1:1.2.0.3.1.1.0"><span
                                                                                            data-reactid=".1.0.1:1.2.0.3.1.1.0.0">1 006 030</span><span
                                                                                            data-reactid=".1.0.1:1.2.0.3.1.1.0.1"> </span><span
                                                                                            class="currency-symbol"
                                                                                            data-reactid=".1.0.1:1.2.0.3.1.1.0.2">₽</span></span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="calculator-col--thin__bottom"
                                                                     data-reactid=".1.0.1:1.2.1"></div>
                                                            </div>
                                                            <div class="product-inside__calculator-col product-inside__calculator-col--conditions animation fadeIn"
                                                                 data-reactid=".1.0.1:1.3">
                                                                <div data-reactid=".1.0.1:1.3.0">
                                                                    <div class="ui-panel__container"
                                                                         data-reactid=".1.0.1:1.3.0.1:$0"><h3
                                                                                class="ui-panel__headline"
                                                                                data-reactid=".1.0.1:1.3.0.1:$0.0">
                                                                            Условия вклада</h3>
                                                                        <div class="ui-panel__subtitle ui-panel__subtitle--p-inline-block"
                                                                             data-reactid=".1.0.1:1.3.0.1:$0.1"><p>
                                                                                Срочный пополняемый вклад с выплатой
                                                                                процентов в конце срока для владельцев
                                                                                карты рассрочки «Халва», при выполнении
                                                                                следующих условий - совершение не менее
                                                                                5 покупок по «Халве» на сумму от 10 000
                                                                                рублей в любых магазинах ежемесячно и
                                                                                отсутствие просроченной задолженности по
                                                                                «Халве».</p></div>
                                                                        <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                               data-reactid=".1.0.1:1.3.0.1:$0.2">
                                                                            <tbody data-reactid=".1.0.1:1.3.0.1:$0.2.0">
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$0.2.0.$0">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$0.2.0.$0.0">
                                                                                    Валюта вклада
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$0.2.0.$0.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$0.2.0.$0.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$0.2.0.$0.1.0.1">
                                                                                            <span class="text"
                                                                                                  data-reactid=".1.0.1:1.3.0.1:$0.2.0.$0.1.0.1.1">рубль</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$0.2.0.$1">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$0.2.0.$1.0">
                                                                                    Первоначальный взнос
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$0.2.0.$1.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$0.2.0.$1.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$0.2.0.$1.1.0.1">
                                                                                            <span class="text"
                                                                                                  data-reactid=".1.0.1:1.3.0.1:$0.2.0.$1.1.0.1.1">от&nbsp;50&nbsp;000&nbsp;<span
                                                                                                        class="rouble"><span
                                                                                                            class="rouble__default">руб.</span></span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$0.2.0.$2">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$0.2.0.$2.0">
                                                                                    Срок
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$0.2.0.$2.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$0.2.0.$2.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$0.2.0.$2.1.0.1">
                                                                                            <span class="text"
                                                                                                  data-reactid=".1.0.1:1.3.0.1:$0.2.0.$2.1.0.1.1">Срок от 31 дня до 1095 дней</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="ui-panel__container"
                                                                         data-reactid=".1.0.1:1.3.0.1:$1"><h3
                                                                                class="ui-panel__headline"
                                                                                data-reactid=".1.0.1:1.3.0.1:$1.0">
                                                                            Параметры</h3>
                                                                        <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                               data-reactid=".1.0.1:1.3.0.1:$1.2">
                                                                            <tbody data-reactid=".1.0.1:1.3.0.1:$1.2.0">
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0.0">
                                                                                    Пополнение
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0.1.0.0">Есть</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0.1.0.1"><span
                                                                                                    class="text"
                                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$0.1.0.1.1"><p>Минимальная сумма дополнительных взносов - 1 000 рублей. </p>
<p>Сумма всех дополнительных взносов не может превышать первоначальную сумму вклада.</p></span></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$1.2.0.$1">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$1.0">
                                                                                    Частичное снятие
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$1.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$1.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$1.2.0.$1.1.0.0">Нет</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$1.1.0.1"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$1.2.0.$2">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$2.0">
                                                                                    Досрочное снятие
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$2.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$2.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$2.1.0.1"><span
                                                                                                    class="text"
                                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$2.1.0.1.1">По ставке «До востребования».
</span></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$1.2.0.$3">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$3.0">
                                                                                    Пролонгация
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$3.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$3.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$1.2.0.$3.1.0.0">Есть</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$3.1.0.1"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$1.2.0.$4">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$4.0">
                                                                                    Место проведения операций
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$1.2.0.$4.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$4.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$1.2.0.$4.1.0.1">
                                                                                            <span class="text"
                                                                                                  data-reactid=".1.0.1:1.3.0.1:$1.2.0.$4.1.0.1.1">в любом отделении банка</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="ui-panel__container"
                                                                         data-reactid=".1.0.1:1.3.0.1:$2"><h3
                                                                                class="ui-panel__headline"
                                                                                data-reactid=".1.0.1:1.3.0.1:$2.0">
                                                                            Выплата процентов</h3>
                                                                        <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                               data-reactid=".1.0.1:1.3.0.1:$2.2">
                                                                            <tbody data-reactid=".1.0.1:1.3.0.1:$2.2.0">
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$2.2.0.$0">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$0.0">
                                                                                    На отдельный счёт
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$0.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$0.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$2.2.0.$0.1.0.0">Нет</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$0.1.0.1"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$2.2.0.$1">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$1.0">
                                                                                    На счёт банковской карты
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$1.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$1.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$2.2.0.$1.1.0.0">Есть</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$1.1.0.1"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$2.2.0.$2">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$2.0">
                                                                                    Капитализация
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$2.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$2.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$2.2.0.$2.1.0.0">Нет</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$2.1.0.1"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$2.2.0.$3">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$3.0">
                                                                                    Периодичность выплаты процентов
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$3.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$3.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$3.1.0.1">
                                                                                            <span class="text"
                                                                                                  data-reactid=".1.0.1:1.3.0.1:$2.2.0.$3.1.0.1.1">в конце основного (пролонгированного) срока</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$2.2.0.$4">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$4.0">
                                                                                    Прогрессивное начисление
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$2.2.0.$4.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$4.1.0">
                                                                                        <span class="text"
                                                                                              data-reactid=".1.0.1:1.3.0.1:$2.2.0.$4.1.0.0">Нет</span>
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$2.2.0.$4.1.0.1"></div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="ui-panel__container"
                                                                         data-reactid=".1.0.1:1.3.0.1:$3"><h3
                                                                                class="ui-panel__headline"
                                                                                data-reactid=".1.0.1:1.3.0.1:$3.0">
                                                                            Дополнительно</h3>
                                                                        <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                               data-reactid=".1.0.1:1.3.0.1:$3.2">
                                                                            <tbody data-reactid=".1.0.1:1.3.0.1:$3.2.0">
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.0.1:1.3.0.1:$3.2.0.$0">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$3.2.0.$0.0">
                                                                                    Дополнительные условия
                                                                                </td>
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.0.1:1.3.0.1:$3.2.0.$0.1">
                                                                                    <div data-reactid=".1.0.1:1.3.0.1:$3.2.0.$0.1.0">
                                                                                        <div data-reactid=".1.0.1:1.3.0.1:$3.2.0.$0.1.0.1">
                                                                                            <span class="text"
                                                                                                  data-reactid=".1.0.1:1.3.0.1:$3.2.0.$0.1.0.1.1">Проценты выплачиваются на карту «Халва».</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <a href="/Goto.ashx?type=Saving&amp;id=37743"
                                                                       class="link mb-20 mt-40 d-ib" target="_blank"
                                                                       data-reactid=".1.0.1:1.3.0.2">Подробнее на сайте
                                                                        банка</a></div>
                                                                <a href=""
                                                                   class="ui-panel__more ui-panel__more--is-expanded"
                                                                   data-reactid=".1.0.1:1.3.1">Скрыть полные условия
                                                                    вклада</a></div>
                                                        </div>
                                                    </div>

                                                    <div class="ui-panel" data-reactid=".1.2"><h3
                                                                class="ui-panel__headline" data-reactid=".1.2.0">
                                                            <?php the_field('block_2_title'); ?></h3>
                                                        <div data-reactid=".1.2.1:1">
                                                            <div class="animation fadeIn" data-reactid=".1.2.1:1.$0">
                                                                <div class="table-gradient"
                                                                     data-reactid=".1.2.1:1.$0.0">
                                                                    <div class="table-container"
                                                                         data-reactid=".1.2.1:1.$0.0.0">
                                                                        <table class="table-light table-light--multicolumn product-inside__table-light"
                                                                               data-reactid=".1.2.1:1.$0.0.0.0">
                                                                            <tbody data-reactid=".1.2.1:1.$0.0.0.0.0">
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.2.1:1.$0.0.0.0.0.0">
                                                                                <th class="table-light__cell-header table-light__cell-header--currency"
                                                                                    data-reactid=".1.2.1:1.$0.0.0.0.0.0.0">
                                                                                    <?php the_field('block_2_line_1_title'); ?>
                                                                                </th>
                                                                                <?php if (get_field('block_2_line_1_items')) {
                                                                                    foreach (get_field('block_2_line_1_items') as $item) { ?>
                                                                                        <th class="table-light__cell-header">
                                                                                            <span><?= $item['text']; ?></span>
                                                                                        </th>
                                                                                    <?php }
                                                                                } ?>
                                                                            </tr>
                                                                            <tr class="table-light__row"
                                                                                data-reactid=".1.2.1:1.$0.0.0.0.0.1:$от&amp;nbsp;50&nbsp;000&amp;nbsp;<span class=0&quot;rouble&quot;><span class=0&quot;rouble__default&quot;>руб=1</span></span>">
                                                                                <td class="table-light__cell"
                                                                                    data-reactid=".1.2.1:1.$0.0.0.0.0.1:$от&amp;nbsp;50&nbsp;000&amp;nbsp;<span class=0&quot;rouble&quot;><span class=0&quot;rouble__default&quot;>руб=1</span></span>.0">
                                                                                    <span data-reactid=".1.2.1:1.$0.0.0.0.0.1:$от&amp;nbsp;50&nbsp;000&amp;nbsp;<span class=0&quot;rouble&quot;><span class=0&quot;rouble__default&quot;>руб=1</span></span>.0.0"><?php the_field('block_2_line_2_title'); ?>
                                                                                        &nbsp;<span
                                                                                                class="rouble"><span
                                                                                                    class="rouble__default">руб.</span></span></span>
                                                                                </td>
                                                                                <?php if (get_field('block_2_line_2_items')) {
                                                                                    foreach (get_field('block_2_line_2_items') as $item) { ?>
                                                                                        <td class="table-light__cell">
                                                                                            <span><?= $item['text']; ?></span>
                                                                                        </td>
                                                                                    <?php }
                                                                                } ?>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ui-panel ui-panel--no-padding-bottom description-parameters product-inside__table-light--savings"
                                                         data-reactid=".1.3">
                                                        <div data-reactid=".1.3.1">
                                                            <div class="ui-panel__container" data-reactid=".1.3.1.1:$0">
                                                                <h3 class="ui-panel__headline"
                                                                    data-reactid=".1.3.1.1:$0.0"><?php the_field('block_3_title'); ?></h3>
                                                                <div class="ui-panel__subtitle ui-panel__subtitle--p-inline-block"
                                                                     data-reactid=".1.3.1.1:$0.1">
                                                                    <p><?php the_field('block_3_desc'); ?></p></div>
                                                                <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                       data-reactid=".1.3.1.1:$0.2">
                                                                    <tbody data-reactid=".1.3.1.1:$0.2.0">
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$0.2.0.$0">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$0.2.0.$0.0">Валюта
                                                                            вклада
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$0.2.0.$0.1">
                                                                            <div data-reactid=".1.3.1.1:$0.2.0.$0.1.0">
                                                                                <div data-reactid=".1.3.1.1:$0.2.0.$0.1.0.1">
                                                                                    <span class="text"
                                                                                          data-reactid=".1.3.1.1:$0.2.0.$0.1.0.1.1"><?php the_field('block_3_currency'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$0.2.0.$1">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$0.2.0.$1.0">
                                                                            Первоначальный взнос
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$0.2.0.$1.1">
                                                                            <div data-reactid=".1.3.1.1:$0.2.0.$1.1.0">
                                                                                <div data-reactid=".1.3.1.1:$0.2.0.$1.1.0.1">
                                                                                    <span class="text"
                                                                                          data-reactid=".1.3.1.1:$0.2.0.$1.1.0.1.1"><?php the_field('block_3_initial_fee'); ?>
                                                                                        &nbsp;<span
                                                                                                class="rouble"><span
                                                                                                    class="rouble__default">руб.</span></span></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$0.2.0.$2">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$0.2.0.$2.0">Срок
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$0.2.0.$2.1">
                                                                            <div data-reactid=".1.3.1.1:$0.2.0.$2.1.0">
                                                                                <div data-reactid=".1.3.1.1:$0.2.0.$2.1.0.1">
                                                                                    <span class="text"
                                                                                          data-reactid=".1.3.1.1:$0.2.0.$2.1.0.1.1"><?php the_field('block_3_term'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="ui-panel__container" data-reactid=".1.3.1.1:$1">
                                                                <h3 class="ui-panel__headline"
                                                                    data-reactid=".1.3.1.1:$1.0"><?php the_field('block_3_subtitle_1'); ?></h3>
                                                                <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                       data-reactid=".1.3.1.1:$1.2">
                                                                    <tbody data-reactid=".1.3.1.1:$1.2.0">
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$1.2.0.$0">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$0.0">
                                                                            Пополнение
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$0.1">
                                                                            <div data-reactid=".1.3.1.1:$1.2.0.$0.1.0">
                                                                                <!--<span class="text"
                                                                                      data-reactid=".1.3.1.1:$1.2.0.$0.1.0.0">Есть</span>-->
                                                                                <div data-reactid=".1.3.1.1:$1.2.0.$0.1.0.1"><span
                                                                                            class="text"
                                                                                            data-reactid=".1.3.1.1:$1.2.0.$0.1.0.1.1"><?php the_field('block_3_replenishment'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$1.2.0.$1">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$1.0">
                                                                            Частичное снятие
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$1.1">
                                                                            <div data-reactid=".1.3.1.1:$1.2.0.$1.1.0">
                                                                                <span class="text"
                                                                                      data-reactid=".1.3.1.1:$1.2.0.$1.1.0.0"><?php the_field('block_3_withdraw_partial'); ?></span>
                                                                                <div data-reactid=".1.3.1.1:$1.2.0.$1.1.0.1"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$1.2.0.$2">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$2.0">
                                                                            Досрочное снятие
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$2.1">
                                                                            <div data-reactid=".1.3.1.1:$1.2.0.$2.1.0">
                                                                                <div data-reactid=".1.3.1.1:$1.2.0.$2.1.0.1"><span
                                                                                            class="text"
                                                                                            data-reactid=".1.3.1.1:$1.2.0.$2.1.0.1.1"><?php the_field('block_3_withdraw_early'); ?>
</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$1.2.0.$3">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$3.0">
                                                                            Пролонгация
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$3.1">
                                                                            <div data-reactid=".1.3.1.1:$1.2.0.$3.1.0">
                                                                                <span class="text"
                                                                                      data-reactid=".1.3.1.1:$1.2.0.$3.1.0.0"><?php the_field('block_3_prolongation'); ?></span>
                                                                                <div data-reactid=".1.3.1.1:$1.2.0.$3.1.0.1"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$1.2.0.$4">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$4.0">Место
                                                                            проведения операций
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$1.2.0.$4.1">
                                                                            <div data-reactid=".1.3.1.1:$1.2.0.$4.1.0">
                                                                                <div data-reactid=".1.3.1.1:$1.2.0.$4.1.0.1">
                                                                                    <span class="text"
                                                                                          data-reactid=".1.3.1.1:$1.2.0.$4.1.0.1.1"><?php the_field('block_3_location_of_operations'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="ui-panel__container" data-reactid=".1.3.1.1:$2">
                                                                <h3 class="ui-panel__headline"
                                                                    data-reactid=".1.3.1.1:$2.0"><?php the_field('block_3_subtitle_2'); ?></h3>
                                                                <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                       data-reactid=".1.3.1.1:$2.2">
                                                                    <tbody data-reactid=".1.3.1.1:$2.2.0">
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$2.2.0.$0">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$0.0">На
                                                                            отдельный счёт
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$0.1">
                                                                            <div data-reactid=".1.3.1.1:$2.2.0.$0.1.0">
                                                                                <span class="text"
                                                                                      data-reactid=".1.3.1.1:$2.2.0.$0.1.0.0"><?php the_field('block_3_separate_account'); ?></span>
                                                                                <div data-reactid=".1.3.1.1:$2.2.0.$0.1.0.1"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$2.2.0.$1">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$1.0">На счёт
                                                                            банковской карты
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$1.1">
                                                                            <div data-reactid=".1.3.1.1:$2.2.0.$1.1.0">
                                                                                <span class="text"
                                                                                      data-reactid=".1.3.1.1:$2.2.0.$1.1.0.0"><?php the_field('block_3_bank_card_account'); ?></span>
                                                                                <div data-reactid=".1.3.1.1:$2.2.0.$1.1.0.1"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$2.2.0.$2">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$2.0">
                                                                            Капитализация
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$2.1">
                                                                            <div data-reactid=".1.3.1.1:$2.2.0.$2.1.0">
                                                                                <span class="text"
                                                                                      data-reactid=".1.3.1.1:$2.2.0.$2.1.0.0"><?php the_field('block_3_capitalization'); ?></span>
                                                                                <div data-reactid=".1.3.1.1:$2.2.0.$2.1.0.1"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$2.2.0.$3">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$3.0">
                                                                            Периодичность выплаты процентов
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$3.1">
                                                                            <div data-reactid=".1.3.1.1:$2.2.0.$3.1.0">
                                                                                <div data-reactid=".1.3.1.1:$2.2.0.$3.1.0.1">
                                                                                    <span class="text"
                                                                                          data-reactid=".1.3.1.1:$2.2.0.$3.1.0.1.1"><?php the_field('block_3_periodicity_of_payment_of_interest'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$2.2.0.$4">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$4.0">
                                                                            Прогрессивное начисление
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$2.2.0.$4.1">
                                                                            <div data-reactid=".1.3.1.1:$2.2.0.$4.1.0">
                                                                                <span class="text"
                                                                                      data-reactid=".1.3.1.1:$2.2.0.$4.1.0.0"><?php the_field('block_3_progressive_accruals'); ?></span>
                                                                                <div data-reactid=".1.3.1.1:$2.2.0.$4.1.0.1"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="ui-panel__container" data-reactid=".1.3.1.1:$3">
                                                                <h3 class="ui-panel__headline"
                                                                    data-reactid=".1.3.1.1:$3.0"><?php the_field('block_3_subtitle_3'); ?></h3>
                                                                <table class="table-light table-light--small-padding product-inside__table-light animation fadeIn"
                                                                       data-reactid=".1.3.1.1:$3.2">
                                                                    <tbody data-reactid=".1.3.1.1:$3.2.0">
                                                                    <tr class="table-light__row"
                                                                        data-reactid=".1.3.1.1:$3.2.0.$0">
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$3.2.0.$0.0">
                                                                            Дополнительные условия
                                                                        </td>
                                                                        <td class="table-light__cell"
                                                                            data-reactid=".1.3.1.1:$3.2.0.$0.1">
                                                                            <div data-reactid=".1.3.1.1:$3.2.0.$0.1.0">
                                                                                <div data-reactid=".1.3.1.1:$3.2.0.$0.1.0.1">
                                                                                    <span class="text"
                                                                                          data-reactid=".1.3.1.1:$3.2.0.$0.1.0.1.1"><?php the_field('block_3_additional_conditions'); ?></span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <a href="<?php the_field('block_3_bank_link'); ?>"
                                                               class="link mb-20 mt-40 d-ib" target="_blank"
                                                               data-reactid=".1.3.1.2">Подробнее на сайте банка</a>
                                                        </div>
                                                        <!--<a href="" class="ui-panel__more ui-panel__more--is-expanded"
                                                           data-reactid=".1.3.2">Скрыть полные условия вклада</a>-->
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="responsive-copy-container company-contacts-mobile">
                                                <div class="company-contacts-mobile__row">
                                                    <div class="company-contacts-mobile__col BankContactsContainer">
                                                        <div class="sidebar-content-container serp-advices">
                                                            <div class="serp-advices-inner bank-offices-block">
                                                                <div class="heading-small heading-small--border-bottom">
                                                                    <a href="/bank/sovkombank/otdelenija/"><?php the_field('sidebar_title'); ?></a>
                                                                </div>
                                                                <div class="map-company-info map-company-info--two-col">
                                                                    <div class="map-company-info__col">
                                                                        <a class="link"
                                                                           href="/bank/sovkombank/otdelenija/"
                                                                           target="_blank">
                                                                            <span class="map-company-info__val"><?php the_field('sidebar_department_number'); ?></span>
                                                                            <span class="map-company-info__name"><?php the_field('sidebar_department_text'); ?></span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="map-company-info__col">
                                                                        <a class="link"
                                                                           href="/bank/sovkombank/bankomaty/"
                                                                           target="_blank">
                                                                            <span class="map-company-info__val"><?php the_field('sidebar_atm_number'); ?></span>
                                                                            <span class="map-company-info__name"><?php the_field('sidebar_atm_text'); ?></span>
                                                                        </a>
                                                                    </div>
                                                                </div>


                                                                <!--<a style="display: none;" class="map-stub-container"
                                                                   href="/bank/sovkombank/otdelenija/">
                                                                    <img src="//static-maps.yandex.ru/1.x/?l=map&amp;size=300,172&amp;ll=37.619899,55.753676&amp;z=10&amp;pt=37.621282,55.698878,org~37.62934,55.739103,org~37.571597,55.76097,org~37.548878,55.686609,org~37.588934,55.899245,org~37.533858,55.798885,org~37.516036,55.646457,org~37.400809,55.805356,org~37.720232,55.783463,org~37.416601,55.741835,org~37.571588,55.684199,org~37.66742,55.868809,org~37.731074,55.814861,org~37.573717,55.567535,org~37.658643,55.708475,org~37.66521,55.73481,org~37.629502,55.778988,org~37.745915,55.650505,org~37.492051,55.794593,org~37.355534,55.854158,org~37.662308,55.885161,org~37.301608,55.490039,org~37.732763,55.612039,org~37.787686,55.752708,org~37.798511,55.795535,org~37.58146,55.81827,org~37.746274,55.614571,org~37.61441,55.793698,org~37.595707,55.58383,org~37.438206,55.852192,org~37.763567,55.704331,org~37.662425,55.679138,org~37.607314,55.864955,org~37.50036,55.817092,org~37.598878,55.651572,org~37.59524,55.582986,org~37.548088,55.752587,org~37.615794,55.653761,org~37.620761,55.709028,org~37.799805,55.809803,org~37.816396,55.74824,org~37.44409,55.850408,org~37.476169,55.727927,org~37.483023,55.799588,org~37.48358,55.856401,org~37.491063,55.683752,org~37.765758,55.704134,org~37.60593,55.622604,org~37.787075,55.792736,org~37.659739,55.845203,org~37.654287,55.709992,org~37.834507,55.704585,org~37.487362,55.609146,org~37.715686,55.617271,org~37.606209,55.613483,org~37.4978,55.823292,org~37.538575,55.74903,org~37.381585,55.766668,org~37.530409,55.790464,org~37.520806,55.777272,org"
                                                                         alt="">

                                                                </a>-->

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="company-contacts-mobile__col"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <script>
                                        var blockReview = document.getElementById('blockReviews');
                                        if (blockReview) {
                                            $('#companyReviewsBlock').slick({
                                                arrows: true,
                                                dots: true,
                                                dotsClass: 'review-slider__dots',
                                                prevArrow: '<button type="button" class="slider-arrow slider-arrow--prev">Назад</button>',
                                                nextArrow: '<button type="button" class="slider-arrow slider-arrow--next">Вперед</button>'
                                            });
                                            $('.slider-arrow').css("font-size", "0px");

                                            if (blockReview.querySelector('.review-slider__write-review')) {
                                                document.querySelector('.review-slider__write-review').addEventListener('click', function () {
                                                    if (window.yaCounter159737) {
                                                        yaCounter159737.reachGoal('calculator_add_review');
                                                    }
                                                });
                                            }
                                            if (blockReview.querySelector('.ui-panel__more')) {
                                                document.querySelector('.ui-panel__more').addEventListener('click', function () {
                                                    if (window.yaCounter159737) {
                                                        yaCounter159737.reachGoal('calculator_all_review');
                                                    }
                                                });
                                            }
                                            if (blockReview.querySelector('.slider-arrow')) {
                                                document.querySelector('.slider-arrow--prev').addEventListener('click', function () {
                                                    if (window.yaCounter159737) {
                                                        yaCounter159737.reachGoal('calculator_left_review');
                                                    }
                                                });
                                                document.querySelector('.slider-arrow--next').addEventListener('click', function () {
                                                    if (window.yaCounter159737) {
                                                        yaCounter159737.reachGoal('calculator_right_review');
                                                    }
                                                });
                                            }

                                        }

                                        $(function () {
                                            function slickify() {
                                                var slickContainer = $('.partners-logo-list__col--logos').not('.slick-initialized');

                                                slickContainer.slick({
                                                    prevArrow: '<button type="button" class="slick-arrow-thin--prev">Previous</button>',
                                                    nextArrow: '<button type="button" class="slick-arrow-thin--next">Next</button>',
                                                    variableWidth: true,
                                                    slidesPerRow: 3,
                                                    slidesToShow: 6,
                                                    slidesToScroll: 1,
                                                    draggable: true,
                                                    infinite: false,
                                                    responsive: [
                                                        {
                                                            breakpoint: 1024,
                                                            settings: 'unslick'
                                                        }
                                                    ]
                                                });
                                                /*slickContainer.on('afterChange', function(event, slick, currentSlide){
                                                 console.log(slick, currentSlide)
                                                 if( currentSlide === slick.slideCount ){
                                                 this.slickGoTo('slickGoTo', 0);
                                                 };
                                                 });*/
                                            }

                                            slickify();
                                            $(window).resize(function () {
                                                var $windowWidth = $(window).width();
                                                if ($windowWidth > 1024) {
                                                    slickify();
                                                }
                                            });


                                            //			$('.ui-button-slider').css("font-size", "0px");
                                        })


                                    </script>


                                </div>
                            </div>

                            <div class="l-sidebar l-sidebar--display-block">

                                <div class="sidebar-content-container serp-advices">
                                    <div class="serp-advices-inner bank-offices-block">
                                        <div class="heading-small heading-small--border-bottom"><a
                                                    href="/bank/sovkombank/otdelenija/">Отделения и банкоматы</a>
                                        </div>
                                        <div class="map-company-info map-company-info--two-col">
                                            <div class="map-company-info__col">
                                                <a class="link" href="/bank/sovkombank/otdelenija/" target="_blank">
                                                    <span class="map-company-info__val">60</span>
                                                    <span class="map-company-info__name">отделений </span>
                                                </a>
                                            </div>
                                            <div class="map-company-info__col">
                                                <a class="link" href="/bank/sovkombank/bankomaty/" target="_blank">
                                                    <span class="map-company-info__val">41</span>
                                                    <span class="map-company-info__name">банкомат</span>
                                                </a>
                                            </div>
                                        </div>


                                        <!--<a class="map-stub-container" href="/bank/sovkombank/otdelenija/">
                                            <img src="//static-maps.yandex.ru/1.x/?l=map&amp;size=300,172&amp;ll=37.619899,55.753676&amp;z=10&amp;pt=37.621282,55.698878,org~37.62934,55.739103,org~37.571597,55.76097,org~37.548878,55.686609,org~37.588934,55.899245,org~37.533858,55.798885,org~37.516036,55.646457,org~37.400809,55.805356,org~37.720232,55.783463,org~37.416601,55.741835,org~37.571588,55.684199,org~37.66742,55.868809,org~37.731074,55.814861,org~37.573717,55.567535,org~37.658643,55.708475,org~37.66521,55.73481,org~37.629502,55.778988,org~37.745915,55.650505,org~37.492051,55.794593,org~37.355534,55.854158,org~37.662308,55.885161,org~37.301608,55.490039,org~37.732763,55.612039,org~37.787686,55.752708,org~37.798511,55.795535,org~37.58146,55.81827,org~37.746274,55.614571,org~37.61441,55.793698,org~37.595707,55.58383,org~37.438206,55.852192,org~37.763567,55.704331,org~37.662425,55.679138,org~37.607314,55.864955,org~37.50036,55.817092,org~37.598878,55.651572,org~37.59524,55.582986,org~37.548088,55.752587,org~37.615794,55.653761,org~37.620761,55.709028,org~37.799805,55.809803,org~37.816396,55.74824,org~37.44409,55.850408,org~37.476169,55.727927,org~37.483023,55.799588,org~37.48358,55.856401,org~37.491063,55.683752,org~37.765758,55.704134,org~37.60593,55.622604,org~37.787075,55.792736,org~37.659739,55.845203,org~37.654287,55.709992,org~37.834507,55.704585,org~37.487362,55.609146,org~37.715686,55.617271,org~37.606209,55.613483,org~37.4978,55.823292,org~37.538575,55.74903,org~37.381585,55.766668,org~37.530409,55.790464,org~37.520806,55.777272,org"
                                                 alt="">

                                        </a>-->

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>
                <!-- / body-branding-inner-->

            </section>

        </div>
    </div>

</div>

<style>
    #add_payment_method .cart-collaterals .cart_totals table, .woocommerce table.shop_table, .woocommerce-cart .cart-collaterals .cart_totals table, .woocommerce-checkout .cart-collaterals .cart_totals table, table:not([id^=wp-calendar]):not(.ui-datepicker-calendar) {
        border: none !important;
    }

    .table-light__cell-header,
    .table-light__cell {
        border: none !important;
        border-bottom: 1px solid #e0e0e0 !important;
    }

    .table-light__cell-header {
        font-size: 14px !important;
        line-height: 24px !important;
        color: #a7a7a7a !important;
    }

    .table-light__cell {
        font-size: 16px !important;
        line-height: 25px !important;
        color: #363d42 !important;
    }

    .table-light__row:last-child .table-light__cell-header,
    .table-light__row:last-child .table-light__cell {
        border-bottom: none !important;
    }

    .table-light__cell-header {
        font-size: 14px !important;
        color: #a7a7a7 !important;
        font-weight: 400 !important;
        padding-bottom: 16px !important;
        padding-right: 5px !important;
        vertical-align: top !important;
        max-width: 70px !important;
        text-align: left !important;
        text-transform: none !important;
        letter-spacing: 0 !important;
    }

    @media screen and (max-width: 767px) {
        .table-light--small-padding .table-light__row {
            /*border-bottom: 0 !important;*/
            /*padding-top: 0 !important;*/
            /*padding-bottom: 0 !important;*/
        }

        .table-light__cell-header, .table-light__cell {
            border-bottom: none !important;
        }

        #add_payment_method .cart-collaterals .cart_totals table td, #add_payment_method .cart-collaterals .cart_totals table th, .woocommerce table.shop_table td, .woocommerce table.shop_table th, .woocommerce-cart .cart-collaterals .cart_totals table td, .woocommerce-cart .cart-collaterals .cart_totals table th, .woocommerce-checkout .cart-collaterals .cart_totals table td, .woocommerce-checkout .cart-collaterals .cart_totals table th, table:not([id^=wp-calendar]):not(.ui-datepicker-calendar) td, table:not([id^=wp-calendar]):not(.ui-datepicker-calendar) th {
            padding: 0 !important;
        }

        .bank-product-item__table-light-header {
            font-size: 14px !important;
        }
    }
</style>

<script>
    jQuery('#tariffs-full-list-button').click(function () {
        jQuery('#tariffs-full-list').toggleClass('expandable-block-content-expanded');
        jQuery('#tariffs-full-list-button-show').toggle();
        jQuery('#tariffs-full-list-button-hide').toggle();
    });

    jQuery('#conditions-full-list-button').click(function () {
        jQuery('#conditions-full-list').toggleClass('expandable-block-content-expanded');
        jQuery('#conditions-full-list-button-show').toggle();
        jQuery('#conditions-full-list-button-hide').toggle();
    });
</script>

<!--<script defer="" src="--><? //= get_template_directory_uri(); ?><!--/assets/front/js/vendor.fde6d08a.js" charset="UTF-8"></script>-->
<!--<script defer="" src="--><? //= get_template_directory_uri(); ?><!--/assets/front/js/common.47c9289a.js" charset="UTF-8"></script>-->
<!--<script defer="" src="--><? //= get_template_directory_uri(); ?><!--/assets/front/js/sravni-js.js" charset="UTF-8"></script>-->
<!--</body>
</html>-->

<div id="ik_select_link_text-month-list" class="ik_select_dropdown select-control-inner-dd transition animate hidden"
     style="position: absolute; z-index: 10010; width: 410px; display: block; left: 84.5px; top: 446px;">
    <div class="ik_select_list" style="position: relative;">
        <div class="ik_select_list_inner" style="height: auto;">
            <ul>
                <li class="ik_select_option ik_select_active" data-value="0-31"><span class="ik_select_option_label">Месяц</span>
                </li>
                <li class="ik_select_option" data-value="0-91"><span class="ik_select_option_label">3 месяца</span></li>
                <li class="ik_select_option" data-value="0-181"><span class="ik_select_option_label">Полгода</span>
                </li>
                <li class="ik_select_option" data-value="0-271"><span class="ik_select_option_label">9 месяцев</span>
                </li>
                <li class="ik_select_option" data-value="0-730"><span class="ik_select_option_label">2 года</span></li>
                <li class="ik_select_option" data-value="0-1095"><span class="ik_select_option_label">3 года</span></li>
            </ul>
        </div>
    </div>
</div>

<div id="ik_select_link_text-currency-list" class="ik_select_dropdown select-control-inner--currency-dd transition animate hidden"
     style="position: absolute; z-index: 10010; width: 50px; display: block; left: 444.5px; top: 404px;">
    <div class="ik_select_list" style="position: relative;">
        <div class="ik_select_list_inner" style="height: auto;">
            <ul>
                <li class="ik_select_option ik_select_active ik_select_hover" data-value="1"><span
                            class="ik_select_option_label">₽</span></li>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<link rel='stylesheet' id='kr_jquery-ui-css'
      href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css?ver=4.9.3' type='text/css'
      media='all'/>
<script type='text/javascript'
        src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript'
        src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'
        src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/js/jquery-ui.js?ver=4.9.3'></script>
<script type='text/javascript'
        src='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/ui/jquery.ui.touch-punch.js?ver=4.9.3'></script>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/front/css/jquery-ui-for-autocomp-wrap.css">
<link rel='stylesheet' id='kr_style-css'
      href='https://xn-----6kccbugwdmdcrtidm5a5byn.xn--p1ai/wp-content/themes/customizr/assets/front/css/kredit_theme/css/style.css?ver=4.9.3'
      type='text/css' media='all'/>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<script>
    jQuery("#slider-range").slider({
        range: true,
        min: 1,
        max: 10000,
        values: [1, 500],
        step: 1,
        slide: function (event, ui) {
            jQuery("#price").val(ui.values[1] * 1000);
            // monthlyPayment();
            // jQuery("#slider-range_dop").slider("option", "values", [1, ui.values[1] * 1000]);
            // document.getElementById('price_dop').value = ui.values[1] * 1000;
            // Get_PotrKr();
        }
    });
    jQuery("#price").val(jQuery("#slider-range").slider("values", 1) * 1000);

    jQuery("#slider-range-2").slider({
        range: true,
        min: 1,
        max: 1000,
        values: [1, 500],
        step: 1,
        slide: function (event, ui) {
            jQuery("#price-2").val(ui.values[1] * 1000);
            // monthlyPayment();
            // jQuery("#slider-range_dop").slider("option", "values", [1, ui.values[1] * 1000]);
            // document.getElementById('price_dop').value = ui.values[1] * 1000;
            // Get_PotrKr();
        }
    });
    jQuery("#price-2").val(jQuery("#slider-range-2").slider("values", 1) * 1000);

    jQuery('#ik_select_link_text-month').click(function () {
        jQuery('#ik_select_link_text-month-list').toggleClass('hidden');
    });

    jQuery('#ik_select_link_text-month-list .ik_select_option span').click(function () {

        jQuery('#ik_select_link_text-month').html(jQuery(this).html());
        jQuery('#ik_select_link_text-month-list').toggleClass('hidden');
    });

    jQuery('#ik_select_link_text-currency').click(function () {
        jQuery('#ik_select_link_text-currency-list').toggleClass('hidden');
    });

    jQuery('#ik_select_link_text-currency-list .ik_select_option span').click(function () {

        // jQuery('#ik_select_link_text-currency').html(jQuery(this).html());
        jQuery('#ik_select_link_text-currency-list').toggleClass('hidden');
    });
</script>
<style>

    .ik_select_option:hover {
        background: #cbefff;
    }

    .slider-control .ui-slider-horizontal .ui-slider-handle {
        top: -3px;
    }

    .ui-slider.ui-corner-all {
        margin-top: 12px;
        margin-left: 0;
    }

    .ui-slider-horizontal .ui-slider-range {
        height: 3px;
    }

    .slider-control .ui-widget-content:before {
        bottom: -1px;
        left: 0;
    }

    #slider-range-2 .ui-slider-handle.ui-corner-all.ui-state-default:nth-child(2) {
        display: none;
    }
</style>
