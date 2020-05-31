require('bootstrap');

window.$=window.jQuery=require('jquery');

jQuery(document).ready(function ($) {

    var $gotop=$(('a.gotop'));
    $gotop.on('click', function (e) {
       e.preventDefault();
        $('html, body').animate({
            scrollTop: 0,

        }, 400);
    });

    var $languageSwitcherForm=$('#language_switcher');
    var $languageSelect=$('#language');

        $languageSelect.on('change', function(){
        $languageSwitcherForm.submit();
    })

});
