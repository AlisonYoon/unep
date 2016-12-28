
	<div id="skipNav">

    	<a href="#content">Skip to Contents</a>

        <a href="#nav">Skip to Navigation</a>

	</div>

    <div id="wrap">

		<div id="header">


			
       		<h1 class="logo">

           <a href="index.html">United Nations Environment Programme</a>

            </h1>

            <!-- logo e -->

        	<div id="nav">

            	<h2 class="hidden">Global Navigation Area</h2>

                <ul>

                  <li class="navFirst"><a class="nav0" href="#">About</a></li>

                  <li><a class="nav1" href="#">Climate Change</a></li>

                  <li class="navRight"><a class="nav2" href="#">Disasters &amp;<br/> Conflicts</a></li>

                  <li class="navEcosystem"><a class="nav3" href="#">Ecosystem<br/> Management</a></li>

                  <li class="chemicals"><a class="nav4" href="#">Chemicals &amp;<br/> Waste</a></li>

                  <li class="navRight"><a class="nav5" href="#">Resource<br/> Efficiency</a></li>

                </ul>

        	</div>

            <!-- nav e-->

          <div id="gnb">
            <ul class="menuList">
              <li class="depth1">
                <ul>
                  <li><a href="sub1/sub1_1.php">About</a></li>
                  <li><a href="sub1/sub1_2.php">Leadership</a></li>
                  <li><a href="sub1/sub1_3.php">Contact Us</a></li>
                </ul>
              </li>
              <li class="depth1">
                <ul>
                  <li><a href="sub2/sub2_1.php">Introduction</a></li>
                  <li><a href="sub2/sub2_2.php">REDD+</a></li>
                  <li><a href="sub2/sub2_3.php">Outreach</a></li>
                </ul>
              </li>
              <li class="depth1">
                <ul>
                  <li><a href="sub3/sub3_1.php">Introduction</a></li>
                  <li><a href="sub3/sub3_2.php">UNEP's Activities</a></li>
                  <li><a href="sub3/sub3_3.php">Partners</a></li>
                </ul>
              </li>
              <li class="depth1">
                <ul>
                  <li><a href="sub4/sub4_1.php">About Ecosystem</a></li>
                  <li><a href="sub4/sub4_2.php">What We Do</a></li>
                  <li><a href="sub4/sub4_3.php">Events</a></li>
                </ul>
              </li>
              <li class="depth1">
                <ul>
                  <li><a href="sub5/sub5_1.php">Scope</a></li>
                  <li><a href="sub5/sub5_1.php">Mainstreaming</a></li>
                  <li><a href="sub5/sub5_1.php">SAICM</a></li>
                </ul>
              </li>
              <li class="depth1">
                <ul>
                  <li><a href="sub6/sub6_1.php">What is SCP?</a></li>
                  <li class="menuLastItem"><a href="sub6/sub6_1.php">News and<br/>Press Releases</a></li>
                </ul>
              </li>
            </ul>
          <a class="closeBtn" href="">close</a>
          </div>
          <!--gnb e-->

        	<div class="headerRight">

            <ul>

            	<?
    if(!$userid) //로그인 안됐을때
	{
?>
            	<li class="signIn"><a href="login/login_form.php">Sign In</a></li>

            	<li><a href="member/member_form.php">Join</a></li>
                <?
	}
	else //로그인됐을때
	{
?>

                <li class="signIn"><a href="login/logout.php">Sign Out</a></li>

            	<li><a href="login/member_form_modify.php">My Page</a></li>
                
                <?
	}
?>

            </ul>

        	</div>

            <!-- headerRight e-->

        </div>

        <!--header e-->