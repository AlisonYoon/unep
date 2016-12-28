<?

    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_DEPRECATED);

    $connect=mysql_connect( "localhost", "alisonyo", "Bonbadak1") or  
        die( "SQL server에 연결할 수 없습니다."); 

    mysql_select_db("alisonyo_db",$connect);
?>
