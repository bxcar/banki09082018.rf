<?php
/*
* Template Name: consumer-credit
*/
get_header();
?>
<link rel="manifest" href="/manifest.json">
<!--<link href="//f.sravni.ru/dist/common.b4faa07d.css" rel="stylesheet" type="text/css" charset="UTF-8">-->
<link href="<?= get_template_directory_uri(); ?>/assets/front/css/sravni-consumercredit.css" rel="stylesheet"
      type="text/css" charset="UTF-8">
<script src="https://cdn.ravenjs.com/3.23.3/raven.min.js" async=""></script>
<!--<script type="text/javascript" charset="utf-8" async="" src="--><? //= get_template_directory_uri(); ?><!--/assets/front/js/credits.bundle.ae25963b.js"></script>-->
<style type="text/css">/*.lleo_errorSelection *::-moz-selection,
.lleo_errorSelection *::selection,
.lleo_errorSelection *::-webkit-selection {
    background-color: red !important;
    color: #fff !important;;
}*/

    #lleo_dialog,
    #lleo_dialog * {
        color: #000 !important;
        font: normal 13px Arial, Helvetica !important;
        line-height: 15px !important;
        margin: 0 !important;
        padding: 0 !important;
        background: none !important;
        border: none 0 !important;
        position: static !important;
        vertical-align: baseline !important;
        overflow: visible !important;
        width: auto !important;
        height: auto !important;
        max-width: none !important;
        max-height: none !important;
        float: none !important;
        visibility: visible !important;
        text-align: left !important;
        text-transform: none !important;
        border-collapse: separate !important;
        border-spacing: 2px !important;
        box-sizing: content-box !important;
        box-shadow: none !important;
        opacity: 1 !important;
        text-shadow: none !important;
        letter-spacing: normal !important;
        -webkit-filter: none !important;
        -moz-filter: none !important;
        filter: none !important;
    }

    #lleo_dialog *:before,
    #lleo_dialog *:after {
        content: '';
    }

    #lleo_dialog iframe {
        height: 0 !important;
        width: 0 !important;
    }

    #lleo_dialog {
        position: absolute !important;
        background: #fff !important;
        border: solid 1px #ccc !important;
        padding: 7px 0 0 !important;
        left: -999px;
        top: -999px;
        width: 440px !important;
        overflow: hidden;
        display: block !important;
        z-index: 999999999 !important;
        box-shadow: 8px 16px 30px rgba(0, 0, 0, 0.16) !important;
        border-radius: 3px !important;
        opacity: 0 !important;
        -webkit-transform: translateY(15px);
        -moz-transform: translateY(15px);
        -ms-transform: translateY(15px);
        -o-transform: translateY(15px);
        transform: translateY(15px);
    }

    #lleo_dialog.lleo_show_small {
        width: 150px !important;
    }

    #lleo_dialog.lleo_show {
        opacity: 1 !important;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        -webkit-transition: -webkit-transform 0.3s, opacity 0.3s !important;
        -moz-transition: -moz-transform 0.3s, opacity 0.3s !important;
        -ms-transition: -ms-transform 0.3s, opacity 0.3s !important;
        -o-transition: -o-transform 0.3s, opacity 0.3s !important;
        transition: transform 0.3s, opacity 0.3s !important;
    }

    #lleo_dialog.lleo_collapse {
        opacity: 0 !important;
        -webkit-transform: scale(0.25, 0.1) translate(-550px, 100px);
        -moz-transform: scale(0.25, 0.1) translate(-550px, 100px);
        -ms-transform: scale(0.25, 0.1) translate(-550px, 100px);
        -o-transform: scale(0.25, 0.1) translate(-550px, 100px);
        transform: scale(0.25, 0.1) translate(-550px, 100px);
        -webkit-transition: -webkit-transform 0.4s, opacity 0.4s !important;
        -moz-transition: -moz-transform 0.4s, opacity 0.4s !important;
        -ms-transition: -ms-transform 0.4s, opacity 0.4s !important;
        -o-transition: -o-transform 0.4s, opacity 0.4s !important;
        transition: transform 0.4s, opacity 0.4s !important;
    }

    #lleo_dialog input::-webkit-input-placeholder {
        color: #aaa !important;
    }

    #lleo_dialog .lleo_has_pic #lleo_word {
        margin-right: 80px !important;
    }

    #lleo_dialog #lleo_translationsContainer1 {
        position: relative !important;
    }

    #lleo_dialog #lleo_translationsContainer2 {
        padding: 7px 0 0 !important;
        vertical-align: middle !important;
    }

    #lleo_dialog #lleo_word {
        color: #000 !important;
        margin: 0 5px 2px 0 !important;
        /*float: left !important;*/
    }

    #lleo_dialog .lleo_has_sound #lleo_word {
        margin-left: 30px !important;
    }

    #lleo_dialog #lleo_text {
        font-weight: bold !important;
        color: #d56e00 !important;
        text-decoration: none !important;
        cursor: default !important;
    }

    /*
    #lleo_dialog #lleo_text.lleo_known {
        cursor: pointer !important;
        text-decoration: underline !important;
    }
    */
    /*#lleo_dialog #lleo_closeBtn {
        position: absolute !important;
        right: 6px !important;
        top: 5px !important;
        line-height: 1px !important;
        text-decoration: none !important;
        font-weight: bold !important;
        font-size: 0 !important;
        color: #aaa !important;
        display: block !important;
        z-index: 9999999999 !important;
        width: 7px !important;
        height: 7px !important;
        padding: 0 !important;
        margin: 0 !important;
    }*/

    #lleo_dialog #lleo_optionsBtn {
        position: absolute !important;
        right: 3px !important;
        top: 5px !important;
        line-height: 1px !important;
        text-decoration: none !important;
        font-weight: bold !important;
        font-size: 13px !important;
        color: #aaa !important;
        padding: 2px !important;
        display: none;
    }

    #lleo_dialog.lleo_optionsShown #lleo_optionsBtn {
        display: block !important;
    }

    #lleo_dialog #lleo_optionsBtn img {
        width: 12px !important;
        height: 12px !important;
    }

    #lleo_dialog #lleo_sound {
        float: left !important;
        width: 16px !important;
        height: 16px !important;
        margin-left: 9px !important;
        margin-right: 3px !important;
        background: 0 0 no-repeat !important;
        cursor: pointer !important;
        display: none !important;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAfNJREFUeNq0U01IVFEU/u57Oo5WhBRIBBptykWLYBa2soWiEKQQEbrSFsGbVRQKQc2iFqGitXqvjQxCoCJCqyI0aBUtZILaJNUuYWYWo8HovJ/707nP94bnz0rxwvfOuefd8517fi5TSuE4i50YwZ3l37ZhNlpgzFkaaM/G9sHF1YskNrT+7l4PjMOcb78t2JL71uxgB+2UlfxHTtq5N94fIOh/88kWgWfl73ZCSQkpeGg3H091JY6dI2S00qA/N3KO3dDUYhFgEmZGurG+w9FqApIHsVM7kaTF9Nhn0r8Q7hPWQgIRuNaH3AMUA4W/Lkdh04cpFS43G0TgxQTvCdMETVAk3KynIHwXZU/ge8XDt7KH9bKLjU0P2zVO5LsEpSejVRJ9UR18EtfqKegovs9R3Q6w9c/H1o4Aa2Jwm1lIvn9RJ4w9RdRRzqcYrpwycCll4Cy1lnkS3Bc6vfBg28v8aRIfI78zhB/1GygROH3jLyyzMQ0zlUZuZBSlKkeLoegGtTjYLcJ8pF+NakHOFC2J6w+f25mxSfWrWFF/ShXVPTGvtN14NNkVnxlYWJkgZEL7/vwKr55lKSVnaGYWkuYgrgG172uUv47+U7fw0EHaJXmalUQy/HqO6lBzEsVjJC4Q8kd6TETQpjuaGOvjv8b/AgwA/ij1XMx58NIAAAAASUVORK5CYII=) !important;
    }

    #lleo_dialog .lleo_has_sound #lleo_sound {
        display: block !important;
    }

    #lleo_dialog #lleo_soundWave {
        border: solid 5px #4495CC !important;
        border-radius: 5px !important;
        position: absolute !important;
        left: -5px !important;
        top: -5px !important;
        right: -5px !important;
        bottom: -5px !important;
        z-index: 0 !important;
        opacity: 0.9 !important;
        display: none !important;
    }

    #lleo_dialog #lleo_soundWave.lleo_beforePlaying {
        display: block !important;
    }

    #lleo_dialog #lleo_soundWave.lleo_playing {
        opacity: 0 !important;
        border-width: 20px !important;
        border-radius: 30px !important;

        -webkit-transform: scale(1.07, 1.1) !important;
        -moz-transform: scale(1.07, 1.1) !important;
        -ms-transform: scale(1.07, 1.1) !important;
        transform: scale(1.07, 1.1) !important;

        -webkit-transition: all 0.6s !important;
        -moz-transition: all 0.6s !important;
        -ms-transition: all 0.6s !important;
        transition: all 0.6s !important;
    }

    #lleo_dialog #lleo_picOuter {
        position: absolute !important;
        float: right !important;
        top: 4px;
        right: 5px;
        z-index: 9 !important;
        display: none !important;
        width: 100px !important;
    }

    #lleo_dialog.lleo_optionsShown #lleo_picOuter {
        right: 25px;
    }

    #lleo_dialog .lleo_has_pic #lleo_picOuter {
        display: block !important;
    }

    #lleo_dialog #lleo_picOuter:hover {
        width: auto !important;
        z-index: 11 !important;
    }

    #lleo_dialog #lleo_pic,
    #lleo_dialog #lleo_picBig {
        position: absolute !important;
        top: 0 !important;
        right: 0 !important;
        border: solid 2px #fff !important;
        -webkit-border-radius: 2px !important;
        -moz-border-radius: 2px !important;
        border-radius: 2px !important;
        z-index: 1 !important;
    }

    #lleo_dialog #lleo_pic {
        position: relative !important;
        border: none !important;
        width: 30px !important;
    }

    #lleo_dialog #lleo_picBig {
        box-shadow: -1px 2px 4px rgba(0, 0, 0, 0.3);
        z-index: 2 !important;
        opacity: 0 !important;
        visibility: hidden !important;
    }

    #lleo_dialog #lleo_picOuter:hover #lleo_picBig {
        visibility: visible !important;
        opacity: 1 !important;
        -webkit-transition: opacity 0.3s !important;
        -webkit-transition-delay: 0.3s !important;
    }

    #lleo_dialog #lleo_transcription {
        margin: 0 80px 4px 31px !important;
        color: #aaaaaa !important;
    }

    #lleo_dialog .lleo_no_trans {
        color: #aaa !important;
    }

    #lleo_dialog .ll-translation-counter {
        float: right !important;
        font-size: 11px !important;
        color: #aaa !important;
        padding: 2px 2px 1px 10px !important;
    }

    #lleo_dialog .ll-translation-text {
        float: left !important;
        /*width: 80% !important;*/
    }

    #lleo_dialog #lleo_trans a {
        color: #3F669F !important;
        text-decoration: none !important;
        text-overflow: ellipsis !important;
        padding: 1px 4px !important;
        overflow: hidden !important;
        float: left !important;
        width: 320px !important;
    }

    #lleo_dialog .ll-translation-item {
        color: #3F669F !important;
        border: solid 1px #fff !important;
        padding: 3px !important;
        width: 100% !important;
        float: left !important;
        -moz-border-radius: 2px !important;
        -webkit-border-radius: 2px !important;
        border-radius: 2px !important;
    }

    #lleo_dialog .ll-translation-item:hover {
        border: solid 1px #9FC2C9 !important;
        background: #EDF4F6 !important;
        cursor: pointer !important;
    }

    #lleo_dialog .ll-translation-item:hover .ll-translation-counter {
        color: #83a0a6 !important;
    }

    #lleo_dialog .ll-translation-marker {
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAWSURBVBhXY7RPm/+fAQkwIXNAbMICAJQ8AkvqWg/SAAAAAElFTkSuQmCC) !important;
        display: inline-block !important;
        width: 4px !important;
        height: 4px !important;
        margin: 7px 5px 2px 2px !important;
        float: left !important;
    }

    #lleo_dialog #lleo_icons {
        color: #aaa !important;
        font-size: 11px !important;
        background: #f8f8f8 !important;
        padding: 10px 10px 10px 16px !important;
    }

    #lleo_icons a {
        display: inline-block !important;
        width: 16px !important;
        height: 16px !important;
        margin: 0 10px -4px 3px !important;
        text-decoration: none !important;
        opacity: 0.5 !important;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAAQCAYAAADK4SssAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADopJREFUeNqsWQt0lNWd/33fzGQemUcmzwkhSkhYSSgpJJGVWHlEVEwLq0AFhC520xN0cfcUkHZ7QNetwfac6mp3oR5Ss8c9XaPVhoJCtGwSkYQglQBBNg/IgxBIQl7zyCSZ97f/e7+ZyeShpu7eM/fc797vu9/j/u7v93+MUqlUwuv1IlQ6Ojqk7u5utLaWo/nanfB45tbnsSI6GgsXLhQwpcx/9rCE/0PpOLSL39Pnh9TY2Y1NJXW4NeTFz59agp9uXASfYwR/Xv9dxJ6pxwJBhCIQoKtFuIUAXPRksyTx+U2rVy0TtdrywNhYeviFJAlSsJ1oJNY2ZdfVLeKdiGIb96Kqw45LvU40Dbj42F2mKNyXasCjGTGI0aqmvr6wdseL075fEORl6h+yYWzcDaNeh8Q4E7z0kVPLx//5Il0uTLqHQqGA3z/92qioKHg8Hn5/SZqYogwdOBwO6d19+9DQ0ADdqrmTJhesLML6nQ38uLj4jHSkuJi/a+Q1vd8QxORg6/dBUtDblLzbhBuuOIhJcfhl5QCeyB9DusWA3MO/hf2+e6FwjtFHKGj15Y8M0Cd0KQTpbr8kCBrNsaTn9iXoH3jga5/739nZC7Mj+n7aHBVNwwSUEhuy4rCR6m8vD9ID5MVyeAI4cPo2suI0KMpJgEoU+A5QiCKmg0jT6H49/cP4Tt4i/FXaHLS0d6O57RZ0WvXXvltaWhpOnz7NCbZ371588MEHHLQ9e/bwev78eTzzzDPo7+8PzxFDIO4rKOAgomHihq+9ckxgdd26dWHQSkuBvJ2lmLqTv2kJbQAGot/nw9U7xDa9CQHakY5xFd45f4OdhWZhFtz534GP9k9A9PPWIxGgAu2AgHwP79hYYseRI8q+f/832Kqr4O7t5bt6pioFAmIkiJXXrbCYtbg85MF1q5vv+IFxH6KUApSizLDsJB09F2i3yozoc3pn/CaBVKPr9gC+X3g/3ih5GruL1mPPjx7DwLCdA/x1xWKx4K677kJ6ejpWr14dHt+xYwdSUlKQl5cHvV4/aQ7/GMZEDiDVI9IF4asecqQ4FwzvnaWl/x84hhnJwFAKSiTFaCDS7ifhhEjMu9pJS0dg0SH8Bh28BKqCXSuRxAp+ApMAFBX8Hj6PR3G+uhrDFRXoeekltG3ZjOsbN6L7wH4M/O53GKEX97pc8NGGCckSW9ibdg9anBJqu0ZgpFvNM0ahf8yH75GU7siOx3aqIjHQS8+N0SiRGa/BhR4nLHpVhBSKfEN03erHny+3IinehBf+cQuqzzby8+1dfURuKSy5X1UMBkP4eM6cOfxdmdQuWrSIj7nd7mlAKquqqqTyVXtnvfCFhUkoRi4xswG7V7RIM9lMVvJJHoryM7Gr4hxcLisfO7m3EIcrm1HZ3DmNkYIo79RHFsfjbHMvlGozLTKBKSpJPhUQ3WRvmlpwO1mE1WCGygMk2pxIcHjhlfzBzSDbQ2Jb2C56Bwfhra2F40wtFxHRaMK899+nU/LzGGAvnR+ARSUTNDVaBTVRMI6AO3VjhMCRkGPRUQusutuABbFqDsaJ63akmtQEZhSf5xx1wWTU4eBPfoDBYQeSE818fOV9i/HZpVYcPPQeLPHmWQGZmJgYPmasZGXt2rUcTFaiyVeJBJszMgxi7uxZxFjJrn/tzBnef5MA6iwp4uCFyrjVhieXp6H5wIYw61ip2FUIjcYc7oeO227a2DKjeG0GFib74LPZoVf58NTKuSSiAkr/9CaeeMSFFQeWYsOPv4XCvVl44GdLsbVoMU5mmcLsCrUBWnneRlYa81qHJzHy983UJzBvOTy8ppvV/Nz+2j581GwjGZav27AwBp/dHsUgXcuY1TLgxns0N/y9LjdMhmisJuD+dkMB1j24jJ7jx5vvnsLT+98gJ8cHg147q/XNysoCcziHhoY4C1NTU7F582Y0NjZikDZmXFzcdGkt6f8IxReO/KWKKDAsS4P29EDZOVhJsqqDgC6NMeOSzQrzc+Uhr5SDvPHwOd4/vHF5WFYL0mL48fee/wBHP2lGkl6Dcy+vwVu70nHhYB7WLJmDX/ypFDsbf42erBTZmwPRkfTVRTJXnx2Ln27PnQCSFpm1UhA8KeDnAPI2OM6cCCnoxLzfYkP3qA/dTh/ujPuxxKJF7e0x1BIbB91+LErUYoDA23rsBk5ccyCRGHu224meMT+fGyrxsUb09VtBHiyy1/4DOm7ewcjoOF58vRz6aDUSyGP1zeCxzlSYnLa3t8NqtUKtVnM2LliwALWkLIyJbA00Gs1kaaVJQjD8mOa87H7uMT722LrdMzyOFq9BRrKPQMspeZsDU09AHn1ug7yLXzmKtANlKNtWyEF+tvwcHny1kh8XZBbBQvawzya7+MMuLX7063r85vhlFORasH/7CtouEk5f/xzPf/IykJFI8ubjVl3wqYJSSrbTEwi/ul+SJTUEaESowVuOHXUiGXnJ6oVRLTP50XkGREcp8M41GzpcPjycZICOJPdfzvXhf0a8+GGWnhwfAUdJVtvo/IhnAphAQOJ2Uh2lQrROgzlJsQRmHwFsQrRWQ8wOzJoljG03b97kjMzIyMDWrVu5XaypqcGWLVsQGxsLo9E43dmZzY1n64Ey4Ha9XcP7DFAG4qGT5/BqzSUcenI5Dm3L5+dqyA4yUPPpelZiFR7oozSov+7Cq+XXcKN/lBZbgfmxKchIzyEL74JIjqboVxIkBCAtnAAVj4Ek0SMvZnCxQrLqj6wRUhsJJK097rj8vK4hG+ghKX2fgGL9VanRXEb/i5jH+o/ON5LDI6G8Ve6LX2LuEgg8jVqFnjvD8Hh9s7KLkxzA5GR88cUXOH78OO8zz5W998mTJ9HZ2Ul+g8jlNfK+XwlkKPzIzc2d4U0aJtlVJqche8ecmRCgBZnJxNInZfDoJTItMSSxlSh6uxL1nRNOj9c2iLlaN9bnxeMHaxfC5qAQgZ6aGpeMs1tK8XD8CkhjTlpYGiSAA4LMQ84yr2qatPpD8uqPlFm55dIaBHLzPSZIPgksuls334CaW04MkcyKBOg6Au6znjH0EBtTSMbvn6NDzQ0HOUh+PofNjSzs3g7nOCwJsrnout0fTkR8qY2aAWSz2Qyn0ymHg8HS3NzMEwHDw8Nhh2fGhMBfUljcyexjcQSQjH0hqXz7Inmml3oJOBsHtDAzDYe3FfDz5ec6Z/RaS/YU4KHcxYgzi/DZmzA8dAZdl3uQnLEJ8YYEnNj0Ov7mvT34uLcaUhTJip88WWJWIKAIpyZC3ioHjR1JEZmdCImNZGTx4jiUXbWjMM0IA8lqxXUHD+hXpuoRr1Xil239fLGfINBEan9P7BQ4FQU+V3aOJc4+pVKBzu4+PLWpgI9/WPM5OTi6aVmYyDJ1XKvVchvIWNfa2gqbzYaYmBhcvHiRn3e5XOHMzyQb+U2A3PfudU7I3btXhMeYPczJSkOaRYNtOZnYW7A0bP8YsCWVsrQeICbOFEduLfg2nIONuHz8aZhxBUrVGJRuEZ3XDiHlwT/CGJuOfy3Yi7r/uIIRkmGFjxYnwLIItKi+CSC5LQy24TWakqbjqa/gcS45M0uTNBwoJpvH2x3cS348w8gX+Xib3P/+PTFw+wI41j7C+0voO9lcbt/tTjz+yHIUrs6Fj+59b/YCUpRR2Kk6yeFhVU92U6OO4naUybXb4+XjLHUXWZhkqlQqDhh7z7a2Np4AuHr1aohE4ViTpVfZpvxGQL5UeYfHkCxLFxlDMi/1Ur0cLx44Ws9ldlvOBLAhtvZ+SWbHHRhFa/VOpBvPw2RmwTUF/14JmsEm9NfthmH9CdwTfzcs0YkYcXXCz9ItBKKKHB+fT86weP3+PkLMEo4jg6yMBDEEZIgJbOdXbUjD65eHUHumD0PjPs7wJqsb/1TXh3aKU1MMKiwjb/bDNjtsJKkatYC3Hkrhc/kmXrscP3tmEy43dWJJlhyCMafnk3cO4sKVNlTXX+FMHbQ64HJ7OaCW+Bjk52by8cgyb948XkdGRnifAUjrzG0jT3oEgWN2NDIXq4w0ebMpDMTcXBZLFn9lnpUlAcoigC3Kz+GMZACHEgSRcaTH3g+97xY0qhiMkI0SfGQH6T112lj4XbcheEcxLkbD5RylhVaRrEaRnfSSp+oPhxIdbvezGqWyjEAyRUrWVCBd4+PSRbf79KaQTSL79/cUxtxf0SknSlmsfMUatmHLLDouq0eJrfPj1PjNymSYVBPuhdmkD4cgpz+7ircqqqEimd3+2Cqs/OtvIS87I3zt6JiLJxkYCMyeNkaYGZ5YINtYVVUVls6ysjJuGxn7WDl16hQHmkkua0MAh4H8lb0G+0wFM4PX0BBeBQZiza+2TEqaJ0eAGQpBJuUOYyZinpzkGHJyrNOeoY2ZB3XCGowOV0Cp0/HQQylEwT+ugHrOOrKLenz4+cfosfdCMJDdYZkZryh7qpKcXdnZ1VXBcg4/TkwUF2k0+00KxaNmhSJPIQiT/rLoaGv7/BeDgw+9HDGWpFOh5ckM/KFjBD+pv4MeZ5C19BOVMmiPLzDhlRXJaOwdxVxj9IR/8FE9zl9q5Uy7eq0LNvsoHz97oYXCEDOSE8xIosrklaX6HCNj6O4d4uHJ1MKcmhdeeAF2u5336+rqOOgh23jixAlcuXJlGiOFqX9jsfLpp59Kxz58jXutISCZB7Vq6WZsvdc0499Y1iDTmPe6sYAko09+cC8Ftb29cuBcUrQcyVoz8l+ZsJNmmhP+G2t0SLI1vg6l/QuI3jEEVBqoLQ9DsbgILT19+O4bu3BLHKDFoLCA7SOJZEZSQTpY86X+/TK9XvmEyfR30aK4MUWjyffpdM4NjY2RyaZpXgizsSPeAKxuOZwxq0Wyj360DpFtpsvvm6sPyypbwzXbn5eYTWS206jXUhCv4gLA7sOk1OX2kE1kGaEAv4Y5RVq6RqtR8+OP3vrnaX9jRXq1kvT1/0/8rwADAJ+LRelLmVNwAAAAAElFTkSuQmCC) !important;
    }

    #lleo_icons a:hover {
        opacity: 1 !important;
    }

    #lleo_icons a.lleo_google {
        background-position: -34px 0 !important;
    }

    #lleo_icons a.lleo_multitran {
        background-position: -64px 0 !important;
    }

    #lleo_icons a.lleo_lingvo {
        background-position: -51px 0 !important;
        width: 12px !important;
    }

    #lleo_icons a.lleo_dict {
        background-position: -17px 0 !important;
    }

    #lleo_icons a.lleo_linguee {
        background-position: -81px 0 !important;
    }

    #lleo_icons a.lleo_michaelis {
        background-position: -98px 0 !important;
    }

    #lleo_dialog #lleo_contextContainer {
        margin: 0 !important;
        padding: 3px 15px 8px 10px !important;
        background: #eee !important;
        background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#eee)) !important;
        background: -moz-linear-gradient(-90deg, #fff, #eee) !important;
        border-bottom: solid 1px #ddd !important;
        border-top-left-radius: 3px !important;
        border-top-right-radius: 3px !important;
        display: none !important;
        overflow: hidden !important;
    }

    #lleo_dialog .lleo_has_context #lleo_contextContainer {
        display: block !important;
    }

    #lleo_dialog #lleo_context {
        color: #444 !important;
        text-shadow: 1px 1px 0 #f4f4f4 !important;
        line-height: 12px !important;
        font-size: 11px !important;
        margin-left: 2px !important;
    }

    #lleo_dialog #lleo_context b {
        line-height: 12px !important;
        color: #000 !important;
        font-weight: bold !important;
        font-size: 11px !important;
    }

    /*#lleo_dialog #lleo_gBrand {
        color: #aaa !important;
        font-size: 10px !important;
        *//*padding-right: 52px !important;*//*
        padding-bottom: 14px !important;
        margin: -3px 4px 0 4px !important;
        background: left bottom url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAPCAYAAABJGff8AAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAcVSURBVHja3FZrbFTHFT4z97W++/KatfHGNrFjMNjFLQ24iiVIFBzCD1SFqj/aRlCUCvjRKlVatUFJVJJGNKUtoRVqgZZWKWCVOEqKQxsaUoypaWzclNgGI9sLtndZv9beh/d133ems3ZAvKTGkfqnZ3U1d++9M+d88535zkGUUsjbpl/PgixiEEz05aHLIzsjo9cwIrrEy4EA7ypLm8rMAX2q850cYGMtmoD3tKOgYwF0QDAUjcFwwoLG33ih5hkZIJwFGjMA8QDRaQuCIzb0ZtbCMe00oCRbwUIwU7EHwo4jYFs6VASWPb3cv+yP7SfO9RCNNFIByLMpB+ybKIRoLgeXZhKweYrAfzP+1h3CABY90n/unafCwSs/xJK7BfMOzVZjq2w92WJlbhyzLeWSyXuCTXgMOKDsh2Dhlp9HoF57DdzTX4H4kteh5iHtzcRo8ph9XQ+DwZFGJME+RQYq5b/99HYLjNch7gi2t35roOONNQX+mh4kF7GnGDjnA70sgCe0eG+tIlcGX3F0wwtSN+gqBwJGvEXBumdVti9ImB/vNcT2DQHBGriMBkh17QZH7dFCgetBbIcywOa9Cm4QecSYx3dsV3Nz8x3Ytm7dio4fP063bNmC4HZ3BWrqpyN950d5qaDHVqeA2gZw8mLgRA9YBCKGDR+8zF2E3eg8AOdoCFuo+YpitswiboAFtwvNb/qcaTmy5+qg3XwjQi7YBLUjBCXsmmMSIbrZUJKHBWr2muZYRyo0vSfWV+YkyMx/YTTZPDyBCh68QeAP/ap5WuX4fobrsZvB3z7mgdyXmeRUvEjTjE5O8gIlBmDRC2LRKigp8QClOSguRfCj0PcZatejHYb455ORxPZaEf5azaOXRET3ahQWUQk9r+fMjgOHVFvg6FN11dhbGYB+SuBaVud8HhHvGx88tT6RMp6JzXxhmZ6OrqfGwC98KyZT0excfPqLgs8R5jwdhyMTr22Q8W+9Dn4kTLi/s3fi3RzfZOa2hJi3gZCKBLnIxzmK2Mb7GRgPEGqBIIpQXl4OevVGeEt+EqDI/7v3QxPaoGa38hxn1RRwP17sdk/lOP67KpiPDX6YXXuxj758I4rSdVUQKSuGnU4ZPMkk3u3Skjsmr3V/bKszPQW+qiZPcSWxcvHtlpJJ2wyLm6DMGm9g54V4ungltj+u9chHuhRytU0hz88Rz8Qqn1J3j/cwkzF4Q3AvedhWoiyneeCdFWy2hU1d28YU5nFJkMUDeN17681gqUPJqH6OvRYlKA34wXR5O1EytDkXy2xi5wgFSpDM0p2RiMBVAmcWpYAmppOrr03FbVxY2+T2+WFJpQ/S4YgWSV8PIsEp2jr7HsAmNl7m0BVp2rbrT0TTb4YNu83xKXXmFjPsjJzmPVUyO/B7BV8dcAV+luGUnwr1jWcS0Wh8bORryvC7Femh/qElmCwu5ZHopDZjTgC5QMJjBNRYkrQWOimw1Pp6KdMP4mCIy0QlqWM6Ebp+fna8+3uUcwcKS1e0SJA7ef1fred8n1NfKFwqFCMm12lKudDw8PulShbnCC0ux7TtG4US7PDghYGxlcltQEiMd5bt4pyB/VhwA5aKDW9p/QfVdStPg5mBYZ1a/0yYO/xg05US6lhOdNlOxus+ikw29s5mfjadQJ1ZBf5dXQFbH6lHG3wcOIwkPnyqjUYsPXvI70dviCKDL8o0MtS/WbeLXi1cvdrSxLTTMgykPcDV/bwq027o6vgKgdtbJ6L9tRK31oXhyQVJM2MmTW2tiuiJvyB1+jvUSD+NJX+fDtLkR13dZZNXT13NYv5iO//g5U1a/7o4gV8FLTgRiqu5M+nULpuQoyYTpFSWNiTT8HtVh59Ajx0cGNazlwfg8/rqXyqLH9pW4ghNfns2HiWZWNx2V6zqivWHvho50zKk902eRYQzTnwRL60ds2r8YfLuoE2+KepGk0DooYaFgMnrP9PNLLXVx830iGzMXGpkuexVxMKJuGUErVQkgbAEBpkTlc4khS/N6hREU2PPWIlAedllVLNLN2H7xAyFmQSBVAbBbP1+sKufexRGPzw52vW34xZFe4Cil6TihzshLv4JTq5zEmfrBjYTwMRAWFQKhQ1X9HzRNKFeRAsrmncUNcQrFKG2ucrAOgOOF8BmopCvI+iTYpLPT475EBgCfJevPCieoyCxIxP2vQIZx7MQ0FKv9/VdELRc/DlP5UZwuIqgYNHSjYmBtzvpoOqSXI9k9eWd833FnJ/82vPx4IV2APcDBZ+pXflkYUxhXK+BsxOb2L8eiFLrHyq3ZI1nacNBuaT+oNPBs7oZfdFIDbeAhLOcUQZcrhwIGv3Mfnn4H1k+HMVwQTY1zdoelj6U/MA2ZmcBcVu0xOAazUiMqTN9Z3U1cRALMiBbuF9dXJjPm13z/4P9R4ABANu4bb16FOo4AAAAAElFTkSuQmCC) no-repeat !important;
        display: inline-block !important;
        float: right !important;
    }
    #lleo_dialog #lleo_gBrand.hidden {
        display: none !important;
    }*/
    #lleo_dialog #lleo_translateContextLink {
        color: #444 !important;
        text-shadow: 1px 1px 0 #f4f4f4 !important;
        background: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#ddd)) !important;
        background: -moz-linear-gradient(-90deg, #f4f4f4, #ddd) !important;
        border: solid 1px !important;
        box-shadow: 1px 1px 0 #f6f6f6 !important;
        border-color: #999 #aaa #aaa #999 !important;
        -moz-border-radius: 2px !important;
        -webkit-border-radius: 2px !important;
        border-radius: 2px !important;
        padding: 0 3px !important;
        font-size: 11px !important;
        text-decoration: none !important;
        margin: 1px 5px 0 !important;
        display: inline-block !important;
        white-space: nowrap !important;
    }

    #lleo_dialog #lleo_translateContextLink:hover {
        background: #f8f8f8 !important;
    }

    #lleo_dialog #lleo_translateContextLink.hidden {
        visibility: hidden !important;
    }

    #lleo_dialog #lleo_setTransForm {
        display: block !important;
        margin-top: 3px !important;
        padding-top: 5px !important;
        /* Set position and background because the form might be overlapped by an image when no translations */
        position: relative !important;
        background: #fff !important;
        z-index: 10 !important;
        padding-bottom: 10px !important;
        padding-left: 16px !important;
    }

    #lleo_dialog .lleo-custom-translation {
        padding: 4px 5px !important;
        border: solid 1px #ddd !important;
        border-radius: 2px !important;
        width: 90% !important;
        min-width: 270px !important;
        background: -webkit-gradient(linear, 0 0, 0 20, from(#f1f1f1), to(#fff)) !important;
        background: -moz-linear-gradient(-90deg, #f1f1f1, #fff) !important;
        font: normal 13px Arial, Helvetica !important;
        line-height: 15px !important;
    }

    #lleo_dialog .lleo-custom-translation:hover {
        border: solid 1px #aaa !important;
    }

    #lleo_dialog .lleo-custom-translation:focus {
        background: #FFFEC9 !important;
    }

    #lleo_dialog *.hidden {
        display: none !important;
    }

    #lleo_dialog .infinitive {
        color: #D56E00 !important;
        text-decoration: none;
        border-bottom: 1px dotted #D56E00 !important;
    }

    #lleo_dialog .infinitive:hover {
        border: none !important;
    }

    #lleo_dialog .lleo_separator {
        height: 1px !important;
        background: #eee;
        margin-top: 10px !important;
        background: -webkit-linear-gradient(left, rgba(255, 255, 255, 1) 0%, #eee 8%, rgba(255, 255, 255, 1) 80%) !important;
        background: -moz-linear-gradient(left, rgba(255, 255, 255, 1) 0%, #eee 8%, rgba(255, 255, 255, 1) 80%) !important;
        background: -ms-linear-gradient(left, rgba(255, 255, 255, 1) 0%, #eee 8%, rgba(255, 255, 255, 1) 80%) !important;
        background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, #eee 8%, rgba(255, 255, 255, 1) 80%) !important;
    }

    #lleo_dialog #lleo_trans {
        /*border-top: 1px solid #eeeeee !important;*/
        padding: 5px 30px 0 14px !important;
        zoom: 1;
    }

    #lleo_dialog .lleo_clearfix {
        display: block !important;
        clear: both !important;
        visibility: hidden !important;
        height: 0 !important;
        font-size: 0 !important;
    }

    #lleo_dialog #lleo_picOuter table {
        width: 44px !important;
        position: absolute !important;
        right: 0 !important;
        top: 0 !important;
        vertical-align: middle !important;
    }

    #lleo_dialog #lleo_picOuter td {
        width: 38px !important;
        height: 38px !important;
        /*border: 1px solid #eeeeee !important;*/
        vertical-align: middle !important;
        text-align: center !important;
    }

    #lleo_dialog #lleo_picOuter td div {
        height: 38px !important;
        overflow: hidden !important;
    }

    #lleo_dialog .lleo_empty {
        margin: 0 5px 7px !important;
    }

    #lleo_youtubeExportBtn {
        margin-left: 10px;
        height: 24px;
    }

    #lleo_youtubeExportBtn i {
        display: inline-block;
        width: 16px;
        height: 16px;
        background: 0 0 url(https://d144fqpiyasmrr.cloudfront.net/plugins/all/images/i16.png) !important;
    }

    #lleo_youtubeExportBtn .yt-uix-button-content {
        font-size: 12px;
        line-height: 2px;
    }

    /*** Parsed Lyrics Content *****************************/

    .lleo_lyrics tran {
        background: transparent !important;
        border-radius: 2px !important;
        text-shadow: none !important;
        cursor: pointer !important;
    }

    .lleo_lyrics tran:hover {
        color: #fff !important;
        background: #C77213 !important;
        -webkit-transition: all 0.1s !important;
        -moz-transition: all 0.1s !important;
        -ms-transition: all 0.1s !important;
        -o-transition: all 0.1s !important;
        transition: all 0.1s !important;
    }

    .lleo_songName {
        border: solid 1px #ffd47c;
        background: #fff1c2;
        border-radius: 2px;
    }

    .lleo_hidden_iframe {
        visibility: hidden;
    }</style>
<script type="application/ld+json" data-react-helmet="true">
        {"breadcrumb":{"itemListElement":[{"position":1,"@id":"https://www.sravni.ru","name":"Сравни.ру","@context":"http://schema.org","@type":"ListItem"},{"position":2,"@id":"https://www.sravni.ru/banki/","name":"Банки","@context":"http://schema.org","@type":"ListItem"},{"position":3,"@id":"https://www.sravni.ru/bank/renessans-kredit/","name":"Банк Ренессанс Кредит","@context":"http://schema.org","@type":"ListItem"},{"position":4,"@id":"https://www.sravni.ru/bank/renessans-kredit/kredity/","name":"Кредиты","@context":"http://schema.org","@type":"ListItem"},{"position":5,"@id":"https://www.sravni.ru/bank/renessans-kredit/kredit/potrebitelskij/","name":"Потребительский","@context":"http://schema.org","@type":"ListItem"}],"itemListOrder":"ItemListOrderAscending","numberOfItems":5,"@context":"http://schema.org","@type":"BreadcrumbList"},"author":{"logo":"https://www.sravni.ru/f/_/newdesign/img/logo2.svg","name":"Сравни.ру","url":"https://www.sravni.ru/","@context":"http://schema.org","@type":"Organization"},"description":"Кредит «Потребительский» от банка Ренессанс Кредит с процентной ставкой {ставка} сроком на {срок} — онлайн заявка, подробные условия и список документов для получения кредита, расчет ежемесячного платежа.","name":"Кредит «Потребительский» от банка Ренессанс Кредит","@context":"http://schema.org","@type":"WebPage"}









</script>
<script type="application/ld+json" data-react-helmet="true">
        {"@context":"http://schema.org","@type":"FinancialProduct","additionalType":"BankOrCreditUnion","annualPercentageRate":11.300000190734865,"interestRate":11.300000190734865,"feesAndCommissionsSpecification":"Сумма 30 000 ₽ - 700 000 ₽; Ставка 11,3% - 23,3%; Срок 0 минут; Возраст заемщика лет; Подтверждение платёжеспособности: не требуется; ; Кредит погашается ежемесячно равными (аннуитетными) платежами; Стаж на последнем месте работы от 3 месяцев","name":"Кредит Потребительский","provider":{"@context":"http://schema.org","@type":"Organization","aggregateRating":{"@context":"http://schema.org","@type":"AggregateRating","reviewCount":0,"bestRating":5,"ratingValue":4.7,"worstRating":0},"logo":"//f.sravni.ru/logotypes/banks/logo_777.svg","image":"//f.sravni.ru/logotypes/banks/logo_777.svg","name":"Ренессанс Кредит","url":"/bank/renessans-kredit/"}}






</script>
<style>
    #consumer-credit .overlay-block-hidden {
        display: none;
    }
</style>
<div id="consumer-credit">
    <div id="sprite" style="display:none;">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <symbol viewBox="0 0 19 15" id="arrback" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.466 0v3.95C2.63 4.866 1 14.97 1 14.97s3.674-5.528 10.466-5.98l.086 3.967L18 6.97 11.466 0z"
                      fill="none"></path>
            </symbol>
            <symbol viewBox="0 0 16.7 15.7" id="arrow" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.7 7.3H1.9L8.1.7 7.3 0 0 7.9l7.3 7.8.8-.7-6.3-6.7h14.9"></path>
            </symbol>
            <symbol viewBox="0 0 8.1 4.8" id="arrow-down-thin" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.8.4L4.1 4.1.4.4"></path>
            </symbol>
            <symbol viewBox="0 0 20 18" id="attach" xmlns="http://www.w3.org/2000/svg">
                <g fill="none">
                    <path d="M11.843 16.194L2.075 6.44c-1.146-1.146-1-3.15.328-4.478C3.73.634 5.735.487 6.88 1.633l7.57 7.582"></path>
                    <path d="M14.51 9.262c.764.764.666 2.1-.219 2.986-.884.884-2.221.982-2.985.218L6.167 7.327"></path>
                    <path d="M10.866 2.502l7.217 7.217c1.518 1.518 1.323 4.173-.434 5.93-1.757 1.757-4.412 1.952-5.93.434"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 16 16" id="bank" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 3.7v-.2c0-2-2.8-3.4-6.9-3.4C4.1.1 1 1.5 1 3.4v8.7c0 2.1 3.1 3.6 7.2 3.6 4 0 6.8-1.5 6.8-3.6V3.7zM2 5.2c1.3 1 3.8 1.5 6.2 1.5 2.6 0 4.7-.5 5.9-1.4v2.6c0 1.2-2.2 2.5-5.8 2.5C4.5 10.4 2 9.1 2 7.9V5.2zm6.2-4.1c3.7 0 5.9 1.2 5.9 2.4 0 1.3-2.5 2.2-5.9 2.2C4.4 5.7 2 4.5 2 3.5c0-1.2 2.5-2.4 6.2-2.4zm5.9 11c0 1.5-2.7 2.6-5.9 2.6-3.7 0-6.2-1.4-6.2-2.6V9.7c1.2 1 3.5 1.6 6.2 1.6 2.6 0 4.7-.6 5.9-1.6v2.4z"></path>
            </symbol>
            <symbol viewBox="0 0 15 17" id="calendar" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2V0h-1v2H4V0H3v2H0v15h15V2h-3zm2 14H1V7h13v9zm0-10H1V3h2v1h1V3h7v1h1V3h2v3z"></path>
                <path d="M5.8 9.7l.4.4 1-1V14h.6V8.3h-.6"></path>
            </symbol>
            <symbol viewBox="0 0 8.1 5.8" id="check" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.7 5.8L0 2.7l.6-.8 3 2.5L7.3 0l.8.6"></path>
            </symbol>
            <symbol viewBox="0 0 18.2 18.2" id="clock" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.1 18.1c-5 0-9-4-9-9s4-9 9-9 9 4 9 9-4.1 9-9 9zm0-17c-4.4 0-8 3.6-8 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm-.5 8V4.4h1v4.3l3.9 3.9-.7.7"></path>
            </symbol>
            <symbol viewBox="0 0 28 22.08" id="control-compare">
                <g class="c1">
                    <path d="M13.5 5a2.5 2.5 0 1 1-.001-4.999A2.5 2.5 0 0 1 13.5 5zM16.5 15.5l5-15 5 15M21.5 20.5c-3.094 0-6-2.065-6-5h12c0 2.935-2.858 5-6 5zM1.437 15.5L6.5.5l2.38 7.143L11.5 15.5M6.5 20.5c-3.34 0-6-2.065-6-5h12c0 2.935-2.615 5-6 5zM2 2.5h9M16 2.5h9"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 20 15" id="control-hamburger">
                <g class="c1">
                    <path d="M0 0h20v1H0zM0 7h20v1H0zM0 14h20v1H0z"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 50.8 57.5" id="control-notifications" xmlns="http://www.w3.org/2000/svg">
                <path d="M43.9 26.2c0-9.2-1.6-17.7-11.6-20.3C32 2.6 29 0 25.3 0s-6.7 2.6-7 5.9C8.3 8.5 6.7 17.1 6.7 26.2c0 8.3-4.5 16.4-6.4 19.5-.4.6-.4 1.4 0 2s1 1 1.8 1h14.3c.2 4.9 4.1 8.8 9 8.8s8.8-3.9 9-8.8h14.3c.7 0 1.4-.4 1.8-1 .4-.6.3-1.4 0-2-2.1-3.1-6.6-11.2-6.6-19.5zM25.4 2c2.4 0 4.4 1.5 4.9 3.4-1.5-.2-3.1-.4-4.9-.4s-3.4.1-4.9.4C21 3.5 23 2 25.4 2zm0 53.6c-3.7 0-6.8-3-7-6.8h14c-.2 3.7-3.3 6.8-7 6.8zM2.1 46.8c2-3.3 6.7-11.8 6.7-20.5 0-11.8 2.8-19.1 16.5-19.1s16.5 7.3 16.5 19.1c0 8.8 4.7 17.3 6.7 20.5H2.1z"></path>
            </symbol>
            <symbol viewBox="0 0 19.81 23.96" id="control-profile">
                <g class="c1">
                    <path d="M4.24 15c.94 1.12 3.12 1.9 5.66 1.9s4.73-.78 5.67-1.9"></path>
                    <path d="M12.44 10.9v3l.36.12c3.78.86 6.51 3.34 6.51 6.28 0 1.79-4.78 3.11-9.41 3.14-4.78.05-9.4-1.27-9.4-3.12C.5 17.38 3.23 14.9 7 14h.43v-3.1"></path>
                    <path d="M14.79 5.29c0 3.09-2.19 7-4.88 7S5 8.39 5 5.29a4.88 4.88 0 0 1 9.77 0z"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 23 23" id="control-search">
                <g class="c1">
                    <circle cx="7.76" cy="7.76" r="5.9"></circle>
                    <path d="M11.545 11.545L13.5 13.5"></path>
                    <rect x="15.303" y="11.803" width="4" height="11" rx="2"
                          transform="rotate(-45 17.303 17.303)"></rect>
                </g>
            </symbol>
            <symbol viewBox="0 0 21 11" id="graph" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 8.994a1 1 0 1 0 2 .012 1 1 0 0 0-2-.012zm-5-4.999a1 1 0 1 0 2 .011 1 1 0 0 0-2-.011zM8 8.994a1 1 0 1 0 2 .012 1 1 0 0 0-2-.012zM18 8l-3-3M8.256 8.331L2.75 2.726M10 8l3-3M1 1.995a1 1 0 1 0 2 .011 1 1 0 0 0-2-.011z"
                      fill="none"></path>
            </symbol>
            <symbol viewBox="0 0 13.2 13.1" id="hint" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.6 13.1c-2.2 0-4.2-1.1-5.5-2.9-2-3-1.2-7.1 1.8-9.1C4 .4 5.3 0 6.6 0c2.2 0 4.2 1.1 5.5 2.9 1 1.5 1.3 3.2 1 4.9S11.8 11 10.3 12c-1.2.8-2.4 1.1-3.7 1.1zM6.6 1c-1.1 0-2.2.3-3.1.9C.9 3.6.2 7.1 1.9 9.7c1 1.6 2.8 2.5 4.6 2.5 1.1 0 2.2-.3 3.1-.9 1.2-.8 2.1-2.1 2.4-3.5s0-2.9-.8-4.2C10.2 1.9 8.4 1 6.6 1z"></path>
                <path d="M6.4 8.8c-.3 0-.7.2-.7.7 0 .2.1.4.2.5s.3.2.5.2.4-.1.5-.2c.1-.2.2-.2.2-.5 0-.2-.1-.4-.2-.5s-.3-.2-.5-.2zM8.7 5c0-.5-.2-1-.4-1.3-.4-.6-1.1-.9-1.8-.9-1.3 0-2.2 1-2.1 2.3h.9c0-.6.5-1.1 1.2-1.2.4 0 .8.2 1 .4.2.3.2.8 0 1.2-.1.2-.4.4-.7.7-.4.3-.6.5-.7.7-.1.3-.2.6-.2.9v.3h.9v-.2c0-.3 0-.4.2-.6l.6-.6s.6-.5.7-.7c.2-.3.4-.6.4-1z"></path>
            </symbol>
            <symbol class="icon-link-more" viewBox="86.4 57.6 13.8 13.8" id="icon-arrow-more">
                <path d="M95.7 57.7l-.7.7 3.3 3.3h-4.9c-2.8 0-4.5 1.7-4.5 4.5v5.2h1v-5.2c0-2.3 1.2-3.5 3.5-3.5h4.9L95 66.1l.7.7 4.5-4.5-4.5-4.6z"></path>
            </symbol>
            <symbol viewBox="0 0 10.2 9.9" id="icon-chat" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.6 4.6c0 1.4-.7 2.6-2 3.2.2.9.9 1.5.9 1.5-.6.1-1.9-.3-2.5-.9-.3.1-.6.1-1 .1-2.5 0-4.5-1.8-4.5-4s2-4 4.5-4c2.6.1 4.6 1.9 4.6 4.1z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-credit" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-.01 20C9.937 20 18 11.941 18 2H-.01v18z" fill="#CCF0FF"></path>
                    <g stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="M30 22.153V26a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10a2 2 0 0 1 2-2h22a2 2 0 0 1 2 2v3.076"></path>
                        <path d="M32 22h-7.207C22.707 22 21 20.298 21 18.22v-.439C21 15.701 22.707 14 24.793 14H32v8zM25 18h2"></path>
                    </g>
                    <path d="M9 12v12" stroke="#00AFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-creditcard" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <circle fill="#CCF0FF" fill-rule="nonzero" cx="28" cy="8" r="8"></circle>
                    <rect stroke="#00AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" x="4" y="9"
                          width="28" height="18" rx="3"></rect>
                    <path d="M8 22h2M14 22h2M20 22h2M26 22h2" stroke="#00AFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <circle stroke="#00AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" cx="10"
                            cy="15"
                            r="2"></circle>
                </g>
            </symbol>
            <symbol viewBox="0 0 14.9 14.9" id="icon-cross" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.8.7l-.7-.7-6.7 6.7L.7 0 0 .7l6.7 6.7L0 14.1l.7.7 6.7-6.7 6.7 6.7.7-.7-6.7-6.7"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-debetcard" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M36.01 16C26.063 16 18 24.059 18 34h18.01V16z" fill="#CCF0FF"></path>
                    <g transform="translate(4 9)" stroke="#00AFFF" stroke-linecap="round" stroke-linejoin="round"
                       stroke-width="2">
                        <path d="M3 0h22a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3a3 3 0 0 1 3-3zM4 13h2M10 13h2M16 13h2M22 13h2"></path>
                        <circle cx="6" cy="6" r="2"></circle>
                    </g>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-deposit" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M36.005 15.995c-9.941 0-18 8.059-18 18h18v-18z" fill="#CCF0FF"></path>
                    <path d="M10.005 28v2M26.005 28v2" stroke="#00AFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <rect stroke="#00AFFF" stroke-width="2" stroke-linecap="roundf" stroke-linejoin="round"
                          transform="rotate(-180 18 17)" x="5" y="6" width="26" height="22" rx="2"></rect>
                    <path stroke="#00AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          d="M26.005 23h-16V11h16z"></path>
                    <circle stroke="#00AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" cx="16"
                            cy="17"
                            r="2"></circle>
                    <path d="M25.005 15h2M25.005 19h2" stroke="#00AFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-ipoteka" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <circle fill="#CCF0FF" fill-rule="nonzero" cx="8" cy="8" r="8"></circle>
                    <path d="M5.769 7h20M24 7v22H8V7z" stroke="#00AFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path stroke="#00AFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          d="M23.977 12.3L30 15.12V29h-6.023zM11.769 12h2M12 16h2M11.769 20h2M18 12h2M17.769 16h2M17.769 20h2"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-kasko" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <circle fill="#CCF0FF" fill-rule="nonzero" cx="8" cy="8" r="8"></circle>
                    <g stroke="#00AFFF" stroke-width="2">
                        <path d="M18 15h8.615c2.9 0 5.385 2.106 5.385 5v6H4v-6c0-2.894 2.485-5 5.385-5H18zM11.994 9h12.012a4 4 0 0 1 3.756 2.623L29 15H7l1.238-3.377A4 4 0 0 1 11.994 9z"></path>
                    </g>
                    <path d="M5.5 20.5L6 20v1l-.5-.5zM4 22h4a2 2 0 0 0 2-2v-1H4v3zM30.5 20.5L30 20v1l.5-.5zM32 22h-4a2 2 0 0 1-2-2v-1h6v3z"
                          stroke="#00AFFF" stroke-width="2" stroke-linejoin="round"></path>
                    <path d="M4 26h7v2a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2zM25 26h7v2a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-2z"
                          stroke="#00AFFF" stroke-width="2"></path>
                    <path d="M15 21h6-6z" stroke="#00AFFF" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 77.81 77.81" id="icon-logo" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <style>.cls-1 {
                            fill: #03a9f4
                        }

                        .cls-2 {
                            fill: #0dd149
                        }</style>
                </defs>
                <g id="Layer_2" data-name="Layer 2">
                    <g id="Layer_1-2" data-name="Layer 1">
                        <path class="cls-1"
                              d="M23.47 38.91a15.42 15.42 0 0 1 23.14-13.37L63.44 8.72A38.9 38.9 0 0 0 8.72 63.44l16.82-16.83a15.34 15.34 0 0 1-2.07-7.7z"></path>
                        <path class="cls-2"
                              d="M69.1 14.37L52.27 31.2A15.42 15.42 0 0 1 31.2 52.27L14.37 69.1A38.91 38.91 0 0 0 69.1 14.37z"></path>
                    </g>
                </g>
            </symbol>
            <symbol viewBox="0 0 83.9 83.5" id="icon-settings" xmlns="http://www.w3.org/2000/svg">
                <path d="M81.9 39.8H66.8c-1-5.5-5.8-9.8-11.6-9.8s-10.6 4.2-11.6 9.8H2c-1.1 0-2 .9-2 2s.9 2 2 2h41.7c1 5.5 5.8 9.8 11.6 9.8s10.6-4.2 11.6-9.8H82c1.1 0 2-.9 2-2s-1-2-2.1-2zm-26.7 9.7c-4.3 0-7.8-3.5-7.8-7.8S51 34 55.2 34s7.8 3.5 7.8 7.8-3.5 7.7-7.8 7.7zm26.7 20.3H40.2c-1-5.5-5.8-9.8-11.6-9.8S18 64.2 17.1 69.8H2c-1.1 0-2 .9-2 2s.9 2 2 2h15.1c1 5.5 5.8 9.8 11.6 9.8s10.6-4.2 11.6-9.8H82c1.1 0 2-.9 2-2s-1-2-2.1-2zm-53.3 9.7c-4.3 0-7.8-3.5-7.8-7.8s3.5-7.8 7.8-7.8 7.8 3.5 7.8 7.8-3.5 7.8-7.8 7.8zM2 13.8h15.1c1 5.5 5.8 9.8 11.6 9.8s10.6-4.2 11.6-9.8H82c1.1 0 2-.9 2-2s-.9-2-2-2H40.2C39.2 4.2 34.4 0 28.6 0S18 4.2 17.1 9.8H2c-1.1 0-2 .9-2 2s.9 2 2 2zM28.6 4c4.3 0 7.8 3.5 7.8 7.8s-3.5 7.8-7.8 7.8-7.8-3.5-7.8-7.8S24.4 4 28.6 4z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-fb">
                <path d="M18 1c9.4 0 17 7.6 17 17s-7.6 17-17 17S1 27.4 1 18 8.6 1 18 1m0-1C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M15.5 18.1v8h3.7v-5.8-2.2h2.4l.3-3.1h-2.8v-1.4c0-.4 0-.8.4-1.1s2.4-.3 2.4-.3V9.1h-3c-1.1.1-2.3.5-2.9 1.5-.2.4-.3.8-.4 1.3-.1.9-.2 1.8-.2 2.7v.5h-1.9v3.1l2-.1z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-gplus">
                <path d="M18 1c9.4 0 17 7.6 17 17s-7.6 17-17 17S1 27.4 1 18 8.6 1 18 1m0-1C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0z"></path>
                <path d="M27.6 13.4h-2.8c-.1 0-.2 0-.2-.2v-2.4-.2H24v2.8h-3v.7h2.8c.1 0 .2 0 .2.2v2.8h.6v-.2-2.4c0-.3 0-.3.3-.3h2.7c.1-.4.1-.6 0-.8 0-.1 0 0 0 0zM18.8 19.2c-.4-.4-.8-.7-1.2-1.1-.5-.4-.4-.9 0-1.3 0 0 .1 0 .1-.1.3-.2.5-.5.8-.7.5-.4.8-1 .9-1.6.1-.6.1-1.2 0-1.8-.1-.6-.4-1.1-1-1.4 0 0-.1 0-.1-.1.1 0 .1-.1.2-.1.2-.1.5-.1.7-.1.3-.1.5-.1.8-.2.1 0 .2-.1.2-.3h-3.9c-1 0-1.9.2-2.8.7-.8.4-1.3 1-1.6 1.8-.2.7-.3 1.5-.1 2.3.1.6.4 1 .8 1.4.6.5 1.2.7 2 .8h.8v.8c0 .2.1.4.2.5.2.2.3.4.3.7h-.1c-.5 0-.9 0-1.4.1-.9.1-1.7.3-2.4.8-1.5.9-1.5 2.6-1 3.6.4.8 1.1 1.2 1.9 1.4 1.1.4 2.3.4 3.5.2.8-.1 1.6-.4 2.3-.8 1.4-.9 1.7-2.8 1.2-4-.2-.6-.6-1.1-1.1-1.5zm-4.1-3c-.7-.5-1.1-1.3-1.3-2.1-.1-.6-.1-1.3.2-1.8.3-.6.7-1 1.3-1 .5 0 .9.2 1.3.5.8.7 1.1 1.6 1.2 2.7 0 .4-.1.8-.2 1.2-.4.9-1.5 1.2-2.5.5zm3.4 7.4c-.7.7-1.5.9-2.5 1h-.2c-.8 0-1.6-.2-2.3-.7-1-.8-1-2.1-.1-2.9.6-.6 1.3-.8 2.1-.9.8-.1 1.5 0 2.2.3.6.3 1 .7 1.2 1.3.4.7.1 1.3-.4 1.9z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-lj">
                <path d="M18 1c9.4 0 17 7.6 17 17s-7.6 17-17 17S1 27.4 1 18 8.6 1 18 1m0-1C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0z"></path>
                <path d="M17.6 20.9c.2-1.4 1.7-3 3.5-3.6-1.8.6-3.3 2.2-3.5 3.6z"></path>
                <path d="M18.3 10.7c-1.1 0-2.1.2-3 .6l5.9 5.9v.1l.6 2.2.7 2.8-2.8-.7-1.9-.5-.4-.1-5.8-5.8c-.4.9-.6 1.9-.6 2.9 0 4.1 3.3 7.4 7.4 7.4 4.1 0 7.4-3.3 7.4-7.4-.1-4-3.4-7.4-7.5-7.4zM15.2 11.4l-1.8-1.8s-1.2.7-2.2 1.7c-1.1 1-1.6 2.2-1.6 2.2l1.8 1.8c.8-1.8 2.1-3.2 3.8-3.9z"></path>
                <path d="M17.6 20.9v.3l1.9.5c.5-1 1.2-1.8 2.1-2.1l-.6-2.2c-1.7.5-3.2 2.2-3.4 3.5z"></path>
                <path d="M17.6 20.9v.3l1.9.5c.5-1 1.2-1.8 2.1-2.1l-.6-2.2c-1.7.5-3.2 2.2-3.4 3.5z"></path>
                <path fill="#FFF" d="M17.6 21.2v-.3.3z"></path>
                <path opacity=".55" fill="#FFF" d="M17.6 21.2v-.3.3zM17.6 21.2v-.3.3z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-ok">
                <path d="M18 1c9.4 0 17 7.6 17 17s-7.6 17-17 17S1 27.4 1 18 8.6 1 18 1m0-1C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0z"></path>
                <path d="M22.3 14.4c.3-2.2-1.1-4.5-3.6-5-2.2-.4-4.7 1-5.1 3.6-1 5.9 7.8 7.3 8.7 1.4zM17.8 12c2.5-.2 2.6 3.6.2 3.6-2.5.1-2.6-3.4-.2-3.6z"></path>
                <path d="M20 21.8c.4-.3 3.8-1.1 2.8-2.9-1.2-2.1-2.7 1.5-6.7.2-1.1-.3-1.6-1-2.5-.4-.7.5-.6 1.6 0 2.1s1.9.9 2.7 1.1c-.7 1.1-3.8 3.1-2.2 4.4 1.3 1.1 2.6-.9 4.2-2.6.6.5 1.3 1.2 1.9 1.7.7.6 1.6 1.5 2.5.6 1-1.2-1.1-2.6-2.7-4.2z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-telegram" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 0C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0zm0 35C8.6 35 1 27.4 1 18S8.6 1 18 1s17 7.6 17 17-7.6 17-17 17z"></path>
                <path d="M14 20.2l-.4 4.4c.2 0 .4-.1.4-.1l2.9-2.1 3.7 2.8c1.1.5 1.5-.5 1.5-.5l2.8-14.2c.2-.9-1.1-.3-1.1-.3l-16 6.2s-.8.3-.7.7c.1.5.7.7.7.7l4 1.3 9.6-6.1s.6-.3.5 0c0 0 .1.1-.2.3-.3.3-7.6 6.8-7.6 6.8"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-tw">
                <path d="M18 1c9.4 0 17 7.6 17 17s-7.6 17-17 17S1 27.4 1 18 8.6 1 18 1m0-1C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M25.7 18c.1 0 0 0 0 0l.2-.5c.6 0 1-.1 1.4-.2l.9-.6c-.3 0-.6.1-1.2 0l-1-.2c.1-.1.2-.1.3-.1.1 0 .2 0 .4-.1s.4-.1.6-.2l.8-.8c-.4.1-.7.2-1.2.2-.2 0-1.1 0-1.2-.2-.1-.3-.1-.5-.3-1-.1-.3-.3-.6-.5-.8-.4-.5-.8-1-1.3-1.3l-2.2-.6c.1-.1.6-.2.8-.3 1-.3.9-.6.7-.7-.3-.1-1 .2-1.4.3l.6-.6c-.6.1-1 .4-1.5.6l.2-.5c-.6.2-1.6 1.6-1.9 2.1l-1.2 2.7c-.1 0-.8-.8-1.4-1.1-.5-.3-1.1-.6-1.7-.8-1.3-.6-2.3-1-3.6-1.5-.1 1.2.7 1.8 1.7 2.5l-1.2.2c0 .5.4 1 .7 1.3.5.5.8.5 1.3.7l.1.1c-.8.1-.6.1-1.3.5 0 .3.7 1 1.2 1.1l1.2.2c-.1.1-.2.1-.3.2-.1.1-.2.1-.3.2-.2.2-.2.4-.1.7l1.3.6c-.1.1-.5.5-.7.6-.8.6-1.7.9-2.9 1-.8 0-1.6-.1-2.2-.4-.7-.3-1-.5-1.6-1 .2.3.5.7.8.9 2.1 2.2 5.5 3.5 9.1 2.8 2.2-.4 3.6-1.1 4.9-2.1.2-.2.7-.6.9-.8.6-.6 1-1.2 1.4-1.9.4-.2.7-1 .7-1.2z"></path>
            </symbol>
            <symbol viewBox="0 0 36 36" id="icon-social-round-vk">
                <path d="M18 1c9.4 0 17 7.6 17 17s-7.6 17-17 17S1 27.4 1 18 8.6 1 18 1m0-1C8.1 0 0 8.1 0 18s8.1 18 18 18 18-8.1 18-18S27.9 0 18 0z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M23.9 19.9c1.1 1 1.9 1.8 2.3 2.5.2.3.3.6.2.8-.1.2-.2.4-.5.4l-2.9.1c-.4 0-.9-.2-1.5-.7-.6-.5-1-1-1.2-1.3-.1-.2-.3-.3-.6-.3s-.5.1-.6.4l-.1 1.1c0 .2-.1.4-.3.5-.1.1-.3.2-.4.2-.1 0-.3 0-.5.1-.7 0-1.4 0-2-.1-.6-.1-1.1-.3-1.5-.6-.5-.3-.8-.6-1.1-.9-.3-.3-.7-.7-1.2-1.3-1.4-2-2.5-3.8-3.2-5.2-.3-.6-.4-1.1-.4-1.5.1-.1.3-.2.6-.2h2.5c.3 0 .5.1.7.5.7 1.6 1.4 2.9 2.1 3.8.5.4.8.4.9-.2.1 0 .1-.7.1-2.1 0-.9-.3-1.5-1.1-1.7.2-.5.8-.7 1.8-.7h1.6c.9 0 1.3.3 1.3 1v.6c0 .3-.1.6-.1 1v1c0 .3 0 .6.1.8.1.2.2.4.3.4.2-.1.3-.2.5-.3l.5-.5c.2-.2.3-.4.4-.5.1-.1.2-.3.4-.6s.3-.5.3-.6c0-.1.1-.3.3-.7.2-.4.3-.5.3-.5l.1-.1c.1-.3.2-.4.3-.5.1 0 .3-.1.5-.1H26.1c.1 0 .1.1.3.2.2.3 0 .8-.5 1.7-.6.9-1.1 1.6-1.6 2.2-.8.7-.9 1.4-.4 1.9z"></path>
            </symbol>
            <symbol class="icon-view" viewBox="0 0 17 17" id="icon-view">
                <path fill="none" stroke-miterlimit="10"
                      d="M16.4 8.5s-3.5 5.4-7.9 5.4C4.2 13.9.6 8.5.6 8.5s3.5-5.4 7.9-5.4 7.9 5.4 7.9 5.4z"></path>
                <circle fill="none" stroke-miterlimit="10" cx="8.5" cy="8.4" r="2.5"></circle>
            </symbol>
            <symbol viewBox="0 0 16 16" id="info" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000"
                          d="M7.964 14.825a6.856 6.856 0 0 1-5.718-3.059C.149 8.616 1.004 4.347 4.153 2.249a6.83 6.83 0 0 1 3.8-1.152 6.854 6.854 0 0 1 5.716 3.06 6.816 6.816 0 0 1 1.018 5.153 6.82 6.82 0 0 1-2.925 4.363 6.83 6.83 0 0 1-3.798 1.152z"></path>
                    <path fill="#000"
                          d="M8.668 10.71a.708.708 0 1 1-1.415 0 .708.708 0 0 1 1.415 0zm-.144-1.546H7.397l-.144-4.39h1.415z"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 19 20.8" id="like" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.1 12.1C4.2 9.7 5.5 8.4 7.2 6 9 3.4 10.8.6 10.8.6c1.6.6 3.1 2.3 2 4.1-.3.5-1.9 3.2-1.9 3.2H16s3.2 0 2.3 2.9c-.6 2.2-1.5 3.5-2.2 5.4-.6 1.8-2.4 3.6-4.7 3.6H6.2c-2.1 0-2.2-1.7-2.2-1.7"></path>
                <path d="M.4 8.3h3.7v11.9H.4V8.3z"></path>
            </symbol>
            <symbol viewBox="0 0 16 16" id="like-smile-negative" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                    <circle cx="7" cy="7" r="7"></circle>
                    <circle cx="4.455" cy="5.409" r="1"></circle>
                    <circle cx="9.545" cy="5.409" r="1"></circle>
                    <path stroke-linecap="round" d="M9.864 10.182c-1.629-1.273-3.781-1.273-5.41 0"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 16 16" id="like-smile-positive" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd" transform="translate(1 1)">
                    <circle cx="7" cy="7" r="7"></circle>
                    <circle cx="4.455" cy="5.409" r="1"></circle>
                    <circle cx="9.545" cy="5.409" r="1"></circle>
                    <path stroke-linecap="round" d="M4.455 9.227c1.628 1.273 3.78 1.273 5.409 0"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 16 17" id="list" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6.5H.5v15.7h14.6V5.1L10.6.5zm-.1 1.4l3.4 3.4h-3.4V1.9zm-9 13.3V1.5h8v4.8h4.6v8.9H1.5z"></path>
            </symbol>
            <symbol viewBox="0 0 166 30" id="logo" xmlns="http://www.w3.org/2000/svg">
                <g fill="none">
                    <path d="M45.79 20.69a4.67 4.67 0 0 0 1.82-.25c.366-.192.577-.59.53-1a1.19 1.19 0 0 0-.69-1c-.67-.395-1.372-.73-2.1-1-.68-.25-1.348-.533-2-.85a5.837 5.837 0 0 1-1.52-1.05 4.233 4.233 0 0 1-1-1.46 5.416 5.416 0 0 1-.35-2 4.406 4.406 0 0 1 1.73-3.67A7.504 7.504 0 0 1 47 7.1c.97-.002 1.937.088 2.89.27.748.13 1.484.325 2.2.58l-.82 3.64a17.223 17.223 0 0 0-1.77-.5 9.648 9.648 0 0 0-2.15-.22c-1.467 0-2.2.407-2.2 1.22-.004.17.026.34.09.5.087.172.218.317.38.42.244.168.5.315.77.44.327.16.74.333 1.24.52.873.312 1.72.686 2.54 1.12.592.31 1.13.715 1.59 1.2.377.41.658.898.82 1.43.168.592.25 1.205.24 1.82a4.19 4.19 0 0 1-1.82 3.7 9.157 9.157 0 0 1-5.19 1.25c-1.23.025-2.46-.103-3.66-.38a14.73 14.73 0 0 1-2-.63l.78-3.8c.795.315 1.614.562 2.45.74.792.172 1.6.262 2.41.27zm20.4-9.01c-.42-.107-.91-.217-1.47-.33a9.197 9.197 0 0 0-1.82-.17c-.35.005-.702.032-1.05.08-.314.033-.625.09-.93.17V24h-4.68V8.41c.984-.332 1.985-.61 3-.83 1.235-.27 2.496-.4 3.76-.39h.91c.353 0 .717.057 1.09.17.353.053.71.117 1.07.19.31.06.616.152.91.27l-.79 3.86zM75.1 7.1c1.168-.03 2.333.128 3.45.47a5.367 5.367 0 0 1 2.21 1.35c.564.605.97 1.34 1.18 2.14.24.91.358 1.85.35 2.79v9.73c-.667.147-1.597.32-2.79.52a26.81 26.81 0 0 1-4.33.3 13.71 13.71 0 0 1-2.9-.28 6.29 6.29 0 0 1-2.27-.93 4.228 4.228 0 0 1-1.44-1.68 5.794 5.794 0 0 1-.5-2.54c-.027-.854.173-1.7.58-2.45a4.467 4.467 0 0 1 1.55-1.6 7.014 7.014 0 0 1 2.24-.92 12.518 12.518 0 0 1 2.57-.22c.54-.003 1.082.024 1.62.08.388.036.773.103 1.15.2v-.44a2.591 2.591 0 0 0-.72-1.92 3.504 3.504 0 0 0-2.48-.7c-.786 0-1.572.056-2.35.17-.682.095-1.352.26-2 .49l-.6-3.77c.273-.087.607-.177 1-.27.393-.093.853-.18 1.38-.26.48-.073.987-.137 1.52-.19.533-.053 1.06-.077 1.58-.07zm.38 13.69h1.32c.335-.01.67-.04 1-.09v-3.59c-.187-.073-.453-.11-.8-.11a9.285 9.285 0 0 0-1-.06c-.415 0-.83.026-1.24.08a3.247 3.247 0 0 0-1 .3 1.74 1.74 0 0 0-.69.6c-.175.28-.262.61-.25.94a1.6 1.6 0 0 0 .74 1.52 4.07 4.07 0 0 0 1.92.4v.01zM90.63 24c-1.087-2.06-2.173-4.493-3.26-7.3a128.231 128.231 0 0 1-3.13-9.17h5c.207.813.453 1.697.74 2.65.287.953.58 1.917.88 2.89.307.973.61 1.92.91 2.84.3.92.6 1.757.9 2.51a134.404 134.404 0 0 0 1.81-5.35c.307-.973.6-1.937.88-2.89.28-.953.527-1.837.74-2.65h4.8c-.987 3.333-2.03 6.39-3.13 9.17-1.1 2.78-2.187 5.213-3.26 7.3h-3.88zm12.75-15.9a25.82 25.82 0 0 1 3.08-.64 25.258 25.258 0 0 1 4-.3 9.653 9.653 0 0 1 3.5.55c.86.316 1.62.85 2.21 1.55.558.7.955 1.517 1.16 2.39.242 1.01.36 2.043.35 3.08V24H113v-8.71a6.32 6.32 0 0 0-.6-3.2 2.43 2.43 0 0 0-2.23-.94h-1.07l-1 .11V24h-4.68l-.04-15.9zM127 2.76a2.574 2.574 0 0 1-.83 2 3 3 0 0 1-3.92 0 2.574 2.574 0 0 1-.83-2 2.574 2.574 0 0 1 .83-2 3 3 0 0 1 3.92 0c.558.512.86 1.244.83 2zM126.55 24h-4.68V7.53h4.68V24zm8.97-2.43a2.63 2.63 0 0 1-.89 2.15 3.15 3.15 0 0 1-4 0 2.63 2.63 0 0 1-.89-2.15 2.63 2.63 0 0 1 .89-2.15 3.15 3.15 0 0 1 4 0 2.63 2.63 0 0 1 .89 2.15zm13.09-9.89c-.42-.107-.91-.217-1.47-.33a9.197 9.197 0 0 0-1.82-.17c-.35.005-.702.032-1.05.08-.314.033-.625.09-.93.17V24h-4.68V8.41c.984-.332 1.985-.61 3-.83 1.25-.272 2.53-.403 3.81-.39h.91c.353 0 .71.043 1.07.13.353.053.71.117 1.07.19.31.06.616.152.91.27l-.82 3.9zM166 23.48a25.82 25.82 0 0 1-3.08.64c-1.323.206-2.66.306-4 .3a9.395 9.395 0 0 1-3.5-.56 5.322 5.322 0 0 1-2.21-1.59 6.186 6.186 0 0 1-1.16-2.43 13.134 13.134 0 0 1-.35-3.11v-9.2h4.68v8.63a6.693 6.693 0 0 0 .6 3.27c.5.72 1.36 1.105 2.23 1h1.07c.38 0 .713-.037 1-.11V7.53H166v15.95z"
                          fill="#3B3E44"></path>
                    <path d="M10.36 18.61a5.7 5.7 0 0 1 7.81-7.82l6.14-6.14C18.63-.017 10.336.39 5.14 5.59c-5.194 5.2-5.593 13.495-.92 19.17l6.14-6.15z"
                          fill="#03A9F4"></path>
                    <path d="M26.33 6.68l-6.14 6.14a5.71 5.71 0 0 1-7.81 7.81l-6.14 6.15c5.68 4.645 13.954 4.23 19.14-.958a14.28 14.28 0 0 0 .95-19.142z"
                          fill="#0DD149"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 60 60" id="logo-circle" xmlns="http://www.w3.org/2000/svg">
                <path fill="#03a9f4"
                      d="M18.1 30A11.9 11.9 0 0 1 30 18.1a11.73 11.73 0 0 1 5.94 1.6l13-13a30 30 0 0 0-42.2 42.2l13-13A11.73 11.73 0 0 1 18.1 30z"></path>
                <path fill="#0dd149"
                      d="M53.28 11.08l-13 13A11.73 11.73 0 0 1 41.9 30 11.9 11.9 0 0 1 30 41.9a11.73 11.73 0 0 1-5.94-1.6l-13 13a30 30 0 0 0 42.2-42.2z"></path>
            </symbol>
            <symbol viewBox="0 0 15 15" id="minus" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 7h15v1H0z"></path>
            </symbol>
            <symbol viewBox="0 0 17.05 16.72" id="pen-city">
                <path class="c1"
                      d="M5.33 14.95l-4.05.58.82-3.81L12.4 1.41l3.23 3.23-10.3 10.31zM10.53 4.26l3.08 3.08"></path>
            </symbol>
            <symbol viewBox="0 0 17.2 17.2" id="percent" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.6 17.2C3.9 17.2 0 13.4 0 8.6 0 3.9 3.8 0 8.6 0s8.6 3.8 8.6 8.6c-.1 4.8-3.9 8.6-8.6 8.6zM8.6 1C4.4 1 1 4.4 1 8.6s3.4 7.6 7.6 7.6 7.6-3.4 7.6-7.6C16.1 4.4 12.8 1 8.6 1z"></path>
                <path d="M7.6 5.9c0 .7-.5 1.3-1.2 1.3S5.1 6.7 5.1 6v-.1c0-.7.6-1.2 1.3-1.2.6 0 1.2.5 1.2 1.2m4.4 5.3c0 .7-.5 1.3-1.2 1.3s-1.3-.5-1.3-1.2v-.1c0-.7.6-1.2 1.3-1.2.6.1 1.2.6 1.2 1.2m-6.9.3l6.2-6.4.7.7-6.2 6.4-.7-.7z"></path>
            </symbol>
            <symbol viewBox="0 0 25.6 29" id="plane" xmlns="http://www.w3.org/2000/svg">
                <path d="M23 13L0 0l3.3 14.5L0 29l23-13 2.6-1.5L23 13zm.2 1l-18.8-.2L1.7 2.3 23.2 14zM1.8 26.5L4.5 15h18.6L1.8 26.5z"></path>
            </symbol>
            <symbol viewBox="0 0 15 15" id="plus">
                <path d="M15 7H8V0H7v7H0v1h7v7h1V8h7"></path>
            </symbol>
            <symbol viewBox="0 0 21 20" id="round-check" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M14.537 7.758l-5.035 5.035-3.266-3.268"></path>
                    <path d="M19.83 10c0 5.155-4.18 9.333-9.334 9.333a9.333 9.333 0 1 1 0-18.666C15.65.667 19.83 4.845 19.83 10z"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 14 17" id="rules-1" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M13.5 16.5H.5V.5h8.834L13.5 4.853V16.5z"></path>
                    <path d="M13 5H9V1m-6 9h8m-8 3h8"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 14 17" id="rules-2" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <path d="M13.5 16.5H.5V.5h8.834L13.5 4.853V16.5z"></path>
                    <path d="M13.484 4.5h-4V.67M7.002 11.49l-1.81.952.345-2.016L4.072 9l2.025-.295.905-1.834.905 1.834L9.931 9l-1.464 1.427.345 2.016-1.81-.951z"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 15 14" id="search" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd" transform="rotate(-45 5.793 5.379)">
                    <circle cx="5.5" cy="5.5" r="5"></circle>
                    <path d="M5.5 10.086v7"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="smile-negative" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd" transform="translate(.4 .4)">
                    <circle cx="17.6" cy="17.6" r="17.6" stroke-linecap="round"></circle>
                    <circle cx="11.2" cy="13.6" r="1.6"></circle>
                    <circle cx="24" cy="13.6" r="1.6"></circle>
                    <path stroke-linecap="round" d="M24.8 25.6c-4.094-3.2-9.506-3.2-13.6 0"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="smile-negative-active" xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd" transform="translate(.4 .4)">
                    <circle cx="17.6" cy="17.6" r="17.6" stroke-linecap="round"></circle>
                    <circle cx="11.2" cy="13.6" r="1.6" stroke="#fff" fill="none"></circle>
                    <circle cx="24" cy="13.6" r="1.6" stroke="#fff" fill="none"></circle>
                    <path stroke-linecap="round" d="M24.8 25.6c-4.094-3.2-9.506-3.2-13.6 0" stroke="#fff"
                          fill="none"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="smile-neutral" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd" stroke-linecap="round" transform="translate(.4 .4)">
                    <circle cx="17.6" cy="17.6" r="17.6"></circle>
                    <circle cx="11.2" cy="13.6" r="1.6"></circle>
                    <circle cx="24" cy="13.6" r="1.6"></circle>
                    <path d="M12 24h11.2"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="smile-neutral-active" xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd" stroke-linecap="round" transform="translate(.4 .4)">
                    <circle cx="17.6" cy="17.6" r="17.6"></circle>
                    <circle cx="11.2" cy="13.6" r="1.6" stroke="#fff" fill="none"></circle>
                    <circle cx="24" cy="13.6" r="1.6" stroke="#fff" fill="none"></circle>
                    <path d="M12 24h11.2" stroke="#fff" fill="none"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="smile-positive" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd" stroke-linecap="round" transform="translate(.4 .4)">
                    <circle cx="17.6" cy="17.6" r="17.6"></circle>
                    <circle cx="11.2" cy="13.6" r="1.6"></circle>
                    <circle cx="24" cy="13.6" r="1.6"></circle>
                    <path d="M11.2 23.2c4.094 3.2 9.506 3.2 13.6 0"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 36 36" id="smile-positive-active" xmlns="http://www.w3.org/2000/svg">
                <g fill-rule="evenodd" stroke-linecap="round" transform="translate(.4 .4)">
                    <circle cx="17.6" cy="17.6" r="17.6"></circle>
                    <circle cx="11.2" cy="13.6" r="1.6" stroke="#fff" fill="none"></circle>
                    <circle cx="24" cy="13.6" r="1.6" stroke="#fff" fill="none"></circle>
                    <path d="M11.2 23.2c4.094 3.2 9.506 3.2 13.6 0" stroke="#fff" fill="none"></path>
                </g>
            </symbol>
            <symbol viewBox="0 0 18 21" id="trash" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.5 20.5h-15V7h1v12.5h13V7h1v13.5zm-5-4.5h-1V7h1v9zm-4 0h-1V7h1v9zM18 4.5H0v-1h18v1zM11 1H7V0h4v1z"></path>
            </symbol>
            <symbol viewBox="0 0 16 17" id="user" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.3 16.2H.5V.5h14.8v15.7zm-13.8-1h12.8V1.5H1.5v13.7z"></path>
                <path d="M7.9 4.3c-1.4 0-2.6 1.2-2.6 2.6s1.2 2.6 2.6 2.6 2.6-1.2 2.6-2.6-1.2-2.6-2.6-2.6zm0 4.2c-.9 0-1.6-.7-1.6-1.6 0-.9.7-1.6 1.6-1.6.9 0 1.6.7 1.6 1.6 0 .9-.7 1.6-1.6 1.6zm2.7 4.1s-1-1.7-2.7-1.7c-1.6 0-2.6 1.7-2.6 1.7l-.9-.5c0-.1 1.3-2.2 3.5-2.2s3.5 2.2 3.5 2.3l-.8.4z"></path>
            </symbol>
        </svg>
    </div>
    <div id="content-1"></div>
    <div id="content" class="main-wrapper">
        <div class="main-container" data-reactroot="" data-reactid="1" data-react-checksum="162682078">
            <!-- react-empty: 2 -->
            <div class="main-content" data-reactid="3">
                <div data-reactid="166"><!-- react-empty: 167 -->
                    <div class="_3cS3K" data-reactid="168">
                        <div class="wLeGx kTe6a" data-reactid="169">
                            <div class="_3W9lM _3KP7Z _3QdOB" data-reactid="170">
                                <div class="_3cbXC" data-reactid="171">
                                    <div class="zd3ON" data-reactid="172"><a class="_33tWM" data-reactid="173"><span
                                                    data-reactid="174"><svg class="_10ciZ" data-reactid="175"><use
                                                            xlink:href="#arrow-down-thin"
                                                            data-reactid="176"></use></svg><span class="_31iVU"
                                                                                                 data-reactid="177">Вернуться к расчету</span></span></a>
                                    </div>
                                    <div class="" data-reactid="178">
                                        <div class="_2r3xk" data-reactid="179">
                                            <div class="_2oLhw" data-reactid="180">
                                                <div class="" data-reactid="181"><h1 class="x2N_6 _3dK9S"
                                                                                     data-reactid="182"><?php the_title(); ?></h1>
                                                    <div class="_3ZU3u" data-reactid="183"><?php the_field('block_1_subtitle'); ?></div>
                                                </div>
                                                <div class="XsuI4" data-reactid="184">
                                                    <div class="D895_ _2V4-h _1eEG1 mblzX ER4_X" data-reactid="185"><img
                                                                class="_3OmmV"
                                                                src="<?php the_field('block_1_img'); ?>"
                                                                alt="Ренессанс Кредит" title="Ренессанс Кредит"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="_1aEMo _2NDdp" data-reactid="186">
                                            <div class="_23YUJ _381nm" data-reactid="187"></div>
                                            <div class="PopHS" data-reactid="188">
                                                <ul class="_3yyTb" data-reactid="189">
                                                    <li class="_2XBag" data-reactid="190">
                                                        <div class="_390m1 _1sid2 BzFP3" data-test="ui-icon"
                                                             data-reactid="191">
                                                            <svg class="_4fAE4" data-reactid="192">
                                                                <use xlink:href="#percent" data-reactid="193"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="LiV2D" data-reactid="194"><span class="_3AHzk"
                                                                                                     data-reactid="195">Процентная ставка:</span><span
                                                                    class="_3t5p1 _2mg0e" data-reactid="196"><?php the_field('block_1_rate'); ?></span></span></li>
                                                    <li class="_2XBag" data-reactid="200">
                                                        <div class="_390m1 _1sid2 BzFP3" data-test="ui-icon"
                                                             data-reactid="201">
                                                            <svg class="_4fAE4" data-reactid="202">
                                                                <use xlink:href="#bank" data-reactid="203"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="LiV2D" data-reactid="204"><span class="_3AHzk"
                                                                                                     data-reactid="205">Сумма кредита:</span><span
                                                                    class="_3t5p1 _2mg0e" data-reactid="206"><?php the_field('block_1_sum'); ?></span></span>
                                                    </li>
                                                    <li class="_2XBag" data-reactid="207">
                                                        <div class="_390m1 _1sid2 BzFP3" data-test="ui-icon"
                                                             data-reactid="208">
                                                            <svg class="_4fAE4" data-reactid="209">
                                                                <use xlink:href="#calendar" data-reactid="210"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="LiV2D" data-reactid="211"><span class="_3AHzk"
                                                                                                     data-reactid="212">Срок:</span><span
                                                                    class="_3t5p1 _2mg0e"
                                                                    data-reactid="213"><?php the_field('block_1_term'); ?></span></span></li>
                                                    <li class="_2XBag" data-reactid="214">
                                                        <div class="_390m1 _1sid2 BzFP3" data-test="ui-icon"
                                                             data-reactid="215">
                                                            <svg class="_4fAE4" data-reactid="216">
                                                                <use xlink:href="#list" data-reactid="217"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="LiV2D" data-reactid="218"><span class="_3AHzk"
                                                                                                     data-reactid="219">Документы:</span><span
                                                                    class="_3t5p1 _2mg0e" data-reactid="220"><?php the_field('block_1_documents'); ?></span></span></span></li>
                                                    <li class="_2XBag" data-reactid="227">
                                                        <div class="_390m1 _1sid2 BzFP3" data-test="ui-icon"
                                                             data-reactid="228">
                                                            <svg class="_4fAE4" data-reactid="229">
                                                                <use xlink:href="#user" data-reactid="230"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="LiV2D" data-reactid="231"><span class="_3AHzk"
                                                                                                     data-reactid="232">Возраст заёмщика:</span><span
                                                                    class="_3t5p1 _2mg0e" data-reactid="233"><?php the_field('block_1_age'); ?></span></span></li>
                                                    <li class="_2XBag" data-reactid="238">
                                                        <div class="_390m1 _1sid2 BzFP3" data-test="ui-icon"
                                                             data-reactid="239">
                                                            <svg class="_4fAE4" data-reactid="240">
                                                                <use xlink:href="#clock" data-reactid="241"></use>
                                                            </svg>
                                                        </div>
                                                        <span class="LiV2D" data-reactid="242"><span class="_3AHzk"
                                                                                                     data-reactid="243">Предварительное решение:</span><span
                                                                    class="_3t5p1 _2mg0e" data-reactid="244"><?php the_field('block_1_decigion'); ?></span></span></li>
                                                </ul>
                                            </div>
                                            <div class="_1LhuI" data-reactid="247">
                                                <div class="_180uG" data-reactid="248">
                                                    <div class="_3Gb4E" data-reactid="249"><!--noindex--><a target="_blank"
                                                                                              class="_3yCMa _20Wee N0qHF _1-c8L"
                                                                                              href="<?php the_field('block_1_link'); ?>"
                                                                                              data-test="ui-button"
                                                                                              rel="nofollow"
                                                                                              data-reactid="250"><?php the_field('block_1_button_text'); ?></a><!--/noindex--></div>
                                                    <div class="_3Gb4E" data-reactid="251">
                                                        <a id="kredit-calculate-button" href="#middle-part" class="_3yCMa _25N6O N0qHF _1-c8L" type="button"
                                                                data-test="ui-button" data-reactid="252">Рассчитать
                                                            кредит
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="FYTqf _1nunx kTe6a" data-reactid="253" id="middle-part">
                            <div class="UZpaj" data-reactid="254">
                                <div id="credit-calculator" class="_2YmV1 kTe6a" data-reactid="255">
                                    <div class="_3W9lM I76dw" data-reactid="256">
                                        <div class="_3cbXC" data-reactid="257"><h2 class="_3UbT_ _3dK9S"
                                                                                   data-reactid="258">
                                                <?php the_field('block_2_title'); ?></h2>
                                            <div class="_2jcw4" data-reactid="259">
                                                <div class="_12lct" data-reactid="260">
                                                    <div class="_1C2Hg _38XMN" data-test="ui-group" data-reactid="261">
                                                        <div class="F0ejS _2IwHh" data-reactid="262">Какая сумма вам
                                                            нужна
                                                        </div>
                                                        <div class="_937Rd" data-reactid="263">
                                                            <div class="L-qoq ARpTy _1ZPUn" data-test="ui-slider-input"
                                                                 data-reactid="264">
                                                                <div class="_31J-9 _3X61c _16jhA"
                                                                     data-test="ui-slider-input-input"
                                                                     data-reactid="265">
                                                                    <div class="_3FIbJ" data-reactid="266"><input
                                                                                type="text" step="5000" min="30000"
                                                                                max="700000" autocorrect="off"
                                                                                autocomplete="off" autocapitalize="off"
                                                                                spellcheck="off"
                                                                                id="price"
                                                                                class="_1QIZ8 _3pwdR _2hF92 _3f6yu"
                                                                                role="input" value="585 000"
                                                                                data-reactid="267"></div>
                                                                </div>
                                                                <!--<div class="_11d9w D6rA1" tabindex="0"
                                                                     data-test="ui-slider-input-slider"
                                                                     data-reactid="268">
                                                                    <div class="_6pa1Q" data-reactid="269">
                                                                        <div class="_2YcTB"
                                                                             style="margin-left: 82.8358%;"
                                                                             data-reactid="270">
                                                                            <div class="_3vsNC" data-value="585000"
                                                                                 data-reactid="271"></div>
                                                                        </div>
                                                                        <div class="Ii5vJ" data-reactid="272">
                                                                            <div class="_2ie_C _13lN5 _29cln"
                                                                                 data-test="ui-slider-input-slider-progress-bar"
                                                                                 data-reactid="273">
                                                                                <div class="_3wNQq"
                                                                                     data-reactid="274"><span
                                                                                            class="_3iBtG _14PoF"
                                                                                            style="transform:scaleX(0);-webkit-transform:scaleX(0);-ms-transform:scaleX(0);"
                                                                                            data-reactid="275"></span><span
                                                                                            class="_3iBtG _3y2XU"
                                                                                            style="transform: scaleX(0.828358);"
                                                                                            data-reactid="276"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>-->
                                                                <div id="slider-range"></div>
                                                            </div>
                                                            <div data-test="ui-select" id="currency-kr-form-wrap" class="_1F9QS ARpTy SSAxA"
                                                                 data-reactid="277">
                                                                <div class="_31J-9 _3yuTA _16jhA"
                                                                     data-test="ui-select-input" data-reactid="278">
                                                                    <div class="_3FIbJ " data-reactid="279">
                                                                        <div autocorrect="off" autocomplete="off"
                                                                             autocapitalize="off" spellcheck="off"
                                                                             class="_1QIZ8 _3pwdR _1O6pC _2hF92 _18Yqt _3j6D0"
                                                                             id="currency" name="currency"
                                                                             data-reactid="280" id="cur_currency-kr-form" onclick="select_currency_kr_form()">₽
                                                                        </div>
                                                                        <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                                             data-test="ui-select-input-icon"
                                                                             data-reactid="281">
                                                                            <svg class="_4fAE4" data-reactid="282">
                                                                                <use xlink:href="#arrow-down-thin"
                                                                                     data-reactid="283"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul id="currency-kr-form" class="_3nnad aDtzb" data-test="ui-select-values"
                                                                    data-reactid="284">
                                                                    <li onclick="select_currency_kr_form('₽')" value="RUB" label="₽"
                                                                        class="Z96DE _3pzz9 _1kLbN"
                                                                        data-test="ui-menu-item" data-reactid="285">₽
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_1LLwb _7bk4J tk7dl" data-reactid="286">
                                                        <div class="_1C2Hg _1lqVV" data-reactid="287">
                                                            <div data-test="ui-select" class="_1F9QS" data-reactid="288"
                                                                 id="period-kr-form-wrap">
                                                                <div class="_31J-9 _3yuTA _16jhA"
                                                                     data-test="ui-select-input" data-reactid="289">
                                                                    <label
                                                                            class="_1oupA _2IwHh" for="term"
                                                                            data-reactid="290">На какой срок</label>
                                                                    <div class="_3FIbJ " data-reactid="291">
                                                                        <!--<div autocorrect="off" autocomplete="off"
                                                                             autocapitalize="off" spellcheck="off"
                                                                             class="_1QIZ8 _3pwdR _1O6pC _18Yqt" id="term"
                                                                             name="term" data-reactid="292"
                                                                             onclick="select_srok()">5 лет
                                                                        </div>-->
                                                                        <input autocorrect="off" autocomplete="off"
                                                                               autocapitalize="off" spellcheck="off"
                                                                               class="_1QIZ8 _3pwdR _1O6pC _18Yqt"
                                                                               id="cur_period-kr-form"
                                                                               name="term" data-reactid="292"
                                                                               onclick="select_period_kr_form()"
                                                                               value="5 лет">
                                                                        <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k"
                                                                             data-test="ui-select-input-icon"
                                                                             data-reactid="293">
                                                                            <svg class="_4fAE4" data-reactid="294">
                                                                                <use xlink:href="#arrow-down-thin"
                                                                                     data-reactid="295"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul id="period-kr-form" class="_3nnad aDtzb"
                                                                    data-test="ui-select-values"
                                                                    data-reactid="296">
                                                                    <?php if(get_field('block_2_term')) { ?>
                                                                        <?php foreach(get_field('block_2_term') as $item) { ?>
                                                                            <li onclick="select_period_srok_kr_form('<?= $item['term_text']; ?>')"
                                                                                value="" label="<?= $item['term_text']; ?>" class="Z96DE _3pzz9"
                                                                                data-test="ui-menu-item" data-reactid="297"><?= $item['term_text']; ?>
                                                                            </li>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="_1C2Hg _1lqVV" data-reactid="301">
                                                            <div data-test="ui-select" class="_1F9QS "
                                                                 data-reactid="302">
                                                                <div class="_31J-9 _3yuTA _3z5-G _16jhA"
                                                                     data-test="ui-select-input" data-reactid="303">
                                                                    <label
                                                                            class="_1oupA _2IwHh" for="solvencyProof"
                                                                            data-reactid="304">Подтверждение
                                                                        дохода</label>
                                                                    <div class="_3FIbJ " data-reactid="305">
                                                                        <div autocorrect="off" autocomplete="off"
                                                                             autocapitalize="off" spellcheck="off"
                                                                             class="_1QIZ8 _3pwdR _1O6pC _18Yqt"
                                                                             id="solvencyProof" name="solvencyProof"
                                                                             disabled="" data-reactid="306">не требуется
                                                                        </div>
                                                                        <div class="_390m1 _1sid2 _18XP_ pEdyv _2fl7k "
                                                                             data-test="ui-select-input-icon"
                                                                             data-reactid="307">
                                                                            <svg class="_4fAE4" data-reactid="308">
                                                                                <use xlink:href="#arrow-down-thin"
                                                                                     data-reactid="309"></use>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ul class="_3nnad aDtzb" data-test="ui-select-values"
                                                                    data-reactid="310">
                                                                    <li value="None" label="не требуется"
                                                                        class="Z96DE _3pzz9 _1kLbN"
                                                                        data-test="ui-menu-item"
                                                                        data-reactid="311">не требуется
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3L9yW" data-reactid="312">
                                                        <div class="_2yIUX" data-reactid="313"><!--noindex--><a target="_blank"
                                                                                                  class="_3yCMa _20Wee N0qHF _1-c8L"
                                                                                                  rel="nofollow" href="<?php the_field('block_1_link'); ?>"
                                                                                                  data-test="ui-button"
                                                                                                  data-reactid="314"><?php the_field('block_1_button_text'); ?></a><!--/noindex--></div>
                                                    </div>
                                                </div>
                                                <div class="-V0Gw _3nBbU" data-reactid="315">
                                                    <div class="_1TS6I" data-reactid="316">
                                                        <div class="_37X4Y" data-reactid="317">
                                                            <div data-reactid="318">
                                                                <div class="_2n3gE _2IwHh" data-reactid="319">Ставка
                                                                </div>
                                                                <div class="_3_W52 _2mg0e" data-reactid="320"><span
                                                                            data-reactid="321"><?php the_field('block_2_rate'); ?></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="_37X4Y" data-reactid="322">
                                                            <div data-reactid="323">
                                                                <div class="_2n3gE _2IwHh" data-reactid="324">
                                                                    Ежемесячный
                                                                    платёж
                                                                </div>
                                                                <div class="_3_W52 _2mg0e" data-reactid="325"><span
                                                                            class="_2m0zk" data-reactid="326"><span
                                                                                data-reactid="327">от <span id="monthpay"></span></span><span
                                                                                class="_3LCRp"
                                                                                data-reactid="328">₽</span></span></div>
                                                            </div>
                                                        </div>
                                                        <div class="_37X4Y" data-reactid="329" style="display: none;">
                                                            <div class="_3kSy4" data-reactid="330">
                                                                <svg class="_2Q-s_" data-reactid="331">
                                                                    <use xlink:href="#graph" data-reactid="332"></use>
                                                                </svg><!-- react-text: 333 -->График платежей
                                                                <!-- /react-text --></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2YmV1 kTe6a" data-reactid="334">
                                    <div class="_3W9lM I76dw" data-reactid="335">
                                        <div class="_3cbXC" data-reactid="336">
                                            <div class="Ho46v _3vPd0 _2Cq5_" data-test="ui-tabs" data-reactid="337">
                                                <div class="_1TAoF _3uqC5 _3uqC5-1bl" data-reactid="338">
                                                    <div class="_3v6iT Rgs0e" data-test="ui-tab" data-reactid="339">
                                                        <label
                                                                class="_2Vd4q" data-reactid="340"><input type="radio"
                                                                                                         class="_3rJg1"
                                                                                                         name="tabs"
                                                                                                         value="1"
                                                                                                         readonly=""
                                                                                                         data-reactid="341"
                                                                                                         checked="">
                                                            <h2 class="_2Qhvd" data-reactid="342">Ставки</h2></label>
                                                    </div>
                                                    <div class="_3v6iT" data-test="ui-tab" data-reactid="343"><label
                                                                class="_2Vd4q" data-reactid="344"><input type="radio"
                                                                                                         class="_3rJg1"
                                                                                                         name="tabs"
                                                                                                         value="2"
                                                                                                         readonly=""
                                                                                                         data-reactid="345">
                                                            <h2 class="_2Qhvd" data-reactid="346">Условия</h2></label>
                                                    </div>
                                                    <div class="_3v6iT" data-test="ui-tab" data-reactid="347"><label
                                                                class="_2Vd4q" data-reactid="348"><input type="radio"
                                                                                                         class="_3rJg1"
                                                                                                         name="tabs"
                                                                                                         value="3"
                                                                                                         readonly=""
                                                                                                         data-reactid="349">
                                                            <h2 class="_2Qhvd" data-reactid="350">Требования</h2>
                                                        </label>
                                                    </div>
                                                    <div class="_3v6iT" data-test="ui-tab" data-reactid="351">
                                                        <label
                                                                class="_2Vd4q" data-reactid="352"><input type="radio"
                                                                                                         class="_3rJg1"
                                                                                                         name="tabs"
                                                                                                         value="4"
                                                                                                         readonly=""
                                                                                                         data-reactid="353">
                                                            <h2 class="_2Qhvd" data-reactid="354">Документы</h2></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_49nrJ ER4_X ER4_X-1bl-1">
                                                <div class=""><p class="_2B8Jl"><?php the_field('rates_desc'); ?></p>
                                                    <div class="_3L9Rb Sw0Pa">
                                                        <div class="_3nL-2">
                                                            <table class="_39pf_ _1Unue">
                                                                <tbody>
                                                                <tr class="_1GqrZ _1Ayp8 _2WBPO">
                                                                    <th class="_1njmc _1_2t1 _1LDj0"><span
                                                                                class="_1_4Z4"><?php the_field('rates_left_table_title'); ?></span></th>
                                                                    <th class="_1njmc _1_2t1 _1LDj0"><span
                                                                                class="_1_4Z4"><?php the_field('rates_right_table_title'); ?></span>
                                                                    </th>
                                                                </tr>
                                                                <tr class="_1GqrZ _2WBPO">
                                                                    <?php if(get_field('rates_table')) { ?>
                                                                        <?php foreach(get_field('rates_table') as $item) { ?>
                                                                            <td class="_1njmc _1LDj0"><span class="_1GG0F"><?= $item['left_side']; ?></span>
                                                                            </td>
                                                                            <td  class="_1njmc _1LDj0"><span class="_1GG0F"><?= $item['right_side']; ?></span>
                                                                            </td>
                                                                        <?php }?>
                                                                    <?php }?>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_49nrJ ER4_X ER4_X-1bl-2">
                                                <div>
                                                    <ul class="_2UDHC">
                                                        <?php if(get_field('conditions_list')) { ?>
                                                            <?php foreach(get_field('conditions_list') as $item) { ?>
                                                                <li class="_3AwLH"><?= $item['item']; ?></li>
                                                            <?php }?>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                                <div class="_1a-k9">
                                                    <div class="_3FkEQ">
                                                        <div class="_2b5dU"><?php the_field('conditions_title_1'); ?></div>
                                                        <div><p><?php the_field('conditions_desc_1'); ?></p></div>
                                                    </div>
                                                    <div class="_3FkEQ">
                                                        <div class="_2b5dU"><?php the_field('conditions_title_2'); ?></div>
                                                        <p><?php the_field('conditions_desc_2'); ?></p></div>
                                                    <div class="_3FkEQ">
                                                        <div class="_2b5dU"><?php the_field('conditions_title_3'); ?></div>
                                                        <div><?php the_field('conditions_desc_3'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_49nrJ ER4_X ER4_X-1bl-3">
                                                <div>
                                                    <ul class="_2UDHC">
                                                        <?php if(get_field('demands_list')) { ?>
                                                            <?php foreach(get_field('demands_list') as $item) { ?>
                                                                <li class="_3AwLH"><?= $item['item']; ?></li>
                                                            <?php }?>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="_49nrJ ER4_X ER4_X-1bl-4">
                                                <div>
                                                    <ul class="_2UDHC">
                                                        <?php if(get_field('documents_list')) { ?>
                                                            <?php foreach(get_field('documents_list') as $item) { ?>
                                                                <li class="_3AwLH _2zaGV"><?= $item['item']; ?></li>
                                                            <?php }?>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                                <div class="_1a-k9">
                                                    <div class="_3FkEQ">
                                                        <div class="_2b5dU"><?php the_field('documents_title'); ?></div>
                                                        <p class="_2zaGV"><?php the_field('documents_subtitle'); ?></p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_2YmV1 kTe6a" data-reactid="372">
                                    <div class="_3W9lM I76dw" data-reactid="373">
                                        <div class="_3cbXC" data-reactid="374">
                                            <div class="Ho46v _3vPd0 _2Cq5_" data-test="ui-tabs" data-reactid="375">
                                                <div class="_1TAoF _3uqC5 _3uqC5-2bl" data-reactid="376">
                                                    <div class="_3v6iT Rgs0e" data-test="ui-tab" data-reactid="377">
                                                        <label
                                                                class="_2Vd4q" data-reactid="378"><input type="radio"
                                                                                                         class="_3rJg1"
                                                                                                         name="infoBuyTab"
                                                                                                         value="1"
                                                                                                         readonly=""
                                                                                                         data-reactid="379"
                                                                                                         checked=""><span
                                                                    class="_2Qhvd"
                                                                    data-reactid="380">Как получить</span></label></div>
                                                    <div class="_3v6iT" data-test="ui-tab" data-reactid="381">
                                                        <label
                                                                class="_2Vd4q" data-reactid="382"><input type="radio"
                                                                                                         class="_3rJg1"
                                                                                                         name="infoBuyTab"
                                                                                                         value="3"
                                                                                                         readonly=""
                                                                                                         data-reactid="383"><span
                                                                    class="_2Qhvd"
                                                                    data-reactid="384">Как погасить</span></label></div>
                                                </div>
                                            </div>
                                            <div class="_49nrJ ER4_X ER4_X-2bl-1">
                                                <div>
                                                    <ul class="_2UDHC">
                                                        <?php if(get_field('how_to_get_list')) { ?>
                                                            <?php foreach(get_field('how_to_get_list') as $item) { ?>
                                                                <li class="_3AwLH"><?= $item['item']; ?></li>
                                                            <?php }?>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="_49nrJ ER4_X ER4_X-2bl-2">
                                                <div class="X57Be">
                                                    <div class="_3NMOd">
                                                        <div class="_1YKki">
                                                            <svg viewBox="0 0 71 77">
                                                                <path d="M43.2 58.5c1 1.2 2.5 1.9 4 1.9 1.2 0 2.3-.4 3.3-1.2l18.3-15.1c2.2-1.8 2.5-5.1.7-7.3L40.6 1.9c-1.8-2.2-5.1-2.5-7.3-.7L15 16.3c-2.2 1.8-2.5 5.1-.7 7.3l7.5 9.1-8.5 6.8c-4.5 3.5-5 9.7-2.9 13.7l-4.9 4.3c-4.4-8.6-4.8-19-.3-28.1l-1.8-.9C-3.9 43.3.9 61.4 14.6 70.6c5.7 3.9 12.2 5.7 18.6 5.7 10.7 0 21.1-5.1 27.5-14.6.9-1.3 1.7-2.7 2.4-4.2l-1.8-.9c-.7 1.4-1.4 2.7-2.3 3.9-8.3 12.2-23.7 16.7-36.9 11.7l19.1-15.9-1.3-1.5-19.8 16.6.1.1c-1.5-.7-3-1.5-4.5-2.5-3.8-2.6-6.9-5.9-9.2-9.7l6.4-5.6-.4-.7c-2.1-3.3-1.9-8.8 2.1-11.9l18.8-15.2c.9 1.1 1.8 2.6 1.7 4.1-.1 1-.5 1.8-1.5 2.6L25 40.2l.4.7c.1.2 2.8 5.7-2.7 10.2l1.3 1.6c5.5-4.5 4.3-9.9 3.6-11.9l.6-.5 15 18.2zm24.7-20.4c1.1 1.4.9 3.4-.4 4.5L49.2 57.7c-1.4 1.1-3.4.9-4.5-.4L42.8 55 66 35.8l1.9 2.3zm-33-3.9c1.3-1.1 2.1-2.5 2.2-4 .2-2.7-1.7-5.1-2.9-6.3l-.6-.7-10.3 8.3-4.3-5.3 23-19-1.3-1.5-23 19-1.9-2.3c-1.1-1.4-.9-3.4.4-4.5L34.6 2.7c1.4-1.1 3.4-.9 4.5.4l25.7 31.1-23.2 19.3-12-14.6 5.3-4.7z"></path>
                                                                <path d="M10.3 21.9l-1.5-1.3c-2 2.3-3.1 4-3.2 4l1.7 1.1s1.1-1.6 3-3.8z"></path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <div class="_3AKWC _2mg0e"><span class="_3FL_b"><!-- react-text: 637 -->1
                                                                    <!-- /react-text --><!-- react-text: 638 -->.
                                                                    <!-- /react-text --></span><!-- react-text: 639 -->
                                                                <?php the_field('how_to_pay_off_title_1'); ?><!-- /react-text --></div>
                                                            <div class="_1hRHn"><?php the_field('how_to_pay_off_desc_1'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="_3NMOd DwTOv">
                                                        <svg class="_1mZAW">
                                                            <use xlink:href="#arrow-down-thin"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="_3NMOd">
                                                        <div class="_1YKki">
                                                            <svg viewBox="0 0 76 79">
                                                                <path d="M73.8 29.7l-3.6-4.2 3.5-3.2-1.3-1.5-3.6 3.2L56.2 9.3 60 5.7l-1.4-1.5-3.7 3.5-4.4-5.1C48.7.4 45.4.1 43.2 1.9L19 22.3c-2.2 1.8-2.5 5.1-.7 7.3l4.5 5.4-8.5 6.8c-4.5 3.5-5 9.7-2.9 13.7l-5.3 4.6 1.3 1.5 6.5-5.7-.4-.7c-2.1-3.3-1.9-8.8 2.1-11.9l18.8-15.2c.9 1.1 1.8 2.6 1.7 4.1-.1 1-.5 1.8-1.5 2.6L26 42.5l.4.7c.1.2 2.8 5.7-2.7 10.2L25 55c5.5-4.5 4.3-9.9 3.6-11.9l.4-.4 11.9 14.6-19.8 16.4c-1.8-.8-3.6-1.7-5.4-2.9-14.3-9.6-18-29.1-8.4-43.3 1.2-1.8 2.7-3.5 4.3-5.1L10.2 21c-1.7 1.6-3.2 3.5-4.5 5.4-10.2 15.2-6.2 35.9 8.9 46.1 5.6 3.8 12.1 5.6 18.5 5.6 9.2 0 18.3-3.8 24.7-11l-1.5-1.3c-8.4 9.4-21.6 12.6-33.2 8.7l18.8-15.7c1.8 2.1 5.1 2.4 7.3.6l24.3-20.3.1-.1c2.7-2.9 2.7-6.2.2-9.3zM48.1 58c-1.4 1.1-3.4.9-4.5-.4L30.4 41.4l5.5-4.8c1.3-1.1 2.1-2.5 2.2-4 .2-2.7-1.7-5.1-2.9-6.3l-.6-.7-10.3 8.3-4.5-5.4c-1.1-1.4-.9-3.4.4-4.5L39.3 8 68 41.3 48.1 58zm24.2-20.3L69.5 40 40.9 6.6l3.6-3c1.4-1.2 3.4-1 4.5.4l4.4 5.2-2.2 2 1.4 1.5 2.1-2 12.6 14.7-2 1.9 1.3 1.5 2-1.8 3.6 4.1c1.9 2.2 1.9 4.4.1 6.6z"></path>
                                                                <path d="M56.3 39.5l-10.2-.1.9-6.3-2-.2-1.1 8.4 12.4.2zM20.6 16.4l-.8-1.8c-1.8.8-3.6 1.8-5.2 2.9l1.1 1.7c1.6-1.1 3.2-2 4.9-2.8zM59 62.6l1.6 1.1c0-.1 1.2-1.7 2.6-4.4l-1.8-.9c-1.3 2.5-2.4 4.1-2.4 4.2z"></path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <div class="_3AKWC _2mg0e"><span class="_3FL_b"><!-- react-text: 652 -->2
                                                                    <!-- /react-text --><!-- react-text: 653 -->.
                                                                    <!-- /react-text --></span><!-- react-text: 654 -->
                                                                <?php the_field('how_to_pay_off_title_2'); ?><!-- /react-text --></div>
                                                            <div class="_1hRHn"><?php the_field('how_to_pay_off_desc_2'); ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="_3NMOd DwTOv">
                                                        <svg class="_1mZAW">
                                                            <use xlink:href="#arrow-down-thin"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="_3NMOd">
                                                        <div class="_1YKki">
                                                            <svg viewBox="0 0 74 76">
                                                                <path d="M63 26.8l1.8-.9c-2.3-4.4-5.6-8.3-9.5-11.3L54 16.1c3.7 2.9 6.8 6.6 9 10.7zM73.3 42.8L54.9 23.7 42 2.1l-4.7 3 .7 1.1-6-6.3-20.1 19.5 11.4 11.8-9.5 7.7c-4.7 3.7-5.2 10-3.1 14.2l-4.2 3.7C4 52.3 2.6 47.1 2.6 41.6c0-2.8.4-5.6 1.1-8.2l-1.9-.5C1 35.7.7 38.7.7 41.7c0 18.8 15.3 34 34 34 3.8 0 7.5-.6 11-1.8l-.7-2.1c-3.4 1.2-6.9 1.7-10.4 1.7-3.7 0-7.3-.6-10.6-1.8l17.9-14.9L49 68.5l23.6-15-3.7-6.3 4.4-4.4zm-20 16.7l-6.6-6.8L63.9 36l6.6 6.9-17.2 16.6zM41.4 4.9l7.4 12.5L38.5 6.7l2.9-1.8zm-9.5-2.1l6.6 6.9-17.1 16.7-6.7-6.9L31.9 2.8zm-9.2 25L40 11.1l22.5 23.4-17.2 16.7-13.6-14.1 4.4-3.9c1.4-1.2 2.2-2.6 2.3-4.2.2-2.7-1.8-5.2-2.9-6.4l-.6-.7-10 8.1-2.2-2.2zM7.4 58.5l5.7-5-.4-.7c-2.1-3.4-1.9-9.1 2.3-12.3l19.6-15.8c.9 1.1 1.9 2.7 1.8 4.3-.1 1-.6 1.9-1.6 2.8L26.4 39l-.6.5.4.7c.1.2 2.9 5.9-2.9 10.6l1.3 1.6C30.3 47.7 29 42 28.3 40l1.9-1.6 1.7 1.8-.1.1 9.1 14.9-19 15.8c-6-2.6-11.1-7-14.5-12.5zm62.5-5.7L49.6 65.7 37.9 46.4l15.3 15.9 14.1-13.7 2.6 4.2z"></path>
                                                                <path d="M7.9 23.8l-1.7-1.1c-1 1.4-1.8 2.9-2.5 4.5l1.8.8c.7-1.4 1.5-2.8 2.4-4.2zM52.006 52.083L53.45 50.7l1.937 2.02-1.443 1.384zM39.262 18.093l1.48-1.345 6.93 7.62-1.48 1.345zM36.448 36.16l1.427-1.4 9.037 9.204-1.427 1.4z"></path>
                                                            </svg>
                                                        </div>
                                                        <div>
                                                            <div class="_3AKWC _2mg0e"><span class="_3FL_b"><!-- react-text: 667 -->3
                                                                    <!-- /react-text --><!-- react-text: 668 -->.
                                                                    <!-- /react-text --></span><!-- react-text: 669 -->
                                                                <?php the_field('how_to_pay_off_title_3'); ?><!-- /react-text --></div>
                                                            <div class="_1hRHn"><?php the_field('how_to_pay_off_desc_3'); ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="_2cM7S" data-reactid="429">
                                                <div class="_6UjP2" data-reactid="430"><!--noindex--><a target="_blank"
                                                                                          class="_3yCMa _20Wee N0qHF _1-c8L"
                                                                                          href="<?php the_field('block_1_link'); ?>"
                                                                                          rel="nofollow"
                                                                                          data-test="ui-button"
                                                                                          data-reactid="431"><?php the_field('block_1_button_text'); ?></a><!--/noindex--></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- react-empty: 743 -->
                </div>
            </div>
            <!-- react-empty: 525 --><!-- react-empty: 526 --><!-- react-empty: 527 --></div>
    </div>
    <div id="debug-panel-root"></div>

    <div>
        <div data-reactroot="" class="_2odgP _2gmu8 _2ZCuR overlay-block-hidden" id="overlay" data-test="ui-overlay">
            <div class="_1FEpw mblzX ER4_X"></div>
            <div class="_39KyN _2cto4 _1kN4b _3-MuX _3E9HO" data-test="ui-dialog">
                <section class="_19lUd"><span class="_2JB7j"><svg class="_1aozN"><use
                                    xlink:href="#icon-cross"></use></svg></span>
                    <div class="_3hmHp">
                        <div class="_2IvCa">
                            <div class="_31YzN">
                                <svg class="_3OTEy">
                                    <use xlink:href="#arrow"></use>
                                </svg>
                            </div>
                            <div class="nLzDf _2mg0e">График платежей</div>
                        </div>
                        <div>
                            <div class="">
                                <div class="_3L9Rb _3MJNB">
                                    <div class="_3nL-2">
                                        <table class="_39pf_ _1Unue">
                                            <tbody>
                                            <tr class="_1GqrZ _37850 _2mg0e">
                                                <td class="_1njmc _3KE63">Всего</td>
                                                <td class="_1njmc _3KE63"></td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 24 -->125 000
                                                        <!-- /react-text --><!-- react-text: 25 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 29 -->15 255
                                                        <!-- /react-text --><!-- react-text: 30 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 34 -->0
                                                        <!-- /react-text --><!-- react-text: 35 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 39 -->125 000
                                                        <!-- /react-text --><!-- react-text: 40 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 44 -->140 255
                                                        <!-- /react-text --><!-- react-text: 45 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                            </tr>
                                            <tr class="_1GqrZ _1Ayp8">
                                                <th class="_1njmc _1_2t1 _3KE63">№</th>
                                                <th class="_1njmc _1_2t1 _3KE63">Дата платежа</th>
                                                <th class="_1njmc _1_2t1 _3KE63">Остаток задолженности</th>
                                                <th class="_1njmc _1_2t1 _3KE63">Начисленные проценты</th>
                                                <th class="_1njmc _1_2t1 _3KE63 tbYyG">Коммиссия</th>
                                                <th class="_1njmc _1_2t1 _3KE63">Плановый платёж</th>
                                                <th class="_1njmc _1_2t1 _3KE63">Сумма платежа</th>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">1</td>
                                                <td class="_1njmc _3KE63">12.08.2018</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 59 -->125 000
                                                    <!-- /react-text -->
                                                    <!-- react-text: 60 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 63 -->0<!-- /react-text -->
                                                    <!-- react-text: 64 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 68 -->0
                                                        <!-- /react-text --><!-- react-text: 69 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 72 -->0<!-- /react-text -->
                                                    <!-- react-text: 73 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 76 -->0<!-- /react-text -->
                                                    <!-- react-text: 77 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">2</td>
                                                <td class="_1njmc _3KE63">12.09.2018</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 83 -->125 000
                                                    <!-- /react-text -->
                                                    <!-- react-text: 84 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 87 -->1 200
                                                    <!-- /react-text -->
                                                    <!-- react-text: 88 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 92 -->0
                                                        <!-- /react-text --><!-- react-text: 93 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 96 -->4 644
                                                    <!-- /react-text -->
                                                    <!-- react-text: 97 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 100 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 101 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">3</td>
                                                <td class="_1njmc _3KE63">12.10.2018</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 107 -->120 356
                                                    <!-- /react-text --><!-- react-text: 108 -->
                                                    <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 111 -->1 118
                                                    <!-- /react-text -->
                                                    <!-- react-text: 112 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 116 -->0
                                                        <!-- /react-text --><!-- react-text: 117 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 120 -->4 726
                                                    <!-- /react-text -->
                                                    <!-- react-text: 121 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 124 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 125 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">4</td>
                                                <td class="_1njmc _3KE63">11.11.2018</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 131 -->115 631
                                                    <!-- /react-text --><!-- react-text: 132 -->
                                                    <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 135 -->1 110
                                                    <!-- /react-text -->
                                                    <!-- react-text: 136 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 140 -->0
                                                        <!-- /react-text --><!-- react-text: 141 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 144 -->4 734
                                                    <!-- /react-text -->
                                                    <!-- react-text: 145 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 148 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 149 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">5</td>
                                                <td class="_1njmc _3KE63">11.12.2018</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 155 -->110 897
                                                    <!-- /react-text --><!-- react-text: 156 -->
                                                    <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 159 -->1 030
                                                    <!-- /react-text -->
                                                    <!-- react-text: 160 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 164 -->0
                                                        <!-- /react-text --><!-- react-text: 165 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 168 -->4 813
                                                    <!-- /react-text -->
                                                    <!-- react-text: 169 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 172 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 173 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">6</td>
                                                <td class="_1njmc _3KE63">11.01.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 179 -->106 084
                                                    <!-- /react-text --><!-- react-text: 180 -->
                                                    <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 183 -->1 018
                                                    <!-- /react-text -->
                                                    <!-- react-text: 184 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 188 -->0
                                                        <!-- /react-text --><!-- react-text: 189 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 192 -->4 825
                                                    <!-- /react-text -->
                                                    <!-- react-text: 193 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 196 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 197 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">7</td>
                                                <td class="_1njmc _3KE63">11.02.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 203 -->101 258
                                                    <!-- /react-text --><!-- react-text: 204 -->
                                                    <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 207 -->972
                                                    <!-- /react-text -->
                                                    <!-- react-text: 208 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 212 -->0
                                                        <!-- /react-text --><!-- react-text: 213 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 216 -->4 872
                                                    <!-- /react-text -->
                                                    <!-- react-text: 217 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 220 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 221 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">8</td>
                                                <td class="_1njmc _3KE63">11.03.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 227 -->96 387
                                                    <!-- /react-text -->
                                                    <!-- react-text: 228 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 231 -->836
                                                    <!-- /react-text -->
                                                    <!-- react-text: 232 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 236 -->0
                                                        <!-- /react-text --><!-- react-text: 237 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 240 -->5 008
                                                    <!-- /react-text -->
                                                    <!-- react-text: 241 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 244 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 245 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">9</td>
                                                <td class="_1njmc _3KE63">12.04.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 251 -->91 379
                                                    <!-- /react-text -->
                                                    <!-- react-text: 252 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 255 -->877
                                                    <!-- /react-text -->
                                                    <!-- react-text: 256 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 260 -->0
                                                        <!-- /react-text --><!-- react-text: 261 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 264 -->4 966
                                                    <!-- /react-text -->
                                                    <!-- react-text: 265 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 268 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 269 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">10</td>
                                                <td class="_1njmc _3KE63">12.05.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 275 -->86 412
                                                    <!-- /react-text -->
                                                    <!-- react-text: 276 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 279 -->803
                                                    <!-- /react-text -->
                                                    <!-- react-text: 280 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 284 -->0
                                                        <!-- /react-text --><!-- react-text: 285 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 288 -->5 041
                                                    <!-- /react-text -->
                                                    <!-- react-text: 289 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 292 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 293 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">11</td>
                                                <td class="_1njmc _3KE63">12.06.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 299 -->81 372
                                                    <!-- /react-text -->
                                                    <!-- react-text: 300 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 303 -->781
                                                    <!-- /react-text -->
                                                    <!-- react-text: 304 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 308 -->0
                                                        <!-- /react-text --><!-- react-text: 309 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 312 -->5 062
                                                    <!-- /react-text -->
                                                    <!-- react-text: 313 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 316 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 317 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">12</td>
                                                <td class="_1njmc _3KE63">12.07.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 323 -->76 309
                                                    <!-- /react-text -->
                                                    <!-- react-text: 324 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 327 -->709
                                                    <!-- /react-text -->
                                                    <!-- react-text: 328 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 332 -->0
                                                        <!-- /react-text --><!-- react-text: 333 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 336 -->5 135
                                                    <!-- /react-text -->
                                                    <!-- react-text: 337 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 340 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 341 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">13</td>
                                                <td class="_1njmc _3KE63">12.08.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 347 -->71 174
                                                    <!-- /react-text -->
                                                    <!-- react-text: 348 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 351 -->683
                                                    <!-- /react-text -->
                                                    <!-- react-text: 352 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 356 -->0
                                                        <!-- /react-text --><!-- react-text: 357 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 360 -->5 160
                                                    <!-- /react-text -->
                                                    <!-- react-text: 361 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 364 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 365 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">14</td>
                                                <td class="_1njmc _3KE63">12.09.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 371 -->66 014
                                                    <!-- /react-text -->
                                                    <!-- react-text: 372 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 375 -->634
                                                    <!-- /react-text -->
                                                    <!-- react-text: 376 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 380 -->0
                                                        <!-- /react-text --><!-- react-text: 381 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 384 -->5 210
                                                    <!-- /react-text -->
                                                    <!-- react-text: 385 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 388 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 389 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">15</td>
                                                <td class="_1njmc _3KE63">12.10.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 395 -->60 804
                                                    <!-- /react-text -->
                                                    <!-- react-text: 396 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 399 -->565
                                                    <!-- /react-text -->
                                                    <!-- react-text: 400 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 404 -->0
                                                        <!-- /react-text --><!-- react-text: 405 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 408 -->5 279
                                                    <!-- /react-text -->
                                                    <!-- react-text: 409 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 412 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 413 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">16</td>
                                                <td class="_1njmc _3KE63">11.11.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 419 -->55 526
                                                    <!-- /react-text -->
                                                    <!-- react-text: 420 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 423 -->533
                                                    <!-- /react-text -->
                                                    <!-- react-text: 424 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 428 -->0
                                                        <!-- /react-text --><!-- react-text: 429 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 432 -->5 311
                                                    <!-- /react-text -->
                                                    <!-- react-text: 433 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 436 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 437 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">17</td>
                                                <td class="_1njmc _3KE63">11.12.2019</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 443 -->50 215
                                                    <!-- /react-text -->
                                                    <!-- react-text: 444 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 447 -->466
                                                    <!-- /react-text -->
                                                    <!-- react-text: 448 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 452 -->0
                                                        <!-- /react-text --><!-- react-text: 453 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 456 -->5 377
                                                    <!-- /react-text -->
                                                    <!-- react-text: 457 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 460 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 461 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">18</td>
                                                <td class="_1njmc _3KE63">11.01.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 467 -->44 838
                                                    <!-- /react-text -->
                                                    <!-- react-text: 468 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 471 -->430
                                                    <!-- /react-text -->
                                                    <!-- react-text: 472 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 476 -->0
                                                        <!-- /react-text --><!-- react-text: 477 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 480 -->5 414
                                                    <!-- /react-text -->
                                                    <!-- react-text: 481 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 484 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 485 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">19</td>
                                                <td class="_1njmc _3KE63">11.02.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 491 -->39 425
                                                    <!-- /react-text -->
                                                    <!-- react-text: 492 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 495 -->377
                                                    <!-- /react-text -->
                                                    <!-- react-text: 496 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 500 -->0
                                                        <!-- /react-text --><!-- react-text: 501 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 504 -->5 466
                                                    <!-- /react-text -->
                                                    <!-- react-text: 505 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 508 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 509 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">20</td>
                                                <td class="_1njmc _3KE63">11.03.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 515 -->33 958
                                                    <!-- /react-text -->
                                                    <!-- react-text: 516 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 519 -->304
                                                    <!-- /react-text -->
                                                    <!-- react-text: 520 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 524 -->0
                                                        <!-- /react-text --><!-- react-text: 525 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 528 -->5 539
                                                    <!-- /react-text -->
                                                    <!-- react-text: 529 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 532 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 533 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">21</td>
                                                <td class="_1njmc _3KE63">12.04.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 539 -->28 419
                                                    <!-- /react-text -->
                                                    <!-- react-text: 540 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 543 -->272
                                                    <!-- /react-text -->
                                                    <!-- react-text: 544 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 548 -->0
                                                        <!-- /react-text --><!-- react-text: 549 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 552 -->5 571
                                                    <!-- /react-text -->
                                                    <!-- react-text: 553 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 556 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 557 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">22</td>
                                                <td class="_1njmc _3KE63">12.05.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 563 -->22 848
                                                    <!-- /react-text -->
                                                    <!-- react-text: 564 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 567 -->212
                                                    <!-- /react-text -->
                                                    <!-- react-text: 568 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 572 -->0
                                                        <!-- /react-text --><!-- react-text: 573 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 576 -->5 632
                                                    <!-- /react-text -->
                                                    <!-- react-text: 577 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 580 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 581 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">23</td>
                                                <td class="_1njmc _3KE63">12.06.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 587 -->17 216
                                                    <!-- /react-text -->
                                                    <!-- react-text: 588 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 591 -->165
                                                    <!-- /react-text -->
                                                    <!-- react-text: 592 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 596 -->0
                                                        <!-- /react-text --><!-- react-text: 597 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 600 -->5 679
                                                    <!-- /react-text -->
                                                    <!-- react-text: 601 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 604 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 605 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">24</td>
                                                <td class="_1njmc _3KE63">12.07.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 611 -->11 537
                                                    <!-- /react-text -->
                                                    <!-- react-text: 612 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 615 -->107
                                                    <!-- /react-text -->
                                                    <!-- react-text: 616 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 620 -->0
                                                        <!-- /react-text --><!-- react-text: 621 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 624 -->5 737
                                                    <!-- /react-text -->
                                                    <!-- react-text: 625 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 628 -->5 843
                                                    <!-- /react-text -->
                                                    <!-- react-text: 629 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ">
                                                <td class="_1njmc _3KE63">25</td>
                                                <td class="_1njmc _3KE63">12.08.2020</td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 635 -->5 801
                                                    <!-- /react-text -->
                                                    <!-- react-text: 636 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 639 -->56<!-- /react-text -->
                                                    <!-- react-text: 640 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 644 -->0
                                                        <!-- /react-text --><!-- react-text: 645 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 648 -->5 801
                                                    <!-- /react-text -->
                                                    <!-- react-text: 649 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                                <td class="_1njmc _3KE63"><!-- react-text: 652 -->5 856
                                                    <!-- /react-text -->
                                                    <!-- react-text: 653 --> <!-- /react-text --><span
                                                            class="currency-symbol">₽</span></td>
                                            </tr>
                                            <tr class="_1GqrZ _37850 _2mg0e">
                                                <td class="_1njmc _3KE63">Всего</td>
                                                <td class="_1njmc _3KE63"></td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 660 -->125 000
                                                        <!-- /react-text --><!-- react-text: 661 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 665 -->15 255
                                                        <!-- /react-text --><!-- react-text: 666 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63 tbYyG"><span class="_3AjSK"><!-- react-text: 670 -->0
                                                        <!-- /react-text --><!-- react-text: 671 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 675 -->125 000
                                                        <!-- /react-text --><!-- react-text: 676 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                                <td class="_1njmc _3KE63"><span class="_3AjSK"><!-- react-text: 680 -->140 255
                                                        <!-- /react-text --><!-- react-text: 681 -->
                                                        <!-- /react-text --><span
                                                                class="currency-symbol">₽</span></span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


</div>

<script charset="UTF-8">window.__INITIAL_STATE__ = {
        "routing": {
            "locationBeforeTransitions": {
                "pathname": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                "search": "?amount=&currency=RUB&externalId=a2f51f5e-5f38-44a3-b039-c9bb23f55b10&purpose=NoMatter&solvencyProof=NoMatter",
                "hash": "",
                "action": "POP",
                "key": null,
                "query": {
                    "amount": "",
                    "currency": "RUB",
                    "externalId": "a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                    "purpose": "NoMatter",
                    "solvencyProof": "NoMatter"
                }
            }
        },
        "form": {},
        "reduxAsyncConnect": {
            "loaded": true,
            "loadState": {
                "cfbccf8662542": {"loading": false, "loaded": true, "error": null},
                "b2387a666c9ba": {"loading": false, "loaded": true, "error": null}
            },
            "cfbccf8662542": {},
            "b2387a666c9ba": [{"styles": null, "__response": {"status": 200}}, {
                "calculation": {
                    "commission": 0,
                    "payments": [{
                        "date": "2018-08-09T00:00:00+03:00",
                        "debt": 0,
                        "interest": 0,
                        "commission": 0,
                        "payment": 0,
                        "amount": 500000
                    }, {
                        "date": "2018-09-09T00:00:00+03:00",
                        "debt": 18574.9912455651,
                        "interest": 4798.6302179833,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 500000
                    }, {
                        "date": "2018-10-09T00:00:00+03:00",
                        "debt": 18902.3041834802,
                        "interest": 4471.3172800682,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 481425.008754435
                    }, {
                        "date": "2018-11-09T00:00:00+03:00",
                        "debt": 18934.6706102333,
                        "interest": 4438.95085331509,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 462522.704570955
                    }, {
                        "date": "2018-12-09T00:00:00+03:00",
                        "debt": 19253.7215717425,
                        "interest": 4119.89989180591,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 443588.033960722
                    }, {
                        "date": "2019-01-09T00:00:00+03:00",
                        "debt": 19301.1745556346,
                        "interest": 4072.44690791384,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 424334.312388979
                    }, {
                        "date": "2019-02-09T00:00:00+03:00",
                        "debt": 19486.412954565,
                        "interest": 3887.20850898336,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 405033.137833344
                    }, {
                        "date": "2019-03-09T00:00:00+03:00",
                        "debt": 20031.5122632556,
                        "interest": 3342.10920029281,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 385546.724878779
                    }, {
                        "date": "2019-04-09T00:00:00+03:00",
                        "debt": 19865.6767747695,
                        "interest": 3507.94468877888,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 365515.212615524
                    }, {
                        "date": "2019-05-09T00:00:00+03:00",
                        "debt": 20163.3421586761,
                        "interest": 3210.27930487228,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 345649.535840754
                    }, {
                        "date": "2019-06-09T00:00:00+03:00",
                        "debt": 20249.84569447,
                        "interest": 3123.77576907837,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 325486.193682078
                    }, {
                        "date": "2019-07-09T00:00:00+03:00",
                        "debt": 20538.6865672641,
                        "interest": 2834.93489628426,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 305236.347987608
                    }, {
                        "date": "2019-08-09T00:00:00+03:00",
                        "debt": 20641.3038613867,
                        "interest": 2732.31760216168,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 284697.661420344
                    }, {
                        "date": "2019-09-09T00:00:00+03:00",
                        "debt": 20839.4038302824,
                        "interest": 2534.21763326603,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 264056.357558957
                    }, {
                        "date": "2019-10-09T00:00:00+03:00",
                        "debt": 21114.7023209259,
                        "interest": 2258.91914262245,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 243216.953728675
                    }, {
                        "date": "2019-11-09T00:00:00+03:00",
                        "debt": 21242.0483133737,
                        "interest": 2131.5731501747,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 222102.251407749
                    }, {
                        "date": "2019-12-09T00:00:00+03:00",
                        "debt": 21508.0979019505,
                        "interest": 1865.52356159793,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 200860.203094375
                    }, {
                        "date": "2020-01-09T00:00:00+03:00",
                        "debt": 21653.5462712549,
                        "interest": 1720.07519229348,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 179352.105192425
                    }, {
                        "date": "2020-02-09T00:00:00+03:00",
                        "debt": 21864.2824984521,
                        "interest": 1509.33896509625,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 157698.55892117
                    }, {
                        "date": "2020-03-09T00:00:00+03:00",
                        "debt": 22157.422197563,
                        "interest": 1216.19926598542,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 135834.276422718
                    }, {
                        "date": "2020-04-09T00:00:00+03:00",
                        "debt": 22285.6159250998,
                        "interest": 1088.00553844858,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 113676.854225155
                    }, {
                        "date": "2020-05-09T00:00:00+03:00",
                        "debt": 22527.1288322188,
                        "interest": 846.492631329604,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 91391.238300055
                    }, {
                        "date": "2020-06-09T00:00:00+03:00",
                        "debt": 22714.5204265604,
                        "interest": 659.101036988017,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 68864.1094678363
                    }, {
                        "date": "2020-07-09T00:00:00+03:00",
                        "debt": 22946.1703447215,
                        "interest": 427.451118826847,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 46149.5890412759
                    }, {
                        "date": "2020-08-09T00:00:00",
                        "debt": 23203.4186965544,
                        "interest": 222.08081165573,
                        "commission": 0,
                        "payment": 23425.4995082101,
                        "amount": 23203.4186965544
                    }],
                    "rate": 11.300000190734863,
                    "amount": 500000,
                    "initialAmount": 0,
                    "total": 561018.793169823,
                    "overpayment": 61018.793169823,
                    "perMonth": 23375.7830487426,
                    "term": "P2Y"
                }, "__response": {"status": 200}
            }, {
                "meta": {
                    "siteSection": "Banks",
                    "pageType": "ProductCard",
                    "productType": "Credit",
                    "name": "Раздел: Банки; Страница: Карточка продукта; Продукт: Кредит;"
                },
                "seo": {
                    "prefooter": [],
                    "breadcrumbs": [{
                        "url": "\u002Fbanki\u002F",
                        "title": "Банки"
                    }, {
                        "url": "\u002Fbank\u002Frenessans-kredit\u002F",
                        "title": "Банк Ренессанс Кредит"
                    }, {
                        "url": "\u002Fbank\u002Frenessans-kredit\u002Fkredity\u002F",
                        "title": "Кредиты"
                    }, {
                        "url": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                        "title": "Потребительский"
                    }],
                    "text": [],
                    "source": "DatabaseAndCode",
                    "title": "Кредит наличными Потребительский от банка Ренессанс Кредит 2018 под {ставка} сроком на {срок}",
                    "description": "Кредит «Потребительский» от банка Ренессанс Кредит с процентной ставкой {ставка} сроком на {срок} — онлайн заявка, подробные условия и список документов для получения кредита, расчет ежемесячного платежа.",
                    "heading": "Кредит «Потребительский» от банка Ренессанс Кредит",
                    "headingTemplate": "Кредит «{продукт}» от {организация.родительный}",
                    "ogTitle": "",
                    "ogDescription": "",
                    "indexingDisabled": false,
                    "productName": "Кредит",
                    "showReviews": false,
                    "reviewsHeading": "",
                    "showGuides": false,
                    "guidesHeading": "",
                    "showRatings": false,
                    "showNews": false,
                    "sideBlock": {"title": "", "links": []},
                    "noIndexSeoText": false,
                    "noIndexPrefooter": false,
                    "noIndexRating": false,
                    "noIndexReviews": false,
                    "hideAccordeonFrom": [],
                    "schema": {
                        "breadcrumb": {
                            "itemListElement": [{
                                "position": 1,
                                "@id": "https:\u002F\u002Fwww.sravni.ru",
                                "name": "Сравни.ру",
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "ListItem"
                            }, {
                                "position": 2,
                                "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbanki\u002F",
                                "name": "Банки",
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "ListItem"
                            }, {
                                "position": 3,
                                "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002F",
                                "name": "Банк Ренессанс Кредит",
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "ListItem"
                            }, {
                                "position": 4,
                                "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredity\u002F",
                                "name": "Кредиты",
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "ListItem"
                            }, {
                                "position": 5,
                                "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                                "name": "Потребительский",
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "ListItem"
                            }],
                            "itemListOrder": "ItemListOrderAscending",
                            "numberOfItems": 5,
                            "@context": "http:\u002F\u002Fschema.org",
                            "@type": "BreadcrumbList"
                        },
                        "author": {
                            "logo": "https:\u002F\u002Fwww.sravni.ru\u002Ff\u002F_\u002Fnewdesign\u002Fimg\u002Flogo2.svg",
                            "name": "Сравни.ру",
                            "url": "https:\u002F\u002Fwww.sravni.ru\u002F",
                            "@context": "http:\u002F\u002Fschema.org",
                            "@type": "Organization"
                        },
                        "description": "Кредит «Потребительский» от банка Ренессанс Кредит с процентной ставкой {ставка} сроком на {срок} — онлайн заявка, подробные условия и список документов для получения кредита, расчет ежемесячного платежа.",
                        "name": "Кредит «Потребительский» от банка Ренессанс Кредит",
                        "@context": "http:\u002F\u002Fschema.org",
                        "@type": "WebPage"
                    },
                    "canonical": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                    "url": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F"
                },
                "__response": {"status": 200}
            }]
        },
        "advertising": {
            "banners": [],
            "branding": {},
            "productBranding": {"styles": null, "__response": {"status": 200}}
        },
        "main": {
            "isMobile": false,
            "isTablet": false,
            "isIE": false,
            "region": {
                "id": 83,
                "name": "Москва",
                "fullName": "г Москва",
                "regionName": "Москва",
                "nameLocative": "в Москве",
                "nameGenitive": "Москвы",
                "route": "6.83.",
                "alias": "moskva",
                "localityType": "город",
                "shortLocationType": "г.",
                "latitude": 55.753676,
                "longitude": 37.619899
            },
            "env": {"identity": "https:\u002F\u002Fmy.sravni.ru", "images": "https:\u002F\u002Ff.sravni.ru\u002Ffs"},
            "page": {"status": 200, "message": ""},
            "history": [{
                "pathname": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                "search": "?amount=&currency=RUB&externalId=a2f51f5e-5f38-44a3-b039-c9bb23f55b10&purpose=NoMatter&solvencyProof=NoMatter",
                "hash": "",
                "action": "POP",
                "key": null,
                "query": {
                    "amount": "",
                    "currency": "RUB",
                    "externalId": "a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                    "purpose": "NoMatter",
                    "solvencyProof": "NoMatter"
                }
            }, {
                "pathname": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                "search": "?amount=&currency=RUB&externalId=a2f51f5e-5f38-44a3-b039-c9bb23f55b10&purpose=NoMatter&solvencyProof=NoMatter",
                "hash": "",
                "action": "POP",
                "key": null,
                "query": {
                    "amount": "",
                    "currency": "RUB",
                    "externalId": "a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                    "purpose": "NoMatter",
                    "solvencyProof": "NoMatter"
                }
            }]
        },
        "auth": {"expiresAt": null, "isAuthenticated": false, "profile": null},
        "comparison": {"value": 0, "data": []},
        "locations": {
            "storage": {"id": {}, "route": {}, "alias": {}, "locations": []},
            "list": [],
            "locations": [],
            "topLocations": []
        },
        "credits": {
            "offerList": {
                "ts": 0,
                "list": [],
                "listTotal": 0,
                "listTotalOffers": 0,
                "listLoading": false,
                "isCalculated": false,
                "listLoadingError": null,
                "meta": {}
            },
            "topOffersList": {"ts": 0, "list": []},
            "offersDescriptions": {},
            "offersCalculations": {},
            "offerCard": {
                "hash": "3b9f157b33cc38eff79238419c0842b251e00d8b",
                "customerType": "Default",
                "filters": {
                    "currency": "RUB",
                    "amount": 500000,
                    "term": "P2Y",
                    "solvencyProof": ["None"],
                    "paymentsType": "AnnuityPayments",
                    "customerType": "Default",
                    "insurances": [],
                    "purpose": "NoMatter",
                    "externalId": "a2f51f5e-5f38-44a3-b039-c9bb23f55b10"
                },
                "credit": {
                    "bonus": null,
                    "paymentsType": ["AnnuityPayments"],
                    "paymentsPeriod": "Monthly",
                    "creditSubTypeDescription": "",
                    "mainFeature": null,
                    "category": "cashCredit",
                    "issuanceMoneyMethods": ["Cash", "Card"],
                    "placesOfContract": ["Bank"],
                    "creditPurpose": "None",
                    "insuranceRequired": true,
                    "permanentRegistrationRequired": false,
                    "temporaryRegistrationRequired": false,
                    "guarantorRequired": false,
                    "pledgeRequired": false,
                    "id": 29580,
                    "alias": "potrebitelskij",
                    "name": "Потребительский",
                    "bankId": 777,
                    "bankAlias": "renessans-kredit",
                    "salary": 0,
                    "salaryCurrency": "",
                    "considirationTime": {"from": "PT10M", "to": "P2D"},
                    "validityOfApplication": "",
                    "creditSecurity": ["Penalty"],
                    "russianCitizenchipRequired": true,
                    "withRefinansing": false,
                    "insurance": {},
                    "howToStepGroups": [{
                        "name": "Как получить",
                        "steps": [{
                            "name": "Отправьте заявку",
                            "description": "Заполните онлайн-анкету и отправьте заявку в банк в течение 5 минут",
                            "splitByNewline": false
                        }, {
                            "name": "Узнайте решение",
                            "description": "Получите предварительное решение от банка по SMS или телефону",
                            "splitByNewline": false
                        }, {
                            "name": "Получите деньги",
                            "description": "Получите деньги в отделении банка или на банковскую карту",
                            "splitByNewline": false
                        }]
                    }, {
                        "name": "Как погасить",
                        "steps": [{
                            "name": null,
                            "description": "В любых отделениях банка\r\nВ банкоматах банка\r\nЧерез интернет - банк\r\nЧерез мобильное приложение",
                            "splitByNewline": true
                        }, {
                            "name": null,
                            "description": "Через банкоматы банков партнеров\r\nВ любом отделении \"Почты России\"\r\nЧерез терминалы \"QIWI\"",
                            "splitByNewline": true
                        }]
                    }],
                    "pros": null,
                    "cons": null,
                    "penalty": "В случае неисполнения\u002Fненадлежащего\u002Fнесвоевременного исполнения Клиентом полностью или частично обязательств по осуществлению платежей, предусмотренных Договором, Клиент обязуется выплатить Банку неустойку в размере 20 % годовых на сумму просроченной задолженности по основному долгу и просроченных процентов.",
                    "insuranceConditions": "\u003CP\u003E&nbsp;\u003C\u002FP\u003E",
                    "additionalOutcome": "",
                    "description": null,
                    "bank": {
                        "id": 777,
                        "alias": "renessans-kredit",
                        "name": "Ренессанс Кредит",
                        "license": "3354",
                        "bankGroups": ["Все банки с ЦБ", "Все", "Банки с продуктами", "TOP 100", "Топ 30 по вкладам", "Топ 50 по вкладам", "Топ 30 по кредитам", "Топ 50 по кредитам"],
                        "status": "Active",
                        "logo": {
                            "small": "\u002F\u002Ff.sravni.ru\u002Flogotypes\u002Fbanks\u002Flogo_777.svg",
                            "big": "\u002F\u002Ff.sravni.ru\u002Flogotypes\u002Fbanks\u002Fbiglogo_777.svg"
                        },
                        "ratings": {
                            "bankId": 777,
                            "assetsRating": 4.5,
                            "assetsRatingPosition": 49,
                            "profitRating": 5,
                            "profitRatingPosition": 23,
                            "creditsRating": 5,
                            "creditsRatingPosition": 14,
                            "depositesRating": 4.5,
                            "depositesRatingPosition": 28,
                            "clientRating": 5,
                            "clientRatingPosition": 5,
                            "bankBranchRating": 4.5,
                            "bankBranchesCount": 158,
                            "cashPointRating": 4.5,
                            "cashPointsCount": 153,
                            "sravniRuRating": 4.7
                        }
                    },
                    "ratesTable": {
                        "amounts": [{
                            "id": 43104,
                            "sumFrom": 30000,
                            "sumTo": 700000,
                            "sumFromInEqCurrency": 0,
                            "sumToInEqCurrency": 0,
                            "currency": "RUB",
                            "eqCurrency": null
                        }],
                        "initialAmounts": [],
                        "terms": [{"id": 60813, "from": "P24M", "to": "P60M"}],
                        "rates": [{
                            "amountId": 43104,
                            "initialAmountId": null,
                            "termId": 60813,
                            "solvencyProof": ["None"],
                            "rateFrom": 11.300000190734863,
                            "rateTo": 23.299999237060547
                        }]
                    },
                    "amount": {"min": 30000, "max": 700000},
                    "term": ["P2Y", "P3Y", "P4Y", "P5Y"],
                    "rate": {"min": 11.300000190734863, "max": 23.299999237060547},
                    "ageStart": 24,
                    "lastPlaceWorkExperienceFrom": 3,
                    "workExperienceFrom": 0,
                    "solvencyProof": ["None"],
                    "requiredCreditDocuments": [["Passport"], ["InternationalPassport", "DriversLicence", "MilitaryCard", "TheDiplomasAboutFormation", "SalaryBankCard", "FiscalAccountingCertificate"]],
                    "optionalCreditDocuments": [["WorkRecordCard", "ProfitSustainingDocument"], ["TSRegistrationCertificate", "PTSCopy", "DMSPolicy"]],
                    "solvencyProofRequired": false,
                    "additionalConditions": "\u003CP\u003EПри посещении банка возмите с собой дополнительные документы - это предоставит Вам возможность снизить ставку.\u003C\u002FP\u003E\r\n\u003CP\u003EОбязательным условием является: наличие постоянной работы или наличие постоянной регистрации в регионе оформления.\u003C\u002FP\u003E\r\n\u003CP\u003EМинимальный ежемесячный доход: \u003C\u002FP\u003E\r\n\u003CUL\u003E\r\n\u003CLI\u003Eот 12 000 руб. для жителей Москвы, \u003C\u002FLI\u003E\r\n\u003CLI\u003Eот&nbsp;8 000 руб. для жителей других регионов.\u003C\u002FLI\u003E\u003C\u002FUL\u003EБанк вправе запросить дополнительные документы.",
                    "ratesDescription": "\u003CP\u003E&nbsp;\u003C\u002FP\u003E",
                    "scoringInfo": 30,
                    "advertising": {
                        "id": 11643,
                        "bankId": 777,
                        "productId": 29580,
                        "productType": 2,
                        "cardType": null,
                        "isInPriority": true,
                        "isAntiPriority": false,
                        "leadsUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_c?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                        "counterUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_i?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                        "isApi": false,
                        "usePopup": false,
                        "popupCallButtonShowPixelUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_i?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                        "popupShowPixelUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_c?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                        "popupConversionPixelUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_l?offer_id=36&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10&source=search_product",
                        "popupFormId": null,
                        "affiliateId": null,
                        "affiliateClickUrl": null,
                        "affiliateCounterUrl": null,
                        "sortOrder": 1000,
                        "campaign": "PerLead",
                        "eventCategory": "dengi_leads_cpo",
                        "price": 57.71,
                        "locations": ["6.91.", "6.9.", "6.89.", "6.84.", "6.83.", "6.82.", "6.80.2194.", "6.80.", "6.8.", "6.79.", "6.78.", "6.77.", "6.76.", "6.75.", "6.74.", "6.73.", "6.72.", "6.70.", "6.7.", "6.69.1833.", "6.69.", "6.68.", "6.67.", "6.66.", "6.65.", "6.64.", "6.63.", "6.62.", "6.61.", "6.60.", "6.58.", "6.57.", "6.56.", "6.54.", "6.53.", "6.52.", "6.51.", "6.50.", "6.49.", "6.48.", "6.46.", "6.45.", "6.44.", "6.43.", "6.42.", "6.41.", "6.40.932.", "6.40.", "6.39.", "6.38.", "6.37.", "6.36.", "6.35.", "6.32.", "6.31.", "6.30.", "6.29.600.", "6.29.", "6.28.", "6.27.", "6.24.", "6.22.", "6.21.", "6.19.", "6.18.", "6.17.", "6.16.", "6.13.", "6.11."],
                        "isForCreditSelection": false,
                        "customerTypes": ["Default"],
                        "numberOfApplications": 23000,
                        "tag": "cred-v2"
                    },
                    "currencies": ["RUB"],
                    "externalId": "a2f51f5e-5f38-44a3-b039-c9bb23f55b10"
                },
                "description": {
                    "customerTypes": ["Default"],
                    "defaultFilters": {
                        "Default": {
                            "currency": "RUB",
                            "amount": 30000,
                            "term": "P2Y",
                            "solvencyProof": ["None"],
                            "paymentsType": "AnnuityPayments",
                            "customerType": "Default",
                            "insurances": []
                        }
                    },
                    "descriptions": {
                        "Default": {
                            "alias": "potrebitelskij",
                            "ratesTable": {
                                "amounts": [{
                                    "id": 43104,
                                    "sumFrom": 30000,
                                    "sumTo": 700000,
                                    "sumFromInEqCurrency": 0,
                                    "sumToInEqCurrency": 0,
                                    "currency": "RUB",
                                    "eqCurrency": null
                                }],
                                "initialAmounts": [],
                                "terms": [{"id": 60813, "from": "P24M", "to": "P60M"}],
                                "rates": [{
                                    "amountId": 43104,
                                    "initialAmountId": null,
                                    "termId": 60813,
                                    "solvencyProof": ["None"],
                                    "rateFrom": 11.300000190734863,
                                    "rateTo": 23.299999237060547
                                }]
                            },
                            "amount": {"rub": {"min": 30000, "max": 700000}},
                            "term": ["P2Y", "P3Y", "P4Y", "P5Y"],
                            "rate": {"rub": {"min": 11.300000190734863, "max": 23.299999237060547}},
                            "ageStart": 24,
                            "lastPlaceWorkExperienceFrom": 3,
                            "workExperienceFrom": 0,
                            "solvencyProof": ["None"],
                            "requiredCreditDocuments": [["Passport"], ["InternationalPassport", "DriversLicence", "MilitaryCard", "TheDiplomasAboutFormation", "SalaryBankCard", "FiscalAccountingCertificate"]],
                            "optionalCreditDocuments": [["WorkRecordCard", "ProfitSustainingDocument"], ["TSRegistrationCertificate", "PTSCopy", "DMSPolicy"]],
                            "solvencyProofRequired": false,
                            "additionalConditions": "\u003CP\u003EПри посещении банка возмите с собой дополнительные документы - это предоставит Вам возможность снизить ставку.\u003C\u002FP\u003E\r\n\u003CP\u003EОбязательным условием является: наличие постоянной работы или наличие постоянной регистрации в регионе оформления.\u003C\u002FP\u003E\r\n\u003CP\u003EМинимальный ежемесячный доход: \u003C\u002FP\u003E\r\n\u003CUL\u003E\r\n\u003CLI\u003Eот 12 000 руб. для жителей Москвы, \u003C\u002FLI\u003E\r\n\u003CLI\u003Eот&nbsp;8 000 руб. для жителей других регионов.\u003C\u002FLI\u003E\u003C\u002FUL\u003EБанк вправе запросить дополнительные документы.",
                            "ratesDescription": "\u003CP\u003E&nbsp;\u003C\u002FP\u003E",
                            "description": null,
                            "id": 29580,
                            "scoringInfo": 30,
                            "advertising": {
                                "id": 11643,
                                "bankId": 777,
                                "productId": 29580,
                                "productType": 2,
                                "cardType": null,
                                "isInPriority": true,
                                "isAntiPriority": false,
                                "leadsUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_c?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                                "counterUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_i?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                                "isApi": false,
                                "usePopup": false,
                                "popupCallButtonShowPixelUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_i?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                                "popupShowPixelUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_c?offer_id=36&aff_id=2&aff_sub=655408484.1533125627&aff_sub2=(direct)\u002F~\u002F(none)\u002F~\u002F(none)\u002F~\u002F(not set)\u002F~\u002FMoscow\u002F~\u002FMoscow\u002F~\u002Fbank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter&aff_sub3=&aff_sub4=potrebitelskij&aff_sub5=conscred&source=search_product&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10",
                                "popupConversionPixelUrl": "\u002F\u002Fsravni.go2cloud.org\u002Faff_l?offer_id=36&adv_sub=a2f51f5e-5f38-44a3-b039-c9bb23f55b10&source=search_product",
                                "popupFormId": null,
                                "affiliateId": null,
                                "affiliateClickUrl": null,
                                "affiliateCounterUrl": null,
                                "sortOrder": 1000,
                                "campaign": "PerLead",
                                "eventCategory": "dengi_leads_cpo",
                                "price": 57.71,
                                "locations": ["6.91.", "6.9.", "6.89.", "6.84.", "6.83.", "6.82.", "6.80.2194.", "6.80.", "6.8.", "6.79.", "6.78.", "6.77.", "6.76.", "6.75.", "6.74.", "6.73.", "6.72.", "6.70.", "6.7.", "6.69.1833.", "6.69.", "6.68.", "6.67.", "6.66.", "6.65.", "6.64.", "6.63.", "6.62.", "6.61.", "6.60.", "6.58.", "6.57.", "6.56.", "6.54.", "6.53.", "6.52.", "6.51.", "6.50.", "6.49.", "6.48.", "6.46.", "6.45.", "6.44.", "6.43.", "6.42.", "6.41.", "6.40.932.", "6.40.", "6.39.", "6.38.", "6.37.", "6.36.", "6.35.", "6.32.", "6.31.", "6.30.", "6.29.600.", "6.29.", "6.28.", "6.27.", "6.24.", "6.22.", "6.21.", "6.19.", "6.18.", "6.17.", "6.16.", "6.13.", "6.11."],
                                "isForCreditSelection": false,
                                "customerTypes": ["Default"],
                                "numberOfApplications": 23000,
                                "tag": "cred-v2"
                            },
                            "currencies": ["RUB"],
                            "externalId": "a2f51f5e-5f38-44a3-b039-c9bb23f55b10"
                        }
                    },
                    "details": {
                        "bonus": null,
                        "paymentsType": ["AnnuityPayments"],
                        "paymentsPeriod": "Monthly",
                        "creditSubTypeDescription": "",
                        "mainFeature": null,
                        "category": "cashCredit",
                        "issuanceMoneyMethods": ["Cash", "Card"],
                        "placesOfContract": ["Bank"],
                        "creditPurpose": "None",
                        "insuranceRequired": true,
                        "permanentRegistrationRequired": false,
                        "temporaryRegistrationRequired": false,
                        "guarantorRequired": false,
                        "pledgeRequired": false,
                        "id": 29580,
                        "alias": "potrebitelskij",
                        "name": "Потребительский",
                        "bankId": 777,
                        "bankAlias": "renessans-kredit",
                        "salary": 0,
                        "salaryCurrency": "",
                        "considirationTime": {"from": "PT10M", "to": "P2D"},
                        "validityOfApplication": "",
                        "creditSecurity": ["Penalty"],
                        "russianCitizenchipRequired": true,
                        "withRefinansing": false,
                        "insurance": {},
                        "howToStepGroups": [{
                            "name": "Как получить",
                            "steps": [{
                                "name": "Отправьте заявку",
                                "description": "Заполните онлайн-анкету и отправьте заявку в банк в течение 5 минут",
                                "splitByNewline": false
                            }, {
                                "name": "Узнайте решение",
                                "description": "Получите предварительное решение от банка по SMS или телефону",
                                "splitByNewline": false
                            }, {
                                "name": "Получите деньги",
                                "description": "Получите деньги в отделении банка или на банковскую карту",
                                "splitByNewline": false
                            }]
                        }, {
                            "name": "Как погасить",
                            "steps": [{
                                "name": null,
                                "description": "В любых отделениях банка\r\nВ банкоматах банка\r\nЧерез интернет - банк\r\nЧерез мобильное приложение",
                                "splitByNewline": true
                            }, {
                                "name": null,
                                "description": "Через банкоматы банков партнеров\r\nВ любом отделении \"Почты России\"\r\nЧерез терминалы \"QIWI\"",
                                "splitByNewline": true
                            }]
                        }],
                        "pros": null,
                        "cons": null,
                        "penalty": "В случае неисполнения\u002Fненадлежащего\u002Fнесвоевременного исполнения Клиентом полностью или частично обязательств по осуществлению платежей, предусмотренных Договором, Клиент обязуется выплатить Банку неустойку в размере 20 % годовых на сумму просроченной задолженности по основному долгу и просроченных процентов.",
                        "insuranceConditions": "\u003CP\u003E&nbsp;\u003C\u002FP\u003E",
                        "additionalOutcome": "",
                        "description": "\u003CP\u003EУчастником программы может стать клиент с кредитной историей в любом банке, не допускавший просрочек при погашении. Одобрение за 10 минут.\u003C\u002FP\u003E",
                        "bank": {
                            "id": 777,
                            "alias": "renessans-kredit",
                            "name": "Ренессанс Кредит",
                            "license": "3354",
                            "bankGroups": ["Все банки с ЦБ", "Все", "Банки с продуктами", "TOP 100", "Топ 30 по вкладам", "Топ 50 по вкладам", "Топ 30 по кредитам", "Топ 50 по кредитам"],
                            "status": "Active",
                            "logo": {
                                "small": "\u002F\u002Ff.sravni.ru\u002Flogotypes\u002Fbanks\u002Flogo_777.svg",
                                "big": "\u002F\u002Ff.sravni.ru\u002Flogotypes\u002Fbanks\u002Fbiglogo_777.svg"
                            },
                            "ratings": {
                                "bankId": 777,
                                "assetsRating": 4.5,
                                "assetsRatingPosition": 49,
                                "profitRating": 5,
                                "profitRatingPosition": 23,
                                "creditsRating": 5,
                                "creditsRatingPosition": 14,
                                "depositesRating": 4.5,
                                "depositesRatingPosition": 28,
                                "clientRating": 5,
                                "clientRatingPosition": 5,
                                "bankBranchRating": 4.5,
                                "bankBranchesCount": 158,
                                "cashPointRating": 4.5,
                                "cashPointsCount": 153,
                                "sravniRuRating": 4.7
                            }
                        }
                    },
                    "defaultCustomerType": "Default"
                },
                "calculation": {
                    "commission": 0,
                    "payments": [{
                        "date": "2018-08-09T00:00:00+03:00",
                        "debt": 0,
                        "interest": 0,
                        "commission": 0,
                        "payment": 0,
                        "amount": 500000
                    }, {
                        "date": "2018-09-09T00:00:00+03:00",
                        "debt": 18574.9912455651,
                        "interest": 4798.6302179833,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 500000
                    }, {
                        "date": "2018-10-09T00:00:00+03:00",
                        "debt": 18902.3041834802,
                        "interest": 4471.3172800682,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 481425.008754435
                    }, {
                        "date": "2018-11-09T00:00:00+03:00",
                        "debt": 18934.6706102333,
                        "interest": 4438.95085331509,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 462522.704570955
                    }, {
                        "date": "2018-12-09T00:00:00+03:00",
                        "debt": 19253.7215717425,
                        "interest": 4119.89989180591,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 443588.033960722
                    }, {
                        "date": "2019-01-09T00:00:00+03:00",
                        "debt": 19301.1745556346,
                        "interest": 4072.44690791384,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 424334.312388979
                    }, {
                        "date": "2019-02-09T00:00:00+03:00",
                        "debt": 19486.412954565,
                        "interest": 3887.20850898336,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 405033.137833344
                    }, {
                        "date": "2019-03-09T00:00:00+03:00",
                        "debt": 20031.5122632556,
                        "interest": 3342.10920029281,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 385546.724878779
                    }, {
                        "date": "2019-04-09T00:00:00+03:00",
                        "debt": 19865.6767747695,
                        "interest": 3507.94468877888,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 365515.212615524
                    }, {
                        "date": "2019-05-09T00:00:00+03:00",
                        "debt": 20163.3421586761,
                        "interest": 3210.27930487228,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 345649.535840754
                    }, {
                        "date": "2019-06-09T00:00:00+03:00",
                        "debt": 20249.84569447,
                        "interest": 3123.77576907837,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 325486.193682078
                    }, {
                        "date": "2019-07-09T00:00:00+03:00",
                        "debt": 20538.6865672641,
                        "interest": 2834.93489628426,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 305236.347987608
                    }, {
                        "date": "2019-08-09T00:00:00+03:00",
                        "debt": 20641.3038613867,
                        "interest": 2732.31760216168,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 284697.661420344
                    }, {
                        "date": "2019-09-09T00:00:00+03:00",
                        "debt": 20839.4038302824,
                        "interest": 2534.21763326603,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 264056.357558957
                    }, {
                        "date": "2019-10-09T00:00:00+03:00",
                        "debt": 21114.7023209259,
                        "interest": 2258.91914262245,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 243216.953728675
                    }, {
                        "date": "2019-11-09T00:00:00+03:00",
                        "debt": 21242.0483133737,
                        "interest": 2131.5731501747,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 222102.251407749
                    }, {
                        "date": "2019-12-09T00:00:00+03:00",
                        "debt": 21508.0979019505,
                        "interest": 1865.52356159793,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 200860.203094375
                    }, {
                        "date": "2020-01-09T00:00:00+03:00",
                        "debt": 21653.5462712549,
                        "interest": 1720.07519229348,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 179352.105192425
                    }, {
                        "date": "2020-02-09T00:00:00+03:00",
                        "debt": 21864.2824984521,
                        "interest": 1509.33896509625,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 157698.55892117
                    }, {
                        "date": "2020-03-09T00:00:00+03:00",
                        "debt": 22157.422197563,
                        "interest": 1216.19926598542,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 135834.276422718
                    }, {
                        "date": "2020-04-09T00:00:00+03:00",
                        "debt": 22285.6159250998,
                        "interest": 1088.00553844858,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 113676.854225155
                    }, {
                        "date": "2020-05-09T00:00:00+03:00",
                        "debt": 22527.1288322188,
                        "interest": 846.492631329604,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 91391.238300055
                    }, {
                        "date": "2020-06-09T00:00:00+03:00",
                        "debt": 22714.5204265604,
                        "interest": 659.101036988017,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 68864.1094678363
                    }, {
                        "date": "2020-07-09T00:00:00+03:00",
                        "debt": 22946.1703447215,
                        "interest": 427.451118826847,
                        "commission": 0,
                        "payment": 23373.6214635484,
                        "amount": 46149.5890412759
                    }, {
                        "date": "2020-08-09T00:00:00",
                        "debt": 23203.4186965544,
                        "interest": 222.08081165573,
                        "commission": 0,
                        "payment": 23425.4995082101,
                        "amount": 23203.4186965544
                    }],
                    "rate": 11.300000190734863,
                    "amount": 500000,
                    "initialAmount": 0,
                    "total": 561018.793169823,
                    "overpayment": 61018.793169823,
                    "perMonth": 23375.7830487426,
                    "term": "P2Y"
                }
            }
        },
        "mortgage": {
            "online": {
                "view": "form",
                "params": {},
                "contacts": {"agreement": true},
                "list": [],
                "orderedItems": []
            }
        },
        "qna": {
            "questionItem": null,
            "questionItemLoading": false,
            "questionItemLoadingError": {},
            "questionCreateError": null,
            "questionCreateLoading": false,
            "questions": {},
            "questionList": null,
            "questionsLoading": false,
            "questionsLoadingError": null,
            "answers": {},
            "answersLoading": false,
            "answersLoadingError": null,
            "answerCreateError": null,
            "tagsList": null,
            "tagsListLoading": false,
            "tagsListLoadingError": null,
            "popularTagsList": null,
            "popularTagsListLoading": false,
            "popularTagsListLoadingError": null,
            "comments": {},
            "commentCreateError": null,
            "users": {},
            "userLoading": [],
            "userLoadingError": {},
            "topExperts": null,
            "topExpertsLoading": false,
            "topExpertsLoadingError": null,
            "tags": null,
            "votes": null,
            "result": null,
            "total": null,
            "loading": false,
            "error": null,
            "expertsQuestions": {
                "list": [],
                "listLoading": false,
                "listLoadingError": null,
                "takenQuestionsList": [],
                "takenQuestionsListLoading": false,
                "takenQuestionsListLoadingError": null,
                "takeQuestionLoading": [],
                "takeQuestionLoadingErrors": {}
            },
            "materialsList": []
        },
        "banks": {
            "list": [],
            "banks": {},
            "info": {
                "777": {
                    "id": 777,
                    "alias": "renessans-kredit",
                    "name": "Ренессанс Кредит",
                    "nameLocative": "в банке Ренессанс Кредит",
                    "nameGenetive": "банка Ренессанс Кредит",
                    "fullName": "КБ «Ренессанс Кредит» (ООО)",
                    "license": "3354",
                    "description": "\u003CP\u003E\u003CSTRONG\u003EПолное наименование \u003C\u002FSTRONG\u003E\u003C\u002FP\u003E\r\n\u003CP\u003EКоммерческий Банк «Ренессанс Кредит» (Общество с ограниченной ответственностью) \u003C\u002FP\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EГод основания \u003C\u002FSTRONG\u003E\u003C\u002FP\u003E\r\n\u003CP\u003E2003 г. \u003C\u002FP\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EСостав акционеров\u003C\u002FSTRONG\u003E \u003C\u002FP\u003E\r\n\u003CP\u003EОсновным владельцем «Ренессанс Кредит» является Группа ОНЭКСИМ, один из ведущих российских инвесторов, который владеет диверсифицированным портфелем активов в сфере финансовых услуг, в энергетической, металлургической и других отраслях экономики. \u003C\u002FP\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EРуководство Банка \u003C\u002FSTRONG\u003E\u003C\u002FP\u003E\r\n\u003CP\u003EПредседатель правления Алексей Левченко. \u003C\u002FP\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EРегиональная сеть\u003C\u002FSTRONG\u003E \u003C\u002FP\u003E\r\n\u003CP\u003EКредитная организация представлена в 62 регионах, имеет свыше 140 \u003CA href=\"https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fotdelenija\u002F\"\u003Eотделений\u003C\u002FA\u003E и более 87,1 тыс. точек продаж. \u003C\u002FP\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EВиды банковских услуг\u003C\u002FSTRONG\u003E \u003C\u002FP\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EДля физических лиц:\u003C\u002FSTRONG\u003E \u003C\u002FP\u003E\r\n\u003CUL\u003E\r\n\u003CLI\u003E\u003CA href=\"https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredity\u002F\"\u003Eпотребительское\u003C\u002FA\u003E и товарное кредитование; \u003C\u002FLI\u003E\r\n\u003CLI\u003E\u003CA href=\"https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fvklady\u002F\"\u003Eвклады\u003C\u002FA\u003E; \u003C\u002FLI\u003E\r\n\u003CLI\u003E\u003CA href=\"https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkarty\u002F\"\u003Eкредитные\u003C\u002FA\u003E и \u003CA href=\"https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fdebetovye-karty\u002F\"\u003Eдебетовые\u003C\u002FA\u003E карты. \u003C\u002FLI\u003E\u003C\u002FUL\u003E\r\n\u003CP\u003E\u003CSTRONG\u003EСправочная информация \u003C\u002FSTRONG\u003E\u003C\u002FP\u003E\r\n\u003CP\u003EОрганизация входит в ТОП-100 крупнейших российских банков и работает с 10 миллионами клиентов в России. \u003C\u002FP\u003E\r\n\u003CP\u003E«Ренессанс Кредит» сотрудничает как с крупными федеральными розничными сетями, так и с небольшими региональными компаниями и торговыми сетями, которые специализируются на продаже электроники, бытовой техники, мебели, других товаров и услуг. Среди ключевых партнеров банка - «Связной», «Евросеть», «М.видео», «Эльдорадо», «Билайн», «Аскона». \u003C\u002FP\u003E",
                    "cbrUrl": "https:\u002F\u002Fwww.sravni.ru\u002Fgoto.ashx\u002F?type=ExternalLink&out=http%3a%2f%2fcbr.ru%2fcredit%2fcoinfo.asp%3fid%3d450039265",
                    "headQuarterAddress": "115114, г. Москва, ул. Кожевническая, д. 14",
                    "legalAddress": "115114, г. Москва, ул. Кожевническая, д. 14",
                    "email": "consultant@rencredit.ru",
                    "phones": "8 (800) 200-0-981",
                    "web": {
                        "title": "http:\u002F\u002Fwww.rencredit.ru",
                        "url": "https:\u002F\u002Fwww.sravni.ru\u002Fgoto.ashx\u002F?type=ExternalLink&out=http%3a%2f%2fwww.rencredit.ru"
                    },
                    "ogrn": "1027739586291",
                    "inn": "7744000126",
                    "kpp": "772501001",
                    "okpo": "76395308",
                    "bik": "044525135",
                    "swift": "ALILRUMM",
                    "iban": null,
                    "status": "Active",
                    "logo": {
                        "small": "\u002F\u002Ff.sravni.ru\u002Flogotypes\u002Fbanks\u002Flogo_777.svg",
                        "big": "\u002F\u002Ff.sravni.ru\u002Flogotypes\u002Fbanks\u002Fbiglogo_777.svg"
                    },
                    "ratings": {
                        "bankId": 777,
                        "assetsRating": 4.5,
                        "assetsRatingPosition": 49,
                        "profitRating": 5,
                        "profitRatingPosition": 23,
                        "creditsRating": 5,
                        "creditsRatingPosition": 14,
                        "depositesRating": 4.5,
                        "depositesRatingPosition": 28,
                        "clientRating": 5,
                        "clientRatingPosition": 5,
                        "bankBranchRating": 4.5,
                        "bankBranchesCount": 158,
                        "cashPointRating": 4.5,
                        "cashPointsCount": 153,
                        "sravniRuRating": 4.7
                    },
                    "__response": {"status": 200}
                }
            },
            "infoAliasMap": {"renessans-kredit": 777},
            "ratings": {},
            "sections": {"bankId": null, "counts": {}}
        },
        "metadata": {
            "storage": {
                "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F": {
                    "meta": {
                        "siteSection": "Banks",
                        "pageType": "ProductCard",
                        "productType": "Credit",
                        "name": "Раздел: Банки; Страница: Карточка продукта; Продукт: Кредит;"
                    },
                    "seo": {
                        "prefooter": [],
                        "breadcrumbs": [{
                            "url": "\u002Fbanki\u002F",
                            "title": "Банки"
                        }, {
                            "url": "\u002Fbank\u002Frenessans-kredit\u002F",
                            "title": "Банк Ренессанс Кредит"
                        }, {
                            "url": "\u002Fbank\u002Frenessans-kredit\u002Fkredity\u002F",
                            "title": "Кредиты"
                        }, {
                            "url": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                            "title": "Потребительский"
                        }],
                        "text": [],
                        "source": "DatabaseAndCode",
                        "title": "Кредит наличными Потребительский от банка Ренессанс Кредит 2018 под {ставка} сроком на {срок}",
                        "description": "Кредит «Потребительский» от банка Ренессанс Кредит с процентной ставкой {ставка} сроком на {срок} — онлайн заявка, подробные условия и список документов для получения кредита, расчет ежемесячного платежа.",
                        "heading": "Кредит «Потребительский» от банка Ренессанс Кредит",
                        "headingTemplate": "Кредит «{продукт}» от {организация.родительный}",
                        "ogTitle": "",
                        "ogDescription": "",
                        "indexingDisabled": false,
                        "productName": "Кредит",
                        "showReviews": false,
                        "reviewsHeading": "",
                        "showGuides": false,
                        "guidesHeading": "",
                        "showRatings": false,
                        "showNews": false,
                        "sideBlock": {"title": "", "links": []},
                        "noIndexSeoText": false,
                        "noIndexPrefooter": false,
                        "noIndexRating": false,
                        "noIndexReviews": false,
                        "hideAccordeonFrom": [],
                        "schema": {
                            "breadcrumb": {
                                "itemListElement": [{
                                    "position": 1,
                                    "@id": "https:\u002F\u002Fwww.sravni.ru",
                                    "name": "Сравни.ру",
                                    "@context": "http:\u002F\u002Fschema.org",
                                    "@type": "ListItem"
                                }, {
                                    "position": 2,
                                    "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbanki\u002F",
                                    "name": "Банки",
                                    "@context": "http:\u002F\u002Fschema.org",
                                    "@type": "ListItem"
                                }, {
                                    "position": 3,
                                    "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002F",
                                    "name": "Банк Ренессанс Кредит",
                                    "@context": "http:\u002F\u002Fschema.org",
                                    "@type": "ListItem"
                                }, {
                                    "position": 4,
                                    "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredity\u002F",
                                    "name": "Кредиты",
                                    "@context": "http:\u002F\u002Fschema.org",
                                    "@type": "ListItem"
                                }, {
                                    "position": 5,
                                    "@id": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                                    "name": "Потребительский",
                                    "@context": "http:\u002F\u002Fschema.org",
                                    "@type": "ListItem"
                                }],
                                "itemListOrder": "ItemListOrderAscending",
                                "numberOfItems": 5,
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "BreadcrumbList"
                            },
                            "author": {
                                "logo": "https:\u002F\u002Fwww.sravni.ru\u002Ff\u002F_\u002Fnewdesign\u002Fimg\u002Flogo2.svg",
                                "name": "Сравни.ру",
                                "url": "https:\u002F\u002Fwww.sravni.ru\u002F",
                                "@context": "http:\u002F\u002Fschema.org",
                                "@type": "Organization"
                            },
                            "description": "Кредит «Потребительский» от банка Ренессанс Кредит с процентной ставкой {ставка} сроком на {срок} — онлайн заявка, подробные условия и список документов для получения кредита, расчет ежемесячного платежа.",
                            "name": "Кредит «Потребительский» от банка Ренессанс Кредит",
                            "@context": "http:\u002F\u002Fschema.org",
                            "@type": "WebPage"
                        },
                        "canonical": "https:\u002F\u002Fwww.sravni.ru\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F",
                        "url": "\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F"
                    },
                    "__response": {"status": 200}
                }
            }, "keys": ["\u002Fbank\u002Frenessans-kredit\u002Fkredit\u002Fpotrebitelskij\u002F"]
        },
        "osago": {
            "carInfoByNumberFetching": false,
            "carInfoByNumberNotFound": false,
            "carInfoByNumber": {
                "brand": {"name": ""},
                "model": {"name": ""},
                "volume": "",
                "vin": "",
                "diagnosticCardNumber": "",
                "year": "",
                "power": "",
                "diagnosticCardDateTo": ""
            },
            "years": [],
            "modelYears": [],
            "volumes": [],
            "powers": [],
            "bodies": [],
            "transmissions": [],
            "optionsFetching": false,
            "ssr": false
        },
        "osagoPhone": {
            "isSendingSMS": false,
            "isConfirmingSMS": false,
            "requestId": null,
            "verified": null,
            "confirmingError": null
        },
        "osagoPropositions": {
            "propositions": {"init": []},
            "kbm": {"init": []},
            "currentCalculation": "init",
            "currentKBMCalculation": "init",
            "propositionsFetching": false
        },
        "osagoOrders": {
            "currentRequestId": "init",
            "requests": {"init": {"ordersStatus": 0, "trySaveStatus": "fetching", "url": "", "otherOrders": []}}
        },
        "osagoFlow": {"screen": "AUTO_FORM"},
        "reviews": {
            "reviewsList": {"list": [], "total": 0, "loading": false, "loadingError": null},
            "filter": {
                "tag": "",
                "rated": "",
                "orderBy": "",
                "reviewObjectId": "",
                "reviewObjectType": "",
                "loading": false,
                "loadingError": null
            },
            "serverFilters": {"filters": {"banks": [], "insuranceCompany": []}, "loading": false, "loadingError": null},
            "reviews": {},
            "review": {"review": [], "loading": false, "loadingError": null},
            "comments": {},
            "commentsList": {"list": [], "commentCompanyId": null, "loading": false, "loadingError": null},
            "survey": {"survey": [], "loading": false, "loadingError": null},
            "postReview": {"postReview": "", "loading": false, "loadingError": null},
            "postComment": {"postComment": "", "loading": false, "loadingError": null},
            "consumerRating": {"banks": [], "insuranceCompany": [], "loading": false, "loadingError": null},
            "organization": {}
        },
        "insurance": {"insuranceCompanies": [], "info": {}}
    };</script>
<script charset="UTF-8">window.__CACHE_STORE__ = [["9c4b2e21ec79f6da0659edb1ab8c6b26f1b3d2e5", {
        "pattern": ["advertising"],
        "key": "9c4b2e21ec79f6da0659edb1ab8c6b26f1b3d2e5",
        "data": {
            "data": {
                "category": "Banks",
                "product": "Credit",
                "page": "Listing",
                "route": "6.72.1953.",
                "__CONTEXT__": {
                    "hasOffersInfo": {
                        "adventumLanding": "bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE",
                        "adventumSubId2": "google/~/cpc/~/sravni_conscred_g_search_rf_bankname_raiffeisen/~/%2B%D1%80%D0%B0%D0%B9%D1%84%D1%84%D0%B0%D0%B9%D0%B7%D0%B5%D0%BD%D0%B1%D0%B0%D0%BD%D0%BA%20%2B%D0%BA%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D1%8B%D0%B9/~/Sverdlovsk Oblast/~/Nizhny Tagil/~/bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE"
                    }
                }
            },
            "result": {
                "customerTargetUrl": "https://sravni.go2cloud.org/aff_c?offer_id=215&aff_id=2&aff_sub=conscred_pochta-bank_brand&aff_sub2=google/~/cpc/~/sravni_conscred_g_search_rf_bankname_raiffeisen/~/%2B%D1%80%D0%B0%D0%B9%D1%84%D1%84%D0%B0%D0%B9%D0%B7%D0%B5%D0%BD%D0%B1%D0%B0%D0%BD%D0%BA%20%2B%D0%BA%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D1%8B%D0%B9/~/Sverdlovsk Oblast/~/Nizhny Tagil/~/bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE&aff_sub4=pochta-bank&aff_sub5=conscred&source=brand&url_id=258&rnd={RANDOM}",
                "customerTrackingPixel": "https://wcm.solution.weborama.fr/fcgi-bin/dispatch.fcgi?a.A=im&a.si=5364&a.te=686&a.he=1&a.wi=1&a.hr=p&a.ra={RANDOM}",
                "defaultPropositionId": 2673,
                "sponsorCalculatorStyle": "<style>.calculator-list-theme__wrapper {\r\n  padding: 10px 0 10px;\r\n  color: #fff;\r\n}\r\n\r\n@media screen and (max-width: 767px) {\r\n  .calculator-list-theme__wrapper {\r\n    padding: 0;\r\n  }\r\n}\r\n\r\n/* Изображение */\r\n.calculator-list-theme__image-container {\r\n  background-color: #030200;\r\n  background-image: url(//f.sravni.ru/logotypes/branding/sponsorcalculatorbrandingoptions/bank-72_BackgroundImage20.svg);\r\n  background-repeat: repeat;\r\n  background-position: center; /* позиционирование фоновой картинки */\r\n  background-size: auto 100%; /* Размер фоновой картинки */\r\n}\r\n\r\n/* Регион */\r\n.calculator-list-theme__header-region-name {\r\n  display: inline-block;\r\n  line-height: 1;\r\n  color: #fff; \r\n  border-bottom: 1px solid #fff; /* Но бордера может и не быть не знаю как это разрулить */\r\n}\r\n\r\n/* Регион - hover */\r\n.calculator-list-theme__header-region-name:hover {\r\n  color: ; \r\n  border-bottom: none;\r\n}\r\n\r\n/* Спонсор раздела - линия */\r\n.calculator-list-theme__result-label {\r\n  z-index: 2;\r\n  color: #fff;\r\n  margin-top: 45px;\r\n}\r\n\r\n/* Спонсор раздела - текст */\r\n.calculator-list-theme__sponsor-text {\r\n  color: #fff;\r\n}\r\n\r\n/* Sponsor logo\t */\r\n.calculator-list-theme__sponsor-image {\r\n  width: 88px;\r\n  background-image: url(//f.sravni.ru/logotypes/branding/sponsorcalculatorbrandingoptions/bank-72_LogoImage20.svg); \r\n  background-position: center;\r\n  background-repeat: no-repeat;\r\n  background-size: 100% auto;\r\n}\r\n\r\n@media screen and (max-width: 767px) {\r\n  .calculator-list-theme__sponsor-image {\r\n    width: 46px;\r\n    background-image: url(https://f.sravni.ru/logotypes/banks/logo_72.svg);\r\n  }\r\n}\r\n\r\n/* Спонсор раздела - линия */\r\n.calculator-list-theme__sponsor-text::after {\r\n  border-right-color: #fff;\r\n}\r\n\r\n\r\n\r\n/* Лейблы контролов */\r\n.calculator-list-theme__label {\r\n  color: #fff;\r\n}\r\n\r\n/* лейбл с количеством выбранных условий */\r\n.calculator-list-theme__conditions-count {\r\n  background: #cbefff;\r\n  color: #3b3e44;\r\n}\r\n\r\n/* Кнопка условий */\r\n.calculator-list-theme__button-conditions {\r\n  color: ;\r\n  border-color: ;\r\n  background-color:  #fff;\r\n}\r\n\r\n/* Кнопка условий - hover */\r\n.calculator-list-theme__button-conditions:hover,\r\n.calculator-list-theme__button-conditions:active {\r\n  color: ;\r\n  border-color: ;\r\n  background-color: ;\r\n}\r\n\r\n/* Кнопка Подобрать */\r\n.calculator-list-theme__button-selection {\r\n  background: ;\r\n  border-color: ;\r\n  color: ;\r\n}\r\n\r\n/* Кнопка Подобрать - hover */\r\n.calculator-list-theme__button-selection:hover,\r\n.calculator-list-theme__button-selection:active {\r\n  background: rgba();\r\n  border-color: ;\r\n  color:  ;\r\n}</style>",
                "sponsorCalculatorButtonStyle": "<style>.calculator-list-theme__sponsor-line {\r\n  background-color: #ecfaff;\r\n  color: #3c3e44;\r\n}\r\n\r\n.calculator-list-theme__sponsor-line-image {\r\n  width: 88px;\r\n  background-image: url(//f.sravni.ru/logotypes/branding/sponsorcalculatorbuttonbrandingoptions/bank-72_LogoImage21.svg); \r\n  background-position: left top;\r\n  background-repeat: no-repeat;\r\n  background-size: 100% auto;\r\n}\r\n\r\n@media screen and (max-width: 767px) {\r\n  .calculator-list-theme__sponsor-line-image {\r\n\tbackground-image: url(https://f.sravni.ru/logotypes/banks/logo_72.svg); \r\n    width: 65px;\r\n    background-repeat: no-repeat;\r\n  }\r\n}\r\n\r\n.branding-logo-container {\r\n    background-image: url(//f.sravni.ru/logotypes/branding/sponsorcalculatorbuttonbrandingoptions/bank-72_LogoImage21.svg);\r\n    background-position: 40px center;\r\n    background-repeat: no-repeat;\r\n    background-size: 120px auto;\r\n}\r\n\r\n@media screen and (max-width: 767px) {\r\n  .branding-logo-container {\r\n      background-position: 5px center;\r\n  }\r\n}\r\n\r\n.calculator-branded-button {\r\n\tbackground-color: #ecfaff;\r\n\tbackground-image: ;\r\n\tbackground-repeat: no-repeat;\r\n\tbackground-position: left top;\r\n\tborder-color: #cfcece; \r\n}\r\n\r\n.branding-logo-label {\r\n\tcolor: #3c3e44;\r\n\tborder-color: #cfcece;\r\n}\r\n\r\n</style>",
                "sponsorOfferStyle": "<style>/*лейбл Спонсор раздела карт*/\r\n.debit-cards-serp .sponsor-label {\r\n    background-color: #0d168a;\r\n    color: #ffffff;\r\n}\r\n\r\n.debit-cards-serp .sponsor-label:before {\r\n    border-color: transparent;\r\n    border-bottom-color: #0d168a;\r\n}\r\n\r\n/*лейбл Спонсор раздела*/\r\n.sponsor-label, .calculator-list-theme__sponsor-label {\r\n    background-color: #0d168a;\r\n    color: #ffffff;\r\n}\r\n\r\n.sponsor-label:before {\r\n    border-color: transparent;\r\n    border-right-color: #0d168a;\r\n\r\n\r\n\r\nT-SponsorProposition .result-name {\r\n\tcolor:  ;\r\n}\r\n\r\nT-SponsorProposition .results-container-header {\r\n\tbackground-color:  ;\r\n\tcolor:  ;\r\n}\r\n\r\n\r\nT-SponsorProposition .btn-primary {\r\n\tbackground-color:  ;\r\n\tcolor:  ;\r\n}</style>",
                "sponsorId": 72,
                "sravniDisplayPixel": "https://sravni.go2cloud.org/aff_i?offer_id=215&aff_id=2&aff_sub=conscred_pochta-bank_brand&aff_sub2=google/~/cpc/~/sravni_conscred_g_search_rf_bankname_raiffeisen/~/%2B%D1%80%D0%B0%D0%B9%D1%84%D1%84%D0%B0%D0%B9%D0%B7%D0%B5%D0%BD%D0%B1%D0%B0%D0%BD%D0%BA%20%2B%D0%BA%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D1%8B%D0%B9/~/Sverdlovsk Oblast/~/Nizhny Tagil/~/bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE&aff_sub4=pochta-bank&aff_sub5=conscred&source=brand&url_id=258",
                "sravniClickPixel": "https://sravni.go2cloud.org/aff_c?offer_id=215&aff_id=2&aff_sub=conscred_pochta-bank_brand&aff_sub2=google/~/cpc/~/sravni_conscred_g_search_rf_bankname_raiffeisen/~/%2B%D1%80%D0%B0%D0%B9%D1%84%D1%84%D0%B0%D0%B9%D0%B7%D0%B5%D0%BD%D0%B1%D0%B0%D0%BD%D0%BA%20%2B%D0%BA%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D1%8B%D0%B9/~/Sverdlovsk Oblast/~/Nizhny Tagil/~/bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE&aff_sub4=pochta-bank&aff_sub5=conscred&source=brand&url_id=258&rnd={RANDOM}",
                "useDefaultAlternatives": false
            },
            "type": "ADVERTISING_BRANDING_LOAD_SUCCESS"
        },
        "expire": 1533796264695
    }], ["9e04eb1a97065e91284a7b5579bf264a79bbc060", {
        "pattern": ["advertising"],
        "key": "9e04eb1a97065e91284a7b5579bf264a79bbc060",
        "data": {
            "data": {
                "category": "Banks",
                "product": "Credit",
                "page": "Listing",
                "bannerTypes": "Tgbm7",
                "__CONTEXT__": {
                    "hasOffersInfo": {
                        "adventumLanding": "bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE",
                        "adventumSubId2": "google/~/cpc/~/sravni_conscred_g_search_rf_bankname_raiffeisen/~/%2B%D1%80%D0%B0%D0%B9%D1%84%D1%84%D0%B0%D0%B9%D0%B7%D0%B5%D0%BD%D0%B1%D0%B0%D0%BD%D0%BA%20%2B%D0%BA%D1%80%D0%B5%D0%B4%D0%B8%D1%82%D0%BD%D1%8B%D0%B9/~/Sverdlovsk Oblast/~/Nizhny Tagil/~/bank%2Frajffajzenbank%2Fkredity%2F%3Futm_source%3Dgoogle%26utm_medium%3Dcpc%26utm_term%3D%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9%26utm_position%3D1o2%26utm_placement%3D_c%26utm_content%3D279685741625%7Ckwd-357958225405%7C926299168%7C50052715121%7C1o2%7Cg%7C_c%7C%7C%7C%252B%25D1%2580%25D0%25B0%25D0%25B9%25D1%2584%25D1%2584%25D0%25B0%25D0%25B9%25D0%25B7%25D0%25B5%25D0%25BD%25D0%25B1%25D0%25B0%25D0%25BD%25D0%25BA%2520%252B%25D0%25BA%25D1%2580%25D0%25B5%25D0%25B4%25D0%25B8%25D1%2582%25D0%25BD%25D1%258B%25D0%25B9_b%7C%26utm_campaign%3Dsravni_conscred_g_search_rf_bankname_raiffeisen%26gclid%3DEAIaIQobChMI4OeE_qnf3AIVlk0YCh1tJAhtEAMYAiAAEgJF0vD_BwE"
                    }
                }
            },
            "result": {
                "Tgbm7": {
                    "id": "1509439209499-4",
                    "tag": "fin_conscred_listing_tgbm7_964x240",
                    "contentGroup": "fin_conscred_listing",
                    "bannerType": "Tgbm7",
                    "sizes": [[964, 240], [1280, 240]],
                    "targeting": {
                        "dfp": {
                            "ip": "88.86.210.114:49956",
                            "vs": "NA",
                            "auth": false,
                            "subStatus": false,
                            "surveys": ""
                        },
                        "analytics": {"UAGroupName": "fin_conscred_listing", "ProductNameUA": "NA", "PageTypeUA": "NA"}
                    }
                }
            },
            "type": "ADVERTISING_BANNERS_LOAD_SUCCESS"
        },
        "expire": 1533796264715
    }], ["51ae4cf1fb0daa61d6464254c7fa1fc5e7dac36c", {
        "pattern": ["advertising"],
        "key": "51ae4cf1fb0daa61d6464254c7fa1fc5e7dac36c",
        "data": {
            "data": {
                "ownerType": "Bank",
                "ownerId": 777,
                "productType": "Credit",
                "productId": 29580,
                "__CONTEXT__": {
                    "hasOffersInfo": {
                        "adventumLanding": "bank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter",
                        "adventumSubId2": "(direct)/~/(none)/~/(none)/~/(not set)/~/Moscow/~/Moscow/~/bank%2Frenessans-kredit%2Fkredit%2Fpotrebitelskij%2F%3Famount%3D%26currency%3DRUB%26externalId%3Da2f51f5e-5f38-44a3-b039-c9bb23f55b10%26purpose%3DNoMatter%26solvencyProof%3DNoMatter",
                        "guid": "655408484.1533125627"
                    }
                }
            }, "result": {"styles": null}, "type": "ADVERTISING_PRODUCT_BRANDING_LOAD_SUCCESS"
        },
        "expire": 1533796264868
    }]];</script>
<script data-react-helmet="true" type="application/ld+json">
    {"breadcrumb":{"itemListElement":[{"position":1,"@id":"https://www.sravni.ru","name":"Сравни.ру","@context":"http://schema.org","@type":"ListItem"},{"position":2,"@id":"https://www.sravni.ru/banki/","name":"Банки","@context":"http://schema.org","@type":"ListItem"},{"position":3,"@id":"https://www.sravni.ru/bank/renessans-kredit/","name":"Банк Ренессанс Кредит","@context":"http://schema.org","@type":"ListItem"},{"position":4,"@id":"https://www.sravni.ru/bank/renessans-kredit/kredity/","name":"Кредиты","@context":"http://schema.org","@type":"ListItem"},{"position":5,"@id":"https://www.sravni.ru/bank/renessans-kredit/kredit/potrebitelskij/","name":"Потребительский","@context":"http://schema.org","@type":"ListItem"}],"itemListOrder":"ItemListOrderAscending","numberOfItems":5,"@context":"http://schema.org","@type":"BreadcrumbList"},"author":{"logo":"https://www.sravni.ru/f/_/newdesign/img/logo2.svg","name":"Сравни.ру","url":"https://www.sravni.ru/","@context":"http://schema.org","@type":"Organization"},"description":"Кредит «Потребительский» от банка Ренессанс Кредит с процентной ставкой {ставка} сроком на {срок} — онлайн заявка, подробные условия и список документов для получения кредита, расчет ежемесячного платежа.","name":"Кредит «Потребительский» от банка Ренессанс Кредит","@context":"http://schema.org","@type":"WebPage"}









</script>
<script data-react-helmet="true" type="application/ld+json">
    {"@context":"http://schema.org","@type":"FinancialProduct","additionalType":"BankOrCreditUnion","annualPercentageRate":11.300000190734863,"interestRate":11.300000190734863,"feesAndCommissionsSpecification":"Сумма 30 000 ₽ - 700 000 ₽; Ставка 11,3% - 23,3%; Срок 0 минут; Возраст заемщика лет; Подтверждение платёжеспособности: не требуется; ; Кредит погашается ежемесячно равными (аннуитетными) платежами; Стаж на последнем месте работы от 3 месяцев","name":"Кредит Потребительский","provider":{"@context":"http://schema.org","@type":"Organization","aggregateRating":{"@context":"http://schema.org","@type":"AggregateRating","reviewCount":0,"bestRating":5,"ratingValue":4.7,"worstRating":0},"logo":"//f.sravni.ru/logotypes/banks/logo_777.svg","image":"//f.sravni.ru/logotypes/banks/logo_777.svg","name":"Ренессанс Кредит","url":"/bank/renessans-kredit/"}}









</script>
<script defer="" src="<?= get_template_directory_uri(); ?>/assets/front/js/vendor.fde6d08a.js" charset="UTF-8"></script>
<script defer="" src="<?= get_template_directory_uri(); ?>/assets/front/js/common.47c9289a.js" charset="UTF-8"></script>
<!--<script defer="" src="--><? //= get_template_directory_uri(); ?><!--/assets/front/js/sravni-js.js" charset="UTF-8"></script>-->
<!--</body>
</html>-->

<script>
    function select_period_kr_form() {
        jQuery("#period-kr-form-wrap").toggleClass("_1VyK0");
    }

    function select_period_srok_kr_form(a) {
        jQuery("#cur_period-kr-form").val(a);
        jQuery("#period-kr-form-wrap").toggleClass("_1VyK0");
        monthlyPayment();
    }

    function select_currency_kr_form() {
        jQuery("#currency-kr-form-wrap").toggleClass("_1VyK0");
    }

    function select_currency_kr_form(a) {
        jQuery("#cur_currency-kr-form").html(a);
        jQuery("#currency-kr-form-wrap").toggleClass("_1VyK0");
    }

    jQuery("._3kSy4").click(function () {
        jQuery("#overlay").removeClass('overlay-block-hidden');
        jQuery(".main-wrapper").addClass('is-blur');
    });

    jQuery("._2JB7j").click(function () {
        jQuery("#overlay").addClass('overlay-block-hidden');
        jQuery(".main-wrapper").removeClass('is-blur');
    });

    //как получить, как погасить
    jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(1)").click(function () {
        jQuery(this).addClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(2)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(3)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(4)").removeClass('Rgs0e');
        jQuery(".ER4_X-2bl-2").css('display', 'none');
        jQuery(".ER4_X-2bl-1").css('display', 'block');
    });

    jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(2)").click(function () {
        jQuery(this).addClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(1)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(3)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-2bl ._3v6iT:nth-child(4)").removeClass('Rgs0e');
        jQuery(".ER4_X-2bl-1").css('display', 'none');
        jQuery(".ER4_X-2bl-2").css('display', 'block');
    });


    //Ставки, условия, требования, документы
    jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(1)").click(function () {
        jQuery(this).addClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(2)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(3)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(4)").removeClass('Rgs0e');
        jQuery(".ER4_X-1bl-1").css('display', 'block');
        jQuery(".ER4_X-1bl-2").css('display', 'none');
        jQuery(".ER4_X-1bl-3").css('display', 'none');
        jQuery(".ER4_X-1bl-4").css('display', 'none');
    });

    jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(2)").click(function () {
        jQuery(this).addClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(1)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(3)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(4)").removeClass('Rgs0e');
        jQuery(".ER4_X-1bl-1").css('display', 'none');
        jQuery(".ER4_X-1bl-2").css('display', 'block');
        jQuery(".ER4_X-1bl-3").css('display', 'none');
        jQuery(".ER4_X-1bl-4").css('display', 'none');
    });

    jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(3)").click(function () {
        jQuery(this).addClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(1)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(2)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(4)").removeClass('Rgs0e');
        jQuery(".ER4_X-1bl-1").css('display', 'none');
        jQuery(".ER4_X-1bl-2").css('display', 'none');
        jQuery(".ER4_X-1bl-3").css('display', 'block');
        jQuery(".ER4_X-1bl-4").css('display', 'none');
    });

    jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(4)").click(function () {
        jQuery(this).addClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(1)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(2)").removeClass('Rgs0e');
        jQuery("._1TAoF._3uqC5._3uqC5-1bl ._3v6iT:nth-child(3)").removeClass('Rgs0e');
        jQuery(".ER4_X-1bl-1").css('display', 'none');
        jQuery(".ER4_X-1bl-2").css('display', 'none');
        jQuery(".ER4_X-1bl-3").css('display', 'none');
        jQuery(".ER4_X-1bl-4").css('display', 'block');
    });
</script>

<style>
    #consumer-credit ._1ZPUn {
        width: calc(100% - 67px);
    }

    #consumer-credit ._3Gb4E {
        width: calc((100% - 20px) / 2);
    }

    #consumer-credit ._180uG {
        width: calc((100% - 20px) / 2);
    }

    .ER4_X-2bl-2 {
        display: none;
    }

    .ER4_X-1bl-2,
    .ER4_X-1bl-3,
    .ER4_X-1bl-4 {
        display: none;
    }

    #slider-range .ui-slider-handle.ui-corner-all.ui-state-default:last-child {
        width: 20px;
        height: 20px;
        background-color: #fff;
        background-image: none;
        border: 3px solid #0dd149;
        border-radius: 50%;
        top: -8px;
    }

    .ui-widget-content {
        height: 3px !important;
    }

    #slider-range {
        bottom: -7px;
    }

    @media screen and (max-width: 768px) {
        #consumer-credit ._25N6O, #consumer-credit ._25N6O:hover {
            display: none;
        }
    }

</style>

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
<script>
    jQuery("#slider-range").slider({
        range: true,
        min: 1,
        max: 1500,
        values: [1, 500],
        step: 1,
        slide: function (event, ui) {
            jQuery("#price").val(ui.values[1] * 1000);
            monthlyPayment();
            // jQuery("#slider-range_dop").slider("option", "values", [1, ui.values[1] * 1000]);
            // document.getElementById('price_dop').value = ui.values[1] * 1000;
            // Get_PotrKr();
        }
    });
    jQuery("#price").val(jQuery("#slider-range").slider("values", 1) * 1000);


    function monthlyPayment() {
        var sum = jQuery('#price').val();
        var period = jQuery('#cur_period-kr-form').val();
        period = period.charAt(0);
        period = period * 12;
        var rate = <?php the_field('block_2_rate_number'); ?>;
        var fullsum = parseInt(sum) + (sum / 100 * rate);
        var monthpay = Math.round(fullsum / period);
        monthpay = monthpay.toString();
        monthpay = monthpay.replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
        console.log(sum);
        console.log(period);
        console.log(rate);
        console.log(fullsum);
        console.log(monthpay);
        jQuery('#monthpay').html(monthpay);
    }
    monthlyPayment();

    jQuery(document).ready(function(){
        jQuery("#kredit-calculate-button").click(function (event) {
            //отменяем стандартную обработку нажатия по ссылке
            event.preventDefault();

            //забираем идентификатор бока с атрибута href
            var id  = jQuery(this).attr('href'),

                //узнаем высоту от начала страницы до блока на который ссылается якорь
                top = jQuery(id).offset().top;

            //анимируем переход на расстояние - top за 1500 мс
            jQuery('body,html').animate({scrollTop: top}, 500);
        });
    });
</script>
