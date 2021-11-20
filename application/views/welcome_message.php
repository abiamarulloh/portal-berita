<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
	<style>
		* {
			font-family: 'Poppins', sans-serif;	
			margin: 0;
			padding: 0;
		}

		body	{
			display: flex;
			justify-content: space-around;
		}

		ul li {
			list-style: none;
		}
	</style>
</head>
<body>
	<div>
		<h3>Data Siswa</h3>
		<p>NIM: 2010081</p>
		<p>Nama: Abi Amarulloh</p>
	</div>


	<div>
		<h3>Product</h3>
		<ul>
			<?php foreach ($products as $product): ?>
				<pre>
					<li>Product      	= <?= $product["nama_product"]; ?></li>
					<li>Harga Jual  	= <?= $product["harga"]; ?></li>
					<li>Jumlah Beli  	= <?= $product["jumlah_beli"]; ?></li>
					<li>Bayar  		= <?= $product["bayar"]; ?></li>
					<li>==================</li>
				</pre>
				<?php endforeach; ?>

		</ul>
	</div>
</body>
</html>