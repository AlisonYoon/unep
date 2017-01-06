<?
	session_start();

    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

    $table = "download";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resource Efficiency::What is SCP?</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub6common.css" type="text/css" rel="stylesheet">
<link href="css/sub6_content1.css" type="text/css" rel="stylesheet">


<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,1y00i,300,400,500" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;}
   #list_content {margin-bottom:100px}
    
    #list_search {overflow:hidden; align-items: center; text-align: center; display:flex; padding-top:100px; margin-bottom:20px}
    #list_search1 {margin-left:100px; font-size:1.3rem}
    #list_search2 {margin-left:190px;font-size:1.3rem}
    #list_search3 {margin-left:10px}
    #list_search3 select{font-size:1.5rem; color:#666; border:.1px solid #999; background:#f0f0f0; padding:2px 10px}
    #list_search4 {margin-left:20px}
    #list_search4 input {font-size:1.3rem; padding:3px; background:#f0f0f0; border:1px solid #999}
    #list_search4 input:focus {background:#fff}
    
    #list_search5 input {font-size:1.3rem; border: 2px solid #9BC700; background:none; padding:5px 10px; margin-left:10px}
    #list_search5 input:hover {cursor: pointer; background:#9BC700; color:#f0f0f0}
    
    #list_top_title ul {overflow:hidden}
    #list_top_title ul li {float:left}
    #list_item {overflow:hidden; background:#fff; padding:30px; width:80%; align-items:center; margin:10px auto; transition:all .3s ease}
    #list_item:hover {background:#e9f4c1}

    #list_item2 {float:left; overflow:hidden}
    #list_item2 img {margin:20px 0 0 10px; float:left}
    #list_item2 a {font-size:2.1em; padding-bottom:3px; transition:all .2s ease; overflow-wrap: break-word;}
    #list_item2 a:hover {border-bottom:4px solid #9BC700; font-weight:400}

    #list_item4 {float:right}
    #list_item4 span {color:#999; font-size:.8rem; margin:20px}
    
    #page_button {text-align:center}
    #page_num {font-size:1.3rem; color:#666; margin-top:50px}
    #button {margin-top:30px}
    #button a {font-size:1.3rem; border: 2px solid #9BC700; background:none; padding:5px 10px;}
    #button a:hover {cursor: pointer; background:#9BC700; color:#f0f0f0}
    .subjectarea {width:500px; height:100px; margin:40px 0 0 0}
</style>

<script src="common/js/jquery-1.8.3.min.js" type="text/javascript" ></script>
<script src="js/content1/tab.js" type="text/javascript" ></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script language="javascript" src="js/content1/scp.js" type="text/javascript"></script>
<!--[if IE9]>  
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="../common/js/move-top.js"></script>
<script type="text/javascript" src="../common/js/easing.js"></script>
<script type="text/javascript" src="../common/js/scroll.js"></script>
</head>
<?
	include "../common/dbconn.php";
    if(!$scale){
        $scale=10;	
    }
			// 한 화면에 표시되는 글 수

    if ($mode=="search")
	{
		if(!$search)
		{
			echo("
				<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>
			");
			exit;
		}

		$sql = "select * from $table where $find like '%$search%' order by num desc";
	}
	else
	{
		$sql = "select * from $table order by num desc";
	}

	$result = mysql_query($sql, $connect);
	$total_record = mysql_num_rows($result); // 전체 글 수

	// 전체 페이지 수($total_page) 계산 
	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 // 페이지번호($page)가 0 일 때
		$page = 1;              // 페이지 번호를 1로 초기화
 
	// 표시할 페이지($page)에 따라 $start 계산  
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;
?>
    
<body>
<? include "../common/subhead.php" ?>

     <div class="main">
                  <img src="common/images/main.jpg" alt="">
        </div>
          <!--main e -->

           <div class="container">

 <? $_GET['num']=2;
            include "common/leftnav.php" ?>
                

              <div id="content">
                <div class="titleArea">
                  <h2>News and Press Releases</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>Sustainable consumption and production</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                 
                    		<form  name="board_form" method="post" action="sub6_2.php?table=<?=$table?>&mode=search"> 
		<div id="list_search">
			<div id="list_search1"><?= $total_record ?> posts  </div>
			<div id="list_search2">select</div>
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>title</option>
                    <option value='content'>content</option>
                    <option value='nick'>nickname</option>
                    <option value='name'>name</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5"><input type="submit" value="Search"></div>
		</div>
		</form>

        <!--목록 리스트 개수 변경-->
        
        
        
		<div class="clear"></div>

		

		<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)                    
   {
      mysql_data_seek($result, $i);       
      // 가져올 레코드로 위치(포인터) 이동  
      $row = mysql_fetch_array($result);       
      // 하나의 레코드 가져오기
	
	  $item_num     = $row[num];
	  $item_id      = $row[id];
	  $item_name    = $row[name];
  	  $item_nick    = $row[nick];
	  $item_hit     = $row[hit];

      $item_date    = $row[regist_day];
	  $item_date = substr($item_date, 0, 10);  

	  $item_subject = str_replace(" ", "&nbsp;", $row[subject]);
?>
	   <div id="list_item">
            <div id="list_item4"><span><?= $item_date ?></span><span><?= $item_hit ?></span></div>
             <div id="list_item2">
              
              <div class="subjectarea">
              <a href="../download/view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a>
              </div>
             </div>
           </div>
<?
   	   $number--;
   }
?>
			<div id="page_button">
				<div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++)
   {
		if ($page == $i)     // 현재 페이지 번호 링크 안함
		{
			echo "<b> $i </b>";
		}
		else
		{ 
			echo "<a href='sub6_2.php?table=$table&page=$i&scale=$scale'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
				</div>
				<div id="button">
					<a href="sub6_2.php?table=<?=$table?>&page=<?=$page?>&scale=<?=$scale?>">List</a>&nbsp;
<? 
	if($userid)
	{
?>
		<a href="../download/write_form.php?table=<?=$table?>">Write</a>
<?
	}
?>
				</div>
			</div> <!-- end of page_button -->
		
        </div> <!-- end of list content -->

		<div class="clear"></div>
                    
                    
                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
              
  <? include "../common/subfoot.php" ?>

</body>
</html>

