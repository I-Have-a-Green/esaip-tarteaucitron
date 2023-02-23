<?php
/*
Plugin Name: 	Tarte Au Citron
Description: 	Mise en place de tarte au citron
Version: 		1.0.0
Author: 		I Have a Green
*/

add_action( 'wp_enqueue_scripts', 'ihag_scripts_tac', 99 );
function ihag_scripts_tac() {
    wp_enqueue_script( 'ihag-script-tac', plugin_dir_url( __FILE__ ) . 'node_modules/tarteaucitronjs/tarteaucitron.js' );
    wp_add_inline_script( 'ihag-script-tac', '
        tarteaucitron.init({
        "privacyUrl": "", /* Privacy policy url */
        "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */
    
        "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
        "cookieName": "tarteaucitron", /* Cookie name */
    
        "orientation": "middle", /* Banner position (top - bottom - middle - popup) */
    
        "groupServices": false, /* Group services by category */
        "serviceDefaultState": "wait", /* Default state (true - wait - false) */
    
        "showAlertSmall": false, /* Show the small banner on bottom right */
        "cookieslist": false, /* Show the cookie list */
        
        "showIcon": true, /* Show cookie icon to manage cookies */
        // "iconSrc": "", /* Optionnal: URL or base64 encoded image */
        "iconPosition": "BottomRight", /* Position of the icon between BottomRight, BottomLeft, TopRight and TopLeft */
    
        "adblocker": false, /* Show a Warning if an adblocker is detected */
    
        "DenyAllCta" : true, /* Show the deny all button */
        "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
        "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
    
        "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */
    
        "removeCredit": false, /* Remove credit link */
        "moreInfoLink": true, /* Show more info link */
        "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
        "useExternalJs": false, /* If false, the tarteaucitron.services.js file will be loaded */
    
        //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for subdomain website */
    
        "readmoreLink": "", /* Change the default readmore link pointing to tarteaucitron.io */
        
        "mandatory": true, /* Show a message about mandatory cookies */
        "mandatoryCta": true /* Show the disabled accept button when mandatory on */
    });
    
    tarteaucitron.user.googleadsId = "UA-98765432-1";
    (tarteaucitron.job = tarteaucitron.job || []).push("googleads");
    
    ' );


    wp_add_inline_script( 'candidature-js', "
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('btnSubmitCandidature').addEventListener('click', function() {
                function gtag_report_conversion(url) {
                    var callback = function () {
                      if (typeof(url) != 'undefined') {
                        window.location = url;
                      }
                    };
                    console.log('btnSubmitCandidature');
                    gtag('event', 'conversion', {
                        'send_to': 'AW-976363674/SnWACNH7xIIYEJrByNED',
                        'event_callback': callback
                    });
                    return false;
                }
                gtag_report_conversion();
            });
        });"
    );

    wp_add_inline_script( 'doc-js', "
        document.addEventListener('DOMContentLoaded', function () {
            if(document.getElementById('oscar_school_form')){
                let form = document.getElementById('oscar_school_form');
                form.addEventListener('submit', function(e) {
                   function gtag_report_conversion(url) {
                        var callback = function () {
                          if (typeof(url) != 'undefined') {
                            window.location = url;
                          }
                        };
                        console.log('oscar_school_form');
                        gtag('event', 'conversion', {
                            'send_to': 'AW-976363674/69uXCKL5xIIYEJrByNED',
                            'event_callback': callback
                        });
                        return false;
                    }
                    gtag_report_conversion();
                });
            }
        });"
    );

    wp_add_inline_script( 'contact-js', "
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('btnSubmitContact').addEventListener('click', function() {
                function gtag_report_conversion(url) {
                    var callback = function () {
                      if (typeof(url) != 'undefined') {
                        window.location = url;
                      }
                    };
                    console.log('btnSubmitContact');
                    gtag('event', 'conversion', {
                        'send_to': 'AW-976363674/SnWACNH7xIIYEJrByNED',
                        'event_callback': callback
                    });
                    return false;
                }
                gtag_report_conversion();
            });
        });"
    );


}
