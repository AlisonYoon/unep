// JavaScript Document


$(document).ready(function(){

      $(document).ready(function(){
    $('.boxgrid').hover(function(){
      $(".boxcaption", this).animate({top:'0px'},160).clearQueue();
    }, function() {
      $(".boxcaption", this).animate({top:'300px'},160).clearQueue();
    });
  });

});
