<style>
.products{
	max-width: 128px;
	max-height: 128px;
}
</style>
<?php

foreach($products->result_array() as $row){
	?>

	#ID : <?php echo $row['idproduct'];?>
	<a class="pull-left" href="#">
		<img class="media-object products" src="<?php echo IMG.$row['img_url'] ;?> " alt="<?php echo $row['name'];?>">
	</a>

	<h4><?php echo $row['name'];?> - <?php echo CURRENCY." ".$row['price'];?></h4>

	<?php echo $row['description'];?>

	<?php
	if($row['quantity']>0){
		echo "<p>";
		echo "In stock";
		?>
		<form action="<?php echo URL?>index.php/cart/addtocart" method="post">
			<input type="hidden" name="id" value="<?php echo $row['idproduct'];?>"/>
			<input type="hidden" name="name" value="<?php echo $row['name'];?>"/>
			<input type="hidden" name="price" value="<?php echo $row['price'];?>"/>
			<input type="input" name="quantity" cols="3"/>
			<input type="hidden" name="action" value="addtocart"/>
			<input type="hidden" name="current_url" value="<?php echo current_url()?>"/>
			<input type="submit"  value="Add to cart"/>

		</form>
		<?php
	}else{
		echo "<p>";
		echo "out of stock";
		?>
		<form action="" method="post">
			<input type="hidden" name="action" value="addtocart"/>

			<input type="submit" disabled="disabled" value="Add to cart"/>
		</form>
		<?php
	}

	?>
</p>



<?php
}
?>