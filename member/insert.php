<meta charset="utf-8">
<?
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

   $hp = $hp1."-".$hp2."-".$hp3; //010-1111-1111
   $email = $email1."@".$email2; //sss@dddd.ddd

   $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장
   $ip = $REMOTE_ADDR;         // 방문자의 IP 주소를 저장

   include "../common/dbconn.php";       // dconn.php 파일을 불러옴

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result); // 검색된 레코드개수

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.');
             history.go(-1);
           </script>
         ");
         exit;
   }
   else //중복 아이디가 존재하지 않으면 ...
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into member(id, pass, name, nick, hp, email, regist_day, level) ";
		$sql .= "values('$id', password('$pass'), '$name', '$nick', '$hp', '$email', '$regist_day', 9)"; //'$pass'라고 그냥쓰면 암호화안되서 저장됨

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
   }

   mysql_close();                // DB 연결 끊기
   echo "
	   <script>
	     location.href='../index.php';
	   </script>
	"; //또는 로그인 페이지로 넘어가게 해줘도 됨. location.href='../top_login.php';
 
?>

   
