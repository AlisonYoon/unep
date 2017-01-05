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
<title>Chemicals & Waste::SAICM</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub5common.css" type="text/css" rel="stylesheet">
<link href="css/sub5_content3.css" type="text/css" rel="stylesheet">


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


               <? $_GET['num']=3;
            include "common/leftnav.php" ?>

              <div id="content">
                <div class="titleArea">
                  <h2>SAICM</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>The Strategic Approach to International Chemicals Management</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                  <div class="contentTop">
                     <h3>Introducing SAICM</h3>
                     <p>The consumption of chemicals by all industries and modern society’s 
reliance on chemicals for virtually all manufacturing processes make 
chemicals production one of the major and most globalized sectors of the 
world economy. Acknowledgement of the essential economic role of 
chemicals and their contribution to improved living standards needs to be 
balanced with recognition of potential costs. These include the chemical industry’s 
heavy use of water and energy and the potential adverse impacts of chemicals 
on the environment and human health. The diversity and potential severity of 
such impacts makes sound chemicals management a key cross-cutting issue 
for sustainable development.</p>
                </div>
                <!--contentTop e-->

                <div class="contentMiddle">
                 <img src="images/content3/saicm.jpg" alt="">
                 <p class="texthighlight">The Strategic Approach to International 
Chemicals Management (SAICM) 
is a policy framework to promote 
chemical safety around the world. </p>
 <img class="quote" src="images/content3/quote.png" alt="">
                 <p>SAICM has as its overall objective the achievement of the sound management of 
chemicals throughout their life cycle so that, by 2020, chemicals are produced 
and used in ways that minimize significant adverse impacts on human health 
and the environment. This “2020 goal” was adopted by the World Summit on
 Sustainable Development in 2002 as part of the Johannesburg Plan of Implementation.</p>


                </div>
                <!--contentMiddle e-->

                <figure>
                  <img src="images/content3/saicm3.jpg" alt="">
                <figcaption>Mar 2016 Jacob Duer, interim secretariat of the Minamata Convention</figcaption>
                </figure>
        
                <p>SAICM is distinguished by its comprehensive scope; ambitious “2020” goal for sound 
chemicals management; multi-stakeholder and multi-sectoral character; endorsement 
at the highest political levels; emphasis on chemical safety as a sustainable issue; 
provision for resource mobilization; and formal endorsement or recognition by the 
governing bodies of key intergovernmental organizations.
SAICM comprises the Dubai Declaration on International Chemicals Management, 
expressing high-level political commitment to SAICM, and an Overarching Policy 
Strategy which sets out its scope, needs, objectives, financial considerations 
underlying principles and approaches and implementation and review arrangements. 
Objectives are grouped under five themes: risk reduction; knowledge and information; 
governance; capacity-building and technical cooperation; and illegal international traffic.
</p>
              
              <div class="hoverArea">
              <p>The Declaration and Strategy are accompanied by a 
Global Plan of Action that serves as a working tool 
and guidance document to support implementation of 
SAICM and other relevant international instruments 
and initiatives. 
Activities in the plan are to be implemented, as 
appropriate, by stakeholders, according to their applicability.<p>
              <img class="hintarrow" src="images/content3/hintarrow.png" alt="">
              <img class="curtain" src="images/content3/saicm2.jpg" alt="">
              </div>
              <!--hoverArea e-->

                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
       
        
        
        
        
        
        
    <? include "../common/subfoot.php" ?>

</body>
</html>

