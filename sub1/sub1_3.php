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
<title>About::Contact</title>
<link href="../common/css/common.css" type="text/css" rel="stylesheet">
<link href="common/css/sub1common.css" type="text/css" rel="stylesheet">
<link href="css/sub1_content3.css" type="text/css" rel="stylesheet">


<!--Google Web Fonts-->

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,600|Roboto:100,100i,300,300i,400,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,400,500" rel="stylesheet">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
}
</style>

<!--script-->
<script src="common/js/jquery-1.8.3.min.js"></script>
<script language="javascript" src="../common/js/fullnav.js" type="text/javascript"></script>
<script type="text/javascript" src="../common/js/move-top.js"></script>
<script type="text/javascript" src="../common/js/easing.js"></script>
<script type="text/javascript" src="../common/js/scroll.js"></script>

</head>

<body>
<? include "../common/subhead.php" ?>

     <div class="main">
                  <img src="images/content3/main.jpg" alt="">
        </div>
          <!--main e -->

           <div class="container">


              
             <? $_GET['num']=3;
            include "common/leftnav.php" ?>

              <div id="content">
                <div class="titleArea">
                  <h2>Contact</h2>
                </div>
                <!--titleArea e-->
                <div class="divider">
                </div>
                <!--divider e-->

                <div class="contentArea">
                	<div class="location">
                    	<div class="address">
                        	<p>United Nations Environment Programme
United Nations Avenue, Gigiri
PO Box 30552, 00100
Nairobi, Kenya</p>
							<p>Tel: (254-20) 7621234
</p>
                        </div>
                        <!--address e-->
                        
               <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: -1.233034, lng: 36.815089};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
          zoom: 10
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'UENP Headquarters'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2oZr2gXNE7R6YSZGHSP01iPDEddBQBKY&callback=initMap"
        async defer></script>
                        <!--map e-->
                    </div>
                    <!--location e-->
                    
                    <div class="contactus">
                    	<h3>Contact Us</h3>
                         <ul>
                           <li>
                           	<label class="hidden" for ="edit-submitted-name" >"Name"</label>
                            <input type="text" id="edit-submitted-name" name="submitted[name]" size="50" maxlength="128" placeholder="*Name">
                           </li>
                           <li>
                           <label class="hidden" for ="edit-submitted-email" >"Email"</label>
                            <input type="email" id="edit-submitted-email" name="submitted[email]" size="61" placeholder="*Email">
                           </li>
                           <li>
                           <label class="hidden" for="edit-submitted-message">"Message"</label>
                           <textarea id="edit-submitted-message" name="submitted[message]" cols="60" rows:="rows:""5" placeholder="*Message"></textarea>
                           </li>
                           <li class="quiz">
                           	<div class="quizLeft">
                           		<label for="human">We need to verify you are human *</label>
                          		<span class="quiz-span">How much is 10 - 4?</span>
                               
                           	</div>
                            <!--quizLeft e-->
                              <input class="answer" type="text" id="human" name="human" size="10" placeholder="*Answer">
                           </li>
                           <li>
                           <input type="submit" id="edit-submit" name="op" value="Submit">
                           </li>
                           <li></li>
                         </ul>
                    </div>
                    <!--contactus e-->
                  
                </div>
                <!--contentArea e-->
              </div>
              <!--content e-->

        </div>
        <!--container e-->
        
        
        
        
        
        
        
        
<? include "../common/subfoot.php" ?>

</body>
</html>
