<?php
/**
 * Sample template part.
 */
 ?>
 <div class="p-6 text-white bg-black">
	<h1><?php echo 'Hello, this is sample template part';?></h1>
	<?php if ( isset( $this->vars['title'] ) ): ?>
		<h3><?php echo $this->vars['title']; ?></h3>
	<?php endif; ?>
	<p> <?php echo $this->vars['content']; ?></p>
 </div>