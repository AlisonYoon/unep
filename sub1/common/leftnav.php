			<script type="text/javascript">
                  $(document).ready(function() {
                      var num = '<?=$_GET['num']?>';
                      
                      if(num==1){
                          $('.topMenu .topMenuAbout a').addClass('current');
                      }else if(num==2){
                          $('.topMenu .topMenuLeadership a').addClass('current');
                      }else if(num==3){
                          $('.topMenu .topMenuContact a').addClass('current');
                      }
                   });
            </script>
                        
            <div class="topMenu">

            	<ul>
            	  <li class="topMenuAbout"><a href="sub1_1.php">About</a></li>
            	  <li class="topMenuLeadership"><a href="sub1_2.php">Leadership</a></li>
            	  <li class="topMenuContact"><a href="sub1_3.php">Contact</a></li>
            	</ul>


            </div>
            <!--topMenu e-->