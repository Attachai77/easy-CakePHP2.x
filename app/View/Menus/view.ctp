
<div class="row">
    <div class="col-xs-12">
		
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title"><?php  echo __('Menu'); ?></h3>
				<div class="box-tools pull-right">
	                <?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i> Edit'), array('action' => 'edit', $menu['Menu']['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
	            </div>
			</div>
			
			<div class="box-body table-responsive">
                <table id="Menus" class="table table-bordered table-striped">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Menu Name'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['menu_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Menu Icon'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['menu_icon']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Parent Menu'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($menu['ParentMenu']['id'], array('controller' => 'menus', 'action' => 'view', $menu['ParentMenu']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Is Sidebar'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['is_sidebar']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Is Topmenu'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['is_topmenu']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Has Child'); ?></strong></td>
		<td>
			<?php echo h($menu['Menu']['has_child']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"><?php echo __('Related Menus'); ?></h3>
					<div class="box-tools pull-right">
						<?php echo $this->Html->link('<i class="glyphicon glyphicon-plus"></i> '.__('New Child Menu'), array('controller' => 'menus', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>					</div><!-- /.actions -->
				</div>
				<?php if (!empty($menu['ChildMenu'])): ?>
					
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
											<th class="text-center"><?php echo __('Id'); ?></th>
		<th class="text-center"><?php echo __('Menu Name'); ?></th>
		<th class="text-center"><?php echo __('Menu Icon'); ?></th>
		<th class="text-center"><?php echo __('Parent Id'); ?></th>
		<th class="text-center"><?php echo __('Is Sidebar'); ?></th>
		<th class="text-center"><?php echo __('Is Topmenu'); ?></th>
		<th class="text-center"><?php echo __('Has Child'); ?></th>
									<th class="text-center"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($menu['ChildMenu'] as $childMenu): ?>
		<tr>
			<td class="text-center"><?php echo $childMenu['id']; ?></td>
			<td class="text-center"><?php echo $childMenu['menu_name']; ?></td>
			<td class="text-center"><?php echo $childMenu['menu_icon']; ?></td>
			<td class="text-center"><?php echo $childMenu['parent_id']; ?></td>
			<td class="text-center"><?php echo $childMenu['is_sidebar']; ?></td>
			<td class="text-center"><?php echo $childMenu['is_topmenu']; ?></td>
			<td class="text-center"><?php echo $childMenu['has_child']; ?></td>
			<td class="text-center">
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-eye-open"></i>'), array('controller' => 'menus', 'action' => 'view', $childMenu['id']), array('class' => 'btn btn-primary btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'view')); ?>
				<?php echo $this->Html->link(__('<i class="glyphicon glyphicon-pencil"></i>'), array('controller' => 'menus', 'action' => 'edit', $childMenu['id']), array('class' => 'btn btn-warning btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'edit')); ?>
				<?php echo $this->Form->postLink(__('<i class="glyphicon glyphicon-trash"></i>'), array('controller' => 'menus', 'action' => 'delete', $childMenu['id']), array('class' => 'btn btn-danger btn-xs', 'escape' => false, 'data-toggle'=>'tooltip', 'title' => 'delete'), __('Are you sure you want to delete # %s?', $childMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->

