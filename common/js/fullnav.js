


 $(document).ready(function() {
           /*
              $('ul.dropdownmenu').hover(
                 function() { 
                    $('ul.dropdownmenu li.menu ul').fadeIn('normal',function(){$(this).stop();});
	          $('#header').animate({height:190},'fast').clearQueue();
                 },
                function() {
	    
	      $('ul.dropdownmenu li.menu ul').fadeOut('fast')
		  $('#header').animate({height:50},'fast').clearQueue();
                  
               });
             */  
			   var fontC=false;
			   var i=0;
               $('#nav li a').click(
                 function() {
					 
					if(fontC==false){ 
					  $('#gnb').fadeIn('slow');
					  
					  fontC=true;
					}
					$('#nav li a').css('color','#333');
					$(this).css('color','#57c0d4');
				});
				
				 $('#gnb .closeBtn').click(
                 function() {
					 $('#gnb').fadeOut('slow');
					 fontC=false;
				});
				
				 $('#gnb ul .depth1').mouseover(
				 function() {
					 i=$(this).index();
					 $('#nav li a').css('color','#333').css('font-weight','500');
					 $('#nav li .nav'+i).css('color','#57c0d4').css('font-weight', 'bold');
					 
				 });
				 

				
			   
			   //tab
			  /* 
			   $('ul.dropdownmenu li.menu .depth1').bind('focus',function() {
			   	$('ul.dropdownmenu li.menu ul').slideDown('normal');
				$('#header').animate({height:190},'fast').clearQueue();
				
			   	});
				$('ul.dropdownmenu li.m6 li:last').find('a').bind('blur',function(){
					$('ul.dropdownmenu li.menu ul').slideUp('fast');
					$('#header').animate({height:50},'fast').clearQueue();
					
				});
				*/
          });