<? 
	session_start(); 
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);
    $table="concert";
	include "../common/dbconn.php";

	if ($mode=="modify")  //글 수정모
	{
		$sql = "select * from $table where num=$num";
		$result = mysql_query($sql, $connect);

		$row = mysql_fetch_array($result);       
	
		$item_subject     = $row[subject];
		$item_content     = $row[content];

		$item_file_0 = $row[file_name_0];
		$item_file_1 = $row[file_name_1];
		$item_file_2 = $row[file_name_2];

		$copied_file_0 = $row[file_copied_0];
		$copied_file_1 = $row[file_copied_1];
		$copied_file_2 = $row[file_copied_2];
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">

<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="../sub6/common/css/sub6common.css" type="text/css" rel="stylesheet">
<link href="../sub6/css/sub6_content3.css" type="text/css" rel="stylesheet">
    
    <style>
        #content {margin:300px}
        #write_button {margin-top:50px; text-align:center;}
        #write_button a {font-size:1.3rem; border: 2px solid #9BC700; background:none; padding:5px 10px; margin:0 30px }
        #write_button a:hover {cursor: pointer; background:#9BC700; color:#f0f0f0; }
    </style>


<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,1y00i,300,400,500" rel="stylesheet">
    
<script src="../common/js/jquery-1.8.3.min.js" type="text/javascript" ></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script>
  function check_input()
   {
      if (!document.board_form.subject.value)
      {
          alert("Insert title");    
          document.board_form.subject.focus();
          return;
      }

      if (!document.board_form.content.value)
      {
          alert("Insert content");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>

<body>
<? include "../common/subhead.php" ?>

  <div id="content">


	<div id="col2">
        
		

		<div class="clear"></div>

		<div id="write_form_title">
			<h2>New Post</h2>
		</div>

		<div class="clear"></div>

<?
	if($mode=="modify")
	{

?>
		<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&table=<?=$table?>" enctype="multipart/form-data"> 
<?
	}
	else
	{
?>
		<form  name="board_form" method="post" action="insert.php?table=<?=$table?>" enctype="multipart/form-data"> 
<?
	}
?>
		<div id="write_form">
			<div class="write_line"></div>
			<div id="write_row1"><div class="col1"> Nickname </div><div class="col2"><?=$usernick?></div>
<?
	if( $userid && ($mode != "modify") )
	{
?>
				<div class="col3"><input type="checkbox" name="html_ok" value="y"> HTML</div>
<?
	}
?>						
			</div>
			<div class="write_line"></div>
			<div id="write_row2"><div class="col1">  Title   </div>
			                     <div class="col2"><input type="text" name="subject" value="<?=$item_subject?>" ></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row3"><div class="col1"> Content   </div>
			                     <div class="col2"><textarea rows="15" cols="79" name="content"><?=$item_content?></textarea></div>
			</div>
			<div class="write_line"></div>
			<div id="write_row4"><div class="col1"> Upload image1   </div>
			                     <div class="col2"><input type="file" name="upfile[]" value="Search"></div>
			</div>
			<div class="clear"></div>
<? 	if ($mode=="modify" && $item_file_0)
	{
?>
			<div class="delete_ok"><?=$item_file_0?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="0"> Delete</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>
			<div id="write_row5"><div class="col1"> Upload image2  </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($mode=="modify" && $item_file_1)
	{
?>
			<div class="delete_ok"><?=$item_file_1?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="1"> Delete</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>
			<div class="clear"></div>
			<div id="write_row6"><div class="col1"> Upload image3   </div>
			                     <div class="col2"><input type="file" name="upfile[]"></div>
			</div>
<? 	if ($mode=="modify" && $item_file_2)
	{
?>
			<div class="delete_ok"><?=$item_file_2?> 파일이 등록되어 있습니다. <input type="checkbox" name="del_file[]" value="2"> Delete</div>
			<div class="clear"></div>
<?
	}
?>
			<div class="write_line"></div>

			<div class="clear"></div>
		</div>

		<div id="write_button">
		<a href="../sub6/sub6_3.php?table=<?=$table?>&page=<?=$page?>">List</a>&nbsp;
            <a href="#" onclick="check_input()">Post</a>
		</div>

		</form>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->

       
     <? include "../common/subfoot.php" ?>
</body>
</html>
