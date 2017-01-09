// JavaScript Document


   $(document).ready(function () {
         $('.latest a').mouseenter(function(){
          $( '.readmore img',this).attr('src','images/readmoreHover.png');
         }); 
          $('.latest a').mouseleave(function(){
          $( '.readmore img',this).attr('src','images/readmore.png');
         });

          $('.partners').mouseenter(function(){
          $( '.more img',this).attr('src','images/readmoreHover.png');
         }); 
          $('.partners').mouseleave(function(){
          $( '.more img',this).attr('src','images/readmore.png');
         });
   });