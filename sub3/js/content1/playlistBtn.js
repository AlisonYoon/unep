// JavaScript Document

 $(document).ready(function() {
	 $('.playList').hover(
	   function(){
		    $('.playList .button').stop().fadeIn('slow');
	   },function(){
		   $('.playList .button').fadeOut('fast');
	 
	   });
	 
 });