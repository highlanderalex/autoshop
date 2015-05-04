<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>AutoMagazin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<script type="text/javascript" src="js/myscript.js"></script>
</head>

<body>
<div id="container">
	<div id="header"></div>
	<div id="main">
		<div id="mn" style="float:left;width:200px;margin:0 auto;margin-top:10px">
			<div class="menu"><p align="center"><a href="index.php?view=index">Main</a></p></div>
			<?php
				foreach($this->categories as $item):
			?>
			<div class="menu"><p align="center"><a href="index.php?view=category&id=<?=$item['idCat']?>"><?=$item['titleCat']?></a></p></div>
			<?php
				endforeach;
			?>
			<div id="search" align="center">
			<h4>Search</h4>
			<form action="index.php?view=search" method="post">
			<table width="190px">
			<tr>
			<td width="90px">Model</td>
			<td width="90px"><select name="model" class="search">
				<option value="320" <?=(isset($_POST['model']) && $_POST['model'] == '320') ? 'selected' : ''?>>320</option>
				<option value="330" <?=(isset($_POST['model']) && $_POST['model'] == '330') ? 'selected' : ''?>>330</option>
				<option value="520" <?=(isset($_POST['model']) && $_POST['model'] == '520') ? 'selected' : ''?>>520</option>
				<option value="E220" <?=(isset($_POST['model']) && $_POST['model'] == 'E220') ? 'selected' : ''?>>E220</option>
				<option value="E280" <?=(isset($_POST['model']) && $_POST['model'] == 'E280') ? 'selected' : ''?>>E280</option>
				<option value="E320" <?=(isset($_POST['model']) && $_POST['model'] == 'E320') ? 'selected' : ''?>>E320</option>
				<option value="S500" <?=(isset($_POST['model']) && $_POST['model'] == 'S500') ? 'selected' : ''?>>S500</option>
				<option value="GS" <?=(isset($_POST['model']) && $_POST['model'] == 'GS') ? 'selected' : ''?>>GS</option>
				<option value="RX" <?=(isset($_POST['model']) && $_POST['model'] == 'RX') ? 'selected' : ''?>>RX</option>
			</select></td></tr>
			<tr>
			<td>Color</td>
			<td><select name="color" class="search">
				<option value="white" <?=(isset($_POST['color']) && $_POST['color'] == 'white') ? 'selected' : ''?>>White</option>
				<option value="black" <?=(isset($_POST['color']) && $_POST['color'] == 'black') ? 'selected' : ''?>>Black</option>
				<option value="red" <?=(isset($_POST['color']) && $_POST['color'] == 'red') ? 'selected' : ''?>>Red</option>
			</select></td></tr>
			<tr>
			<td>Year</td>
			<td><select name="year" class="search">
			<?php
				for( $y = 2000; $y <= 2010; $y++):
			?>
				<option value="<?=$y?>" <?=(isset($_POST['year']) && $_POST['year'] == $y) ? 'selected' : ''?>><?=$y;?></option>
			<?php
				endfor;
			?>
			</select></td></tr>
			<tr>
			<td>Speed</td>
			<td><select name="speed" class="search">
			<?php
				for( $s = 150; $s <= 250; $s+=10):
			?>
				<option value="<?=$s?>" <?=(isset($_POST['speed']) && $_POST['speed'] == $s) ? 'selected' : ''?>><?=$s;?></option>
			<?php
				endfor;
			?>
			</select></td></tr>
			<tr>
			<td>Volume</td>
			<td><select name="volume" class="search">
			<?php
				for( $v = 2000; $v <= 5000; $v+=100):
			?>
				<option value="<?=$v?>" <?=(isset($_POST['volume']) && $_POST['volume'] == $v) ? 'selected' : ''?>><?=$v;?></option>
			<?php
				endfor;
			?>
			</select></td></tr>
			<tr>
			<td>Price</td>
			<td><select name="price" class="search">
			<?php
				for( $p = 15000; $p <= 40000; $p+=1000):
			?>
				<option value="<?=$p?>" <?=(isset($_POST['price']) && $_POST['price'] == $p) ? 'selected' : ''?>><?=$p;?></option>
			<?php
				endfor;
			?>
			</select></td>
			</tr></table><br />
			<input type="submit" name="search" value="Search" class="btn btn-default">
			</form>
			</div>
		</div>
		
		<div id="right_block" style="float:left;width:950px;margin:0 auto;margin-left:20px;margin-top:10px;min-height:650px;">
			<? require_once ('resources/templates/'. $view. '.php');?>
		</div>
	</div>
</div>
<div id="footer" class="clear"><p align="center">&copy; 2015 highlanderalex</p></div>
</body>
</html>
