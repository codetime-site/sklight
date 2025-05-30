$('#show_wx').on('click', function () {
    $('#wx_div').popup({
        time: 500,
        classAnimateShow: 'slideInDown',
        classAnimateHide: 'fadeOut',
        onPopupClose: function e() {// console.log()
        },
        onPopupInit: function e() {// console.log()
        }
    });
});