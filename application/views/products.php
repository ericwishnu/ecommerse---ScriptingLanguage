<style>
.products{
	max-width: 128px;
	max-height: 128px;
}
</style>
<?php

foreach($products->result_array() as $row){
	?>
	<div class="media">
		#ID : <?php echo $row['idproducts'];?>
		<a class="pull-left" href="#">
			<img class="media-object products" src="<?php echo IMG.$row['img_url'] ;?> " alt="<?php echo $row['name'];?>">
		</a>
		<div class="media-body">
			<h4 class="media-heading"><?php echo $row['name'];?> - <?php echo CURRENCY." ".$row['price'];?></h4>

			<?php echo $row['description'];?>

			<?php
			if($row['quantity']>0){
				echo "<p class='bg-succes'>";
				echo "In stock";
				?>
				<form action="<?php echo URL?>index.php/cart/addtocart" method="post">
					<input type="hidden" name="id" value="<?php echo $row['idproducts'];?>"/>
					<input type="hidden" name="name" value="<?php echo $row['name'];?>"/>
					<input type="hidden" name="price" value="<?php echo $row['price'];?>"/>
					<input type="input" name="quantity" cols="3">
					<input type="hidden" name="action" value="addtocart"/>
					<input type="hidden" name="current_url" value="<?php echo current_url()?>"/>
					<button class="btn btn-info " >Add to cart</button>

				</form>
				<?php
			}else{
				echo "<p class='bg-danger'>";
				echo "out of stock";
				?>
				<form action="" method="post">
					<input type="hidden" name="action" value="addtocart"/>

					<button class="btn btn-info" disabled="disabled">Add to cart</button>
				</form>
				<?php
			}

			?>
		</p>

	</div>

</div>

<?php
}
?>