<?php
script('pdftron', 'script');
style('pdftron', 'style');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('settings/index')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
			<?php print_unescaped($this->inc('content/index')); ?>
		</div>
	</div>
</div>

