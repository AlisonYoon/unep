<? session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../common/css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/member.css" rel="stylesheet" type="text/css" media="all">
    
<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500" rel="stylesheet"> 
    
<style>
    #content {width:100%; height:100%; margin:20%}
    #id_input_button {overflow:hidden}
    #id_pw_title {float:left}
    #title h2 {font-size:3em; font-weight:400; margin-bottom:3%}
    #id_pw_title {margin-right:8%}
    #id_pw_title ul li {line-height:3.7em; font-size:1.5em; font-weight:300}
    #id_pw_input {margin-top:20px}
    #id_pw_input ul li {line-height:4.5em; margin-bottom:20px}
    #id_pw_input ul li input {font-size:2em; padding:2px}
    #login_button {margin-left:20%}
    #signin {font-size:2em; font-weight:300; padding:5px 20px; border:2px solid #9BC700; transition:all .3s ease-out; background:#fff}
    #signin:hover{ background:#9BC700; color:#f0f0f0}
    #join_button {margin:1% 0 0 20%}
    #join_button p {margin:1%;color:#C52354;}
    #join_button a {font-size:2em; font-weight:300; padding:5px 20px; border:2px solid #9BC700; transition:all .3s ease-out;}
     #join_button a:hover{ background:#9BC700; color:#f0f0f0}
    #must {font-size:2em; color:#C52354; font-weight:300}
    .topbtn {display:none}
    
    
</style>
    
<script src="../common/js/jquery-1.8.3.min.js"></script>
    <script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
</head>

<body>
 <? include "../common/subhead.php" ?>




  <div id="menu">
	<? include "../common/top_menu2.php"; ?>
  </div>  <!-- end of menu --> 

  <div id="content">


	<div id="col2">
        <form  name="member_form" method="post" action="login.php"> 
		<div id="title">
            <h2>Sign In</h2>
		</div>
       
		<div id="login_form">
		 
			 <div class="clear"></div>

			
			 <div id="login2">
				<div id="id_input_button">
					<div id="id_pw_title">
						<ul>
						<li>ID</li>
						<li>Password</li>
						</ul>
					</div>
					<div id="id_pw_input">
						<ul>
						<li><input type="text" name="id" class="login_input"></li>
						<li><input type="password" name="pass" class="login_input"></li>
						</ul>						
					</div>
					<div id="login_button">
						<input type="submit" id="signin" value="Sign In">
					</div>
				</div>
				<div class="clear"></div>

				<div id="login_line"></div>
				<div id="join_button"><p>Not a member yet?</p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="../member/member_form.php">Join</a></div>
			 </div>			 
		</div> <!-- end of form_login -->

	    </form>
	</div> <!-- end of col2 -->
  </div> <!-- end of content -->

<? include "../common/subfoot.php" ?>
</body>
</html>