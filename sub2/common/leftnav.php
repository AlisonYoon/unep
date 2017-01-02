			<script type="text/javascript">
                  $(document).ready(function() {
                      var num = '<?=$_GET['num']?>';
                      
                      if(num==1){
                          $('.topMenu .topMenuClimatechange a').addClass('current');
                      }else if(num==2){
                          $('.topMenu .topMenuRedd a').addClass('current');
                      }else if(num==3){
                          $('.topMenu .topMenuOutreach a').addClass('current');
                      }
                   });
            </script>
                        
           <div class="topMenu">

                  <ul>
                    <li class="topMenuClimatechange"><a href="sub2_1.php">Introduction</a></li>
                    <li class="topMenuRedd"><a href="sub2_2.php">REDD+</a></li>
                    <li class="topMenuOutreach"><a href="sub2_3.php">Outreach</a></li>
                  </ul>
              </div>
                <!--topMenu e-->