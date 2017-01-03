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
<title>Disasters & Conflicts :: UNEP's Activities</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub3common.css" type="text/css" rel="stylesheet">
<link href="css/sub3_content2.css" type="text/css" rel="stylesheet">

<!--script-->
 <script src="common/js/jquery-1.8.3.min.js" type="text/javascript"></script>  
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


            
             <? $_GET['num']=2;
            include "common/leftnav.php" ?>

              <div id="content">
                <div class="titleArea">
                  <h2>UNEP's Activities</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>UNEP supports countries in the aftermath of a disaster or conflict</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                	
                 <h4>Risk Reduction</h4>
                 <p>Risk Reduction: Reducing vulnerability to natural and technological hazards; 
raising awareness of environmental risks; and supporting countries 
to integrate the environment into their risk reduction policies and action. 
UNEP works to prevent and reduce the impacts of natural hazards, 
industrial accidents and conflicts on vulnerable communities and countries 
through sustainable natural resource management. </p>
                  
                      
                    <div class="frame">
                      <div class="slidee">
                      <ul>
                        <li><img src="images/content2/firstScroll.jpg" alt="">
                        <p>Since the start of the new millennium the world has witnessed 
  over 40 major conflicts and some 2,500 disasters. </p></li>
                    
                      <li>
                      <img src="images/content2/secondScroll.jpg" alt="">
                      <p>Over two billion people have been affected and millions have lost their lives.</p>
                      </li>
                      <li>
                      <img src="images/content2/thirdScroll.jpg" alt="">
                      <p>UN Environment is working around the world to respond to these crisis, supporting more than 40 crisis-affected countries since 1999.</p>
                      </li>
                      <li>
                      <img src="images/content2/forthScroll.jpg" alt="">
                      <p>Through its work in risk reduction, preparedness, response and recovery, UN Environment delivers environmental expertise to national governments, civil society and partners in the United Nations family.</p>
                        </li>
                      </ul>
                      </div>
                      <!--slidee e-->
                    </div>
                    <!--frame e-->

                  <div class="contentBottom">
                    <h4>In focus: Ecosystem-based Disaster Risk Reduction</h4>
                    <p>Disasters do not occur by accident ? they are a result of the combined 
effects of hazards and vulnerable conditions. Disasters undermine hard-earned 
development gains and limit development achievements for future generations, 
with climate change expected to exacerbate the impacts of disasters globally.  
The degradation of ecosystems ? such as forests, wetlands, 
coastal and marine systems, and drylands - is now widely understood as a major 
driver of disaster risk and a key component of disaster vulnerability.  
For example, deforested slopes can cause more landslides, while reclaimed wetlands 
can worsen flooding.disasters on vulnerable communities and countries through 
improved ecosystems management. With its solid technical expertise and direct field experience, 
UNEP integrates an ecosystem-based disaster risk reduction (Eco-DRR) approach into 
development and climate change adaptation strategies.
UNEP is a signatory party to the Sendai Framework for Disaster Risk Reduction 2015-2030 and 
accelerates its implementation through evidence-based advocacy, capacity development, 
partnerships, and field-testing of innovative Eco-DRR solutions that promote sustainable 
and resilient development.
 </p>
                  </div>
                  <!--contentBottom e-->
            

                    

                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
     <? include "../common/subfoot.php" ?>
</body>
</html>

