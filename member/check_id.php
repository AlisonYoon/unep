<meta charset="utf-8">
<?
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

   if(!$id) 
   {
      echo("Which ID would you like?");
   }
   else
   {
      include "../lib/dbconn.php";
 
      $sql = "select * from member where id='$id' ";
      $result = mysql_query($sql, $connect);
      $num_record = mysql_num_rows($result);
     
      if ($num_record)
      {
       
         echo "<span style='color:red'>Ugh oh, it seems like it's already taken</span>";
      }
      else
      {
         echo "<span style='color:green'>It works!</span>";
      }
    
 
      mysql_close();
   }
?>

