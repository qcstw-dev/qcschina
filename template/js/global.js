function popupError(error) {
    popupMessage('<div class="glyphicon glyphicon-warning-sign font-size-30 color-red"></div><div class="bold">' + error + '</div>');
}
function popupChoice(html, aFunction, aFunctionCancel) {
    html = '<div class="glyphicon glyphicon-warning-sign font-size-30 color-red"></div><div class="bold">' + html + '</div>';
    html += '<div class="col-xs-6 margin-top-10 margin-auto">\n\
                <div class="btn btn-default pull-left cancel">Cancel</div>\n\
                <div class="btn btn-primary pull-right confirm-btn">Confirm</div>\n\
            </div>';
    popupMessage(html);
    $('.cancel').click(function () {
        $.magnificPopup.close();
        if (aFunctionCancel) {
            window[aFunctionCancel['function_name']](aFunctionCancel['arguments']);
        }
    });
    $('.confirm-btn').click(function () {
        $.magnificPopup.close();
        window[aFunction['function_name']](aFunction['arguments']);
    });
}
function popupMessage(html, style) {
    $.magnificPopup.open({
        items: [{
                src: $('<div class="white-popup">' +
                        (style ? '<div class="col-xs-12 margin-bottom-0 alert alert-' + style + '">' : '') +
                        html +
                        (style ? '</div>' : '') +
                        '<div class="clearfix"></div>' +
                        '</div>'),
                type: 'inline'
            }]
    });
}
function popupConfirm(custom_text) {
    popupMessage('<span class="glyphicon glyphicon-ok color-green font-size-20"></span> ' + (custom_text ? custom_text : 'Success'));
    setTimeout(function () {
        $.magnificPopup.close();
    }, 700);
}
function confirm(text) {
    $('.confirm').find('.text').text(text);
    $('.confirm').fadeIn('slow');
    setTimeout(function () {
        $('.confirm').fadeOut('slow');
    }, 1000);
}
function loading(text) {
    $('.loading-ajax').find('.text').text(text);
    $('.loading-ajax').fadeIn('slow');
}
function loading_hide() {
    $('.loading-ajax').fadeOut('slow');
}
function loading_popup_hide() {
    $.magnificPopup.close();
}