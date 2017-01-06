// JavaScript Document


$(document).ready(function(){
     var ind=0;

     $('.scpIcons li').mouseenter(function(){
          ind=$(this).index();
           
          // $('.bigImg').attr('src','images/content1/scp'+(ind+1)+'.jpg');
          //$('.bigImg').hide();
          //$('.bigImg').css('transform','scale(0)');

         // $('.bigImg:eq(' + ind + ')').css('display','block');
          $('.bigImg:eq(' + ind + ')').siblings().css('opacity','0');
          $('.bigImg:eq(' + ind + ')').siblings().css('transform','scale(0)');;
           $('.bigImg:eq(' + ind + ')').css('opacity','1');
          $('.bigImg:eq(' + ind + ')').css('transform','scale(1)');

     });

});
