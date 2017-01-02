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
<title>Climate Change::Introduction</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub2common.css" type="text/css" rel="stylesheet">
<link href="css/sub2_content1.css" type="text/css" rel="stylesheet">

<!--script-->
 <script src="common/js/jquery-1.8.3.min.js" type="text/javascript"></script>  
<script src="js/content1/tab.js" type="text/javascript"></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script type="text/javascript" src="../common/js/move-top.js"></script>
<script type="text/javascript" src="../common/js/easing.js"></script>
<script type="text/javascript" src="../common/js/scroll.js"></script>
<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500" rel="stylesheet">
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


             <? $_GET['num']=1;
            include "common/leftnav.php" ?>

              <div id="content">
                <div class="titleArea">
                  <h2>Introduction</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>UNEP is at the forefront of global efforts to address the climate challenge and realize its opportunities</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
               
                        	<div class="tabs">
                            	<h3><a href="#t1" class="tab tab1">Introduction</a></h3>
                            		<div class="contlist">                        
                            
                            
                            	<div class="contlistTop">
                             <img src="images/content1/bar.png" alt="">
                            <p>Climate change has long-since ceased 
to be a scientific curiosity, and is no longerjust 
one of many environmental and regulatory 
concerns. </p>

                            
                            	</div>
                                <!--contlistTop e-->

                            <img src="images/content1/climate-change.jpg" alt=""> 

                           <div class="contlistBottom">  
                             <p>Shifting weather patterns, for example, 
threaten food production through increased 
unpredictability of precipitation, rising sea levels contaminate coastal freshwater reserves 
and increase the risk of catastrophic flooding, 
and a warming atmosphere aids the pole-ward 
spread of pests and diseases once 
limited to the tropics.
</p>                           
                            <p>The news to date is bad and getting worse. Ice-loss from glaciers and ice sheets 
has continued, leading, for example, to the second straight year with an ice-free passage 
through Canada’s Arctic islands, and accelerating rates of ice-loss from ice sheets 
in Greenland and Antarctica. Combined with thermal expansion?
warm water occupies more volume than cold?the melting of ice sheets and glaciers 
around the world is contributing to rates and an ultimate extent of sea-level rise that could far 
outstrip those anticipated in the most recent global scientific assessment.
</p>
                            <p>There is alarming evidence that important tipping points, 
leading to irreversible changes in major ecosystems and the planetary climate system, 
may already have been reached or passed. Ecosystems as diverse as the Amazon rainforest 
and the Arctic tundra, for example, may be approaching thresholds of dramatic change 
through warming and drying. 
Mountain glaciers are in alarming retreat and the downstream effects of reduced 
water supply in the driest months will have repercussions that transcend generations. 
Climate feedback systems and environmental cumulative effects are building across 
Earth systems demonstrating behaviours we cannot anticipate.</p>
                            <p class="pLast">The potential for runaway greenhouse warming is real and has never been more 
present. The most dangerous climate changes may still be avoided if we transform 
our hydrocarbon based energy systems and if we initiate rational and adequately 
financed adaptation programmes to forestall disasters and migrations 
at unprecedented scales. The tools are available, but they must be applied 
immediately and aggressively.
</p>
                               </div>
                               <!--contlistBottom e-->
                            
                          </div>
                          <!--contlist e--> 
                      
                      <h3><a href="#t2" class="tab tab2">Overview</a></h3>
                        <div class="contlist">
                          
                          <div class="contlistTop">
                          <img src="images/content1/bar.png" alt="">
                            <p>In its Climate Change sub-programme, 
UNEP works with countriesto strengthen their 
ability to adapt to climate change, move towards 
low-carbon societies, improve understanding of climate science, 
and raise public awareness of the Earth’s changing climate. </p>
                          </div>
                          <!--contlistTop e-->
                          
                          <div class="contlistBottom">
                            <img class="bottomImage" src="images/content1/rainforest.jpg" alt="rainforest">
                            <p>The sub-programme is closely aligned with the Green Economy 
Initiative, which promotes cleaner investments and technologies 
as opportunities to reduce emissions, protect our planet’s 
biodiversity and ecosystems, and alleviate poverty through 
green job creation.</p>
<p>All of UNEP’s work on climate change is shaped by
the negotiations process of the United Nations Framework Convention on 
Climate Change (UNFCCC). While negotiations continue towards 
reaching a legally binding agreement,
the UNFCCC meeting in Copenhagen in 2009 has signaled the 
importance of immediate actions and the need to support developing 
countries in their mitigation and adaptation efforts. 
UNEP’s sub-programme will provide these critical support services, and will 
also help countries prepare for and participate in the Cancun climate 
talks in November 2010.</p>
<p>In line with these actions, UNEP is scaling up its role and response to 
climate change under a new action plan that complements the Programme 
of Work for 2010-11. Three priorities have been identi ed as lead areas 
that match calls for international guidance, the urgent need for 
action at a national level on climate change and the organization’s skill set, 
experience and mandate: Ecosystem Based Adaptation, REDD+ and Clean Tech.</p>

                          </div>
                          <!--contlistBottom e-->

                        </div>
                        <!--contlist e-->
                



                     </div>
                     <!--tab e-->
                    
                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
        
        
        
        
<? include "../common/subfoot.php" ?>

</body>
</html>
