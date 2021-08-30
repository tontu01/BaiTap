<!DOCTYPE html>
<html lang="vi" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"
      class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Trang chủ - GK ARCHI</title>
    <script src="frontend/theme/sdk.js.tải xuống" async="" crossorigin="anonymous"></script>
    <script async="" src="frontend/theme/analytics.js.tải xuống"></script>
    <script id="facebook-jssdk" src="frontend/theme/sdk.js(1).tải xuống"></script>
    <link rel="dns-prefetch" href="http://maps.googleapis.com/">
    <link rel="dns-prefetch" href="http://use.fontawesome.com/">
    <link rel="dns-prefetch" href="http://s.w.org/">
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {
                "wpemoji": "http:\/\/gka.vn\/wp-includes\/js\/wp-emoji.js?ver=5.2.11",
                "twemoji": "http:\/\/gka.vn\/wp-includes\/js\/twemoji.js?ver=5.2.11"
            }
        };
        /**
         * @output wp-includes/js/wp-emoji-loader.js
         */

        (function (window, document, settings) {
            var src, ready, ii, tests;

            // Create a canvas element for testing native browser support of emoji.
            var canvas = document.createElement('canvas');
            var context = canvas.getContext && canvas.getContext('2d');

            /**
             * Checks if two sets of Emoji characters render the same visually.
             *
             * @since 4.9.0
             *
             * @private
             *
             * @param {number[]} set1 Set of Emoji character codes.
             * @param {number[]} set2 Set of Emoji character codes.
             *
             * @return {boolean} True if the two sets render the same.
             */
            function emojiSetsRenderIdentically(set1, set2) {
                var stringFromCharCode = String.fromCharCode;

                // Cleanup from previous test.
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.fillText(stringFromCharCode.apply(this, set1), 0, 0);
                var rendered1 = canvas.toDataURL();

                // Cleanup from previous test.
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.fillText(stringFromCharCode.apply(this, set2), 0, 0);
                var rendered2 = canvas.toDataURL();

                return rendered1 === rendered2;
            }

            /**
             * Detects if the browser supports rendering emoji or flag emoji.
             *
             * Flag emoji are a single glyph made of two characters, so some browsers
             * (notably, Firefox OS X) don't support them.
             *
             * @since 4.2.0
             *
             * @private
             *
             * @param {string} type Whether to test for support of "flag" or "emoji".
             *
             * @return {boolean} True if the browser can render emoji, false if it cannot.
             */
            function browserSupportsEmoji(type) {
                var isIdentical;

                if (!context || !context.fillText) {
                    return false;
                }

                /*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
                context.textBaseline = 'top';
                context.font = '600 32px Arial';

                switch (type) {
                    case 'flag':
                        /*
				 * Test for UN flag compatibility. This is the least supported of the letter locale flags,
				 * so gives us an easy test for full support.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly ([U] + [N]).
				 */
                        isIdentical = emojiSetsRenderIdentically(
                            [0xD83C, 0xDDFA, 0xD83C, 0xDDF3],
                            [0xD83C, 0xDDFA, 0x200B, 0xD83C, 0xDDF3]
                        );

                        if (isIdentical) {
                            return false;
                        }

                        /*
				 * Test for English flag compatibility. England is a country in the United Kingdom, it
				 * does not have a two letter locale code but rather an five letter sub-division code.
				 *
				 * To test for support, we try to render it, and compare the rendering to how it would look if
				 * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
				 */
                        isIdentical = emojiSetsRenderIdentically(
                            [0xD83C, 0xDFF4, 0xDB40, 0xDC67, 0xDB40, 0xDC62, 0xDB40, 0xDC65, 0xDB40, 0xDC6E, 0xDB40, 0xDC67, 0xDB40, 0xDC7F],
                            [0xD83C, 0xDFF4, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC62, 0x200B, 0xDB40, 0xDC65, 0x200B, 0xDB40, 0xDC6E, 0x200B, 0xDB40, 0xDC67, 0x200B, 0xDB40, 0xDC7F]
                        );

                        return !isIdentical;
                    case 'emoji':
                        /*
				 * Love is love.
				 *
				 * To test for Emoji 12 support, try to render a new emoji: men holding hands, with different skin
				 * tone modifiers.
				 *
				 * When updating this test for future Emoji releases, ensure that individual emoji that make up the
				 * sequence come from older emoji standards.
				 */
                        isIdentical = emojiSetsRenderIdentically(
                            [0xD83D, 0xDC68, 0xD83C, 0xDFFE, 0x200D, 0xD83E, 0xDD1D, 0x200D, 0xD83D, 0xDC68, 0xD83C, 0xDFFC],
                            [0xD83D, 0xDC68, 0xD83C, 0xDFFE, 0x200B, 0xD83E, 0xDD1D, 0x200B, 0xD83D, 0xDC68, 0xD83C, 0xDFFC]
                        );

                        return !isIdentical;
                }

                return false;
            }

            /**
             * Adds a script to the head of the document.
             *
             * @ignore
             *
             * @since 4.2.0
             *
             * @param {Object} src The url where the script is located.
             * @return {void}
             */
            function addScript(src) {
                var script = document.createElement('script');

                script.src = src;
                script.defer = script.type = 'text/javascript';
                document.getElementsByTagName('head')[0].appendChild(script);
            }

            tests = Array('flag', 'emoji');

            settings.supports = {
                everything: true,
                everythingExceptFlag: true
            };

            /*
	 * Tests the browser support for flag emojis and other emojis, and adjusts the
	 * support settings accordingly.
	 */
            for (ii = 0; ii < tests.length; ii++) {
                settings.supports[tests[ii]] = browserSupportsEmoji(tests[ii]);

                settings.supports.everything = settings.supports.everything && settings.supports[tests[ii]];

                if ('flag' !== tests[ii]) {
                    settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[tests[ii]];
                }
            }

            settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && !settings.supports.flag;

            // Sets DOMReady to false and assigns a ready function to settings.
            settings.DOMReady = false;
            settings.readyCallback = function () {
                settings.DOMReady = true;
            };

            // When the browser can not render everything we need to load a polyfill.
            if (!settings.supports.everything) {
                ready = function () {
                    settings.readyCallback();
                };

                /*
		 * Cross-browser version of adding a dom ready event.
		 */
                if (document.addEventListener) {
                    document.addEventListener('DOMContentLoaded', ready, false);
                    window.addEventListener('load', ready, false);
                } else {
                    window.attachEvent('onload', ready);
                    document.attachEvent('onreadystatechange', function () {
                        if ('complete' === document.readyState) {
                            settings.readyCallback();
                        }
                    });
                }

                src = settings.source || {};

                if (src.concatemoji) {
                    addScript(src.concatemoji);
                } else if (src.wpemoji && src.twemoji) {
                    addScript(src.twemoji);
                    addScript(src.wpemoji);
                }
            }

        })(window, document, window._wpemojiSettings);
    </script>
    <script src="frontend/theme/twemoji.js.tải xuống" type="text/javascript" defer=""></script>
    <script src="frontend/theme/wp-emoji.js.tải xuống" type="text/javascript" defer=""></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="frontend/theme/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="wa_chpcs_style-css" href="frontend/theme/custom-style.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="frontend/theme/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="stylesheets-css" href="frontend/theme/style(1).css" type="text/css" media="all">
    <link rel="stylesheet" id="bxslider-css" href="frontend/theme/jquery.bxslider.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-official-css" href="frontend/theme/all.css" type="text/css" media="all"
          integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">
    <link rel="stylesheet" id="font-awesome-official-v4shim-css" href="frontend/theme/v4-shims.css" type="text/css"
          media="all" integrity="sha384-i1lF6V7EeiD7KOgGLtAvJiK1GAQx4ogzG6B9gpEaDuHSLZuM3sFtPZrI6H2Gzqs6"
          crossorigin="anonymous">
    <style id="font-awesome-official-v4shim-inline-css" type="text/css">
        @font-face {
            font-family: "FontAwesome";
            src: url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-brands-400.eot"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-brands-400.woff2") format("woff2"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-brands-400.woff") format("woff"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-brands-400.ttf") format("truetype"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-brands-400.svg#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            src: url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-solid-900.eot"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-solid-900.woff2") format("woff2"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-solid-900.woff") format("woff"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-solid-900.ttf") format("truetype"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-solid-900.svg#fontawesome") format("svg");
        }

        @font-face {
            font-family: "FontAwesome";
            src: url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-regular-400.eot"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-regular-400.woff2") format("woff2"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-regular-400.woff") format("woff"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-regular-400.ttf") format("truetype"),
            url("https://use.fontawesome.com/releases/v5.10.1/webfonts/fa-regular-400.svg#fontawesome") format("svg");
            unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
        }
    </style>
    <script type="text/javascript" src="frontend/theme/jquery.js.tải xuống"></script>
    <script type="text/javascript" src="frontend/theme/jquery-migrate.js.tải xuống"></script>
    <script type="text/javascript" src="frontend/theme/jquery.transit.min.js.tải xuống"></script>
    <script type="text/javascript" src="frontend/theme/jquery.carouFredSel-6.2.1-packed.js.tải xuống"></script>
    <script type="text/javascript" src="frontend/theme/jquery.touchSwipe.min.js.tải xuống"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var chpcsArgs = {
            "auto_scroll": "false",
            "circular": "false",
            "easing_effect": "linear",
            "item_align": "left",
            "direction": "left",
            "touch_swipe": "false",
            "item_width": "390",
            "time_out": "3000",
            "duration": "500",
            "css_transition": "false",
            "infinite": "true",
            "fx": "scroll"
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="frontend/theme/script.js.tải xuống"></script>
    <script type="text/javascript" src="frontend/theme/js"></script>
    <link rel="https://api.w.org/" href="http://gka.vn/wp-json/">
    <link rel="alternate" type="application/json+oembed"
          href="http://gka.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fgka.vn%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="http://gka.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fgka.vn%2F&amp;format=xml">
    <link rel="alternate" href="http://gka.vn/" hreflang="vi">
    <link rel="alternate" href="http://gka.vn/en/home/" hreflang="en">
    <style>
        a, a:visited {
            color: #f6921e;
        }

        header.header {
            background-color: #384848;
        }

        .footer {
            background-color: #384848;
        }

        a:hover, a:focus, a:visited:hover, a:visited:focus {
            color: #f6921e;
        }

        .accent, .shortcode_icon_with_title .icon_with_title_link,
        .shortcode_icon_with_title.left .icon_holder .font_awsome_icon i:hover,
        .fa_icon_stack .fa-circle, .shortcode_icon_with_title.boxed .icon_holder .fa-stack,
        .shortcode_team .team_description .team_social_holder .shortcode_social_icon_holder:hover i.simple_social,
        .shortcode_social_icon_holder:hover i.simple_social, .shortcode_service_table_inner li.title_holder i, .blog_content .entry-header span.sep,
        .blog_content .entry-header span.type, .blog_content .post_meta span a:hover,
        .widget ul li a:hover, .widget ul li.current-menu-item > a,
        .footer .footer-bottom .textwidget a:hover .fa {
            color: #f6921e;
        }

        .line.accent {
            border-top: 3px solid #f6921e;
        }

        .shortcode_icon_with_title.boxed .icon_holder .fa-stack,
        .fa_icon_square, .shortcode_icon_with_title.square .icon_holder .fa-stack:hover,
        .circle .icon_holder .fa-stack:hover, .shortcode_social_icon_holder.circle_social .fa-stack:hover,
        .shortcode_price_table .active_price_table, .btn:hover, .btn:focus, .accent-btn:hover, input[type="submit"]:hover, .comment-respond #submit:hover, .accent-btn:focus, input[type="submit"]:focus, .comment-respond #submit:focus,
        .btn.black:hover, .black.accent-btn:hover, input.black[type="submit"]:hover, .comment-respond .black#submit:hover,
        .accent-btn, input[type="submit"], .comment-respond #submit,
        input[type="submit"]:hover, input[type="submit"]:focus {
            background-color: #f6921e;
        }

        .nav > li ul.sub-menu, .nav > li ul.children,
        .block-title, .filter ul li ul.sectors, .filter ul li ul.locations,
        .filter ul li ul.sectors li a, .filter ul li ul.locations li a,
        .filter ul li ul.sectors li a:visited, .filter ul li ul.locations li a:visited,
        .flex-button a:hover {
            background: #f6921e;
        }

        .btn.black:hover, .black.accent-btn:hover, input.black[type="submit"]:hover, .comment-respond .black#submit:hover,
        .btn.accent, .accent.accent-btn, input.accent[type="submit"], .comment-respond .accent#submit,
        .accent-btn, input[type="submit"], .comment-respond #submit,
        input[type="submit"]:hover, input[type="submit"]:focus {
            border-color: #f6921e;
        }

        .nav > li > a:hover, .nav > li > a.active, .nav > li.current_page_item a {
            border-bottom: 4px solid #f6921e;
        }
    </style>
    <style></style>
    <style type="text/css" id="wp-custom-css">
        .header__searchform {
            float: right;
            margin-left: 20px;
            height: 105px;
            display: inline-flex;
            align-items: center;
        }

        .header__searchform form {
            position: relative;
        }

        .header__searchform form input[type="text"] {
            margin-bottom: 0;
        }

        .header__searchform form button {
            position: absolute;
            top: 0;
            right: 0;
            background: none;
            border: none;
            height: 40px;
            width: 40px;
            text-align: center;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }        </style>
    <link href="backend/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <meta name="google-site-verification" content="lGaX0D_lvDHwnBNA68ALXJIMOc82hNRZ550pYPIDkD4">
    <style id="fit-vids-style">.fluid-width-video-wrapper {
            width: 100%;
            position: relative;
            padding: 0;
        }

        .fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }</style>
    <style type="text/css"
           data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset > div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }
            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title > span {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #043b87;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop, .fb_iframe_widget_fluid_desktop span, .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_mpn_mobile_landing_page_slide_out {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_out_from_left {
            animation-duration: 200ms;
            animation-name: fb_mpn_landing_page_slide_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_landing_page_slide_up {
            animation-duration: 500ms;
            animation-name: fb_mpn_landing_page_slide_up;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_in {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_in;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out {
            animation-duration: 300ms;
            animation-name: fb_mpn_bounce_out;
            transition-timing-function: ease-in
        }

        .fb_mpn_mobile_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_mpn_fade_out;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_from_left;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_from_left {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_from_left;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bubble_animated_no_badge {
            box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
            transition: box-shadow 150ms linear
        }

        .fb_customer_chat_bubble_animated_no_badge:hover {
            box-shadow: 0 5px 24px rgba(0, 0, 0, .3)
        }

        .fb_customer_chat_bubble_animated_with_badge {
            box-shadow: -5px 4px 14px rgba(0, 0, 0, .15);
            transition: box-shadow 150ms linear
        }

        .fb_customer_chat_bubble_animated_with_badge:hover {
            box-shadow: -5px 8px 24px rgba(0, 0, 0, .2)
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        .fb_new_ui_mobile_overlay_active {
            overflow: hidden
        }

        @keyframes fb_mpn_landing_page_slide_in {
            0% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }
            40% {
                border-radius: 18px
            }
            100% {
                margin: 0 12px;
                width: 100% -24px
            }
        }

        @keyframes fb_mpn_landing_page_slide_in_from_left {
            0% {
                border-radius: 50%;
                left: 12px;
                margin: 0 24px;
                width: 60px
            }
            40% {
                border-radius: 18px
            }
            100% {
                left: 12px;
                margin: 0 12px;
                width: 100% -24px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out {
            0% {
                margin: 0 12px;
                width: 100% -24px
            }
            60% {
                border-radius: 18px
            }
            100% {
                border-radius: 50%;
                margin: 0 24px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_out_from_left {
            0% {
                left: 12px;
                width: 100% -24px
            }
            60% {
                border-radius: 18px
            }
            100% {
                border-radius: 50%;
                left: 12px;
                width: 60px
            }
        }

        @keyframes fb_mpn_landing_page_slide_up {
            0% {
                bottom: 0;
                opacity: 0
            }
            100% {
                bottom: 24px;
                opacity: 1
            }
        }

        @keyframes fb_mpn_bounce_in {
            0% {
                opacity: .5;
                top: 100%
            }
            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_mpn_fade_out {
            0% {
                bottom: 30px;
                opacity: 1
            }
            100% {
                bottom: 0;
                opacity: 0
            }
        }

        @keyframes fb_mpn_bounce_out {
            0% {
                opacity: 1;
                top: 0
            }
            100% {
                opacity: .5;
                top: 100%
            }
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }
            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_from_left {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }
            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom left
            }
            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_from_left {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom left
            }
            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom left
            }
        }

        @keyframes fb_bounce_out_v2_mobile_chat_started {
            0% {
                opacity: 1;
                top: 0
            }
            100% {
                opacity: 0;
                top: 20px
            }
        }

        @keyframes fb_customer_chat_bubble_bounce_in_animation {
            0% {
                bottom: 6pt;
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: center
            }
            70% {
                bottom: 18pt;
                opacity: 1;
                transform: scale(1.2, 1.2)
            }
            100% {
                transform: scale(1, 1)
            }
        }

        @keyframes slideInFromBottom {
            0% {
                opacity: .1;
                transform: translateY(100%)
            }
            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideInFromBottomDelay {
            0% {
                opacity: 0;
                transform: translateY(100%)
            }
            97% {
                opacity: 0;
                transform: translateY(100%)
            }
            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }</style>
    <script type="text/javascript" charset="UTF-8" src="frontend/theme/common.js.tải xuống"></script>
    <script type="text/javascript" charset="UTF-8" src="frontend/theme/util.js.tải xuống"></script>
</head>

<body class="home page-template-default page page-id-1204 pace-done">
<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
        <div></div>
    </div>
</div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=584245598253249";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<img src="https://imgu.info/e/49/transparent.png" alt="">
<header class="header nav-down" role="banner">

    <div class="wrap cf">

        <div class="m-2of3 t-1of3 d-1of3">

            <div class="brand" style="padding-top: 10px;">

                <h1 id="site-title">
                    <a style="float:left;" href="" title="GK ARCHI - " rel="home">
                        <img src="frontend/theme/logo-GK-Archi-03.png" width="75px">
                    </a>
                    <div class="site-description">
                        <span class="span1">TOP ONE MYANMAR </span><br>
                        <span class="span2"><i class="fa fa-registered"></i> TOP TEN BCI VIETNAM </span>
                    </div>
                </h1>
                <h2 id="site-description"></h2>

            </div>

        </div>

        <div class="m-1of3 t-2of3 d-2of3 last-col">

            <div class="header__searchform">
                <form role="search" method="get" id="searchform" action="http://gka.vn/">
                    <div>
                        <input type="text" value="Search for..." name="s" id="s"
                               onfocus="if(this.value==this.defaultValue)this.value=&#39;&#39;;"
                               onblur="if(this.value==&#39;&#39;)this.value=this.defaultValue;">
                        <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <nav role="social">
            </nav>

            <nav role="navigation">
                <ul id="menu-main-menu-main-menutieng-viet" class="nav primary cf">
                    <li id="menu-item-1225"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1225">
                        <a href="http://gka.vn/gioi-thieu/">Giới thiệu</a>
                        <ul class="sub-menu">
                            <li id="menu-item-3598"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3598"><a
                                        href="http://gka.vn/gioi-thieu/ve-chung-toi/">Về chúng tôi</a></li>
                            <li id="menu-item-3583"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3583"><a
                                        href="http://gka.vn/gioi-thieu/thong-diep/">Thông điệp từ Chủ tịch</a></li>
                            <li id="menu-item-3581"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3581"><a
                                        href="http://gka.vn/gioi-thieu/lanh-dao/">Lãnh đạo chủ chốt</a></li>
                            <li id="menu-item-3582"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3582"><a
                                        href="http://gka.vn/gioi-thieu/lich-su/">Lịch sử &amp; Phát triển</a></li>
                            <li id="menu-item-9056"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9056"><a
                                        target="_blank" rel="noopener noreferrer"
                                        href="https://drive.google.com/file/d/0B25CcExdVLL9OUpSU0RNT0JGakRHcGRyaTJpOERUMzcyWEpN/view">XEM
                                    PORFOLIO&nbsp;<i class="fa fa-download"></i></a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1223"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1223">
                        <a href="http://gka.vn/du-an/">Dự án</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1368"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1368">
                                <a href="http://gka.vn/projects-cat/nha-hang-khach-san/">Nhà hàng – Khách sạn</a></li>
                            <li id="menu-item-1366"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1366">
                                <a href="http://gka.vn/projects-cat/van-phong-thuong-mai/">Văn phòng -Thương mại</a>
                            </li>
                            <li id="menu-item-1372"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1372">
                                <a href="http://gka.vn/projects-cat/nha-o/">Chung cư cao tầng</a></li>
                            <li id="menu-item-1367"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1367">
                                <a href="http://gka.vn/projects-cat/trung-tam-van-hoa/">Công trình công cộng</a></li>
                            <li id="menu-item-1369"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1369">
                                <a href="http://gka.vn/projects-cat/trang-tri-noi-that/">Trang trí nội thất</a></li>
                            <li id="menu-item-1370"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1370">
                                <a href="http://gka.vn/projects-cat/khu-dan-cu-a/">Khu dân cư</a></li>
                            <li id="menu-item-1371"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1371">
                                <a href="http://gka.vn/projects-cat/quy-hoach-tong-the/">Quy hoạch đô thị</a></li>
                            <li id="menu-item-1373"
                                class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1373">
                                <a href="http://gka.vn/projects-cat/nha-da-nang/">Khu phức hợp</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-4798"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-4798">
                        <a href="http://gka.vn/category/tong-hop/" class="">Tin Tức</a>
                        <ul class="sub-menu" style="display: none;">
                            <li id="menu-item-4729"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4729"><a
                                        href="http://gka.vn/category/tong-hop/">Tổng Hợp</a></li>
                            <li id="menu-item-3677"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3677"><a
                                        href="http://gka.vn/category/bao-chi/">Tin Báo Chí</a></li>
                            <li id="menu-item-3678"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3678"><a
                                        href="http://gka.vn/category/du-an/">Tin tức Dự Án</a></li>
                            <li id="menu-item-3680"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3680"><a
                                        href="http://gka.vn/category/su-kien/">Tin Sự Kiện</a></li>
                            <li id="menu-item-3679"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3679"><a
                                        href="http://gka.vn/category/khac/">Tin tức khác</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-2272"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2272">
                        <a href="http://gka.vn/giai-thuong/">Giải thưởng</a>
                        <ul class="sub-menu">
                            <li id="menu-item-3682"
                                class="menu-item menu-item-type-taxonomy menu-item-object-awards_cat menu-item-3682"><a
                                        href="http://gka.vn/awards-cat/giai-thuong/">Giải Thưởng</a></li>
                            <li id="menu-item-3681"
                                class="menu-item menu-item-type-taxonomy menu-item-object-awards_cat menu-item-3681"><a
                                        href="http://gka.vn/awards-cat/chung-nhan/">Chứng Nhận</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1226"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1226">
                        <a href="http://gka.vn/lien-he/">Liên hệ</a>
                        <ul class="sub-menu">
                            <li id="menu-item-5322"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5322"><a
                                        href="http://gka.vn/lien-he/">Liên hệ</a></li>
                            <li id="menu-item-5323"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5323"><a
                                        href="http://gka.vn/tuyen-dung/">Tuyển Dụng</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-9057"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9057"><a
                                href="http://gka.vn/videos" class=""><i class="fa fa-youtube-play"></i></a></li>
                    <li id="menu-item-9058"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9058"><a
                                href="https://www.facebook.com/GKArchitecture" class=""><i
                                    class="fa fa-facebook"></i></a></li>
                    <li id="menu-item-2135-en"
                        class="lang-item lang-item-14 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-2135-en">
                        <a href="http://gka.vn/en/home/" hreflang="en-GB" lang="en-GB"><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAflJREFUeNpinDRzn5qN3uFDt16+YWBg+Pv339+KGN0rbVP+//2rW5tf0Hfy/2+mr99+yKpyOl3Ydt8njEWIn8f9zj639NC7j78eP//8739GVUUhNUNuhl8//ysKeZrJ/v7z10Zb2PTQTIY1XZO2Xmfad+f7XgkXxuUrVB6cjPVXef78JyMjA8PFuwyX7gAZj97+T2e9o3d4BWNp84K1NzubTjAB3fH0+fv6N3qP/ir9bW6ozNQCijB8/8zw/TuQ7r4/ndvN5mZgkpPXiis3Pv34+ZPh5t23//79Rwehof/9/NDEgMrOXHvJcrllgpoRN8PFOwy/fzP8+gUlgZI/f/5xcPj/69e/37//AUX+/mXRkN555gsOG2xt/5hZQMwF4r9///75++f3nz8nr75gSms82jfvQnT6zqvXPjC8e/srJQHo9P9fvwNtAHmG4f8zZ6dDc3bIyM2LTNlsbtfM9OPHH3FhtqUz3eXX9H+cOy9ZMB2o6t/Pn0DHMPz/b+2wXGTvPlPGFxdcD+mZyjP8+8MUE6sa7a/xo6Pykn1s4zdzIZ6///8zMGpKM2pKAB0jqy4UE7/msKat6Jw5mafrsxNtWZ6/fjvNLW29qv25pQd///n+5+/fxDDVbcc//P/zx/36m5Ub9zL8+7t66yEROcHK7q5bldMBAgwADcRBCuVLfoEAAAAASUVORK5CYII="
                                    title="English" alt="English" width="16" height="11"></a></li>
                </ul>
            </nav>
            <div class="mobile_menu_button"><span><i class="fa fa-lg fa-bars"></i></span></div>

        </div>

        <nav class="mobile_menu" style="height: calc(100vh - 105px); overflow-y: auto;">
            <ul id="menu-main-menu-main-menutieng-viet-1" class="mobile" style="display: block;">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1225">
                    <a href="http://gka.vn/gioi-thieu/" class="">Giới thiệu</a>
                    <ul class="sub-menu" style="display: block;">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3598"><a
                                    href="http://gka.vn/gioi-thieu/ve-chung-toi/">Về chúng tôi</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3583"><a
                                    href="http://gka.vn/gioi-thieu/thong-diep/">Thông điệp từ Chủ tịch</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3581"><a
                                    href="http://gka.vn/gioi-thieu/lanh-dao/">Lãnh đạo chủ chốt</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3582"><a
                                    href="http://gka.vn/gioi-thieu/lich-su/">Lịch sử &amp; Phát triển</a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9056"><a
                                    target="_blank" rel="noopener noreferrer"
                                    href="https://drive.google.com/file/d/0B25CcExdVLL9OUpSU0RNT0JGakRHcGRyaTJpOERUMzcyWEpN/view"
                                    class="">XEM PORFOLIO&nbsp;<i class="fa fa-download"></i></a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1223">
                    <a href="http://gka.vn/du-an/" class="">Dự án</a>
                    <ul class="sub-menu" style="display: block;">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1368"><a
                                    href="http://gka.vn/projects-cat/nha-hang-khach-san/">Nhà hàng – Khách sạn</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1366"><a
                                    href="http://gka.vn/projects-cat/van-phong-thuong-mai/">Văn phòng -Thương mại</a>
                        </li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1372"><a
                                    href="http://gka.vn/projects-cat/nha-o/">Chung cư cao tầng</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1367"><a
                                    href="http://gka.vn/projects-cat/trung-tam-van-hoa/" class="">Công trình công
                                cộng</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1369"><a
                                    href="http://gka.vn/projects-cat/trang-tri-noi-that/">Trang trí nội thất</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1370"><a
                                    href="http://gka.vn/projects-cat/khu-dan-cu-a/">Khu dân cư</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1371"><a
                                    href="http://gka.vn/projects-cat/quy-hoach-tong-the/">Quy hoạch đô thị</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1373"><a
                                    href="http://gka.vn/projects-cat/nha-da-nang/">Khu phức hợp</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-4798">
                    <a href="http://gka.vn/category/tong-hop/">Tin Tức</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4729"><a
                                    href="http://gka.vn/category/tong-hop/">Tổng Hợp</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3677"><a
                                    href="http://gka.vn/category/bao-chi/">Tin Báo Chí</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3678"><a
                                    href="http://gka.vn/category/du-an/">Tin tức Dự Án</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3680"><a
                                    href="http://gka.vn/category/su-kien/">Tin Sự Kiện</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3679"><a
                                    href="http://gka.vn/category/khac/">Tin tức khác</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2272">
                    <a href="http://gka.vn/giai-thuong/">Giải thưởng</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-awards_cat menu-item-3682"><a
                                    href="http://gka.vn/awards-cat/giai-thuong/">Giải Thưởng</a></li>
                        <li class="menu-item menu-item-type-taxonomy menu-item-object-awards_cat menu-item-3681"><a
                                    href="http://gka.vn/awards-cat/chung-nhan/">Chứng Nhận</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1226">
                    <a href="http://gka.vn/lien-he/">Liên hệ</a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5322"><a
                                    href="http://gka.vn/lien-he/">Liên hệ</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5323"><a
                                    href="http://gka.vn/tuyen-dung/">Tuyển Dụng</a></li>
                    </ul>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9057"><a
                            href="http://gka.vn/videos"><i class="fa fa-youtube-play"></i></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9058"><a
                            href="https://www.facebook.com/GKArchitecture"><i class="fa fa-facebook"></i></a></li>
                <li class="lang-item lang-item-14 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-2135-en">
                    <a href="http://gka.vn/en/home/" hreflang="en-GB" lang="en-GB"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAflJREFUeNpinDRzn5qN3uFDt16+YWBg+Pv339+KGN0rbVP+//2rW5tf0Hfy/2+mr99+yKpyOl3Ydt8njEWIn8f9zj639NC7j78eP//8739GVUUhNUNuhl8//ysKeZrJ/v7z10Zb2PTQTIY1XZO2Xmfad+f7XgkXxuUrVB6cjPVXef78JyMjA8PFuwyX7gAZj97+T2e9o3d4BWNp84K1NzubTjAB3fH0+fv6N3qP/ir9bW6ozNQCijB8/8zw/TuQ7r4/ndvN5mZgkpPXiis3Pv34+ZPh5t23//79Rwehof/9/NDEgMrOXHvJcrllgpoRN8PFOwy/fzP8+gUlgZI/f/5xcPj/69e/37//AUX+/mXRkN555gsOG2xt/5hZQMwF4r9///75++f3nz8nr75gSms82jfvQnT6zqvXPjC8e/srJQHo9P9fvwNtAHmG4f8zZ6dDc3bIyM2LTNlsbtfM9OPHH3FhtqUz3eXX9H+cOy9ZMB2o6t/Pn0DHMPz/b+2wXGTvPlPGFxdcD+mZyjP8+8MUE6sa7a/xo6Pykn1s4zdzIZ6///8zMGpKM2pKAB0jqy4UE7/msKat6Jw5mafrsxNtWZ6/fjvNLW29qv25pQd///n+5+/fxDDVbcc//P/zx/36m5Ub9zL8+7t66yEROcHK7q5bldMBAgwADcRBCuVLfoEAAAAASUVORK5CYII="
                                title="English" alt="English" width="16" height="11"></a></li>
            </ul>
        </nav>

    </div>

</header>

<div id="container" class="container">
    <section id="main" class="cf" role="main">
        <div class="m-all t-all d-all">


            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(&quot;http://gka.vn/wp-content/uploads/2017/02/nha-pho-can-goc-P38_P41_1.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                        class="">
                        <div class="flex-caption ">
                            <div class="flex-content container_16">
                                <div class="grid_16">
                                    <h1 class="huge-title" style="color: #dd9933;">RESIDENTIAL AREA IN PHU GIA
                                        ISLAND</h1>

                                    <p class="lead" style="color: #dd9933;">CHUNG CƯ THILAWA
                                        <br> MYANMAR</p>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(&quot;http://gka.vn/wp-content/uploads/2017/02/GoldenBAY_KHANHHOA.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                        class="">
                        <div class="flex-caption ">
                            <div class="flex-content container_16">
                                <div class="grid_16">
                                    <h1 class="huge-title" style="color: #dd9933;">GOLDEN BAY KHANH HOA</h1>

                                    <p class="lead" style="color: #dd9933;">VIET NAM</p>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(&quot;http://gka.vn/wp-content/uploads/2017/06/GK-Archi-The-Western-Gate-1.jpg&quot;); width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"
                        class="">
                        <div class="flex-caption ">
                            <div class="flex-content container_16">
                                <div class="grid_16">
                                    <h1 class="huge-title" style="color: #dd9933;">THE WESTERN GATE</h1>

                                    <p class="lead" style="color: #dd9933;">VIET NAM</p>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="flex-direction-nav">
                    <li class="flex-nav-prev"><a class="flex-prev" href="http://gka.vn/#">Previous</a></li>
                    <li class="flex-nav-next"><a class="flex-next" href="http://gka.vn/#">Next</a></li>
                </ul>
            </div>


            <article id="post-1204" class="post-1204 page type-page status-publish has-post-thumbnail hentry"
                     role="article" itemscope="" itemtype="http://schema.org/BlogPosting">

                <div class="entry-content cf" itemprop="articleBody">

                    <div class="module-title wrap cf module-project-title" style="padding:0 0 20px 0;">
                        <div class="two_third"><h2 style="height:18px;"><a href="http://gka.vn/">Dự án tiêu biểu</a>
                            </h2>
                            <p>Thực hiện nhiều dự án ở các lĩnh vực khác nhau như: Nhà ở cao tầng, thấp tầng, Công trình
                                văn hóa, Cảnh quan, Thương mại, Khách sạn, Nội thất, Khu Phức hợp và Quy hoạch đô thị...
                                tại nhiều thị trường khác nhau trên thế giới đem lại cho GK Archi những kinh nghiệm
                                phong phú trong công việc tư vấn, thiết kế và triển khai dự án. Các dự án tiêu biểu của
                                GK Archi luôn đem đến những giải pháp thẩm mỹ, sáng tạo cho từng không gian, công năng
                                sử dụng cũng như tính kinh tế của từng dự án.</p></div>
                    </div>
                    <div class="block-grid projects-listing columns-3 cf">
                        @foreach($projects as $project)
                            <article class="block-item third-width third-height cf cat_58 cat_1062" style="height: 270px;">
                                <a href="javascript:void(0)" rel="bookmark" title="{{ $project->name }}">
                                    <div class="image" style="background-image: url({{asset($project->avatar)}})"></div>
                                    <div class="text white">
                                        <h1>{{ $project->name }}</h1>
                                        <span class="line medium white"></span>
                                        <p style="color:#f6921e !important">{{ $project->country }}</p>
                                    </div>
                                </a></article>
                        @endforeach

                    </div>
                    <div class="row cf" style="">
                        <div class="wrap" style=""><p></p>
                            <div class="more_projects"><a href="javascript:void(0)">Xem thêm…</a></div>
                            <p></p></div>
                    </div>
                    <!-- print_responsive_video_grid_func -->
                    <style type="text/css">
                        #divSliderMain6117c14203cde {
                            background: none repeat scroll 0 0 #ffffff ! important;
                            border: 0px none !important;
                            box-shadow: 0 0 0 0 !important;

                        }
                    </style>
                    <div style="clear: both;"></div>


                    <div style="width: auto; postion: relative" id="divSliderMain6117c14203cde">

                        <div id="thumnail_slider6117c14203c98" class="wrap_grid" style="margin-top: 2px !important;">
                            <div class="box_parent" style="width: 100%;">


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=TPVAgwjaCbs&amp;amp;index=10&amp;amp;list=PLysTH8RXvTPT_Nn8M8amGmF8F1I0zYkuF&#39;&gt;GK Archi - Dự &amp;aacute;n Calla Garden&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/TPVAgwjaCbs">
                                            <img class="thumb_img__" src="frontend/theme/TPVAgwjaCbs_big_270_360.jpg"
                                                 alt="GK Archi - Dự án Calla Garden">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Dự án Calla Garden</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=2s6f8INY_mY&amp;amp;list=PLysTH8RXvTPT_Nn8M8amGmF8F1I0zYkuF&amp;amp;index=3&#39;&gt;GK Archi - Dự &amp;aacute;n Cung Văn H&amp;oacute;a Lao Động&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/2s6f8INY_mY">
                                            <img class="thumb_img__" src="frontend/theme/2s6f8INY_mY_big_270_360.jpg"
                                                 alt="GK Archi - Dự án Cung Văn Hóa Lao Động">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Dự án Cung Văn Hóa Lao Động</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=uj-aEBkJUPs&amp;amp;list=PLysTH8RXvTPT_Nn8M8amGmF8F1I0zYkuF&amp;amp;index=2&#39;&gt;GK Archi - Dự &amp;Aacute;n The Ahlone Condominium Yangon, Myanmar&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/uj-aEBkJUPs">
                                            <img class="thumb_img__" src="frontend/theme/uj-aEBkJUPs_big_270_360.jpg"
                                                 alt="GK Archi - Dự Án The Ahlone Condominium Yangon, Myanmar">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Dự Án The Ahlone Condominium Yangon,
                                                Myanmar
                                            </div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=M26MErl9zks&amp;amp;list=PLysTH8RXvTPT_Nn8M8amGmF8F1I0zYkuF&amp;amp;index=1&#39;&gt;GK Archi - Nhận giải top 10 c&amp;ocirc;ng ty kiến tr&amp;uacute;c h&amp;agrave;ng đầu Việt Nam 2017&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/M26MErl9zks">
                                            <img class="thumb_img__" src="frontend/theme/M26MErl9zks_big_270_360.jpg"
                                                 alt="GK Archi - Nhận giải top 10 công ty kiến trúc hàng đầu Việt Nam 2017">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Nhận giải top 10 công ty kiến trúc hàng đầu
                                                Việt Nam 2017
                                            </div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=rWyKSLf6pxY&#39;&gt;GK Archi - Dự &amp;aacute;n Ocean Bank&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/rWyKSLf6pxY">
                                            <img class="thumb_img__" src="frontend/theme/rWyKSLf6pxY_big_270_360.jpg"
                                                 alt="GK Archi - Dự án Ocean Bank">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Dự án Ocean Bank</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=nC6Ro5XVffs&#39;&gt;GK Archi - Dự &amp;aacute;n Chung cư Damasati&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/nC6Ro5XVffs">
                                            <img class="thumb_img__" src="frontend/theme/nC6Ro5XVffs_big_270_360.jpg"
                                                 alt="GK Archi - Dự án Chung cư Damasati">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Dự án Chung cư Damasati</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=VBLRJrKFEJg&#39;&gt;GK Archi - Kỷ niệm 5 năm th&amp;agrave;nh lập c&amp;ocirc;ng ty&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/VBLRJrKFEJg">
                                            <img class="thumb_img__" src="frontend/theme/VBLRJrKFEJg_big_270_360.jpg"
                                                 alt="GK Archi - Kỷ niệm 5 năm thành lập công ty">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Kỷ niệm 5 năm thành lập công ty</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=bn5Icziw5bc&#39;&gt;GK Archi - Ủy Ban Nh&amp;acirc;n D&amp;acirc;n Quận 5&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/bn5Icziw5bc">
                                            <img class="thumb_img__" src="frontend/theme/bn5Icziw5bc_big_270_360.jpg"
                                                 alt="GK Archi - Ủy Ban Nhân Dân Quận 5">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Ủy Ban Nhân Dân Quận 5</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=dk2ZQcK0kI4&#39;&gt;GK Archi - Ủy Ban Nh&amp;acirc;n D&amp;acirc;n&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/dk2ZQcK0kI4">
                                            <img class="thumb_img__" src="frontend/theme/dk2ZQcK0kI4_big_270_360.jpg"
                                                 alt="GK Archi - Ủy Ban Nhân Dân">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Ủy Ban Nhân Dân</div>
                                        </a>

                                    </div>
                                </div>


                                <div class="box_grid" style="width: 33.3%; padding-bottom: 25.3%;">
                                    <div class="boxInner_grid">

                                        <a rel="rel_6117c14203da0" data-overlay="1"
                                           data-title="&lt;a class=&#39;Imglink&#39; target=&#39;_self&#39; href=&#39;https://www.youtube.com/watch?v=9ggOf6OYYFM&#39;&gt;GK Archi - Trung T&amp;acirc;m Văn H&amp;oacute;a Quận 5&lt;/a&gt;"
                                           class="video_lbox" href="http://www.youtube.com/embed/9ggOf6OYYFM">
                                            <img class="thumb_img__" src="frontend/theme/9ggOf6OYYFM_big_270_360.jpg"
                                                 alt="GK Archi - Trung Tâm Văn Hóa Quận 5">
                                            <span class="playbtnCss"></span>
                                            <div class="titleBox">GK Archi - Trung Tâm Văn Hóa Quận 5</div>
                                        </a>

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <script>

                        function r2(f2) {
                            /in/.test(document.readyState) ? setTimeout(r2, 9, f2) : f2()
                        }

                        r2(function () {

                            var $n = jQuery.noConflict();
                            var uniqObj = $n("a[rel='rel_6117c14203da0']");


                            videoPlacements('thumnail_slider6117c14203c98', $n);
                            $n(".video_lbox").fancybox_vg({
                                'type': "iframe",
                                'overlayColor': '#000000',
                                'padding': 10,
                                'autoScale': true,
                                'autoDimensions': true,
                                'transitionIn': 'none',
                                'uniqObj': uniqObj,
                                'transitionOut': 'none',
                                'titlePosition': 'outside',
                                'hideOnContentClick': false,
                                'width': 650,
                                'height': 400,
                                'titleFormat': function (title, currentArray, currentIndex, currentOpts) {

                                    var currtElem = $n('#thumnail_slider6117c14203c98 a[href="' + currentOpts.href + '"]');

                                    var isoverlay = $n(currtElem).attr('data-overlay')

                                    if (isoverlay == "1" && $n.trim(title) != "") {
                                        return '<span id="fancybox_vg-title-over">' + title + '</span>';
                                    } else {
                                        return '';
                                    }

                                }

                            });


                            var width__ = $n(window).width();
                            var timer__;
                            $n(window).bind('resize', function () {
                                if ($n(window).width() != width__) {

                                    width__ = $n(window).width();
                                    timer__ && clearTimeout(timer__);
                                    timer__ = setTimeout(function () {

                                        videoPlacements('thumnail_slider6117c14203c98', $n);

                                    }, 200);

                                }
                            });
                        });

                    </script>
                    <div class="clear_div"></div><!-- end print_responsive_video_grid_func -->


                    <div class="row cf" style="background-color: #384848;padding: 0 0 0 0;margin: 18px 0 0 0;">
                        <div class="wrap" style="background-color: #384848;padding: 0 0 0 0;margin: 18px 0 0 0;"><p></p>
                            <h2 class="center">Tại sao bạn chọn chúng tôi</h2>
                            <div class="your_choise_list">
                                <div class="one_fourth" style=""><p></p>
                                    <div class="dotted_circle">Chúng tôi Top 1 tại Myanmar và Top 10 BCI tại Việt Nam
                                    </div>
                                    <p></p></div>
                                <p></p>
                                <p></p>
                                <div class="one_fourth" style=""><p></p>
                                    <div class="dotted_circle">Chúng tôi có 3 văn phòng và 7 thị trường&nbsp;quốc tế
                                    </div>
                                    <p></p></div>
                                <p></p>
                                <p></p>
                                <div class="one_fourth" style=""><p></p>
                                    <div class="dotted_circle">Đội ngũ đa quốc gia đông đảo và kinh nghiệm</div>
                                    <p></p></div>
                                <p></p>
                                <p></p>
                                <div class="one_fourth last" style=""><p></p>
                                    <div class="dotted_circle">Hệ thống, quy trình quản lý chuyên nghiệp, khoa học</div>
                                    <p></p></div>
                                <div class="cf"></div>
                                <p></p>
                            </div>
                            <div class="your_choise_list">
                                <div class="one_fourth" style=""><p></p>
                                    <div class="choise_list">
                                        <h5>Tư Vấn</h5>
                                        <div>Nhiệm vụ thiết kế</div>
                                        <div>Nghiên cứu Khả thi</div>
                                        <div>Lập dự án đầu tư</div>
                                        <div>Tư vấn &nbsp;pháp lý</div>
                                        <div>Tư vấn đầu tư</div>
                                    </div>
                                    <p></p></div>
                                <p></p>
                                <p></p>
                                <div class="one_fourth" style=""><p></p>
                                    <div class="choise_list">
                                        <h5>Thiết Kế</h5>
                                        <div>Kiến trúc công trình</div>
                                        <div>Kết cấu , M&amp;E, PCCC</div>
                                        <div>Quy hoạch đô thị</div>
                                        <div>Nội thất công trình</div>
                                        <div>Cảnh quan dự án</div>
                                    </div>
                                    <p></p></div>
                                <p></p>
                                <p></p>
                                <div class="one_fourth" style=""><p></p>
                                    <div class="choise_list">
                                        <h5>Quản lý</h5>
                                        <div>Quản lý dự án</div>
                                        <div>Tư vấn giám sát</div>
                                        <div>Quản lý thi công</div>
                                        <div>Thẩm tra dự án</div>
                                        <div>Thẩm định chất lượng</div>
                                    </div>
                                    <p></p></div>
                                <p></p>
                                <p></p>
                                <div class="one_fourth last" style=""><p></p>
                                    <div class="choise_list">
                                        <h5>Khác</h5>
                                        <div>Thầu phụ địa phương</div>
                                        <div>Thiết kế bền vững</div>
                                        <div>Đầu tư xây dựng</div>
                                        <div>Thi công dự án</div>
                                        <div>Thi công nội thất</div>
                                    </div>
                                    <p></p></div>
                                <div class="cf"></div>
                                <p></p>
                            </div>
                            <p></p></div>
                    </div>
                    <div class="row cf" style="background-color: #fff;padding: 0 0;">
                        <div class="wrap" style="background-color: #fff;padding: 0 0;"><p></p>
                            <h2 class="center"><a class="underline_text" href="">Tin tức</a></h2>
                            <p></p>
                            <div class="blog_list blog_content shortcode col-4 cf">
                                @foreach($news as $new)
                                    <article class="post hentry cf">
                                        <div class="post_image">
                                            <a href="javascript:void(0)">
                                                <img width="750" height="515" src="{{ asset($new->new_featured_image) }}"
                                                     class="attachment-blog size-blog wp-post-image" alt="">
                                            </a>
                                        </div>
                                        <div class="entry-header">
                                            <h3 class="entry-title">
                                                <a href="javascript:void(0)">{{ $new->new_title }}</a>
                                            </h3>
                                            <time>{{ date('d/m/Y', strtotime($new->created_at)) }}</time>
                                        </div>
                                        <div class="post_text">{{ $new->new_short_description }}</div>
                                    </article>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="row cf" style="">
                        <div class="wrap" style=""><p></p>
                            <div class="more_projects"><a href="javascript:void(0)">Xem thêm…</a></div>
                            <p></p></div>
                    </div>
                    <div class="row cf" style="background-color: #fff;margin: 0 0 0 0;"><p></p>
                        <h2 class="center"><a class="underline_text" href="http://gka.vn/vi/giai-thuong">Giải thưởng</a>
                        </h2>
                        <p></p>
                        <div class="shortcode_list_images">
                            <ul class="four_col">
                                <div class="bx-wrapper" style="max-width: 1276px;">
                                    <div class="bx-viewport" aria-live="polite"
                                         style="width: 100%; overflow: hidden; position: relative; height: 277px;">
                                        <div id="awards_slider" class="bxslider"
                                             style="width: 11215%; position: relative; transition-duration: 0s; transform: translate3d(-1296px, 0px, 0px);">
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-thiet-ke-du-an-sabinco-saudi-tower-dhaka-bangladesh/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-GKARCHI-GIAI-NHAT-VAN-PHONG-DHAKA-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-cuoc-thi-thiet-ke-kien-truc-cung-van-hoa-lao-dong-hcm/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARRCHI-GK-GIAI-NHAT-CUNG-VAN-HOA-LAO-DONG-4-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-3-tai-cuoc-thi-trung-tam-van-hoa-quan-5-hcm-viet-nam/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-VAN-HOA-GIAI-3-QUAN-5-TTVH-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/thu-cam-on-cua-btc-dai-hoi-sinh-vien-tp-hcm/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/gk-archi-letter-of-thanks-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-du-an-ahlone-condominium-myanmar-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-YANGON-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-du-an-kyaik-ka-san/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-YANGON-kyaik-ka-san-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/bang-khen-tu-so-quy-hoach-kien-truc-tp-ho-chi-minh-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/gk-archi-khen-tang-kien-truc-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-3-du-an-chung-cu-ocean-licogi-19/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GKA-GK-KIEN-TRUC-CHUNG-CU-GIAI-2-4-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-thiet-ke-du-an-damasati-yangon-myanmar/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-2-YANGON-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhi-thiet-ke-khu-phuc-hop-shwe-mandalay-mandalay-myanmar/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-2-MANDALAY-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-cuoc-thi-thiet-ke-nha-van-hoa-thanh-nien/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-GK-ARCHI-KIEN-TRUC-GIA-NHAT-VAN-HOA-2-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-tavescon-tower-thanh-uy-tp-hcm-viet-nam/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARRCHI-GK-GIAI-NHAT-VAN-PHONG-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="false"><a
                                                        href="http://gka.vn/awards/wa-awards-2020-nha-van-hoa-sinh-vien-tp-hcm-dat-giai-o-hang-muc-cong-trinh-da-thuc-hien/"><img
                                                            width="750" height="515" src="frontend/theme/WA-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/gk-archi-dat-giai-3-phuong-an-kien-truc-cho-con/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/Untitled-1-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="false"><a
                                                        href="http://gka.vn/awards/gk-archi-vao-top-10-cong-ty-kien-truc-hang-dau-chau-a-bci-asia-awards-2019/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/12345-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/top-10-cty-kien-truc-hang-dau-viet-nam-2018-_-bci-asia/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-TOP-TEN-BCI-2017-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="false"><a
                                                        href="http://gka.vn/awards/gk-archi-nhan-giai-thuong-international-property-awards-ve-kien-truc-nha-o-cao-tang-tot-nhat-tai-myanmar/"><img
                                                            width="750" height="515" src="frontend/theme/5-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt="gk-archi-nhan-giai-thuong-international-property-awards-ve-kien-truc-nha-o-cao-tang-tot-nhat-tai-myanmar"></a><a
                                                        href="http://gka.vn/awards/giai-nhi-cuoc-thi-thiet-ke-cong-chao-khu-cong-nghiep-binh-phuoc/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/IMG-0447-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="false"><a
                                                        href="http://gka.vn/awards/doi-tac-chien-luoc-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-doi-tac-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/top-10-cty-kien-truc-hang-dau-viet-nam/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-TOP-TEN-BCI-2017-750x515(1).jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/top-5-cong-trinh-hang-sang-chau-a-property-report/"><img
                                                            width="709" height="515"
                                                            src="frontend/theme/GK-ARCHI-PROPERTY-AWARDS-KIEN-TRUC-1-709x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-4-thiet-ke-du-an-khu-phuc-hop-trung-tam-van-hoa-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-VAN-HOA-GIAI-3-QUAN-5-TTVH-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-thiet-ke-du-an-sabinco-saudi-tower-dhaka-bangladesh/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-GKARCHI-GIAI-NHAT-VAN-PHONG-DHAKA-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-cuoc-thi-thiet-ke-kien-truc-cung-van-hoa-lao-dong-hcm/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARRCHI-GK-GIAI-NHAT-CUNG-VAN-HOA-LAO-DONG-4-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-3-tai-cuoc-thi-trung-tam-van-hoa-quan-5-hcm-viet-nam/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-VAN-HOA-GIAI-3-QUAN-5-TTVH-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/thu-cam-on-cua-btc-dai-hoi-sinh-vien-tp-hcm/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/gk-archi-letter-of-thanks-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-du-an-ahlone-condominium-myanmar-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-YANGON-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-du-an-kyaik-ka-san/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-YANGON-kyaik-ka-san-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/bang-khen-tu-so-quy-hoach-kien-truc-tp-ho-chi-minh-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/gk-archi-khen-tang-kien-truc-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-3-du-an-chung-cu-ocean-licogi-19/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GKA-GK-KIEN-TRUC-CHUNG-CU-GIAI-2-4-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-thiet-ke-du-an-damasati-yangon-myanmar/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-2-YANGON-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhi-thiet-ke-khu-phuc-hop-shwe-mandalay-mandalay-myanmar/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-GIAI-NHAT-2-MANDALAY-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-cuoc-thi-thiet-ke-nha-van-hoa-thanh-nien/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-GK-ARCHI-KIEN-TRUC-GIA-NHAT-VAN-HOA-2-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-tavescon-tower-thanh-uy-tp-hcm-viet-nam/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARRCHI-GK-GIAI-NHAT-VAN-PHONG-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/wa-awards-2020-nha-van-hoa-sinh-vien-tp-hcm-dat-giai-o-hang-muc-cong-trinh-da-thuc-hien/"><img
                                                            width="750" height="515" src="frontend/theme/WA-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/gk-archi-dat-giai-3-phuong-an-kien-truc-cho-con/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/Untitled-1-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/gk-archi-vao-top-10-cong-ty-kien-truc-hang-dau-chau-a-bci-asia-awards-2019/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/12345-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/top-10-cty-kien-truc-hang-dau-viet-nam-2018-_-bci-asia/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-TOP-TEN-BCI-2017-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/gk-archi-nhan-giai-thuong-international-property-awards-ve-kien-truc-nha-o-cao-tang-tot-nhat-tai-myanmar/"><img
                                                            width="750" height="515" src="frontend/theme/5-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt="gk-archi-nhan-giai-thuong-international-property-awards-ve-kien-truc-nha-o-cao-tang-tot-nhat-tai-myanmar"></a><a
                                                        href="http://gka.vn/awards/giai-nhi-cuoc-thi-thiet-ke-cong-chao-khu-cong-nghiep-binh-phuoc/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/IMG-0447-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/doi-tac-chien-luoc-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-CHUNG-CU-doi-tac-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/top-10-cty-kien-truc-hang-dau-viet-nam/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-TOP-TEN-BCI-2017-750x515(1).jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/top-5-cong-trinh-hang-sang-chau-a-property-report/"><img
                                                            width="709" height="515"
                                                            src="frontend/theme/GK-ARCHI-PROPERTY-AWARDS-KIEN-TRUC-1-709x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-4-thiet-ke-du-an-khu-phuc-hop-trung-tam-van-hoa-2/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARCHI-VAN-HOA-GIAI-3-QUAN-5-TTVH-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 196px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true"><a
                                                        href="http://gka.vn/awards/giai-nhat-thiet-ke-du-an-sabinco-saudi-tower-dhaka-bangladesh/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-GKARCHI-GIAI-NHAT-VAN-PHONG-DHAKA-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image"
                                                            alt=""></a><a
                                                        href="http://gka.vn/awards/giai-nhat-cuoc-thi-thiet-ke-kien-truc-cung-van-hoa-lao-dong-hcm/"><img
                                                            width="750" height="515"
                                                            src="frontend/theme/GK-ARRCHI-GK-GIAI-NHAT-CUNG-VAN-HOA-LAO-DONG-4-750x515.jpg"
                                                            class="attachment-blog size-blog wp-post-image" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bx-controls bx-has-controls-direction bx-has-pager">
                                        <div class="bx-controls-direction"><a class="bx-prev" href="javascript:void(0)"><i
                                                        class="fa fa-angle-left fa-2x"></i></a><a class="bx-next"
                                                                                                  href="javascript:void(0)"><i
                                                        class="fa fa-angle-right fa-2x"></i></a></div>
                                        <div class="bx-pager bx-default-pager">
                                            <div class="bx-pager-item"><a href="javascript:void(0)" data-slide-index="0"
                                                                          class="bx-pager-link active">1</a></div>
                                            <div class="bx-pager-item"><a href="javascript:void(0)" data-slide-index="1"
                                                                          class="bx-pager-link">2</a></div>
                                            <div class="bx-pager-item"><a href="javascript:void(0)" data-slide-index="2"
                                                                          class="bx-pager-link">3</a></div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <br>
                    </div>
                    <div class="row cf" style="background-color: #fff;margin: 0 0 0 0;"><p></p>
                        <h2 class="center"><span class="underline_text">Đối tác</span></h2>
                        <p></p>
                        <div class="shortcode_list_images">
                            <ul class="four_col"><p></p>
                                <div class="bx-wrapper" style="max-width: 1282px;">
                                    <div class="bx-viewport" aria-live="polite"
                                         style="width: 100%; overflow: hidden; position: relative; height: 312px;">
                                        <div id="partner_slider" class="bxslider partner_slider alignnone"
                                             style="width: 17215%; position: relative; transition-duration: 0s; transform: translate3d(-1085px, 0px, 0px);">
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-MAX-MYNAMR.jpg"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-BAGAN.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-YADANAR-MYAING.jpg"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-SPA.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/download-4-1.png" alt="">
                                                </div>
                                                <div class="img"><img src="frontend/theme/logo-1.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/download-2.png" alt=""></div>
                                                <div class="img"><img
                                                            src="frontend/theme/gk-archi-phu-cuong-kien-giang.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/logo-1-e1487780512938.png"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/MTCC-GK-Archi.jpg"></div>
                                            </div>
                                            <p style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                               class="bx-clone" aria-hidden="true"></p>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="false">
                                                <div class="img"><img
                                                            src="frontend/theme/Logo-dat-xanh-e1487780456647.png"></div>
                                                <div class="img"><img
                                                            src="frontend/theme/Nihon_Sekkei-e1493090415394.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="false">
                                                <div class="img"><img
                                                            src="frontend/theme/1446527827_logo-tanbinh-mau.png"></div>
                                                <div class="img"><img src="frontend/theme/PCG-.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="false">
                                                <div class="img"><img src="frontend/theme/logo.jpg"></div>
                                                <div class="img"><img src="frontend/theme/download-3.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="false">
                                                <div class="img"><img src="frontend/theme/1435982920-1.jpg" alt="">
                                                </div>
                                                <div class="img"><img src="frontend/theme/download.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/download-2(1).png"></div>
                                                <div class="img"><img class="" src="frontend/theme/download-1.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/logo-1-e1487780512938.png"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/download-4.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-Archi-LDG-group.png"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/download-5.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-Archi-SKy-net.png" alt="">
                                                </div>
                                                <div class="img"><img src="frontend/theme/GK-Archi-JJPUN-logo.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-Archi-PHE-Logo.jpg" alt="">
                                                </div>
                                                <div class="img"><img src="frontend/theme/GK-Archi-Vietcomreal.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img
                                                            src="frontend/theme/gk-archi-cung-van-hoa-lao-dong.jpg"
                                                            alt=""></div>
                                                <div class="img"><img src="frontend/theme/GK-Archi-Nguyen-Kim.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/gk-archi-ocean-bank.jpg"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/td-tphcm-gk-archi.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-MAX-MYNAMR.jpg"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-BAGAN.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-YADANAR-MYAING.jpg"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/GK-ARCHI-SPA.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/download-4-1.png" alt="">
                                                </div>
                                                <div class="img"><img src="frontend/theme/logo-1.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/download-2.png" alt=""></div>
                                                <div class="img"><img
                                                            src="frontend/theme/gk-archi-phu-cuong-kien-giang.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/logo-1-e1487780512938.png"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/MTCC-GK-Archi.jpg"></div>
                                            </div>
                                            <p style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                               aria-hidden="true"></p>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img
                                                            src="frontend/theme/Logo-dat-xanh-e1487780456647.png"></div>
                                                <div class="img"><img
                                                            src="frontend/theme/Nihon_Sekkei-e1493090415394.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img
                                                            src="frontend/theme/1446527827_logo-tanbinh-mau.png"></div>
                                                <div class="img"><img src="frontend/theme/PCG-.jpg"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/logo.jpg"></div>
                                                <div class="img"><img src="frontend/theme/download-3.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/1435982920-1.jpg" alt="">
                                                </div>
                                                <div class="img"><img src="frontend/theme/download.png"></div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/download-2(1).png"></div>
                                                <div class="img"><img class="" src="frontend/theme/download-1.jpg">
                                                </div>
                                            </div>
                                            <div style="float: left; list-style: none; position: relative; width: 197px; margin-right: 20px;"
                                                 class="bx-clone" aria-hidden="true">
                                                <div class="img"><img src="frontend/theme/logo-1-e1487780512938.png"
                                                                      alt=""></div>
                                                <div class="img"><img src="frontend/theme/download-4.png"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bx-controls bx-has-controls-direction bx-has-pager">
                                        <div class="bx-controls-direction"><a class="bx-prev" href="javascript:void(0)"><i
                                                        class="fa fa-angle-left fa-2x"></i></a><a class="bx-next"
                                                                                                  href="javascript:void(0)"><i
                                                        class="fa fa-angle-right fa-2x"></i></a></div>
                                        <div class="bx-pager bx-default-pager">
                                            <div class="bx-pager-item"><a href="http://gka.vn/" data-slide-index="0"
                                                                          class="bx-pager-link active">1</a></div>
                                            <div class="bx-pager-item"><a href="http://gka.vn/" data-slide-index="1"
                                                                          class="bx-pager-link">2</a></div>
                                            <div class="bx-pager-item"><a href="http://gka.vn/" data-slide-index="2"
                                                                          class="bx-pager-link">3</a></div>
                                            <div class="bx-pager-item"><a href="http://gka.vn/" data-slide-index="3"
                                                                          class="bx-pager-link">4</a></div>
                                            <div class="bx-pager-item"><a href="http://gka.vn/" data-slide-index="4"
                                                                          class="bx-pager-link">5</a></div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <br>
                    </div>
                </div>
            </article>
        </div>


    </section>
</div>

<footer class="footer" role="contentinfo">
    <div id="inner-footer" class="wrap">

        <div id="text-1" class="widget widget_text">
            <div class="textwidget"><h2 class="widgettitle"><span style="color:#9c9c9c">GK</span> <span
                            style="color:#f6921e">ARCHI</span></h2>
                <div>
                    <p class="adr">
                        <label>Vietnam</label><span> : 100-102 Dien Bien Phu, Da Kao Ward, Dist.1, HCMC</span></p>
                    <p><span>Ms. Giang - Phone</span><span> : 0918 632 595 </span>&nbsp;&nbsp; - &nbsp;&nbsp;<span>Ms. Dung : </span><span>0934 076 579</span>
                    </p>
                </div>
                <div>
                    <p class="adr">
                        <label>Singapore</label><span> :  190 Middle Road #19-05Fortune Center,188979 Sng</span></p>
                    <p class="phone"><span>Phone</span><span> : (+65) 6826 33335 &nbsp;&nbsp; , Fax</span><span> :   (+65) 6326 3333<br>
<label>Myanmar</label><span> : A-&nbsp;605A, San Yeik Nyein 6th Street, Kamayut,&nbsp;Yangon</span></span></p>
                    <p class="phone"><span>Phone</span><span> :  (+95) 1 5577 98</span></p>
                </div>
                <div>
                    <p class="adr"><label>Bangladesh</label><span> : 1/B (1st Floor), Road : 35 Gulshan - 2,&nbsp;Dhaka&nbsp;- 1212</span>
                    </p>
                    <p class="phone"><span>Phone</span><span> : (+88) 01745202075 &nbsp;&nbsp; , &nbsp;&nbsp;(+88)01824500225</span>
                    </p>
                </div>
                <div>
                    <p class="adr"><label>Email</label><span> : gk@gka.vn&nbsp;</span>&nbsp;&nbsp; - &nbsp;&nbsp;<label>Website: </label><span>www.gka.vn</span>
                    </p>
                </div>
            </div>
        </div>
        <div id="nav_menu-3" class="widget widget_nav_menu"><h5 class="widgettitle">DANH MỤC</h5>
            <div class="menu-footer-menu-tieng-viet-container">
                <ul id="menu-footer-menu-tieng-viet" class="menu">
                    <li id="menu-item-1353"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1204 current_page_item menu-item-1353">
                        <a href="" aria-current="page">Trang chủ</a></li>
                    <li id="menu-item-1350"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1350"><a
                                href="">Dự án</a></li>
                    <li id="menu-item-1348"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1348"><a
                                href="">Videos</a></li>
                    <li id="menu-item-1351"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1351"><a
                                href="">Giới thiệu</a></li>
                    <li id="menu-item-1349"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1349"><a
                                href="">Tin tức</a></li>
                    <li id="menu-item-1352"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1352"><a
                                href="">Liên hệ</a></li>
                </ul>
            </div>
        </div>
        <div id="nav_menu-4" class="widget widget_nav_menu"><h5 class="widgettitle">DỰ ÁN</h5>
            <div class="menu-projects-by-category-tieng-viet-container">
                <ul id="menu-projects-by-category-tieng-viet" class="menu">
                    <li id="menu-item-1359"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1359"><a
                                href="">Nhà hàng – Khách sạn</a></li>
                    <li id="menu-item-1358"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1358"><a
                                href="">Văn phòng -Thương mại</a></li>
                    <li id="menu-item-1363"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1363"><a
                                href="">Chung cư cao tầng</a></li>
                    <li id="menu-item-1357"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1357"><a
                                href="">Công trình công cộng</a></li>
                    <li id="menu-item-1360"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1360"><a
                                href="">Trang trí nội thất</a></li>
                    <li id="menu-item-1361"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1361"><a
                                href="">Khu dân cư</a></li>
                    <li id="menu-item-1362"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1362"><a
                                href="">Quy hoạch đô thị</a></li>
                    <li id="menu-item-1364"
                        class="menu-item menu-item-type-taxonomy menu-item-object-projects_cat menu-item-1364"><a
                                href="">Khu phức hợp</a></li>
                </ul>
            </div>
        </div>
        <div id="text-3" class="widget widget_text"><h5 class="widgettitle">THƯ THÔNG BÁO</h5>
            <div class="textwidget">
                <form action="" method="post" id="" name="" target="_blank">

                    <div class="subcribe_container">
                        <div class="subcribe_input">
                            <input type="email" value="Email" name="EMAIL" id="mce-EMAIL">
                        </div>
                        <div class="subcribe_button">
                            <input type="button" value="Đăng Ký" name="subscribe" class="btn small white">
                        </div>
                    </div>

                    <div class="copyright_container">
                        <div class="copyright">© 2017 - Bản quyền thuộc GK Archi.</div>

                        <div class="social">
                            <a href="https://www.facebook.com/GKArchitecture" target="_blank" class=""
                               rel="noopener noreferrer"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="https://www.youtube.com/channel/UC_KYuqP-TyRdEsjSxM2bJ7w" target="_blank" class=""
                               rel="noopener noreferrer"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="cf"></div>
    </div>
</footer>

<!-- /#container -->

<!--<div class="copy">
			© 2017 - Bản quyền thuộc GK Archi.		</div>-->

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-101049272-1', 'auto');
    ga('send', 'pageview');

</script>
<link rel="stylesheet" id="wp-video-grid-lighbox-style-css" href="frontend/theme/wp-video-grid-lighbox-style.css"
      type="text/css" media="all">
<link rel="stylesheet" id="vl-box-grid-css-css" href="frontend/theme/vl-box-grid-css.css" type="text/css" media="all">
<script type="text/javascript">
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "http:\/\/gka.vn\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
</script>
<script type="text/javascript" src="frontend/theme/scripts.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/google-maps.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/comment-reply.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/jquery.flexslider.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/hoverIntent.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/jquery.backstretch.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/jquery.easing.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/jquery.scrollTo.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/fresco.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/modernizr.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/jquery.fitvids.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/jquery.bxslider.min.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/app.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/wp-embed.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/vl-grid-js.js.tải xuống"></script>
<script type="text/javascript" src="frontend/theme/v_grid.js.tải xuống"></script>


<div id="fancybox_vg-tmp"></div>
<div id="fancybox_vg-loading_">
    <div></div>
</div>
<div id="fancybox_vg-overlay" style="cursor: auto; height: 6218px; width: 1077px;"></div>
<div id="fancybox_vg-wrap">
    <div id="fancybox_vg-outer">
        <div id="fancybox_vg-content"></div>
        <a id="fancybox_vg-close"></a>
        <div id="fancybox_vg-title"></div>
        <a href="javascript:;" id="fancybox_vg-left_"><span class="fancy-ico" id="fancybox_vg-left-ico_"></span></a><a
                href="javascript:;" id="fancybox_vg-right_"><span class="fancy-ico" id="fancybox_vg-right-ico_"></span></a>
    </div>
</div>
<div id="shadowMeasureIt"></div>
<div id="divCoordMeasureIt"></div>
<div id="divRectangleMeasureIt">
    <div id="divRectangleBGMeasureIt"></div>
</div>
</body>
</html>