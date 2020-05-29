require('bootstrap');

window.$=window.jQuery=require('jquery');

jQuery(document).ready(function ($) {

    var $languageSwitcherForm=$('#language_switcher');
    var $languageSelect=$('#language');

        $languageSelect.on('change', function(){
        $languageSwitcherForm.submit();
    })

});
