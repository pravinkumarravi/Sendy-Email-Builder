/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!**************************!*\
  !*** ./src/js/custom.js ***!
  \**************************/


var emitter = window.top.jsEmailBuilderEmitter;
function dialogExportHTML() {
  swal({
    title: "Export to HTML",
    text: "Export template to single HTML file",
    type: "info",
    showCancelButton: true,
    showLoaderOnConfirm: true
  }, function () {
    setTimeout(function () {
      swal("Template has been exported successfully");
      $('#export-form [name="type"]').val("html");
      $("#export-form").submit();
    }, 1000);
  });
}
function dialogExportZip() {
  swal({
    title: "Export to ZIP",
    text: "Export template to zip-archive",
    type: "info",
    showCancelButton: true,
    showLoaderOnConfirm: true
  }, function () {
    setTimeout(function () {
      swal("Template has been exported successfully");
      $('#export-form [name="type"]').val("zip");
      $("#export-form").submit();
    }, 1000);
  });
}
emitter.on("init", function () {
  $('[data-action="export-html"]').on("click", function (event) {
    dialogExportHTML();
  });
  $('[data-action="export-zip"]').on("click", function (event) {
    dialogExportZip();
  });
});
/******/ })()
;