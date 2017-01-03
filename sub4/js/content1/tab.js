// JavaScript Document


$(document).ready(function(){



  var cnt=5; //탭메뉴 개수 ***
  $('.contentBottom .contlist:eq(0)').show();  //eq:필터선택자.0부터 시작. loadChild(1)
  $('.contentBottom .btn1').css('left',0);
   $('.contentBottom .tab').css('opacity',0);
    $('.contentBottom .btn1').css('opacity',1);
  //첫번째 탭메뉴 버튼 활성화


  
  $('.contentBottom .tab').each(function (index) {
    $(this).click(function(){ //각각의 탭메뉴를 클릭하면. (index:0 1)가 자동으로 바뀜  
	  $(".contentBottom .contlist").hide(); //모든 탭 내용을 hide.
	  $(".contentBottom .contlist:eq("+index+")").show(); //클릭한 탭메뉴 내용만 보여라


	  //버튼 바꾸기. 
	  for(var i=1;i<=cnt;i++){ //탭메뉴 개수만큼 loop
           $('.btn'+i).animate({'left':'-81','opacity':0},50)
		   //모든 탭메뉴 버튼을 초기화시켜라
      }
      $(this).animate({'left':'0','opacity':1},300);
   });
  });
});
