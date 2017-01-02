// JavaScript Document



$(document).ready(function() {
   var position=0;  //최초위치
   var movesize=296; //이미지 하나의 너비
   
   /* 최초자동슬라이드기능
    var timeonoff;

     timeonoff= setInterval(function () {
            position-=movesize;  // 150씩 감소
    	$('.slide_gallery').stop().animate({left:position}, 'fast',
	         function(){							
		    if(position==-750){
			   $('.slide_gallery').css('left',0);
			   position=0;
		    }
	 });
     }, 2000);
	 */
	 
   
    $('.slide_gallery ul').after($('.slide_gallery ul').clone());
       //슬라이드 겔러리를 한번 복제

     $('.button').click(function(event){
	var $target=$(event.target); //(event.target)은 실제로 클릭된 버튼. (=this)
 	//clearInterval(timeonoff);  최초자동슬라이드 죽이기	
 
	
	if($target.is('.m1')){ //=.hasClass(). 왼쪽버튼이냐.

	     if(position==-1480){
	         $('.slide_gallery').css('left',0);
	          position=0;
	      }
	
	     position-=movesize;  // 150씩 감소          animate(방향,속도,easing)
    	     $('.slide_gallery').stop().animate({left:position}, 'fast',
		  function(){	// callback함수. animate가 계산된후 이게 계산된다. 그래서 이게 animate안에 있는거임.						
		    if(position==-1480){ 
			   $('.slide_gallery').css('left',0);
			   position=0;
		    }
	      });
	}else if($target.is('.m2')){ //오른쪽 버튼이냐.


	      if(position==0){ 
	           $('.slide_gallery').css('left',-1480);
	           position=-1480;
                   }
         
                   position+=movesize; // 150씩 증가
    	      $('.slide_gallery').stop().animate({left:position}, 'fast',
		  function(){							
		    if(position==0){
			   $('.slide_gallery').css('left',-1480);
			   position=-1480;
		    }
	       });
	}
       });
	   
	   
	   
	    $('.articleSlider').hover(
	   function(){
		    $('.sub_menu_box img').stop().fadeIn('slow');
	   },function(){
		   $('.sub_menu_box img').fadeOut('fast');
	 
	   });
	   
	   
    });


