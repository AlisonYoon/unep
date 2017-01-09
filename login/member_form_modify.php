<?
    session_start();
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../common/css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/member.css" rel="stylesheet" type="text/css" media="all">
    
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
    
<script>
   function check_id()
   {
     window.open("../member/check_id.php?id=" + document.member_form.id.value,
         "IDcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_nick()
   {
     window.open("../member/check_nick.php?nick=" + document.member_form.nick.value,
         "NICKcheck",
          "left=200,top=200,width=250,height=100,scrollbars=no,resizable=yes");
   }

   function check_input()
   {
      if (!document.member_form.pass.value)
      {
          alert("비밀번호를 입력하세요");    
          document.member_form.pass.focus();
          return;
      }

      if (!document.member_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요");    
          document.member_form.pass_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("이름을 입력하세요");    
          document.member_form.name.focus();
          return;
      }

      if (!document.member_form.nick.value)
      {
          alert("닉네임을 입력하세요");    
          document.member_form.nick.focus();
          return;
      }

      if (!document.member_form.hp2.value || !document.member_form.hp3.value )
      {
          alert("휴대폰 번호를 입력하세요");    
          document.member_form.nick.focus();
          return;
      }

      if (document.member_form.pass.value != 
            document.member_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
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
<?
    //$_SESSION['userid]='hello'....
    
    include "../common/dbconn.php";

    $sql = "select * from member where id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);//검색레코드를 담
        //$row[hp]='010-3424-3424' 이렇게 합쳐져 있는걸 다시 따로 떨어뜨림
    $hp = explode("-", $row[hp]);
        //$hp[0]='010' , $hp[1]='3424' , $hp[2]='3424'
    $hp1 = $hp[0];
    $hp2 = $hp[1];
    $hp3 = $hp[2];

    $email = explode("@", $row[email]);
    $email1 = $email[0];
    $email2 = $email[1];

    mysql_close();
?>
<body>
 <? include "../common/subhead.php" ?>
  <div id="content">
	

	<div id="col2">
        <form  name="member_form" method="post" action="modify.php"> 
		<div id="title">
			<img src="../img/title_member_modify.gif">
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
			<li><?= $row[id] ?></li>
			<li><input type="password" name="pass" value=""></li>
			<li><input type="password" name="pass_confirm" value=""></li>
			<li><input type="text" name="name" value="<?= $row[name] ?>"></li>
			<li><div id="nick1"><input type="text" name="nick" value="<?= $row[nick] ?>"></div><div id="nick2" ></div></li>
			<li><input type="text" class="hp" name="hp1" value="<?= $hp1 ?>"> 
             - <input type="text" class="hp" name="hp2" value="<?= $hp2 ?>"> - <input type="text" class="hp" name="hp3" value="<?= $hp3 ?>"></li>
			<li><input type="text" id="email1" name="email1" value="<?= $email1 ?>"> @ <input type="text" name="email2" 
			           value="<?= $email2 ?>"></li>
			</ul>
			</div>
			<div class="clear"></div>
			<div id="must"> * Please fill in</div>
		</div>

		<div id="button"><a href="#" onclick="check_input()">Submit</a>&nbsp;&nbsp;
<a href="#" onclick="reset_form()">Cancel</a>
		</div>
	    </form>
	</div>
  </div>
</div>

    <? include "../common/subfoot.php" ?>
</body>
</html>
