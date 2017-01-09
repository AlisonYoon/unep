<?
           session_start();
?>
<meta charset="utf-8">
<?
   @extract($_GET); 
  @extract($_POST); 
  @extract($_SESSTION); 
   // 이전화면에서 이름이 입력되지 않았으면 "이름을 입력하세요"
   // 메시지 출력
   // $id=>입력id값    $pass=>입력 pass
   
  

   if(!$id) {   //아무값도 입력되지 않았냐?
     echo("
           <script>
             window.alert('Your ID, again?');
             history.go(-1);
           </script>
         ");
         exit;
   }

   if(!$pass) {
     echo("
           <script>
             window.alert('Password please');
             history.go(-1);
           </script>
         ");
         exit;
   }

 

   include "../common/dbconn.php"; //db연결

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);

   $num_match = mysql_num_rows($result); //검색 레코드 개수

   if(!$num_match) //검색레코드가 없으면
   {
     echo("
           <script>
             window.alert('I\'m afraid I don\'t recognize your ID');
             history.go(-1);
           </script>
         ");
    }
    else    //해당 아이디가 검색되었으면..
    {
		 $row = mysql_fetch_array($result); 
        //$row[id], $row[pass]...$row[level]
        
         $sql ="select * from member where id='$id' and pass=password('$pass')"; //입력된 패스워드를 암호화시켜서 db의 값과 비
         $result = mysql_query($sql, $connect);
         $num_match = mysql_num_rows($result);
     
  

        if(!$num_match)  //적은 패스워드와 디비 패스워드가 같지않을때
        {
           echo("
              <script>
                window.alert('Sorry, please try again');
                history.go(-1);
              </script>
           ");

           exit;
        }
        else    // 입력 pass 와 테이블에 저장된 pass 일치한다.
        {
           $userid = $row[id];
		   $username = $row[name];
		   $usernick = $row[nick];
		   $userlevel = $row[level];
  
  
           $_SESSION['userid'] = $userid;//$_SESSION['userid'] = $row[id];
           $_SESSION['username'] = $username;//$_SESSION['username'] = $row[name];
           $_SESSION['usernick'] = $usernick;//$_SESSION['usernick'] = $row[nick];
           $_SESSION['userlevel'] = $userlevel;//$_SESSION['userlevel'] = $row[level];

           echo("
              <script>
			    alert('Welcome back!');
                location.href = '../index.php';
              </script>
           ");
        }
   }          
?>
