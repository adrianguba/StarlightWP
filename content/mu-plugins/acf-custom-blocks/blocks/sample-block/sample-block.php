<?php
/**
 * Sample Block
 */
?>
<div>
	<?php 
	get_extended_template_part( 'sample', 'template-part', [
		'title'   => get_field( 'title' ),
		'content' => 'This is the test, component included in block'
	] );
	?>
</div>
