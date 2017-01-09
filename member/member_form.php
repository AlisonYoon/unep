<? 
	session_start(); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../common/css/common.css" rel="stylesheet" type="text/css" media="all">
    
    <!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500" rel="stylesheet">
<style>
    #content {width:100%; height:100%; margin:20%}
    #form_join {overflow:hidden}
    #join1 {float:left}
    #title h2 {font-size:3em; font-weight:400; margin-bottom:3%}
    #join1 {margin-right:8%}
    #join1 ul li {line-height:3.7em; font-size:1.5em; font-weight:300}
    #join2 {margin-top:20px}
    #join2 ul li {line-height:4.5em; margin-bottom:20px}
    #join2 ul li input {font-size:2em; padding:2px}
    .hp {font-size:2.3em; font-weight:100; width:80px}
    .hp option {font-weight:100}
    .email2 {width:200px}
    ::-webkit-input-placeholder {color:#999; font-size:1.5rem }
    ::-moz-placeholder {color:#999; font-size:1.5rem  } /* firefox 19+ */
    :-ms-input-placeholder {color:#999; font-size:1.5rem } /* ie */
    :-moz-placeholder {color:#999; font-size:1.5rem }
    #button {margin:60px 25%}
    #button a {font-size:2em; font-weight:300; padding:5px 20px; border:2px solid #9BC700; transition:all .3s ease-out}
    
    #button a:hover{ background:#9BC700; color:#f0f0f0}
    #must {font-size:2em; color:#C52354; font-weight:300}
    .topbtn {display:none}
    
    
</style>
    
    
<script src="../common/js/jquery-1.8.3.min.js"></script>

<script language="javascript" src="../mainjs/mainpopup.js" type="text/javascript"></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script language="javascript" src="../mainjs/scrollinteraction.js" type="text/javascript"></script>

    
    
<script type="text/javascript"> 
  $(document).ready(function() {

   /*
    $("#ajax_request").click(function(){    //중복검사 클릭시 처리
        var id = $('#id').val(); 
        $.ajax({ 
       type: "POST", 
        url: "check_id.php", //이페이지에서 중복체크를 한다 
       data: "id="+ id ,//test.asp에 id 값을 보낸다 
       cache: false, 
       success: function(data){ 
            $("#loadtext").html(data); //해당 내용을 보여준다 
        } 
       }); 
   });
 */
 
 $("#id").keyup(function() {    // id입력 상자에 id값 입력시
    var id = $('#id').val();
    $.ajax({
        type: "POST",
        url: "check_id.php",
        data: "id="+ id,  
        cache: false, 
        success: function(data)
        {
             $("#loadtext").html(data);
        }
    });
});

});
</script>
    
<script>
   function check_id()
   {
     window.open("check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.id.value)
      {
          alert("Your ID, again?");    
          document.member_form.id.focus();
          return;
      }

      if (!document.member_form.pass.value)
      {
          alert("Password please");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("Oops, two different passwords");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("May I get your name?");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("Which nickname would you like?");    
          document.member_form.nick.focus();
          return;
      }


      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("Can I get your number? No spam, I promise");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("The password doesn't match.\n Please check again");    
          document.member_form.pass.focus();
          document.member_form.pass.select();
          return;
      }

      document.member_form.submit();
   }

   function reset_form()
   {
      document.member_form.id.value = "";
      document.member_form.pass.value = "";
      document.member_form.pass_confirm.value = "";
      document.member_form.name.value = "";
      document.member_form.nick.value = "";
      document.member_form.hp1.value = "010";
      document.member_form.hp2.value = "";
      document.member_form.hp3.value = "";
      document.member_form.email1.value = "";
      document.member_form.email2.value = "";
	  
      document.member_form.id.focus();

      return;
   }
</script>
</head>

<body>
   <? include "../common/subhead.php" ?>
    


  <div id="content">
	

	<div id="col2">
        <form  name="member_form" method="post" action="insert.php"> 
		<div id="title">
			<h2>Sign Up</h2>
		</div>

		<div id="form_join">
			<div id="join1">
			<ul>
			<li>* ID</li>
			<li>* Password</li>
			<li>* Password confirm</li>
			<li>* Name</li>
			<li>* Nickname</li>
			<li>* Phone</li>
			<li>&nbsp;&nbsp;&nbsp;Email</li>
			</ul>
			</div>
			<div id="join2">
			<ul>
			<li><div id="id1">
                <input type="text" name="id" id="id" placeholder="4~12 letters, numbers or (_)">
                <span id="loadtext"></span>
                </div></li>
			<li><input type="password" name="pass"></li>
			<li><input type="password" name="pass_confirm"></li>
			<li><input type="text" name="name"></li>
			<li><input type="text" id="nick1" name="nick"></li>
			<li><select class="hp" name="hp1"> 
              <option value='010'>010</option>
              <option value='011'>011</option>
              <option value='016'>016</option>
              <option value='017'>017</option>
              <option value='018'>018</option>
              <option value='019'>019</option>
              </select>  - <input type="text" class="hp" name="hp2"> - <input type="text" class="hp" name="hp3"></li>
			<li><input type="text" id="email1" name="email1"> @ <input type="text" class="email2" name="email2"></li>
			</ul>
			</div>
			<div class="clear"></div>
			<div id="must"> * Please fill in</div>
		</div>

		<div id="button"><a href="#" onclick="check_input()">Submit</a>&nbsp;&nbsp;
<a href="#" onclick="reset_form()">Cancel</a>
		</div>
	    </form>
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->

<? include "../common/subfoot.php" ?>
</body>
</html>
