<?
	session_start();

    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

?>

<!doctype html>

<html xml:lang="en" lang="en">

<head>

<meta charset="utf-8">
    
<meta name='keywords' content='unep, United Nations, united nations environment programme, un, environment, portfolio, climate change, redd, ecosystem, scp, saicm '/> 

<meta name='description' content='The United Nations Environment Programme (UNEP) is the leading global environmental authority that sets the global environmental agenda, promotes the coherent implementation of the environmental dimension of sustainable development within the United Nations system and serves as an authoritative advocate for the global environment.'/> 


<title>United Nations Environment Programme</title>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<link href="common/css/common.css" type="text/css" rel="stylesheet">

<link href="maincss/mainlayout.css" type="text/css" rel="stylesheet">

<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
}
</style>
<script type="text/javascript" language="javascript" src="mainjs/common_flash.js"></script>

<script language="javascript" src="mainjs/mainpopup.js" type="text/javascript"></script>
<script language="javascript" src="common/js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script language="javascript" src="common/js/fullnav.js" type="text/javascript"></script>
<script language="javascript" src="mainjs/mainworking.js" type="text/javascript"></script>
<script language="javascript" src="mainjs/latest.js" type="text/javascript"></script>
<script language="javascript" src="mainjs/scrollinteraction.js" type="text/javascript"></script>


</head>



<body>

<? include "common/mainhead.php" ?>



        <div class="highlight">
        <a href="#"><img src="images/highlight.jpg" alt =""></a>
         </div>
        <!-- highlight e-->

        <div class="getthefact">

        	<div class="getthefactText">

            <h3>Tapping the Tana</h3>

            <p>Kenya’s Tana River Basin is the country’s life blood

and needs careful management.

"My village depends on the fish that only live and breed in the

mangroves of the Tana Delta. Our livelihoods would be destroyed

if the HGF Dam diverted water from our region.</p>

			</div>

            <!--getthefactText e-->

            <div class="getthefactBtn">
            
            <a href="http://unep.alisonyoon.com/concert/view.php?table=concert&num=16&page=1"><span>Get the fact</span></a>
          
            </div>

            <!--getthefactBtn e-->



        </div>

        <!-- getthefact e-->

        <div id="content">

        	<h2 class="hidden">Index Page Contents Area</h2>

        	<div class="contentTop">

            	<div class="mission">

					<h3><a href="sub1/sub1_1.php">Mission</a></h3>

					<p><a href="sub1/sub1_1.php">To provide <span>leadership</span> and encourage

                       <span>partnership</span> in caring for the environment by

                       <span>inspiring, informing, and enabling</span> nations

                       and peoples to improve their quality of life

                       without compromising that of future generations.</a></p>

                </div>

                <!-- mission e-->

                <div class="about">

					<h3><a href="sub1/sub1_1.php">About Us</a></h3>

					<p><a href="sub1/sub1_1.php">The United Nations Environment Programme (UNEP)

                    is the leading global environmental authority that

                    sets the global environmental agenda,

                    promotes the coherent implementation of the

                    environmental dimension of sustainable

                    development within the United Nations system

                    and serves as an authoritative advocate for the global

                    environment.</a></p>

                </div>

                <!-- about e-->

                <div class="instagram">

								<h3>Instagram</h3>

                                <img src="images/instagram.jpg" alt="">

                </div>

                <!-- instagram e-->

            </div>

            <!-- contentTop e-->
            
            <? include "common/func.php"; ?>
            <div class="latest">

            			<h3><a href="">The Latest</a></h3>

							<? latest_article("concert", 2, 200); ?>

						

            </div>

            <!-- latest e-->

            <div class="info">

            <h3>What you need to know</h3>

            	<div class="climate">


                	<a href="sub2/sub2_1.php"><h4>Climate</h4>
                        <span></span>
                        <span class="infoarrow"></span>
                    <p>Deforestation and forest

degradation account for

approximately 17 percent

of carbon emissions.</p></a>

                </div>

                <!--climate end-->

                <div class="ecosystem">
                    
                	<a href="sub4/sub4_1.php"><h4>Ecosystem</h4>
                        <span></span>
                        <span class="infoarrow"></span>
                    <p>Ocean and marine

systems provide us with

essential services:

carbon capture for climate

mitigation and many more</p></a>

                </div>

                <!-- ecosystem e-->

                <div class="waste">
                    
               		<a href="sub5/sub5_1.php"><h4>Waste</h4>
                        <span></span>
                        <span class="infoarrow"></span>
                    <p>It is 5-10 times cheaper

to manage waste

now in an enviornmentally

sound manner, than to

clean up in future years.</p></a>

                </div>

                <!-- waste e-->



            </div>

            <!-- info e -->

            <div class="projects">

            	<h3>We are working on</h3>
                <div class="gallery_box">
                	<ul class="news1">

                		<li class="work1"><a href="sub6/sub6_2.php"><span class="reader">Time to deliver</span><span class="spanhover">Time to deliver</span><span class="projectbtn">read story</span></a></li>

                		<li class="work2"><a href="sub6/sub6_2.php"><span class="reader">Woman, water and peace</span><span class="spanhover">Woman, water and peace</span><span class="projectbtn">read story</span></a></li>

                		<li class="work3"><a href="sub6/sub6_2.php"><span class="reader">The big picture</span><span class="spanhover">The big picture</span><span class="projectbtn">read story</span></a></li>

                		<li class="work4"><a href="sub6/sub6_2.php"><span class="reader">The air we breathe</span><span class="spanhover">The air we breathe</span><span class="projectbtn">read story</span></a></li>

                		<li class="work5"><a href="sub6/sub6_1.php"><span class="reader">2030 Agenda</span><span class="spanhover">2030 Agenda</span><span class="projectbtn">read story</span></a></li>

                		<li class="work6"><a href="sub6/sub6_2.php"><span class="reader">CCAC Oil &amp; Gas Methane Partnership</span><span class="spanhover">CCAC Oil &amp; Gas Methane Partnership</span><span class="projectbtn">read story</span></a></li>

                	</ul>

                  <ul class="news2">
                    <li class="work4"><a href="sub6/sub6_2.php"><span class="reader">The air we breathe</span><span class="spanhover">The air we breathe</span><span class="projectbtn">read story</span></a></li>

                    <li class="work5"><a href="sub6/sub6_1.php"><span class="reader">2030 Agenda</span><span class="spanhover">2030 Agenda</span><span class="projectbtn">read story</span></a></li>

                    <li class="work6"><a href="sub6/sub6_2.php"><span class="reader">CCAC Oil &amp; Gas Methane Partnership</span><span class="spanhover">CCAC Oil &amp; Gas Methane Partnership</span><span class="projectbtn">read story</span></a></li>

                    <li class="work1"><a href="sub6/sub6_2.php"><span class="reader">Time to deliver</span><span class="spanhover">Time to deliver</span><span class="projectbtn">read story</span></a></li>

                    <li class="work2"><a href="sub6/sub6_2.php"><span class="reader">Woman, water and peace</span><span class="spanhover">Woman, water and peace</span><span class="projectbtn">read story</span></a></li>

                    <li class="work3"><a href="sub6/sub6_2.php"><span class="reader">The big picture</span><span class="spanhover">The big picture</span><span class="projectbtn">read story</span></a></li>
                  </ul>
                  </div>
                  <!--gallery_box e-->

                    <a href="#left1" class="workleft leftBtn"><img src="images/workleft.png" alt=""></a>

                    <a href="#right1" class="workright rightBtn"><img src="images/workright.png" alt=""></a>
                  

            </div>

            <!-- projects e -->

            <div class="social">

            	<div class="twitter">

                	<h3>Today's Tweet</h3>

                    <a href="#" class="twitterFollow"><img src="images/twitterFollow.png" alt=""></a>

                    <div class="twitterPost">

                    	<img src="images/twitter-post.png" alt="">

                    </div>

                </div>

                <!-- twitter e -->

                <div class="video">
                  <script type="text/javascript" language="javascript">flashLoad('video/movie.swf','340','340','id','#ffffff','','')</script>
                </div>

                <!-- video e -->

            </div>

            <!-- social e -->

            <div class="partners">

           		<h3>We work togehter</h3>

            	<ul>

            		<li class="partnerLogo"><a href="sub3/sub3_3.php"><img src="images/african-union.png" alt=""></a></li>

            		<li class="partnerLogo"><a href="sub3/sub3_3.php"><img src="images/asean.png" alt=""></a></li>

            		<li class="partnerLogo"><a href="sub3/sub3_3.php"><img src="images/the-world-bank.png" alt=""></a></li>

            		<li class="partnerLogo"><a href="sub3/sub3_3.php"><img src="images/council-of-europe.png" alt=""></a></li>

            		<li><a href="sub3/sub3_3.php" class="partnerLogo"><img src="images/gulf-cooperation-council.png" alt=""></a></li>

            		<li><a href="sub3/sub3_3.php"><img src="images/sica.png" alt=""></a></li>

            	</ul>

            <a href="sub3/sub3_3.php" class="more">more<img src="images/readmore.png" alt=""></a>

                </div>
                <!--partnersLink e-->

            </div>

            <!-- partners e-->

        </div>

        <!-- content e-->

      


<div id="showimage" style="z-index:99;position:absolute;width:400px;left:600px;top:200px;">

  <script language="javascript" type="text/javascript">

    function closeWin(){

       var chk = document.getElementById('Notice')

       if ( chk.checked ) {

             setCookie( "Notice", "done" , 1); //1이란 숫자는 1일간 안보임을 뜻함.
        }

    }

   if ( getCookie( "Notice" ) == "done" ) {

       hidebox();

   }

 </script>

<figure>
 <table>
    <tr>

      <td>
          
          <img src="popup/popup.png" alt="Disclaimer: This website is made as part of a private study. It is for non-commercial purposes. All content and photos copyright to other organizations or individuals.">

      </td>

    </tr>

    <tr>

       <td style="height:15px;cursor:hand;"><p style="font-size:12px;text-align:center;color:#666;"><input class="notShowCheck" type="checkbox" name="Notice" id="Notice" value="" title="Do not show again for one day check box"><label class="notShow" for="Notice">Do not show again for one day</label><a class="popupClose" style="cursor:pointer"  onclick="closeWin();hidebox();return false;"> [close] </a></p></td>

    </tr>

 </table>
  <figcaption><span class="hidden">Disclaimer</span></figcaption>
</figure>
</div>



<? include "common/mainfoot.php" ?>

</body>

</html>

