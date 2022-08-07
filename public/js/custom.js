/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
$(document).ready(function () {
  $('form.delete button').click(function (e) {
    e.preventDefault();
    $.ajax({
      url: '/getTranslations',
      type: 'GET',
      dataType: 'JSON',
      data: {
        translations: ['users.delete.confirm']
      }
    }).done(function (response) {
      if (confirm(response['users.delete.confirm'])) {
        $('form.delete').submit();
      }
    }).fail(function (response) {
      console.error(response);
    });
  });
});
/******/ })()
;