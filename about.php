<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<article class="main__section--centered clearfix">
			<section class="main__article">
				<?php echo ipBlock('main')->render(); ?>
			</section>
		</article>

		<?php for($i=1; $i < 3; $i++) : ?>
		<div class="main__section employee-info">
			<section class="section--centered">
				<?php
				$options = array(
					'id' => 'employee__image-' . $i,
					'width' => '108',
					'height'=>'108',
					'class' => 'employee__image',
					'default' => ipThemeUrl('assets/images/child.png')
				);
				echo ipSlot('image', $options);
				?>

				<?php echo ipSlot('text', array('id' => 'employee__name-' . $i, 'tag' => 'h3',
					'default' => __('Namn Efternamn', 'Hjartesorg', false), 'class' => 'employee__name')); ?>

				<?php echo ipSlot('text', array('id' => 'employee__bio-' . $i, 'tag' => 'div',
					'default' => __('Text om personen här...', 'Hjartesorg', false), 'class' => 'employee__bio')); ?>

				<div class="employee__contact-info">
					<a class="employee__phonenumber contact-media">
						<?php echo ipSlot('text', array('id' => 'employee__phonenumber-' . $i, 'tag' => 'span',
							'default' => __('Telefonnummer', 'Hjartesorg', false), 'class' => 'inner-text')); ?>
					</a>
					<a class="employee__email contact-media">
						<?php echo ipSlot('text', array('id' => 'employee__email-' . $i, 'tag' => 'span',
							'default' => __('mejl@mejl.se', 'Hjartesorg', false), 'class' => 'inner-text')); ?>
					</a>
				</div>
			</section>
		</div>
		<?php endfor; ?>

		<aside class="main__section--centered like-on-facebook clearfix">
				<?php echo ipSlot('text', array('id' => 'like-on-facebook-title', 'tag' => 'h3',
					'default' => __('Vi finns på sociala medier också!', 'Hjartesorg', false), 'class' => 'subheading')); ?>

				<a href="#" class="button-facebook--filled">
					<?php echo ipSlot('text', array('id' => 'button-facebook1', 'tag' => 'span',
						'default' => __('Gilla oss på Facebook!', 'Hjartesorg', false), 'class' => 'button__text')); ?>
				</a>
		</aside>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
