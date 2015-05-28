// *************************************
//
//   Prepend svg
//   -> Loads the svg icon library
//
// *************************************

$.ajax({
  url: "/wp-content/themes/slate-0.3.1_van6enklaar/ico/sprites.svg",
  method: "GET",
  dataType: "html",
  success: function(data) {
    jQuery("body").prepend(data);
  }
})
