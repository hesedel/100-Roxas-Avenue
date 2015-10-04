$(function () {
    'use strict';

    $('.js-photos__scrollPane').magnificPopup({
        delegate: '.js-photos__photo',
        gallery: {
            enabled: true
        },
        type: 'image'
    });
});
