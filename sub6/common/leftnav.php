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
                    <li class="topMenuEcosystemManagement"><a href="sub6_1.php">What is SCP?</a></li>
                    <li class="topMenuWhatWeDo"><a href="sub6_2.php">News and Press Releases</a></li>
                    <li class="topMenuEvents"><a href="sub6_3.php">Latest</a></li>
                  </ul>
              </div>
                <!--topMenu e-->