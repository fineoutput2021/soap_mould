<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order Success</title>
</head>
<body style="font-family: sans-serif;">

	<div style="width:100%">
		<!-- <div style="display: flex;">
			<h3>Order</h3>
		</div> -->
		<div>
			<p>Hi <?php echo $name; ?>,</p>
			<p>Welcome to Soap Mould family!</p>
			<p>Here are the details of your order placed on Date:</p>
													 <? $newdate = new DateTime($date);?>
			<h2 style="color: #ff700a;">[Order ID - <?php echo $order1_id; ?>] (<?php echo  $newdate->format('F j, Y'); ?>)</h2>
		</div>
		<div>
			<table style="border: 1px solid lightgrey; border-collapse: collapse;width: 100%;text-align: left;">
				<tr style="border: 1px solid lightgrey; border-collapse: collapse;text-align: left;">
					<th style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;">Product</th>
					<th style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;">Quantity</th>
					<th style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;">Price</th>
				</tr>
				<?
      			$this->db->select('*');
$this->db->from('tbl_order2');
$this->db->where('main_id',$order1_id);
$order_tbl= $this->db->get();
$sub_total=0;
				?>
				<?php foreach ($order_tbl->result() as $order) {
					$this->db->select('*');
					$this->db->from('tbl_type');
					$this->db->where('id',$order->type_id);
					$product= $this->db->get()->row();
					$pname=$product->name;
					$total_amt=$order->total_amount;

			?>
				<tr style="border: 1px solid lightgrey; border-collapse: collapse;">
					<td style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;"><?php echo $pname; ?></td>
					<td style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;"><?php echo $order->quantity; ?></td>
					<td style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;"><b>Rs.</b><?php echo $total_amt; ?></td>
					</tr>
				<?

				$sub_total=$sub_total + $total_amt;
					 } ?>
				<tr style="border: 1px solid lightgrey; border-collapse: collapse;">
					<th colspan="2" style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;">Total:</th>
					<td style="border: 1px solid lightgrey; border-collapse: collapse;padding: 10px;"><b>Rs.</b><?php echo $sub_total; ?></td>
				</tr>

			</table>

			<div style="margin-top: 10px;width:100%;display: flex;border: 1px solid lightgrey;border-collapse: collapse;">
				<div style="width: 100%;border: 1px solid lightgrey;border-collapse: collapse;padding: 10px;">
					<h3 style="color: #ff700a;">Shipping address</h3>
					<?
					      			$this->db->select('*');
					$this->db->from('tbl_order1');
					$this->db->where('id',$order1_id);
					$user_address= $this->db->get()->row();
					$add=$user_address->address;
					$zip=$user_address->pincode;

					?>
					<p><?php echo $name; ?></p>
					<p><?php echo $add; ?></p>
					<p><?php echo $phone; ?></p>
					<p><?php echo $email; ?></p>
				</div>
			</div>

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
