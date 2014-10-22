<?php if(isset($type) && $type == 'testimonial') : ?>
	<h1 style="font-family: Arial, Verdana, Tahoma; font-size: 24px; color: #E24B4B">
		<?php echo __('Nytt omdöme från ', 'Hjartesorg', false); ?><?php echo isset($author) ? esc($author) : __('Anonym', 'Hjartesorg', false); ?>
	</h1>

	<p><span style="font-weight: bold;"><?php echo __('Betyg:', 'Hjartesorg', false); ?></span> <?php echo isset($rating) ? esc($rating) . '/5' : '-'; ?></p>
	<p>
		<span style="font-weight: bold;"><?php echo __('Får visas på hemsidan:', 'Hjartesorg', false); ?></span>
		<?php echo isset($allowedOnWebsite) && $allowedOnWebsite ? __('Ja', 'Hjartesorg', false) : __('Nej', 'Hjartesorg', false); ?>
	</p>

	<span style="font-weight: bold;"><?php echo __('Kommentar:', 'Hjartesorg', false); ?></span>
	<p><?php echo isset($message) ? esc($message) : '-'; ?></p>
<?php else : ?>
	<p>
		<span style="font-weight: bold;"><?php echo __('Från:', 'Hjartesorg', false); ?></span>
		<?php echo isset($author) ? esc($author) : __('Anonym', 'Hjartesorg', false); ?>
	</p>
	<p>
		<span style="font-weight: bold;"><?php echo __('E-post:', 'Hjartesorg', false); ?></span>
		<?php echo isset($email) ? esc($email) : __('Anonym', 'Hjartesorg', false); ?>
	</p>
	<span style="font-weight: bold;"><?php echo __('Meddelande:', 'Hjartesorg', false); ?></span>
	<p><?php echo isset($message) ? esc($message) : '-'; ?></p>

	<p style="font-style: italic; border-top: 1px dashed #c0c0c0; padding-top: 10px; margin-top: 10px;">
		Skickat via formulär på Hjärtesorg.se
	</p>
<?php endif; ?>