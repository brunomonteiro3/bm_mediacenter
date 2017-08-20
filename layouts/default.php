<?php
	the_component('components/head');
	the_component('elements/header');
?>
	<div class="container">
<?php
	echo $args['content'];
	the_component('elements/footer');
?>
	</div>
<?php
	the_component('components/foot');
?>