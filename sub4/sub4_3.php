<?
	session_start();

    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ecosystem Management::Events</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub4common.css" type="text/css" rel="stylesheet">
<link href="css/sub4_content3.css" type="text/css" rel="stylesheet">


<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,1y00i,300,400,500" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
}
</style>
<script src="common/js/jquery-1.8.3.min.js" type="text/javascript" ></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script type="text/javascript" src="../common/js/move-top.js"></script>
<script type="text/javascript" src="../common/js/easing.js"></script>
<script type="text/javascript" src="../common/js/scroll.js"></script>
</head>

<body>
<? include "../common/subhead.php" ?>
     <div class="main">
                  <img src="common/images/main.jpg" alt="">
        </div>
          <!--main e -->

           <div class="container">


              <? $_GET['num']=3;
            include "common/leftnav.php" ?>
              <div id="content">
                <div class="titleArea">
                  <h2>Events</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>Upcoming events</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                  
                     
        <ul>
          <li>
            <dl>
              <dt>May 26 2016<br/>13:00<br/><span>Nairobi, Kenya</span></dt>
                <dd><a href="http://web.unep.org/unea/side-events/marine-litter-and-microplastics" target="blank">UNEA-2 Side Event: Marine litter 
and microplastics</a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>May 23 2016<br/>13:00<br/><span>Nairobi, Kenya</span></dt>
                <dd><a href="http://web.unep.org/unea/side-events/moving-towards-sustainable-pastoralism-and-responsible-consumption-livestock-products" target="blank">UNEA-2 Side Event: Moving towards 
sustainable pastoralism and responsible 
consumption of livestock products</a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt class="event3">Sep 1 2016<br/>(All day)</dt>
                <dd><a href="http://unep.org/stories/education/Education-vital-for-healthy-productive-ecosystems.asp" target="blank">Online learning opportunity on the 
ecosystems approach</a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>May 26 2016<br/>13:00<br/> <span>Nairobi, Kenya</span></dt>
                <dd><a href="http://web.unep.org/unea/side-events/marine-litter-and-microplastics" target="blank">UNEA-2 Side Event: Marine litter 
and microplastics</a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <dt>May 23 2016<br/>13:00<br/><span>Nairobi, Kenya</span></dt>
                <dd><a href="http://web.unep.org/unea/side-events/moving-towards-sustainable-pastoralism-and-responsible-consumption-livestock-products" target="blank">UNEA-2 Side Event: Moving towards 
sustainable pastoralism and responsible 
consumption of livestock products</a></dd>
            </dl>
          </li>
        </ul>
        

                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
       
  <? include "../common/subfoot.php" ?>
</body>
</html>

