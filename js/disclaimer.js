(function() {
var saml = document.createElement('script');
saml.type = 'text/javascript';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(saml);
})();

$(document).ready(function(){
        $('#password').parent().removeClass("infield groupbottom");
        $('#password').parent().addClass("infield groupmiddle");
        $('#password').attr( "autocomplete", "on" );
        $('#password').parent().after(
                '<p class="infield disclaimer">'+
                '<input type="checkbox" id="disclaimer" placeholder="Disclaimer" value="" name="disclaimer"'+ 'original-title="" autocomplete="off" required />'+
                '<a href="/apps/disclaimer/pdf/disclaimer.pdf" target="_blank"><img src="/apps/disclaimer/img/application-pdf.png" width="30" height="35"/></a> ' + t('disclaimer','I have read and agree to the Terms & Conditions.') +
                '</p>'
        );

    $("#submit").removeAttr("disabled");
});
