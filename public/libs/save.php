<?php
$mysqli = new mysqli("localhost","root","","testing1");
if($mysqli-> connect_error)
	die("database connection fail".$mysql->connect_error);
$query = "insert into parent (fname,Lname) values('".$_POST['fir']."','".$_POST['las']."')";
if($mysqli->query($query)){
	$id = $mysqli->insert_id;
	$cquery ="";
	$count = count($_POST['cfirstname']);
	for($i=0;$i<$count;$i++){
	$cquery .= "insert into child(parent_id,fname,lname,age) values(".$id.",'".$_POST['cfirstname'][$i]."','".$_POST['clastname'][$i]."','".$_POST['cage'][$i]."');";
	}
if($mysqli->multi_query($cquery))
echo "record save";
else 
	echo "shirt detail fail to save";
}
else{
echo "person detail fail to save";
}
	
	?>