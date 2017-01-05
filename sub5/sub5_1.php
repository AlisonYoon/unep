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
<title>Chemicals & Waste::Scope</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub5common.css" type="text/css" rel="stylesheet">
<link href="css/sub5_content1.css" type="text/css" rel="stylesheet">


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
<!--[if IE9]>  
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
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
                  <h2>Scope</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                	<p>Scope of the Chemicals and Waste Subprogramme</p>
                </div>
                <!--divider e-->

                <div class="contentArea">
                  <article>
                    <section class="textTop">
                    <p>Both chemicals and waste play critical roles in today’s society and economy. 
At the same time they have major impacts on our environment and human health. 
De facto, many chemical substances are harmful to people and their environment 
while many forms of waste result hazardous and pose dangers to our 
lives and the nature surrounding us.</p>
                    </section>
                    <!--textTop e-->
                    <img src="images/content1/text2.jpg" alt="">
                    <section class="text2">
                      <p>To address this urgent issue and provide mainstream solutions, UNEP - 
also as an implementing GEF agency - is working closely with governments, 
industries, and civil society organizations. In doing so, 
UNEP and its partners focus on achieving the World Summit on Sustainable 
Development (WSSD) goal that by 2020 chemicals are used and produced in ways 
that lead to the minimization of significant adverse effects on human health and 
the environment. In this way, countries, businesses and other stakeholders are 
supported improving their capacity to manage chemicals and waste soundly 
throughout their life-cycles. This is achieved by jointly developing policy instruments, 
including regulatory frameworks, and providing scientific and technical knowledge 
and tools needed to ensure a successful transition among countries towards 
sound management of chemicals and waste in order to minimize impact on the 
environment and human well-being.</p>
                    </section>
                    <!--text2 e-->
                    <script language="javascript" src="js/content1/caption.js" type="text/javascript"></script>

                    <section class="caption">
                      <div class="boxgrid">
                       <img src="images/content1/caption.jpg" alt="Learn about donation" />
                        <dl class="boxcaption">
                            <dt>To make this happen,</dt>
                            <dd>UNEP’s Subprogramme on Chemicals 
                and Waste* is implementing a threefold, 
                results-based management strategy targeting 
                the following Expected Accomplishments 
                as part of its Programme Framework for 
                2014-2017 and Programme of Work for 
                the biennium 2014-2015:
                            </dd>
                        </dl>
                   </div>
                   <!--boxgrid e-->
                    </section>
                    <!--caption e--> 

                    <section class="text3">
                      <p>Institutional Capacity and Policy Instruments: to increase the institutional capacity 
and policy instruments of countries to manage chemicals and waste soundly, 
including the implementation of related provisions in the MEAs;
Scientific and Technical Knowledge and Tools for Sound Chemicals 
Management: to increase the use of scientific and technical knowledge and 
tools by countries, major groups and stakeholders, needed to implement 
sound chemicals management and the related MEAs;
Scientific and Technical Knowledge and Tools for Sound Waste Management: 
to increase the use of scientific and technical knowledge and tools by 
countries, major groups and stakeholders, needed to implement sound 
waste management and the related MEAs;
*In previous years, the Subprogramme on Chemicals and Waste was known 
as the Subprogramme on Harmful Substances and Hazardous Waste.</p>
                    </section>
                    <!--.text3 e-->


                  </article>        	
                    
                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
              
  <? include "../common/subfoot.php" ?>

</body>
</html>

