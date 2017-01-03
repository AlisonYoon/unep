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
                    <li class="topMenuEcosystemManagement"><a href="sub3_1.php">Introduction</a></li>
                    <li class="topMenuWhatWeDo"><a href="sub3_2.php">UNEP's Activities</a></li>
                    <li class="topMenuEvents"><a href="sub3_3.php">Partners</a></li>
                  </ul>
              </div>
                <!--topMenu e-->