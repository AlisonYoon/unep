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
                    <li class="topMenuEcosystemManagement"><a href="sub5_1.php">Scope</a></li>
                    <li class="topMenuWhatWeDo"><a href="sub5_2.php">Mainstreaming</a></li>
                    <li class="topMenuEvents"><a href="sub5_3.php">SAICM</a></li>
                  </ul>
              </div>
                <!--topMenu e-->