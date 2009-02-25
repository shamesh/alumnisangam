<?php slot('header')?>
<ul >
	<li>
		<?php echo link_to('HOME', 'home/show?page='.$menu->getPageId())?> 
	</li>
	<?php foreach ($menus as $menu): ?>
		
		<?php $c=new Criteria();
					$c->add(MenuPeer::PARENT_ID,$menu->getId());
					$childmenus=MenuPeer::doSelect($c);
		?>	
		<?php if($menu->getPage() || sizeof($childmenus)<=0): ?>
			<li><?php echo link_to(strtoupper($menu->getName()), 'home/show?page='.$menu->getPageId())?></li>
		<?php else: ?>	
			<li id="childmenu"><?php echo link_to(strtoupper($menu->getName()), 'home/show?page='.$menu->getPageId())?>
				<ul>
				
				<?php foreach($childmenus as $childmenu): ?>
					<?php if($childmenu->getPage()): ?>
						<li><?php echo link_to($childmenu->getName(),'home/show?page='.$childmenu->getPage()->getId()) ?></li>
					<?php else:?>			
						<li><?php echo $childmenu->getName()?></li>
					<?php endif;?>
				<?php endforeach; ?>
				</ul>
			</li>
		<?php endif;?>
	<?php endforeach; ?>	
</ul>
<?php end_slot()?>
