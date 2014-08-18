<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $items \Ip\Menu\Item[]
 * @var $this \Ip\View
 */
?>
<?php if (!empty($items)){ ?>
	<ul <?php echo $attributesStr; ?>><?php
		foreach($items as $menuItem) {
			$css = array();
			$submenu = '';
			$target = '';
			$class = '';

			// TODO: Refactor this so that it has an actual check for a class property
			$css[] = 'menu-link';

			if($menuItem->isCurrent()) {
				$css[] = $active;
			} elseif ($menuItem->isInCurrentBreadcrumb()) {
				$css[] = $crumb;
			}
			if(sizeof($menuItem->getChildren()) > 0) {
				$css[] = $parent;
			}
			if ($menuItem->isDisabled()) {
				$href = '';
				$css[] = $disabled;
			} else {
				$href = ' href="' . escAttr($menuItem->getUrl()) . '"';
			}

			if ($menuItem->getBlank()) {
				$target = ' target="_blank"';
			}

			if ($menuItem->getChildren()) {
				$submenuData = array(
					'items' => $menuItem->getChildren(),
					'depth' => $depth + 1,
					'attributesStr' => 'class="level'.($depth+1).' ' . $children . '"',
					'view' => $view
				);
				$submenuData = array_merge($this->getVariables(), $submenuData);
				$submenu = ipView($view, $submenuData)->render();
			}

			if (!empty($css)) {
				$class = ' class="'.implode(' ', $css).'"';
			}
			?>
		<li class="menu-item">
			<a<?php echo $href; ?><?php echo $target; ?><?php echo $class; ?> title="<?php echo escAttr($menuItem->getTitle()); ?>">
				<?php echo esc($menuItem->getTitle()); ?>
			</a>
			<?php echo $submenu; ?>
			</li><?php
		} ?>
	</ul>
<?php }
