<?php
	if($this->error)
	{
?>
	<div align="center"><h2><?=$this->error;?></h2></div>
<?php
	}
	else
	{
	?>
		<div class="description">
				<h2 align="center"><?=$this->auto->model?></h2>
				<p align="center"><img src="resources/img/big/<?=$this->image['image'];?>"></p>
				<p align="center">Price $<?=$this->auto->price?></p>
				<p align="center">Color:<?=$this->auto->color?> Year:<?=$this->auto->year?> Speed:<?=$this->auto->speed?> Volume:<?=$this->auto->volume?></p>
				<p align="center"><a href="index.php?view=order&id=<?=$this->idauto?>"><button class="btn btn-default">Buy</button></a></p>
		</div>
	<?php
	}
	?>

