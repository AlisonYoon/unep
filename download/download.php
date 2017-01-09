<? session_start();?>
<?
    @extract($_POST);
    @extract($_GET);
    @extract($_SESSION);

    //table=$table
    //num=$num
    //real_name=$real_name =>2016_12_28_13_07_0.jpg
    //show_name=$show_name => a1.jpg
    //file_type=$real_type

	if(!$userid) {
		echo("
		<script>
	     window.alert('Please sign in')
	     history.go(-1)
	   </script>
		");
		exit;
	}
    $file_path = "./data/".$real_name;
    // ./data/2016_12_28_13_07_0.jpg

    if( file_exists($file_path) )
        //파일이 실제 존재하는지 처리
    { 
		   $fp = fopen($file_path,"rb"); 
            //fopen(파일의 경로와 파일명, 모드 /r=읽기 b=이진)

           if( $file_type ) 
           { 
				Header("Content-type: application/x-msdownload"); 
                Header("Content-Length: ".filesize($file_path));     
                Header("Content-Disposition: attachment; filename=$show_name");   
                Header("Content-Transfer-Encoding: binary"); 
				Header("Content-Description: File Transfer"); 

                header("Expires: 0"); 
            } 
            else 
            { 
                if(eregi("(MSIE 5.0|MSIE 5.1|MSIE 5.5|MSIE 6.0)", $HTTP_USER_AGENT)) 
                { 
                    Header("Content-type: application/octet-stream"); 
                    Header("Content-Length: ".filesize($file_path));     
                    Header("Content-Disposition: attachment; filename=$show_name");   
                    Header("Content-Transfer-Encoding: binary");   
                    Header("Expires: 0");   
                 } 
                 else 
                 { 
                    Header("Content-type: file/unknown");     
                    Header("Content-Length: ".filesize($file_path)); 
                    Header("Content-Disposition: attachment; filename=$show_name"); 
                    Header("Content-Description: PHP3 Generated Data"); 
                    Header("Expires: 0"); 
                 } 
             } 

			if(!fpassthru($fp)) //fpassthru =>가 파일 다운로드 시켜주는 것. $fp가 파일 경로를 알려주는 
				fclose($fp); 
	}
?>

  
