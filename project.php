<?php 


function cesar() {
    $clear_text = "";
    if(isset($_POST['encrypt']))    {
        $origintext = $_REQUEST['origin'];
        $origintext = strtolower($origintext);
        $key = $_REQUEST['key'];
    for($i=0;$i<strlen($origintext);$i++){
        if(preg_match('/[^A-Z]/i',$origintext[$i])){
            $clear_text = $clear_text;
        }else{ 
        $ascii = ord($origintext[$i]);
        $ascii = $ascii - 97;
        $ascii += $key;
       if($ascii > 25){
            $ascii = $ascii - 26 ;
        }
        
        $clear_text = $clear_text.chr($ascii + 97);}
    }
    echo $clear_text;
    }

}
function decesar() {
    if(isset($_POST['decrypt']))    {
        $encrypttext = $_REQUEST['encrypted'];
        $key = $_REQUEST['key'];
        $plain_text="";
    for($i=0;$i<strlen($encrypttext);$i++){
        $ascii = ord($encrypttext[$i]);
        $ascii = $ascii - 97;
        $ascii -= $key;
        if($ascii < 0){
            $ascii = $ascii + 26 ;
        }
        
        $plain_text = $plain_text.chr($ascii + 97);
    }
    echo $plain_text;
    }
    
}
?>