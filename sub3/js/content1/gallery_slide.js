// JavaScript Document


$(document).ready(function() {
   var position=0;  //최초위치
   var movesize=250; //이미지 하나의 너비
   
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
 
	
	if($target.is('.leftBtn')){ //=.hasClass(). 왼쪽버튼이냐.

	     if(position==-1000){
	         $('.slide_gallery').css('left',0);
	          position=0;
	      }
	
	     position-=movesize;  // 150씩 감소          animate(방향,속도,easing)
    	     $('.slide_gallery').stop().animate({left:position}, 'fast',
		  function(){	// callback함수. animate가 계산된후 이게 계산된다. 그래서 이게 animate안에 있는거임.						
		    if(position==-1000){ 
			   $('.slide_gallery').css('left',0);
			   position=0;
		    }
	      });
	}else if($target.is('.rightBtn')){ //오른쪽 버튼이냐.


	      if(position==0){ 
	           $('.slide_gallery').css('left',-1000);
	           position=-1000;
                   }
         
                   position+=movesize; // 150씩 증가
    	      $('.slide_gallery').stop().animate({left:position}, 'fast',
		  function(){							
		    if(position==0){
			   $('.slide_gallery').css('left',-1000);
			   position=-1000;
		    }
	       });
	}
       });
    });
