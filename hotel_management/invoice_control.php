<?PHP
$cust_id=$_GET['cust_id'];
echo $cust_id;
require_once 'config.php';

$sql=mysql_query("SELECT * FROM rooms INNER JOIN room_price ON rooms.type=room_price.room_type WHERE cust_id='$cust_id' AND status <> 'Booked'");
if(!$sql){ 
	echo die(mysql_error());
}
$numrows=mysql_num_rows($sql);	
if($numrows!=0){
	$total_price='';
	while($row=mysql_fetch_assoc($sql)){
		$price=$row['room_price'];
		$total_price+=$price;
	}
	$date = date("m/d/Y");
	header("Location: invoice.php?date=$date&cust_id=$cust_id"); 
//	$sql=mysql_query("INSERT INTO bill VALUES(null, '$date', '$total_price', '$cust_id')");
//	if(!$sql){ 
//		echo die(mysql_error());
//	}
}else{
	echo 'not found';
}
?>