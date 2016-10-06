<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-sm-12">
			<h2 class="post-naslov"><?=$item->naslov;?></h2>
			<div class="post-opis">
				<?=$item->opis;?>
			</div>

			<div class="post-sadrzaj">
				<?=nl2br($item->sadrzaj);?>
			</div>
		</div>
	</div>
</div>
