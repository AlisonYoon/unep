// JavaScript Document


  $(document).ready(function () {
      $(window).on("scroll",function(){ 
 
      //변수 ht에 현재 브라우저의 높이값 저장
      //var ht = $(window).height();
      
      //변수 scroll에 현재 문서가 스크롤된 거리 저장
      var scroll = $(window).scrollTop();
    
    
      if(scroll>=160){
        $(".getthefact").css('opacity','1');
      }
      if(scroll>=500){
        $(".contentTop").css('opacity','1');
      }
      if(scroll>=1200){
        $(".latest").css('opacity','1');
        $(".latest p").css('opacity','1');
        $(".latest p").css('margin-top','0');
      }
      if(scroll>=1600){
        $(".info h4").css('opacity','1');
        $(".info p").css('opacity','1');
         $(".info p").css('margin-top','0');
      }
    }); 
     
      
   });