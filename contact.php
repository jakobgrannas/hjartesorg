<?php echo ipView('_top.php')->render(); ?>

<div id="wrapper" class="wrapper menu-push">
	<?php echo ipView('_header.php'); ?>

	<main class="main clearfix">
		<article class="main__section--centered contact-main clearfix">
			<?php echo ipBlock('main')->render(); ?>
			<section class="contact__section contact-info__general">
				<?php $contactIconClasses = array('', '', ''); ?>
				<?php for($i=0; $i < 3; $i++) : ?>
				<div class="bullet">
					<div class="bullet__image <?php echo $contactIconClasses[$i] ?>"></div>
					<div class="bullet__content">
						<?php echo ipSlot('text', array('id' => 'contact-point-header' . $i, 'tag' => 'h3',
							'default' => __('Underrubrik', 'Hjartesorg', false), 'class' => 'bullet__text--primary')); ?>
						<?php echo ipSlot('text', array('id' => 'contact-point-text-' . $i, 'tag' => 'p',
							'default' => __('Text här...', 'Hjartesorg', false), 'class' => 'bullet__text--secondary')); ?>
					</div>
				</div>
				<?php endfor; ?>
			</section>
			<section class="contact__section contact-info__employees">
				<?php for($i=1; $i < 3; $i++) : ?>
					<div class="bullet">
						<?php
						$options = array(
							'id' => 'employee-bullet__image-' . $i,
							'width' => '70',
							'height'=>'70',
							'class' => 'bullet__image',
							'default' => ipThemeUrl('assets/images/child.png')
						);
						echo ipSlot('image', $options);
						?>
						<div class="bullet__content">
							<?php echo ipSlot('text', array('id' => 'contact-employee-header' . $i, 'tag' => 'h3',
								'default' => __('Medarbetarens namn', 'Hjartesorg', false), 'class' => 'bullet__text--primary')); ?>

							<a href="#" class="contact-media employee__phonenumber">
							<?php echo ipSlot('text', array('id' => 'contact-employee-phone-' . $i, 'tag' => 'span',
								'default' => __('Telefonnummer', 'Hjartesorg', false), 'class' => 'inner-text')); ?>
							</a>
							<a href="#" class="contact-media employee__email">
							<?php echo ipSlot('text', array('id' => 'contact-employee-email-' . $i, 'tag' => 'span',
								'default' => __('E-post', 'Hjartesorg', false), 'class' => 'inner-text')); ?>
							</a>
						</div>
					</div>
				<?php endfor; ?>
			</section>
		</article>

		<aside class="main__section side-info send-email-section">
			<div class="section--centered clearfix">
				<?php echo ipSlot('text', array('id' => 'send-email-header', 'tag' => 'h2',
					'default' => __('Rubrik', 'Hjartesorg', false), 'class' => 'main__h2')); ?>

				<?php echo ipSlot('sendContactEmailForm'); ?>
			</div>
		</aside>

		<div class="main__section map-section">
			<?php echo ipBlock('map')->render(); ?>
		</div>

		<div class="main__section--centered like-on-facebook clearfix">
			<?php echo ipSlot('text', array('id' => 'like-on-facebook-title', 'tag' => 'h3',
				'default' => __('Vi finns på sociala medier också!', 'Hjartesorg', false), 'class' => 'subheading')); ?>

			<a href="#" class="button-facebook--filled">
				<?php echo ipSlot('text', array('id' => 'button-facebook1', 'tag' => 'span',
					'default' => __('Gilla oss på Facebook!', 'Hjartesorg', false), 'class' => 'button__text')); ?>
			</a>
		</div>
	</main>
<?php echo ipView('_footer.php')->render(); ?>
