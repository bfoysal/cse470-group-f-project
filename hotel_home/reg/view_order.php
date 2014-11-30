<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>HOTEL DE LA PACIFIC</title>
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="../index.php">
                    <strong>&laquo; Go Back: </strong>HOTEL DE LA PACIFIC
                </a>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
				<img src="../images/ourlogo.png"/>
                <h1>View Your Bookings @ <span>HOTEL DE LA PACIFIC</span></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form" style="width: 470px;">
						<h4 class="small-title" align="center"><strong>Room Reservation</strong></h4><br>
						<div>
						<table>
							<thead>
								<tr>
									<th>Room No.&nbsp;</th>
									<th>Type&nbsp;</th>
									<th>Check in&nbsp;</th>
									<th>Check in&nbsp;</th>
									<th>Status&nbsp;</th>
									<th>Price&nbsp;</th>
									<th>Remove&nbsp;</th>
								</tr>
							</thead>
							<tbody>
							<?PHP 
								session_start();
								$cust_id=$_SESSION['session_cust_id'];
								require_once '../config.php';
								$sql=mysql_query("SELECT * FROM rooms INNER JOIN room_price ON rooms.type=room_price.room_type WHERE cust_id='$cust_id'");
								$numrows=mysql_num_rows($sql);	
								if($numrows!=0){
									$total_price=0;
									while($row=mysql_fetch_assoc($sql)){
										$room_no=$row['room_no'];
										$type=$row['type'];
										$check_in=$row['check_in'];
										$check_out=$row['check_out'];
										$status=$row['status'];
										$price=$row['room_price'];
										$total_price+=$price;
										$set=false;
										if($status=='filled'){
											$set=true;
										}
										echo'<tr>
											<td>'.$room_no.' &nbsp;</td>
											<td>'.$type.' &nbsp;</td>
											<td>'.$check_in.' &nbsp;</td>
											<td>'.$check_out.' &nbsp;</td>
											<td>'.$status.' &nbsp;</td>
											<td>'.$price.' &nbsp;</td>
											<td><a href="../delete_order.php?room_no='.$room_no.'"><img src="images/action_delete.gif"></a></td>
										</tr>';
									}
								}else {
									echo "<tr><td><br> No Booking!</td></tr>";
								}
							?>
							</tbody>
						</table>
						<table>
							<tr>
								<td> Total Price: &nbsp;</td>		
								<td>
									<?PHP echo $total_price;
									if($set==true) {
										echo 'Your account info has been verified! You can pay now!!';
									}
									?> &nbsp;
								</td>
							</tr>
						</table>	
						</div>
						</div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>