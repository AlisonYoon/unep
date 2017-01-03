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
<title>Ecosystem Management::Ecosystem Management</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub4common.css" type="text/css" rel="stylesheet">
<link href="css/sub4_content1.css" type="text/css" rel="stylesheet">


<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,1y00i,300,400,500" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
}
</style>

<script src="common/js/jquery-1.8.3.min.js" type="text/javascript" ></script>
<script src="js/content1/tab.js" type="text/javascript" ></script>
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

			  <? $_GET['num']=1;
            include "common/leftnav.php" ?>


              <div id="content">
                <div class="titleArea">
                  <h2>Ecosystem Management</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>About ecosystems</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                	<div class="contentTop">
                    	<p>Humans depend on healthy and productive ecosystems to meet 
their basic needs, but many people’s needs are not being met 
sustainably – if at all. An estimated 795 million people suffer 
from hunger and 1.2 billion live in water-stressed areas. <br>
At the same time, biodiversity loss and ecosystem degradation 
are expected to continue, or even accelerate. <br>
The demand for ecosystem goods and services is 
predicted to further increase: by 2030, the world will require 
40% more water, 50% more food, 40% more energy 
and 40% more timber and fibre. 
This demand can only be met if ecosystems are sustainably 
managed to meet both ecological and human needs in the future.</p>
                    </div>
                    <!--contentTop e--> 
                    <div class="contentMiddle">
                    	<img src="images/content1/contentTop1.jpg" alt="">
                        <div class="textArea">
                        <h3>What is an Ecosystem?</h3>
                        <p>An ecosystem is a dynamic complex of plant, animal and 
microorganism communities and their nonliving environment 
interacting as a functional unit.
An ecosystem includes all living things (plants, animals and 
organisms) in a given area, as well as their interactions 
with each other, and with their non-living environments 
(weather, earth, sun, soil, climate, atmosphere). 
Each organism in an ecosystem has a role to play and 
contributes to maintaining the health and productivity 
of an ecosystem.
Ecosystems promote human well-being through the 
various services they provide.
Human well-being depends on the health of the 
ecosystems that envelope and sustain us. We rely on 
ecosystems for the food, water and timber we need for 
everyday living. We depend on ecosystem processes 
to regulate natural cycles and keep diseases at bay. 
We rely on them for recreation, educational purposes 
and mental and physical enrichment.</p>
						</div>
                    
                    <img src="images/content1/contentTop2.jpg" alt="">
                    
                    <div class="textArea">
                    <h3>What is an integrated approach to 
ecosystem management?</h3>
					<p>An ecosystem is a dynamic complex of plant, animal and 
microorganism communities and their nonliving environment 
interacting as a functional unit.
An ecosystem includes all living things (plants, animals and 
organisms) in a given area, as well as their interactions 
with each other, and with their non-living environments 
(weather, earth, sun, soil, climate, atmosphere). 
Each organism in an ecosystem has a role to play and 
contributes to maintaining the health and productivity 
of an ecosystem.
Ecosystems promote human well-being through the 
various services they provide.
Human well-being depends on the health of the 
ecosystems that envelope and sustain us. We rely on 
ecosystems for the food, water and timber we need for 
everyday living. We depend on ecosystem processes 
to regulate natural cycles and keep diseases at bay. 
We rely on them for recreation, educational purposes 
and mental and physical enrichment.</p>
						</div>
						<!--textArea e-->
                    </div>
                    
                    <!--contentMiddle e-->
                    
                    <div class="bottomTop">
                     <p>UNEP fosters the transition towards integrated and 
multi-dimensional ecosystem management by strengthening 
six of the key building blocks for ensuring that ecosystem 
management delivers on all our needs as well as 
those of future generations.</p>
                    </div>
                    <!--textArea e-->
                    <div class="contentBottom">
                       <ul class="tabbtn">
                         <li class="tab1"><a class="tab btn1" href="#1">70%</a></li>
                         <li class="tab2"><a class="tab btn2" href="#2">2.5%</a></li>
                         <li class="tab3"><a class="tab btn3" href="#3">25%</a></li>
                         <li class="tab4"><a class="tab btn4" href="#4">80%</a></li>
                         <li class="tab5"><a class="tab btn5" href="#5">30%</a></li>
                       </ul>
                    	
                        <ul>
                        	<li class="contlist">70% of the planet is covered by water</li>
                        	<li class="contlist">2.5% of the planet’s water is freshwater</li>
                        	<li class="contlist">25% of land area is rangeland</li>
                        	<li class="contlist">80% of terrestrial biodiversity is in forests</li>
                        	<li class="contlist">Less than 30% of terrestrial areas are forested </li>
                        </ul>
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

