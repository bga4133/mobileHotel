
  $(function(){
    $( "#input" ).datepicker();
  });
   $(function(){
     $( "#input2" ).datepicker();
   });

const show = () => {
  let input = document.getElementById("input").style.zIndex = "2";
  document.getElementById("input").style.background = "#f9f9f9";
  document.getElementById("input").style.height = "16vh";
  document.getElementById("input").style.width = "38%";
  document.getElementById("input").style.borderRadius = "10px";
  document.getElementById("input").style.marginTop = "1vh";
}

const showNew = () => {
  let input = document.getElementById("input2").style.zIndex = "2";
  document.getElementById("input2").style.background = "#f9f9f9";
  document.getElementById("input2").style.height = "16vh";
  document.getElementById("input2").style.width = "38%";
  document.getElementById("input2").style.borderRadius = "10px";
  document.getElementById("input2").style.color = "#555";
  document.getElementById("input2").style.marginTop = "1vh";
}



$("#input").datepicker({    
  defaultDate: "+0",              
  dateFormat: "dd/mm/yy",
  minDate: "+0",
  onSelect: function (dateText, inst) {
      var d = $.datepicker.parseDate(inst.settings.dateFormat, dateText);
   d.setDate(d.getDate() + 1);
      $("#input2").val($.datepicker.formatDate(inst.settings.dateFormat, d));
      showNew();
 },

  // onClose: function (selectedDate) {
  //     $("#input2").datepicker("option", "minDate", selectedDate);    
  // }
});

$( document ).ready(function() {
  $(".div-header-target").slick({
    arrows:false
  });
});

$( document ).ready(function() {
  $(".div-carousel").slick({
    arrows:false
  });
});

$("#input2").datepicker({    
  defaultDate: "+0",              
  dateFormat: "dd/mm/yy",
  minDate: "+0",
  onSelect: function (dateText, inst) {
      var d = $.datepicker.parseDate(inst.settings.dateFormat, dateText);
   d.setDate(d.getDate());
      $("#input2").val($.datepicker.formatDate(inst.settings.dateFormat, d));
      showNew();
 },

  // onClose: function (selectedDate) {
  //     $("#input2").datepicker("option", "minDate", selectedDate);    
  // }
});

$( document ).ready(function() {
  $(".div-header-target").slick({
    arrows:false
  });
});

$( document ).ready(function() {
  $(".div-carousel").slick({
    arrows:false
  });
});

// $(window).on('load', function () {
//   setTimeout(function () {
// $(".divLoaderApp").css({visibility:"hidden",opacity:"0"})
// }, 6000);
// });

// $(window).on('load', function() { // makes sure the whole site is loaded 
//   $(".divLoaderApp").fadeOut(); // will first fade out the loading animation 
//   $(".divLoaderApp").delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
//   $('body').delay(350).css({'overflow':'visible'});
// })