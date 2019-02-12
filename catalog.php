<?php require "includes/config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>projectYulia</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<script src="js/script.js" defer> </script>
</head>
<body>
	<?php require "header.php" ?>
	<div class="catalog-container">
		<ul>

			<?php
			//Пагинация 
			$per_page = 6;
			$page = 1;

		if (isset($_GET['page']))
		{
		  $page = (int) $_GET['page'];
		}


		$total_count_q = mysqli_query($connection, "SELECT COUNT(`id`) AS `total_count` FROM `products`");
		$total_count = mysqli_fetch_assoc($total_count_q);
		$total_count = $total_count['total_count'];
		$total_pages = ceil($total_count / $per_page);
		if( $page <= 1 || $page > $total_pages )
		{
		  $page = 1;
		}

		$offset = ($per_page * $page) - $per_page;

		 $product = mysqli_query($connection, "SELECT * FROM `products` ORDER BY `id` ASC LIMIT $offset, $per_page");
		$product_exist = true;
		if( mysqli_num_rows($product) <= 0)
		{
		  echo 'Товаров нет!';
		$product_exist = false;
		}
		?>
	            <?php 
	while( $art = mysqli_fetch_assoc($product)  )
	               {
	                ?>
				<li><a href="">Товар №:<?php echo $art['code'] ?><br> Цена: <?php echo $art['cost']; ?>
				<?php echo "<img src='/css/project/{$art['image']}'>";?></a></li>
				<?php
			}
			?>		
		</ul>
	</div>

			<?php 
		if ($product_exist == true)
		{
		  echo '<div class="paginator" style="margin: 20px;">';
		  if ( $page > 1)
		{
		  echo '<a href="/catalog.php?page='.($page - 1).'">&laquo; Прошлая страница</a>';
		}
		if ($page < $total_pages)
		{
		  echo '<a href="/catalog.php?page='.($page + 1).'">Следующая страница &raquo </a>';
		}
		echo '</div>';

		}
		?>

	<?php require "footer.php" ?>
</body>
</html>