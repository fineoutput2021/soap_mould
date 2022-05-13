<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Delivered</title>
</head>
<body style="font-family: sans-serif;">

	<div style="width:100%">
		<!-- <div style="display: flex;">
			<h3>Order</h3>
		</div> -->
		<div>
			<p>Hi <?php echo $name; ?>,</p>
			<p>We have successfully delivered your order!</p>
			<p>Here are the details of delivered order placed on Date:</p>
													 <? $newdate = new DateTime($date);?>
			<h2 style="color: #ff700a;">[Order ID - <?php echo $order1_id; ?>] (<?php echo  $newdate->format('F j, Y'); ?>)</h2>
		</div>
		<div>
			<div style="margin-top: 10px;width:100%;">
				<p>Thank you for ordering with us, </p>
				<p>Team Soap Mould</p>
				<p>Stay Safe, Stay Aromatic</p>
				<p><b>For any support,</b> free to email us at <a href="#">connect@soapmould.com</a> or ring us on +919620986386</p>
			</div>
		</div>

	</div>

</body>
</html>
