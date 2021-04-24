<!doctype html>

<html>

<head>
   	<title>Order List</title>
    	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<script src="https://kit.fontawesome.com/a10dc5d5d5.js" crossorigin="anonymous"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="OrderStyle.css">
	<script>
		
	</script>
</head>

<!--Container-->
<body>
	<div class = "container">
		<!--header-->
		<!-- Black User banner -->
		<div class="userbanner"> 
			<img id="tiny-logo" src="img/logo.png"/>
			<ul>
				<li><a href="../Shopping%20Cart/ShoppingCart.html"><i class="fas fa-shopping-cart"></i></i> Shopping Cart</a></li>
				<li><a href="../SnackAisle/login.html"><i class="fas fa-user"></i> Login</a></li>
				<li><a href="../SignUp/signup.html"><i class="fas fa-user-plus"></i> Sign up</a></li>
			
			</ul>
		</div>

		<!-- Logo Banner -->
		<div class = "img-banner"><p class="logo">UMM GROCERY</p></div>
		
		<!-- Road Map Banner-->
		<div class="page-header"> BACKSTORE &gt; ORDER LIST</div>
		
		<!--content-->
		<!-- Side Menu-->
		<div class="content">
		<section class = "main">
			<div class="sidemenu">
				<ul>
					<li><a href="../index.html">Home</a></li>
					<li><a href="../index.html">Aisles</a>
					<li><a href="../BackstoreIndex.html">Backstore</a>
						<ul class = "insideside">
							<li><a href="../BackstoreP7P8/Backstore-ProductList.html">Products List</a></li>
							<li><a href="../BackstoreP9P10/UserList.html">Users List</a></li>
							<li><a href="Order_List.php">Orders List</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<section class = "order-list" style = "background-image: url('img/3.png'); background-repeat: no-repeat; background-size: cover;">
				<div class = "list">
					<!--sections-->
					<div>
						<!--<p class = "section-name"></p>-->
						<div>
							<table>
								<tbody>
									<tr>
										<td>Info</td>
										<td>Price per unit</td>
										<td>Ordered Item</td>
										<td>Amount</td>
										<td>Total Price</td>
									</tr>
								</tbody>
								
								<?php
								echo "<th>hello world</th>";
								$get = file_get_contents('orderSaveFile.xml');
								$file = simplexml_load_string($get);
								echo $file->order->keyData->orderDate;
								echo $file->order->keyData->username;
								echo $file->order->items->item->itemName;
								echo $file->order->items->item->itemName;
								$i = 0;
								$order = $file->order;
								$item = $order->items->item;
								echo $item->itemName;
								$price = "";
								$amount = "";
								$item = "";
								$totalPrice = "";
								$delete = "";
								$count = 0;
								$span = 0;
								echo "<th>",$file->order->keyData->orderDate,"</th>";
								
								
								foreach($file->order as $data){
								echo $span;
								$count = 0;
								echo $count;
								echo "<tbody>";
									foreach($data->items->item as $itemData){
										$count++;
										echo "<tr>";
										echo $count;
										if($count == 1){
											echo "<th>",$data->keyData->orderDate,"</th>";
										} else if($count == 2){
											echo '<th><input type = "checkbox">',$data->keyData->username,"</input></th>";
										} else{
											echo "<td></td>";
										}
										echo "<td>",$itemData->pricePerUnit,"</td>";
										echo "<td>",$itemData->itemName,"</td>";
										echo "<td>",$itemData->amount,"</td>";
										if ($count ==1){
											echo '<th id = "f1price">',$data->totalPrice,'</th>';
										}
										
										echo "</tr>";
									}
									
								echo "</tbody>";
								}
								echo $count;
								if($count == 1){
									echo '<th><input type = "checkbox">',$data->keyData->username,"</input></th>";
								}
									
								?>
								
							</table>
						</div>
					</div>
					
					<!--total value-->
					
								
					<!--button-->
					<div class = "button_box">
						<div class = "flex">
							<form class = "flex-item">
								<a href="Edit_Order_List.php"><button type="button" class = "button">Add</button></a>
							</form>
							<form class = "flex-item">
								<button type="button" class = "button">Delete</button>
							</form>
							<form class = "flex-item">
								<a href="Edit_Order_List.php"><button type="button" class = "button">Edit</button></a>	
							</form>
						</div>
					</div>
				</div>
			</section>
		</section>
		</div>
		<!--footer-->	
		<div class="footer"> 
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../index.html">Aisles</a></li>
				<li><a href="../SnackAisle/login.html"> Login</a></li>
				<li><a href="../SignUp/signup.html"> Sign up</a></li>
				<li><a href="../BackstoreIndex.html">Backstore</a></li>
			</ul>
		</div>
	</div>
</body>
