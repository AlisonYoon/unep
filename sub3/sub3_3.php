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
<title>Disasters & Conflicts :: Partners</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub3common.css" type="text/css" rel="stylesheet">
<link href="css/sub3_content3.css" type="text/css" rel="stylesheet">

<!--script-->
 <script src="common/js/jquery-1.8.3.min.js" type="text/javascript"></script>  
<script src="js/content1/tab.js" type="text/javascript"></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script type="text/javascript" src="../common/js/move-top.js"></script>
<script type="text/javascript" src="../common/js/easing.js"></script>
<script type="text/javascript" src="../common/js/scroll.js"></script>

<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,1y00i,300,400,500" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
}
</style>
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
                  <h2>Partners</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>UNEP works with partners, both governmental and non-governmental, 
and national and international.</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                  <div class="textTop">
                    <p>The diversity of the partnerships in the field of Environmental Governance 
is notable for its great 
scope. UNEP works with partners, both governmental and non-governmental, 
and national and international. UNEP serves the Governments of 
United Nations Member States, who are in turn essential partners of UNEP 
in delivering its services at all levels. Other implementing partners for 
this subprogramme will include at the global level, 
for promoting policy coherence, United Nations bodies, funds, programmes, 
and specialized agencies;
 United Nations system coordination bodies such as the </p>
                  </div>
                  <!--textTop e-->
                  <div class="partnerBanner">
                 <ul>
                   <li><a class="au" href="#1"><img src="images/content3/African-Union.png" alt=""></a></li>
                   <li><a class="asan" href="#2"><img src="images/content3/Association-of-Southeast-Asian-Nations.png" alt=""></a></li>
                   <li><a class="wb" href="#3"><img src="images/content3/The-World-Bank.png" alt=""></a></li>
                   <li><a class="coe" href="#4"><img src="images/content3/council-of-europe.png" alt=""></a></li>
                   <li><a class="gcc" href="#5"><img src="images/content3/Gulf-Cooperation-Council.png" alt=""></a></li>
                   <li><a class="cais" href="#6"><img src="images/content3/Central-American-Integration-System.png" alt=""></a></li>
                 </ul>
                  </div>
                  <!--parterBanner e-->

                  <div class="textBottom">
                    <p>In all its activities UNEP seeks to work with major groups, organizations and stakeholders such 
as farmers’ organizations, women’s organizations, the scientific and technological communities, 
children and youth organizations, indigenous peoples and their communities, workers and trade 
unions, business and industry, non-governmental organizations and local authorities. It will also 
work with media for outreach, public communications and public awareness raising campaigns.</p>
                  </div>
                  <!--textBottom e-->
                   


                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
        
        
        
 <? include "../common/subfoot.php" ?>
</body>
</html>

