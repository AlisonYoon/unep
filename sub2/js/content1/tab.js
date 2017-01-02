// JavaScript Document

$(document).ready(function(){
  var cnt=2; //탭메뉴 개수 ***

  $('.tabs .contlist:eq(0)').show();  //eq:필터선택자.0부터 시작. loadChild(1)
 // $('.tabs .tab1').css('background','url(images/tab1on.jpg)');
 $('.tabs .tab1').addClass('tabCurrent');
  //첫번째 탭메뉴 버튼 활성화
  
  $('.tabs .tab').each(function (index) {
    $(this).click(function(){ //각각의 탭메뉴를 클릭하면. (index:0 1)가 자동으로 바뀜  
	  $(".tabs .contlist").hide(); //모든 탭 내용을 hide.
	  $(".tabs .contlist:eq("+index+")").show(); //클릭한 탭메뉴 내용만 보여라

	  //버튼 바꾸기. 
	  for(var i=1;i<=cnt;i++){ //탭메뉴 개수만큼 loop
           $('.tab'+i).removeClass('tabCurrent');
		   //모든 탭메뉴 버튼을 초기화시켜라
      }
      $(this).addClass('tabCurrent'); 
   });
  });
});
