<? 
	session_start(); 

    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

	include "../common/dbconn.php";

	$sql = "select * from $table where num=$num";
	$result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	$item_num     = $row[num];
	$item_id      = $row[id];
	$item_name    = $row[name];
  	$item_nick    = $row[nick];
	$item_hit     = $row[hit];

	$image_name[0]   = $row[file_name_0];
	$image_name[1]   = $row[file_name_1];
	$image_name[2]   = $row[file_name_2];


	$image_copied[0] = $row[file_copied_0];
	$image_copied[1] = $row[file_copied_1];
	$image_copied[2] = $row[file_copied_2];

    $item_date    = $row[regist_day];
	$item_subject = str_replace(" ", "&nbsp;", $row[subject]);

	$item_content = $row[content];
	$is_html      = $row[is_html];

	if ($is_html!="y")
	{
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}
	
	for ($i=0; $i<3; $i++)
	{
		if ($image_copied[$i]) 
		{
			$imageinfo = GetImageSize("./data/".$image_copied[$i]); //GetImageSize -> image width/height/type 정보를 빼낸다
            //imageinfo[0]=>이미지 너비
            //imageinfo[1]->이미지 높이
            //imageinfo[2]->이미지 형식

			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i]  = $imageinfo[2];

			if ($image_width[$i] > 785)
                //게시판의 가로폭 제어=>이미지크기 제
				$image_width[$i] = 785;
		}
		else
		{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

	$new_hit = $item_hit + 1;

	$sql = "update $table set hit=$new_hit where num=$num";   // 글 조회수 증가시킴
	mysql_query($sql, $connect);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="utf-8">
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="../sub6/common/css/sub6common.css" type="text/css" rel="stylesheet">
<link href="../sub6/css/sub6_content3.css" type="text/css" rel="stylesheet">
<link href="../sub6/common/css/font-awesome.min.css" type="text/css" rel="stylesheet">   
    
<style>
    
    #content {background:#fff; padding:50px}
    #view_title1 {font-size:2rem; font-weight: 300; overflow-wrap: break-word; }
    #view_title2{font-size:.9rem; font-weight:200}
    #view_content {margin:50px 0; font-size:1.5rem; font-weight:300}
    #view_button {text-align:center; margin:100px 0}
    #view_button a {font-size:1.3rem; margin:0 20px; transition:all .2s ease; padding-bottom:5px}
    #view_button a:nth-child(3) {color:#ff9b9b}
    #view_button a:hover {border-bottom:4px solid #9BC700;}
    #view_content {overflow-wrap: break-word;}
    
    
</style>  
    
    <!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,1y00i,300,400,500" rel="stylesheet">

<script src="../common/js/jquery-1.8.3.min.js" type="text/javascript" ></script>
<script src="js/content1/tab.js" type="text/javascript" ></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>

<script>
    function del(href) 
    {
        if(confirm("한번 삭제한 자료는 복구할 방법이 없습니다.\n\n정말 삭제하시겠습니까?")) {
                document.location.href = href;
        }
    }
</script>
</head>

<body>
<? include "../common/subhead.php" ?>

  <div class="main">
                  <img src="../sub6/common/images/main.jpg" alt="">
        </div>
          <!--main e -->

<div class="container">


           <div class="topMenu">

                  <ul>
                    <li class="topMenuEcosystemManagement"><a href="../sub6/sub6_1.php">What is SCP?</a></li>
                    <li class="topMenuWhatWeDo"><a href="../sub6/sub6_2.php">News and Press Releases</a></li>
                    <li class="topMenuEvents"><a href="../sub6/sub6_3.php" class="current">Latest</a></li>
                  </ul>
              </div>
                <!--topMenu e-->
    
    

  <div id="content">
	


        
		

		<div id="view_comment"> &nbsp;</div>

		<div id="view_title">
			<div id="view_title1"><?= $item_subject ?></div><div id="view_title2"><?= $item_nick ?> | views : <?= $item_hit ?>  
			                      | <?= $item_date ?> </div>	
		</div>

		<div id="view_content">
<?
	for ($i=0; $i<3; $i++)
	{
		if ($image_copied[$i])
		{
			$img_name = $image_copied[$i];
			$img_name = "./data/".$img_name;
			$img_width = $image_width[$i];
			
			echo "<img src='$img_name' width='$img_width'>"."<br><br>";
		}
	}
?>
			<?= $item_content ?>
		</div>

		<div id="view_button">
				<a href="../sub6/sub6_3.php?table=<?=$table?>&page=<?=$page?>">List</a>&nbsp;
<? 
	if($userid==$item_id || $userid="admin" || $userlevel==1 )
	{
?>
				<a href="write_form.php?table=<?=$table?>&mode=modify&num=<?=$num?>&page=<?=$page?>">Modify</a>&nbsp;
				<a href="javascript:del('delete.php?table=<?=$table?>&num=<?=$num?>')">Delete</a>&nbsp;
<?
	}
?>
<? 
	if($userid)
	{
?>
				<a href="write_form.php?table=<?=$table?>">New post</a>
<?
	}
?>
		</div>

		<div class="clear"></div>


  </div> <!-- end of content -->
     </div>
        <!--container e-->

  <? include "../common/subfoot.php" ?>
</body>
</html>
