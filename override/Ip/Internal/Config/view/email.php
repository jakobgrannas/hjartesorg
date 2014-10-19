<h1 style="font-family: Arial, Verdana, Tahoma; font-size: 24px; color: #E24B4B">
	<?php echo __('Nytt omdöme från ', 'Hjartesorg', false); ?><?php echo isset($author) ? esc($author) : __('Anonym', 'Hjartesorg', false); ?>
</h1>

<p><span style="font-weight: bold;"><?php echo __('Betyg:', 'Hjartesorg', false); ?></span> <?php echo isset($rating) ? esc($rating) . '/5' : '-'; ?></p>
<p><span style="font-weight: bold;"><?php echo __('Får visas på hemsidan:', 'Hjartesorg', false); ?></span> <?php echo isset($allowedOnWebsite) && $allowedOnWebsite ? __('Ja', 'Hjartesorg', false) : __('Nej', 'Hjartesorg', false); ?></p>

<span style="font-weight: bold;"><?php echo __('Kommentar:', 'Hjartesorg', false); ?></span>
<p><?php echo isset($comment) ? esc($comment) : '-'; ?></p>