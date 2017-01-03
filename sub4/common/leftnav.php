			<script type="text/javascript">
                  $(document).ready(function() {
                      var num = '<?=$_GET['num']?>';
                      
                      if(num==1){
                          $('.topMenu .topMenuEcosystemManagement a').addClass('current');
                      }else if(num==2){
                          $('.topMenu .topMenuWhatWeDo a').addClass('current');
                      }else if(num==3){
                          $('.topMenu .topMenuEvents a').addClass('current');
                      }
                   });
            </script>
                        
         
              <div class="topMenu">

                  <ul>
                    <li class="topMenuEcosystemManagement"><a href="sub4_1.php">About Ecosystem</a></li>
                    <li class="topMenuWhatWeDo"><a href="sub4_2.php">What We Do</a></li>
                    <li class="topMenuEvents"><a href="sub4_3.php">Events</a></li>
                  </ul>
              </div>
                <!--topMenu e-->