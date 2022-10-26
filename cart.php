
<!DOCTYPE html>
<html>
<head>
	<title>CART</title>
	<link rel="stylesheet" type="text/css" href="./stylecart.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>
	
   <div class="CartContainer">
   	   <div class="Header">
   	   	<h3 class="Heading">Shopping Cart</h3>
   	   	<h5 class="Action">Remove all</h5>
   	</div>
	<?php
		@include 'config.php';
		$userId = explode(";",$_COOKIE["user"])[0];
		echo sprintf("<script>const userId=%d</script>",$userId);
		// $select = mysqli_query($conn, 'SELECT * FROM cart WHERE userId=3');
		$select = mysqli_query($conn, "SELECT * FROM cart where userId=".$userId);
		
		if(mysqli_num_rows($select) > 0){
		while($row = mysqli_fetch_assoc($select)) {
			$html = '
			<div id="%d" class="Cart-Items">
				<div class="image-box">
					<img src="%s" />
				</div>
				<div class="about">
					<h1 class="title">%s</h1>
				</div>
				<div class="counter">
					<div class="btnDec btn">-</div>
					<div class="count">%d</div>
					<div class="btnInc btn">+</div>
				</div>
				<div class="prices">
					<div class="amount" price="%d">₹%d</div>
					<div class="remove"><u>Remove</u></div>
				</div>
				
			</div>
			';
			echo sprintf($html,$row["productId"] ,$row["image"],$row["name"],$row["quantity"],$row["price"],$row["price"]*$row["quantity"]);

		}
		}
 	?>
   	 <hr> 
   	 <div class="checkout">
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal">Sub-Total</div>
   	 	</div>
   	 	<div class="total-amount">₹...</div>
   	 </div>
   	 <button id="checkout" class="button">Checkout</button></div>
   </div>
</body>
<script>
	const btnCheckout = document.querySelector("#checkout");
	btnCheckout.addEventListener("click",e => {
		// console.log(window.location);
		window.location = "http://localhost/quickshop/payment/payment.php";
	})
	const btnInc = document.querySelectorAll(".btnInc");
	const removeAll = document.querySelector(".Action");
	removeAll.addEventListener("click", e => {
		const data = new FormData();
		data.append("type", "removeAll");
		data.append("userId", userId);
		fetch("http://localhost/quickshop/cartHandler.php", {
				method:"POST",
				credentials: 'same-origin', 
				headers: {'X-Requested-With': 'XMLHttpRequest'},
				body: data
		}).then(e => location.reload());
	});
	const btnsRemove = document.querySelectorAll(".remove");
	const updateSubTotal = () => {
		const products = document.querySelectorAll(".Cart-Items");
		const productCount = products.length;
		let total = 0;
		products.forEach(product => {
			total += parseInt(product.querySelector(".amount").innerText.split("₹")[1]);
		})
		document.querySelector(".total-amount").innerText = "₹" + total;
	}	
	updateSubTotal();
	const updatePrice = (element,isInc) => {
		const amountElement = element.querySelector(".amount");
		const singlePrice = parseInt(amountElement.getAttribute("price"));
		console.log(singlePrice, amountElement.innerText);
		const currentPrice = amountElement.innerText.split("₹")[1];
		amountElement.innerText = "₹" +  (isInc ? parseInt(currentPrice) + singlePrice : parseInt(currentPrice) - singlePrice);
		updateSubTotal();
	}
	btnInc.forEach(btn => {
		btn.addEventListener("click", e => {
		const counter = e.target.parentElement.querySelector(".count");
		counter.innerText = parseInt(counter.innerText) + 1;

		const count = parseInt(counter.innerText);
		const data = new FormData();
		data.append("type", "updateCount");
		data.append("count", count);
		data.append("userId", userId);
		data.append("productId", e.target.parentElement.parentElement.id);

		fetch("http://localhost/quickshop/cartHandler.php", {
			method:"POST",
			credentials: 'same-origin', 
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            body: data
		});

		updatePrice(e.target.parentElement.parentElement, true);
	})
	});
	const btnDec = document.querySelectorAll(".btnDec");
	btnDec.forEach(btn => {
		btn.addEventListener("click", e => {
		const counter = e.target.parentElement.querySelector(".count");
		counter.innerText = parseInt(counter.innerText) - 1;

		const count = parseInt(counter.innerText);
		const data = new FormData();
		data.append("type", "updateCount");
		data.append("count", count);
		data.append("userId", userId);
		data.append("productId", e.target.parentElement.parentElement.id);

		fetch("http://localhost/quickshop/cartHandler.php", {
			method:"POST",
			credentials: 'same-origin', 
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            body: data
		});
		updatePrice(e.target.parentElement.parentElement, false);

	})
	});

	btnsRemove.forEach(btnRemove => {
		btnRemove.addEventListener("click",e => {
			const data = new FormData();
			data.append("type", "removeItem");
			data.append("userId", userId);
			data.append("productId", e.target.parentElement.parentElement.parentElement.id);
			fetch("http://localhost/quickshop/cartHandler.php", {
				method:"POST",
				credentials: 'same-origin', 
				headers: {'X-Requested-With': 'XMLHttpRequest'},
				body: data
			}).then(e => location.reload())
			
		});
	});
</script>
</html>


