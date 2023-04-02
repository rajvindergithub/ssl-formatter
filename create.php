<?php

if($_POST['fileType']){
    
    $cer = $_POST; 
    
    $cerType = $cer['fileType'];   
    $cerText = $cer['certificateText'];   
    
//    echo $cerType; 
//    echo $cerText; 
    
    
    
    $myfile = fopen("certificate.$cerType", "w") or die("Unable to open file!");
    $txt = $cerType;
    fwrite($myfile, $txt);
//    $txt = "Jane Doe\n";
//    fwrite($myfile, $txt);
    fclose($myfile);
    
    
}

?>