<?php 

if($_POST['hobby']){
$array=$_POST['hobby'];
foreach($array as $hobby){
    if($strlen($hobby)>0){
        $sql = mysql_query("insert into tabla_name(hobby)values('$hobby')");
    }
}
}

?>