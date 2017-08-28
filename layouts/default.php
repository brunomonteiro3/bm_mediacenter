<?php
	the_component('components/head');
?>
<div id="ui" class="ui ui-aside-none">	
<?php
	the_component('elements/header');
	echo $args['content'];
	the_component('elements/footer');
	the_component('components/foot');
?>
</div>