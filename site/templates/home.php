<?php snippet('header') ?>

<?php if ($page->backgroundImage()->isNotEmpty() && $image = $page->backgroundImage()->toFile()): ?>
	<div id="background-image">
		<?php 
		$srcset = '';
		$src = $image->width(1000)->url();
		for ($i = 1000; $i <= 5000; $i += 500) $srcset .= $image->width($i)->url() . ' ' . $i . 'w,';
		?>
		<img class="lazyload"  
		src="<?= $src ?>" 
		data-srcset="<?= $srcset ?>" 
		data-sizes="auto" 
		data-optimumx="1.5" 
		alt="<?= $site->title()->html() ?>" height="100%" width="100%" />
		<noscript>
			<img src="<?= $src ?>" alt="<?= $site->title()->html() ?>" width="100%" height="auto" />
		</noscript>
	</div>
<?php endif ?>

<?php if ($page->backgroundImageMobile()->isNotEmpty() && $image = $page->backgroundImageMobile()->toFile()): ?>
	<div id="background-image" class="mobile">
		<?php 
		$srcset = '';
		$src = $image->width(1000)->url();
		for ($i = 1000; $i <= 5000; $i += 500) $srcset .= $image->width($i)->url() . ' ' . $i . 'w,';
		?>
		<img class="lazyload"  
		src="<?= $src ?>" 
		data-srcset="<?= $srcset ?>" 
		data-sizes="auto" 
		data-optimumx="1.5" 
		alt="<?= $site->title()->html() ?>" height="100%" width="100%" />
		<noscript>
			<img src="<?= $src ?>" alt="<?= $site->title()->html() ?>" width="100%" height="auto" />
		</noscript>
	</div>
<?php endif ?>

<?php if ($page->text()->isNotEmpty()): ?>
	<footer id="page-text" class="marquee" data-speed="0.25">
		<?= $page->text()->kt() ?>
	</footer>
<?php endif ?>

<?php snippet('footer') ?>