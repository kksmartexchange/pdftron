<?php
script('smartxchangepdftron', 'script');
style('smartxchangepdftron', 'style');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('navigation/index')); ?>
		<?php print_unescaped($this->inc('settings/index')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('content/index')); ?>
			<?php echo file_get_contents('https://pdf.poli.tips/'); ?>
		</div>
	</div>
</div>

