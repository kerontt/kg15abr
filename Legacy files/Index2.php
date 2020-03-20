<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
	<link rel="stylesheet" href="../library/css/bootstrap.min.css">
	<script src="../library/js/jquery-3.2.1.min.js"></script>
	<script src="../library/js/bootstrap.js"></script>
</head>
//Style code here
<body>

//Add cart functionality class reference here


//Add cart class here

	

	    	<?php 

		    	require 'classes/products.class.php';
		    	$objProducts = new Products($conn);
		    	$Products = $objProducts->getAllProducts();
		    	foreach ($Products as $key => $Products) {
		    ?>
		  <div class="col-sm-6 col-md-3">
		    <div class="thumbnail">
		      <img src="images/<?= $Products['image']; ?>" alt="" style="width: 200px; height: 200px;">
		      <div class="caption">
		        <h3><?= $Products['title']; ?></h3>
		        <p><?= substr($Products['description'], 0, 60) . '...'; ?></p>
		        <p>
		        	<div class="row">
		        		<div class="col-sm-6 col-md-6">
		        			<strong> <span style="font-size: 18px;">&#x20b9;</span><?= number_format( $Products['price'], 2 ); ?></strong>
		        		</div>
		        		<div class="col-sm-6 col-md-6">
		        			<?php 
		        				$disButton = "";
		        				if( array_search($Products['id'], array_column($cartItems, 'pid')) !==false ) {
		        					$disButton = "disabled";
		        				}
		        			 ?>
		        			<button id="cartBtn_<?=$Products['id'];?>" <?php echo $disButton; ?> class="btn btn-success" onclick="addToCart(<?=$Products['id'];?>, this.id)" role="button">Buy Product</button>
		        		</div>
		    </div>
		  </div>
		<?php } ?>
		</div>
		<div class="row">
	    	<div class="col-md-12 text-right">
	    		<a href="cart.php" class="btn btn-success">Seats <span class="glyphicon glyphicon-play"></span></a>
	    	</div>
	    </div>
	</div>

	<div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
            Keron Goodridge
        </strong>
    </div>
</body>
<script type="text/javascript">
	function addToCart(wId, btnId) {
		
		$('#loader').show();
		$.ajax({
			url: "action.php",
			data: "wId=" + wId + "&action=add",
			method: "post"
		}).done(function(response) {
			var data = JSON.parse(response);
			$('#loader').hide();
			$('.alert').show();
			if(data.status == 0) {
				$('.alert').addClass('alert-danger');
				$('#result').html(data.msg);
			} else {
				$('.alert').addClass('alert-success');
				$('#result').html(data.msg);
				$('#'+btnId).prop('disabled',true);
				$('#itemCount').text( parseInt( $('#itemCount').text() ) + 1);
			}
			
		})
	}
</script>
</html>